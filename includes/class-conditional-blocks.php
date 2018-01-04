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

			add_action( 'enqueue_block_editor_assets', array( $this, 'cb_create_block' ) );
		}

	}

}