<?php

/**
 * Template Name: PartnerShips
 *
 * Reads every field from the single "PartnerShips" ACF field group,
 * using the exact field names as built in wp-admin (em-dash convention,
 * e.g. strategic_1_—_logo, certified_2_—_name, solution_3_—_description).
 */

/**
 * Some Image fields may be set to "Image URL" (string) and others left on
 * the ACF default "Image Array" (array with a 'url' key) — this normalizes
 * either format to a plain URL string so esc_url() never receives an array
 * and fatally errors.
 */
function vbx_image_url( $field ) {
	if ( is_array( $field ) && isset( $field['url'] ) ) {
		return $field['url'];
	}
	if ( is_string( $field ) ) {
		return $field;
	}
	return '';
}

/**
 * Renders one partner card.
 */
function vbx_partner_card($args = [])
{
	$args = wp_parse_args($args, [
		'logo'        => '',
		'name'        => '',
		'tag'         => '',
		'description' => '',
	]);

	$logo_url = vbx_image_url( $args['logo'] );
?>
	<div class="card">

		<div class="card-top">
			<svg viewBox="0 0 300 30" preserveAspectRatio="none">
				<path d="M0 15 Q25 5 50 15 T100 15 T150 15 T200 15 T250 15 T300 15 V30 H0 Z"
					fill="rgba(255,255,255,.15)" />
			</svg>
		</div>

		<div class="card-body">

			<div class="logo">
				<?php if ( $logo_url ) : ?>
					<img src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr($args['name']); ?>">
				<?php endif; ?>
			</div>

			<span class="tag">
				<?php echo esc_html($args['tag']); ?>
			</span>

			<p class="name">
				<?php echo esc_html($args['name']); ?>
			</p>

			<p class="desc">
				<?php echo esc_html($args['description']); ?>
			</p>

			<div class="divider"></div>

			<div class="verified">
				<svg viewBox="0 0 24 24">
					<path d="M12 2 4 5v6c0 5 3.4 8.7 8 11 4.6-2.3 8-6 8-11V5l-8-3Z" />
					<path d="M8.5 12l2.5 2.5 4.5-4.5" />
				</svg>
				VERIFIED
			</div>

		</div>

	</div>
<?php
}

get_header();

// ---------- Hero ----------
$hero_title_main   = get_field( 'hero_title_main' ) ?: 'Certifications &';
$hero_title_accent = get_field( 'hero_title_accent' ) ?: 'Strategic Partners';
$hero_description  = get_field( 'hero_description' ) ?: 'VBANX is an authorized IT Provider in the Securities Sector, backed by global audit networks and national banking regulators.';
$hero_bg_image     = vbx_image_url( get_field( 'hero_background_image' ) ); // optional, falls back to CSS default if empty

// ---------- Section headings ----------
$strategic_heading  = get_field( 'strategic_partners_—_heading' ) ?: 'Strategic Partners';
$strategic_subtext  = get_field( 'strategic_partners_—_subtext' ) ?: 'Our strategic alliances span banking infrastructure, cloud, and enterprise technology to deliver a resilient, scalable platform.';
$certified_heading  = get_field( 'certified_partner_&_membership_—_heading' ) ?: 'Certified Partner & Membership';
$certified_subtext  = get_field( 'certified_partner_&_membership_—_subtext' ) ?: "Industry memberships and certifications that underpin VBANX's commitment to global standards and regional best practices";
$solution_heading   = get_field( 'solution_partner_—_heading' ) ?: 'Our Solution Partner';
$solution_subtext   = get_field( 'solution_partner_—_subtext' ) ?: "Technology and infrastructure partners that power VBANX's platform with proven, enterprise-grade solutions.";
?>

