<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'trey_fundraisingcupblog' );

/** Database username */
define( 'DB_USER', 'trey_blog' );

/** Database password */
define( 'DB_PASSWORD', 'Cii,;*vE8,@A' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mV[Ik.yQZP<y#8+JPX.ua@iuD2,JTS+X0wEkTPxNju=.En/Zm}nlFIGlW6S>cniX' );
define( 'SECURE_AUTH_KEY',  'q)Qwlb%{8aJ=9wYBUNno`-kID[Cy ZH4@q/8$b|-g8S)o:Nph`%$WiWWGeRb~X#{' );
define( 'LOGGED_IN_KEY',    'y`,Yqx^L] 07c[#woWbcL?QE~.X:/lTCYTr>fX%wu~~O]+`^KxU`9+,[F&?$w{TE' );
define( 'NONCE_KEY',        'YU8.dt[5~Dhw:!;pDHOO;.J*at)B^Oi;P:O +y^ywY`H{JA{=Fkra,cf2|o:xxsk' );
define( 'AUTH_SALT',        'acv5*/b#P8cq3y}1Pfd%WgU8rm$&Tq&8;q0uClyj{P0a^$.IECDfkLgrP]GMiIs=' );
define( 'SECURE_AUTH_SALT', '!H6w<#B7?:GJ`mRbl5Gg-+<U:u {i`]|TL<:Fj]3K0GhV/-=13~iO877LeZy(_FS' );
define( 'LOGGED_IN_SALT',   '7rzinQpy>nk!=|v(^>R+-sn<C#(dVtb;u@{4EGI5nfl0`bf;f%C9nRD>S%FT8Sms' );
define( 'NONCE_SALT',       'D*;Eh+CT5QY-#3qBlhD-s9Ctqw&*#iFR.n0~K6K0<)RPnPNQ}KNo;xOOy$&0.W~j' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
