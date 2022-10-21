<?php
/**
 * [wesoftpress_import_files Demo Content Importer]
 * @return [type] text demo content.
 */
function wesoftpress_import_files() {
    return array(
        array(
            'import_file_name'           => 'yellownews Theme Demo Data',
            'import_file_url'            => WESOFTPRESS_ROOT_URI . '/dummy-data/content/NewTime.xml',
            'import_widget_file_url'     => WESOFTPRESS_ROOT_URI . '/dummy-data/content/NewTime.wie',
            'import_customizer_file_url' => WESOFTPRESS_ROOT_URI . '/dummy-data/content/NewTime.dat',
            'import_preview_image_url'   => get_stylesheet_directory_uri() . '/screenshot.png',
            'import_notice'              => esc_html__( 'Make sure all the required plugins are activated.', 'wesoftpress' ),
            'preview_url'                => 'https://demo.wesoftpress.com/yellownews/',
        ),
    );
}
add_filter( 'ocdi/import_files', 'wesoftpress_import_files' );


function wesoftpress_after_import( $selected_import ) {

    esc_html_e( 'Thank You! for installing demo ( Home V1 ).', 'wesoftpress' );

        $front_page_id = get_page_by_title( 'Home V1' );
        $blog_page_id  = get_page_by_title( 'Blog' );
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id->ID );
        update_option( 'page_for_posts', $blog_page_id->ID );

		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
		set_theme_mod( 'nav_menu_locations', array(
				'mainmenu' => $main_menu->term_id,
			)
		);

}
add_action( 'ocdi/after_import', 'wesoftpress_after_import' );