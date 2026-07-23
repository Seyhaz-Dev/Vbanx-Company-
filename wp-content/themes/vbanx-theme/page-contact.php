<?php

/**
 * Template Name: Contact
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

/* ================= FORM HANDLER ================= */
$form_submitted = false;
$form_error     = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['vbanx_contact_nonce'])) {

    if (!wp_verify_nonce($_POST['vbanx_contact_nonce'], 'vbanx_contact_form')) {
        $form_error = 'Security check failed. Please try again.';
    } else {

        $first_name = sanitize_text_field($_POST['first_name'] ?? '');
        $last_name  = sanitize_text_field($_POST['last_name'] ?? '');
        $email      = sanitize_email($_POST['email'] ?? '');
        $phone      = sanitize_text_field($_POST['phone'] ?? '');
        $service    = sanitize_text_field($_POST['service'] ?? '');
        $message    = sanitize_textarea_field($_POST['message'] ?? '');

        // Honeypot spam trap — real users never fill this hidden field
        $honeypot = sanitize_text_field($_POST['website_url'] ?? '');

        if (!empty($honeypot)) {
            // Silently drop likely bot submissions
            $form_submitted = true;
        } elseif (empty($first_name) || empty($email)) {
            $form_error = 'Please fill in your name and email.';
        } elseif (!is_email($email)) {
            $form_error = 'Please enter a valid email address.';
        } else {

            $to = get_field('notification_email') ?: get_option('admin_email');

            $subject = 'New Demo Request from ' . $first_name . ' ' . $last_name;

            $body  = "New contact form submission from the VBANX site:\n\n";
            $body .= "Name: {$first_name} {$last_name}\n";
            $body .= "Email: {$email}\n";
            $body .= "Phone: {$phone}\n";
            $body .= "Service interested in: {$service}\n\n";
            $body .= "Message:\n{$message}\n";

            $headers = array(
                'Content-Type: text/plain; charset=UTF-8',
                'Reply-To: ' . $first_name . ' ' . $last_name . ' <' . $email . '>',
            );

            $sent = wp_mail($to, $subject, $body, $headers);

            if ($sent) {
                $form_submitted = true;
            } else {
                $form_error = 'Something went wrong sending your message. Please try again or email us directly.';
            }
        }
    }
}
?>

