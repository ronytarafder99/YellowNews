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
                    <a href="<?php echo $wesoftpress['Youtube-link'] ?>" rel='noopener'
                        target='_blank'><i class='icon-font icon-youtube'>&#61799;</i></a>
                    <a href="<?php echo $wesoftpress['rss-link'] ?>" rel='noopener' target='_blank'><i
                            class='icon-font icon-rss'>&#61598;</i></a></span>
            </div>
        </div>
        <div class='logo-area cf'>
            <div class='logo-box'>
                <a href="<?php bloginfo('url'); ?>">
                    <img alt='Site Logo' src="<?php echo $wesoftpress['logo']['url']; ?>" />
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
                <li><a href='https://deals.thehackernews.com' rel='noopener' target='_blank'><i
                            class='icon-font icon-basket'>&#59397;</i> Offers</a></li>
            </ul>
        </div>
        <div class='menu-box cf'>
            <ul class='cf menu-ul'>
                <!-- <li class='show-menu'><a href="<?php bloginfo('url'); ?>" itemprop='url'>Home</a></li>
                <li class='eight_plus'><a href='/search/label/data%20breach'>Data Breaches</a></li>
                <li class='show-menu'><a href='/search/label/Cyber%20Attack'>Cyber Attacks</a></li>
                <li class='show-menu'><a href='/search/label/Vulnerability'>Vulnerabilities</a></li>
                <li class='eight_plus'><a href='/search/label/Malware'>Malware</a></li>
                <li class='show-menu'><a href='https://deals.thehackernews.com' rel='noopener'
                        target='_blank'>Offers</a></li>
                <li class='show-menu'><a href='/p/submit-news.html'>Contact</a></li> -->
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
                        <li><a href='https://deals.thehackernews.com' rel='noopener' target='_blank'>THN Store</a></li>
                        <li><a href='https://thehackernews.tradepub.com' rel='noopener' target='_blank'>Free eBooks</a>
                        </li>
                        <li><a href='https://deals.thehackernews.com/free' rel='noopener' target='_blank'>Freebies</a>
                        </li>
                        <li><a href='https://feeds.feedburner.com/TheHackersNews' rel='noopener' target='_blank'>RSS
                                Feeds</a></li>
                    </ul>
                </div>
                <div class='o-menu-right'>
                    <div class='o-menu-h5'>About Site</div>
                    <ul class='o-menu'>
                        <li><a href='/p/about-us.html'>About Us</a></li>
                        <li><a href='/p/authors.html'>Our Team</a></li>
                        <li><a href='/p/careers-technical-writer-designer-and.html'>Jobs</a></li>
                        <li><a href='/p/advertising-with-hacker-news.html'>Advertise With Us</a></li>
                    </ul>
                </div>
            </nav>
            <div class='gap'></div>
            <div class='o-h5'>Contact/Tip Us</div>
            <div class='o-contact'>
                <a href='/p/submit-news.html'>
                    <div class='o-contact-icon'><i class='icon-font icon-mail-alt'>&#61664;</i></div>
                    <span>Reach out to get featured&#8212;contact us to send your exclusive story idea, research, hacks,
                        or ask us a question or leave a comment/feedback!</span>
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
                <a href='https://feeds.feedburner.com/TheHackersNews' rel='noopener' target='_blank'><i
                        class='icon-font icon-rss'>&#61598;</i> RSS Feeds</a>
                <a href='#email-outer'><i class='icon-font icon-bell-alt'>&#61683;</i> Email Alerts</a>
                <a href='https://t.me/joinchat/AAAAADwuDObFWF60CiR-HQ' rel='noopener' target='_blank'><i
                        class='icon-font icon-telegram'>&#62150;</i> Telegram Channel</a>
            </div>
        </div>
    </aside>
    <div class='advertisements'>

    <?php if($wesoftpress['header_ad']){
        echo '<center class="cf">'.$wesoftpress['header_ad'].'</center>';
    }; ?>
        
    </div>