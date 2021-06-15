<?php get_header();
$s = get_search_query();
$args  = array(
    's' => $s,
    'post_types'  => array('capsule'),
);

$query = new WP_Query([
    's' => $s,
    'post_type' => 'capsule',
    'orderby' => 'date',
    'order' => 'desc'
]);
relevanssi_do_query($query);
?>


<main class="search-page">
    <h2 class='search-page__title'>Résultats pour la recherche <em class="search-page__title_search">"<?= get_search_query() ?>"</em></h2>
    <form action="<?= get_home_url() ?>" method="get" class="search-form-page">
        <label for="search" class="search-form-page__label sro">Rechercher</label>
        <input type="text" name="s" id="search" value="<?= isset($_GET['s']) ? get_search_query() : "" ?>" class="search-form-page__input" autocomplete="off" spellcheck="false" />
        <button type="submit" class="search-form-page__submit">Rechercher</button>
    </form>

    <?php if ($query->have_posts()) : ?>
        <section class="search-list">
            <h3 class="search-list__title sro">Liste des capsules correspondantes à la recherche</h3>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php get_template_part('capsule-part', null, ["heading" => 4]) ?>
            <?php endwhile; ?>
        </section>
    <?php else : ?>
        <h3 class="search-page__error">Il n'y a pas de capsule correspondant à votre recherche.</h3>
    <?php endif; ?>
</main>


<?php get_footer() ?>