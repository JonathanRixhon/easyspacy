<?php /* Template Name: about */ ?>
<?php get_header(); ?>
<?php
$about = new WP_Query([
    'post_type' => 'about',
    'orderby' => 'menu_order',
    'order' => 'asc',
    'limit' => '7'

]);
?>
<main class="about-page">
    <?php if (count($about->posts) === 7) : ?>
        <section class="about-dialog">
            <h2 class="about-dialog__title sro">Dialogue d'introduction</h2>

            <p class="about-dialog__bubble">
                <?= $about->posts[0]->post_content ?>
            </p>

            <p class="about-dialog__bubble">
                <?= $about->posts[1]->post_content ?>

            </p>

            <p class="about-dialog__conclusion">
                <?= $about->posts[2]->post_content ?>
            </p>
        </section>

        <section class="about-members">
            <h2 class="about-members__title sro">
                Persones à l'origine de easyspacy
            </h2>
            <section class="about-sarah">
                <h3 class="about-sarah__title">
                    <?= $about->posts[3]->post_title ?>
                </h3>
                <p class="about-sarah__content">
                    <?= $about->posts[3]->post_content ?>
                </p>
            </section>
            <section class="about-leo">
                <h3 class="about-leo__title">
                    <?= $about->posts[4]->post_title ?>
                </h3>
                <p class="about-leo__content">
                    <?= $about->posts[4]->post_content ?>
                </p>
            </section>

        </section>

        <section class="about-concept">
            <h2 class="about-concept__title">
                <?= $about->posts[5]->post_title ?>
            </h2>
            <p class="about-concept__content">
                <?= $about->posts[5]->post_content ?>
            </p>
            <h3 class="about-concept__title-second">
                <?= $about->posts[6]->post_title ?>
            </h3>
            <?= $about->posts[6]->post_content ?>
            <a href="<?= get_home_url() . "/#capsule-list" ?>" class="about-concept__link">Consulter les capsules !</a>
        </section>
    <?php endif; ?>
</main>
<?php get_footer() ?>