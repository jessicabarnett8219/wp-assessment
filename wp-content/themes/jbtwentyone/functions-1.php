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

function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );
