<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <header class="header">
            <h1 class="header__title"><?= the_title() ?></h1>
        </header>
        <main class="content">
            <div class="content__wysiwyg">
                <p>faux wysiwyg</p>
                <?= the_content() ?>
            </div>
        </main>
        <!-- Affichage des capsules par exemple -->
    <?php endwhile;
else : ?>
    <p>Il n'y a pas de contenu dans cette pages</p>
<?php endif; ?>
<?php get_footer(); ?>