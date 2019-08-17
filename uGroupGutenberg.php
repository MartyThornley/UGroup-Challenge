<?php
/**
 * uGroupGutenberg class 
 */
class uGroupGutenberg {

    /**
	 * Plugin constructor.
	 */
	public function __construct() {
		/**
		 * Hooks
		 */
		add_action( 'enqueue_block_assets', 	[$this, 'ugroup_gutenberg_scripts'] );
		add_action( 'plugins_loaded', 			[$this, 'ugroup_register_blocks'] );
	}

	/**
	 * Enqueue editor JavaScript and CSS
	 */
	public function ugroup_gutenberg_scripts() {
		$blockPath = '/dist/block.js';
		$stylePath = '/dist/block.css';

		// Enqueue the bundled block JS file
		wp_enqueue_script(
			'ugroup-gutenberg-block-js',
			plugins_url( $blockPath, __FILE__ ),
			[ 'wp-i18n', 'wp-blocks', 'wp-edit-post', 'wp-element', 'wp-editor', 'wp-components', 'wp-data', 'wp-plugins', 'wp-edit-post', 'wp-api' ],
			filemtime( plugin_dir_path(__FILE__) . $blockPath )
		);

		// Enqueue frontend and editor block styles
		wp_enqueue_style(
			'ugroup-gutenberg-block-css',
			plugins_url( $stylePath, __FILE__ ),
			'',
			filemtime( plugin_dir_path(__FILE__) . $stylePath )
		);

	}

	/**
	 * Register Gutenberg Blocks
	 */
	public function ugroup_register_blocks() {
		register_block_type(
			'ugroup/custom-background-text', array(
				'attributes'	  => array(
					'text'	 => array(
						'type' => 'string',
					),
					'background_color' => array(
						'type' => 'string',
						'default' => 'red'
					),
					'block_style'	=> array(
						'selector'	=> 'div',
						'source' => 'attribute',
						'attribute' =>'style'
					)
				),
			)
		);
	}

}