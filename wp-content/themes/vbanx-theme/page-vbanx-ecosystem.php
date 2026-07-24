<?php
/*
Template Name: VBANX Ecosystem Page
*/

get_header();

if (! function_exists('get_field')) {
	echo '<h2>ACF is not active.</h2>';
	get_footer();
	exit;
}

$eyebrow      = get_field('hero_eyebrow');
$title_accent = get_field('hero_title_accent');
$title_main   = get_field('hero_title_main');
$description  = get_field('hero_description');
$bg_photo     = get_field('hero_image'); // <-- use your actual field name here (check ACF: is it hero_image, hero_bg_photo, hero_img, etc.)
$btn_text     = get_field('hero_btn_text') ?: get_field('hero_button_text');
$btn_link     = get_field('hero_btn_link') ?: get_field('hero_button_url');
$logo1        = get_field('hero_logo1');
$logo2        = get_field('hero_logo2');
?>

<section class="eco-hero-banner">
	<div class="eco-hero-banner__inner">

		<?php if ($bg_photo) : ?>
			<img class="eco-hero-banner__bg" src="<?php echo esc_url($bg_photo); ?>" alt="<?php echo esc_attr($title_accent); ?>">
		<?php endif; ?>

		<svg class="eco-hero-banner__icon eco-hero-banner__icon--wifi" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
			<path d="M5 12.5a11 11 0 0 1 14 0" />
			<path d="M8.5 16a6 6 0 0 1 7 0" />
			<circle cx="12" cy="19.5" r="1.2" fill="#fff" stroke="none" />
		</svg>

		<svg class="eco-hero-banner__icon eco-hero-banner__icon--pin" viewBox="0 0 24 24" fill="#fff">
			<path d="M12 2C7.6 2 4 5.6 4 10c0 6 8 12 8 12s8-6 8-12c0-4.4-3.6-8-8-8zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
		</svg>

		<div class="eco-hero-banner__panel">
			<?php if ($eyebrow) : ?>
				<p class="eco-hero-banner__eyebrow"><?php echo esc_html($eyebrow); ?></p>
			<?php endif; ?>

			<h1 class="eco-hero-banner__title">
				<?php if ($title_accent) : ?>
					<span class="eco-hero-banner__title-accent"><?php echo esc_html($title_accent); ?></span>
				<?php endif; ?>
				<?php if ($title_main) : ?>
					<span class="eco-hero-banner__title-main"><?php echo esc_html($title_main); ?></span>
				<?php endif; ?>
			</h1>

			<?php if ($description) : ?>
				<p class="eco-hero-banner__desc"><?php echo esc_html($description); ?></p>
			<?php endif; ?>

			<?php if ($btn_text) : ?>
				<a href="<?php echo esc_url($btn_link ?: '#'); ?>" class="eco-hero-banner__cta">
					<?php echo esc_html($btn_text); ?>
				</a>
			<?php endif; ?>

			<div class="eco-hero-banner__logos">
				<?php if ($logo1) : ?>
					<img class="eco-hero-banner-logo1" src="<?php echo esc_url($logo1); ?>" alt="Logo 1">
				<?php endif; ?>
				<?php if ($logo2) : ?>
					<img class="eco-hero-banner-logo2" src="<?php echo esc_url($logo2); ?>" alt="Logo 2">
				<?php endif; ?>
			</div>
		</div>

	</div>
</section>

<?php
// ---------- WHAT WE DO (6 cards, flat fields, loop 1–6) ----------
?>
<section class="eco-what-we-do">
	<h2><?php echo esc_html(get_field('section_heading')); ?></h2>
	<p><?php echo esc_html(get_field('section_subtext')); ?></p>

	<div class="eco-cards-grid">
		<?php for ($i = 1; $i <= 6; $i++) :
			$icon  = get_field("card_{$i}_icon");
			$num   = get_field("card_{$i}_number");
			$title = get_field("card_{$i}_title");
			$desc  = get_field("card_{$i}_description");
			if (! $title) continue; // skip empty cards
		?>
			<div class="eco-card">
				<?php if ($icon) : ?>
					<img class="eco-card-icon" src="<?php echo esc_url($icon); ?>" alt="<?php echo esc_attr($title); ?>">
				<?php endif; ?>
				<?php if ($num) : ?><span class="eco-card-number"><?php echo esc_html($num); ?></span><?php endif; ?>
				<h3><?php echo esc_html($title); ?></h3>
				<p><?php echo esc_html($desc); ?></p>
			</div>
		<?php endfor; ?>
	</div>
