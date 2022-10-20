<?php get_header();
global $wesoftpress; ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<main class='main clear'>
    <div class='main-box clear'>
        <h1 class='story-title'><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class='main-left-right clear'>
            <div class='left-box'>
                <div class='content section' id='content'>
                    <div class='widget Blog' data-version='1' id='Blog1'>
                        <div class='blog-posts clear'>
                            <div class='post'>
                                <div class='post-body' itemscope='' itemtype='https://schema.org/NewsArticle'>
                                    <div class='clear post-head'>
                                        <div class='postmeta'><i class='icon-font icon-calendar'>&#59394;</i><span
                                                class='author'><?php echo get_the_date('F j, Y'); ?></span><i
                                                class='icon-font icon-user'>&#59396;</i><span class='author'><a
                                                    href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"
                                                    rel='author'><?php echo get_the_author(); ?></a></span>
                                        </div>
                                    </div>
                                    <div class='articlebody clear cf' id='articlebody'>
                                        <div class="separator" style="clear: both;">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <?php the_content(); ?>
                                        <br />
                                        <div class='stophere'></div>
                                    </div>

                                    <!-- <div class='float-share cf'>
                                        <span class='fs-note'>SHARE</span>
                                        <a class='float-share-li fs-fb' data-sm='facebook' href='#link_share'
                                            rel='nofollow noopener' target='_blank'><i
                                                class='icon-font icon-facebook'>&#61594;</i></a>
                                        <a class='float-share-li fs-tw' data-sm='twitter' href='#link_share'
                                            rel='nofollow noopener' target='_blank'><i
                                                class='icon-font icon-twitter'>&#61593;</i></a>
                                        <a class='float-share-li fs-ln' data-sm='linkedin' href='#link_share'
                                            rel='nofollow noopener' target='_blank'><i
                                                class='icon-font icon-linkedin'>&#61665;</i></a>
                                        <a class='float-share-li fs-more' href='javascript:void(0)'><i
                                                class='icon-font icon-share'>&#61920;</i></a>
                                        <a class='float-share-li fs-com show-comments' href='#comment-box'><i
                                                class='icon-font icon-comment'>&#59395;</i></a>
                                    </div> -->
                                    <?php $link = get_permalink(get_the_ID()); ?>
                                    <?php $title = get_the_title(get_the_ID()); ?>
                                    <div class="float-share cf">
                                        <span class="fs-note">SHARE</span>
                                        <a class="float-share-li fs-fb" data-sm="facebook"
                                            href="https://www.facebook.com/sharer.php?u=<?php echo $link; ?>"
                                            rel="nofollow noopener" target="_blank"><i
                                                class="icon-font icon-facebook"></i></a>
                                        <a class="float-share-li fs-tw" data-sm="twitter"
                                            href="https://twitter.com/intent/tweet?url=<?php echo $link; ?>&amp;text=<?php echo $title; ?>&amp;via=<?php bloginfo('name'); ?>"
                                            rel="nofollow noopener" target="_blank"><i
                                                class="icon-font icon-twitter"></i></a>
                                        <a class="float-share-li fs-ln" data-sm="linkedin"
                                            href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $link; ?>"
                                            rel="nofollow noopener" target="_blank"><i
                                                class="icon-font icon-linkedin"></i></a>
                                        <a class="float-share-li fs-more" href="javascript:void(0)"><i
                                                class="icon-font icon-share"></i></a>
                                        <a class="float-share-li fs-com show-comments" href="#comment-box"><i
                                                class="icon-font icon-comment"></i></a>
                                    </div>
                                    <div class='sharebelow clear'>
                                        <div class='sharebelow-facebook'><a data-sm='facebook' href="https://www.facebook.com/sharer.php?u=<?php echo $link; ?>"
                                                rel='nofollow noopener' target='_blank'><span><i
                                                        class='icon-font icon-facebook'>&#61594;</i>Share</span></a>
                                        </div>
                                        <div class='sharebelow-twitter'><a data-sm='twitter' href="https://twitter.com/intent/tweet?url=<?php echo $link; ?>&amp;text=<?php echo $title; ?>&amp;via=<?php bloginfo('name'); ?>"
                                                rel='nofollow noopener' target='_blank'><span><i
                                                        class='icon-font icon-twitter'>&#61593;</i>Tweet</span></a>
                                        </div>
                                        <div class='sharebelow-linkedin'><a data-sm='linkedin' href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $link; ?>"
                                                rel='nofollow noopener' target='_blank'><span><i
                                                        class='icon-font icon-linkedin'>&#61665;</i>Share</span></a>
                                        </div>
                                        <div class='share-show-modal share-open-modal'><span><i
                                                    class='icon-font icon-share'>&#61920;</i>Share</span></div>
                                        <aside class='share-modal'>
                                            <aside class="share-m-wrap">
                                                <a class="share-close-modal" href="javascript:void(0)"><i
                                                        class="icon-font icon-cancel"></i></a>
                                                <a class="more-share m-fb" data-sm="facebook"
                                                    href="https://www.facebook.com/sharer.php?u=<?php echo $link; ?>"
                                                    rel="nofollow noopener" target="_blank"><i
                                                        class="icon-font icon-facebook"></i>Share on Facebook</a>
                                                <a class="more-share m-tw" data-sm="twitter"
                                                    href="https://twitter.com/intent/tweet?url=<?php echo $link; ?>&amp;text=<?php echo $title; ?>&amp;via=<?php bloginfo('name'); ?>"
                                                    rel="nofollow noopener" target="_blank"><i
                                                        class="icon-font icon-twitter"></i>Share on Twitter</a>
                                                <a class="more-share m-ln" data-sm="linkedin"
                                                    href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $link; ?>"
                                                    rel="nofollow noopener" target="_blank"><i
                                                        class="icon-font icon-linkedin"></i>Share on Linkedin</a>
                                                <a class="more-share m-rd" data-sm="reddit"
                                                    href="https://www.reddit.com/submit?url=<?php echo $link; ?>"
                                                    rel="nofollow noopener" target="_blank"><i
                                                        class="icon-font icon-reddit-alien"></i>Share on Reddit</a>
                                                <a class="more-share m-hn" data-sm="hackernews"
                                                    href="https://news.ycombinator.com/submitlink?u=<?php echo $link; ?>&amp;t=<?php echo $title; ?>"
                                                    rel="nofollow noopener" target="_blank"><i
                                                        class="icon-font icon-hacker-news"></i>Share on Hacker News</a>
                                                <a class="more-share m-em" data-sm="email" href="mailto:?&amp;subject=News Article—<?php echo $title; ?>&amp;body=Check out this article from <?php bloginfo('name'); ?>. <?php echo $title; ?> — <?php echo $link; ?>" rel="nofollow noopener" target="_blank"><i
                                                        class="icon-font icon-mail-alt"></i>Share on Email</a>
                                                <a class="more-share m-wa" data-sm="whatsapp"
                                                    href="https://api.whatsapp.com/send?text=<?php echo $title; ?> — <?php echo $link; ?>"
                                                    rel="nofollow noopener" target="_blank"><i
                                                        class="icon-font icon-whatsapp"></i>Share on WhatsApp</a>
                                                <a class="more-share m-fm" data-sm="facebook-m"
                                                    href="fb-messenger://share/?link=<?php echo $link; ?>&amp;app_id=280117418781535"
                                                    rel="nofollow noopener" target="_blank"><img
                                                        alt="Facebook Messenger" decoding="async" loading="lazy"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAMAAADW3miqAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAG9QTFRF////z+j/1+z//P7/AIT/0en/2u3/0+r/6PT/+Pz/3/D/4PD/0Oj/5PL/R6b/1Or/9/v/D4v/u97/mM7/lMz/4/L/7/f/CIj/xOP/K5n/6/X/7fb/str/h8X/8Pj/ntD/8vn/YbP/pdT/XLD/////yeSxCQAAACV0Uk5T////////////////////////////////////////////////AD/PQk8AAACwSURBVHja7NPHDoMwDAbg3xkkzEKhe9DB+z9jBWlpIzmoqtQbPuSST3FsJ+i+CMzoJxSRMRRNIooxRExhlGCMJIRWAK8+EMELYpH0Ucwh4faW9bBaQDDIZdtuVAtdHL18b5T1RleVUoW6IYD6k8SuKa9K1QihFLDNGZD3k7tdylV3gKvvWeWebYHwWxDxHc8CvfRnp0ciKTjgxYuYdTeBdJkLkU8+OnuZ/93f0UOAAQDpgJe+d1P0RQAAAABJRU5ErkJggg==">Share
                                                    on Facebook Messenger</a>
                                                <a class="more-share m-tg" data-sm="telegram"
                                                    href="https://telegram.me/share/url?url=<?php echo $link; ?>&amp;text=<?php echo $title; ?>"
                                                    rel="nofollow noopener" target="_blank"><i
                                                        class="icon-font icon-telegram"></i>Share on Telegram</a>
                                            </aside>
                                        </aside>
                                        <div class='sharebelow-comment'><a class='show-comments' href='#comment-box'><i
                                                    class='icon-font icon-comment'>&#59395;</i>Comments</a></div>
                                    </div>
                                    <div class='mobile-share' id='mobile-share'><a
                                            class='float-share-li fs-more mobile-s' href='javascript:void(0)'>SHARE <i
                                                class='icon-font icon-share'>&#61920;</i></a></div>
                                    <div class='tags'><span class='categ' itemprop='keywords'><a
                                                href="https://thehackernews.com/search/label/encryption" rel='tag'><span
                                                    itemprop='articleSection'>encryption</span></a>, <a
                                                href="https://thehackernews.com/search/label/hacking%20news"
                                                rel='tag'><span itemprop='articleSection'>hacking news</span></a>, <a
                                                href="https://thehackernews.com/search/label/Microsoft%20365"
                                                rel='tag'><span itemprop='articleSection'>Microsoft 365</span></a>, <a
                                                href="https://thehackernews.com/search/label/Vulnerability"
                                                rel='tag'><span
                                                    itemprop='articleSection'>Vulnerability</span></a></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php get_sidebar(); ?>

        </div>
        <div class='comments cf'>
            <div class='comment-box cf' id='comment-box'>
                <div class='latest-title cf'>Comments</div>
                <div id='fb-root'></div>
                <?php echo do_shortcode('[wpdevart_facebook_comment curent_url="'.$link.'" order_type="social" title_text="" title_text_color="#000000" title_text_font_size="22" title_text_font_famely="monospace" title_text_position="left" width="100%" bg_color="#d4d4d4" animation_effect="random" count_of_comments="3" ]'); ?>
            </div>
        </div>
    </div>
