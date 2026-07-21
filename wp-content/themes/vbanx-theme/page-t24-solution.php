<?php
/*
Template Name: T24 Solution Page
*/

get_header();

if ( ! function_exists( 'get_field' ) ) {
    echo '<h2>ACF is not active.</h2>';
    get_footer();
    exit;
}

$eyebrow      = get_field('hero_eyebrow');
$title_accent = get_field('hero_title_accent');
$title_main   = get_field('hero_title_main');
$description  = get_field('hero_description');
$bg_photo     = get_field('hero_bg_photo');
$btn_text     = get_field('hero_btn_text');
$btn_link     = get_field('hero_btn_link');
$logo1        = get_field('hero_logo1');
$logo2        = get_field('hero_logo2');
?>

<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/assets/css/t24-solution.css' ); ?>">

<section class="t24-hero">
  <div class="t24-hero__inner" style="background-image: url('<?php echo esc_url( $bg_photo ); ?>');">

    <svg class="t24-hero__icon t24-hero__icon--wifi" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
      <path d="M5 12.5a11 11 0 0 1 14 0"/>
      <path d="M8.5 16a6 6 0 0 1 7 0"/>
      <circle cx="12" cy="19.5" r="1.2" fill="#fff" stroke="none"/>
    </svg>

    <svg class="t24-hero__icon t24-hero__icon--pin" viewBox="0 0 24 24" fill="#fff">
      <path d="M12 2C7.6 2 4 5.6 4 10c0 6 8 12 8 12s8-6 8-12c0-4.4-3.6-8-8-8zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
    </svg>

    <div class="t24-hero__panel">
      <?php if ( $eyebrow ) : ?>
        <p class="t24-hero__eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
      <?php endif; ?>

      <h1 class="t24-hero__title">
        <?php if ( $title_accent ) : ?>
          <span class="t24-hero__title-accent"><?php echo esc_html( $title_accent ); ?></span>
        <?php endif; ?>
        <?php if ( $title_main ) : ?>
          <span class="t24-hero__title-main"><?php echo esc_html( $title_main ); ?></span>
        <?php endif; ?>
      </h1>

      <?php if ( $description ) : ?>
        <p class="t24-hero__desc"><?php echo esc_html( $description ); ?></p>
      <?php endif; ?>

      <?php if ( $btn_text ) : ?>
        <a href="<?php echo esc_url( $btn_link ?: '#' ); ?>" class="t24-hero__cta">
          <?php echo esc_html( $btn_text ); ?>
        </a>
      <?php endif; ?>

      <div class="t24-hero__logos">
        <?php if ( $logo1 ) : ?>
          <img class="t24-logo1" src="<?php echo esc_url( $logo1 ); ?>" alt="Logo 1">
        <?php endif; ?>
        <?php if ( $logo2 ) : ?>
          <img class="t24-logo2" src="<?php echo esc_url( $logo2 ); ?>" alt="Logo 2">
        <?php endif; ?>
      </div>
    </div>

  </div>
</section>




<?php
$stats_title    = get_field('stats_title');
$stats_subtitle = get_field('stats_subtitle');
$stats_tagline  = get_field('stats_tagline');
$stats_bg       = get_field('stats_bg_image'); // NEW: ACF Image field, Return Format = "Image URL"

// Icon SVGs, one per card position (fixed, not ACF-editable)
$icons = array(
    // Card 1: code icon </>
    '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>',
    // Card 2: bank/institution icon
    '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 22V8l8-6 8 6v14"></path><path d="M9 22V12h6v10"></path></svg>',
    // Card 3: sliders/customization icon
    '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line></svg>',
    // Card 4: team icon
    '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
    // Card 5: calendar icon
    '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>',
    // Card 6: check/compliance icon
    '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="7 12.5 10.5 16 17 8.5"></polyline></svg>',
    // Card 7: badge/certified icon
    '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"></circle><polyline points="9 13.5 7 22 12 19 17 22 15 13.5"></polyline></svg>',
    // Card 8: phone/support icon
    '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>',
);

