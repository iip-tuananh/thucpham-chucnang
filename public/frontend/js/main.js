!(function($) {
    $(function() {
        $(".box_desc_banner1").addClass("active");
    }),
        setTimeout(function() {
            $("#goog-gt-tt").remove();
        }, 300),
        $(window).load(function() {
            $("nav#menu").mmenu(),
                $(
                    ".k2-single-img .flex-control-nav > li:first-child "
                ).addClass("flex-actives");
        });
    var lastScrollTop = 0;
    $(window).scroll(function(event) {
        var cao,
            st = $(this).scrollTop();
        lastScrollTop < st
            ? $(".bottom_bar ").removeClass("menu1_dacuon")
            : ((cao = $(this).scrollTop()),
              $(document).height(),
              $(window).height(),
              $(window).scrollTop(),
              115 < cao
                  ? $(".bottom_bar  ").addClass("menu1_dacuon")
                  : $(".bottom_bar ").removeClass("menu1_dacuon")),
            (lastScrollTop = st);
    }),
        $(document).ready(function() {
            $(".k2-single-img .flex-control-nav img").on("click", function() {
                $(".k2-single-img .flex-control-nav > li ").removeClass(
                    "flex-actives"
                ),
                    $(this)
                        .parent()
                        .addClass("flex-actives");
            });
        }),
        $("#owl-slider").owlCarousel({
            items: 1,
            loop: !0,
            slideSpeed: 2e3,
            nav: !1,
            autoplay: true,
            autoPlaySpeed: 5000,
            autoPlayTimeout: 5000,
            autoplayHoverPause: true,
            dots: !1,
            animateOut: "slideOutUp"
        }),
        $("ul.tabs li").click(function() {
            var tab_id = $(this).attr("data-tab");
            $("ul.tabs li").removeClass("active"),
                $(".tab-content").removeClass("active"),
                $(this).addClass("active"),
                $(tab_id).addClass("active");
        }),
        $(".khungphanhoi_left ul li span").click(function() {
            var tab_id = $(this).attr("data-tab");
            $(".khungphanhoi_left ul li span").removeClass("active"),
                $(".content_phanhoi").removeClass("active"),
                $(this).addClass("active"),
                $(tab_id).addClass("active");
        }),
        $(".accordion-title").click(function() {
            $(this).hasClass("active") ||
                ($(".accordion-title").removeClass("active"),
                $(".accordion-inner").slideUp(),
                $(this).addClass("active"),
                $(this)
                    .next()
                    .slideDown());
        });
})(jQuery);
