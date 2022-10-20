<?php global $wesoftpress; ?>

<aside class='right-box'>
    <?php if($wesoftpress['archive_ad_one']){
        echo '<div class="clear advertisements-box">'.$wesoftpress['archive_ad_one'].'</div>';
    }; ?>

    <?php if($wesoftpress['archive_ad_two']){
        echo '<div class="clear advertisements-box">'.$wesoftpress['archive_ad_two'].'</div>';
    }; ?>

    <div class='clear section' id='sidebar'>
        <div class='widget PopularPosts' data-version='1' id='PopularPosts1'>
            <div class='latest-title cf'>Popular This Week</div>
            <div class='widget-content popular-posts'>
                <?php $popular = new WP_Query(array('posts_per_page' => 6, 'meta_key' => 'popular_posts', 'orderby' => 'meta_value_num', 'order' => 'DESC'));
                while ($popular->have_posts()) : $popular->the_post();
                get_template_part('template-parts/content/content-sidebar');
                endwhile;
                wp_reset_postdata(); ?>

            </div>
        </div>
    </div>

    <?php if($wesoftpress['archive_ad_three']){
        echo '<div class="clear advertisements-box">'.$wesoftpress['archive_ad_three'].'</div>';
    }; ?>
    
</aside>