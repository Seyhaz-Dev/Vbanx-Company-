<?php

/**
 * Template Name: PartnerShips
 *
 * Fully self-contained version — CSS is inlined in <style>,
 * and partner cards are rendered via a local helper function
 * instead of get_template_part(), so everything lives in this one file.
 */

/**
 * Renders one partner card.
 * Keeps the markup in a single place so we don't repeat it 13 times.
 */
function vbx_partner_card($args = [])
{
	$args = wp_parse_args($args, [
		'logo'        => '',
		'name'        => '',
		'tag'         => '',
		'description' => '',
	]);
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
				<img src="<?php echo esc_url($args['logo']); ?>" alt="<?php echo esc_attr($args['name']); ?>">
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
?>

<style>
	:root {
		--bg: #ffffff;
		--bg-soft: #f6f8fc;
		--surface: #ffffff;
		--border-soft: #e4e8f2;
		--ink: #101828;
		--ink-soft: #5b6472;
		--text-dim: #5b6472;

		--blue-accent: #01319B;
		--blue-bright: #2f7cf6;
		--blue-soft: #eaf1ff;
		--navy-700: #0a1330;
		--navy-800: #ffffff;
		--navy-900: #f6f8fc;
		--navy-950: #ffffff;

		--dark-navy-1: #0a1330;
		--dark-navy-2: #132a63;
		--dark-navy-ink: #ffffff;
		--dark-navy-ink-soft: rgba(255, 255, 255, 0.72);
		--dark-navy-border: rgba(255, 255, 255, 0.18);

		--cyan: #22d3ee;
		--orange: #f2932e;
		--white: #ffffff;

		/* mapped aliases so the rest of the stylesheet below still works */
		--vbx-navy: var(--dark-navy-1);
		--vbx-navy-dark: var(--dark-navy-1);
		--vbx-gold: var(--orange);
		--vbx-gold-light: var(--orange);
		--vbx-heading-blue: var(--blue-accent);
		--vbx-ink: var(--ink);
		--vbx-muted: var(--ink-soft);
		--vbx-bg-tint: var(--bg-soft);
		--vbx-border: var(--border-soft);
		--vbx-font-display: 'Poppins', sans-serif;
		--vbx-font-body: 'Inter', sans-serif;
	}

	body {
		margin: 0;
		font-family: 'Poppins', 'Inter', sans-serif;
		overflow-x: hidden;
		background: var(--bg-soft);
	}

	* {
		box-sizing: border-box;
	}

	.vbx-certifications-page {
		font-family: var(--vbx-font-body);
		color: var(--vbx-ink);
	}

	.vbx-container {
		max-width: 1200px;
		margin: 0 auto;
		padding: 0 24px;
	}

	/* ---------- Hero ---------- */
	.hero {
		position: relative;
		min-height: 420px;
		padding: 70px 60px;
		background:
			linear-gradient(100deg, rgba(10, 15, 35, 0.92) 30%, rgba(10, 15, 35, 0.55) 65%, rgba(10, 15, 35, 0.25) 100%),
			url('http://localhost:8080/Vbanx-Company-/wp-content/uploads/2026/07/partner-vbanx.png') center/cover no-repeat,
			var(--dark-navy-1);
		color: #fff;
		display: flex;
		flex-direction: column;
		justify-content: center;
	}

	.hero h1 {
		font-size: 42px;
		font-weight: 700;
		margin: 0 0 6px;
		line-height: 1.2;
	}

	.hero h1 span {
		color: var(--orange);
	}

	.hero p {
		max-width: 480px;
		color: #c9cdd8;
		font-size: 15px;
		line-height: 1.6;
		margin: 0 0 30px;
	}

	.stats {
		display: flex;
		align-items: center;
		background: rgba(255, 255, 255, 0.06);
		border: 1px solid rgba(255, 255, 255, 0.12);
		border-radius: 12px;
		padding: 24px 28px;
		max-width: 560px;
		margin-top: 20px;
	}

	.badge {
		display: flex;
		flex-direction: column;
		align-items: center;
		text-align: center;
		gap: 10px;
		flex: 1;
		padding: 0 16px;
	}

	.badge+.badge {
		border-left: 1px solid rgba(255, 255, 255, 0.12);
	}

	.icon-circle {
		flex: 0 0 auto;
		width: 36px;
		height: 36px;
		border-radius: 50%;
		background: var(--orange);
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.icon-circle svg {
		width: 19px;
		height: 19px;
		stroke: var(--dark-navy-1);
		fill: none;
		stroke-width: 2;
		stroke-linecap: round;
		stroke-linejoin: round;
	}

	.badge-text .num {
		color: var(--orange);
		font-size: 20px;
		font-weight: 700;
		line-height: 1.1;
		margin: 0;
	}

	.badge-text .label {
		color: #c9cdd8;
		font-size: 12px;
		margin: 4px 0 0;
		line-height: 1.3;
	}

	/* ---------- Sections ---------- */
	.section {
		padding: 44px 40px;
		max-width: 1400px;
		margin: 0 auto;
	}

	.section h2 {
		text-align: center;
		color: var(--vbx-heading-blue);
		font-size: 36px;
		font-weight: 800;
		margin: 0 0 10px;
	}

	.section .sub {
		text-align: center;
		color: #5a6072;
		font-size: 14px;
		line-height: 1.6;
		max-width: 520px;
		margin: 0 auto 28px;
	}

	.section-membership,
	.section-solution {
		width: 100vw;
		position: relative;
		left: 50%;
		right: 50%;
		margin-left: -50vw;
		margin-right: -50vw;
	}

	.section-membership {
		padding: 0;
		background: var(--vbx-bg-tint);
	}

	.section-solution {
		padding: 0;
		background: var(--vbx-bg-tint);
	}

	.section-heading-highlight {
		max-width: 700px;
		margin: 0 auto 40px;
	}

	.section-heading-highlight h2 {
		margin-bottom: 14px;
	}

	.section-heading-highlight .sub {
		margin: 0 auto;
	}

	/* ---------- Cards grid (Strategic / Certified) ---------- */
	.grid {
		display: grid;
		grid-template-columns: repeat(4, minmax(0, 1fr));
		gap: 24px;
		align-items: start;
	}

	.card {
		width: 100%;
		background: #fff;
		border-radius: 12px;
		overflow: visible;
		box-shadow: 0 2px 10px rgba(22, 33, 63, 0.06);
	}

	.card-top {
		height: 60px;
		background: var(--dark-navy-1);
		position: relative;
		overflow: hidden;
		border-radius: 12px 12px 0 0;
	}

	.card-top svg {
		position: absolute;
		bottom: -2px;
		left: 0;
		width: 100%;
		height: 26px;
		opacity: 0.5;
	}

	.card-body {
		padding: 0 20px 20px;
		overflow: visible;
	}

	.logo {
		width: 76px;
		height: 76px;
		border-radius: 50%;
		background: #fff;
		margin-top: -30px;
		display: flex;
		align-items: center;
		justify-content: center;
		font-weight: 700;
		font-size: 16px;
		color: var(--dark-navy-1);
		box-shadow: 0 0 0 4px #fff, 0 0 0 5px #e5e7ef, 0 3px 8px rgba(0, 0, 0, 0.15);
		position: relative;
		z-index: 2;
		overflow: hidden;
	}

	.logo img {
		width: 72%;
		height: 72%;
		object-fit: contain;
	}

	.tag {
		float: right;
		margin-top: 10px;
		background: var(--blue-soft);
		color: var(--blue-accent);
		font-size: 9px;
		font-weight: 700;
		letter-spacing: .04em;
		text-transform: uppercase;
		padding: 4px 9px;
		border-radius: 20px;
	}

	.name {
		clear: both;
		font-size: 15px;
		font-weight: 700;
		color: var(--dark-navy-1);
		margin: 12px 0 4px;
	}

	.desc {
		font-size: 12px;
		color: #7a7f8f;
		line-height: 1.5;
		margin: 0 0 12px;
		min-height: 32px;
	}

	.divider {
		border-top: 1px solid #eceef4;
		margin-bottom: 10px;
	}

	.verified {
		display: flex;
		align-items: center;
		gap: 5px;
		font-size: 10px;
		font-weight: 700;
		letter-spacing: .05em;
		color: #1a9d63;
	}

	.verified svg {
		width: 12px;
		height: 12px;
		stroke: #1a9d63;
		fill: none;
		stroke-width: 2;
	}

	@media(max-width:900px) {
		.grid {
			grid-template-columns: repeat(2, 1fr);
		}
	}

	/* ---------- Solution Partners ---------- */
	.solution-section {
		background: var(--blue-accent);
	}

	.solution-section .container {
		max-width: 1400px;
		margin: auto;
		padding: 0 40px;
	}

	.solution-title {
		text-align: center;
		font-size: 48px;
		color: var(--blue-accent);
		font-weight: 700;
		margin-bottom: 50px;
	}

	.solution-grid {
		display: grid;
		grid-template-columns: repeat(3, 1fr);
		gap: 24px;
	}

	.solution-card {
		background: #fff;
		border: 1px solid #e5e7eb;
		border-radius: 12px;
		overflow: hidden;
		transition: .3s;
	}

	.solution-card:hover {
		transform: translateY(-5px);
		box-shadow: 0 15px 35px rgba(0, 0, 0, .12);
	}

	.solution-top {
		height: 18px;
		background: linear-gradient(90deg, var(--dark-navy-1), var(--dark-navy-2));
	}

	.solution-body {
		padding: 25px;
	}

	.solution-header {
		display: flex;
		justify-content: space-between;
		align-items: center;
		margin-bottom: 25px;
	}

	.solution-header img {
		width: 90px;
		height: 55px;
		object-fit: contain;
	}

	.solution-tag {
		font-size: 11px;
		color: var(--blue-accent);
		background: var(--blue-soft);
		padding: 5px 10px;
		border-radius: 20px;
	}

	.solution-card h3 {
		margin: 0 0 10px;
	}

	.solution-card p {
		color: #666;
		margin-bottom: 20px;
	}

	/* ================= Responsive ================= */

	/* Tablets */
	@media(max-width:1024px) {
		.grid {
			grid-template-columns: repeat(3, minmax(0, 1fr));
		}

		.solution-grid {
			grid-template-columns: repeat(2, 1fr);
		}

		.hero {
			padding: 60px 40px;
		}
	}

	/* Small tablets / large phones */
	@media(max-width:900px) {
		.grid {
			grid-template-columns: repeat(2, 1fr);
		}
	}

	@media(max-width:768px) {
		.section {
			padding: 32px 24px;
		}

		.section h2 {
			font-size: 28px;
		}

		.section .sub {
			font-size: 13px;
			max-width: 100%;
		}

		.hero {
			min-height: auto;
			padding: 50px 24px;
			text-align: center;
			align-items: center;
			background:
				linear-gradient(180deg, rgba(10, 15, 35, 0.88) 0%, rgba(10, 15, 35, 0.88) 100%),
				url('http://localhost:8080/Vbanx-Company-/wp-content/uploads/2026/07/partner-vbanx.png') center/cover no-repeat,
				var(--dark-navy-1);
		}

		.hero h1 {
			font-size: 30px;
		}

		.hero p {
			max-width: 100%;
			margin: 0 auto 24px;
		}

		.stats {
			flex-wrap: wrap;
			max-width: 100%;
			justify-content: center;
			padding: 18px;
		}

		.badge {
			flex: 1 1 45%;
			padding: 12px 8px;
		}

		.badge+.badge {
			border-left: none;
		}

		.badge:nth-child(odd) {
			border-right: 1px solid rgba(255, 255, 255, 0.12);
		}

		.badge:nth-child(n+3) {
			border-top: 1px solid rgba(255, 255, 255, 0.12);
			padding-top: 16px;
			margin-top: 4px;
		}

		.solution-grid {
			grid-template-columns: repeat(2, 1fr);
		}

		.solution-title {
			font-size: 32px;
		}

		.solution-section .container {
			padding: 0 24px;
		}
	}

	/* Phones */
	@media(max-width:520px) {
		.grid {
			grid-template-columns: repeat(2, 1fr);
			gap: 12px;
		}

		.hero h1 {
			font-size: 26px;
		}

		.hero p {
			font-size: 14px;
		}

		.badge {
			flex: 1 1 100%;
		}

		.badge:nth-child(odd) {
			border-right: none;
		}

		.badge:not(:first-child) {
			border-top: 1px solid rgba(255, 255, 255, 0.12);
			padding-top: 14px;
			margin-top: 4px;
		}

		.card-body {
			padding: 0 12px 14px;
		}

		.logo {
			width: 52px;
			height: 52px;
			margin-top: -20px;
		}

		.name {
			font-size: 12.5px;
			line-height: 1.3;
		}

		.desc {
			font-size: 10.5px;
			min-height: auto;
		}

		.tag {
			float: none;
			display: inline-block;
			margin-top: 10px;
			font-size: 8px;
			padding: 3px 7px;
		}

		.name {
			clear: none;
		}

		.solution-grid {
			gap: 12px;
		}
	}
</style>

<div class="vbx-certifications-page">

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

	<!-- ============ Strategic Partners ============ -->
	<div class="section">
		<h2>Strategic Partners</h2>
		<p class="sub">Our strategic alliances span banking infrastructure, cloud, and enterprise technology to deliver a resilient, scalable platform.</p>

		<div class="grid">
			<?php
			vbx_partner_card(array(
				'logo'        => 'http://localhost:8080/Vbanx-Company-/wp-content/uploads/2026/07/cma.png',
				'tag'         => 'Strategic',
				'name'        => 'Cambodia Microfinance Association',
				'description' => 'Strategic partnership',
			));

			vbx_partner_card(array(
				'logo'        => 'http://localhost:8080/Vbanx-Company-/wp-content/uploads/2026/07/cbc.png',
				'tag'         => 'Data Bureau',
				'name'        => 'CBC',
				'description' => 'Strategic partner · B2B & data bureau',
			));

			vbx_partner_card(array(
				'logo'        => 'http://localhost:8080/Vbanx-Company-/wp-content/uploads/2026/07/pcg.png',
				'tag'         => 'Compliance',
				'name'        => 'PCG',
				'description' => 'CIFRS & national compliance partner',
			));

			vbx_partner_card(array(
				'logo'        => 'http://localhost:8080/Vbanx-Company-/wp-content/uploads/2026/07/hlb.png',
				'tag'         => 'Audit · #8',
				'name'        => 'HLB Cambodia',
				'description' => 'CIFRS & audit partner, 8th global ranking',
			));

			vbx_partner_card(array(
				'logo'        => 'http://localhost:8080/Vbanx-Company-/wp-content/uploads/2026/07/acleda.png',
				'tag'         => 'B2B · No.1',
				'name'        => 'ACLEDA Bank',
				'description' => '1st B2B banking strategic partner',
			));

			vbx_partner_card(array(
				'logo'        => 'http://localhost:8080/Vbanx-Company-/wp-content/uploads/2026/07/pmtk.png',
				'tag'         => 'Infrastructure',
				'name'        => 'PMTK Technology',
				'description' => 'IT infrastructure partner',
			));
			?>
		</div>
	</div>

	<!-- ============ Certified Partner & Membership ============ -->
	<div class="section-membership">
		<div class="section">
			<div class="section-heading-highlight">
				<h2>Certified Partner &amp; Membership</h2>
				<p class="sub">Industry memberships and certifications that underpin
					VBANX's commitment to global standards and regional
					best practices</p>
			</div>

			<div class="grid">
				<?php
				vbx_partner_card(array(
					'logo'        => 'http://localhost:8080/Vbanx-Company-/wp-content/uploads/2026/07/serc.png',
					'tag'         => 'SECURITIES',
					'name'        => 'Securities and Exchange Regulator of Cambodia',
					'description' => 'Authorized IT provider in the securities sector',
				));

				vbx_partner_card(array(
					'logo'        => 'http://localhost:8080/Vbanx-Company-/wp-content/uploads/2026/07/caft.png',
					'tag'         => 'MEMBERSHIP',
					'name'        => 'Cambodian Association of Finance & Technology',
					'description' => 'CAFT member',
				));

				vbx_partner_card(array(
					'logo'        => 'http://localhost:8080/Vbanx-Company-/wp-content/uploads/2026/07/bni.png',
					'tag'         => 'LEADERSHIP',
					'name'        => 'BNI',
					'description' => 'Member & leadership team',
				));

				vbx_partner_card(array(
					'logo'        => 'http://localhost:8080/Vbanx-Company-/wp-content/uploads/2026/07/acc.png',
					'tag'         => 'TECHNOLOGY',
					'name'        => 'Architect and Contractor Club',
					'description' => 'Technology member',
				));
				?>
			</div>
		</div>
	</div><!-- /.section-membership -->

	<!-- ============ Solution Partners ============ -->
	<div class="section-solution">
		<div class="section">
			<h2>Our Solution Partner</h2>
			<p class="sub">Technology and infrastructure partners that power VBANX's platform with proven, enterprise-grade solutions.</p>

			<div class="container">
				<div class="solution-grid">

					<?php
					$solution_partners = array(
						array(
							'logo' => 'http://localhost:8080/Vbanx-Company-/wp-content/uploads/2026/07/tcg.png',
							'name' => 'TCG',
						),
						array(
							'logo' => 'http://localhost:8080/Vbanx-Company-/wp-content/uploads/2026/07/nttdata.png',
							'name' => 'NTT DATA',
						),
						array(
							'logo' => 'http://localhost:8080/Vbanx-Company-/wp-content/uploads/2026/07/kosign.png',
							'name' => 'KOSIGN',
						),
					);

					foreach ($solution_partners as $sp) :
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
									<img src="<?php echo esc_url($sp['logo']); ?>" alt="<?php echo esc_attr($sp['name']); ?>">
								</div>

								<span class="tag">SOLUTION</span>

								<p class="name"><?php echo esc_html($sp['name']); ?></p>

								<p class="desc">Solution Partner</p>

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
					<?php endforeach; ?>

				</div>
			</div>
		</div>
	</div><!-- /.section-solution -->

</div><!-- /.vbx-certifications-page -->

<?php get_footer(); ?>