<?php /* Template Name: Actualités */
get_header() ?>
<main class="main-news">
    <h2 class="main-news__title">Actualités</h2>
    <?php $lastNew = new WP_Query(['post_type' => 'new', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'desc']); ?>
    <?php if ($lastNew->have_posts()) : ?>
        <section class="last-new">
            <h3 class="last-new__title">Dernière actualité</h3>
            <!-- afficher la dernière actu -->
            <?php while ($lastNew->have_posts()) : $lastNew->the_post(); ?>
                <article class="news-preview news-preview_last">
                    <h4 class="news-preview__title" preview-informations""><?php the_title() ?></h4>
                    <img class="news-preview__thumbnail" <?= es_the_thumbnail_attributes_density(['news-preview', 'news-preview-double']) ?>>
                    <dl class="preview-informations">
                        <dt class='sro'>Date</dt>
                        <dd class="preview-informations__date">Le <?php the_date('d F Y') ?></dd>
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
            <?php endwhile; ?>
            <!-- Fin de la dernière actu -->
        </section>
        <section class="news">
            <?php $news = new WP_Query(['post_type' => 'new', 'orderby' => 'date', 'order' => 'desc']); ?>
            <h3 class="news__title">Autres actualités</h3>
            <?php while ($news->have_posts()) : $news->the_post(); ?>
                <article class="news-preview">
                    <h4 class="news-preview__title" preview-informations""><?php the_title() ?></h4>
                    <img class="news-preview__thumbnail" <?= es_the_thumbnail_attributes_density(['news-preview', 'news-preview-double']) ?>>
                    <dl class="preview-informations">
                        <dt class='sro'>Date</dt>
                        <dd class="preview-informations__date">Le <?php the_date('d F Y') ?></dd>
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
            <?php endwhile; ?>

        </section>
    <?php else : ?>
        <p>Il n'y a pas encore d'actualités 📰</p>
    <?php endif; ?>

</main>
<?php get_footer() ?>