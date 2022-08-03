<?php
function my_theme_enqueue_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'script-js', get_bloginfo( 'stylesheet_directory' ) . '/js/script.js', ['jquery'], '1.0.0', false);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );