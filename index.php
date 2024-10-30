<?php
/*
Plugin Name: Interactive cursor
Plugin URI: https://nurency.com/
Description: Beautiful custom cursor for WordPress.
Author: Nurency
Author URI: https://nurency.com
Version: 1.0.0
Text Domain: interactive-cursor
Domain Path: /languages/
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Interactive_Cursor' ) ) {

	class Interactive_Cursor {

		private static $instance;

		public static function instance() {

			if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Interactive_Cursor ) ) {

				self::$instance = new Interactive_Cursor;

				self::$instance->constant();

				self::$instance->hooks();

				self::$instance->includes();

			}

			return self::$instance;
		}

		public function __clone() {

			_doing_it_wrong( __FUNCTION__, esc_html__( 'Cheatin&#8217; huh?', 'thepack' ), '1.6' );
		}

		public function __wakeup() {

			_doing_it_wrong( __FUNCTION__, esc_html__( 'Cheatin&#8217; huh?', 'thepack' ), '1.6' );
		}

		private function constant() {

			if ( ! defined( 'NURENCY_CUSTOM_CURSOR_DIR' ) ) {
				define( 'NURENCY_CUSTOM_CURSOR_DIR', plugin_dir_path( __FILE__ ) );
			}

			if ( ! defined( 'NURENCY_CUSTOM_CURSOR_URL' ) ) {
				define( 'NURENCY_CUSTOM_CURSOR_URL', plugin_dir_url( __FILE__ ) );
			}

		}

		/**
		 * Include required files
		 *
		 */

		private function includes() {

			include_once NURENCY_CUSTOM_CURSOR_DIR . 'admin/framework/codestar-framework.php';
			include_once NURENCY_CUSTOM_CURSOR_DIR . 'admin/config.php';
		}

		/**
		 * Setup the default hooks and actions
		 */

		private function hooks() {

			add_action( 'wp_enqueue_scripts', array( $this, 'scripts' ) );
			add_action( 'nd_cursor_style', array( $this, 'add_yourself_to_some_examplehook' ) );
			add_action( 'wp_footer', array( $this, 'inject_html' ) );
			add_action( 'customize_controls_enqueue_scripts', array( $this, 'customize_enqueue' ) );

			add_filter( 'nd_cursor_pro_class', array( $this, 'pro_class' ) );
			add_filter( 'nd_cursor_free', array( $this, 'pro_class' ) );
		}

		public function pro_class(){
			return false;
		}

		public function customize_enqueue() {
			wp_enqueue_style( 'custom-cursor-admin', NURENCY_CUSTOM_CURSOR_URL . 'admin/admin-style.css' );
		}

		public function add_yourself_to_some_examplehook($args) {
			$new = [
				//'style_8_pro' => 'Style Eight Pro',				
			];
			$args = array_merge($args,$new);
			return $args;
		}

		public function determine_folder(){
			
			$options = get_option( 'nurency_cursor' );
			if (mb_strpos($options['style'],'pro') !== false) {
				$path = '';
				$uri = '';
			} else {
				$path = NURENCY_CUSTOM_CURSOR_DIR;
				$uri = NURENCY_CUSTOM_CURSOR_URL;
			}
			$out = [
				'path' => $path,
				'uri' => $uri,
				'style' => $options['style'],
			];
			return $out;

		}

		public function inject_html(){
			$path = $this->determine_folder();
			include_once $path["path"] . 'style/'.$path["style"].'/html.php';
		}

		/**
		 * Load Frontend Scripts
		 *
		 */

		public function scripts() {

			$path = $this->determine_folder();
			wp_enqueue_script( 'custom-cursor', $path["uri"] . 'style/'.$path["style"].'/script.js', array( 'jquery' ),'',true );
			wp_enqueue_style( 'custom-cursor', $path["uri"] . 'style/'.$path["style"].'/style.css' );
			
		}

	}
}

function Interactive_Cursor_Initiate() {
	return Interactive_Cursor::instance();
}

Interactive_Cursor_Initiate();

