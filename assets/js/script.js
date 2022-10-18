jQuery(document).ready(function () {

    jQuery('.mobile_toggle').click(function () {
        jQuery('.nav_menu_ground').slideToggle();
    });

    jQuery("#fontPlus").click(function () {
        var fontSize = parseInt(jQuery("p").css("font-size"));
        fontSize = fontSize + 5 + "px";
        jQuery('p').css({
            'font-size': fontSize
        });
    });

    jQuery("#fontmines").click(function () {
        var fontSize = parseInt(jQuery("p").css("font-size"));
        if (fontSize <= 16)
            return
        fontSize = fontSize - 3 + "px";
        jQuery('p').css({
            'font-size': fontSize
        });
    });
    jQuery("#fontdefult").click(function () {
        var fontSize = parseInt(jQuery("p").css("font-size"));
        jQuery('p').css({
            'font-size': 1 + "em"
        });
    });


    jQuery('.leatest_btn').addClass("opened");
    jQuery('.second_item').hide();
    jQuery('.leatest_btn').click(function () {
        jQuery('.leatest_btn').addClass("opened");
        jQuery('.popular_btn').removeClass("opened");
        jQuery('.second_item').hide();
        jQuery('.first_item').show();
    });
    jQuery('.popular_btn').click(function () {
        jQuery('.popular_btn').addClass("opened");
        jQuery('.leatest_btn').removeClass("opened");
        jQuery('.first_item').hide();
        jQuery('.second_item').show();
    });

    jQuery('.vid').on('click', function () {
        var iframe_src = jQuery(this).children('iframe').attr('src'),
            iframe = jQuery('.video-popup'),
            iframe_video = jQuery('.video-popup iframe'),
            iframe_src = iframe_src + '?autoplay=1&rel=0';

        // change the video source with the clicked one
        jQuery(iframe_video).empty().attr('src', iframe_src);
        jQuery(iframe).fadeIn().addClass('show-video');
    });
});

jQuery(window).load(function () {
    jQuery('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
    });
});

jQuery(function () {
    jQuery('.gallery a').lightbox();
});

// print
function printDiv() {
    window.print();
}