<?php

$experts = [];

for ($i = 1; $i <= 7; $i++) {
    $experts[] = [
        'image' => get_field("expert_{$i}_image"),
        'name' => get_field("expert_{$i}_name"),
        'role' => get_field("expert_{$i}_role"),
        'description' => get_field("expert_{$i}_description"),
    ];
}

?>


<div class="experts-container">

    <?php foreach ($experts as $expert) : ?>

        <div class="expert-card">

            <?php if ($expert['image']) : ?>

                <div class="expert-card__avatar">
                    <img
                        class="expert-card__image"
                        src="<?php echo esc_url($expert['image']['url']); ?>"
                        alt="<?php echo esc_attr($expert['name']); ?>">
                </div>

            <?php endif; ?>

            <div class="expert-card__content">

                <h3 class="expert-card__name">
                    <?php echo esc_html($expert['name']); ?>
                </h3>

                <p class="expert-card__role">
                    <?php echo esc_html($expert['role']); ?>
                </p>

                <p class="expert-card__description">
                    <?php echo esc_html($expert['description']); ?>
                </p>

            </div>

        </div>

    <?php endforeach; ?>

</div>