$cards = array(
    array( 'number' => get_field('card1_number'), 'title' => get_field('card1_title'), 'desc' => get_field('card1_desc') ),
    array( 'number' => get_field('card2_number'), 'title' => get_field('card2_title'), 'desc' => get_field('card2_desc') ),
    array( 'number' => get_field('card3_number'), 'title' => get_field('card3_title'), 'desc' => get_field('card3_desc') ),
    array( 'number' => get_field('card4_number'), 'title' => get_field('card4_title'), 'desc' => get_field('card4_desc') ),
    array( 'number' => get_field('card5_number'), 'title' => get_field('card5_title'), 'desc' => get_field('card5_desc') ),
    array( 'number' => get_field('card6_number'), 'title' => get_field('card6_title'), 'desc' => get_field('card6_desc') ),
    array( 'number' => get_field('card7_number'), 'title' => get_field('card7_title'), 'desc' => get_field('card7_desc') ),
    array( 'number' => get_field('card8_number'), 'title' => get_field('card8_title'), 'desc' => get_field('card8_desc') ),
);
?>

<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/assets/css/vc-stats.css' ); ?>">

<section class="vc-stats">
  <div class="vc-stats__inner" <?php if ( $stats_bg ) : ?>style="background-image: url('<?php echo esc_url( $stats_bg ); ?>');"<?php endif; ?>>

    <header class="vc-stats__header">
      <?php if ( $stats_title ) : ?>
        <h2 class="vc-stats__title"><?php echo esc_html( $stats_title ); ?></h2>
      <?php endif; ?>
      <?php if ( $stats_subtitle ) : ?>
        <p class="vc-stats__subtitle"><?php echo esc_html( $stats_subtitle ); ?></p>
      <?php endif; ?>
      <?php if ( $stats_tagline ) : ?>
        <p class="vc-stats__tagline"><?php echo esc_html( $stats_tagline ); ?></p>
      <?php endif; ?>
      <span class="vc-stats__divider"></span>
    </header>

    <div class="vc-stats__grid">
      <?php foreach ( $cards as $i => $card ) : ?>
        <?php if ( $card['number'] || $card['title'] ) : ?>
          <div class="vc-card">
            <div class="vc-card__icon"><?php echo $icons[ $i ]; // fixed icon, not user input, safe to echo raw ?></div>
            <div class="vc-card__number"><?php echo esc_html( $card['number'] ); ?></div>
            <div class="vc-card__title"><?php echo esc_html( $card['title'] ); ?></div>
            <div class="vc-card__desc"><?php echo esc_html( $card['desc'] ); ?></div>
             <span class="vc-card__line"></span>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>

  </div>
</section>









<!-- /* ============================================================
   T24 Completed Solutions — Section
============================================================ */ -->

<?php
$solutions_title   = get_field('solutions_title');
$solutions_tagline = get_field('solutions_tagline');

$solutions = array(
    array( 'title' => get_field('sol1_title'), 'desc' => get_field('sol1_desc') ),
    array( 'title' => get_field('sol2_title'), 'desc' => get_field('sol2_desc') ),
    array( 'title' => get_field('sol3_title'), 'desc' => get_field('sol3_desc') ),
    array( 'title' => get_field('sol4_title'), 'desc' => get_field('sol4_desc') ),
    array( 'title' => get_field('sol5_title'), 'desc' => get_field('sol5_desc') ),
    array( 'title' => get_field('sol6_title'), 'desc' => get_field('sol6_desc') ),
    array( 'title' => get_field('sol7_title'), 'desc' => get_field('sol7_desc') ),
    array( 'title' => get_field('sol8_title'), 'desc' => get_field('sol8_desc') ),
    array( 'title' => get_field('sol9_title'), 'desc' => get_field('sol9_desc') ),
);
?>

