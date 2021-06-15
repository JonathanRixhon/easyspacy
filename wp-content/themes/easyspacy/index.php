<?php get_header(); ?>
<?php
$lastCapsule = new WP_Query([
    'post_type' => 'capsule',
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'desc'
]);
$welcome = new WP_Query([
    'post_type' => 'welcome',
    'orderby' => 'menu_order',
    'order' => 'asc'
]);

?>
<main class="main-home">
    <section class="presentation">
        <h2 class="presentation__title">Bienvenue sur le site d'<span class="presentation__title__name">Easyspacy</span></h2>
        <?php if ($welcome->have_posts()) : ?>
            <section class="about-us" itemprop="description">
                <h3 class="about-us__title sro">Qui sommes-nous ?</h3>
                <?php while ($welcome->have_posts()) : $welcome->the_post(); ?>
                    <p class="about-us__dialog"><?= get_the_content() ?></p>
                <?php endwhile; ?>
                <a href="<?= get_the_permalink(75) ?>" class="about-us__link">À propos de Easyspacy</a>
            </section>
        <?php else : ?>
            <p>Il n'y a pas d'explications pour l'instant</p>
        <?php endif; ?>
        <section class="last-one">
            <h3 class="last-one__title">Dernière capsule</h3>
            <!-- afficher la dernière capsule -->
            <?php if ($lastCapsule->have_posts()) : while ($lastCapsule->have_posts()) : $lastCapsule->the_post(); ?>
                    <?php get_template_part('capsule-part', null, ["heading" => 3]) ?>
                <?php endwhile; ?>
            <?php else : ?>
                <p class="last-one__empty-message">Il n'y a pas encore de capsules 🚀</p>
            <?php endif; ?>
            <!-- Fin de la dernière capsule -->
        </section>
    </section>
    <section class="about-capsule" id="capsule-list">
        <?php get_template_part('capsule-list-part', null) ?>
    </section>
</main>
<?php get_footer(); ?>