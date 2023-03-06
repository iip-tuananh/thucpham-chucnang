var Swipes = new Swiper('.swiper-container', {
    loop: true,
    mousewheelControl: false,
    direction: "horizontal",
    slidesPerView: "auto",
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
    },
});
$(document).ready(function() {
    // Swiper: Slider
        new Swiper('.swiper-containerS', {
            slidesPerView: 4,
            centeredSlides: true,
            spaceBetween: 30,
            mousewheelControl: false,
            loop: true,
            loopedSlides: 4,
            watchSlidesVisibility: true,
            autoplay: {
                delay: 5000,
              },
            breakpoints: {
                1920: {
                    slidesPerView: 4,
                    spaceBetween: 30
                },
                1028: {
                    slidesPerView: 4,
                    spaceBetween: 30
                },
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                  },
                  // when window width is >= 480px
                  480: {
                    slidesPerView: 1,
                    spaceBetween: 30
                  },
                  // when window width is >= 640px
                  640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                  }
            }
        });
});
var swiper = new Swiper('.swiper', {
    slidesPerView: 3,
    mousewheelControl: false,
    centeredSlides: true,
    spaceBetween: 5,
    loop: true,
    loopedSlides: 7,
    watchSlidesVisibility: true,
    // navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev',
    //   },
    autoplay: {
        delay: 8000,
      },
    breakpoints: {
        1920: {
            slidesPerView: 3,
            spaceBetween: 5
        },
        1028: {
            slidesPerView: 3,
            spaceBetween: 5
        },
        320: {
            slidesPerView: 1,
            spaceBetween: 10
          },
          // when window width is >= 480px
          480: {
            slidesPerView: 1,
            spaceBetween: 10
          },
          // when window width is >= 640px
          640: {
            slidesPerView: 1,
            spaceBetween: 20
          }
    }
});
    