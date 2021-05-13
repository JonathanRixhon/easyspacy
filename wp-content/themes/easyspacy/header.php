<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Jonathan Rixhon">
    <meta name="keywords" content="sciences,astrophysique,aérospacial,easyspacy,instagram,capsules,vulgarisation">
    <meta name="description" content="Un site de vulgarisation scientifique dirigé par Sarah, jeune diplomée en astrophisique et Léo, un jeune diplômé en aérospacial.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ASSETS -->
    <link rel="stylesheet" href="<?= es_asset("css/theme.css") ?>">

    <!-- WORDPRESS -->
    <title><?= is_front_page() ? bloginfo('description') : bloginfo('description') . wp_title("•", false); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="top">
        <h1 class="top__title sro"><?= is_front_page() ? bloginfo('description') : bloginfo('description') . wp_title(":", false); ?></h1>
        <a href=""><img class="top__logo" src="<?= es_asset("img/logo56x56.png") ?>" srcset="<?= es_asset("img/logo56x56.png") ?> 1x,<?= es_asset("img/logo112x112.png") ?> 2x " alt="Logo de Easyspacy"></a>
        <nav class="main-navigation">
            <h2 class="sro">Navigation principale</h2>
            <ul class="main-navigation__list">
                <?php foreach (es_menu('main') as $link) : ?>
                    <li class="main-navigation__item">
                        <a href="<?= $link->url; ?>" class="main-navigation__link <?= es_bem('main-navigation__link', $link->modifiers); ?>">
                            <?= $link->label; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <?php /* formulaire */ ?>
        <form action="search-page.php" method="get" class="search-form">
            <label for="search" class="search-form__label sro">Rechercher</label>
            <input type="text" name="search" id="search" class="search-form__search-input" spellcheck="false">
            <button type="submit" class="search-form__submit">Rechercher</button>
        </form>
        <?php /* formulaire */ ?>
    </header>