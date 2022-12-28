<?php

// Add our child theme stylesheet to enqueue after parent
function slate_enqueue_styles(){
  wp_enqueue_style( 'slate-styles', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'slate_enqueue_styles', 99 );



// Add our custom block pattern categories
function slate_block_pattern_category() {
	register_block_pattern_category( 'slate-patterns', array(
		'label' => __( 'Slate Custom', 'slate' )
	) );
}

add_action( 'init', 'slate_block_pattern_category' );