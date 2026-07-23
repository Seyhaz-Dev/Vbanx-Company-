
<!-- /* ============================================================
   OAMBanking Hero — Section
============================================================ */ -->

<?php
/**
 * Template Name: OAM Banking Page
 */

get_header();


$oam_eyebrow   = get_field('oam_eyebrow');
$oam_title1    = get_field('oam_title1');
$oam_title2    = get_field('oam_title2');
$oam_desc      = get_field('oam_hero_desc');
$oam_btn       = get_field('oam_hero_btn');
$oam_bg        = get_field('oam_hero_bg');
?>
<section class="oam-hero">
  <div class="oam-hero__inner" <?php if ( $oam_bg ) : ?>style="background-image: url('<?php echo esc_url( $oam_bg ); ?>');"<?php endif; ?>>
    <div class="oam-hero__panel">
      <?php if ( $oam_eyebrow ) : ?>
        <p class="oam-hero__eyebrow"><?php echo esc_html( $oam_eyebrow ); ?></p>
      <?php endif; ?>
      <h1 class="oam-hero__title">
        <?php if ( $oam_title1 ) : ?>
          <span class="oam-hero__title-accent"><?php echo esc_html( $oam_title1 ); ?></span>
        <?php endif; ?>
        <?php if ( $oam_title2 ) : ?>
          <span class="oam-hero__title-main"><?php echo esc_html( $oam_title2 ); ?></span>
        <?php endif; ?>
      </h1>
      <?php if ( $oam_desc ) : ?>
        <p class="oam-hero__desc"><?php echo esc_html( $oam_desc ); ?></p>
      <?php endif; ?>
      <?php if ( $oam_btn ) : ?>
        <a href="#demo" class="oam-hero__cta"><?php echo esc_html( $oam_btn ); ?></a>
      <?php endif; ?>
    </div>
  </div>
</section>






<!-- /* ============================================================
   What We Do — Section
============================================================ */ -->

<?php
$wwd_tagline = get_field('whatwedo_tagline');
$wwd_image   = get_field('whatwedo_image');

$wwd_steps = array(
    array( 'title' => get_field('wwd_step1_title'), 'desc' => get_field('wwd_step1_desc') ),
    array( 'title' => get_field('wwd_step2_title'), 'desc' => get_field('wwd_step2_desc') ),
    array( 'title' => get_field('wwd_step3_title'), 'desc' => get_field('wwd_step3_desc') ),
);
?>

<section class="oam-whatwedo">
  <div class="oam-whatwedo__inner">
    <header class="oam-whatwedo__header">
      <h2 class="oam-whatwedo__title">What we do?</h2>
      <span class="oam-whatwedo__divider"></span>
      <?php if ( $wwd_tagline ) : ?>
        <p class="oam-whatwedo__tagline"><?php echo esc_html( $wwd_tagline ); ?></p>
      <?php endif; ?>
    </header>

    <div class="oam-whatwedo__body">
      <div class="oam-whatwedo__steps">
        <?php foreach ( $wwd_steps as $i => $step ) : ?>
          <?php if ( $step['title'] ) : ?>
            <div class="oam-step">
              <div class="oam-step__number"><?php echo str_pad( $i + 1, 2, '0', STR_PAD_LEFT ); ?></div>
              <span class="oam-step__underline"></span>
              <h3 class="oam-step__title"><?php echo esc_html( $step['title'] ); ?></h3>
              <p class="oam-step__desc"><?php echo esc_html( $step['desc'] ); ?></p>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

      <?php if ( $wwd_image ) : ?>
        <div class="oam-whatwedo__image">
          <img src="<?php echo esc_url( $wwd_image ); ?>" alt="OAMBanking app screenshots" class="oam-whatwedo__img">
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>







<!-- /* ============================================================
   OAMBanking Features — Section
============================================================ */ -->

<?php
$oam_feat_tagline = get_field('oam_feat_tagline');