<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/assets/css/t24-solutions.css' ); ?>">

<section class="t24-solutions">
  <div class="t24-solutions__inner">

    <header class="t24-solutions__header">
      <?php if ( $solutions_title ) : ?>
        <h2 class="t24-solutions__title"><?php echo esc_html( $solutions_title ); ?></h2>
      <?php endif; ?>
      <span class="t24-solutions__divider"></span>
      <?php if ( $solutions_tagline ) : ?>
        <p class="t24-solutions__tagline"><?php echo esc_html( $solutions_tagline ); ?></p>
      <?php endif; ?>
    </header>

    <div class="t24-solutions__grid">
      <?php foreach ( $solutions as $i => $sol ) : ?>
        <?php if ( $sol['title'] ) : ?>
          <div class="t24-card">
            <div class="t24-card__number"><?php echo str_pad( $i + 1, 2, '0', STR_PAD_LEFT ); // auto 01, 02, 03... ?></div>
            <span class="t24-card__underline"></span>
            <h3 class="t24-card__title"><?php echo esc_html( $sol['title'] ); ?></h3>
            <p class="t24-card__desc"><?php echo esc_html( $sol['desc'] ); ?></p>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>

  </div>
</section>













<?php
$sel_title    = get_field('selection_title');
$sel_tagline  = get_field('selection_tagline');
$sel_image    = get_field('selection_image');

$sel_steps = array(
    array( 'title' => get_field('sel_step1_title'), 'desc' => get_field('sel_step1_desc') ),
    array( 'title' => get_field('sel_step2_title'), 'desc' => get_field('sel_step2_desc') ),
    array( 'title' => get_field('sel_step3_title'), 'desc' => get_field('sel_step3_desc') ),
);
?>

<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/assets/css/t24-solution.css' ); ?>">

<section class="t24-selection">
  <div class="t24-selection__inner">

    <header class="t24-selection__header">
      <?php if ( $sel_title ) : ?>
        <h2 class="t24-selection__title"><?php echo esc_html( $sel_title ); ?></h2>
      <?php endif; ?>
      <span class="t24-selection__divider"></span>
      <?php if ( $sel_tagline ) : ?>
        <p class="t24-selection__tagline"><?php echo esc_html( $sel_tagline ); ?></p>
      <?php endif; ?>
    </header>

    <div class="t24-selection__body">

      <div class="t24-selection__steps">
        <?php foreach ( $sel_steps as $step ) : ?>
          <?php if ( $step['title'] ) : ?>
            <div class="t24-step">
              <h3 class="t24-step__title"><?php echo esc_html( $step['title'] ); ?></h3>
              <p class="t24-step__desc"><?php echo esc_html( $step['desc'] ); ?></p>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

      <?php if ( $sel_image ) : ?>
        <div class="t24-selection__graphic">
          <img src="<?php echo esc_url( $sel_image ); ?>" alt="Phases in Temenos T24 Implementation" class="t24-selection__img">
        </div>
      <?php endif; ?>

    </div>
  </div>
</section>









<!-- /* ============================================================
   Infrastructure Consultation — Section
============================================================ */ -->

<?php
$infra_title    = get_field('infra_title');
$infra_tagline  = get_field('infra_tagline');
$infra_photo1   = get_field('infra_photo1');
$infra_photo2   = get_field('infra_photo2');
$infra_photo3   = get_field('infra_photo3');

$infra_steps = array(
    array( 'title' => get_field('infra_step1_title'), 'desc' => get_field('infra_step1_desc') ),
    array( 'title' => get_field('infra_step2_title'), 'desc' => get_field('infra_step2_desc') ),
    array( 'title' => get_field('infra_step3_title'), 'desc' => get_field('infra_step3_desc') ),
);
?>

