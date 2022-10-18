<?php get_header();
global $wesoftpress; ?>
<div class="single_page_container">
    <div class="single_page_left">
        <div class="archive_ad" style="margin-top: 20px; margin-bottom:20px;">
            <?php echo $wesoftpress['home_page_left_ad1']; ?>
        </div>
        <?php while (have_posts()) : the_post(); ?>
        <div class="print_logo">
            <?php if($wesoftpress['logo']){
                echo '<img width="'.$wesoftpress['width'].'" height="'.$wesoftpress['height'].'" src="'.$wesoftpress['logo']['url'].'" alt="'.$wesoftpress['alt'].'">';
            }else{
                echo '<span class="logo-text">'.bloginfo('name').'</span>';
            } ?>
        </div>
        <h1 class="single_title"><?php the_title(); ?></h1>
        <div class="unicode" style="margin: 10px 0 -15px 0"><?php echo get_the_author(); ?>
        </div>
        <div style="margin: 5px 0 0 0; height:63px;">
            <div class="pub">
                <span style="font-size: 1.2em;"><?php echo $wesoftpress['publised_at']; ?>
                    <?php echo bn1_date(get_the_date()); ?></span>
            </div>
            <div class="print_font">
                <?php if ($wesoftpress['site_content'] == '1') { ?>
                <span><input
                        style="background: url(<?php bloginfo('template_directory'); ?>/assets/images/print.png) no-repeat;"
                        class="myButton" value="" onclick="printDiv()" id="PopupandLeaveopen" type="button"></span>
                <span style="padding: 7px 0 0 0;"><a href="javascript:void(0);" id="fontPlus"><img
                            src="<?php bloginfo('template_directory'); ?>/assets/images/plus.png"></a></span>
                <span style="padding: 7px 0 0 0;"><a href="javascript:void(0);" id="fontmines"><img
                            src="<?php bloginfo('template_directory'); ?>/assets/images/minus.png"></a></span>
                <span style="padding: 7px 0 0 0;"><a href="javascript:void(0);" id="fontdefult"><img
                            src="<?php bloginfo('template_directory'); ?>/assets/images/minus-plus.png"></a></span>
                <?php } else { ?>
                <span><input
                        style="background: url(<?php bloginfo('template_directory'); ?>/assets/images/print_eng.png) no-repeat;"
                        class="myButton" value="" onclick="printDiv()" id="PopupandLeaveopen" type="button"></span>
                <span style="padding: 7px 0 0 0;"><a href="javascript:void(0);" id="fontPlus"><img
                            src="<?php bloginfo('template_directory'); ?>/assets/images/plus_eng.png"></a></span>
                <span style="padding: 7px 0 0 0;"><a href="javascript:void(0);" id="fontmines"><img
                            src="<?php bloginfo('template_directory'); ?>/assets/images/minus_eng.png"></a></span>
                <span style="padding: 7px 0 0 0;"><a href="javascript:void(0);" id="fontdefult"><img
                            src="<?php bloginfo('template_directory'); ?>/assets/images/minus-plus_eng.png"></a></span>
                <?php } ?>
            </div>
        </div>
        <div class="single_thumbnail">
            <?php the_post_thumbnail();
            $get_description = get_post(get_post_thumbnail_id())->post_excerpt;
            if (!empty($get_description)) {
                echo '<figcaption class="figcaption"><p>' . $get_description . '</p></figcaption>';
            }; ?>
        </div>
        <div class="single_content"><?php the_content(); ?></div>

        <div class="single_right_left">
            <span class="both_bottom alink">
                <table width="100%">
                    <tbody>
                        <tr>
                            <?php
                                $prev = get_previous_post();
                                $next = get_next_post();
                                if($prev){ ?>
                            <td align="left" width="267"><a class="pvsb" href="<?php echo get_permalink($prev->ID); ?>"
                                    title=""><i class="fas fa-arrow-left"></i>
                                    <?php echo $wesoftpress['pre_post']; ?></a></td>
                            <?php } ?>
                            <td width="200" align="center"></td>
                            <?php if($next){ ?>
                            <td align="right" width="233"><a class="pvsb" href="<?php echo get_permalink($next->ID); ?>"
                                    title=""><?php echo $wesoftpress['nxt_post']; ?> <i
                                        class="fas fa-arrow-right"></i></a></td>
                            <?php } ?>

                        </tr>
                    </tbody>
                </table>
            </span>
        </div>
        <div class="share_box">
            <?php if (function_exists('sharethis_inline_buttons')) : ?>
            <?php echo sharethis_inline_buttons(); ?>
            <?php endif; ?>
        </div>
        <?php endwhile; ?>
    </div>
    <div class="single_page_right">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>