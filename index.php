<?php
global $wesoftpress;
get_header();
?>

<main class='main clear'>
    <div class='main-box clear'>
        <h1 class='story-title-all'>The Hacker News - Most Trusted Cyber Security and Computer Security Analysis</h1>
        <div class='main-left-right clear'>
            <div class='left-box'>
                <div class='content section' id='content'>
                    <div class='widget Blog' data-version='1' id='Blog1'>
                        <div class='blog-posts clear'>
                            <?php
                            $default_posts_per_page = get_option( 'posts_per_page' );
                            $args = array('posts_per_page' => $default_posts_per_page, 'order' => 'DESC',);
                            $lastpost = new WP_Query($args); ?>
                            <?php if ($lastpost->have_posts()) : while ($lastpost->have_posts()) : $lastpost->the_post();
                            get_template_part('template-parts/content/content-post');
                            endwhile;
                            wp_reset_postdata();
                            else :
                                echo '<P>no posts found</P>';
                            endif; ?>
                            

                        </div>
                        <div class='blog-pager clear' id='blog-pager'>
                            <span id='blog-pager-older-link'>
                                <a class='blog-pager-older-link-mobile'
                                    href="https://thehackernews.com/search?updated-max=2022-10-17T15:50:00%2B05:30&max-results=7"
                                    id='Blog1_blog-pager-older-link' title='Older Posts'> Next Page <i
                                        class='icon-font icon-right-open'>&#59398;</i></a>
                            </span>
                        </div>
                        <div class='clear'></div>
                    </div>
                </div>
            </div>
            
            <?php get_sidebar(); ?>

        </div>
    </div>
</main>


<?php get_footer(); ?>