<div class="vbx-certifications-page">

	<div class="hero"<?php if ( $hero_bg_image ) : ?> style="background-image: linear-gradient(100deg, rgba(10, 15, 35, 0.92) 30%, rgba(10, 15, 35, 0.55) 65%, rgba(10, 15, 35, 0.25) 100%), url('<?php echo esc_url( $hero_bg_image ); ?>');"<?php endif; ?>>
		<h1><?php echo esc_html( $hero_title_main ); ?><br><span><?php echo esc_html( $hero_title_accent ); ?></span></h1>
		<p><?php echo esc_html( $hero_description ); ?></p>

		<div class="stats">

			<?php
			$icons = array(
				'shield'  => '<path d="M12 2 4 5v6c0 5 3.4 8.7 8 11 4.6-2.3 8-6 8-11V5l-8-3Z" /><path d="M8.5 12l2.5 2.5 4.5-4.5" />',
				'people'  => '<circle cx="9" cy="8" r="3.5" /><path d="M2.5 20c0-3.6 2.9-6.5 6.5-6.5s6.5 2.9 6.5 6.5" /><circle cx="17" cy="9" r="3" /><path d="M15.5 13.2c2.9.5 5 2.9 5 6.8" />',
				'headset' => '<path d="M4 13v-1a8 8 0 0 1 16 0v1" /><rect x="3" y="13" width="4" height="6" rx="1.5" /><rect x="17" y="13" width="4" height="6" rx="1.5" /><path d="M19 19v1a3 3 0 0 1-3 3h-3" />',
			);

			$stats = array(
				array('icon' => 'shield',  'number' => get_field('stat_1_number'), 'label' => get_field('stat_1_label')),
				array('icon' => 'people',  'number' => get_field('stat_2_number'), 'label' => get_field('stat_2_label')),
				array('icon' => 'shield',  'number' => get_field('stat_3_number'), 'label' => get_field('stat_3_label')),
				array('icon' => 'headset', 'number' => get_field('stat_4_number'), 'label' => get_field('stat_4_label')),
			);

			foreach ($stats as $stat) :
			?>
				<div class="badge">
					<div class="icon-circle">
						<svg viewBox="0 0 24 24">
							<?php echo $icons[$stat['icon']]; ?>
						</svg>
					</div>
					<div class="badge-text">
						<p class="num"><?php echo esc_html($stat['number']); ?></p>
						<p class="label"><?php echo esc_html($stat['label']); ?></p>
					</div>
				</div>
			<?php endforeach; ?>

		</div>
	</div>

	<!-- ============ Strategic Partners ============ -->
	<div class="section">
		<h2><?php echo esc_html( $strategic_heading ); ?></h2>
		<p class="sub"><?php echo esc_html( $strategic_subtext ); ?></p>

		<div class="grid">
			<?php
			// Reads strategic_{i}_—_logo/tag/name/description for i = 1..6
			for ( $i = 1; $i <= 6; $i++ ) {
				$name = get_field( "strategic_{$i}_—_name" );
				if ( ! $name ) {
					continue; // skip empty slots
				}

				vbx_partner_card(array(
					'logo'        => get_field( "strategic_{$i}_—_logo" ),
					'tag'         => get_field( "strategic_{$i}_—_tag" ),
					'name'        => $name,
					'description' => get_field( "strategic_{$i}_—_description" ),
				));
			}
			?>
		</div>
	</div>

	<!-- ============ Certified Partner & Membership ============ -->
	<div class="section-membership">
		<div class="section">
			<div class="section-heading-highlight">
				<h2><?php echo esc_html( $certified_heading ); ?></h2>
				<p class="sub"><?php echo esc_html( $certified_subtext ); ?></p>
			</div>

			<div class="grid">
				<?php
				// Reads certified_{i}_—_logo/tag/name/description for i = 1..4
				for ( $i = 1; $i <= 4; $i++ ) {
					$name = get_field( "certified_{$i}_—_name" );
					if ( ! $name ) {
						continue;
					}

					vbx_partner_card(array(
						'logo'        => get_field( "certified_{$i}_—_logo" ),
						'tag'         => get_field( "certified_{$i}_—_tag" ),
						'name'        => $name,
						'description' => get_field( "certified_{$i}_—_description" ),
					));
				}
				?>
			</div>
		</div>
	</div><!-- /.section-membership -->

	<!-- ============ Solution Partners ============ -->
	<div class="section-solution">
		<div class="section">
			<h2><?php echo esc_html( $solution_heading ); ?></h2>
			<p class="sub"><?php echo esc_html( $solution_subtext ); ?></p>

			<div class="container">
				<div class="solution-grid">

					<?php
					// Reads solution_{i}_—_logo/name/tag/description for i = 1..3
					for ( $i = 1; $i <= 3; $i++ ) :
						$sp_name = get_field( "solution_{$i}_—_name" );
						if ( ! $sp_name ) {
							continue;
						}
						$sp_logo = vbx_image_url( get_field( "solution_{$i}_—_logo" ) );
						$sp_tag  = get_field( "solution_{$i}_—_tag" ) ?: 'SOLUTION';
						$sp_desc = get_field( "solution_{$i}_—_description" ) ?: 'Solution Partner';
					?>
						<div class="card">

							<div class="card-top">
								<svg viewBox="0 0 300 30" preserveAspectRatio="none">
									<path d="M0 15 Q25 5 50 15 T100 15 T150 15 T200 15 T250 15 T300 15 V30 H0 Z"
										fill="rgba(255,255,255,.15)" />
								</svg>
							</div>

							<div class="card-body">

								<div class="logo">
									<?php if ( $sp_logo ) : ?>
										<img src="<?php echo esc_url( $sp_logo ); ?>" alt="<?php echo esc_attr( $sp_name ); ?>">
									<?php endif; ?>
								</div>

								<span class="tag"><?php echo esc_html( $sp_tag ); ?></span>

								<p class="name"><?php echo esc_html( $sp_name ); ?></p>

								<p class="desc"><?php echo esc_html( $sp_desc ); ?></p>

								<div class="divider"></div>

								<div class="verified">
									<svg viewBox="0 0 24 24">
										<path d="M12 2 4 5v6c0 5 3.4 8.7 8 11 4.6-2.3 8-6 8-11V5l-8-3Z" />
										<path d="M8.5 12l2.5 2.5 4.5-4.5" />
									</svg>
									VERIFIED
								</div>

							</div>

						</div>
					<?php endfor; ?>

				</div>
			</div>
		</div>
	</div><!-- /.section-solution -->

</div><!-- /.vbx-certifications-page -->

<?php get_footer(); ?>