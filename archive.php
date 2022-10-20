<?php get_header(); 
global $wesoftpress; ?>
<?php if (have_posts()) : ?>

<main class='main clear'>
  <div class='main-box clear'>
    <h1 class='story-title-all'><?php echo wp_get_document_title(); ?></h1>
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
              <!-- <?php 
              $next_posts_link =  get_next_posts_link( 'Older posts' );
              $previous_posts_link = get_previous_posts_link( 'Newer posts' ); 
              if($previous_posts_link){ ?>
              <span id="blog-pager-newer-link">
                <a class="blog-pager-newer-link-mobile"
                  href="https://thehackernews.com/search/label/data%20breach?max-results=20"
                  id="Blog1_blog-pager-newer-link" title="Newer Posts"><i class="icon-font icon-left-open"></i> Prev
                  Page</a>
              </span>
              <?php } ?>

              <?php if($next_posts_link){ ?>
              <span id="blog-pager-older-link">
                <a class="blog-pager-older-link-mobile" href="<?php $next_posts_link; ?>"
                  id="Blog1_blog-pager-older-link" title="Older Posts"> Next Page <i
                    class="icon-font icon-right-open">&#59398;</i></a>
              </span>
              <?php } ?> -->


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
  echo '<h2 style="text-align:center; font-size:2rem; margin:20px 0; font-weight:normal;">Nothing hare</h2>';
endif; ?>
<?php get_footer(); ?>