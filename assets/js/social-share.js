head.ready("jqueryfile", function () { $(window).scroll(function () { var e = $(this).scrollTop(), s = $(".articlebody").offset().top, i = $(".stophere").offset().top; jQuery(window).height(); e < s ? ($(".float-share").css("visibility", "visible"), $(".float-share").removeClass("fixed-r")) : s < e && e < i - 440 ? ($(".float-share").addClass("fixed-r"), $(".float-share").css("visibility", "visible")) : ($(".float-share").css("visibility", "hidden"), $(".float-share").removeClass("fixed-r")) }) });