<section class="t24-infra">
  <div class="t24-infra__inner">

    <header class="t24-infra__header">
      <?php if ( $infra_title ) : ?>
        <h2 class="t24-infra__title"><?php echo esc_html( $infra_title ); ?></h2>
      <?php endif; ?>
      <span class="t24-infra__divider"></span>
      <?php if ( $infra_tagline ) : ?>
        <p class="t24-infra__tagline"><?php echo esc_html( $infra_tagline ); ?></p>
      <?php endif; ?>
    </header>

    <div class="t24-infra__body">

      <div class="t24-infra__collage">
        <?php if ( $infra_photo1 ) : ?>
          <img src="<?php echo esc_url( $infra_photo1 ); ?>" alt="Infrastructure site photo 1" class="t24-infra__img t24-infra__img--wide">
        <?php endif; ?>
        <?php if ( $infra_photo2 ) : ?>
          <img src="<?php echo esc_url( $infra_photo2 ); ?>" alt="Infrastructure site photo 2" class="t24-infra__img t24-infra__img--tall">
        <?php endif; ?>
        <?php if ( $infra_photo3 ) : ?>
          <img src="<?php echo esc_url( $infra_photo3 ); ?>" alt="Infrastructure site photo 3" class="t24-infra__img t24-infra__img--wide">
        <?php endif; ?>
      </div>

      <div class="t24-infra__steps">
        <?php foreach ( $infra_steps as $step ) : ?>
          <?php if ( $step['title'] ) : ?>
            <div class="t24-step">
              <h3 class="t24-step__title"><?php echo esc_html( $step['title'] ); ?></h3>
              <p class="t24-step__desc"><?php echo esc_html( $step['desc'] ); ?></p>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>





<!-- /* ============================================================
   T24 Project Co-Implementation — Section
============================================================ */ -->

<?php
$coimpl_title   = get_field('coimpl_title');
$coimpl_tagline = get_field('coimpl_tagline');

$coimpl_items = array(
    array( 'title' => get_field('coimpl_item1_title'), 'desc' => get_field('coimpl_item1_desc') ),
    array( 'title' => get_field('coimpl_item2_title'), 'desc' => get_field('coimpl_item2_desc') ),
    array( 'title' => get_field('coimpl_item3_title'), 'desc' => get_field('coimpl_item3_desc') ),
    array( 'title' => get_field('coimpl_item4_title'), 'desc' => get_field('coimpl_item4_desc') ),
    array( 'title' => get_field('coimpl_item5_title'), 'desc' => get_field('coimpl_item5_desc') ),
    array( 'title' => get_field('coimpl_item6_title'), 'desc' => get_field('coimpl_item6_desc') ),
);
?>

<section class="t24-coimpl">
  <div class="t24-coimpl__inner">

    <header class="t24-coimpl__header">
      <?php if ( $coimpl_title ) : ?>
        <h2 class="t24-coimpl__title"><?php echo esc_html( $coimpl_title ); ?></h2>
      <?php endif; ?>
      <span class="t24-coimpl__divider"></span>
      <?php if ( $coimpl_tagline ) : ?>
        <p class="t24-coimpl__tagline"><?php echo esc_html( $coimpl_tagline ); ?></p>
      <?php endif; ?>
    </header>

    <div class="t24-coimpl__panel">
      <div class="t24-coimpl__grid">
        <?php foreach ( $coimpl_items as $item ) : ?>
          <?php if ( $item['title'] ) : ?>
            <div class="t24-check">
              <span class="t24-check__icon">&#10003;</span>
              <div class="t24-check__text">
                <h3 class="t24-check__title"><?php echo esc_html( $item['title'] ); ?></h3>
                <p class="t24-check__desc"><?php echo esc_html( $item['desc'] ); ?></p>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</section>







<!-- /* ============================================================
   T24 Data Migration — Section
============================================================ */ -->

<?php
$mig_title    = get_field('migration_title');
$mig_tagline  = get_field('migration_tagline');
$mig_image    = get_field('migration_image');

