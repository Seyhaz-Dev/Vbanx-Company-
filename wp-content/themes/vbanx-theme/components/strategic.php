<?php

$strategics = [

    [
        'logo' => get_field('strategic_1_logo'),
        'partner_name' => get_field('strategic_1_name'),
        'description' => get_field('strategic_1_description'),
        'badge' => get_field('strategic_1_badge'),
        'status' => get_field('strategic_1_status'),
        'pattern' => get_field('strategic_1_pattern'),
    ],
    [
        'logo' => get_field('strategic_2_logo'),
        'partner_name' => get_field('strategic_2_name'),
        'description' => get_field('strategic_2_description'),
        'badge' => get_field('strategic_2_badge'),
        'status' => get_field('strategic_2_status'),
        'pattern' => get_field('strategic_2_pattern'),
    ],
    [
        'logo' => get_field('strategic_3_logo'),
        'partner_name' => get_field('strategic_3_name'),
        'description' => get_field('strategic_3_description'),
        'badge' => get_field('strategic_3_badge'),
        'status' => get_field('strategic_3_status'),
        'pattern' => get_field('strategic_3_pattern'),
    ],
    [
        'logo' => get_field('strategic_4_logo'),
        'partner_name' => get_field('strategic_4_name'),
        'description' => get_field('strategic_4_description'),
        'badge' => get_field('strategic_4_badge'),
        'status' => get_field('strategic_4_status'),
        'pattern' => get_field('strategic_4_pattern'),
    ],
    [
        'logo' => get_field('strategic_5_logo'),
        'partner_name' => get_field('strategic_5_name'),
        'description' => get_field('strategic_5_description'),
        'badge' => get_field('strategic_5_badge'),
        'status' => get_field('strategic_5_status'),
        'pattern' => get_field('strategic_5_pattern'),
    ],
    [
        'logo' => get_field('strategic_6_logo'),
        'partner_name' => get_field('strategic_6_name'),
        'description' => get_field('strategic_6_description'),
        'badge' => get_field('strategic_6_badge'),
        'status' => get_field('strategic_6_status'),
        'pattern' => get_field('strategic_6_pattern'),
    ],

];

?>

<div class="strategic-cards-container">

    <?php foreach ($strategics as $card): ?>

        <div class="strategic-card">

            <?php if ($card['pattern']): ?>
                <img
                    class="strategic-card-pattern"
                    src="<?php echo esc_url($card['pattern']['url']); ?>"
                    alt="">
            <?php endif; ?>

            <?php if ($card['logo']): ?>
                <img
                    class="strategic-card-logo"
                    src="<?php echo esc_url($card['logo']['url']); ?>"
                    alt="<?php echo esc_attr($card['partner_name']); ?>">
            <?php endif; ?>

            <?php if ($card['badge']): ?>
                <div class="strategic-card-badge">
                    <?php echo esc_html($card['badge']); ?>
                </div>
            <?php endif; ?>

            <h3 class="strategic-card-title">
                <?php echo esc_html($card['partner_name']); ?>
            </h3>

            <p class="strategic-card-description">
                <?php echo esc_html($card['description']); ?>
            </p>

            <?php if ($card['status']): ?>
                <div class="strategic-card-status">
                    <?php echo esc_html($card['status']); ?>
                </div>
            <?php endif; ?>

        </div>

    <?php endforeach; ?>

</div>