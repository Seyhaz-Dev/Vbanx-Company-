<?php
/**
 * Component: card-ecosystem.php
 * "What We Do" section — 6 cards using flat ACF fields
 * (card_1_icon, card_1_number, card_1_title, card_1_description ... card_6_*)
 *
 * Include this from your Ecosystem page template with:
 *   get_template_part( 'components/card-ecosystem' );
 */
?>

<section class="eco-what-we-do">
	<h2><?php echo esc_html( get_field( 'section_heading' ) ); ?></h2>
	<p><?php echo esc_html( get_field( 'section_subtext' ) ); ?></p>

	<div class="eco-cards-grid">
		<?php for ( $i = 1; $i <= 6; $i++ ) :
			$icon  = get_field( "card_{$i}_icon" );
			$num   = get_field( "card_{$i}_number" );
			$title = get_field( "card_{$i}_title" );
			$desc  = get_field( "card_{$i}_description" );

			if ( ! $title ) {
				continue; // skip empty cards
			}
		?>
			<div class="eco-card">
				<?php if ( $icon ) : ?>
					<img class="eco-card-icon" src="<?php echo esc_url( $icon ); ?>" alt="<?php echo esc_attr( $title ); ?>">
				<?php endif; ?>

				<?php if ( $num ) : ?>
					<span class="eco-card-number"><?php echo esc_html( $num ); ?></span>
				<?php endif; ?>

				<h3><?php echo esc_html( $title ); ?></h3>
				<p><?php echo esc_html( $desc ); ?></p>
			</div>
		<?php endfor; ?>
	</div>
</section>