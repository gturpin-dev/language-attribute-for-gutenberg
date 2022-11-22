<?php 
/**
 * Plugin Name: Language Attribute for Gutenberg
 * Plugin URI: https://whodunit.fr/attribut-langue-pour-gutenberg/
 * Description: Add language attribute to the Gutenberg blocks
 * Version: 0.1
 * Author: Guillaume Turpin, Jb Audras, Whodunit Agency
 * Author URI: https://whodunit.fr/
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