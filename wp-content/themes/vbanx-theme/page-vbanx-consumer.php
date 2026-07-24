<?php
/**
 * Template Name: VBANX Consumer
 *
 * Selectable page template for the VBANX Consumer landing page.
 * Assign it to any WordPress Page via Page Attributes → Template.
 * (no site header/nav or site footer included — content only)
 *
 * Same coding style as front-page.php: the_field() printed directly
 * inline, get_field() + conditional check for images.
 */
get_header();

if ( ! defined( 'ABSPATH' ) ) exit;

$img_dir   = get_template_directory_uri() . '/assets/images';
$theme_uri = get_template_directory_uri();
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo esc_url( $theme_uri . '/assets/css/consumer.css' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<main id="main-content">

	<!-- ============ HERO ============ -->
	<?php
	$hero_bg = get_field( 'hero_bg_image' );
	if ( ! $hero_bg ) : $hero_bg = wp_get_upload_dir()['baseurl'] . '/2026/07/bgheroconsumer.png'; endif;
	?>
	<section
		class="hero"
		style="background: url('<?php echo esc_url( $hero_bg ); ?>') center center / cover no-repeat;">
		<div class="container">
			<div class="hero-copy">
				<p class="eyebrow"><?php the_field( 'eyebrow_text' ); ?></p>
				<h1>
					<span class="brand-name"><?php the_field( 'heading_brand_name' ); ?></span>
					<?php the_field( 'heading_main_text' ); ?>
				</h1>
				<p><?php the_field( 'hero_paragraph' ); ?></p>
				<a href="<?php the_field( 'hero_button_url' ); ?>" class="btn btn-primary">
					<?php the_field( 'button_text' ); ?>
				</a>
			</div>
		</div>

		<div class="hero-progress" aria-hidden="true"><span class="dot"></span></div>
	</section>

	<!-- ============ WHAT WE DO ============ -->
	<section class="what-we-do">
		<div class="container section-heading">
			<h2><?php the_field( 'wwd_heading' ); ?></h2>
			<p><?php the_field( 'wwd_subtext' ); ?></p>
		</div>

		<div class="wwd-body">
			<div class="container wwd-grid">

				<div class="wwd-cards">
					<div class="feature-card" data-reveal>
						<div class="num"><?php the_field( 'wwd_card_1_number' ); ?></div>
						<h3><?php the_field( 'wwd_card_1_title' ); ?></h3>
						<p><?php the_field( 'wwd_card_1_text' ); ?></p>
					</div>
					<div class="feature-card" data-reveal>
						<div class="num"><?php the_field( 'wwd_card_2_number' ); ?></div>
						<h3><?php the_field( 'wwd_card_2_title' ); ?></h3>
						<p><?php the_field( 'wwd_card_2_text' ); ?></p>
					</div>
					<div class="feature-card" data-reveal>
						<div class="num"><?php the_field( 'wwd_card_3_number' ); ?></div>
						<h3><?php the_field( 'wwd_card_3_title' ); ?></h3>
						<p><?php the_field( 'wwd_card_3_text' ); ?></p>
					</div>
				</div>

				<div class="phone-gallery">
					<?php $gallery_img = get_field( 'wwd_gallery_image' ); if ( $gallery_img ) : ?>
						<img src="<?php echo esc_url( $gallery_img ); ?>" alt="<?php the_field( 'wwd_gallery_alt' ); ?>">
					<?php else : ?>
						<div class="phone-gallery-fallback">
							<span><?php esc_html_e( 'Add a Phone Gallery Image in the page editor', 'vbanx-consumer' ); ?></span>
						</div>
					<?php endif; ?>
				</div>

			</div>
		</div>
	</section>

	<!-- ============ PRODUCT INTRO BAND ============ -->
	<section class="product-intro" id="products">
		<div class="container">
			<h2>
				<?php the_field( 'intro_heading_main' ); ?><span class="text-accent"><?php the_field( 'intro_heading_accent' ); ?></span>
			</h2>
			<p><?php the_field( 'intro_text' ); ?></p>
		</div>
	</section>

	<!-- ============ FEATURES GRID ============ -->
	<section class="features-band">
		<div class="container">
			<div class="features-grid">

				<div class="card-1">
					<div class="icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="12" rx="1"/><path d="M2 20h20"/></svg>
					</div>
					<h3><?php the_field( 'feature_1_title' ); ?></h3>
					<p><?php the_field( 'feature_1_text' ); ?></p>
				</div>

				<div class="card-1">
					<div class="icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l2 7h7l-5.5 4 2 7-5.5-4-5.5 4 2-7L3 9h7z"/></svg>
					</div>
					<h3><?php the_field( 'feature_2_title' ); ?></h3>
					<p><?php the_field( 'feature_2_text' ); ?></p>
				</div>

				<div class="card-1">
					<div class="icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="11" width="16" height="9" rx="1"/><path d="M8 11V7a4 4 0 018 0v4"/></svg>
					</div>
					<h3><?php the_field( 'feature_3_title' ); ?></h3>
					<p><?php the_field( 'feature_3_text' ); ?></p>
				</div>

				<div class="card-1">
					<div class="icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 4-6 8-6s8 2 8 6"/></svg>
					</div>
					<h3><?php the_field( 'feature_4_title' ); ?></h3>
					<p><?php the_field( 'feature_4_text' ); ?></p>
				</div>

				<div class="card-1">
					<div class="icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19 12a7 7 0 00-.1-1.2l2-1.5-2-3.4-2.3.9a7 7 0 00-2-1.2L14 3h-4l-.6 2.6a7 7 0 00-2 1.2l-2.3-.9-2 3.4 2 1.5A7 7 0 005 12c0 .4 0 .8.1 1.2l-2 1.5 2 3.4 2.3-.9c.6.5 1.3.9 2 1.2L10 21h4l.6-2.6a7 7 0 002-1.2l2.3.9 2-3.4-2-1.5c.1-.4.1-.8.1-1.2z"/></svg>
					</div>
					<h3><?php the_field( 'feature_5_title' ); ?></h3>
					<p><?php the_field( 'feature_5_text' ); ?></p>
				</div>

				<div class="card-1">
					<div class="icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 21h8M12 17v4M7 4h10v4a5 5 0 01-10 0V4z"/><path d="M17 5h3a3 3 0 01-3 4M7 5H4a3 3 0 003 4"/></svg>
					</div>
					<h3><?php the_field( 'feature_6_title' ); ?></h3>
					<p><?php the_field( 'feature_6_text' ); ?></p>
				</div>

			</div>
		</div>
	</section>

</main>

<?php wp_footer(); ?>
</body>
</html>
<?php get_footer();