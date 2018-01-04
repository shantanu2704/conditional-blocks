<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the
 * plugin admin area. This file also includes all of the dependencies used by
 * the plugin, registers the activation and deactivation functions, and defines
 * a function that starts the plugin.
 *
 * @since             0.0.1
 * @package	conditional-blocks
 *
 * @wordpress-plugin
 * 
 * Plugin Name: Conditional Blocks
 * Description: Add conditional Gutenberg blocks
 * Version: 0.0.1
 * Author: Shantanu Desai
 * Author URI:  www.github.com/shantanu2704
 * Text Domain: conditional-blocks
 * Domain Path: /languages
 * License: GPL2	
 */

// If this file is called directly, abort.
if ( !defined( 'ABSPATH' ) ) exit();

if ( !defined( 'CB_PATH' ) ) {
	/**
	 * Path to the plugin directory.
	 *
	 * @since 0.0.1
	 */
	define( 'CB_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );
}

if ( !defined( 'CB_URL' ) ) {
	/**
	 * URL to the plugin directory.
	 *
	 * @since 0.0.1
	 */
	define( 'CB_URL', trailingslashit( plugin_dir_url(  __FILE__ ) ) );
}

/**
 * The core plugin class
 */
require_once CB_PATH . 'includes/class-conditional-blocks.php';

$tsv = new Conditional_Blocks();
$tsv->init();
