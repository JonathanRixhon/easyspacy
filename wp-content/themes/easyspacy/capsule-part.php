<?php /* Template Name: capsule-part */ ?>
<?php
$capsule = $args['capsule'];
?>
<?php //var_dump(get_fields()) 
?>
<article class="capsule" itemprop="subjectOf" itemscope itemtype="https://schema.org/Article">
    <?php if ($args["heading"] === 3) : ?>
        <h3 itemprop="name headline" class="capsule__title"><?= get_the_title($capsule) ?></h3>
    <?php else : ?>
        <h4 itemprop="name headline" class="capsule__title"><?= get_the_title($capsule) ?></h4>
    <?php endif; ?>
    <dl class="informations">
        <dt class="informations__date-title sro">Date</dt>
        <dd class="informations__date-content">Le <time itemprop="contentReferenceTime datePublished"><?= get_the_date("d/m/Y", $capsule); ?></time></dd>
        <dt class="informations__difficulty-title">Difficulté :</dt>
        <dd class="informations__difficulty-content"><?= es_difficulty_moon(get_field('difficulty', $capsule)); ?></dd>
        <dt class="informations__duration-title">Durée :</dt>
        <dd class="informations__duration-content" itemprop="timeRequired"><?= count(es_create_image_array()) * get_field('estimated_time', $capsule) ?> minutes</dd>
        <dt class="sro">Autheur</dt>
        <dd class="sro" itemprop="publisher author" itemscope itemtype="https://schema.org/Organization"><span itemprop="name">Easyspacy</span></dd>
    </dl>
    <p aria-hidden="true" class="capsule__fake-link sro">Visualiser la capsule</p>
    <a class="capsule__link" itemprop="url mainEntityOfPage" href="<?= get_permalink($capsule) ?>">
        <span class="sro">
            Visualiser la capsule sur le sujet "<?= get_the_title($capsule) ?>".
        </span>
    </a>
    <figure class="thumbnail">
        <?php if (has_post_thumbnail($capsule)) : ?>
            <img class="thumbnail__image" <?= es_the_thumbnail_attributes_density(['capsule-thumbnail-regular', 'capsule-thumbnail-regular-double'], $capsule); ?>>
        <?php else : ?>
            <img class="thumbnail__image" src="<?= es_asset('/img/no_thumbnail.png') ?>">
        <?php endif; ?>

    </figure>
</article>