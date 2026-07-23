<?php

$cards = [
    [
        'number' => get_field('number_1'),
        'title' => get_field('title_1'),
        'description' => get_field('description_1'),
    ],

    [
        'number' => get_field('number_2'),
        'title' => get_field('title_2'),
        'description' => get_field('description_2'),
    ],

    [
        'number' => get_field('number_3'),
        'title' => get_field('title_3'),
        'description' => get_field('description_3'),
    ],
    [
        'number' => get_field('number_4'),
        'title' => get_field('title_4'),
        'description' => get_field('description_4'),
    ],

    [
        'number' => get_field('number_5'),
        'title' => get_field('title_5'),
        'description' => get_field('description_5'),
    ],

    [
        'number' => get_field('number_6'),
        'title' => get_field('title_6'),
        'description' => get_field('description_6'),
    ],
    [
        'number' => get_field('number_7'),
        'title' => get_field('title_7'),
        'description' => get_field('description_7'),
    ],

    [
        'number' => get_field('number_8'),
        'title' => get_field('title_8'),
        'description' => get_field('description_8'),
    ],

];

?>

<div class="cards-container">

    <?php foreach ($cards as $card): ?>

        <div class="card">

            <h2>
                <?php echo esc_html($card['number']); ?>
            </h2>

            <!-- line for every card -->
            <div class="card-line"></div>

            <h3>
                <?php echo esc_html($card['title']); ?>
            </h3>


            <p>
                <?php echo esc_html($card['description']); ?>
            </p>

        </div>

    <?php endforeach; ?>

</div>