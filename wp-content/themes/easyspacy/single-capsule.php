<?php get_header(); ?>
<h2>Bienvenue sur ma capsule !</h2>
<dl>
    <dt>Difficulté</dt>
    <dd><?= es_difficulty_moon(get_field('difficulty')); ?></dd>
</dl>
<?php get_footer(); ?>