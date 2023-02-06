<?php

namespace Ezoic_Namespace;

class Ezoic_AdTester extends Ezoic_Feature
{
	const WORDS_PER_PARAGRAPH	= 150;

	const INIT_ENDPOINT			= EZOIC_URL . '/pub/v1/wordpressintegration/v1/initialize?d=';
	const ADS_ENDPOINT			= EZOIC_URL . '/pub/v1/wordpressintegration/v1/publisherads?d=';
	const STATUS_ENDPOINT		= EZOIC_URL . '/pub/v1/wordpressintegration/v1/status?d=';
	const FORCE_GEN_ENDPOINT	= EZOIC_URL . '/pub/v1/wordpressintegration/v1/initialize?force=true&d=';
	const EXCEPTION_ENDPOINT	= EZOIC_API_URL . '/wpservice/send-error';

	private $do_insert = true;
	public $revenues = array();

	public $config;

	public function __construct() {
		// Activate feature if enabled
		// $activated = $this->enable();
		$this->is_public_enabled	= true;
		$this->is_admin_enabled		= true;

		$this->config = Ezoic_AdTester_Config::load();
	}

	/**
	 * Register admin hooks (mostly for placeholder initialization)
	 */
	public function register_admin_hooks( $loader ) {
		$loader->add_action( 'ez_after_activate', $this, 'initialize' );
	}

	/**
	 * Register public hooks (mostly for ad insertion)
	 */
	public function register_public_hooks( $loader ) {
		$loader->add_action( 'wp', $this, 'initialize_page' );
		$loader->add_action( 'wp_head', $this, 'initialize_inserter' );
		$loader->add_action( 'set_current_user', $this, 'set_no_ads_cookie' );

		if ( $this->use_html_inserter() ) {
			$loader->add_action( 'wp_head', $this, 'output_buffer_start', PHP_INT_MAX );
			$loader->add_action( 'get_footer', $this, 'output_buffer_end', 20 );
		}

		$loader->add_filter( 'the_content', $this, 'set_content_placeholder', PHP_INT_MAX );
		$loader->add_filter( 'the_excerpt', $this, 'set_excerpt_placeholder' );
		$loader->add_filter( 'widgets_init', $this, 'set_sidebar_placeholder' );
		$loader->add_action( 'wp_body_open', $this, 'set_before_content_placeholder' );
		$loader->add_action( 'wp_footer', $this, 'set_after_content_placeholder' );

		// Output debugging information
		if ( EZOIC_DEBUG ) {
			// Add debugging information
			$loader->add_action( 'ez_debug_output', $this, 'add_debugging_info' );

			// Download placeholders, if needed (can only be used every 5 minutes)
			if ( isset( $_GET[ 'ez_wp_fetch_ph' ] ) && $_GET[ 'ez_wp_fetch_ph' ] == '1' ) {
				$last_fetch = $this->config->last_placeholder_fetch;
				if ( !isset( $last_fetch ) || ( $last_fetch + 5 * 60 ) < \time() ) {
					$this->config->last_placeholder_fetch = \time();
					if ( $this->initialize_config() === false ) {
						$this->update_config();
					}
				}
			}
		}
	}

	/**
	 * Fetch placeholder definitions from the backend and populate in the local configuration
	 */
	public function initialize_config() {
		// Fetch placeholders from backend
		$publisher_ads = new Ezoic_AdTester_PublisherAds();

		$found_new_ad = false;

		// Update placeholders
		foreach ( $publisher_ads->ads as $ad ) {
			// Cannot configure Ad Picker placeholders
			// Only add new placeholder if it's not already set
			if ( 	\ez_strpos( $ad->name, 'wp_' ) !== 0
				|| 	$ad->id == ''
				|| 	( isset( $ad->isAdPicker ) && $ad->isAdPicker )
				|| 	$ad->positionType == 'bottom_floating'
				|| 	isset( $this->config->placeholders[ $ad->id ] ) ) {
				continue;
			}

			$new_placeholder = Ezoic_AdTester_Placeholder::from_pubad( $ad );
			$this->config->placeholders[ $ad->id ] = $new_placeholder;

			// Add default configuration
			foreach ( $publisher_ads->default_config as $default_config) {
				if ( $default_config[ 'name' ] == $ad->name  ) {
					$this->config->placeholder_config[] = new Ezoic_AdTester_Placeholder_Config( $default_config[ 'page_type' ], $ad->id, $default_config[ 'display' ], $default_config[ 'display_option' ], true );
				}
			}

			$found_new_ad = true;
		}

		// Get revenue values from publisher ads
		$this->revenues = $publisher_ads->revenues;
		
		if ( $found_new_ad ) {
			// Store config
			$this->update_config();
		}
	}

