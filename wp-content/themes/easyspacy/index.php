<?php get_header(); ?>
<main class="main-home">
    <section class="presentation">
        <h2 class="presentation__title">Bienvenue sur le site d'<span class="presentation__title__name">Easyspacy</span></h2>

        <?php /* Présentation loop */ ?>
        <?php
        $welcome = new WP_Query([
            'post_type' => 'welcome',
            'orderby' => 'menu_order',
            'order' => 'asc'
        ]);
        ?>
        <?php if ($welcome->have_posts()) : ?>
            <section class="about-us">
                <h3 class="about-us__title">Qui sommes-nous ?</h3>
                <?php while ($welcome->have_posts()) : $welcome->the_post(); ?>
                    <p><?php the_content() ?></p>
                <?php endwhile; ?>
                <a href="#" class="about-us__link">à propos</a>
            </section>
        <?php else : ?>
            <p>Il n'y a pas d'explications pour l'instant</p>
        <?php endif; ?>
        <?php /* Présentation loop */ ?>
        <section class="last-one">
            <h3 class="last-one__title">Dernière capsule</h3>
            <!-- afficher la dernière capsule -->
            <?php
            $capsules = new WP_Query([
                'post_type' => 'capsule',
                'posts_per_page' => 1,
                'orderby' => 'date',
                'order' => 'desc'
            ]);
            ?>
            <?php if ($capsules->have_posts()) : while ($capsules->have_posts()) : $capsules->the_post(); ?>
                    <article class="capsule">
                        <h4 class="capsule__title"><?php the_title() ?></h4>
                        <dl class="informations">
                            <dt class="informations__date-title">Date</dt>
                            <dd class="informations__date-content">date</dd>
                            <dt class="informations__difficulty-title">Difficulté</dt>
                            <dd class="informations__difficulty-content"><?= es_difficulty_moon(get_field('difficulty')); ?></dd>
                            <dt class="informations__duration-title">Durée</dt>
                            <dd class="informations__duration-content">6 minutes</dd>
                        </dl>
                        <a class="capsule__link" href="<?php the_permalink(); ?>">
                            <span class="">
                                Visualiser la capsule sur <?php the_title() ?>
                            </span>
                        </a>
                        <p aria-hidden="true">Visualiser la capsule</p>
                        <figure class="figure">
                            <img class="figure__image" <?= es_the_thumbnail_attributes_density(['capsule-thumbnail-regular', 'capsule-thumbnail-regular-double']); ?>>
                        </figure>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p class="last-one__empty-message">Il n'y a pas encore de capsules 🚀</p>
            <?php endif; ?>
            <!-- Fin de la dernière capsule -->
        </section>
    </section>
    <section class="capsule-list">
        <?php /* selection des capsules */ ?>
        <h2 class="capsule-list">Capsules</h2>
        <select class="sort-capsule" name="sort" id="sort">
            <option class="sort-capsule__option" value="date">Trier par: date</option>
            <option class="sort-capsule__option" value="popularite">Trier par: popularité</option>
        </select>
        <?php /* fin selection des capsules */ ?>
        <?php
        /***************
         *  liste capsules 
         ****************/
        ?>
        <?php /*  Boucler sur les capsules */ ?>
        <?php
        $capsules = new WP_Query([
            'post_type' => 'capsule',
            'posts_per_page' => 10,
            'orderby' => 'date',
            'order' => 'desc'
        ]);
        ?>
        <?php if ($capsules->have_posts()) : while ($capsules->have_posts()) : $capsules->the_post(); ?>
                <article class="capsule">
                    <h3 class="capsule__title"><?php the_title() ?></h3>
                    <dl class="informations">
                        <dt class="informations__date-title">Date</dt>
                        <dd class="informations__date-content">date</dd>
                        <dt class="informations__difficulty-title">Difficulté</dt>
                        <dd class="informations__difficulty-content"><?= es_difficulty_moon(get_field('difficulty')); ?></dd>
                        <dt class="informations__duration-title">Durée</dt>
                        <dd class="informations__duration-content">6 minutes</dd>
                    </dl>
                    <a class="capsule__link" href="<?php the_permalink(); ?>">
                        <span class="sro">
                            Visualiser la capsule sur <?php the_title() ?>
                        </span>
                    </a>
                    <p aria-hidden="true">Visualiser la capsule</p>
                    <figure class="figure">
                        <img class="figure__image" <?= es_the_thumbnail_attributes_density(['capsule-thumbnail-regular', 'capsule-thumbnail-regular-double']); ?>>
                    </figure>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p class="capsule-list__empty-message">Il n'y a pas encore de capsules 🚀</p>
        <?php endif; ?>
        <?php /* Fin de boucle */ ?>
    </section>
</main>
<?php get_footer(); ?>