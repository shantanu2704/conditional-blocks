<?php

/**
 * Conditional Blocks
 * 
 * @author Shantanu Desai <shantanu2846@gmail.com>
 * @since 0.0.1
 */

// If this file is called directly, abort.
if ( !defined( 'ABSPATH' ) ) exit();

if ( !class_exists( 'Conditional_Blocks' ) ) {

	/**
	 * Conditional Blocks
	 *
	 * @since 0.0.1
	 */
	class Conditional_Blocks {

		/**
		 * Initialise the class
		 *
		 * @since 0.0.1	
		 */
		public function init() {

			add_action( 'enqueue_block_editor_assets', array( $this, 'enqueue_editor_assets' ) );
			
			add_action( 'enqueue_block_assets', array( $this, 'enqueue_frontend_assets' ) );
			
			add_action( 'plugins_loaded', array( $this, 'register_block' ) );

		}
		
		/**
		 * Enqueue Editor Assets
		 * 
		 * Enqueue the assets on the editor side.
		 * 
		 * `wp-blocks`: includes block type registration and related functions.
		 * `wp-element`: includes the WordPress Element abstraction for describing the structure of your blocks.
		 * `wp-i18n`: To internationalize the block's text.
		 * 
		 * @since 0.0.1
		 */
		public function enqueue_editor_assets() {

			wp_enqueue_script( 'conditional_block', CB_URL . 'assets/js/block.js', array( 'wp-blocks', 'wp-i18n', 'wp-element' ) );
			
			wp_enqueue_style( 'conditional_block_editor', CB_URL . 'assets/css/editor.css', array( 'wp-blocks', 'wp-i18n', 'wp-element' ) );
		}
		
		/**
		 * Enqueue Block Assets
		 * 
		 * Enqueue the assets for the frontend
		 * 
		 * `wp-blocks`: dependency to include the css
		 * 
		 * @since 	0.0.1
		 */
		public function enqueue_frontend_assets() {
			
			wp_enqueue_style('conditional_block_frontend', CB_URL . 'assets/css/frontend.css', array('wp-blocks') );
		}
		
		/**
		 * Render conditional block
		 * 
		 * @param type $attributes
		 * 
		 * @since 0.0.1
		 */
		public function render_conditional_block( $attributes ) {
			
			print_r($attributes);
			
		}
		
		public function register_block() {
			
			register_block_type( 'cb/my-conditional-block', array(
				'render_callback' => array( $this, render_conditional_block )
			) );
		}

	}

	// class
}// if ( !class_exists )