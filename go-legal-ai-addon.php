<?php
/**
 * Plugin Name: Go Legal Ai Addon
 * Description: Go Legal Ai Addon
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      Iftekhar Rahman
 * Author URI:  https://developers.elementor.com/
 * Text Domain: go-legal-ai-addon
 * 
 * Elementor tested up to:     3.5.0
 * Elementor Pro tested up to: 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function go_legal_ai_addon() {

	// Load plugin file
	require_once( __DIR__ . '/includes/plugin.php' );

	// Run the plugin
	\Go_Legal_Ai_Addon\Plugin::instance();

}
add_action( 'plugins_loaded', 'go_legal_ai_addon' );