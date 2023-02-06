<?php

namespace Ezoic_Namespace;

abstract class Ezoic_AdTester_Inserter {
	protected $config;
	protected $page_type;

	protected function __construct( $config ) {
		$this->config = $config;

		// Figure out page type
		if (\is_front_page()) {
			$this->page_type = 'home';
		} elseif (\is_single() || \is_archive()) {
			$this->page_type = 'post';
		} elseif (\is_page()) {
			$this->page_type = 'page';
		}
	}
}
