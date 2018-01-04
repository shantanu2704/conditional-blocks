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

			add_action( 'enqueue_block_editor_assets', array( $this, 'create_block' ) );
		}
		
		/**
		 * Create Block
		 * 
		 * @since 0.0.1
		 */
		public function create_block() {
			
			$this->enqueue_editor_assets();
			
			$this->enqueue_block_assets();
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

	} // class

}// if ( !class_exists )