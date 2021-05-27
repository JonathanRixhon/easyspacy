<?php get_header(); ?>
<main class="single-new">
    <h2 class="single-new__title"><?php the_title() ?></h2>
    <dl class="sg-date">
        <dt class="sro">Date</dt>
        <dd class="sg-date__content"><?= get_the_date("d/m/Y") ?></dd>
    </dl>
    <article class="sg-description">
        <h3 class="description__title sro">description de l'actualité</h3>
        <p class="description__conten">
            <?= get_field('description'); ?>
        </p>
    </article>
    <?php $imgArr = es_create_image_array();
    $figcaption = get_field('legend');
    $imgQty = count($imgArr);
    ?>
    <?php if ($imgQty) : ?>
        <figure class="sg-images">
            <div class="sg-images-container <?= es_news_layout($imgQty) ?>">
                <?php foreach ($imgArr as $image) : ?>
                    <img class="sg-images-container__image" <?= es_the_content_attributes_density($image, ['capsule-thumbnail-small']) ?>>
                <?php endforeach; ?>
            </div>
            <?php if ($figcaption) : ?>
                <figcaption class="sg-images__legend">
                    <?= $figcaption ?>
                </figcaption>
            <?php endif; ?>
        </figure>
    <?php endif; ?>
    <article class="sg-content">
        <h3 class="description__title sro">Contenu de l'actualité</h3>
        <?php the_content() ?>
    </article>
    <a class='single-new__back-link' href="<?= get_post(49)->guid; ?>"> Retour aux actualités</a>
</main>
<?php get_footer(); ?>