	/**
	 * Generated default placeholders, bypassing logic to prevent adding placeholder to existing accounts
	 */
	public function force_generate_placeholders() {
		$token = '';
		// Use auth key to send a request to initialize the domain
		$domain = Ezoic_Integration_Request_Utils::get_domain();
		$requestURL = Ezoic_AdTester::FORCE_GEN_ENDPOINT . $domain;

		try {
			// Use API Key, if available
			if ( Ezoic_Cdn::ezoic_cdn_api_key() != null ) {
				$requestURL .= '&developerKey=' . Ezoic_Cdn::ezoic_cdn_api_key();
			} else {
				$token = Ezoic_Integration_Authentication::get_token();
			}

			// Send request
			$response = \wp_remote_post( $requestURL, array(
				'method'		=> 'POST',
				'timeout'	=> 120,
				'headers'	=> array(
					'Authentication' => 'Bearer ' . $token
				),
				'body'		=> array()
			) );

			// If an error was returned, log it
			if ( \is_wp_error( $response ) ) {
				Ezoic_AdTester::log( 'Unable to force generation of placeholders, please refresh and try again' );
				return;
			}
		} catch ( \Exception $ex ) {
			// Send error to our backend
			$handler = new Ezoic_AdTester_Exception_Handler( $ex, array( 'module' => 'adtester', 'task' => 'force generate' ) );
			$handler->handle();
		}
	}

	/**
	 * Initialize HTML Element Picker
	 */
	public function initialize_inserter() {
		if ( !$this->do_insert || \count( $this->config->placeholders ) == 0 ) {
			return;
		}
	}

	/**
	 * Insert sidebar placeholders
	 */
	public function set_sidebar_placeholder() {
		if ( !$this->do_insert || \count($this->config->placeholders) == 0 ) {
			return;
		}

		try {
			$inserter = new Ezoic_AdTester_Sidebar_Inserter( $this->config );
			$inserter->insert();
		} catch ( \Exception $ex ) {
			// Send error to our backend
			$handler = new Ezoic_AdTester_Exception_Handler( $ex, array( 'module' => 'adtester', 'task' => 'sidebar insertion' ) );
			$handler->handle();
		}
	}

	/**
	 * Insert placeholders which require access to full page content
	 */
	private function set_final_content_placeholder( $content ) {
		if ( !$this->do_insert || \count($this->config->placeholders) == 0 ) {
			return $content;
		}

		try {
			// Invoke server-side HTML element inserter
			$inserter = new Ezoic_AdTester_HTML_Inserter( $this->config );
			$content = $inserter->insert_server( $content );
		} catch ( \Exception $ex ) {
			// Send error to our backend
			$handler = new Ezoic_AdTester_Exception_Handler( $ex, array( 'module' => 'adtester', 'task' => 'final content insertion' ) );
			$handler->handle();
		}

		return $content;
	}

	public function can_use_new_inserter() {
		if ( !function_exists('iconv') ) {
			return false;
		}

		return true;
	}

	/**
	 * Inserts before content placeholders
	 */
	public function set_before_content_placeholder() {
		$inserter = new Ezoic_AdTester_Page_Inserter( $this->config );

		$inserter->insert( 'before_content' );
	}

	/**
	 * Inserts after content placeholders
	 */
	public function set_after_content_placeholder() {
		$inserter = new Ezoic_AdTester_Page_Inserter( $this->config );

		$inserter->insert( 'after_content' );
	}

	/**
	 * Inserts excerpt placeholders
	 */
	private $excerpt_number = 0;
	public function set_excerpt_placeholder( $content ) {
		if ( !$this->do_insert || \count( $this->config->placeholders ) == 0 ) {
			return $content;
		}

		$this->excerpt_number++;

		try {
			$inserter = new Ezoic_AdTester_Excerpt_Inserter( $this->config, $this->excerpt_number );
			$content = $inserter->insert( $content );
		} catch ( \Exception $ex ) {
			// Send error to our backend
			$handler = new Ezoic_AdTester_Exception_Handler( $ex, array( 'module' => 'adtester', 'task' => 'excerpt insertion' ) );
			$handler->handle();
		}

		return $content;
	}

