<?php $testCap = wp_ulike_get_most_liked_posts(wp_count_posts('capsule')->publish, array('capsule'), 'post', 'all', 'like'); ?>
<?php foreach ($testCap as $cap) : ?>
    <article class="capsule">
        <h3 class="capsule__title"><?= get_the_title($cap) ?></h3>
        <dl class="informations">
            <dt class="informations__date-title">Date</dt>
            <dd class="informations__date-content">date</dd>
            <dt class="informations__difficulty-title">Difficulté</dt>
            <dd class="informations__difficulty-content"><?= es_difficulty_moon(get_field('difficulty', $cap->ID)); ?></dd>
            <dt class="informations__duration-title">Durée</dt>
            <dd class="informations__duration-content">6 minutes</dd>
        </dl>
        <a class="capsule__link" href="<?= get_permalink($cap); ?>">
            <span class="">
                Visualiser la capsule sur <?= get_the_title($cap); ?>
            </span>
        </a>
        <p aria-hidden="true">Visualiser la capsule</p>
        <figure class="figure">
            <img class="figure__image" <?= es_the_thumbnail_attributes_density(['capsule-thumbnail-regular', 'capsule-thumbnail-regular-double'], $cap); ?>>
        </figure>
    </article>
<?php endforeach; ?>