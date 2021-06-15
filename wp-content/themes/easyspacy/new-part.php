<?php /* Template Name: new-part */ ?>

<article class="news-preview <?= count($args) ?  'news-preview' . $args['modifiers'] : "" ?>">
    <h4 class="news-preview__title preview-informations"><?php the_title() ?></h4>
    <img class="news-preview__thumbnail" <?= es_the_thumbnail_attributes_density(['news-preview', 'news-preview-double']) ?>>
    <dl class="preview-informations">
        <dt class='sro'>Date</dt>
        <dd class="preview-informations__date">Le <?= get_the_date("d F Y") ?></dd>
        <dt class='sro'>description</dt>
        <dd class="preview-informations__description"><?php the_field('description') ?></dd>
    </dl>
    <a class="news-preview__link" href="<?php the_permalink(); ?>">
        <span class="sro">
            Lire l'article intitulé: <?php the_title() ?>
        </span>
    </a>
    <p class="news-preview__fake-link" aria-hidden="true">Lire l'article</p>
</article>