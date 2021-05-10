<?php get_header(); ?>
<main>
    <section class="intro">
        <h2>Bienvenue sur le site d'<span>Easyspacy</span></h2>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <section>
                    <h3>Qui sommes-nous ?</h3>
                    <?php the_content() ?>
                    <a href="#">à propos</a>
                </section>
            <?php endwhile; ?>
            <section>
                <h3>Dernière capsule</h3>
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
                            <h4><?php the_title() ?></h4>
                            <dl>
                                <dt>Date</dt>
                                <dd>date</dd>
                                <dt>Difficulté</dt>
                                <dd><?= es_difficulty_moon(get_field('difficulty')); ?></dd>
                                <dt>Durée</dt>
                                <dd>6 minutes</dd>
                            </dl>
                            <a class="capsule__link" href="<?php the_permalink(); ?>">
                                <span class="sro">
                                    Visualiser la capsule sur <?php the_title() ?>
                                </span>
                            </a>
                            <p aria-hidden="true">Visualiser la capsule</p>
                            <figure class="capsule_fig">
                                <img <?= es_the_thumbnail_attributes(['capsule-thumbnail-regular']); ?>>
                            </figure>
                        </article>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>Il n'y a pas encore de capsules 🚀</p>
                <?php endif; ?>
                <!-- Fin de la dernière capsule -->
            </section>
    </section>
    <section>
        <h2>Capsules</h2>
        <select name="sort" id="sort">
            <option value="date">Trier par: date</option>
            <option value="popularite">Trier par: popularité</option>
        </select>
        <!-- Capsule -->
        <!-- Boucler sur les capsules -->
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
                    <h3><?php the_title() ?></h3>
                    <img src="" alt="description de la capsule">
                    <dl>
                        <dt>Date</dt>
                        <dd>date</dd>
                        <dt>Difficulté</dt>
                        <dd><?= es_difficulty_moon(get_field('difficulty')); ?></dd>
                        <dt>Durée</dt>
                        <dd>6 minutes</dd>
                    </dl>
                    <a class="capsule__link" href="<?php the_permalink(); ?>">
                        <span class="sro">
                            Visualiser la capsule sur <?php the_title() ?>
                        </span>
                    </a>

                    <p aria-hidden="true">Visualiser la capsule</p>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Il n'y a pas encore de capsules 🚀</p>
        <?php endif; ?>
        <!-- Fin de la boucle des capsules -->
    </section>
<?php else : ?>
    <p>Cette page est vide!</p>
<?php endif; ?>
</main>
<?php get_footer(); ?>