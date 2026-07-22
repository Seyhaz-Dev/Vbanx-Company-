<?php
/**
 * Component: six-pillars-card.php
 * "Six Pillars, One Platform" section — 6 alternating pillar cards
 * using flat ACF fields (part_1_label, part_1_title, part_1_icon,
 * part_1_point_1 .. part_1_point_4 ... part_6_*)
 *
 * Include this from your Ecosystem page template with:
 *   get_template_part( 'components/six-pillars-card' );
 */
?>

<section class="eco-pillars">
	<h2><?php echo esc_html( get_field( 'pillars_heading' ) ); ?></h2>
	<p><?php echo esc_html( get_field( 'pillars_subtext' ) ); ?></p>

	<div class="eco-pillars-timeline">
		<?php for ( $i = 1; $i <= 6; $i++ ) :
			$label = get_field( "part_{$i}_label" );
			$title = get_field( "part_{$i}_title" );
			$icon  = get_field( "part_{$i}_icon" );

			if ( ! $title ) {
				continue; // skip empty pillars
			}

			$side = ( $i % 2 === 0 ) ? 'right' : 'left'; // alternating zigzag
		?>
			<div class="eco-pillar-item eco-pillar-<?php echo esc_attr( $side ); ?>">

				<?php if ( $icon ) : ?>
					<div class="eco-pillar-icon">
						<img src="<?php echo esc_url( $icon ); ?>" alt="<?php echo esc_attr( $title ); ?>">
					</div>
				<?php endif; ?>

				<div class="eco-pillar-card">
					<span class="eco-pillar-label"><?php echo esc_html( $label ); ?></span>
					<h3><?php echo esc_html( $title ); ?></h3>

					<ul class="eco-pillar-points">
						<?php for ( $p = 1; $p <= 4; $p++ ) :
							$point = get_field( "part_{$i}_point_{$p}" );
							if ( ! $point ) {
								continue;
							}
						?>
							<li><?php echo esc_html( $point ); ?></li>
						<?php endfor; ?>
					</ul>
				</div>

			</div>
		<?php endfor; ?>
	</div>
</section>