<?php
// custom excerpt
if ( ! function_exists( 'custom_length_excerpt' ) ) :
    function custom_length_excerpt($word_count_limit) {
        $content = wp_strip_all_tags(get_the_content(), true);
        echo wp_trim_words($content, $word_count_limit);
    }
endif;

// the_post_thumbnail
if ( ! function_exists( 'custom_post_thumbnail' ) ) :
    function custom_post_thumbnail() {
        if (has_post_thumbnail()) {
            the_post_thumbnail('custom-size');
        } else { 
            echo '<img src="'.WESOFTPRESS_ROOT_IMG.'/default-img_final.gif" alt="Failed to img load" />';
            }
        }
endif;

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
    'NewTime', 
    'https://wesoftpress.com/my-theme-update/NewTime/info.json'
);