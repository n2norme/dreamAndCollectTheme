<?php

// Create the Menu : 

function dreamCollect_menu(){
    register_nav_menus( array(
        'main-menu' => 'Main Menu'
    ));
}

//Hook 

add_action('init', 'dreamCollect_menu');

// Add CSS and JS : 

function dreamCollect_scripts(){
    // Bootstrap : 

    wp_enqueue_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.css', array(), '4.5.0');

    // Google Fonts : 

    wp_enqueue_style( 'googlefonts','https://fonts.googleapis.com/css2?family=Roboto&display=swap', array(), '1.0.0');

    // Main CSS : 

    wp_enqueue_style( 'style', get_stylesheet_directory_uri(  ) . '/style.css', array(), '1.0.0');
}

add_action('wp_enqueue_scripts', 'dreamCollect_scripts');

// Logo

add_theme_support( 'custom-logo' );

function dreamCollect_custom_logo_setup() {
    $defaults = array(
    'height'      => 50,
    'width'       => 100,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'dreamCollect_custom_logo_setup' );




