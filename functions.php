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

if ( ! function_exists( 'newtime_pro_plan' ) ) {
    function newtime_pro_plan() {
        global $newtime_pro_plan;
        if ( ! isset( $newtime_pro_plan ) ) {
            require_once dirname(__FILE__) . '/wordpress-sdk/start.php';
            $newtime_pro_plan = fs_dynamic_init( array(
                'id'                  => '10129',
                'slug'                => 'newtime',
                'premium_slug'        => 'newtime-premium-plan',
                'type'                => 'theme',
                'public_key'          => 'pk_b41b0ac2660480002b28c4d1300cb',
                'is_premium'          => true,
                'is_premium_only'     => true,
                'has_addons'          => false,
                'has_paid_plans'      => true,
                'menu'                => array(
					'slug'           => 'newtime',
					'support'	      => true,
                    'first-path'	  => 'themes.php',
                ),
            ) );
        }
        return $newtime_pro_plan;
    }
    newtime_pro_plan();
    do_action( 'newtime_pro_plan_loaded' );
}

if ( newtime_pro_plan()->is__premium_only() ) {
	if ( newtime_pro_plan()->can_use_premium_code() ) {
		require_once('inc/Options.php'); 
	}
}


/*--------------------------------------
	PHOTO GALLERY .
----------------------------------------*/
if (file_exists(WESOFTPRESS_ROOT . '/inc/photogallery.php')) {
	require_once(WESOFTPRESS_ROOT . '/inc/photogallery.php');
}

/*--------------------------------------
	VIDEO GALLERY .
----------------------------------------*/
if (file_exists(WESOFTPRESS_ROOT . '/inc/videogallery.php')) {
	require_once(WESOFTPRESS_ROOT . '/inc/videogallery.php');
}

/*--------------------------------------
	ENGLISH TO BANGLA CONVATER .
----------------------------------------*/
if (file_exists(WESOFTPRESS_ROOT . '/inc/dateEngToBanglaConverter.php')) {
	require_once(WESOFTPRESS_ROOT . '/inc/dateEngToBanglaConverter.php');
}


/*--------------------------------------
	REWRITE URL .
----------------------------------------*/
if (file_exists(WESOFTPRESS_ROOT . '/inc/rewrite.php')) {
	require_once(WESOFTPRESS_ROOT . '/inc/rewrite.php');
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