$mig_steps = array(
    array( 'title' => get_field('mig_step1_title'), 'desc' => get_field('mig_step1_desc') ),
    array( 'title' => get_field('mig_step2_title'), 'desc' => get_field('mig_step2_desc') ),
    array( 'title' => get_field('mig_step3_title'), 'desc' => get_field('mig_step3_desc') ),
);
?>

<section class="t24-migration">
  <div class="t24-migration__inner">

    <header class="t24-migration__header">
      <?php if ( $mig_title ) : ?>
        <h2 class="t24-migration__title"><?php echo esc_html( $mig_title ); ?></h2>
      <?php endif; ?>
      <span class="t24-migration__divider"></span>
      <?php if ( $mig_tagline ) : ?>
        <p class="t24-migration__tagline"><?php echo esc_html( $mig_tagline ); ?></p>
      <?php endif; ?>
    </header>

    <div class="t24-migration__body">

      <?php if ( $mig_image ) : ?>
        <div class="t24-migration__image">
          <img src="<?php echo esc_url( $mig_image ); ?>" alt="T24 data migration screenshot" class="t24-migration__img">
        </div>
      <?php endif; ?>

      <div class="t24-migration__steps">
        <?php foreach ( $mig_steps as $step ) : ?>
          <?php if ( $step['title'] ) : ?>
            <div class="t24-step">
              <h3 class="t24-step__title"><?php echo esc_html( $step['title'] ); ?></h3>
              <p class="t24-step__desc"><?php echo esc_html( $step['desc'] ); ?></p>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>




<!-- /* ============================================================
   T24 Customization and Integration — Section
============================================================ */ -->

<?php
$custom_title   = get_field('custom_title');
$custom_tagline = get_field('custom_tagline');
$custom_image   = get_field('custom_image');

$custom_steps = array(
    array( 'title' => get_field('custom_step1_title'), 'desc' => get_field('custom_step1_desc') ),
    array( 'title' => get_field('custom_step2_title'), 'desc' => get_field('custom_step2_desc') ),
    array( 'title' => get_field('custom_step3_title'), 'desc' => get_field('custom_step3_desc') ),
);
?>

<section class="t24-custom">
  <div class="t24-custom__inner">

    <header class="t24-custom__header">
      <?php if ( $custom_title ) : ?>
        <h2 class="t24-custom__title"><?php echo esc_html( $custom_title ); ?></h2>
      <?php endif; ?>
      <span class="t24-custom__divider"></span>
      <?php if ( $custom_tagline ) : ?>
        <p class="t24-custom__tagline"><?php echo esc_html( $custom_tagline ); ?></p>
      <?php endif; ?>
    </header>

    <div class="t24-custom__body">

      <div class="t24-custom__steps">
        <?php foreach ( $custom_steps as $step ) : ?>
          <?php if ( $step['title'] ) : ?>
            <div class="t24-step">
              <h3 class="t24-step__title"><?php echo esc_html( $step['title'] ); ?></h3>
              <p class="t24-step__desc"><?php echo esc_html( $step['desc'] ); ?></p>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

      <?php if ( $custom_image ) : ?>
        <div class="t24-custom__image">
          <img src="<?php echo esc_url( $custom_image ); ?>" alt="T24 customization and integration screenshot" class="t24-custom__img">
        </div>
      <?php endif; ?>

    </div>
  </div>
</section>



<!-- /* ============================================================
   CIFRS Accounting Consultation — Section
============================================================ */ -->

<?php
$cifrs_title   = get_field('cifrs_title');
$cifrs_tagline = get_field('cifrs_tagline');

$cifrs_card1 = array(
    get_field('cifrs_c1_item1'),
    get_field('cifrs_c1_item2'),
    get_field('cifrs_c1_item3'),
    get_field('cifrs_c1_item4'),
    get_field('cifrs_c1_item5'),
    get_field('cifrs_c1_item6'),
);

