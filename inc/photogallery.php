<?php

function custom_post_type_photo() {
    $labels = array(
        'name' => __('Photo', 'news'),
        'menu_name' => __('Photo Gallary', 'news'),
        'add_new' => __('Add New photo', 'news'),
        'add_new_item' => __('Add New photo', 'news'),
    );
    $args = array(
        'label'               => __('Photo', 'news'),
        'description'         => __('Movie news and reviews', 'news'),
        'labels'              => $labels,
        'supports'            => array('title', 'thumbnail',),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'has_archive' => true,
        // 'taxonomies'          => array('category'),
    );
    register_post_type('photogallery', $args);
}
add_action('init', 'custom_post_type_photo', 0);