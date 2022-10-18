<?php get_header();
global $wesoftpress;
if (have_posts()) : ?>
<div class="pv_post_container">
    <div class="video-popup">
        <?php $lastpost = new WP_Query(array('post_type' => 'videogallery', 'posts_per_page' => 1, 'orderby' => 'rand', 'order'  => 'ASC'));
            if ($lastpost->have_posts()) :
            ?><?php while ($lastpost->have_posts()) : $lastpost->the_post(); ?>
        <div class="iframe-wrapper">
            <iframe
                src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID,  'post_reading_time', true); ?>"
                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <?php endwhile;
            wp_reset_postdata();
            endif; ?>
        </div>
    </div>
    <div class="share_box">
        <?php if (function_exists('sharethis_inline_buttons')) : ?>
        <?php echo sharethis_inline_buttons(); ?>
        <?php endif; ?>
    </div>
    <div class="pv_post">
        <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <div class="vid item">
            <iframe style="border: 2px solid #808000;" width="100%" height="auto"
                src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID,  'post_reading_time', true); ?>"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <p class="vid-head"><?php the_title(); ?></p>
        </div>
        <?php endwhile; ?>
    </div>
    <div class="pagination1">
        <div class="pagi_inner">
            <?php echo paginate_links(array(
                    'prev_text' => __($wesoftpress['_pg_prv_post'], 'textdomain'),
                    'next_text' => __($wesoftpress['_pg_nxt_post'], 'textdomain'),
                )); ?>
        </div>
    </div>
</div>
<?php else :
    echo '<h2 style="text-align:center; font-size:2rem; margin:20px 0; font-weight:normal;">Nothing hare</h2>';
endif; ?>
<?php get_footer(); ?>