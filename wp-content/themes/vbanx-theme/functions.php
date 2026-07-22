<?php
/**
 * VBANX theme functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// ១. ចងក្រងរាល់ការ Setup Theme ទាំងអស់បញ្ចូលគ្នាក្នុង Function តែមួយ
function vbanx_theme_setup() {
    // ចុះឈ្មោះ Menu
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

    // ហៅចូល CSS សម្រាប់ទំព័រ Ecosystem
    wp_enqueue_style(
        'ecosystem-style',
        get_template_directory_uri() . '/assets/css/ecosystem.css',
        array( 'main-style' ),
        '1.0'
    );

    // ហៅចូល JS
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0',
        true
    );
    // call parnership
     wp_enqueue_style(
            'partnerships',
            get_stylesheet_directory_uri() . '/assets/css/partnerships.css',
            array(),
            '1.0'
        );
}

add_action( 'wp_enqueue_scripts', 'vbanx_enqueue_assets' );
    wp_enqueue_style(
            't24-solution-style',
            get_template_directory_uri() . '/assets/css/t24-solution.css',
            array(),
            '1.0'
        );
        wp_enqueue_style(
            'oambanking-style',
            get_template_directory_uri() . '/assets/css/oambanking.css',
            array(),
            '1.0'
        );