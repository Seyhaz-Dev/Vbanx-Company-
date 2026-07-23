<?php
/*
Template Name: PartnerShips Page
*/

get_header();
?>

<main>

	<!-- Hero Section -->
	<section class="hero-section">

		<div class="hero-overlay">
			<img src="http://localhost/Vbanx-Company-/wp-content/uploads/2026/07/partner-vbanx.png" alt="bg-hero">
		</div>

		<div class="hero-container">

			<div class="hero-content">

				<h1>
					<span>Certifications &</span><br>
					strategic Partners
				</h1>

				<p>
					VBANX is an authorized IT Provider in the Securities Sector, Backed by global audit networks and national banking regulators.
				</p>

				<?php get_template_part('components/statistics-table'); ?>

			</div>

		</div>

	</section>

	<!-- Strategic Partners Section Header -->
	<section class="main-section">
		<div class="container">

			<!-- Main Bold Title -->
			<h2 class="section-title">Strategic Partners</h2>

			<!-- Subtitle Paragraph -->
			<p class="section-subtitle">

				Our strategic alliances span banking infrastructure,
				cloud, and enterprise technology to deliver a resilient,
				scalable platform.
			</p>

		</div>
	</section>

	<!-- Strategic-Partners-cards-section -->
	<section class="strategic-partners">

		<div class="container">

			<h2 class="section-title">
				<?php the_field('section_title'); ?>
			</h2>

			<p class="section-description">
				<?php the_field('section_description'); ?>
			</p>

			<?php get_template_part('components/strategic'); ?>

		</div>

	</section>

	<!-- Certified Partner & Membership Section Header -->
	<section class="main-section">
		<div class="container">

			<!-- Main Bold Title -->
			<h2 class="section-title">Certified Partner & Membership</h2>

			<!-- Subtitle Paragraph -->
			<p class="section-subtitle">

				Industry memberships and certifications that underpin
				VBANX's commitment to global standards and regional
				best practices.
			</p>

		</div>
	</section>

	<!-- Certified Partner & Membership-cards-section -->
	<section class="strategic-partners">

		<div class="container">

			<h2 class="section-title">
				<?php the_field('section_title'); ?>
			</h2>

			<p class="section-description">
				<?php the_field('section_description'); ?>
			</p>

			<?php get_template_part('components/membership'); ?>

		</div>

	</section>

	<!-- Our Solution Partner Section Header -->
	<section class="main-section">
		<div class="container">

			<!-- Main Bold Title -->
			<h2 class="section-title">Our Solution Partner</h2>

			<!-- Subtitle Paragraph -->
			<p class="section-subtitle">

				Technology and infrastructure partners that power VBANX's
				platform with proven, enterprise-grade solutions.
			</p>

		</div>
	</section>

	<!--  Our Solution Partner-cards-section -->
	<section class="strategic-partners">

		<div class="container">

			<h2 class="section-title">
				<?php the_field('section_title'); ?>
			</h2>

			<p class="section-description">
				<?php the_field('section_description'); ?>
			</p>

			<?php get_template_part('components/solution'); ?>

		</div>

	</section>

</main>


<?php get_footer(); ?>