<?php

function webpack_scripts() {
	wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/dist/css/app.bundle.css', array(), '15042017' );
	// Theme stylesheet.
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/dist/js/app.bundle.js', array( 'jquery' ), '15042017', true );
}
add_action( 'wp_enqueue_scripts', 'webpack_scripts' );
