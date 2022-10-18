<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wesoftpress_widgets_init() {

    register_sidebar(array(
        'name'          => esc_html__( 'Sidebar Widgets', 'wesoftpress' ),
        'id'            => 'sidebar_ad',
        'description'   => esc_html__( 'This Ad Will Show in in the sidebar', 'wesoftpress' ),
        'before_widget' => '<div id="%1$s" class="single-widgets %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div><h2 class="widgettitle">',
		'after_title'   => '</h2></div>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('HomePage Right Widgets', 'wesoftpress' ),
        'id'            => 'home_page_right_wd',
        'description'   => esc_html__('This Ad Will Show in bottom of the archive page', 'wesoftpress' ),
        'before_widget' => '<div id="%1$s" class="single-widgets %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div><h2 class="widgettitle">',
		'after_title'   => '</h2></div>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('Facebook Like Plugin', 'wesoftpress'),
        'id'            => 'facebook_like',
        'description'   => esc_html__('This Block Will Show in homepage right side', 'wesoftpress'),
        'before_widget' => '<div id="%1$s" class="single-widgets %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div><h2 class="widgettitle">',
		'after_title'   => '</h2></div>',
    ));

}
add_action( 'widgets_init', 'wesoftpress_widgets_init' );
