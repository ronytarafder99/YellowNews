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
    <header class='header clear'>
        <div class='top-bar cf'>
            <div class='top-bar-box cf'>
                <span class='top-follow'><a href='#follow-us'>Follow us</a>
                    <a href="<?php echo $wesoftpress['facebook-link'] ?>" rel='noopener' target='_blank'><i
                            class='icon-font icon-facebook'>&#61594;</i></a>
                    <a href="<?php echo $wesoftpress['twitter-link'] ?>" rel='noopener' target='_blank'><i
                            class='icon-font icon-twitter'>&#61593;</i></a>
                    <a href="<?php echo $wesoftpress['linkedin-link'] ?>" rel='noopener' target='_blank'><i
                            class='icon-font icon-linkedin'>&#61665;</i></a>
                    <a href="<?php echo $wesoftpress['Youtube-link'] ?>" rel='noopener' target='_blank'><i
                            class='icon-font icon-youtube'>&#61799;</i></a>
                    <a href="<?php echo $wesoftpress['rss-link'] ?>" rel='noopener' target='_blank'><i
                            class='icon-font icon-rss'>&#61598;</i></a></span>
            </div>
        </div>
        <div class='logo-area cf'>
            <div class='logo-box'>
                <a href="<?php bloginfo('url'); ?>">
                <?php if($wesoftpress['logo']['url']){
                    echo '<img width="'.$wesoftpress['logo-width'].'" height="'.$wesoftpress['logo-height'].'" alt="Site Logo" src="'.$wesoftpress['logo']['url'].'" />';
                }else{
                    bloginfo('name');
                }; ?>
                    
                </a>
            </div>
            <div class='m-button m-menu-more'><a aria-label='open menu' class='btn-open' href='javascript:void(0)'><i
                        class='icon-font icon-menu m-m-icon'>&#61641;</i></a></div>
            <div class='m-search-here'><i class='icon-font icon-search'>&#59392;</i></div>
            <a class='sub-button' href='#email-outer'>
                <div class='sub-style'><i class='icon-font icon-mail-alt'>&#61664;</i> Subscribe to Newsletter</div>
            </a>
        </div>
    </header>
    <nav class='menu cf'>
        <div class='m-menu-box cf'>
            <ul class='cf m-menu-ul'>
                <li><a href="<?php bloginfo('url'); ?>"><i class='icon-font icon-home'>&#59393;</i> Home</a></li>
                <li><a href='#email-outer'><i class='icon-font icon-mail-alt'>&#61664;</i> Newsletter</a></li>
                <li><a href="<?php echo $wesoftpress['deal-link'] ?>" rel='noopener' target='_blank'><i
                            class='icon-font icon-basket'>&#59397;</i> Offers</a></li>
            </ul>
        </div>
        <div class='menu-box cf'>
            <ul class='cf menu-ul'>
                <?php $header_menu = 'header_menu';
                if (has_nav_menu($header_menu)) {
                    wp_nav_menu(array(
                        'theme_location' => 'header_menu',
                        'container'       => false,
                        'items_wrap' => '%3$s',
                        'depth'           => 1,
                    ));
                }; ?>
            </ul>
            <div class='button menu-more'>
                <a class='btn-open' href='javascript:void(0)'><i class='icon-font icon-menu'>&#61641;</i></a></div>
            <div class='search-here'><i class='icon-font icon-search'>&#59392;</i></div>
        </div>
    </nav>
    <aside class='search-box cf'>
        <div class='search-b'>
            <?php get_search_form(); ?>
            <span class='underline'></span>
        </div>
    </aside>
    <aside class='overlay slide-up-fade-in cf' id='overlay'>
        <div class='wrap cf'>
            <div class='o-top cf'>
                <a class='btn-close' href='javascript:void(0)'><i
                        class='icon-font icon-cancel close-m-i'>&#59402;</i></a>
            </div>
            <nav class='o-menu-box cf'>
                <div class='o-menu-left'>
                    <div class='o-menu-h5'>Resources</div>
                    <ul class='o-menu'>
                    <?php $header_resources_menu = 'header_resources_menu';
                        if (has_nav_menu($header_resources_menu)) {
                            wp_nav_menu(array(
                                'theme_location' => 'header_resources_menu',
                                'container'       => false,
                                'items_wrap' => '%3$s',
                                'depth'           => 1,
                            ));
                        }; ?>
                    </ul>
                </div>
                <div class='o-menu-right'>
                    <div class='o-menu-h5'>About Site</div>
                    <ul class='o-menu'>
                    <?php $header_about_menu = 'header_about_menu';
                        if (has_nav_menu($header_about_menu)) {
                            wp_nav_menu(array(
                                'theme_location' => 'header_about_menu',
                                'container'       => false,
                                'items_wrap' => '%3$s',
                                'depth'           => 1,
                            ));
                        }; ?>
                    </ul>
                </div>
            </nav>
            <div class='gap'></div>
            <div class='o-h5'>Contact/Tip Us</div>
            <div class='o-contact'>
                <a href="<?php echo $wesoftpress['contact-link'] ?>">
                    <div class='o-contact-icon'><i class='icon-font icon-mail-alt'>&#61664;</i></div>
                    <span><?php bloginfo( 'description' ); ?></span>
                </a>
            </div>
            <div class='gap'></div>
            <div class='o-h5'>Follow Us On Social Media</div>
            <div class='o-follow cf'>
                <a href="<?php echo $wesoftpress['facebook-link'] ?>" rel='noopener' target='_blank'><i
                        class='icon-font icon-facebook'>&#61594;</i></a>
                <a href="<?php echo $wesoftpress['twitter-link'] ?>" rel='noopener' target='_blank'><i
                        class='icon-font icon-twitter'>&#61593;</i></a>
                <a href="<?php echo $wesoftpress['linkedin-link'] ?>" rel='noopener' target='_blank'><i
                        class='icon-font icon-linkedin'>&#61665;</i></a>
                <a href="<?php echo $wesoftpress['Youtube-link'] ?>" rel='noopener' target='_blank'><i
                        class='icon-font icon-youtube'>&#61799;</i></a>
                <a href="<?php echo $wesoftpress['instagram-link'] ?>" rel='noopener' target='_blank'><i
                        class='icon-font icon-instagram'>&#61805;</i></a>
            </div>
            <div class='o-sub cf'>
                <a href="<?php echo $wesoftpress['rss-link'] ?>" rel='noopener' target='_blank'><i
                        class='icon-font icon-rss'>&#61598;</i> RSS Feeds</a>
                <a href='#email-outer'><i class='icon-font icon-bell-alt'>&#61683;</i> Email Alerts</a>
                <a href="<?php echo $wesoftpress['telegram-link'] ?>" rel='noopener' target='_blank'><i
                        class='icon-font icon-telegram'>&#62150;</i> Telegram Channel</a>
            </div>
        </div>
    </aside>
    <div class='advertisements main-box'>
        <?php if($wesoftpress['header_ad']){
            echo '<center class="cf">'.$wesoftpress['header_ad'].'</center>';
        }; ?>

    </div>