	/**
	 * Inserts in-content placeholders
	 */
	public function set_content_placeholder( $content ) {
		if ( 	!$this->do_insert
			|| 	\count( $this->config->placeholders ) == 0
			|| 	$this->user_has_ads_disabled() ) {
			return $content;
		}

		$new_content = $content;

		if ( !$this->can_use_new_inserter() ) {
			$inserter = new Ezoic_AdTester_Content_Inserter( $this->config );
			$new_content = $inserter->insert( $new_content );

			return $new_content;
		}

		// Attempt to use the new inserter, if it fails, fallback to old inserter
		try {
			$new_content = \ez_encode_unicode( $new_content );
		 	$inserter = new Ezoic_AdTester_Content_Inserter2( $this->config );

			$new_content = $inserter->insert( $new_content );
		} catch (\Exception $ex) {
			$inserter = new Ezoic_AdTester_Content_Inserter( $this->config );
			$new_content = $inserter->insert( $new_content );

			// Send error to our backend
			$handler = new Ezoic_AdTester_Exception_Handler( $ex, array( 'module' => 'adtester', 'task' => 'content insertion' ) );
			$handler->handle();
		}

		return $new_content;
	}

	/**
	 * Inserts code necessary for the HTML Element Picker
	 */
	public function initialize_page() {
		if ( isset( $_POST[ 'ez_wp_select_element' ] ) ) {
			$this->do_insert = false;

			self::log( 'element select mode' );

			// Remove admin bar
			\add_filter( 'show_admin_bar', '__return_false' );

			// Register script/css to handle element selection
			wp_enqueue_script( 'ezoic_integration', EZOIC__PLUGIN_URL . 'admin/js/ad-select-elements.js', array(), EZOIC_INTEGRATION_VERSION );
			wp_enqueue_style( 'ezoic_integration', EZOIC__PLUGIN_URL . 'admin/css/ad-select-elements.css' );
		}
	}

	/**
	 * Note the initial activation of the plugin
	 */
	public function initialize() {
		// Initialize default placeholders
		$init = new Ezoic_AdTester_Init();
		$init->initialize( $this );

		// Flush cache, if the key is present
		if ( !empty( Ezoic_Cdn::ezoic_cdn_api_key() ) ) {
			$cdn = new Ezoic_Cdn();
			$cdn->ezoic_cdn_purge( $cdn->ezoic_cdn_get_domain() );
		}

		$initialized_set = \get_option( 'ez_ad_initialized' );
		if ( !$initialized_set ) {
			\add_option( 'ez_ad_initialized', \time() );
		}
	}

	/**
	 * Begin capturing body output
	 */
	public function output_buffer_start() {
		ob_start();
	}

	/**
	 * Complete capturing HTML body and process
	 */
	public function output_buffer_end() {
		$content = ob_get_clean();

		$content = $this->set_final_content_placeholder( $content );

		echo $content;
	}

	/**
	 * Determine if the feature is enabled
	 */
	private function enable() {
		$value = \get_option( 'ez_ad_integration_enabled', 'false' );

		// If feature header is present, set option accordingly
		if ( isset( $_SERVER[ 'HTTP_X_EZOIC_WP_ADS' ] ) ) {
			$value = $_SERVER[ 'HTTP_X_EZOIC_WP_ADS' ];

			\update_option( 'ez_ad_integration_enabled', $value );
		}

		// Enable feature if needed
		$this->is_public_enabled	= $value == 'true';
		$this->is_admin_enabled		= $value == 'true';
	}

