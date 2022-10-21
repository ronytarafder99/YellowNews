<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage yellow_news
 * @since 1.0
 * @version 1.0
 */
get_header();
if (have_posts()) : while (have_posts()) : the_post(); ?>
<main class='main clear'>
    <div class='main-box clear'>
        <h1 class='story-title-all'><?php echo wp_get_document_title(); ?></h1>
        <div class='main-left-right clear'>
            <div class='left-box'>
                <div class='content section' id='content'>
                    <div class='widget Blog' data-version='1' id='Blog1'>
                        <div class='blog-posts clear'>
                            <div class='body-post clear'>
                                <div class='post'>
                                    <div class='post-body'>
                                        <h1 class='post-title entry-title static_title'><?php the_title(); ?></h1>
                                        <div class='articlebody clear cf' id='articlebody'>
                                            <?php the_content(); ?>
                                        </div>
                                        <div class='stophere'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>
</main>
<?php endwhile;
    else :
        echo '<p>No content found</p>';
    endif; ?>
<?php get_footer(); ?>