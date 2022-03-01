<?php
/**
 * Plugin Name: WP Vimeo Lazyload
 * Plugin URI: https://itsmereal.com/plugins/wp-vimeo-lazyload/
 * Description: A simple plugin that converts vimeo videos to lazyload using https://github.com/the-muda-organization/vimeo-lazyload
 * Version: 1.0.0
 * Author: Al-Mamun Talukder
 * Author URI: https://itsmereal.com
 * Requires at least: 4.3
 * Tested up to: 5.9.1
 * License: GPLv2 or later
 * Text Domain: wpvimeolazy
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue Plugin Style & Script
 */
function add_wpvimeolazy_script() {
    wp_enqueue_style( 'wpvimeolazy-style', plugin_dir_url( __FILE__ ). 'assets/wpvimeolazy.css', '0.1' );
    wp_enqueue_script( 'wpvimeolazy-script', plugin_dir_url( __FILE__ ). 'assets/wpvimeolazy.js', array('jquery'), '0.1', true );
}
add_action( 'wp_enqueue_scripts', 'add_wpvimeolazy_script' );