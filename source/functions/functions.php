<?php

add_action( 'wp_enqueue_scripts', 'billy_enqueue_scripts' );

if ( ! function_exists( 'billy_enqueue_scripts' ) ) :

/**
* Add theme styles and scripts here
*/
function billy_enqueue_scripts() {

	if ( ! is_admin() ) {
		wp_enqueue_style(
			'billy-style',
			get_bloginfo( 'stylesheet_url' )
		);
	}

}

endif; // billy_enqueue_scripts

add_action( 'after_setup_theme', 'billy_setup' );

if ( ! function_exists( 'billy_setup' ) ) :

/**
* Set up your theme here
*/
function billy_setup() {
	add_theme_support( 'post-thumbnails' );
}

endif; // billy_setup
