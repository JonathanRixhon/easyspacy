<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= is_front_page() ? bloginfo('description') : bloginfo('description') . wp_title("•", false); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="top">
        <h1><?= is_front_page() ? "Bienvenue ici" :  trim(wp_title("", false)); ?></h1>
        <nav>
            <ul>
                <li>
                    <a href="#">Lien</a>
                </li>
                <li>
                    <a href="#">Lien</a>
                </li>
                <li>
                    <a href="#">Lien</a>
                </li>
            </ul>
        </nav>
    </header>