$cifrs_card2 = array(
    get_field('cifrs_c2_item1'),
    get_field('cifrs_c2_item2'),
    get_field('cifrs_c2_item3'),
    get_field('cifrs_c2_item4'),
    get_field('cifrs_c2_item5'),
    get_field('cifrs_c2_item6'),
);
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/t24-solution.css">
<section class="t24-cifrs">
  <div class="t24-cifrs__inner">

    <header class="t24-cifrs__header">
      <?php if ( $cifrs_title ) : ?>
        <h2 class="t24-cifrs__title"><?php echo esc_html( $cifrs_title ); ?></h2>
      <?php endif; ?>
      <span class="t24-cifrs__divider"></span>
      <?php if ( $cifrs_tagline ) : ?>
        <p class="t24-cifrs__tagline"><?php echo esc_html( $cifrs_tagline ); ?></p>
      <?php endif; ?>
    </header>

    <div class="t24-cifrs__panel">
      <div class="t24-cifrs__grid">

        <div class="t24-cifrs__card">
          <ul class="t24-cifrs__list">
            <?php foreach ( $cifrs_card1 as $item ) : ?>
              <?php if ( $item ) : ?>
                <li><span class="t24-cifrs__icon">&#10003;</span><?php echo esc_html( $item ); ?></li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
        </div>

        <div class="t24-cifrs__card">
          <ul class="t24-cifrs__list">
            <?php foreach ( $cifrs_card2 as $item ) : ?>
              <?php if ( $item ) : ?>
                <li><span class="t24-cifrs__icon">&#10003;</span><?php echo esc_html( $item ); ?></li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
        </div>

      </div>
    </div>

  </div>
</section>





<!-- /* ===========================================================
  COMPLIANCE CONSULTATION
============================================================ */ -->

<?php
$wh_title    = get_field('warehouse_title');
$wh_tagline  = get_field('warehouse_tagline');
$wh_image    = get_field('warehouse_image');
$wh_item1    = get_field('warehouse_item1');
$wh_item2    = get_field('warehouse_item2');
$wh_item3    = get_field('warehouse_item3');
$wh_item4    = get_field('warehouse_item4');
?>

<section class="t24-warehouse">
  <div class="t24-warehouse__inner">

    <header class="t24-warehouse__header">
      <?php if ( $wh_title ) : ?>
        <h2 class="t24-warehouse__title"><?php echo esc_html( $wh_title ); ?></h2>
      <?php endif; ?>
      <span class="t24-warehouse__divider"></span>
      <?php if ( $wh_tagline ) : ?>
        <p class="t24-warehouse__tagline"><?php echo esc_html( $wh_tagline ); ?></p>
      <?php endif; ?>
    </header>

    <div class="t24-warehouse__panel">
      <div class="t24-warehouse__body">

        <?php if ( $wh_image ) : ?>
          <div class="t24-warehouse__image">
            <img src="<?php echo esc_url( $wh_image ); ?>" alt="VBANX Data Warehouse" class="t24-warehouse__img">
          </div>
        <?php endif; ?>

        <ul class="t24-warehouse__list">
          <?php if ( $wh_item1 ) : ?>
            <li><span class="t24-warehouse__icon">&#10003;</span><?php echo esc_html( $wh_item1 ); ?></li>
          <?php endif; ?>
          <?php if ( $wh_item2 ) : ?>
            <li><span class="t24-warehouse__icon">&#10003;</span><?php echo esc_html( $wh_item2 ); ?></li>
          <?php endif; ?>
          <?php if ( $wh_item3 ) : ?>
            <li><span class="t24-warehouse__icon">&#10003;</span><?php echo esc_html( $wh_item3 ); ?></li>
          <?php endif; ?>
          <?php if ( $wh_item4 ) : ?>
            <li><span class="t24-warehouse__icon">&#10003;</span><?php echo esc_html( $wh_item4 ); ?></li>
          <?php endif; ?>
        </ul>

      </div>
    </div>

  </div>
</section>





