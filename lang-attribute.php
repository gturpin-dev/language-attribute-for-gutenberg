<?php 
/**
 * Plugin Name: Lang Attribute for the Block Editor
 * Plugin URI: https://whodunit.fr/attribut-lang-pour-gutenberg-plugin
 * Description: Add lang attribute to the text formatting toolbar in the block editor.
 * Version: 0.1
 * Author: Guillaume Turpin, Jb Audras, Whodunit Agency
 * Author URI: https://whodunit.fr
 * text-domain: lang-attribute
 */

add_action( 'enqueue_block_editor_assets', function() {
	wp_enqueue_script( 'lang-attribute',
		plugins_url( 'build/index.js', __FILE__ ),
		[],
		filemtime( plugin_dir_path( __FILE__ ) . 'build/index.js' ),
		true
	);

	wp_enqueue_style( 'lang-attribute',
		plugins_url( 'build/index.css', __FILE__ ),
		[],
		filemtime( plugin_dir_path( __FILE__ ) . 'build/index.css' )
	);
} );