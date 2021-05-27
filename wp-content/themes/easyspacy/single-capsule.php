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

        <div class="progression__wrapper">
            <progress class="progression__bar" max="100" value="0">
                50%
            </progress>
            <svg class="progression__rocket">
                <use xlink:href="#rocket"></use>
            </svg>
        </div>
        <p class="progression__phrase" data-estime="<?= get_field('estimated_time') ?>"></p>
    </section>
    <section class="watch-capsule">
        <!-- TODO: Flider offset par rapport à la barre de chargement -->
        <h2 class="sro">Contennu de la capsule</h2>
        <figure class="fig-slider">
            <div class="figure__interaction">
                <button type="button" class="fig-slider__nav-button fig-slider__nav-button_prev">
                    Image Précédente
                    <svg class="icon">
                        <use xlink:href="#arrow"></use>
                    </svg>
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
                    <svg class="icon">
                        <use xlink:href="#arrow"></use>
                    </svg>
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
    </section>

    <!-- commentaires -->
    <section class="comments" id="comments">
        <?php comments_template('', true)
        ?>
    </section>


    <section class="semblable">
        <h2 class="semblable__title">Vous pouvez retrouver des capsules similaires ci-dessous</h2>
        <article class="capsule">
            <h3 class="capsule__title"><?php the_title() ?></h4>
                <dl class="informations">
                    <dt class="informations__date-title sro">Date</dt>
                    <dd class="informations__date-content">Le <?= get_the_date('d/m/y') ?></dd>
                    <dt class="informations__difficulty-title">Difficulté :</dt>
                    <dd class="informations__difficulty-content"><?= es_difficulty_moon(get_field('difficulty')); ?></dd>
                    <dt class="informations__duration-title">Durée :</dt>
                    <dd class="informations__duration-content">6 minutes</dd>
                </dl>
                <p aria-hidden="true" class="capsule__fake-link sro">Visualiser la capsule</p>
                <a class="capsule__link" href="<?php the_permalink(); ?>">
                    <span class="sro">
                        Visualiser la capsule sur <?php the_title() ?>
                    </span>
                </a>
                <figure class="thumbnail">
                    <img class="thumbnail__image" <?= es_the_thumbnail_attributes_density(['capsule-thumbnail-regular', 'capsule-thumbnail-regular-double']); ?>>
                </figure>
        </article>
    </section>
</main>
<?php get_footer(); ?>