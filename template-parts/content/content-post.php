<div class='body-post clear'>
<a class='story-link' href="<?php the_permalink(); ?>">
    <div class='clear home-post-box cf'>
        <div class='home-img clear'>
            <div class='img-ratio'>
                <?php 
                if (has_post_thumbnail()) {
                    the_post_thumbnail( 'custom-size', array( 'class' => 'home-img-src lazyload' ) );
                } else { 
                    echo '<img class="home-img-src lazyload" src="'.WESOFTPRESS_ROOT_IMG.'/default-img_final.gif" alt="Failed to img load" />';
                } ?>
            </div>
        </div>
        <div class='clear home-right'>
            <h2 class='home-title'><?php the_title(); ?></h2>
            <div class='item-label'><i
                    class='icon-font icon-calendar'>&#59394;</i>October 18, 2022<span><i
                        class='icon-font icon-user'>&#59396;</i>The Hacker News
                </span></div>
            <div class='home-desc'><?php custom_length_excerpt(20); ?></div>
        </div>
    </div>
</a>
</div>