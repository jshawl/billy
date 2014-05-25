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
    wp_enqueue_script( 'theme.js', get_template_directory_uri() . '/javascripts/theme.js', array('jquery'), '1.0.0', true );
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

  register_nav_menu( 'primary', 'Primary Menu' );
}

endif; // billy_setup
