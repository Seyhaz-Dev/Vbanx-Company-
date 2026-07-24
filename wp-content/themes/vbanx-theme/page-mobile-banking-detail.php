<?php
/**
 * Template Name: Pawn Shop Detail
 * Matches the visual style of the existing VBANXCB product card
 * (white rounded card, blue logo ring, blue heading, gray body, light-blue pill badge).
 *
 * Swap the static $product array for get_field() / CPT meta when ready.
 *
 * @package vbanx-theme
 */

get_header();

$product = array(
	'logo'     => get_stylesheet_directory_uri() . '/assets/img/vbanx-logo.png',
	'title'    => 'Mobile Banking',
	'summary'  => 'OAMBanking for operational & analytical oversight, plus VBANXConsumer for customer-facing digital banking.',
	'badge'    => 'Mobile Banking',
	'features' => array(
		array(
			'name' => 'OAMBanking for operational',
			'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset\'s Body Type sheets',
		),
		array(
			'name' => 'VBANXConsumer for customer-facing digital banking',
			'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset\'s Body Type sheets',
		),
		
	),
	'branches' => array( 'Multi-branch', 'Multi-currency' ),
	'cta'      => array( 'label' => 'Request a demo', 'url' => '#contact' ),
);
?>

<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/css/detail.css' ); ?>">

<main class="pd-wrap">

	<div class="pd-hero-card">

		<div class="pd-icon">
			<img src="<?php echo esc_url( $product['logo'] ); ?>" alt="<?php echo esc_attr( $product['title'] ); ?> icon" />
		</div>

		<h1 class="pd-title">
			<?php echo esc_html( $product['title'] ); ?>
			<span><?php echo esc_html( $product['badge'] ); ?></span>
		</h1>

		<p class="pd-summary"><?php echo esc_html( $product['summary'] ); ?></p>

		<span class="pd-tag"><?php echo esc_html( $product['badge'] ); ?></span>

		<div class="pd-badge-row">
			<?php foreach ( $product['branches'] as $tag ) : ?>
			<?php endforeach; ?>
		</div>

		<a class="pd-cta" href="<?php echo esc_url( $product['cta']['url'] ); ?>">
			<?php echo esc_html( $product['cta']['label'] ); ?>
		</a>
	</div>

	<div class="pd-card pd-features-card">
		<p class="pd-features-label">What's included</p>

		<?php foreach ( $product['features'] as $f ) : ?>
			<div class="pd-feature-row">
				<span class="pd-feature-dot"></span>
				<div>
					<p class="pd-feature-name"><?php echo esc_html( $f['name'] ); ?></p>
					<p class="pd-feature-desc"><?php echo esc_html( $f['desc'] ); ?></p>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

</main>

<?php get_footer(); ?>