$oam_icons = array(

    // Robot
    '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 640 640">
        <path d="M320 64C337.7 64 352 78.3 352 96L352 128L416 128C451.3 128 480 156.7 480 192L480 448C480 483.3 451.3 512 416 512L224 512C188.7 512 160 483.3 160 448L160 192C160 156.7 188.7 128 224 128L288 128L288 96C288 78.3 302.3 64 320 64zM256 288C273.7 288 288 273.7 288 256C288 238.3 273.7 224 256 224C238.3 224 224 238.3 224 256C224 273.7 238.3 288 256 288zM384 288C401.7 288 416 273.7 416 256C416 238.3 401.7 224 384 224C366.3 224 352 238.3 352 256C352 273.7 366.3 288 384 288z"/>
    </svg>',

    // Chart
    '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
        <path d="M32 32h32v416h416v32H32zM128 352h64V160h-64zm96 0h64V64h-64zm96 0h64V224h-64z"/>
    </svg>',

    // Lock
    '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
        <path d="M144 192V128C144 83.8 179.8 48 224 48S304 83.8 304 128v64H144zm192 0V128C336 66.1 285.9 16 224 16S112 66.1 112 128v64H80c-26.5 0-48 21.5-48 48v224c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V240c0-26.5-21.5-48-48-48h-32z"/>
    </svg>',

    // Check
    '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
        <path d="M400 32H48C21.5 32 0 53.5 0 80V432c0 26.5 21.5 48 48 48H400c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM183 343L87 247l34-34 62 62 144-144 34 34L183 343z"/>
    </svg>',

    // Mobile
    '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 384 512">
        <path d="M80 0C53.5 0 32 21.5 32 48V464c0 26.5 21.5 48 48 48H304c26.5 0 48-21.5 48-48V48C352 21.5 330.5 0 304 0H80zM192 480a32 32 0 100-64 32 32 0 100 64z"/>
    </svg>',

    // Building
    '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 640 640">
        <path d="M320 64L32 192v64h64v256H32v64h576v-64h-64V256h64V192L320 64zm-96 192h64v256h-64zm128 0h64v256h-64z"/>
    </svg>',
);

$oam_features = array(
    array( 'title' => get_field('oam_f1_title'), 'desc' => get_field('oam_f1_desc') ),
    array( 'title' => get_field('oam_f2_title'), 'desc' => get_field('oam_f2_desc') ),
    array( 'title' => get_field('oam_f3_title'), 'desc' => get_field('oam_f3_desc') ),
    array( 'title' => get_field('oam_f4_title'), 'desc' => get_field('oam_f4_desc') ),
    array( 'title' => get_field('oam_f5_title'), 'desc' => get_field('oam_f5_desc') ),
    array( 'title' => get_field('oam_f6_title'), 'desc' => get_field('oam_f6_desc') ),
);
?>
<section class="oam-features">
  <div class="oam-features__inner">
    <header class="oam-features__header">
      <h2 class="oam-features__title">OAM<span class="oam-features__title-accent">Banking</span></h2>
      <span class="oam-whatwedo__divider"></span>
      <span class="oam-features__divider"></span>
      <?php if ( $oam_feat_tagline ) : ?>
        <p class="oam-features__tagline"><?php echo esc_html( $oam_feat_tagline ); ?></p>
      <?php endif; ?>
    </header>

    <div class="oam-features__grid">
      <?php foreach ( $oam_features as $i => $feat ) : ?>
        <?php if ( $feat['title'] ) : ?>
          <div class="oam-feature">
            <div class="oam-feature__icon"><?php echo $oam_icons[ $i ]; ?></div>
            <h3 class="oam-feature__title"><?php echo esc_html( $feat['title'] ); ?></h3>
            <p class="oam-feature__desc"><?php echo esc_html( $feat['desc'] ); ?></p>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>




<?php get_footer(); ?>