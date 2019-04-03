<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style(
        'theme-style',
        get_stylesheet_directory_uri() . '/style.css',
        array(),
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
