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

<body itemscope itemtype="https://schema.org/WebSite">
    <header class="top">
        <h1 itemprop="name" class="top__title sro"><?= is_front_page() ? bloginfo('description') : bloginfo('description') . wp_title(":", false); ?></h1>
        <a href="<?= get_home_url() ?>" class="top__link" itemprop="mainEntityOfPage">
            Retour à la page d'acceuil
        </a>
        <section class="navigation">
            <h2 class="sro">Navigation</h2>
            <nav class="main-navigation">
                <h3 class="sro">Navigation principale</h3>
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

            <form action="<?= get_home_url() ?>" method="get" class="search-form">
                <label for="search" class="search-form__label sro">Rechercher</label>
                <input type="text" name="s" id="search" value="<?= isset($_GET['s']) ? get_search_query() : "" ?>" class="search-form__search-input" autocomplete="off" spellcheck="false" />
                <button type="submit" class="search-form__submit">Rechercher</button>
            </form>
        </section>
    </header>