<main class="contact-page">

    <!-- ================= HERO ================= -->
    <?php if (get_field('contact_intro_title')): ?>
        <section class="contact-hero">
            <div class="container">
                <?php if (get_field('hero_eyebrow')): ?>
                    <span class="contact-hero__eyebrow"><?php echo esc_html(get_field('hero_eyebrow')); ?></span>
                <?php endif; ?>

                <h1 class="contact-hero__title"><?php echo esc_html(get_field('contact_intro_title')); ?></h1>

                <?php if (get_field('contact_intro_description')): ?>
                    <p class="contact-hero__subtitle"><?php echo esc_html(get_field('contact_intro_description')); ?></p>
                <?php endif; ?>

                <div class="contact-hero__trust">
                    <span>⚡ Response within 1 business day</span>
                    <span>🔒 CIFRS &amp; PCI-DSS compliant</span>
                    <span>🇰🇭 Built for Cambodian banking infrastructure</span>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- ================= FORM + MAP/INFO ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-panel">

                <!-- ================= LEFT: FORM ================= -->
                <div class="contact-form-wrap">

                    <?php if ($form_submitted): ?>

                        <div class="form-success">
                            <span class="form-success__icon">✓</span>
                            <p><?php echo esc_html(get_field('success_message') ?: "Thanks — we've received your request and will be in touch shortly."); ?></p>
                        </div>

                    <?php else: ?>

                        <h2 class="contact-form-wrap__title">
                            <?php echo esc_html(get_field('form_title') ?: 'Request Your Demo'); ?>
                        </h2>
                        <p class="contact-form-wrap__subtitle">
                            <?php echo esc_html(get_field('form_subtitle') ?: "Tell us a bit about your institution — we'll tailor the walkthrough to what matters to you."); ?>
                        </p>

                        <?php if ($form_error): ?>
                            <div class="form-error"><?php echo esc_html($form_error); ?></div>
                        <?php endif; ?>

                        <form class="contact-form" method="post" action="">
                            <?php wp_nonce_field('vbanx_contact_form', 'vbanx_contact_nonce'); ?>

                            <!-- honeypot field: hidden from real users via CSS -->
                            <div class="hp-field">
                                <label for="website_url">Website</label>
                                <input type="text" name="website_url" id="website_url" tabindex="-1" autocomplete="off">
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" name="first_name" id="first_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" name="last_name" id="last_name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" name="phone" id="phone" placeholder="+855">
                                </div>
                            </div>

                            <div class="form-group form-group-full">
                                <label for="service">What service are you interested in</label>
                                <select name="service" id="service">
                                    <option value="">Select project type</option>
                                    <?php
                                    $services = get_field('service_options');
                                    if ($services):
                                        $options = array_filter(array_map('trim', explode("\n", $services)));
                                        foreach ($options as $option): ?>
                                            <option value="<?php echo esc_attr($option); ?>"><?php echo esc_html($option); ?></option>
                                    <?php endforeach;
                                    endif; ?>
                                </select>
                            </div>

                            <div class="form-group form-group-full">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" rows="3" placeholder="Write your message.."></textarea>
                            </div>

                            <button type="submit" class="form-submit">
                                <?php echo esc_html(get_field('form_button_text') ?: 'Request a Free Demo'); ?>
                            </button>

                        </form>

                    <?php endif; ?>

                </div>



                <!-- ================= RIGHT: MAP + INFO ================= -->
                <div class="contact-map-col">
                    <div class="contact-info">
                        <h3 class="contact-info__title">Get in Touch</h3>
                        <ul class="contact-details">
                            <?php if (get_field('phone_number')): ?>
                                <li>
                                    <span class="contact-icon"><i class="fas fa-phone-alt"></i></span>
                                    <span><?php echo esc_html(get_field('phone_number')); ?></span>
                                </li>
                            <?php endif; ?>

                            <?php if (get_field('contact_email')): ?>
                                <li>
                                    <span class="contact-icon"><i class="fas fa-envelope"></i></span>
                                    <a href="mailto:<?php echo esc_attr(get_field('contact_email')); ?>">
                                        <?php echo esc_html(get_field('contact_email')); ?>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if (get_field('office_address')): ?>
                                <li>
                                    <span class="contact-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    <span><?php echo nl2br(esc_html(get_field('office_address'))); ?></span>
                                </li>
                            <?php endif; ?>

                            <?php if (get_field('contact_website')): ?>
                                <li>
                                    <span class="contact-icon"><i class="fas fa-globe"></i></span>
                                    <a href="<?php echo esc_url(get_field('contact_website')); ?>" target="_blank" rel="noopener">
                                        <?php echo esc_html(get_field('contact_website')); ?>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>

                        <div class="contact-social">
                            <?php if (get_field('social_url_1')) : ?>
                                <a href="<?php echo esc_url(get_field('social_url_1')); ?>" target="_blank" rel="noopener">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            <?php endif; ?>

                            <?php if (get_field('email_address')) : ?>
                                <a href="mailto:<?php echo esc_attr(get_field('email_address')); ?>">
                                    <i class="fas fa-envelope"></i> Email
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if (get_field('map_embed_url')): ?>
                        <div class="contact-map-wrap">
                            <iframe
                                src="<?php echo esc_url(get_field('map_embed_url')); ?>"
                                width="100%"
                                height="100%"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                title="Company location map">
                            </iframe>
                        </div>
                    <?php endif; ?>



                </div>

            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>