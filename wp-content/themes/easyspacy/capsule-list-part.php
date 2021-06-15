<?php
$optionsAvailable = ['date' => 'date', 'popularity' => 'popularité'];
$options = [];
if (!isset($_GET["sort"])) {
    $query = new WP_Query([
        'post_type' => 'capsule',
        'orderby' => 'date',
        'order' => 'desc'
    ]);
    $result = $query->posts;
} else {
    $sort = $_GET["sort"];
    if ($sort === "popularity") {
        $query = wp_ulike_get_most_liked_posts(wp_count_posts('capsule')->publish, array('capsule'), 'post', 'all', 'like');
        $result = $query;
    }

    if ($sort === "date") {
        $query = new WP_Query([
            'post_type' => 'capsule',
            'orderby' => 'date',
            'order' => 'desc'
        ]);
        $result = $query->posts;
    }

    /****** Array ******/
    if (isset($optionsAvailable[$sort])) {
        $options[$sort] = $optionsAvailable[$sort];
        unset($optionsAvailable[$sort]);
    }
}
$options = array_merge($options, $optionsAvailable);
$capsules = $result;

?>
<h2 class="about-capsule__title">Capsules</h2>
<form action="<?= get_home_url() ?>#capsule-list" method="get" class="sort-capsule">
    <label for="sort" class="sro">Trier les capsules</label>
    <select class="sort-capsule__select" name="sort" id="sort">
        <?php foreach ($options as $value => $text) : ?>
            <option value="<?= $value ?>">Trier par: <?= $text ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" class="sro sort-capsule__submit" value="trier">
</form>

<?php if (count($capsules)) : ?>
    <section class="capsule-list">
        <h3 class="sro">Liste des capsules</h3>
        <?php foreach ($capsules as $capsule) : ?>
            <?php get_template_part('capsule-part', null, ["capsule" => $capsule]) ?>
        <?php endforeach; ?>
    </section>
<?php else : ?>
    <p class="capsule-list__empty-message">Il n'y a pas encore de capsules 🚀</p>
<?php endif; ?>