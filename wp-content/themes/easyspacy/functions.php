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
        'supports' => ['title', 'editor', 'comments', 'thumbnail'],
        'taxonomies' => ['post_tag']
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
    //texte de bienvenue
    register_post_type('welcome', [
        'label' => 'Messages de Bienvenue',
        'labels' => [
            'singular_name' => 'Message de bienvenue',
            'add_new_item' => 'Ajouter une message',
            'add_new' => 'Ajouter une message',
        ],
        'rewrite' => [],
        'description' => 'Ensemble des messages de bienvnue disposés sur la page d’accueil.',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-chat',
        'supports' => ['title', 'editor', 'page-attributes'],
    ]);
    //à propos
    register_post_type('about', [
        'label' => 'Contenus à propos',
        'labels' => [
            'singular_name' => 'Contenu à propos',
        ],
        'rewrite' => [],
        'description' => 'Ensemble du contenu de la page "À propos".',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-buddicons-buddypress-logo',
        'supports' => ['title', 'editor', 'page-attributes'],
        //'capabilities' => ['create_posts' => 'do_not_allow']

    ]);
}
/* *****
 * remove media button
 * *****/
remove_action('media_buttons', 'media_buttons');


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
* count the time
* *****/
function es_count_the_time()
{
}
/* *****
* Return thumbnail attributes
* *****/

function es_the_news_attributes($imageName, $sizes = [])
{
    // 1. Récupérer le thumbnail pour le post courant dans the loop
    $image = get_field($imageName);
    $src = null;
    $sizesAttr = [];

    // 2. Récupérer les tailles d'image qui nous intéressent & formater les tailles pour qu'elles soient utilisables dans srcset
    $sizes = array_map(function ($size) use ($image, &$src, &$sizesAttr) {
        $data = $image["sizes"][$size];
        if (is_null($src)) {
            $src = $image["sizes"][$size];
        }
        $sizesAttr[] = strval(round($image["sizes"][$size . "-width"] / 1440 * 100)) . "vw";
        return $data . " " . $image["sizes"][$size . "-width"] . "w";
    }, $sizes);
    // 4. Formater les attributs
    $srcset = implode(', ', $sizes);
    $alt = $image['alt'] ?? null;

    // 5. Retourner les attributs générés
    return 'src="' . $src . '" srcset="' . $srcset . '" alt="' . $alt . '"' . 'sizes=' . implode(',', $sizesAttr);
}
function es_the_thumbnail_attributes_width($sizes = [])
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
function es_the_thumbnail_attributes_density($sizes = [], $post = null)
{
    // 1. Récupérer le thumbnail pour le post courant dans the loop
    if (isset($post)) {
        $thumbnail = get_post(get_post_thumbnail_id($post));
    } else {
        $thumbnail = get_post(get_post_thumbnail_id());
    }
    //var_dump($thumbnail);
    $thumbnail_meta = get_post_meta($thumbnail->ID);

    $src = null;
    $density = 0;

    // 2. Récupérer les tailles d'image qui nous intéressent & formater les tailles pour qu'elles soient utilisables dans srcset
    $sizes = array_map(function ($size) use ($thumbnail, &$src, &$density) {
        $data = wp_get_attachment_image_src($thumbnail->ID, $size);
        if (is_null($src)) {
            $src = $data[0];
        }
        $density++;
        return $data[0] . " " . $density . "x";
    }, $sizes);

    // 4. Formater les attributs
    $srcset = implode(', ', $sizes);
    $alt = $thumbnail_meta['_wp_attachment_image_alt'][0] ?? null;

    // 5. Retourner les attributs générés
    return 'src="' . $src . '" srcset="' . $srcset . '" alt="' . $alt . '"';
}
function es_the_content_attributes_density($imageName, $sizes = [])
{
    // 1. Récupérer le thumbnail pour le post courant dans the loop
    $image = get_field($imageName);
    $src = null;
    $density = 0;

    // 2. Récupérer les tailles d'image qui nous intéressent & formater les tailles pour qu'elles soient utilisables dans srcset
    $sizes = array_map(function ($size) use ($image, &$src, &$density) {
        $data = $image["sizes"][$size];
        if (is_null($src)) {
            $src = $data;
        }
        $density++;
        return $data . " " . $density . "x";
    }, $sizes);

    // 4. Formater les attributs
    $srcset = implode(', ', $sizes);
    $alt = $image['alt'] ?? null;

    // 5. Retourner les attributs générés
    return 'src="' . $src . '" srcset="' . $srcset . '" alt="' . $alt . '"';
}


function es_create_image_array()
{
    $j = 1;
    /* $nbr = 5; */
    $imageNames = [];
    while (get_field('image' . $j)) {
        $imageNames[] = 'image' . $j;
        $j++;
    }
    /* for ($i = 1; $i <= $nbr; $i++) {
        if (get_field('image' . $i)) {
            $imageNames[] = 'image' . $i;
        };
    } */
    return $imageNames;
}




/* *****
 * reedirect after comments
 * *****/

function es_comment_redirect($location)
{
    if (isset($_POST['my_redirect_to'])) // Don't use "redirect_to", internal WP var
    {
        $location = $_POST['my_redirect_to'];
    }

    return $location;
}

add_filter('comment_post_redirect', 'es_comment_redirect');

/* *****
 * GET comments for the right post
 * *****/
