<?php

add_theme_support('post-thumbnails');

if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(
        array(
            'label' => __('Secondary Image', '[mv]'),
            'id' => 'secondary-image',
            'post_type' => 'post'
        )
    );
}

function mv_get_theme_asset($asset)
{
    return get_stylesheet_directory_uri() . '/' . ltrim($asset, '/');
}

register_nav_menu('main', 'Le menu de navigation principal');

function mv_get_menu($location, $baseClass)
{
    global $post;
    $items = [];
    $locations = get_nav_menu_locations();
    $id = $locations[$location];
    $menu = wp_get_nav_menu_items($id);
    foreach ($menu as $i => $object) {
        $item = new stdClass();
        $item->url = $object->url;
        $item->label = $object->title;
        $isTargettingHome = rtrim($object->url, '/') == rtrim(home_url(), '/');
        $item->current = (is_home() && $isTargettingHome) || ($object->object_id == $post->ID);
        $item->target = $object->target;
        $item->classes = array_map(function ($item) use ($baseClass) {
            return $baseClass . '--' . $item;
        }, array_filter(array_merge([$item->current ? 'current' : null], $object->classes)));
        array_unshift($item->classes, $baseClass);
        $items[] = $item;
    }
    return $items;
}

function remove_menus($args)
{
    remove_menu_page('edit.php');                    //Posts
    remove_menu_page('edit-comments.php');           //Comments
    remove_menu_page('upload.php');                  //Medias
}

add_action('admin_menu', 'remove_menus');

register_post_type('projects', [
    'label' => 'Projects',
    'labels' => [
        'name' => 'Projects',
        'singular_name' => 'Projects',
        'all_items' => 'Tous les projets',
        'add_new' => 'Ajouter un nouveau project',
        'add_new_item' => 'Ajouter un project',
        'edit_item' => 'Modifier le projet',
    ],
    'public' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    'menu_position' => 5,
    'description' => 'Les projects que j\'ai réalisés.',
    'menu_icon' => 'dashicons-welcome-add-page',
]);