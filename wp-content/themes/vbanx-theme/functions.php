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

    // បន្ថែម Support សម្រាប់ Custom Logo
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
add_action( 'after_setup_theme', 'vbanx_theme_setup' );


// ២. បញ្ចូលឯកសារ CSS និង JS (ចងក្រងចូលគ្នាកុំឱ្យទើសកូដច្រើន)
function vbanx_enqueue_assets() {
    // ហៅចូល CSS
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
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
}
add_action( 'wp_enqueue_scripts', 'vbanx_enqueue_assets' );