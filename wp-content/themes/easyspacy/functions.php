<?php
/* *****
 * Create custom post type
 * *****/
add_action('init', 'es_custom_post_type');

function es_custom_post_type()
{
    register_post_type('capsule', [
        'label' => 'Capsules',
        'labels' => [
            'singular_name' => 'Capsule',
            'add_new_item' => 'Ajouter une capsule',
            'add_new' => 'Ajouter une capsule',
        ],
        'rewrite' => [],
        'description' => 'Toutes les capsules créées jusqu’à maintenant.',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-site-alt',
    ]);
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
