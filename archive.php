<?php get_header(); 
global $wesoftpress; ?>
<div class="home_page archive_ad">
  <?php echo $wesoftpress['archive_ads']; ?>
</div>
<?php if (have_posts()) : ?>
<div class="single_page_container">
  <div class="single_page_left">
    <div class="archive_post">
      <?php while (have_posts()) : ?>
      <?php the_post(); ?>
      <div class="archive_post_loop">
        <div class="archive_post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        <div class="archive_post_content">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php custom_post_thumbnail(); ?>
          </a>

          <p><?php custom_length_excerpt(17); ?></p>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <div class="pagination1">
      <div class="pagi_inner">
        <?php echo paginate_links(array(
            'prev_text' => __($wesoftpress['_pg_prv_post'], 'textdomain'),
            'next_text' => __($wesoftpress['_pg_nxt_post'], 'textdomain'),
          )); ?>
      </div>
    </div>
  </div>
  <div class="single_page_right">
    <?php get_sidebar(); ?>
  </div>
</div>
<?php else :
  echo '<h2 style="text-align:center; font-size:2rem; margin:20px 0; font-weight:normal;">Nothing hare</h2>';
endif; ?>
<?php get_footer(); ?>