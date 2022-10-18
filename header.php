<?php
/**
 * header.php
 *
 * The header for the theme.
 */
?>
<?php global $wesoftpress; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="top_nav_bg">
            <div class="top_nav_container">
                <div class="logo">
                    <a href="<?php bloginfo('url'); ?>">
                        <?php if($wesoftpress['logo']){
                            echo '<img width="'.$wesoftpress['width'].'" height="'.$wesoftpress['height'].'" src="'.$wesoftpress['logo']['url'].'" alt="'.$wesoftpress['alt'].'">';
                        }else{
                            echo '<span class="logo-text">'.bloginfo('name').'</span>';
                        } ?>

                    </a>
                </div>
                <div class="socil_search">
                    <ul class="social_icon_ul">
                        <li><a target="_blank" href="<?php echo $wesoftpress['live_tv']; ?>">
                                <?php if ($wesoftpress['site_content'] == '1'){
                                    echo '<img src="'.WESOFTPRESS_ROOT_IMG.'/ico_live.png" alt="Live Link">';
                                }else{
                                    echo '<img src="'.WESOFTPRESS_ROOT_IMG.'/ico_live_eng.png" alt="Live Link">';} ?>
                            </a>
                        </li>
                        <li><a target="_blank" href="<?php echo $wesoftpress['facebook']; ?>"><img
                                    src="<?php echo WESOFTPRESS_ROOT_IMG; ?>/ico_facebook.png" alt="Fb Link"></a></li>
                        <li><a target="_blank" href="<?php echo $wesoftpress['Youtube']; ?>"><img
                                    src="<?php echo WESOFTPRESS_ROOT_IMG; ?>/ico_youtube.png"
                                    alt="youTube Channel Link"></a></li>
                        <li><a target="_blank" href="<?php echo $wesoftpress['twitter']; ?>"><img
                                    src="<?php echo WESOFTPRESS_ROOT_IMG; ?>/ico_twitter.png"
                                    alt="Twitter Account Link"></a></li>
                        <li>
                            <a target="_blank" href="<?php echo $wesoftpress['rss']; ?>">
                                <img src="<?php echo WESOFTPRESS_ROOT_IMG; ?>/ico_rss.png" alt="RSS Link"></a>
                        </li>
                    </ul>
                    <div class="search_functions">
                        <?php get_search_form(); ?>
                    </div>
                    <div class="date" style="margin-top: 5px;">
                        <?php date_default_timezone_set('Asia/Dhaka');
                        if ($wesoftpress['site_content'] == '1') {
                            echo bn1_date(date('l , j F Y '));
                        } else {
                            echo date('l , j F Y ');
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_nav_bg">
            <div class="mobile_toggle">
                <div id="menu-button"><?php echo $wesoftpress['all_page_hd']; ?></div>
            </div>
            <div class="bottom_nav_container">
                <div class="home_icon">
                    <a href="<?php bloginfo('url'); ?>"><img src="<?php echo WESOFTPRESS_ROOT_IMG; ?>/home.png"
                            alt="Home"></a>
                </div>
                <?php $header_menu = 'header_menu';
                if (has_nav_menu($header_menu)) {
                    wp_nav_menu(array(
                        'theme_location' => 'header_menu',
                        'container' => 'div',
                        'container_class' => 'nav_menu_ground',
                        'menu_class' => 'first_ull_menu',
                        'depth' => '3',
                    ));
                }; ?>
            </div>
        </div>
        <div class="marquee_container">
            <div class="marquee_name"><?php echo $wesoftpress['marguee_name']; ?></div>
            <marquee class="marquee_title_sizeing" behavior="scroll" direction="left" scrollamount="3"
                onmouseover="this.stop();" onmouseout="this.start();">
                <?php $foodpost = new WP_Query('cat=' . $wesoftpress['marquee_cat'] . '&posts_per_page=10'); ?>
                <?php if ($foodpost->have_posts()) : while ($foodpost->have_posts()) : $foodpost->the_post(); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php endwhile;
                wp_reset_postdata();
                else : ?>
                <?php endif; ?>
            </marquee>
        </div>
    </header>