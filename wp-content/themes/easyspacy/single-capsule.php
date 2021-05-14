<?php get_header(); ?>
<main class="main-single-capsule">
    <section>
        <h2 class="main-single-capsule__title"><?php the_title() ?></h2>
        <p>date: <span>Le <?= get_the_date("d/m/y") ?></span></p>
        <p>Difficulté
            <span><?= es_difficulty_moon(get_field('difficulty')); ?></span>
        </p>

        <ul class="actions__list">
            <li class="actions__item"><a href="" class="actions___link">J'aime</a></li>
            <li class="actions__item"><a href="" class="actions___link">Partager</a></li>
            <li class="actions__item"><a href="" class="actions___link">Copier le lien</a></li>
            <li class="actions__item"><a href="" class="actions___link">Visionner sur Instagram</a></li>
        </ul>
        <progress> 50%</progress>
    </section>
    <section class="watch-capsule">
        <h2 class="sro">Contennu de la capsule</h2>
        <figure class="fig-slider">
            <img class="figure__image" <?= es_the_thumbnail_attributes_density(['capsule-content-large', 'capsule-content-large-double']); ?>>
            <?php foreach (es_create_image_array() as $image) : ?>
                <img <?= es_the_content_attributes_density($image, ['capsule-content-large', 'capsule-content-large-double']) ?>>
            <?php endforeach; ?>
            <figcaption><?php the_field('description'); ?></figcaption>
        </figure>
    </section>
    <section class="interations">
        <!-- Interacions -->
    </section>
    <section class="commentary">
        <!-- Commentaires -->
    </section>

    <section class="semblable">
        <!-- slider -->
    </section>
</main>
<?php get_footer(); ?>