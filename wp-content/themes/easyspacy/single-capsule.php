<?php get_header(); ?>
<main class="single-capsule">
    <section class="info-capsule">
        <h2 class="info-capsule__title"><?php the_title() ?></h2>
        <p class="info-capsule__date">Date: <span class="info-capsule__date_content">Le <?= get_the_date("d/m/y") ?></span></p>
        <p class="info-capsule__difficulty">Difficulté
            <span class="info-capsule__difficulty_content"><?= es_difficulty_moon(get_field('difficulty')); ?></span>
        </p>

        <ul class="actions__list">
            <li class="actions__item"><?= do_shortcode('[wp_ulike for="capsule"]'); ?></li>
            <li class="actions__item">
                <button type="button" class="actions__link_share">Partager</button>
            </li>
            <li class="actions__item">
                <button type="button" class="actions__link_copy-link copy-link">Copier le lien</button>
            </li>
            <li class="actions__item">
                <a href="<?php the_field('instalink'); ?>" class="actions__link_instagram">Visionner sur Instagram</a>
            </li>
        </ul>
        <progress class="info-capsule__progression"> 50%</progress>
    </section>
    <section class="watch-capsule">
        <h2 class="sro">Contennu de la capsule</h2>
        <figure class="fig-slider">
            <div class="figure__wrapper">
                <img class="figure__image" <?= es_the_thumbnail_attributes_density(['capsule-content-large', 'capsule-content-large-double']); ?>>
                <?php $currentImageArray = es_create_image_array(); ?>
                <?php foreach ($currentImageArray as $image) : ?>
                    <img class="figure__image" <?= es_the_content_attributes_density($image, ['capsule-content-large', 'capsule-content-large-double']) ?>>
                <?php endforeach; ?>
            </div>
            <nav class="figure__advencement">
                <ul class="figure__list">
                    <?php for ($i = 0; $i < count($currentImageArray) + 1; $i++) : ?>
                        <li class="figure__item"><a href="#" class="figure__link">Lien vers l’image numéro <?= $i + 1 ?></a></li>
                    <?php endfor; ?>
                </ul>
            </nav>
            <figcaption><?php the_field('description'); ?></figcaption>
        </figure>
    </section>
    <section class="interations">
        <!-- Interacions -->
        <h2 class="interactions__title .sro">Interacions avec le capsule</h2>
        <section class="dialogue-like">
            <p class="dialogue-like__phrase">N'hésitez pas à nous dire si vous avez <b class="dialogue-like__phrase__bold">aimé</b></p>
            <?= do_shortcode('[wp_ulike for="post"]'); ?>
            <button type="button" class="dialogue-like__like-button">J'aime !</button>
        </section>
        <section class="dialogue-actions">
            <p class="dialogue-actions__phrase">Vous pouvez aussi la <b class="dialogue-actions__action">partager</b> ou <b class="dialogue-actions__action">laisser un commentaire</b></p>
            <ul class="actions__list">
                <li class="actions__item">
                    <button type="button" class="actions__item_share-button">Partager</button>
                    <a href="http://www.facebook.com/sharer.php?u=<?= the_permalink(); ?>" target="_blank" class="actions__item_share-facebook">
                        Partager sur facebook
                    </a>
                    <a href="http://twitter.com/share?url=<?= the_permalink() ?>&text=Simple Share Buttons&hashtags=simplesharebuttons" target="_blank" class="actions__item_share-instagram">
                        Partager sur twitter
                    </a>
                </li>
                <li class="actions__item">
                    <button type="button" class="actions__item_copy-button copy-link">Copier le lien</button>
                </li>
                <li class="actions__item">
                    <a href="<?php the_field('instalink'); ?>" class="actions__item_instalink">Visionner sur Instagram</a>
                </li>
            </ul>
        </section>
    </section>

    <!-- commentaires -->
    <section class="comments" id="comments">
        <?php comments_template('', true)
        ?>
    </section>


    <section class="semblable">
        <!-- slider -->
    </section>
</main>
<?php get_footer(); ?>