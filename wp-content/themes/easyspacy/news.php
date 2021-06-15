<?php /* Template Name: Actualités */
get_header();
$news = new WP_Query(['post_type' => 'new', 'orderby' => 'date', 'order' => 'desc']);
?>
<main class="main-news">
    <h2 class="main-news__title">Actualités</h2>
    <?php if ($news->have_posts()) : ?>
        <section class="last-new">
            <h3 class="last-new__title">Dernière actualité</h3>
            <!-- afficher la dernière actu -->
            <?php $news->the_post(); ?>
            <?php get_template_part('new-part', null, ["modifiers" => "_last"]) ?>
            <!-- Fin de la dernière actu -->
        </section>
        <section class="news">
            <h3 class="news__title">Autres actualités</h3>
            <?php if ($news->have_posts()) : ?>
                <?php while ($news->have_posts()) : $news->the_post() ?>
                    <?php get_template_part('new-part', null) ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </section>
    <?php else : ?>
        <p class="nonews">Il n'y a pas encore d'actualités 📰</p>
    <?php endif; ?>

</main>
<?php get_footer() ?>