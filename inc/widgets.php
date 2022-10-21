<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wesoftpress_widgets_init() {

    register_sidebar(array(
        'name'          => esc_html__( 'Sidebar Widgets One', 'wesoftpress' ),
        'id'            => 'sidebar_widget_one',
        'description'   => esc_html__( 'This Ad Will Show in in the sidebar', 'wesoftpress' ),
        'before_widget' => '<div id="%1$s" class="single-widgets %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div><h2 class="widgettitle">',
		'after_title'   => '</h2></div>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('Sidebar Widgets Two', 'wesoftpress' ),
        'id'            => 'sidebar_widget_two',
        'description'   => esc_html__( 'This Ad Will Show in in the sidebar', 'wesoftpress' ),
        'before_widget' => '<div id="%1$s" class="single-widgets %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div><h2 class="widgettitle">',
		'after_title'   => '</h2></div>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('Sidebar Widgets Three', 'wesoftpress'),
        'id'            => 'sidebar_widget_three',
        'description'   => esc_html__( 'This Ad Will Show in in the sidebar', 'wesoftpress' ),
        'before_widget' => '<div id="%1$s" class="single-widgets %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div><h2 class="widgettitle">',
		'after_title'   => '</h2></div>',
    ));

}
add_action( 'widgets_init', 'wesoftpress_widgets_init' );