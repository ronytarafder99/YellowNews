<?php

/**
 * Template Name: All post Template
 */

get_header(); 
global $wesoftpress; ?>
<div class="single_page_container">
    <div class="single_page_left">
        <?php 
        $args = array(
            'posts_per_page' => get_option( 'posts_per_page' ),
            'paged' => max(1, get_query_var('paged')),
            'order' => 'DESC',
        );
        $lastpost = new WP_Query($args); ?>
        <?php if ($lastpost->have_posts()) : ?>
        <div class="archive_post">
            <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            <div class="archive_post_loop">
                <div class="archive_post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                <div class="archive_post_content">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php if (has_post_thumbnail()) {
                  the_post_thumbnail('custom-size');
                } else { ?>
                        <img src="<?php bloginfo('template_directory'); ?>/img/default-img_final.gif"
                            alt="<?php the_title(); ?>" />
                        <?php } ?></a>

                    <p><?php custom_length_excerpt(17); ?></p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="pagination1">
            <div class="pagi_inner">
                <?php echo paginate_links(array(
                    'total' => $lastpost->max_num_pages,
                    'prev_text' => __($wesoftpress['_pg_prv_post'], 'textdomain'),
                    'next_text' => __($wesoftpress['_pg_nxt_post'], 'textdomain'),
          )); ?>
            </div>
        </div>
        <?php else :
        echo '<h2 style="text-align:center; font-size:2rem; margin:20px 0; font-weight:normal;">Nothing hare</h2>';
        endif; ?>
    </div>
    <div class="single_page_right">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>