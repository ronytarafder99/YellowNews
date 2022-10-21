<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yellow_news
 */
?>
<?php global $wesoftpress; ?>

<?php $cat_id = $wesoftpress['post_cat_one']; ?>
<?php $lastpost = new WP_Query('cat=' . $cat_id . ' & posts_per_page=4'); ?>
<?php if ($lastpost->have_posts()) : ?>
<div class='deals cf'>
    <div class='deal-box cf'>
        <div class='latest-title cf'><a
                href="<?php echo get_category_link($cat_id); ?>"><?php echo get_the_category_by_id($cat_id); ?></a>
        </div>
        <div class='cf'>

            <?php while ($lastpost->have_posts()) : $lastpost->the_post(); 
            get_template_part('template-parts/content/content-box');
            endwhile; ?>

        </div>
    </div>
</div>
<?php endif; ?>

<?php $newslatter_shortcode = $wesoftpress['newslatter_shortcode']; 
if($newslatter_shortcode){ ?>
<div class='clear email-outer' id='email-outer'>
    <div class='email-box'>
        <div class='email-box-h3'><?php echo $wesoftpress['newslatter_title']; ?></div>
        <p><?php echo $wesoftpress['newslatter_para']; ?></p>
        <?php echo do_shortcode($newslatter_shortcode); ?>
    </div>
</div>
<?php } ?>

<footer class='footer cf'>
    <div class='footer-box clear'>
        <div class='footer-stuff clear cf'>
            <div class='footer-box-h4' id='follow-us'>Follow Us</div>
            <div class='follow-box cf'>
                <div class='social-box s-tw'>
                    <a aria-label='twitter' href="<?php echo $wesoftpress['twitter-link'] ?>" rel='noopener'
                        target='_blank'><i class='icon-font icon-twitter'>&#61593;</i>
                        <!-- <div class='sb-text'>850,500 Followers</div> -->
                    </a>
                </div>
                <div class='social-box s-fb'>
                    <a aria-label='facebook' href="<?php echo $wesoftpress['facebook-link'] ?>" rel='noopener'
                        target='_blank'><i class='icon-font icon-facebook'>&#61594;</i>
                        <!-- <div class='sb-text'>1,950,000 Followers</div> -->
                    </a>
                </div>
                <div class='social-box s-in'>
                    <a aria-label='linkedin' href="<?php echo $wesoftpress['linkedin-link'] ?>" rel='noopener'
                        target='_blank'><i class='icon-font icon-linkedin'>&#61665;</i>
                        <!-- <div class='sb-text'>350,500 Followers</div> -->
                    </a>
                </div>
                <div class='social-box s-yt'>
                    <a aria-label='youtube' href="<?php echo $wesoftpress['Youtube-link'] ?>" rel='noopener'
                        target='_blank'><i class='icon-font icon-youtube'>&#61799;</i>
                        <!-- <div class='sb-text'>19,900 Subscribers</div> -->
                    </a>
                </div>
                <div class='social-box s-it'>
                    <a aria-label='instagram' href="<?php echo $wesoftpress['instagram-link'] ?>" rel='noopener'
                        target='_blank'><i class='icon-font icon-instagram'>&#61805;</i>
                        <!-- <div class='sb-text'>140,500 Followers</div> -->
                    </a>
                </div>
            </div>
            <nav class='f-menu-box cf'>
                <div class='f-menu-cl-1 cf'>
                    <div class='footer-box-h5'>About</div>
                    <ul class='cf f-menu-list cf'>
                        <?php $footer_about_menu = 'footer_about_menu';
                        if (has_nav_menu($footer_about_menu)) {
                            wp_nav_menu(array(
                                'theme_location' => 'footer_about_menu',
                                'container'       => false,
                                'items_wrap' => '%3$s',
                                'depth'           => 1,
                            ));
                        }; ?>

                    </ul>
                </div>
                <div class='f-menu-cl-2 cf'>
                    <div class='footer-box-h5'>Pages</div>
                    <ul class='cf f-menu-list cf'>
                        <?php $footer_pages_menu = 'footer_pages_menu';
                        if (has_nav_menu($footer_pages_menu)) {
                            wp_nav_menu(array(
                                'theme_location' => 'footer_pages_menu',
                                'container'       => false,
                                'items_wrap' => '%3$s',
                                'depth'           => 1,
                            ));
                        }; ?>
                    </ul>
                </div>
                <div class='f-menu-cl-3 cf'>
                    <div class='footer-box-h5'>Deals</div>
                    <ul class='cf f-menu-list cf'>
                        <?php $footer_deals_menu = 'footer_deals_menu';
                        if (has_nav_menu($footer_deals_menu)) {
                            wp_nav_menu(array(
                                'theme_location' => 'footer_deals_menu',
                                'container'       => false,
                                'items_wrap' => '%3$s',
                                'depth'           => 1,
                            ));
                        }; ?>
                    </ul>
                </div>
                <div class='f-menu-cl-4 cf'>
                    <a class='f-m-b' href="<?php echo $wesoftpress['rss-link'] ?>" rel='noopener' target='_blank'>
                        <div class='f-menu-bt'><i class='icon-font icon-rss'>&#61598;</i> RSS Feeds</div>
                    </a>
                    <a class='f-m-b' href="<?php echo $wesoftpress['contact-link'] ?>">
                        <div class='f-menu-bt'><i class='icon-font icon-mail-alt'>&#61664;</i> Contact Us</div>
                    </a>
                    <a class='f-m-b' href="<?php echo $wesoftpress['telegram-link'] ?>" rel='noopener' target='_blank'>
                        <div class='f-menu-bt'><i class='icon-font icon-telegram'>&#62150;</i> Telegram Channel</div>
                    </a>
                </div>
            </nav>
            <div class='footer-note cf'><?php echo $wesoftpress['copyright'] ?></div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>