<?php
global $wesoftpress;
get_header();
?>

<div class="home_page">
    <div class="home_page_container">
        <div class="home_page_left">

            <div class="leatest_posts">
                <?php 
                $args = array('posts_per_page' => 1, 'order' => 'DESC',);
                $lastpost = new WP_Query($args); ?>
                <?php if ($lastpost->have_posts()) : while ($lastpost->have_posts()) : $lastpost->the_post(); ?>
                <div class="leatest_one_post">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php custom_post_thumbnail(); ?>
                    </a>
                    <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php custom_length_excerpt(20); ?></p>
                </div>
                <?php endwhile;
                wp_reset_postdata();
                else :
                    echo '<P>no posts found</P>';
                endif; ?>
                <div class="leatest_six_post">
                    <?php $args = array('posts_per_page' => 6, 'order' => 'DESC', 'offset' => 1,);
                    $lastpost = new WP_Query($args); ?>
                    <?php if ($lastpost->have_posts()) : while ($lastpost->have_posts()) : $lastpost->the_post(); ?>
                    <a class="six_posts" href="<?php the_permalink(); ?>">
                        <?php custom_post_thumbnail(); ?>
                        <p><?php the_title(); ?></p>
                    </a>
                    <?php endwhile;
                    wp_reset_postdata();
                    else :
                        echo '<P>no posts found</P>';
                    endif; ?>
                </div>
            </div>
            <div class="archive_ad">
                <?php echo $wesoftpress['home_page_left_ad3']; ?>
            </div>

            <div class="eye_catching_container">
                <a class="fullwidth" style="margin-bottom: 20px;"
                    href="<?php echo get_category_link($wesoftpress['eye_catching_cat']); ?>"><?php echo get_the_category_by_id($wesoftpress['eye_catching_cat']); ?></a>
                <div class="eye_catching_post_grid">
                    <?php $lastpost = new WP_Query('cat=' . $wesoftpress['eye_catching_cat'] . ' & posts_per_page=6'); ?>
                    <?php if ($lastpost->have_posts()) : while ($lastpost->have_posts()) : $lastpost->the_post(); ?>
                    <a class="eye_catch_six_posts" href="<?php the_permalink(); ?>">
                        <?php custom_post_thumbnail(); ?>
                        <h4><?php the_title(); ?></h4>
                    </a>
                    <?php endwhile;
                    wp_reset_postdata();
                    else :
                        echo '<P>no posts found</P>';
                    endif; ?>
                </div>
            </div>
            <div class="clear" style="border-top: 2px solid #dddddd"></div>
            <div class="archive_ad">
                <?php echo $wesoftpress['home_page_left_ad2']; ?>
            </div>

            <div class="dont_miss">
                <a class="fullwidth style2"
                    href="<?php echo get_category_link($wesoftpress['dont_miss_cat']); ?>"><?php echo get_the_category_by_id($wesoftpress['dont_miss_cat']); ?></a>
                <div class="nont_miss_post_grid">
                    <?php $lastpost = new WP_Query('cat=' . $wesoftpress['dont_miss_cat'] . ' & posts_per_page=4'); ?>
                    <?php if ($lastpost->have_posts()) : while ($lastpost->have_posts()) : $lastpost->the_post(); ?>
                    <a class="dont_miss_four_posts" href="<?php the_permalink(); ?>">
                        <?php custom_post_thumbnail(); ?>
                        <h4><?php the_title(); ?></h4>
                    </a>
                    <?php endwhile;
                    wp_reset_postdata();
                    else :
                        echo '<P>no posts found</P>';
                    endif; ?>
                </div>
            </div>

            <div class="archive_ad">
                <?php echo $wesoftpress['home_page_left_ad1']; ?>
            </div>

            <div class="hit_list">
                <a class="fullwidth style2"
                    href="<?php echo get_category_link($wesoftpress['hit_list_cat']); ?>"><?php echo get_the_category_by_id($wesoftpress['hit_list_cat']); ?></a>
                <div class="hit_list_post_grid">
                    <?php $lastpost = new WP_Query('cat=' . $wesoftpress['hit_list_cat'] . ' & posts_per_page=6'); ?>
                    <?php if ($lastpost->have_posts()) : while ($lastpost->have_posts()) : $lastpost->the_post(); ?>
                    <div class="hit_list_six_posts" href="<?php the_permalink(); ?>">
                        <?php
                                foreach ((get_the_category()) as $category) {
                                    $postcat = $category->cat_ID;
                                    $catname = $category->cat_name;
                                }
                                ?>
                        <a class="media-cat" style="color: #ff00ff;"
                            href="<?php echo get_category_link($postcat); ?>"><?php echo $catname; ?></a>
                        <thumb>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php custom_post_thumbnail(); ?>
                            </a>
                        </thumb>
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    </div>
                    <?php endwhile;
                    wp_reset_postdata();
                    else :
                        echo '<P>no posts found</P>';
                    endif; ?>
                </div>
            </div>

            <?php 
            $two_column_container_cats = array($wesoftpress['home_cat_1'], $wesoftpress['home_cat_2'], $wesoftpress['home_cat_3'], $wesoftpress['home_cat_4']);
            foreach ($two_column_container_cats as $home_cats) { ?>

            <div class="two_column_container">
                <a class="cat_title"
                    href="<?php echo get_category_link($home_cats); ?>"><?php echo get_the_category_by_id($home_cats); ?></a>
                <div class="two_column_post">
                    <div class="two_column_one_post">
                        <?php $lastpost = new WP_Query('cat=' . $home_cats . ' & posts_per_page=1'); ?>
                        <?php if ($lastpost->have_posts()) : while ($lastpost->have_posts()) : $lastpost->the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php custom_post_thumbnail(); ?>
                            <h4><?php the_title(); ?></h4>
                            <p><?php custom_length_excerpt(20); ?></p>
                        </a>
                        <?php endwhile;
                        wp_reset_postdata();
                        endif; ?>
                    </div>
                    <div class="two_column_three_posts">
                        <?php $lastpost = new WP_Query('cat=' . $home_cats . ' & posts_per_page=3 & offset=1'); ?>
                        <?php if ($lastpost->have_posts()) : while ($lastpost->have_posts()) : $lastpost->the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php custom_post_thumbnail(); ?>
                            <div class="media_text">
                                <h4><?php the_title(); ?></h4>
                                <p><?php custom_length_excerpt(10); ?></p>
                            </div>
                        </a>
                        <?php endwhile;
                        wp_reset_postdata();
                        endif; ?>
                    </div>
                </div>
            </div>

            <?php } ?>

        </div>
        <div class="home_page_right">
            <div class="archive_ad">
                <?php echo $wesoftpress['home_page_right_ad1']; ?>
            </div>
            <div class="button_group">
                <button class="leatest_btn"><?php echo $wesoftpress['latest_only']; ?></button>
                <Button class="popular_btn"><?php echo $wesoftpress['most_read']; ?></Button>
            </div>
            <div class="fixed_height">
                <ul class="first_item">
                    <?php $args = array(
                        'posts_per_page' => 5,
                        'order' => 'DESC',
                        'post_type'=> 'post'
                    );
                    $lastpost = new WP_Query($args); ?>
                    <?php if ($lastpost->have_posts()) : while ($lastpost->have_posts()) : $lastpost->the_post(); ?>
                    <ul>
                        <li class="tab_post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    </ul>
                    <?php endwhile;
                    else :
                        echo '<P>no posts found</P>';
                    endif;
                    ?>
                </ul>
                <ul class="second_item">
                    <?php $popular = new WP_Query(array('posts_per_page' => 5, 'meta_key' => 'popular_posts', 'orderby' => 'meta_value_num', 'order' => 'DESC'));
                    while ($popular->have_posts()) : $popular->the_post(); ?>
                    <ul>
                        <li class="tab_post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    </ul>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </ul>
            </div>
            <a href="<?=get_all_post_page_link();?>">
                <div style="font-size: 18px; color: #ff0000" align="right"><i style="margin-right: 5px;"
                        class="fas fa-long-arrow-alt-right"></i><?php echo $wesoftpress['latest_all_news']; ?></div>
            </a>
            <div class="archive_ad">
                <?php echo $wesoftpress['home_page_right_ad2']; ?>
            </div>

            <?php 
            $home_sidebar_cats = array($wesoftpress['home_sidebar_cat1'], $wesoftpress['home_sidebar_cat2'], $wesoftpress['home_sidebar_cat3'], $wesoftpress['home_sidebar_cat4'], $wesoftpress['home_sidebar_cat5'], $wesoftpress['home_sidebar_cat6'], $wesoftpress['home_sidebar_cat7'], $wesoftpress['home_sidebar_cat8'], $wesoftpress['home_sidebar_cat9']);
            foreach ($home_sidebar_cats as $cats) {
            $lastpost = new WP_Query('cat=' . $cats . ' & posts_per_page=3');
            if ($lastpost->have_posts()) : ?>
            <div class="home_sidebar_three_post">

                <div class="home_sidebar_cat_title">
                    <a href="<?php echo get_category_link($cats); ?>"><?php echo get_the_category_by_id($cats); ?></a>
                </div>

                <?php while ($lastpost->have_posts()) : $lastpost->the_post(); ?>
                <a class="home_sidebar_posts" href="<?php the_permalink(); ?>">
                    <?php custom_post_thumbnail(); ?>
                    <div class="bullet"><?php the_title(); ?></div>
                </a>
                <?php endwhile;
                wp_reset_postdata(); ?>

            </div>
            <?php endif; ?>
            <?php } ?>

            <?php if (is_active_sidebar('home_page_right_wd')) : ?>
            <?php dynamic_sidebar('home_page_right_wd'); ?>
            <?php endif; ?>

            <div class="facebook_like">
                <?php if (is_active_sidebar('facebook_like')) : ?>
                <?php dynamic_sidebar('facebook_like'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="new_times_blog">
        <a class="fullwidth" style="border-radius: 5px 5px 0 0;"
            href="<?php echo get_category_link($wesoftpress['new_times_blog_cat']); ?>"><?php echo get_the_category_by_id($wesoftpress['new_times_blog_cat']); ?></a>
        <div class="new_times_blog_post_grid">
            <?php $lastpost = new WP_Query('cat=' . $wesoftpress['new_times_blog_cat'] . ' & posts_per_page=6'); ?>
            <?php if ($lastpost->have_posts()) : while ($lastpost->have_posts()) : $lastpost->the_post(); ?>
            <a class="new_times_blog_six_posts" href="<?php the_permalink(); ?>">
                <?php custom_post_thumbnail(); ?>
                <div class="new_tomes_text">
                    <h4><?php the_title(); ?></h4>
                    <p class="author"><?php the_author(); ?></p>
                </div>
            </a>
            <?php endwhile;
            wp_reset_postdata();
            else :
                echo '<P>no posts found</P>';
            endif; ?>
        </div>
    </div>

    <div class="photo_video">
        <div class="photo_gallery">
            <div class="photo">
                <div class="pv_title">
                    <a target="_blank"
                        href="<?php echo get_post_type_archive_link('photogallery'); ?>"><?php echo $wesoftpress['photo_name']; ?></a>
                </div>
                <div class="mySlides">
                    <div class="flexslider">
                        <ul class="slides">
                            <?php $args1 = array(
                                'post_type' => 'photogallery',
                                'posts_per_page' => 6,
                                'order' => 'DESC',
                            );
                            $lastpost = new WP_Query($args1);
                            if ($lastpost->have_posts()) : while ($lastpost->have_posts()) : $lastpost->the_post(); ?>
                            <li>
                                <?php custom_post_thumbnail();
                                if (is_home()) {
                                    echo '<div class="flex-caption">'.get_the_title().'</div>';
                                } else {
                                    the_title();
                                }; ?>
                            </li>
                            <?php endwhile;
                            wp_reset_postdata();
                            endif ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="video_gallery">
            <a target="_blank" href="<?php echo get_post_type_archive_link('videogallery'); ?>" class="video">
                <div class="pv_title"><?php echo $wesoftpress['video_name']; ?>
                </div>
                <div class="video_grid">
                    <?php $argsv = array(
                        'post_type' => 'videogallery',
                        'posts_per_page' => 6,
                        'order' => 'DESC',
                    );
                    $lastpost = new WP_Query($argsv);
                    if ($lastpost->have_posts()) : while ($lastpost->have_posts()) : $lastpost->the_post(); ?>
                    <div class="video_content">
                        <div class="video_thumb">
                            <?php custom_post_thumbnail(); ?>
                            <div class="yt_logo"><img
                                    src="<?php bloginfo('template_directory'); ?>/assets/images/play.png" alt=""></div>
                        </div>
                        <div class="the_title">
                            <?php echo wp_trim_words(get_the_title(), 4); ?>
                        </div>
                    </div>
                    <?php endwhile;
                    wp_reset_postdata();
                    endif ?>
                </div>
            </a>
        </div>
    </div>

</div>

<?php get_footer(); ?>