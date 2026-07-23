<?php
/**
 * Template Name: Product Detail - Core Banking
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
	'title'    => 'VBANXCB Commercial Bank',
	'summary'  => 'Full core banking for settlement, savings, term deposit, loans and cheque management with multi-branch and multi-currency support.',
	'badge'    => 'Core Banking',
	'features' => array(
		array(
			'name' => 'Settlement',
			'desc' => 'Real-time interbank and intra-branch settlement with a full audit trail.',
		),
		array(
			'name' => 'Savings',
			'desc' => 'Configurable savings products with tiered interest and auto-posting.',
		),
		array(
			'name' => 'Term Deposit',
			'desc' => 'Fixed and rolling term deposits with maturity and rollover handling.',
		),
		array(
			'name' => 'Loans',
			'desc' => 'Origination through repayment, with schedule and arrears tracking.',
		),
		array(
			'name' => 'Cheque Management',
			'desc' => 'Issuance, clearing and reconciliation across every branch ledger.',
		),
	),
	'branches' => array( 'Multi-branch', 'Multi-currency' ),
	'cta'      => array( 'label' => 'Request a demo', 'url' => '#contact' ),
);
?>

<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/css/core-banking-detail.css' ); ?>">

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
				<span class="pd-tag pd-tag-outline"><?php echo esc_html( $tag ); ?></span>
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