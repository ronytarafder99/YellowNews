<?php

/**
 * Enqueue scripts
 *
 * @param string $handle Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of script names on which this script depends
 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
 */

/**
 * Enqueue scripts and styles.
 */

if ( !function_exists('wesoftpress_scripts') ) :

	function wesoftpress_scripts() {

		/************************************
		*	    ALL CSS SCRIPTS HERE.       *
		*************************************/

        /*----------------------------
            THEME DEFAULT STYLESHEET
        -----------------------------*/

		wp_enqueue_style( 'wesoftpress-style', get_stylesheet_uri());

        /*----------------------------
            PLUGINS
        -----------------------------*/
        wp_enqueue_style('main-css', WESOFTPRESS_ROOT_CSS . '/main.css');
        wp_enqueue_style('fonts-css', WESOFTPRESS_ROOT_CSS . '/fonts.css');

        /*----------------------------
            FONT AWSOME
        -----------------------------*/
        // wp_enqueue_style('font-awesome', WESOFTPRESS_ROOT_CSS . '/fontawesome.css');

        /*----------------------------
            MAIN STYLESHEET
        ----------------------------*/



		/*************************************
            ALL JQUERY SCRIPTS HERE
        **************************************/
        
        wp_enqueue_script('head', WESOFTPRESS_ROOT_JS . '/head.js', array('jquery'), null, true);
        wp_enqueue_script('lazy', WESOFTPRESS_ROOT_JS . '/lazy.js', array('jquery'), null, true);
        wp_enqueue_script('script', WESOFTPRESS_ROOT_JS . '/script.js', array('jquery'), null, true);
        // wp_enqueue_script('script_lightbox', WESOFTPRESS_ROOT_JS . '/jquery.lightbox.js', array('jquery'), null, true);
        // wp_enqueue_script('script_flexslider', WESOFTPRESS_ROOT_JS . '/jquery.flexslider.js', array('jquery'), null, true);
        wp_enqueue_script('rocket-loader.min', WESOFTPRESS_ROOT_JS . '/rocket-loader.min.js', array('jquery'), null, true);

        if(is_single()){
            wp_enqueue_script('social-share', WESOFTPRESS_ROOT_JS . '/social-share.js', array('jquery'), null, true);
        }

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}

endif;
add_action( 'wp_enqueue_scripts', 'wesoftpress_scripts');