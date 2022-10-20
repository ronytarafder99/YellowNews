<?php get_header(); 
global $wesoftpress; ?>
<?php if (have_posts()) : ?>

<main class='main clear'>
  <div class='main-box clear'>
    <h1 class='story-title-all'>The Hacker News - Most Trusted Cyber Security and Computer Security Analysis: data
      breach</h1>
    <div class='main-left-right clear'>
      <div class='left-box'>
        <div class='content section' id='content'>
          <div class='widget Blog' data-version='1' id='Blog1'>
            <div class='blog-posts clear'>
              <?php while (have_posts()) : the_post();
              get_template_part('template-parts/content/content-post');
              endwhile; ?>
            </div>
            <div class='blog-pager clear' id='blog-pager'>
  


              <span id="blog-pager-newer-link">
              <?php previous_posts_link( '<i class="icon-font icon-left-open"></i> Prev Page' ); ?>
              </span>

              <span id="blog-pager-older-link">
              <?php next_posts_link( 'Next Page <i class="icon-font icon-right-open">&#59398;</i>' ); ?>
              </span>




            </div>
            <div class='clear'></div>
          </div>
        </div>
      </div>

      <?php get_sidebar(); ?>

    </div>
  </div>
</main>

<?php else :
  echo '<h2 style="text-align:center; font-size:2rem; margin:20px 0; font-weight:normal;">No Content Matched</h2>';
endif; ?>
<?php get_footer(); ?>