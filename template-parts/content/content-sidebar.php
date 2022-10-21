<div class='cf pop-article clear'>
    <a class='pop-link cf' href="<?php the_permalink(); ?>">
        <div class='side-pop-image'>
            <figure class='pop-image'>
                <?php 
                if (has_post_thumbnail()) {
                    the_post_thumbnail( 'thumbnail', array( 'class' => 'lazyload' ) );
                } else { 
                    echo '<img class="lazyload" src="'.WESOFTPRESS_ROOT_IMG.'/no-image.gif" alt="Failed to img load" />';
                } ?>
            </figure>
        </div>
        <div class='pop-desc'>
            <div class='pop-title'><?php the_title(); ?></div>
        </div>
    </a>
</div>