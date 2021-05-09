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
            <?php endwhile;
        else : ?>
            <p>Il n'y a pas encore de capsules à ce jour.</p>
        <?php endif; ?>
        <section>
            <h3>Dernière capsule</h3>
            <article class="capsule">
                <h4>Titre de la capsule</h4>
                <img src="" alt="description de la capsule">
                <dl>
                    <dt>Date</dt>
                    <dd>une date</dd>
                    <dt>Difficulté</dt>
                    <dd>🌕🌕🌑</dd>
                    <dt>Durée</dt>
                    <dd>6 minutes</dd>
                </dl>
                <a href="#" class="sro">Visualier</a>
            </article>
        </section>
    </section>
    <section>
        <h2>Capsules</h2>
        <select name="sort" id="sort">
            <option value="date">Trier par: date</option>
            <option value="popularite">Trier par: popularité</option>
        </select>
        <!-- Capsule -->
        <article class="capsule">
            <h3>Titre de la capsule</h3>
            <img src="" alt="description de la capsule">
            <dl>
                <dt>Date</dt>
                <dd>une date</dd>
                <dt>Difficulté</dt>
                <dd>🌕🌕🌑</dd>
                <dt>Durée</dt>
                <dd>6 minutes</dd>
            </dl>
            <a href="#" class="sro">Visualier</a>
        </article>
        <!-- Capsule -->
    </section>
</main>
<?php get_footer(); ?>