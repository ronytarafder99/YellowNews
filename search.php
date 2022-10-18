<?php get_header();
global $wesoftpress; ?>
<div class="home_page archive_ad">
  <?php echo $wesoftpress['archive_ads']; ?>
</div>
<div class="single_page_container">
  <div class="single_page_left">
    <div class="archive_ad">
      <?php if (is_active_sidebar('archive_first_ad')) : ?>
      <?php dynamic_sidebar('archive_first_ad'); ?>
      <?php endif; ?>
    </div>
    <div class="pv_bread">
      <a href="<?php bloginfo('home'); ?>"><?php echo $wesoftpress['home_heading']; ?></a>
      <?php echo "<b>&nbsp;&nbsp;&#187;&nbsp;&nbsp;</b>"; ?>
      <a href="<?=get_all_post_page_link();?>"><?php echo $wesoftpress['search_heading']; ?></a>
      <?php echo "<b>&nbsp;&nbsp;&#187;&nbsp;&nbsp;</b>"; ?>
      <?php the_search_query(); ?>
    </div>
    <div class="archive_post">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <div class="archive_post_loop">
        <div class="archive_post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        <div class="archive_post_content">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php custom_post_thumbnail(); ?>
          </a>
          <p><?php custom_length_excerpt(17); ?></p>
        </div>
      </div>
      <?php endwhile;
      else :
        echo '<h2 style="text-align:center; font-size:2rem; margin:20px 0; font-weight:normal;">Nothing hare</h2>';
      endif; ?>
    </div>
    <div class="pagination1">
      <div class="pagi_inner">
        <?php echo paginate_links(array(
          'prev_text' => __($wesoftpress['_pg_prv_post'], 'textdomain'),
          'next_text' => __($wesoftpress['_pg_nxt_post'], 'textdomain'),
        )); ?>
      </div>
    </div>
    <div class="archive_ad">
      <?php if (is_active_sidebar('archive_last_ad')) : ?>
      <?php dynamic_sidebar('archive_last_ad'); ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="single_page_right">
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>