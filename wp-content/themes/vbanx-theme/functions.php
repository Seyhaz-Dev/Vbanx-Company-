<?php
/**
 * VBANX theme functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}


function vbanx_theme_setup() {
    
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'vbanx-theme' ),
    ) );

    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
add_action( 'after_setup_theme', 'vbanx_theme_setup' );


function vbanx_enqueue_assets() {
    wp_enqueue_style(
        'montserrat-font',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        '1.0'
    );

    wp_enqueue_style(
        'profile-style',
        get_template_directory_uri() . '/assets/css/profile.css',
        array(),
        '1.0'
    );

    wp_enqueue_style(
        'value-style',
        get_template_directory_uri() . '/assets/css/value.css',
        array(),
        '1.0'
    );

    wp_enqueue_style(
        'card-style',
        get_template_directory_uri() . '/assets/css/card.css',
        array(),
        '1.0'
    );

    wp_enqueue_style(
        'expert-style',
        get_template_directory_uri() . '/assets/css/expert.css',
        array(),
        '1.0'
    );

    wp_enqueue_style(
        'vision-mission-style',
        get_template_directory_uri() . '/assets/css/vision-mission.css',
        array(),
        '1.0'
    );

    wp_enqueue_style(
        'partnership-style',
        get_template_directory_uri() . '/assets/css/partnership.css',
        array(),
        '1.0'
    );

    if ( is_page( 'contact' ) ) {
        wp_enqueue_style(
            'contact-style',
            get_template_directory_uri() . '/assets/css/contact.css',
            array('main-style'),
            '1.0'
        );
    }

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'vbanx_enqueue_assets' );


// Enqueue Montserrat font from Google Fonts

function mytheme_enqueue_montserrat() {
    wp_enqueue_style(
        'montserrat-font',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap',
        [],
        null
    );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_montserrat' );

