<?php /* Template Name: Actualités */
get_header() ?>
<h2>Actualités</h2>
<section>
    <h3>Nouveauté</h3>
    <!-- afficher la dernière actu -->
    <?php
    $news = new WP_Query([
        'post_type' => 'new',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'desc'
    ]);
    ?>
    <?php if ($news->have_posts()) : while ($news->have_posts()) : $news->the_post(); ?>
            <article class="new">
                <h4><?php the_title() ?></h3>
                    <img src="" alt="description d'image">
                    <dl>
                        <dt class='sro'>Date</dt>
                        <dd><?php the_date() ?></dd>
                        <dt class='sro'>description</dt>
                        <dd><?php the_field('description') ?></dd>
                    </dl>
                    <a class="new__link" href="<?php the_permalink(); ?>">
                        <span class="">
                            Lire l'article intitulé: <?php the_title() ?>
                        </span>
                    </a>
                    <p aria-hidden="true">Visualiser l'article</p>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Il n'y a pas encore d'article 📰</p>
    <?php endif; ?>
    <!-- Fin de la dernière actu -->
</section>
<?php get_footer() ?>