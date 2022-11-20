<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = 'wesoftpress';

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_title'           => esc_html__( 'Theme Options', 'your-textdomain-here' ),
        'customizer'           => true,
        'dev_mode'             => false,
        'page_priority'        => 10,
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://web.facebook.com/ronytarafder99/',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ronytarafder99',
        'title' => 'Follow us on Github',
        'icon'  => 'el el-github'
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.linkedin.com/in/rony-tarafder-1b5434178/',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    Redux::setArgs( $opt_name, $args );

    Redux::setSection($opt_name, array(
        'title' => __('Global Settings', 'WeSoftPress'),
        'id'    => 'global-setting',
        'icon'  => 'el el-list-alt',
        'fields'           => array(
            array(
                'id'       => 'deal-link',
                'type'     => 'text',
                'title'    => __('Deals Page link', 'WeSoftPress'),
                'default'  => '#',
            ),
            array(
                'id'       => 'contact-link',
                'type'     => 'text',
                'title'    => __('Contact Page link', 'WeSoftPress'),
                'default'  => '#',
            ),
            array(
                'id'       => 'facebook-link',
                'type'     => 'text',
                'title'    => __('Facebook Account link', 'WeSoftPress'),
                'default'  => '#',
            ),
            array(
                'id'       => 'twitter-link',
                'type'     => 'text',
                'title'    => __('Twitter ID link', 'WeSoftPress'),
                'default'  => '#',
            ),
            array(
                'id'       => 'linkedin-link',
                'type'     => 'text',
                'title'    => __('Linkedin ID link', 'WeSoftPress'),
                'default'  => '#',
            ),
            array(
                'id'       => 'Youtube-link',
                'type'     => 'text',
                'title'    => __('Youtube Channel link', 'WeSoftPress'),
                'default'  => '#',
            ),
            array(
                'id'       => 'instagram-link',
                'type'     => 'text',
                'title'    => __('Instagram Channel link', 'WeSoftPress'),
                'default'  => '#',
            ),
            array(
                'id'       => 'telegram-link',
                'type'     => 'text',
                'title'    => __('Telegram Channel link', 'WeSoftPress'),
                'default'  => '#',
            ),
            array(
                'id'       => 'rss-link',
                'type'     => 'text',
                'title'    => __('RSS link', 'WeSoftPress'),
                'default'  => '#',
            )
        )
    ));

    Redux::setSection($opt_name, array(
        'title' => __('header Settings', 'WeSoftPress'),
        'id'    => 'header',
        'icon'  => 'el el-list-alt',
    ));
    Redux::setSection($opt_name, array(
        'title' => __('Logo Settings'),
        'id'    => 'header-logo_setting',
        'icon'  => 'el el-list-alt',
        'subsection'       => true,
        'fields'     => array(
            array(
                'id'       => 'logo',
                'title'    => __('Main Logo'),
                'type'     => 'media',
            ),
            array(
                'id'     => 'logo-width',
                'title'    => __('width for logo'),
                'type'   => 'text',
                'placeholder' => 'defult is 330',
                'default'  => '330',
            ),
            array(
                'id'     => 'logo-height',
                'title'    => __('height for logo'),
                'type'   => 'text',
                'placeholder' => 'defult is 60',
                'default'  => '60',
            ),
        )
    ));
    
    // -> START Marquee
    Redux::setSection($opt_name, array(
        'title'  => __('Home Page Setting', 'WeSoftPress'),
        'id'     => 'home_page',
        'desc'   => __('All Setting For Home Page, visit: ', 'WeSoftPress') . '<a href="https://wesoftpress.com/" target="_blank">Theme Documentation</a>',
        'icon'   => 'el el-list-alt',
        'fields' => array(
            array(
                'id'       => 'post_cat_one',
                'type'     => 'select',
                'data'     => 'categories',
                'title'    => __('Home Catgory One', 'WeSoftPress'),
                'default'  => '1',
            ),
            array(
                'id'       => 'newslatter_shortcode',
                'type'     => 'text',
                'title'    => __('Newslatter ShortCode', 'WeSoftPress'),
                'placeholder'    => __('[email-subscribers-form id="1"]', 'WeSoftPress'),
                'subtitle' => __('you will find Shortcode "Email Subscribers" menu in lefthand side in WP menu then go to forms. copy the short code and paste here.', 'WeSoftPress'),
            ),
            array(
                'id'       => 'newslatter_title',
                'type'     => 'text',
                'title'    => __('Newslatter Title', 'WeSoftPress'),
                'default'  => 'Newsletter — Stay Informed',
            ),
            array(
                'id'       => 'newslatter_para',
                'type'     => 'textarea',
                'title'    => __('Newslatter Title', 'WeSoftPress'),
                'default'  => 'Sign up for cybersecurity newsletter and get latest news updates delivered straight to your inbox daily.',
            ),
        )
    ));
    
    
    // -> START Typography
    Redux::setSection($opt_name, array(
        'title'  => __('Typography', 'WeSoftPress'),
        'id'     => 'typography',
        'desc'   => __('For full documentation on this field, visit: ', 'WeSoftPress') . '<a href="https://wesoftpress.com/" target="_blank">Theme Documentation</a>',
        'icon'   => 'el el-font',
        'fields' => array(
            array(
                'id'       => 'opt-typography-body',
                'type'     => 'typography',
                'fonts'    => array (
                    'SolaimanLipi' => 'SolaimanLipi', 
                    'AdorshoLipi' => 'AdorshoLipi',
                    'MartelSans' => 'MartelSans',
                    'Galada' => 'Galada',
                    'HindSiliguri' => 'HindSiliguri',
                    'NunitoSans-Bold' => 'NunitoSans-Bold',
                    'NunitoSans' => 'NunitoSans' 
                ),
                'title'    => __('Body Font', 'WeSoftPress'),
                'subtitle' => __('Specify the body font properties.', 'WeSoftPress'),
                'google'   => true,
                'text-align'=> false,
                'color'=> false,
                'font-size'   => true,
                'output' => ('body'),
                'default'  => array(
                    'font-family' => 'Roboto',
                    'line-height' => '27px',
                    'font-size'   => '16px',
                ),
            ),
        )
    ));
    
    // advertisement
    Redux::setSection($opt_name, array(
        'title' => __('Advertisements', 'WeSoftPress'),
        'id'    => 'advertisements',
        'icon'  => 'el el-list-alt',
        'fields'     => array(
            array(
                'id'       => 'header_ad',
                'type'     => 'editor',
                'title'    => __('Ads In The Header', 'WeSoftPress'),
                'subtitle' => __('This ad will show in Header Bottom', 'WeSoftPress'),
            ),
            array(
                'id'       => 'home_ad',
                'type'     => 'editor',
                'title'    => __('Ads In The Homepage', 'WeSoftPress'),
                'subtitle' => __('This ad will show in Homepage Bottom', 'WeSoftPress'),
            ),
        )
    ));
    
    // Footer Settings Fields
    Redux::setSection($opt_name, array(
        'title' => __('Footer Settings', 'WeSoftPress'),
        'id'    => 'footer',
        'icon'  => 'el el-list-alt',
        'fields'     => array(
            array(
                'id'       => 'copyright',
                'type'     => 'editor',
                'title'    => __('Copyright Details', 'WeSoftPress'),
                'default'  => '&#169; Yellow News, 2022. All Rights Reserved.',
            ),
        )
    ));
    
    // documentation
    Redux::setSection($opt_name, array(
        'title' => __('documentation', 'WeSoftPress'),
        'id'    => 'select',
        'desc'       => __('For full documentation on this field, visit: ', 'WeSoftPress') . '<a href="https://wesoftpress.com/" target="_blank">Visit Our Blog Page</a>',
        'icon'  => 'el el-list-alt',
    ));
    // support
    Redux::setSection($opt_name, array(
        'title' => __('Support', 'WeSoftPress'),
        'id'    => 'support',
        'desc'       => __('If you need help about this theme, You can call: 01889363531</br> Facebook: ', 'WeSoftPress') . '<a href="https://www.facebook.com/ronytarafder99" target="_blank">  facebook</a>',
        'subtitle' => __('No validation can be done on this field type', 'WeSoftPress'),
        'icon'  => 'el el-thumbs-up',
    ));


    
    add_action('admin_head','admin_css'); 
    function admin_css(){
        echo '<style>
                .redux-container .redux-main .redux-field-container {padding: 10px 0 !important;}
                .redux-container .redux_field_th{padding: 20px 10px 20px 0 !important;}
                body.wp-admin #footer-thankyou{display: none !important}
                .redux-main .redux-action_bar .button{margin-left: 7px;}
            </style>';
    }