<?php

function custom_post_type()
{
    $labels = array(
        'name' => __('Video', 'news'),
        'menu_name' => __('Video Gallary', 'news'),
        'add_new' => __('Add New Video', 'news'),
        'add_new_item' => __('Add New Video', 'news'),
    );
    $args = array(
        'label'               => __('Video', 'news'),
        'description'         => __('Movie news and reviews', 'news'),
        'labels'              => $labels,
        'supports'            => array('title', 'thumbnail',),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 7,
        'has_archive' => true,
        // 'taxonomies'          => array('category'),
    );
    register_post_type('videogallery', $args);
}
add_action('init', 'custom_post_type', 0);


//Add Custom Metabox
function diwp_custom_metabox()
{

    add_meta_box('diwp-metabox', 'Youtube Video ID', 'diwp_custom_metabox_callback', 'videogallery', 'normal');
}

add_action('add_meta_boxes', 'diwp_custom_metabox');


function diwp_custom_metabox_callback()
{
    global $post;
?>
<div class="row">
    <div class="label">Like: www.youtube.com/watch?v=hhNctIlXVsw...just Put"puthhNctIlXVsw" without ""</div>
    <div class="fields">
        <input type="text" name="_diwp_reading_time"
            value="<?php echo get_post_meta($post->ID, 'post_reading_time', true) ?>" />
    </div>
</div>
<?php

}

function diwp_save_custom_metabox()
{
    global $post;
    if (isset($_POST["_diwp_reading_time"])) :
        update_post_meta($post->ID, 'post_reading_time', $_POST["_diwp_reading_time"]);
    endif;
}

add_action('save_post', 'diwp_save_custom_metabox');