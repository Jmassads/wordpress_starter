<?php

/**
 * Enqueue scripts and styles.
 */
function my_theme_scripts() {
    // Main Stylesheet
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0' );
    // Custom CSS
    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/child-styles.css', array(), '8.0.1');
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );