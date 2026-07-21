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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">
        <div class="site-logo">
            <?php 
            if ( has_custom_logo() ) {
                the_custom_logo();
            } else {
                $fallback_logo_url = 'http://localhost/wordpress/wp-content/uploads/2026/07/hikhik.jpeg';
                ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link">
                    <img src="<?php echo esc_url( $fallback_logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?> Logo" class="logo-img">
                </a>
                <?php
            }
            ?>
        </div>

        <div class="mobile-menu-overlay" id="mobileMenu">
            <nav class="primary-nav" id="primary-nav">
                <?php
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'items_wrap'     => '%3$s',
                    ) );
                }
                ?>
            </nav>
        </div>

        <div class="header-cta">
            <a href="#contact" class="btn btn-primary">Request Demo &nearr;</a>
        </div>

        <button class="nav-toggle" id="nav-toggle" aria-label="Toggle navigation" aria-controls="primary-nav" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {

    // =========================
    // Header Scroll Effect
    // =========================
    const header = document.querySelector('.site-header');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // =========================
    // Mobile Menu Toggle
    // =========================
    const navToggle = document.getElementById('nav-toggle');
    const mobileMenu = document.getElementById('mobileMenu');

    if (navToggle && mobileMenu) {
        navToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            navToggle.classList.toggle('active');
            mobileMenu.classList.toggle('active');

            const isOpen = mobileMenu.classList.contains('active');
            navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');

            if (isOpen) {
                navToggle.innerHTML = '<i class="fa-solid fa-xmark" style="font-size:22px;color:#000;display:block;line-height:1;"></i>';
                navToggle.style.width = 'auto';
                navToggle.style.height = 'auto';
            } else {
                navToggle.innerHTML = '<span></span><span></span><span></span>';
                navToggle.style.width = '26px';
                navToggle.style.height = '18px';
            }
        });
    }

    // =========================
    // Mobile Submenu
    // =========================
    document.querySelectorAll('.menu-item-has-children > a').forEach(link => {
        link.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                e.stopPropagation();

                const parentLi = this.parentElement;

                document.querySelectorAll('.menu-item-has-children').forEach(li => {
                    if (li !== parentLi) {
                        li.classList.remove('submenu-active');
                    }
                });

                parentLi.classList.toggle('submenu-active');
            }
        });
    });

    // =========================
    // Close Mobile Menu
    // =========================
    window.addEventListener('click', function(e) {
        if (mobileMenu && mobileMenu.classList.contains('active')) {
            if (!mobileMenu.contains(e.target) && !navToggle.contains(e.target)) {

                navToggle.classList.remove('active');
                mobileMenu.classList.remove('active');
                navToggle.setAttribute('aria-expanded', 'false');

                navToggle.innerHTML = '<span></span><span></span><span></span>';
                navToggle.style.width = '26px';
                navToggle.style.height = '18px';

                document.querySelectorAll('.menu-item-has-children').forEach(li => {
                    li.classList.remove('submenu-active');
                });
            }
        }
    });

});
</script>

<?php wp_footer(); ?>
</body>
</html>