</main>
<?php endwhile; ?>
<?php else :
    echo '<h2 style="text-align:center; font-size:2rem; margin:20px 0; font-weight:normal;">Nothing hare</h2>';
endif; ?>
<div class='google cf below-google'>
    <center class='cf'>
        <div class='clear' id='av-bottom-d'></div><ins class='adsbygoogle header_unit'
            data-ad-client='ca-pub-7983783048239650' data-ad-slot='8972781702' style='display:inline-block' />
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </center>
</div>
<google-related></google-related>
<div class='below-post cf'>
    <div class='below-post-box cf'>
        <div id='load-latest'>
            <div class='latest-title cf'>Latest Stories</div>
            <div class='cf' id='result'>
                <?php
                $args = array('posts_per_page' => 4, 'order' => 'DESC',);
                $lastpost = new WP_Query($args);
                if ($lastpost->have_posts()) : while ($lastpost->have_posts()) : $lastpost->the_post();
                get_template_part('template-parts/content/content-box');
                endwhile;
                wp_reset_postdata();
                else :
                    echo '<P>no posts found</P>';
                endif; ?>
            </div>
        </div>
    </div>
</div>
<div class='below-post cf'>
    <div class='below-post-box cf'>
        <div class='latest-title cf'>Other Stories</div>
        <div id='load-latest-2'>
            <?php
            $args = array('posts_per_page' => 4, 'orderby' => 'rand',);
            $lastpost = new WP_Query($args);
            if ($lastpost->have_posts()) : while ($lastpost->have_posts()) : $lastpost->the_post();
            get_template_part('template-parts/content/content-box');
            endwhile;
            wp_reset_postdata();
            else :
                echo '<P>no posts found</P>';
            endif; ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>