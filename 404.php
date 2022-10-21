<?php
/**
 * The template for displaying 404 pages (Not Found).
 * @package yellow_news
 * by WeSoftPress
 */
global $wesoftpress;
get_header(); ?>

<main class='main clear'>
    <div class='main-box clear'>
        <a class='cf error_css' href="<?php bloginfo('url'); ?>">
            <img alt='Error Page' decoding='async' loading='lazy'
                src="<?php echo WESOFTPRESS_ROOT_IMG ?>/404.png" /></a>
        <h1 class='story-title-all'><?php echo wp_get_document_title(); ?></h1>
        <div class='main-left-right clear'>
            <div class='left-box'>
                <div class='content section' id='content'>
                    <div class='widget Blog' data-version='1' id='Blog1'>
                        <div class='blog-posts clear'>
                            <div>
                            </div>
                            <div style='clear: both;'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>