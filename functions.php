<?php

// Child Theme setup
function slate_setup() {

	// Enqueue editor styles.
	add_editor_style( get_stylesheet_directory_uri() . '/style.css' );
	
}
add_action( 'after_setup_theme', 'slate_setup', 99 );



// Add our child theme stylesheet to enqueue after parent
function slate_enqueue_styles(){
  wp_enqueue_style( 'slate-styles', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'slate_enqueue_styles', 99 );



// Add our custom block pattern categories
function slate_block_pattern_category() {
	register_block_pattern_category( 'slate-patterns', array(
		'label' => __( 'Custom Slate Patterns', 'slate' )
	) );
}

add_action( 'init', 'slate_block_pattern_category', 5 );



/**
 * Enqueue editor JS file for Gutenberg mods.
 *
 * @since 0.0.1
 */
function slate_blocktheme_gutenberg_styles() {
  wp_enqueue_script( 
		'slate-editor-script', 
		get_stylesheet_directory_uri() . '/scripts/editor.js', 
		array(), 
		wp_get_theme( 'slate' )->get( 'Version' ), 
		true 
	);
}
add_action( 'enqueue_block_editor_assets', 'slate_blocktheme_gutenberg_styles', 99 );