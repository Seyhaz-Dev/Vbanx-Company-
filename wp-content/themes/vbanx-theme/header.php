<?php
/**
 * The header for the VBANX theme.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">
       <a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <span class="mark">
        <img src="http://localhost/wordpress/wp-content/uploads/2026/07/hikhik.jpeg" alt="<?php bloginfo( 'name' ); ?> Logo" class="logo-img">
    </span>
   
</a>

        <nav class="primary-nav" id="primary-nav">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'items_wrap'     => '%3$s',
                ) );
            } else {
                vbanx_fallback_primary_menu();
            }
            ?>
        </nav>

        <div class="header-cta">
            <a href="#contact" class="btn btn-primary">Request Demo &nearr;</a>
        </div>

        <button class="nav-toggle" id="nav-toggle" aria-label="Toggle navigation" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>