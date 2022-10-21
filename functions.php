<?php

/*---------------------------------------
	DEFINE FILE FOLDER ROOT
-----------------------------------------*/
define( 'WESOFTPRESS_ROOT', get_template_directory() );
define( 'WESOFTPRESS_ROOT_URI', get_template_directory_uri() );
define( 'WESOFTPRESS_ROOT_CSS', WESOFTPRESS_ROOT_URI .'/assets/css' );
define( 'WESOFTPRESS_ROOT_JS', WESOFTPRESS_ROOT_URI .'/assets/js' );
define( 'WESOFTPRESS_ROOT_IMG', WESOFTPRESS_ROOT_URI .'/assets/images' );
define( 'WESOFTPRESS_ROOT_PLUGINS', WESOFTPRESS_ROOT_URI .'/plugins' );

/*----------------------------------------
 * IMPLEMENT ALL SCRIPTS
-----------------------------------------*/
if (file_exists(WESOFTPRESS_ROOT . '/inc/scripts.php')) {
	require_once(WESOFTPRESS_ROOT . '/inc/scripts.php');
}


/*----------------------------------------
	ADD THEME AFTER SETUP FUNCTIONALITY
-----------------------------------------*/
if (file_exists(WESOFTPRESS_ROOT . '/inc/setup.php')) {
	require_once(WESOFTPRESS_ROOT . '/inc/setup.php');
}

/*----------------------------------------
	ADD THEME WIDGET FUNCTIONALITY
-----------------------------------------*/
if (file_exists(WESOFTPRESS_ROOT . '/inc/widgets.php')) {
	require_once(WESOFTPRESS_ROOT . '/inc/widgets.php');
}


/*--------------------------------------
	CUSTOM FUNCTIONS .
----------------------------------------*/
if (file_exists( WESOFTPRESS_ROOT .'/inc/custom-functions.php' )) {
	require_once( WESOFTPRESS_ROOT .'/inc/custom-functions.php' );
}


/*--------------------------------------
	Options
----------------------------------------*/
if (file_exists(WESOFTPRESS_ROOT . '/inc/Options.php')) {
	require_once(WESOFTPRESS_ROOT . '/inc/Options.php');
}

/*--------------------------------------
	REQUIRED PLUGINS.
----------------------------------------*/
if (file_exists(WESOFTPRESS_ROOT . '/inc/required-plugins.php')) {
	require_once( WESOFTPRESS_ROOT . '/inc/required-plugins.php' );
}

/*---------------------------------------
	DEMO CONTENT IMPORTER
----------------------------------------*/
if ( class_exists( 'OCDI_Plugin' ) && file_exists( WESOFTPRESS_ROOT . '/inc/importer.php' ) ) {
    require_once( WESOFTPRESS_ROOT . '/inc/importer.php' );
}