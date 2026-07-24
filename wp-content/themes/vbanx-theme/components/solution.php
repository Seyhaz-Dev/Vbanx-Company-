<?php

$solutions = [

     [
        'logo' => get_field('solution_1_logo'),
        'partner_name' => get_field('solution_1_name'),
        'description' => get_field('solution_1_description'),
        'badge' => get_field('solution_1_badge'),
        'status' => get_field('solution_1_status'),
        'pattern' => get_field('solution_1_pattern'),
    ],

    [
        'logo' => get_field('solution_2_logo'),
        'partner_name' => get_field('solution_2_name'),
        'description' => get_field('solution_2_description'),
        'badge' => get_field('solution_2_badge'),
        'status' => get_field('solution_2_status'),
        'pattern' => get_field('solution_2_pattern'),
    ],
    [
        'logo' => get_field('solution_3_logo'),
        'partner_name' => get_field('solution_3_name'),
        'description' => get_field('solution_3_description'),
        'badge' => get_field('solution_3_badge'),
        'status' => get_field('solution_3_status'),
        'pattern' => get_field('solution_3_pattern'),
    ],

];

?>


<div class="strategic-cards-container">

    <?php foreach ($solutions as $card): ?>

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