</section>

<?php
// ---------- SIX PILLARS (6 parts, flat fields, up to 4 bullet points each) ----------
?>
<section class="eco-pillars">
	<h2><?php echo esc_html(get_field('pillars_heading')); ?></h2>
	<p><?php echo esc_html(get_field('pillars_subtext')); ?></p>

	<div class="eco-pillars-timeline">
		<?php for ($i = 1; $i <= 6; $i++) :
			$label = get_field("part_{$i}_label");
			$title = get_field("part_{$i}_title");
			$icon  = get_field("part_{$i}_icon");
			if (! $title) continue; // skip empty pillars

			// Icon starts on the LEFT for part 1, then alternates:
			// odd parts (1,3,5) => icon left / card right
			// even parts (2,4,6) => card left / icon right
			$side = ($i % 2 === 0) ? 'left' : 'right';
		?>
			<div class="eco-pillar-item eco-pillar-<?php echo esc_attr($side); ?>">
				<?php if ($icon) : ?>
					<div class="eco-pillar-icon">
						<img src="<?php echo esc_url($icon); ?>" alt="<?php echo esc_attr($title); ?>">
					</div>
				<?php endif; ?>

				<div class="eco-pillar-card" tabindex="0" role="button" aria-label="View <?php echo esc_attr($title); ?> full screen">
					<span class="eco-pillar-label"><?php echo esc_html($label); ?></span>
					<h3><?php echo esc_html($title); ?></h3>

					<ul class="eco-pillar-points">
						<?php for ($p = 1; $p <= 4; $p++) :
							$point = get_field("part_{$i}_point_{$p}");
							if (! $point) continue;
						?>
							<li><?php echo esc_html($point); ?></li>
						<?php endfor; ?>
					</ul>
				</div>
			</div>
		<?php endfor; ?>
	</div>
</section>

<!-- Full-screen modal for pillar cards -->
<div class="eco-pillar-modal" id="ecoPillarModal">
	<div class="eco-pillar-modal__overlay" data-eco-close></div>
	<div class="eco-pillar-modal__panel">
		<button type="button" class="eco-pillar-modal__close" data-eco-close aria-label="Close">&times;</button>
		<span class="eco-pillar-modal__label" id="ecoPillarModalLabel"></span>
		<h3 class="eco-pillar-modal__title" id="ecoPillarModalTitle"></h3>
		<ul class="eco-pillar-modal__points" id="ecoPillarModalPoints"></ul>
	</div>
</div>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		var modal = document.getElementById('ecoPillarModal');
		var modalLabel = document.getElementById('ecoPillarModalLabel');
		var modalTitle = document.getElementById('ecoPillarModalTitle');
		var modalPoints = document.getElementById('ecoPillarModalPoints');
		var cards = document.querySelectorAll('.eco-pillar-card');

		function openModal(card) {
			var label = card.querySelector('.eco-pillar-label');
			var title = card.querySelector('h3');
			var points = card.querySelectorAll('.eco-pillar-points li');

			modalLabel.textContent = label ? label.textContent : '';
			modalTitle.textContent = title ? title.textContent : '';
			modalPoints.innerHTML = '';
			points.forEach(function(li) {
				var newLi = document.createElement('li');
				newLi.textContent = li.textContent;
				modalPoints.appendChild(newLi);
			});

			modal.classList.add('is-open');
			document.body.style.overflow = 'hidden';
		}

		function closeModal() {
			modal.classList.remove('is-open');
			document.body.style.overflow = '';
		}

		cards.forEach(function(card) {
			card.addEventListener('click', function() {
				openModal(card);
			});
			card.addEventListener('keydown', function(e) {
				if (e.key === 'Enter' || e.key === ' ') {
					e.preventDefault();
					openModal(card);
				}
			});
		});

		modal.querySelectorAll('[data-eco-close]').forEach(function(el) {
			el.addEventListener('click', closeModal);
		});

		document.addEventListener('keydown', function(e) {
			if (e.key === 'Escape' && modal.classList.contains('is-open')) {
				closeModal();
			}
		});
	});
</script>

<?php
get_template_part('template-parts/footer');
