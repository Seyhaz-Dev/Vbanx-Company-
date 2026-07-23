<?php

/**
 * VBANX theme functions and definitions
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// ១. ចងក្រងរាល់ការ Setup Theme ទាំងអស់បញ្ចូលគ្នាក្នុង Function តែមួយ
function vbanx_theme_setup()
{
    // ចុះឈ្មោះ Menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'vbanx-theme'),
    ));

    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'vbanx_theme_setup');


function vbanx_enqueue_assets()
{
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
        array('main-style'),
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
        'partnerships-style',
        get_stylesheet_directory_uri() . '/assets/css/partnerships.css',
        array(),
        '1.0'
    );

    // call profile
    wp_enqueue_style(
        'profile-style',
        get_stylesheet_directory_uri() . '/assets/css/profile.css',
        array(),
        '1.0'
    );

    // call card
    wp_enqueue_style(
        'card-style',
        get_stylesheet_directory_uri() . '/assets/css/card.css',
        array(),
        '1.0'
    );

    // call expert
    wp_enqueue_style(
        'expert-style',
        get_stylesheet_directory_uri() . '/assets/css/expert.css',
        array(),
        '1.0'
    );

    // call value
    wp_enqueue_style(
        'value-style',
        get_stylesheet_directory_uri() . '/assets/css/value.css',
        array(),
        '1.0'
    );

    // call strategic component
    wp_enqueue_style(
        'strategic-style',
        get_stylesheet_directory_uri() . '/assets/css/strategic.css',
        array(),
        '1.0'
    );

    // call membership component
    wp_enqueue_style(
        'membership-style',
        get_stylesheet_directory_uri() . '/assets/css/membership.css',
        array(),
        '1.0'
    );

     // call solution component
    wp_enqueue_style(
        'solution-style',
        get_stylesheet_directory_uri() . '/assets/css/membership.css',
        array(),
        '1.0'
    );

      // call table component
    wp_enqueue_style(
        'statistics-table-style',
        get_stylesheet_directory_uri() . '/assets/css/statistics-table.css',
        array(),
        '1.0'
    );
}

add_action('wp_enqueue_scripts', 'vbanx_enqueue_assets');


// Enqueue Montserrat font from Google Fonts

function mytheme_enqueue_montserrat()
{
    wp_enqueue_style(
        'montserrat-font',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap',
        [],
        null
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_montserrat');
