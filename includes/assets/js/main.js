(function ($) {
  jQuery(document).ready(function () {
    
    
    
    // Process Slider only visilbe below 1024
    if (jQuery(window).width() < 1024) {
      var SearchProduct = new Swiper(".SearchProduct", {
        slidesPerView: 3,
        spaceBetween: 140, // Distance between slides in px.
        loop: false,
        centeredSlides: false,
        preventInteractionOnTransition: true,
        autoplay: {
          delay: 3000,
        },
        fadeEffect: {
          crossFade: true,
        },
        breakpoints: {
          1024: {
            slidesPerView: 3,
          },
          768: {
            slidesPerView: 2,
            loop: true,
            spaceBetween: 30,
            autoplay: true,
            autoplay: {
              delay: 3000,
            },
          },
          0: {
            slidesPerView: 1,
            loop: true,
            autoplay: true,
            autoplay: {
              delay: 3000,
            },
          },
        },
      });

    }




    
  });
})(jQuery);