	/**
	 * Sets a cookie for the current user used to convey that no ads should be shown.
	 * Cookie is deleted if no user is logged in or if the current user is not a member
	 * of a user role that has ads disabled for them.
	 */
	public function set_no_ads_cookie() {
		$cookieName = 'x-ez-wp-noads';

		// If a user has ads disabled, set the cookie.
		if ( $this->user_has_ads_disabled() ) {
			// If the cookie doesn't exist create the cookie
			// 0 means a cookie expires at the end of the session (when the browser closes)
			if ( !isset( $_COOKIE[$cookieName] ) )
				setcookie( $cookieName, '1',  0);
		} else {
			// If the cookie exists delete the cookie by setting the expire date-time to 1 in UNIX time
			if ( isset( $_COOKIE[$cookieName] ) )
				setcookie( $cookieName, '0',  1);
		}
	}

	/**
	 * Returns if the current user is a member of a role that has ads disabled
	 *
	 * @return bool
	 */
	public function user_has_ads_disabled() {
		if ( !is_user_logged_in() ) {
			return false;
		}

		if ( 	!isset( $this->config->user_roles_with_ads_disabled )
			|| 	!isset( wp_get_current_user()->roles ) ) {
			return false;
		}

		// Make sure we compare equivalent role names
		$currentUserRoles = array_map( 'strtolower', wp_get_current_user()->roles );
		$userRolesWithAdsDisabled = array_map( 'strtolower', $this->config->user_roles_with_ads_disabled );

		// array_diff() returns the values in the first array that are not present in the second array,
		// so if array_diff() returns a shorter array then $currentUserRoles there's a match in the arrays.
		$diff = array_diff( $currentUserRoles, $userRolesWithAdsDisabled );

		return \count( $currentUserRoles ) != \count( $diff );
	}

	/**
	 * Determine if any current placeholderse require html insertion
	 */
	private function use_html_inserter() {
		$use_html_inserter = false;

		foreach ( $this->config->placeholder_config as $ph_config ) {
			if ( $ph_config->display == 'before_element' || $ph_config->display == 'after_element' ) {
				$use_html_inserter = true;
			}
		}

		return $use_html_inserter;
	}

	public function update_config() {
		self::log( 'updating configuration ' );

		Ezoic_AdTester_Config::store( $this->config );
	}

	/**
	 * Outputs general debugging information at the bottom of the page
	 */
	public function add_debugging_info( $content ) {
		global $wp_version;

		$info = '<!-- AdTester Debugging Info:' . PHP_EOL;

		try
		{
			$theme = \wp_get_theme();

			$info .= 'WordPress Version: ' . $wp_version . PHP_EOL;
			$info .= 'Ez Plugin Version: ' . EZOIC_INTEGRATION_VERSION . PHP_EOL;

			$mbstring_status = extension_loaded( 'mbstring' );
			$info .= 'Multibyte String Support: ' . $mbstring_status . PHP_EOL;

			if ( !is_null( $theme ) ) {
				$info .= 'Theme: ' . $theme->Name . ' ' . $theme->Version . PHP_EOL;
			}

			$info .= PHP_EOL;

			$info .= 'Placeholders: ' . \count( $this->config->placeholders ) . PHP_EOL;

			$info .= PHP_EOL;

			$info .= 'Is page: ' . \is_page() . PHP_EOL;
			$info .= 'Is single (post): ' . \is_single() . PHP_EOL;
			$info .= 'Is singular: ' . \is_singular() . PHP_EOL;
			$info .= 'Is front page: ' . \is_front_page() . PHP_EOL;
			$info .= 'Is category: ' . \is_category() . PHP_EOL;
			$info .= 'Is archive: ' . \is_archive() . PHP_EOL;

			$taxonomy = \get_queried_object();
			if ( !is_null( $taxonomy ) && !is_null( $taxonomy->post_type ) ) {
				$info .= 'Taxonomy: ' . $taxonomy->post_type . PHP_EOL;
			}

         $sidebars = \get_option( 'sidebars_widgets' );
         if ( !is_null( $sidebars ) ) {
            $info .= 'Sidebars: ' . \implode( ', ', \array_keys( $sidebars ) );
         }

			$info .= PHP_EOL . PHP_EOL;

			$info .= 'Config:' . PHP_EOL;
			$info .= print_r( $this->config, true );

			$info .= PHP_EOL . PHP_EOL;
		} catch (\Exception $exp ) {
			$info = 'Error fetching debug data: ' . $exp;
		}

		$info .= '-->';

		$info .= PHP_EOL . PHP_EOL;

		echo $info;
	}

	public static function log($str) {
		error_log( '[ adtester ] ' . $str );
	}
}
