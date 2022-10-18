<?php get_header(); ?>

<div class="home_page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="page">
        <div class="page-header">
            <h1 class="entry-title">
                <?php the_title(); ?>
            </h1>
        </div>
        <div class="page-content">
            <?php the_content(); ?>
        </div>
    </article>
    <?php endwhile;
    else :
        echo '<p>No content found</p>';
    endif; ?>
</div>

<?php get_footer(); ?>