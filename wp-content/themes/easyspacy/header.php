<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ASSETS -->
    <link rel="stylesheet" href="<?= es_asset("css/theme.css") ?>">
    <!-- WORDPRESS -->
    <title><?= is_front_page() ? bloginfo('description') : bloginfo('description') . wp_title("•", false); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="top">
        <h1><?= is_front_page() ? bloginfo('description') : bloginfo('description') . wp_title(":", false); ?></h1>
        <img src="" alt="Logo de Easyspacy">
        <nav>
            <h2>Navigation parincipale</h2>
            <ul>
                <?php foreach (es_menu('main') as $link) : ?>
                    <li>
                        <a href="<?= $link->url; ?>" class="menu__link <?= es_bem('menu__link', $link->modifiers); ?>">
                            <?= $link->label; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <form action="search-page.php" method="get">
            <label for="search">Rechercher</label>
            <input type="text" name="search" id="search">
            <input type="submit" value="Rechercher">
        </form>
    </header>