<?php
// custom excerpt
if ( ! function_exists( 'custom_length_excerpt' ) ) :
    function custom_length_excerpt($word_count_limit) {
        $content = wp_strip_all_tags(get_the_content(), true);
        echo wp_trim_words($content, $word_count_limit);
    }
endif;


// Add class to pagination
add_filter('next_posts_link_attributes', 'add_next_posts_link_attributes');
add_filter('previous_posts_link_attributes', 'add_previous_posts_link_attributes');

function add_next_posts_link_attributes() {
  return 'class="blog-pager-older-link-mobile"';
}
function add_previous_posts_link_attributes() {
  return 'class="blog-pager-newer-link-mobile"';
}

// Popular Posts
if ( ! function_exists( 'shapeSpace_popular_posts' ) ) :
    function shapeSpace_popular_posts($post_id) {
        $count_key = 'popular_posts';
        $count = get_post_meta($post_id, $count_key, true);
        if ($count == '') {
            $count = 0;
            delete_post_meta($post_id, $count_key);
            add_post_meta($post_id, $count_key, '0');
        } else {
            $count++;
            update_post_meta($post_id, $count_key, $count);
        }
    }
endif;

if ( ! function_exists( 'shapeSpace_track_posts' ) ) :
    function shapeSpace_track_posts($post_id){
        if (!is_single()) return;
        if (empty($post_id)) {
            global $post;
            $post_id = $post->ID;
        }
        shapeSpace_popular_posts($post_id);
    }
endif;
add_action('wp_head', 'shapeSpace_track_posts');

if (file_exists(WESOFTPRESS_ROOT . '/inc/update-checker.php')) {
	require_once(WESOFTPRESS_ROOT . '/inc/update-checker.php');
}

new ThemeUpdateChecker(
    'YellowNews', 
    'https://cdn.wesoftpress.com/my-theme-update/YellowNews/info.json'
);