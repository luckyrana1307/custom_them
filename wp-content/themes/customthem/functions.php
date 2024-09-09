<?php

function my_theme_enqueue_styles(){
    wp_enqueue_style( 'style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','my_theme_enqueue_styles');


function my_custom_theme_setup(){
    register_nav_menus( array(
        'primary'=>__('Primary Menu','my-custom-them'),
    ));
}

add_action( 'after_setup_theme','my_custom_theme_setup');


function my_theme_enqueue_assets() {
    // Enqueue CSS
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css' );
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css' );

    // Enqueue JS
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), null, true );
    
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true );
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/main.js');


}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_assets' );
