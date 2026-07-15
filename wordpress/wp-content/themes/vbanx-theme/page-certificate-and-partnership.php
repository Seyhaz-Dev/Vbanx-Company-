<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/partner.css">
</head>

<body>

	<div class="hero">
		<h1>Certifications &amp;<br><span>Strategic Partners</span></h1>
		<p>VBANX is an authorized IT Provider in the Securities Sector, backed by global audit networks and national banking regulators.</p>

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

	<div class="section">
		<h2>Strategic Partners</h2>
		<p class="sub">Our strategic alliances span banking infrastructure, cloud, and enterprise technology to deliver a resilient, scalable platform.</p>

		<div class="grid">

			<?php
			get_template_part('template-parts/partner-card', null, array(
				'logo' => 'http://localhost:8080/wordpress/wp-content/uploads/2026/07/cma.png',
				'tag' => 'Strategic',
				'name' => 'Cambodia Microfinance Association',
				'description' => 'Strategic partnership'
			));

			get_template_part('template-parts/partner-card', null, array(
				'logo' => 'http://localhost:8080/wordpress/wp-content/uploads/2026/07/cbc.png',
				'tag' => 'Data Bureau',
				'name' => 'CBC',
				'description' => 'Strategic partner · B2B & data bureau'
			));

			get_template_part('template-parts/partner-card', null, array(
				'logo' => 'http://localhost:8080/wordpress/wp-content/uploads/2026/07/pcg.png',
				'tag' => 'Compliance',
				'name' => 'PCG',
				'description' => 'CIFRS & national compliance partner'
			));

			get_template_part('template-parts/partner-card', null, array(
				'logo' => 'http://localhost:8080/wordpress/wp-content/uploads/2026/07/hlb.png',
				'tag' => 'Audit · #8',
				'name' => 'HLB Cambodia',
				'description' => 'CIFRS & audit partner, 8th global ranking'
			));

			get_template_part('template-parts/partner-card', null, array(
				'logo' => 'http://localhost:8080/wordpress/wp-content/uploads/2026/07/acleda.png',
				'tag' => 'B2B · No.1',
				'name' => 'ACLEDA Bank',
				'description' => '1st B2B banking strategic partner'
			));

			get_template_part('template-parts/partner-card', null, array(
				'logo' => 'http://localhost:8080/wordpress/wp-content/uploads/2026/07/pmtk.png',
				'tag' => 'Infrastructure',
				'name' => 'PMTK Technology',
				'description' => 'IT infrastructure partner'
			));
			?>

		</div>
	</div>

	<div class="section-membership"><!-- Certified Partner & Membership section -->
		<div class="section">
			<div class="section-heading-highlight">
				<h2>Certified Partner &amp; Membership</h2>
				<p class="sub">Industry memberships and certifications that underpin
					VBANX's commitment to global standards and regional
					best practices</p>
			</div>

			<div class="grid">

				<?php
				get_template_part('template-parts/partner-card', null, array(
					'logo' => 'http://localhost:8080/wordpress/wp-content/uploads/2026/07/serc.png',
					'tag' => 'SECURITIES',
					'name' => 'Securities and Exchange Regulator of Cambodia',
					'description' => 'Authorized IT provider in the securities sector'
				));

				get_template_part('template-parts/partner-card', null, array(
					'logo' => 'http://localhost:8080/wordpress/wp-content/uploads/2026/07/caft.png',
					'tag' => 'MEMBERSHIP',
					'name' => 'Cambodian Association of Finance & Technology',
					'description' => 'CAFT member'
				));

				get_template_part('template-parts/partner-card', null, array(
					'logo' => 'http://localhost:8080/wordpress/wp-content/uploads/2026/07/bni.png',
					'tag' => 'LEADERSHIP',
					'name' => 'BNI',
					'description' => 'Member & leadership team'
				));

				get_template_part('template-parts/partner-card', null, array(
					'logo' => 'http://localhost:8080/wordpress/wp-content/uploads/2026/07/acc.png',
					'tag' => 'TECHNOLOGY',
					'name' => 'Architect and Contractor Club',
					'description' => 'Technology member'
				));
				?>

			</div>
		</div>
	</div><!-- /.section-membership -->

	<!-- solution partner section -->
	<div class="section">
		<h2>Our Solution Partner</h2>
		<p class="sub">Technology and infrastructure partners that power VBANX's platform with proven, enterprise-grade solutions.</p>

	<?php get_template_part('template-parts/solution-partners'); ?>
</body>

</html>