function es_post_comments_array()
{
    //Get comments for the post id
    $comments = get_comments(['post_id' => get_the_ID()]);
    $comments = array_map(function ($comment) {
        $id = $comment->comment_ID;
        $author = $comment->comment_author;
        $content = $comment->comment_content;
        return compact('id', 'author', 'content');
    }, $comments);
    return $comments;
}
// change comment form fields order
add_filter('comment_form_fields', 'mo_comment_fields_custom_order');
function mo_comment_fields_custom_order($fields)
{
    $author_field = $fields['author'];
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    unset($fields['author']);
    unset($fields['email']);
    unset($fields['url']);
    // the order of fields is the order below, change it as needed:
    $fields['author'] = $author_field;
    $fields['comment'] = $comment_field;

    // done ordering, now return the fields:
    return $fields;
}

function es_form_array()
{
    $connected = '';
    if (current_user_can('administrator')) {
        $connected = '<h4 class="comment-form__title">Rédigez votre commentaire</h4>';
        $adminClass =  " comment-form comment-form_admin form-js";
    } else {
        $adminClass =  "comment-form form-js";
    }
    return [
        'logged_in_as'       => null,
        'title_reply'        => null,
        // change the title of send button 
        'label_submit' => 'Envoyer',
        'submit_field' => '%1$s %2$s',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_form_top' => '',
        'comment_notes_before' => '',
        'comment_notes_after' => '',
        'class_form' => $adminClass,
        // redefine your own textarea (the comment body)
        'comment_field' =>  $connected .
            '<label for="comment" class="comment-form__message-label">Message</label>' .
            '<textarea id="comment" class="comment-form__message-input" name="comment" aria-required="true" required></textarea>' .
            '<input type="hidden" name="my_redirect_to" value="' . get_permalink() . '/#comments' . '">',
        'fields' => apply_filters(
            'comment_form_default_fields',
            [
                'author' =>
                '
                <h3 class="comment-form__title">Rédigez votre commentaire</h3>
                <label for="firstname" class="comment-form__firstname-label">Prénom</label>
                <input type="text" name="authorFirstname" id="firstname" class="comment-form__firstname-input" required>
                <label for="name" class="comment-form__name-label">Nom</label>
                <input type="text" name="name" class="comment-form__name-input" id="name" required>
                <input type="hidden" name="author" class="author" value="">',
                'email' => null,
                'url' => null,
            ]
        ),
    ];
}

/* *****
 * Return a menu structure for display
 * *****/
function es_bem($base, $modifiers = [])
{
    $classes = array_map(function ($modifier) use ($base) {
        return $base . '_' . $modifier;
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
* Delete intermediate img sizes
* *****/
add_filter('intermediate_image_sizes', function ($sizes) {
    return array_filter($sizes, function ($val) {
        return 'medium_large' !== $val; // Filter out 'medium_large'
    });
});
/* *****
* Add custom img sizes
* *****/
add_action('after_setup_theme', 'es_image_sizes');
function es_image_sizes()
{
    //capsules thumbnail
    add_image_size('capsule-thumbnail-small', 231, 231, true);
    add_image_size('capsule-thumbnail-small-double', 462, 462, true);
    add_image_size('capsule-thumbnail-regular', 328, 328, true);
    add_image_size('capsule-thumbnail-regular-double', 656, 656, true);
    //capsule content
    add_image_size('capsule-content-large', 430, 430, true);
    add_image_size('capsule-content-large-double', 860, 860, true);
    //News preview
    add_image_size('news-preview', 430, 240, true);
    add_image_size('news-preview-double', 860, 480, true);
    //News
    add_image_size('news-image-2cols-1row', 756, 250, true);
    add_image_size('news-image-1cols-1row', 368, 250, true);
    add_image_size('news-image-1cols-2rows', 368, 520, true);
}
/* *****
* related posts
* *****/

function es_related_posts()
{
    $currentPost = get_post();
    $tags = wp_get_post_tags($currentPost->ID);
    if ($tags) {
        //$first_tag = $tags[0]->term_id;
        $all_tag = array_map(fn ($tag)  => $tag->term_id, $tags);

        $args = [
            'post_type' => 'capsule',
            'tag__in' => $all_tag,
            'post__not_in' => array($currentPost->ID),
            'posts_per_page' => 8,
            'ignore_sticky_posts' => 1
        ];
        $my_query = new WP_Query($args);

        $avoidIds = array_map(fn ($post)  => $post->ID, $my_query->posts);
        $avoidIds[] = $currentPost->ID;
        if (count($my_query->posts) < 8) {
            $complete = new WP_Query([
                'post_type' => 'capsule',
                'post__not_in' => $avoidIds,
                'posts_per_page' => 8 - count($my_query->posts),
            ]);
        }
        $result = array_merge($my_query->posts, $complete->posts);
    }
    return $result;
}

/* *****
* Layout modifier
* *****/
function es_news_layout($imgCount)
{
    switch ($imgCount) {
        case 1:
            return "sg-images-container_single";
            break;

        case 2:
            return "sg-images-container_dual";
            break;

        case 3:
            return "sg-images-container_trial";
            break;
    }
}
/* *****
* Enable thumbnails support
* *****/
add_action("after_setup_theme", "es_add_theme_supports");
function es_add_theme_supports()
{
    add_theme_support('post-thumbnails', ['post', 'capsule']);
    add_theme_support('post-thumbnails', ['post', 'new']);
}
