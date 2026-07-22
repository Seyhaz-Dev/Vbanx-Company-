<?php
/*
Template Name: Profile Page
*/

get_header();
?>

<main>

    <!-- Hero Section -->
    <section class="hero-section">

        <div class="hero-overlay">
            <img src="http://localhost/Vbanx-Company-/wp-content/uploads/2026/07/hero-profile.png" alt="bg-hero">
        </div>

        <div class="hero-container">

            <div class="hero-content">

                <h1>
                    Building the Future<br>
                    of Digital Banking
                </h1>

                <p>
                    Secure, modern and intelligent banking solutions for Microfinance
                    Institutions, Commercial Banks, Rural Credit Operators and Financial
                    Institutions.
                </p>

                <div class="hero-buttons">
                    <a href="/contact" class="btn-primary">Contact Us</a>
                    <a href="/partnerships" class="btn-secondary">Explore the Partners</a>
                </div>

            </div>

            <div class="hero-image">
                <img src="http://localhost/Vbanx-Company-/wp-content/uploads/2026/07/meeting.png.png" alt="Meeting">
            </div>

        </div>

    </section>

    <!-- Dashboard Preview Section -->
    <section class="dashboard-preview-section">
        <div class="preview-container">

            <div class="preview-content">
                <p>
                    <span class="brand-highlight">VBANX</span>
                    empowers financial institutions with digital banking platforms,
                    AI-powered services, mobile banking, and enterprise software
                    designed for speed, security, and scalability.
                </p>
            </div>

            <div class="preview-image">
                <img src="http://localhost/Vbanx-Company-/wp-content/uploads/2026/07/dashboard.png" alt="Dashboard Preview">
            </div>

        </div>
    </section>

    <!-- Why VBANX Section Header -->
    <section class="main-section">
        <div class="container">

            <div class="badge-tag">
                WHY CLIENT TRUST VBANX?
            </div>

            <!-- Main Bold Title -->
            <h2 class="section-title">Why VBANX?</h2>

            <!-- Subtitle Paragraph -->
            <p class="section-subtitle">
                Built for performance. Designed for compliance.<br>
                Trusted for Growth.
            </p>

        </div>
    </section>

    <!-- trust-cards-section -->
    <section class="trust-cards-section">
        <div class="card-container">
            <?php get_template_part('components/card'); ?>
        </div>
    </section>

    <!-- Experts Section -->
    <section class="main-section">

        <div class="container">

            <h2 class="expert-title">
                MEET OUR EXPERTS
            </h2>

            <p class="section-description">
                Meet the experienced leaders behind VBANX, whose expertise, vision, and commitment drive
                innovation in digital banking. Together, they empower financial institutions with trusted technology,
                strategic guidance, and customer-focused solutions that create lasting value.
            </p>

        </div>

    </section>
    <?php get_template_part('components/expert-cards'); ?>


    <!-- Section Title Vision and Mission-->
    <section class="main-section">
        <div class="container">

            <div class="badge-tag">
                WHAT DRIVES US
            </div>

            <!-- Main Bold Title -->
            <h2 class="section-title">Built on trust. Designed for what's next.</h2>

            <!-- Subtitle Paragraph -->
            <p class="section-subtitle">
                The principles that shape every product decision, every transaction, and every partnership we build.

            </p>

        </div>

    </section>

    <section>

        <!-- Vision and Mission card-->

        <div class="vision-mission-value">

            <div class="vmv-container">

                <!-- Vision Card -->
                <div class="vmv-card">

                    <div class="vmv-icon">
                        <i class="fa-regular fa-eye"></i>
                    </div>

                    <span class="vmv-badge">
                        VISION
                    </span>

                    <h3 class="vmv-title">
                        Building Smarter Digital Solutions
                    </h3>

                    <p class="vmv-description">
                        To facilitate the enhancement in customer’s business through the effective use of innovative ICT product and service.
                    </p>

                </div>

                <!-- Mission Card -->
                <div class="vmv-card">

                    <div class="vmv-icon">
                        <i class="fa-regular fa-compass"></i>
                    </div>

                    <span class="vmv-badge">
                        MISSION
                    </span>

                    <h3 class="vmv-title">
                        Delivering Trusted ICT Solutions
                    </h3>

                    <p class="vmv-description">
                        To provide quality ICT product and service to various sectors with high technology, skillful engineers and trusted solutions for growth.
                    </p>

                </div>

            </div>

        </div>
    </section>

    <!-- Section Title Vision and Mission-->
    <section class="main-section">
        <div class="container">

            <!-- Main Bold Title -->
            <h2 class="section-title">Core Values</h2>

            <!-- Subtitle Paragraph -->
            <p class="section-subtitle">
               The principles that guide how we work, every day.
            </p>

        </div>
    </section>

    <?php get_template_part('components/value'); ?>

</main>


<?php get_footer(); ?>