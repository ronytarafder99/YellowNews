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
                'title'    => __('selection'),
                'type'     => 'media',
            ),
            array(
                'id'     => 'alt',
                'title'    => __('alt for logo'),
                'type'   => 'text',
            ),
            array(
                'id'     => 'width',
                'title'    => __('width for logo'),
                'type'   => 'text',
                'desc'     => __('max width is 550', 'WeSoftPress'),
                'placeholder' => 'defult is 450',
                'default'  => '450',
            ),
            array(
                'id'     => 'height',
                'title'    => __('height for logo'),
                'type'   => 'text',
                'desc'     => __('max height is 100', 'WeSoftPress'),
                'placeholder' => 'defult is 95',
                'default'  => '95',
            ),
            array(
                'id'       => 'site_content',
                'type'     => 'switch',
                'title'    => __('Show Time in Bangla/Eng', 'WeSoftPress'),
                'subtitle' => __('on means bangla!', 'WeSoftPress'),
                'default'  => true,
            ),
        )
    ));
    
    Redux::setSection($opt_name, array(
        'title'            => __('Social Links', 'WeSoftPress'),
        'desc'             => __('Please fill all the social links here ', 'WeSoftPress'),
        'id'               => 'header-social_links',
        'subsection'       => true,
        'icon'  => 'el el-list-alt',
        'fields'           => array(
            array(
                'id'       => 'live_tv',
                'type'     => 'text',
                'title'    => __('Tv link', 'WeSoftPress'),
                'subtitle' => __('Enter Full ID Link', 'WeSoftPress'),
                'default'  => 'videogallery',
            ),
            array(
                'id'       => 'facebook',
                'type'     => 'text',
                'title'    => __('Facebook ID link', 'WeSoftPress'),
                'subtitle' => __('Enter Full ID Link', 'WeSoftPress'),
                'desc'     => __('Demo: https://www.facebook.com/ronytarafder99', 'WeSoftPress'),
                'default'  => '#',
            ),
            array(
                'id'       => 'twitter',
                'type'     => 'text',
                'title'    => __('Twitter ID link', 'WeSoftPress'),
                'subtitle' => __('Enter Full ID Link', 'WeSoftPress'),
                'desc'     => __('Demo: https://twitter.com/rony_tarafder99', 'WeSoftPress'),
                'default'  => '#',
            ),
            array(
                'id'       => 'Youtube',
                'type'     => 'text',
                'title'    => __('Youtube Channel link', 'WeSoftPress'),
                'subtitle' => __('Enter Full Channel Link', 'WeSoftPress'),
                'desc'     => __('Demo: https://twitter.com/rony_tarafder99', 'WeSoftPress'),
                'default'  => '#',
            ),
            array(
                'id'       => 'rss',
                'type'     => 'text',
                'title'    => __('RSS link', 'WeSoftPress'),
                'subtitle' => __('Enter Full Link', 'WeSoftPress'),
                'desc'     => __('Demo: https://twitter.com/rony_tarafder99', 'WeSoftPress'),
                'default'  => '#',
            )
        )
    ));
    
    // -> START Marquee
    Redux::setSection($opt_name, array(
        'title'  => __('Home Page Setting', 'WeSoftPress'),
        'id'     => 'home_page',
        'desc'   => __('All Setting For Hime Page, visit: ', 'WeSoftPress') . '<a href="https://wesoftpress.com/" target="_blank">Theme Documentation</a>',
        'icon'   => 'el el-list-alt',
        'fields' => array(
            array(
                'id'       => 'marguee_name',
                'type'     => 'text',
                'title'    => __('Marquee Heading', 'WeSoftPress'),
                'subtitle' => __('Enter Text', 'WeSoftPress'),
                'desc'     => __('Demo: শিরোনাম:', 'WeSoftPress'),
                'default'  => 'শিরোনাম:',
            ),
            array(
                'id'       => 'marquee_cat',
                'type'     => 'select',
                'data'     => 'categories',
                'title'    => __('Select category for Marquee', 'WeSoftPress'),
                'subtitle' => __('please select your category', 'WeSoftPress'),
                'default'  => '1',
                'args'     => array(
                    'hide_empty'         => 0,
                    'option_none_value' => 1,
                )
            ),
            array(
                'id'       => 'eye_catching_cat',
                'type'     => 'select',
                'data'     => 'categories',
                'title'    => __('Select category Above heading', 'WeSoftPress'),
                'subtitle' => __('please select your category', 'WeSoftPress'),
                'default'  => '1',
                'args'     => array(
                    'hide_empty'         => 0,
                    'option_none_value' => 1,
                )
            ),
            array(
                'id'       => 'dont_miss_cat',
                'type'     => 'select',
                'data'     => 'categories',
                'title'    => __('Select category Above heading', 'WeSoftPress'),
                'subtitle' => __('please select your category', 'WeSoftPress'),
                'default'  => '1',
                'args'     => array(
                    'hide_empty'         => 0,
                    'option_none_value' => 1,
                )
            ),
            array(
                'id'       => 'hit_list_cat',
                'type'     => 'select',
                'data'     => 'categories',
                'title'    => __('Select category Above heading', 'WeSoftPress'),
                'subtitle' => __('please select your category', 'WeSoftPress'),
                'default'  => '1',
                'args'     => array(
                    'hide_empty'         => 0,
                    'option_none_value' => 1,
                )
            ),
            array(
                'id'       => 'home_cat_1',
                'type'     => 'select',
                'data'     => 'categories',
                'title'    => __('Home Page Cat One', 'WeSoftPress'),
                'subtitle' => __('please select your category', 'WeSoftPress'),
                'default'  => '1',
                'args'     => array(
                    'hide_empty'         => 0,
                    'option_none_value' => 1,
                )
            ),
            array(
                'id'       => 'home_cat_2',
                'type'     => 'select',
                'data'     => 'categories',
                'title'    => __('Home Page Cat Two', 'WeSoftPress'),
                'subtitle' => __('please select your category', 'WeSoftPress'),
                'default'  => '1',
                'args'     => array(
                    'hide_empty'         => 0,
                    'option_none_value' => 1,
                )
            ),
            array(
                'id'       => 'home_cat_3',
                'type'     => 'select',
                'data'     => 'categories',
                'title'    => __('Home Page Cat Three', 'WeSoftPress'),
                'subtitle' => __('please select your category', 'WeSoftPress'),
                'default'  => '1',
                'args'     => array(
                    'hide_empty'         => 0,
                    'option_none_value' => 1,
                )
            ),
            array(
                'id'       => 'home_cat_4',
                'type'     => 'select',
                'data'     => 'categories',
                'title'    => __('Home Page Cat four', 'WeSoftPress'),
                'subtitle' => __('please select your category', 'WeSoftPress'),
                'default'  => '1',
                'args'     => array(
                    'hide_empty'         => 0,
                    'option_none_value' => 1,
                )
            ),
            array(
                'id'       => 'new_times_blog_cat',
                'type'     => 'select',
                'data'     => 'categories',
                'title'    => __('Select category Above heading', 'WeSoftPress'),
                'subtitle' => __('please select your category', 'WeSoftPress'),
                'default'  => '1',
                'args'     => array(
                    'hide_empty'         => 0,
                    'option_none_value' => 1,
                )
            ),
            array(
                'id'       => 'photo_name',
                'type'     => 'text',
                'title'    => __('Heading Text photo Slider', 'WeSoftPress'),
                'subtitle' => __('Enter Text', 'WeSoftPress'),
                'desc'     => __('Demo: ফটো গ্যালারি', 'WeSoftPress'),
                'default'  => 'ফটো গ্যালারি',
            ),
            array(
                'id'       => 'video_name',
                'type'     => 'text',
                'title'    => __('Heading Text Video Grid', 'WeSoftPress'),
                'subtitle' => __('Enter Text', 'WeSoftPress'),
                'desc'     => __('Demo: ভিডিও গ্যালারি', 'WeSoftPress'),
                'default'  => 'ভিডিও গ্যালারি',
            ),
            array(
                'id'       => 'home_sidebar_cat1',
                'type'     => 'select',
                'data'     => 'categories',
                'title'    => __('Home Sidebar Cat one', 'WeSoftPress'),
                'subtitle' => __('please select your category', 'WeSoftPress'),
                'default'  => '1',
                'args'     => array(
                    'hide_empty'         => 0,
                    'option_none_value' => 1,
                )
            ),
            array(
                'id'       => 'home_sidebar_cat2',
                'type'     => 'select',
                'data'     => 'categories',
                'title'    => __('Home Sidebar Cat two', 'WeSoftPress'),
                'subtitle' => __('please select your category', 'WeSoftPress'),
                'default'  => '1',
                'args'     => array(
                    'hide_empty'         => 0,
                    'option_none_value' => 1,
                )
            ),
            array(
                'id'       => 'home_sidebar_cat3',
                'type'     => 'select',
                'data'     => 'categories',
                'title'    => __('Home Sidebar Cat three', 'WeSoftPress'),
                'subtitle' => __('please select your category', 'WeSoftPress'),
                'default'  => '1',
                'args'     => array(
                    'hide_empty'         => 0,
                    'option_none_value' => 1,
                )
            ),
            array(
                'id'       => 'home_sidebar_cat4',
                'type'     => 'select',
                'data'     => 'categories',
                'title'    => __('Home Sidebar Cat four', 'WeSoftPress'),
                'subtitle' => __('please select your category', 'WeSoftPress'),
                'default'  => '1',
                'args'     => array(
                    'hide_empty'         => 0,
                    'option_none_value' => 1,
                )
            ),
            array(
                'id'       => 'home_sidebar_cat5',
                'type'     => 'select',
                'data'     => 'categories',
                'title'    => __('Home Sidebar Cat five', 'WeSoftPress'),
                'subtitle' => __('please select your category', 'WeSoftPress'),
                'default'  => '1',
                'args'     => array(
                    'hide_empty'         => 0,
                    'option_none_value' => 1,
                )
            ),
            array(
                'id'       => 'home_sidebar_cat6',
                'type'     => 'select',
                'data'     => 'categories',
                'title'    => __('Home Sidebar Cat six', 'WeSoftPress'),
                'subtitle' => __('please select your category', 'WeSoftPress'),
                'default'  => '1',
                'args'     => array(
                    'hide_empty'         => 0,
                    'option_none_value' => 1,
                )
            ),
            array(
                'id'       => 'home_sidebar_cat7',
                'type'     => 'select',
                'data'     => 'categories',
                'title'    => __('Home Sidebar Cat siven', 'WeSoftPress'),
                'subtitle' => __('please select your category', 'WeSoftPress'),
                'default'  => '1',
                'args'     => array(
                    'hide_empty'         => 0,
                    'option_none_value' => 1,
                )
            ),
            array(
                'id'       => 'home_sidebar_cat8',
                'type'     => 'select',
                'data'     => 'categories',
                'title'    => __('Home Sidebar Cat eight', 'WeSoftPress'),
                'subtitle' => __('please select your category', 'WeSoftPress'),
                'default'  => '1',
                'args'     => array(
                    'hide_empty'         => 0,
                    'option_none_value' => 1,
                )
            ),
            array(
                'id'       => 'home_sidebar_cat9',
                'type'     => 'select',
                'data'     => 'categories',
                'title'    => __('Home Sidebar Cat nine', 'WeSoftPress'),
                'subtitle' => __('please select your category', 'WeSoftPress'),
                'default'  => '1',
                'args'     => array(
                    'hide_empty'         => 0,
                    'option_none_value' => 1,
                )
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
                    'font-family' => 'SolaimanLipi',
                    'font-size'   => '16px',
                ),
            ),
        )
    ));
    
    // Static Text Heading
    Redux::setSection($opt_name, array(
        'title'            => __('Text Heading Field', 'WeSoftPress'),
        'desc'             => __('Please fill all the links here ', 'WeSoftPress'),
        'id'               => 'Text_heading',
        'icon'  => 'el el-list-alt',
        'fields'           => array(
            array(
                'id'       => 'latest_only',
                'type'     => 'text',
                'title'    => __('Heading For Leatest', 'WeSoftPress'),
                'desc'     => __('Demo: সর্বশেষ', 'WeSoftPress'),
                'default'  => 'সর্বশেষ',
            ),
            array(
                'id'       => 'most_read',
                'type'     => 'text',
                'title'    => __('Hading For Most Read', 'WeSoftPress'),
                'desc'     => __('Demo: সর্বোচ্চ পঠিত', 'WeSoftPress'),
                'default'  => 'সর্বোচ্চ পঠিত',
            ),
            array(
                'id'       => 'latest_all_news',
                'type'     => 'text',
                'title'    => __('Hading For All Latest', 'WeSoftPress'),
                'desc'     => __('Demo: সর্বশেষ সব খবর...', 'WeSoftPress'),
                'default'  => 'সর্বশেষ সব খবর...',
            ),
            array(
                'id'       => 'publised_at',
                'type'     => 'text',
                'title'    => __('Hading For publised', 'WeSoftPress'),
                'desc'     => __('Demo: প্রকাশিত :', 'WeSoftPress'),
                'default'  => 'প্রকাশিত :',
            ),
            array(
                'id'       => 'pre_post',
                'type'     => 'text',
                'title'    => __('Hading For Previous Post', 'WeSoftPress'),
                'desc'     => __('Demo: পূর্ববর্তী সংবাদ', 'WeSoftPress'),
                'default'  => 'পূর্ববর্তী সংবাদ',
            ),
            array(
                'id'       => 'nxt_post',
                'type'     => 'text',
                'title'    => __('Hading For Next Post', 'WeSoftPress'),
                'desc'     => __('Demo: পরবর্তী সংবাদ', 'WeSoftPress'),
                'default'  => 'পরবর্তী সংবাদ',
            ),
            array(
                'id'       => '_pg_prv_post',
                'type'     => 'text',
                'title'    => __('Hading For Pagination Previous', 'WeSoftPress'),
                'desc'     => __('Demo: << পূর্ববর্তী ', 'WeSoftPress'),
                'default'  => '<< পূর্ববর্তী',
            ),
            array(
                'id'       => '_pg_nxt_post',
                'type'     => 'text',
                'title'    => __('Hading For Pagination Next', 'WeSoftPress'),
                'desc'     => __('Demo: পরবর্তী >>', 'WeSoftPress'),
                'default'  => 'পরবর্তী >>',
            ),
            array(
                'id'       => 'all_page_hd',
                'type'     => 'text',
                'title'    => __('Hading For All Page', 'WeSoftPress'),
                'desc'     => __('Demo: সকল পাতা', 'WeSoftPress'),
                'default'  => 'সকল পাতা',
            ),
            array(
                'id'       => 'home_heading',
                'type'     => 'text',
                'title'    => __('Home Heading Text', 'WeSoftPress'),
                'desc'     => __('Demo: প্রচ্ছদ', 'WeSoftPress'),
                'default'  => 'প্রচ্ছদ',
            ),
            array(
                'id'       => 'search_heading',
                'type'     => 'text',
                'title'    => __('Heading Text Search', 'WeSoftPress'),
                'desc'     => __('Demo: অনুসন্ধান', 'WeSoftPress'),
                'default'  => 'অনুসন্ধান',
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
                'id'       => 'home_page_bottom_ad1',
                'type'     => 'editor',
                'title'    => __('Home Page Bottom Ads', 'WeSoftPress'),
                'subtitle' => __('home page full width banner', 'WeSoftPress'),
            ),
            array(
                'id'       => 'home_page_left_ad1',
                'type'     => 'editor',
                'title'    => __('Banner Ad in the Home left Part', 'WeSoftPress'),
                'subtitle' => __('This ad will show in the home left', 'WeSoftPress'),
            ),
            array(
                'id'       => 'home_page_left_ad2',
                'type'     => 'editor',
                'title'    => __('Banner Ad in the Home left Part', 'WeSoftPress'),
                'subtitle' => __('This ad will show in the home left', 'WeSoftPress'),
            ),
            array(
                'id'       => 'home_page_left_ad3',
                'type'     => 'editor',
                'title'    => __('Banner Ad in the Home left Part', 'WeSoftPress'),
                'subtitle' => __('This ad will show in the home left', 'WeSoftPress'),
            ),
            array(
                'id'       => 'home_page_right_ad1',
                'type'     => 'editor',
                'title'    => __('Thumb Ad in the Home right Part', 'WeSoftPress'),
                'subtitle' => __('This ad will show in the home right', 'WeSoftPress'),
            ),
            array(
                'id'       => 'home_page_right_ad2',
                'type'     => 'editor',
                'title'    => __('Thumb Ad in the Home right Part', 'WeSoftPress'),
                'subtitle' => __('This ad will show in the home right', 'WeSoftPress'),
            ),
            array(
                'id'       => 'archive_ads',
                'type'     => 'editor',
                'title'    => __('Ads In The  Archive Page', 'WeSoftPress'),
                'subtitle' => __('This ad will show in Archive page top', 'WeSoftPress'),
            ),
        )
    ));
    
    // Footer Settings Fields
    Redux::setSection($opt_name, array(
        'title' => __('Footer Settings', 'WeSoftPress'),
        'id'    => 'footer',
        'icon'  => 'el el-list-alt',
    ));
    Redux::setSection($opt_name, array(
        'title' => __('Logo Settings'),
        'id'    => 'footer-footer_logo_setting',
        'icon'  => 'el el-list-alt',
        'subsection'       => true,
        'fields'     => array(
            array(
                'id'       => 'publiser',
                'type'     => 'editor',
                'title'    => __('publiser Details', 'WeSoftPress'),
                'subtitle' => __('Use any of the features of WordPress editor inside your panel!', 'WeSoftPress'),
                'default'  => 'সম্পাদক ও প্রকাশক: নাজমুল হক শ্যামল',
            ),
            array(
                'id'       => 'info',
                'type'     => 'editor',
                'title'    => __('Details', 'WeSoftPress'),
                'subtitle' => __('Use any of the features of WordPress editor inside your panel!', 'WeSoftPress'),
                'default'  => 'দৈনিক নতুন সময়, বাড়ি ৭/১, রোড ১, পল্লবী, মিরপুর ১২, ঢাকা- ১২১৬</br>
                ফোন: ৫৮৩১২৮৮৮, 01889363531, ইমেইল: ronytarafder99@gmail.com',
            ),
            array(
                'id'       => 'developer',
                'type'     => 'editor',
                'title'    => __('Developer', 'WeSoftPress'),
                'subtitle' => __('Use any of the features of WordPress editor inside your panel!', 'WeSoftPress'),
                'default'  => '<a href="https://wesoftpress.com/">Developed & Maintainance by WeSoftPress</a>',
            )
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
        'desc'       => __('If you need help about this theme, You can call: 01957244612</br> Facebook: ', 'WeSoftPress') . '<a href="https://www.facebook.com/ronytarafder99" target="_blank">  facebook</a>',
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