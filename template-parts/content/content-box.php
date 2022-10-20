<article class='latest cf'>
    <a class='latest-link' href="<?php the_permalink(); ?>" rel='noopener' target='_blank'>
        <div>
            <?php 
            if (has_post_thumbnail()) {
                the_post_thumbnail( 'custom-size', array( 'class' => 'lazyload deal-link' ) );
            } else {
                echo '<img class="lazyload deal-link" src="'.WESOFTPRESS_ROOT_IMG.'/default-img_final.gif" alt="Failed to img load" />';
            } ?>
        </div>
        <div>
            <div class='latest-h3'><?php the_title(); ?></div>
            <div class='price-tag'>
                <span class='pt-old'><?php custom_length_excerpt(15); ?></span>
            </div>
        </div>
    </a>
</article>