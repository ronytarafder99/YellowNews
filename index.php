<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yellow_news
 */
global $wesoftpress;
get_header(); ?>

<main class='main clear'>
    <div class='main-box clear'>
        <h1 class='story-title-all'><?php echo wp_get_document_title(); ?></h1>
        <div class='main-left-right clear'>
            <div class='left-box'>
                <div class='content section' id='content'>
                    <div class='widget Blog' data-version='1' id='Blog1'>
                        <div class='blog-posts clear'>
                            <?php
                            $default_posts_per_page = get_option( 'posts_per_page' );
                            $args = array(
                                'posts_per_page' => $default_posts_per_page, 
                                'paged' => max(1, get_query_var('paged')),
                                'order' => 'DESC',
                            );
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

                            <span id="blog-pager-newer-link">
                                <?php previous_posts_link( '<i class="icon-font icon-left-open"></i> Prev Page' ); ?>
                            </span>

                            <span id="blog-pager-older-link">
                                <?php next_posts_link( 'Next Page <i class="icon-font icon-right-open">&#59398;</i>' ); ?>
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

<?php if($wesoftpress['home_ad']){
    echo '<div class="clear advertisements-box"><div class="main-box main-left-right">'.$wesoftpress['home_ad'].'</div></div>';
}; ?>

<?php get_footer(); ?>