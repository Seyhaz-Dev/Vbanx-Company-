<?php
<<<<<<< HEAD
<<<<<<< HEAD
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

=======
=======
>>>>>>> a613512 (first commit)

function vbanx_theme_setup() {

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'vbanx-theme'),
    ));

}

add_action('after_setup_theme', 'vbanx_theme_setup');
function vbanx_enqueue(){

    wp_enqueue_style(

        'main-style',

        get_template_directory_uri().'/assets/css/style.css',

        array(),

        '1.0'

    );

}

add_action('wp_enqueue_scripts','vbanx_enqueue');
<<<<<<< HEAD
>>>>>>> f1824b0 (first commit)
=======
>>>>>>> a613512 (first commit)

// Enqueue Montserrat font from Google Fonts

function mytheme_enqueue_montserrat() {
    wp_enqueue_style(
        'montserrat-font',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap',
        [],
        null
    );
}
<<<<<<< HEAD
<<<<<<< HEAD
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_montserrat' );

=======
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_montserrat' );
>>>>>>> f1824b0 (first commit)
=======
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_montserrat' );
>>>>>>> a613512 (first commit)
