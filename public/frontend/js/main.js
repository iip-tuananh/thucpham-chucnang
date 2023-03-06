// Custom Function
$(document).ready(function () {

  new WOW().init();

  // Init MMenu Plugin
  if ($("#mobile-menu").length) {
    new Mmenu("#mobile-menu", {
      navbars: {
        title: "Menu",
        position: "top",
        // content: ["searchfield"]
      },
      offCanvas: {
        page: {
          selector: "#page-wrapper",
        },
      },
      extensions: ["theme-dark", "border-full", "multiline", "pagedim-black"],
      setSelected: {
        hover: true,
      },
      pageScroll: true,
      wrappers: ["bootstrap"],
      // lazySubmenus: {
      //   load: true
      // }
      // slidingSubmenus: false,
    });
  }

  $( "a.mm-navbar__title" ).attr( "href", "https://nhapkhautrungquoc.vn/" );
  $( "a.mm-btn_prev" ).attr( "href", "https://nhapkhautrungquoc.vn/" );
  

  // Init owl-carousel
  $(".owl-partner").owlCarousel({
    loop: true,
    margin: 30,
    autoPlay: true,
    dots: false,
    nav: false,
    responsive: {
      0: {
        items: 2,
        margin: 10,
      },
      768: {
        items: 4,
        margin: 20,
      },
      992: {
        items: 6,
      },
    },
  });

  $(".owl-testimonial").owlCarousel({
    loop: true,
    margin: 30,
    autoPlay: true,
    dots: false,
    nav: false,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
        margin: 20,
      },
      992: {
        items: 3,
      },
    },
  });

  // Back to top button
  if ($(".js-go-top").length) {
    var scrollTrigger = 200, // px
      backToTop = function () {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > scrollTrigger) {
          $(".js-go-top").addClass("show");
          $(".js-menu").addClass("fixed-menu");
        } else {
          $(".js-go-top").removeClass("show");
          $(".js-menu").removeClass("fixed-menu");
        }
      };

    backToTop();
    $(window).on("scroll", function () {
      backToTop();
    });

    $(".js-go-top").on("click", function (e) {
      e.preventDefault();
      $("html,body").animate(
        {
          scrollTop: 0,
        },
        1000
      );
    });
  }

  var quantitiy = 0;
  $(".quantity-right-plus").click(function (e) {
    // Stop acting like a button
    e.preventDefault();
    // Get the field name
    var quantity = parseInt($("#quantity").val());

    // If is not undefined

    $("#quantity").val(quantity + 1);

    // Increment
  });

  $(".quantity-left-minus").click(function (e) {
    // Stop acting like a button
    e.preventDefault();
    // Get the field name
    var quantity = parseInt($("#quantity").val());

    // If is not undefined

    // Increment
    if (quantity > 0) {
      $("#quantity").val(quantity - 1);
    }
  });
});

// Passive event listeners
jQuery.event.special.touchstart = {
    setup: function( _, ns, handle ) {
        this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
    }
};
jQuery.event.special.touchmove = {
    setup: function( _, ns, handle ) {
        this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
    }
};
$(".input-form").on('keyup',function(){
  var email = $("input[name=email]").val();
  var phone = $("input[name=phone]").val();
  if(email !== '' || phone !== ''){
      $('#apply-btn').removeAttr("disabled");
  }
  else{
    $('#apply-btn').attr('disabled', 'disabled');
  }
})
$(".control-input").on('keyup',function(){
  var email = $("input[name=email]").val();
  var phone = $("input[name=phone]").val();
  var name = $("input[name=name]").val();
  var mess = $("input[name=mess]").val();
  var location = $("input[name=location]").val();
  if(mess !== '' && phone !== '' && name !== '' && email !== '' && location !== ''){
      $('#send-btn').removeAttr("disabled");
  }
  else{
    $('#send-btn').attr('disabled', 'disabled');
  }
})
$(".control-inputs").on('keyup',function(){
  var email = $("input[name=email]").val();
  var phone = $("input[name=phone]").val();
  var name = $("input[name=name]").val();
  var mess = $("input[name=mess]").val();
  if(mess !== '' && phone !== '' && name !== '' && email !== ''){
      $('#contact-btn').removeAttr("disabled");
  }
  else{
    $('#contact-btn').attr('disabled', 'disabled');
  }
})



