<?php global $wesoftpress; ?>
<div class="leatest_post">
    <div class="leatest_title"><?php echo $wesoftpress['latest_only']; ?></div>
    <ul class="ten_post_caontainer">
        <?php $args = array(
            'posts_per_page' => 10,
            'order' => 'DESC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'post_format',
                    'field' => 'slug',
                    'terms' => array('post-format-aside', 'post-format-gallery', 'post-format-link', 'post-format-image', 'post-format-quote', 'post-format-status', 'post-format-audio', 'post-format-chat', 'post-format-video'),
                    'operator' => 'NOT IN'
                )
            )
        );
        $lastpost = new WP_Query($args); ?>
        <?php if ($lastpost->have_posts()) : while ($lastpost->have_posts()) : $lastpost->the_post(); ?>
        <div class="bullet"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        <?php endwhile;
        wp_reset_postdata();
        else :
            echo '<P>no posts found</P>';
        endif; ?>
    </ul>
    <div class="archive_ad">
        <?php if (is_active_sidebar('sidebar_ad')) : ?>
        <?php dynamic_sidebar('sidebar_ad'); ?>
        <?php endif; ?>
    </div>
    <div class="leatest_title"><?php echo $wesoftpress['most_read']; ?></div>
    <ul>
        <?php $popular = new WP_Query(array('posts_per_page' => 10, 'meta_key' => 'popular_posts', 'orderby' => 'meta_value_num', 'order' => 'DESC'));
        while ($popular->have_posts()) : $popular->the_post(); ?>
        <div class="bullet"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        <?php endwhile;
        wp_reset_postdata(); ?>
    </ul>
</div>