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
            <li class="actions__item actions__item_share">
                <button type="button" class="actions__link actions__link_share actions__link">Partager</button>
                <ul class="action-share">
                    <li class="action-share__item">
                        <a href="https://www.facebook.com/share.php?u=<?= the_permalink(); ?>" target="_blank" class="action-share__link action-share__link_fb">
                            Partager sur facebook
                        </a>
                    </li>
                    <li class="action-share__item">
                        <a href="http://twitter.com/home?status=<?= the_permalink() ?>" target="_blank" class="action-share__link action-share__link_ig">
                            Partager sur twitter
                        </a>
                    </li>
                </ul>
            </li>
            <li class="actions__item">
                <button type="button" class="actions__link actions__link_copy-link copy-link">Copier le lien</button>
            </li>
            <li class="actions__item">
                <a href="<?php the_field('instalink'); ?>" target="_blank" class="actions__link actions__link_instagram">Visionner sur Instagram</a>
            </li>
        </ul>

        <div class="progression__wrapper">
            <progress class="progression__bar" max="100" value="0">
                50%
            </progress>
            <div class="progression__rocket"></div>
        </div>
        <p class="progression__phrase" data-estime="<?= get_field('estimated_time') ?>"></p>
    </section>
    <section class="watch-capsule">
        <h2 class="sro">Contennu de la capsule</h2>
        <figure class="fig-slider">
            <div class="figure__interaction">
                <button type="button" class="fig-slider__nav-button fig-slider__nav-button_prev">
                    Image Précédente
                </button>
                <div class="figure__wrapper">
                    <img class="figure__image" <?= es_the_thumbnail_attributes_density(['capsule-content-large', 'capsule-content-large-double']); ?>>
                    <?php $currentImageArray = es_create_image_array(); ?>
                    <?php foreach ($currentImageArray as $image) : ?>
                        <img class="figure__image" <?= es_the_content_attributes_density($image, ['capsule-content-large', 'capsule-content-large-double']) ?>>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="fig-slider__nav-button fig-slider__nav-button_next">
                    Image suivante
                </button>
                <nav class="figure__advencement">
                    <ul class="figure__list">
                        <?php for ($i = 0; $i < count($currentImageArray) + 1; $i++) : ?>
                            <li class="figure__item"><a href="#" class="figure__link">Lien vers l’image numéro <?= $i + 1 ?></a></li>
                        <?php endfor; ?>
                    </ul>
                </nav>
            </div>
            <figcaption class="figure__description">
                <?php the_field('description'); ?>
            </figcaption>
        </figure>
    </section>
    <section class="interactions">
        <!-- Interacions -->
        <h2 class="interactions__title sro">Interacions avec la capsule</h2>
        <p class="interactions__like-dialog">N'hésitez pas à nous dire si vous avez <b class="interactions__like-bold">aimé</b> !</p>
        <?= do_shortcode('[wp_ulike for="post"]'); ?>
        <p class="interactions__actions-dialog">Vous pouvez aussi la <b class="interactions__actions-dialog-bold">partager</b> ou <b class=" interactions__actions-dialog-bold">laisser un commentaire</b></p>
        <ul class="actions__list">
            <li class="actions__item actions__item_share">
                <button type="button" class="actions__link actions__link_share">
                    <img src="" alt="" class="action__share__icon">
                    Partager
                </button>
                <ul class="action-share">
                    <li class="action-share__item">
                        <a href="http://www.facebook.com/sharer.php?u=<?= the_permalink(); ?>" target="_blank" class="action-share__link action-share__link_fb">

                            Partager sur facebook
                        </a>
                    </li>
                    <li class="action-share__item">
                        <a href="http://twitter.com/share?url=<?= the_permalink() ?>&text=Simple Share Buttons&hashtags=simplesharebuttons" target="_blank" class="action-share__link action-share__link_ig">
                            Partager sur twitter
                        </a>
                    </li>
                </ul>
            </li>
            <li class="actions__item">
                <button type="button" class="actions__link actions__link_copy-link copy-link">Copier le lien</button>
            </li>
            <li class="actions__item">
                <a href="<?php the_field('instalink'); ?>" target="_blank" class="actions__link actions__link_instagram">Visionner sur Instagram</a>
            </li>
        </ul>
    </section>

    <!-- commentaires -->
    <section class="comments" id="comments">
        <?php comments_template('', true) ?>
    </section>
    <?php if (count(es_related_posts()) > 4) : ?>
        <section class="semblable">
            <h2 class="semblable__title">Vous pouvez retrouver des capsules similaires ci-dessous</h2>
            <section class="semblable-list">
                <h3 class="sro">Vous pouvez retrouver des capsules similaires ci-dessous</h3>
                <button class="semblable-list__button semblable-list__button_next">Capsule précédente</button>
                <div class="semblable-wrapper">
                    <?php foreach (es_related_posts() as $capsule) : ?>
                        <?php get_template_part('capsule-part', null, ["capsule" => $capsule]) ?>
                    <?php endforeach; ?>
                </div>
                <button class="semblable-list__button semblable-list__button_prev">Capsule suivante</button>
            </section>
        </section><?php endif; ?>
</main>
<?php get_footer(); ?>