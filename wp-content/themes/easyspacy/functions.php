<?php

/* *****
* Return a menu structure for display
* *****/

function es_menu($location)
{
    //1. Récupérer l'objet du menu
    $locations = get_nav_menu_locations();
    $menu = $locations[$location];
    //2. Récupérer les liens
    $links = wp_get_nav_menu_items($menu);
    //3. Formater les liens pour qu'ils soient utilisables
    $links = array_map(function ($result) {
        global $post;

        $link = new \stdClass();
        //formater l'objet $link
        $link->url = $result->url;
        $link->label = $result->title;
        $link->modifiers = [];

        // Page courante ?
        if (intval($result->object_id) === intval($post->ID)) {
            $link->modifiers[] = 'current';
        }

        return $link;
    }, $links);
    //4. retourner l'array
    return $links;
}

/* *****
 * Create navigations menus
 * *****/
add_action('init', 'es_custom_nav_menus');
function es_custom_nav_menus()
{
    register_nav_menus([
        'main' => 'Navigation principale',
        'footer' => 'Navigation du pied de page',
        'social_media' => 'Réseaux sociaux dans le pied de page',

    ]);
}
/* *****
 * Create custom post type
 * *****/

add_action('init', 'es_custom_post_type');
function es_custom_post_type()
{
    /* Capsules */
    register_post_type('capsule', [
        'label' => 'Capsules',
        'labels' => [
            'singular_name' => 'Capsule',
            'add_new_item' => 'Ajouter une capsule',
            'add_new' => 'Ajouter une capsule',
        ],
        'rewrite' => [],
        'description' => 'Toutes les capsules publiées jusqu’à maintenant.',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-site-alt',
        'supports' => ['title', 'editor', 'thumbnail'],
    ]);
    /* Actualités */
    register_post_type('new', [
        'label' => 'Actualités',
        'labels' => [
            'singular_name' => 'Actualité',
            'add_new_item' => 'Ajouter une actualité',
            'add_new' => 'Ajouter une actualité',
        ],
        'rewrite' => [],
        'description' => 'Toutes les actualités publiées jusqu’à maintenant.',
        'public' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-welcome-widgets-menus',
        'supports' => ['title', 'editor', 'thumbnail'],
    ]);
}

/* *****
 * Return difficulty moon string
 * *****/
function es_difficulty_moon($difficulty)
{
    $string = '';
    for ($i = 1; $i <= 3; $i++) {
        if ($i <= $difficulty) {
            $string .=  "🌕";
        } else {
            $string .= "🌑";
        }
    }
    return trim($string);
}

/* *****
* Return thumbnail attributes
* *****/

function es_the_thumbnail_attributes($sizes = [])
{
    // 1. Récupérer le thumbnail pour le post courant dans the loop
    $thumbnail = get_post(get_post_thumbnail_id());
    $thumbnail_meta = get_post_meta($thumbnail->ID);
    $src = null;

    // 2. Récupérer les tailles d'image qui nous intéressent & formater les tailles pour qu'elles soient utilisables dans srcset
    $sizes = array_map(function ($size) use ($thumbnail, &$src) {
        $data = wp_get_attachment_image_src($thumbnail->ID, $size);

        if (is_null($src)) {
            $src = $data[0];
        }

        return $data[0] . ' ' . $data[1] . 'w';
    }, $sizes);

    // 4. Formater les attributs
    $srcset = implode(', ', $sizes);
    $alt = $thumbnail_meta['_wp_attachment_image_alt'][0] ?? null;

    // 5. Retourner les attributs générés
    return 'src="' . $src . '" srcset="' . $srcset . '" alt="' . $alt . '"';
}


/* *****
 * Return a menu structure for display
 * *****/
function es_bem($base, $modifiers = [])
{
    $classes = array_map(function ($modifier) use ($base) {
        return $base . '--' . $modifier;
    }, $modifiers);
    return implode(' ', $classes);
}

/* *****
 * Return a compiled asset's URI
 * *****/
function es_asset($path)
{
    return rtrim(get_template_directory_uri(), '/') . '/public/' . ltrim($path, '/');
}

/* *****
 * Disable the Wordpress Gutenberg Editor
 * *****/

add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");

function disable_gutenberg_editor()
{
    return false;
}

/* *****
* Add custom img sizes
* *****/
add_action('after_setup_theme', 'es_image_sizes');
function es_image_sizes()
{
    add_image_size('capsule-thumbnail-regular', 328, 328, true);
}
/* *****
* Enable thumbnails support
* *****/
add_action("after_setup_theme", "es_add_theme_supports");
function es_add_theme_supports()
{
    add_theme_support('post-thumbnails', ['post', 'capsule']);
}
