<?php
/**
 * Template Name: Ecosystem
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>


<main class="ecosystem-page">
<section class="hero-section">
    <?php $bg = get_field('hero_background'); if ($bg): ?>
        <?php if (is_array($bg)): ?>
            <img src="<?php echo esc_url($bg['url']); ?>" alt="<?php echo esc_attr($bg['alt']); ?>">
        <?php else: ?>
            <img src="<?php echo esc_url($bg); ?>" alt="Hero Background">
        <?php endif; ?>
    <?php endif; ?>

    <div class="container">

        <?php if (get_field('hero_credit_line1')): ?>
            <div class="hero-credit">
                <p><?php echo esc_html(get_field('hero_credit_line1')); ?></p>
                <p><?php echo esc_html(get_field('hero_credit_line2')); ?></p>
            </div>
        <?php endif; ?>

        <?php if (get_field('hero_small_title')): ?>
            <span class="badge-text"><?php echo esc_html(get_field('hero_small_title')); ?></span>
        <?php endif; ?>

        <h1>
            <?php echo esc_html(get_field('hero_title')); ?><br>
            <span class="hero-highlight"><?php echo esc_html(get_field('hero_title_highlight')); ?></span>
        </h1>

        <p><?php echo esc_html(get_field('hero_description')); ?></p>

        <div class="hero-buttons">
            <?php if (get_field('button_1_text')): ?>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>">
        <?php echo esc_html(get_field('button_1_text')); ?>
    </a>
<?php endif; ?>

<?php if (get_field('button_2_text')): ?>
    <a href="<?php echo esc_url(home_url('/t24-solution/')); ?>">
        <?php echo esc_html(get_field('button_2_text')); ?>
    </a>
<?php endif; ?>
        </div>

    </div>
</section>

<!-- ================= DATA STREAMING HUB ================= -->
<section class="data-block">
  <div class="container data-block-grid">
    <div class="data-block-text">
      <span class="badge-text"><?php echo esc_html(get_field('streaming_eyebrow')); ?></span>
      <h2><?php echo esc_html(get_field('streaming_title')); ?></h2>
      <p><?php echo esc_html(get_field('streaming_description')); ?></p>
      <ul class="check-list">
        <?php
        $checklist = get_field('streaming_checklist');
        $items = array_filter(array_map('trim', explode("\n", $checklist)));
        foreach ($items as $item): ?>
          <li><span class="check-icon">✓</span><?php echo esc_html($item); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <?php $diagram = get_field('streaming_diagram'); if ($diagram): ?>
      <div class="data-block-image">
        <?php if (is_array($diagram)): ?>
          <img src="<?php echo esc_url($diagram['url']); ?>"
               alt="<?php echo esc_attr($diagram['alt']); ?>">
        <?php else: ?>
          <img src="<?php echo esc_url($diagram); ?>" alt="Streaming Diagram">
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</section>


<!-- ================= CIFRS INTEGRATION ENGINE ================= -->
<!-- "data-block-grid-reverse" removed: the image <div> is already first
     in the HTML below, so plain row order already puts image-left /
     text-right. Adding reverse on top of that flipped it backwards. -->
<section class="data-block data-block-highlight">
  <div class="container data-block-grid">

    <?php $cifrs_diagram = get_field('cifrs_diagram'); if ($cifrs_diagram): ?>
      <div class="data-block-image">
        <?php if (is_array($cifrs_diagram)): ?>
          <img src="<?php echo esc_url($cifrs_diagram['url']); ?>"
               alt="<?php echo esc_attr($cifrs_diagram['alt']); ?>">
        <?php else: ?>
          <img src="<?php echo esc_url($cifrs_diagram); ?>" alt="Cifrs Diagram">
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <div class="data-block-text">
      <span class="badge-text"><?php echo esc_html(get_field('cifrs_eyebrow')); ?></span>
      <h2><?php echo esc_html(get_field('cifrs_title')); ?></h2>
      <p><?php echo esc_html(get_field('cifrs_description')); ?></p>
      <ul class="check-list">
        <?php
        $checklist = get_field('cifrs_checklist');
        $items = array_filter(array_map('trim', explode("\n", $checklist)));
        foreach ($items as $item): ?>
          <li><span class="check-icon">✓</span><?php echo esc_html($item); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<!-- ================= ENTERPRISE DATA WAREHOUSE ================= -->
<section class="data-block">
  <div class="container data-block-grid">
    <div class="data-block-text">
      <span class="badge-text"><?php echo esc_html(get_field('warehouse_eyebrow')); ?></span>
      <h2><?php echo esc_html(get_field('warehouse_title')); ?></h2>
      <p><?php echo esc_html(get_field('warehouse_description')); ?></p>
      <ul class="check-list">
        <?php
        $items = array_filter(array_map('trim', explode("\n", get_field('warehouse_checklist'))));
        foreach ($items as $item): ?>
          <li><span class="check-icon">✓</span><?php echo esc_html($item); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php $img = get_field('warehouse_diagram'); if ($img): ?>
      <div class="data-block-image">
        <?php if (is_array($img)): ?>
          <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
        <?php else: ?>
          <img src="<?php echo esc_url($img); ?>" alt="Data Warehouse Diagram">
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</section>


<!-- ================= ECOSYSTEM GATEWAY ================= -->
<!-- "data-block-grid-reverse" removed here too, same reason as CIFRS above. -->
<section class="data-block data-block-highlight">
  <div class="container data-block-grid">
    <?php $img = get_field('gateway_diagram'); if ($img): ?>
      <div class="data-block-image">
        <?php if (is_array($img)): ?>
          <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
        <?php else: ?>
          <img src="<?php echo esc_url($img); ?>" alt="EcoSystem Gateway Diagram">
        <?php endif; ?>
      </div>
    <?php endif; ?>
    <div class="data-block-text">
      <span class="badge-text"><?php echo esc_html(get_field('gateway_eyebrow')); ?></span>
      <h2><?php echo esc_html(get_field('gateway_title')); ?></h2>
      <p><?php echo esc_html(get_field('gateway_description')); ?></p>
      <ul class="check-list">
        <?php
        $items = array_filter(array_map('trim', explode("\n", get_field('gateway_checklist'))));
        foreach ($items as $item): ?>
          <li><span class="check-icon">✓</span><?php echo esc_html($item); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>


<!-- ================= VCLOUDIA BANKING CLOUD ================= -->
<section class="data-block">
  <div class="container data-block-grid">
    <div class="data-block-text">
      <span class="badge-text"><?php echo esc_html(get_field('vcloudia_eyebrow')); ?></span>
      <h2><?php echo esc_html(get_field('vcloudia_title')); ?></h2>
      <p><?php echo esc_html(get_field('vcloudia_description')); ?></p>
      <ul class="check-list">
        <?php
        $items = array_filter(array_map('trim', explode("\n", get_field('vcloudia_checklist'))));
        foreach ($items as $item): ?>
          <li><span class="check-icon">✓</span><?php echo esc_html($item); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php $img = get_field('vcloudia_diagram'); if ($img): ?>
      <div class="data-block-image">
        <?php if (is_array($img)): ?>
          <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
        <?php else: ?>
          <img src="<?php echo esc_url($img); ?>" alt="Vcloudia Banking Cloud">
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- ================= ODOO ERP INTEGRATION ================= -->
<section class="data-block data-block-highlight">


  <div class="container data-block-grid">

      <?php $img = get_field('odoo_diagram'); if ($img): ?>
      <div class="data-block-image">
        <?php if (is_array($img)): ?>
          <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
        <?php else: ?>
          <img src="<?php echo esc_url($img); ?>" alt="Odoo ERP Diagram">
        <?php endif; ?>
      </div>
    <?php endif; ?>
    <div class="data-block-text">
      <span class="badge-text"><?php echo esc_html(get_field('odoo_eyebrow')); ?></span>
      <h2><?php echo esc_html(get_field('odoo_title')); ?></h2>
      <p><?php echo esc_html(get_field('odoo_description')); ?></p>
      <ul class="check-list">
        <?php
        $items = array_filter(array_map('trim', explode("\n", get_field('odoo_checklist'))));
        foreach ($items as $item): ?>
          <li><span class="check-icon">✓</span><?php echo esc_html($item); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>

  </div>
</section>


</main>




<?php
get_footer();
?>