<!-- /* ============================================================
   VBANX Data Warehouse — Section
============================================================ */ -->

<?php
$wh_title    = get_field('warehouse11');
$wh_tagline  = get_field('warehouse111');
$wh_item1    = get_field('warehouse_1');
$wh_item2    = get_field('warehouse2');
$wh_item3    = get_field('warehouse3');
$wh_item4    = get_field('warehouse4');
?>

<section class="t24-warehouse">
  <div class="t24-warehouse__inner">

    <header class="t24-warehouse__header">
      <?php if ( $wh_title ) : ?>
        <h2 class="t24-warehouse__title"><?php echo esc_html( $wh_title ); ?></h2>
      <?php endif; ?>
      <span class="t24-warehouse__divider"></span>
      <?php if ( $wh_tagline ) : ?>
        <p class="t24-warehouse__tagline"><?php echo esc_html( $wh_tagline ); ?></p>
      <?php endif; ?>
    </header>

    <div class="t24-warehouse__panel">
      <div class="t24-warehouse__grid">

        <div class="t24-warehouse__card">
          <ul class="t24-warehouse__list">
            <?php if ( $wh_item1 ) : ?>
              <li><span class="t24-warehouse__icon">&#10003;</span><?php echo esc_html( $wh_item1 ); ?></li>
            <?php endif; ?>
            <?php if ( $wh_item2 ) : ?>
              <li><span class="t24-warehouse__icon">&#10003;</span><?php echo esc_html( $wh_item2 ); ?></li>
            <?php endif; ?>
          </ul>
        </div>

        <div class="t24-warehouse__card">
          <ul class="t24-warehouse__list">
            <?php if ( $wh_item3 ) : ?>
              <li><span class="t24-warehouse__icon">&#10003;</span><?php echo esc_html( $wh_item3 ); ?></li>
            <?php endif; ?>
            <?php if ( $wh_item4 ) : ?>
              <li><span class="t24-warehouse__icon">&#10003;</span><?php echo esc_html( $wh_item4 ); ?></li>
            <?php endif; ?>
          </ul>
        </div>

      </div>
    </div>

  </div>
</section>





<!-- /* ============================================================
   09. T24 Annual Support — Section
============================================================ */ -->

<?php
$support_title   = get_field('support_title');
$support_tagline = get_field('support_tagline');
$support_image   = get_field('support_image');

$support_steps = array(
    array( 'title' => get_field('support_step1_title'), 'desc' => get_field('support_step1_desc') ),
    array( 'title' => get_field('support_step2_title'), 'desc' => get_field('support_step2_desc') ),
    array( 'title' => get_field('support_step3_title'), 'desc' => get_field('support_step3_desc') ),
);
?>

<section class="t24-support">
  <div class="t24-support__inner">

    <header class="t24-support__header">
      <?php if ( $support_title ) : ?>
        <h2 class="t24-support__title"><?php echo esc_html( $support_title ); ?></h2>
      <?php endif; ?>
      <span class="t24-support__divider"></span>
      <?php if ( $support_tagline ) : ?>
        <p class="t24-support__tagline"><?php echo esc_html( $support_tagline ); ?></p>
      <?php endif; ?>
    </header>

    <div class="t24-support__panel">
      <div class="t24-support__body">

        <?php if ( $support_image ) : ?>
          <div class="t24-support__image">
            <img src="<?php echo esc_url( $support_image ); ?>" alt="T24 annual support team photo" class="t24-support__img">
          </div>
        <?php endif; ?>

        <div class="t24-support__steps">
          <?php foreach ( $support_steps as $step ) : ?>
            <?php if ( $step['title'] ) : ?>
              <div class="t24-step">
                <h3 class="t24-step__title"><?php echo esc_html( $step['title'] ); ?></h3>
                <p class="t24-step__desc"><?php echo esc_html( $step['desc'] ); ?></p>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>

      </div>
    </div>

  </div>
</section>







<?php get_footer(); ?>
