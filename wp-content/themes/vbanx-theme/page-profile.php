<?php
/*
Template Name: Profile Page
*/

get_header();
?>

<main>

    <!-- Hero Section -->
    <section class="profile-hero-section">

        <div class="profile-hero-overlay">
            <img src="http://localhost/Vbanx-Company-/wp-content/uploads/2026/07/hero-profile.png" alt="bg-hero">
        </div>

        <div class="profile-hero-container">

            <div class="profile-hero-content">

                <h1>
                    Building the Future<br>
                    of Digital Banking
                </h1>

                <p>
                    Secure, modern and intelligent banking solutions for Microfinance
                    Institutions, Commercial Banks, Rural Credit Operators and Financial
                    Institutions.
                </p>

                <div class="profile-hero-buttons">
                    <a href="/contact" class="profile-btn-primary">Contact Us</a>
                    <a href="/partnerships" class="profile-btn-secondary">Explore the Partners</a>
                </div>

            </div>

            <div class="profile-hero-image">
                <img src="http://localhost/Vbanx-Company-/wp-content/uploads/2026/07/meeting.png.png" alt="Meeting">
            </div>

        </div>

    </section>

    <!-- Dashboard Preview Section -->
    <section class="profile-dashboard-preview-section">
        <div class="profile-preview-container">

            <div class="profile-preview-content">
                <p>
                    <span class="profile-brand-highlight">VBANX</span>
                    empowers financial institutions with digital banking platforms,
                    AI-powered services, mobile banking, and enterprise software
                    designed for speed, security, and scalability.
                </p>
            </div>

            <div class="profile-preview-image">
                <img src="http://localhost/Vbanx-Company-/wp-content/uploads/2026/07/dashboard.png" alt="Dashboard Preview">
            </div>

        </div>
    </section>

    <!-- Why VBANX Section Header -->
    <section class="profile-main-section">
        <div class="profile-container">

            <div class="profile-badge-tag">
                WHY CLIENT TRUST VBANX?
            </div>

            <!-- Main Bold Title -->
            <h1 class="profile-section-title">Why VBANX?</h1>

            <!-- Subtitle Paragraph -->
            <p class="profile-section-subtitle">
                Built for performance. Designed for compliance.<br>
                Trusted for Growth.
            </p>

        </div>
    </section>

    <!-- trust-cards-section -->
    <section class="profile-trust-cards-section">
        <div class="profile-card-container">
            <?php get_template_part('components/card'); ?>
        </div>
    </section>

    <!-- section messages CEO -->
    <section class="ceo-message">
        <div class="ceo-container">

            <div class="ceo-image">
                <img src="http://localhost/Vbanx-Company-/wp-content/uploads/2026/07/CEO-Mr.-KAO-Sereyrath.png" alt="CEO">
            </div>

            <div class="ceo-content">

                <div class="quote-icon">“</div>

                <h2>
                    VBANX
                </h2>

                <p>we believe that banking should be simple,
                    secure, and accessible. By combining innovative
                    technology with deep financial expertise, we empower
                    banks and financial institutions to accelerate their digital
                    transformation and deliver exceptional experiences to their customers.
                </p>

                <div class="ceo-info">
                    <h3>Mr. KAO Sereyrath</h3>
                    <span>CEO & Founder of VBANX</span>
                </div>

            </div>

        </div>
    </section>

    <!-- Experts Section -->
    <section class="profile-expert-section">

        <div class="profile-container">

            <h2 class="profile-expert-title">
                MEET OUR EXPERTS
            </h2>

            <p class="profile-section-description">
                Meet the experienced leaders behind VBANX, whose expertise, vision, and commitment drive
                innovation in digital banking. Together, they empower financial institutions with trusted technology,
                strategic guidance, and customer-focused solutions that create lasting value.
            </p>

        </div>

    </section>
    <?php get_template_part('components/expert'); ?>


    <!-- Section Title Vision and Mission-->
    <section class="profile-main-section">
        <div class="profile-container">

            <div class="profile-badge-tag">
                WHAT DRIVES US
            </div>

            <!-- Main Bold Title -->
            <h2 class="profile-section-title">Built on trust. Designed for what's next.</h2>

            <!-- Subtitle Paragraph -->
            <p class="profile-section-subtitle">
                The principles that shape every product decision, every transaction, and every partnership we build.

            </p>

        </div>

    </section>

    <!-- vision and mission -->

    <?php get_template_part('components/vision-mission'); ?>

    <!-- Section Title Vision and Mission-->
    <section class="profile-main-section">
        <div class="profile-container">

            <!-- Main Bold Title -->
            <h2 class="profile-section-title">Core Values</h2>

            <!-- Subtitle Paragraph -->
            <p class="profile-section-subtitle">
                The principles that guide how we work, every day.
            </p>

        </div>
    </section>

    <?php get_template_part('components/value'); ?>

</main>


<?php get_footer(); ?>