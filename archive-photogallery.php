<?php get_header();
global $wesoftpress;
if (have_posts()) : ?>
<div class="pv_post_container">
    <div class="pv_post">
        <?php while (have_posts()) : the_post(); ?>
        <ul class="gallery">
            <li>
                <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
                <a href="<?php echo $url ?>" data-caption="<?php the_title(); ?>">
                    <?php custom_post_thumbnail(); ?>
                </a>
                <p style="text-align: center;"><?php the_title(); ?></p>
            </li>
        </ul>
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
endif;
get_footer(); ?>