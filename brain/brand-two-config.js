  //Brand Two Carousel
  if ($(".brand-two__carousel").length) {
    $(".brand-two__carousel").owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      dots: false,
      autoplay: true,
      autoplayTimeout: 0,
      autoplaySpeed: 8000,
      smartSpeed: 8000,
      slideTransition: 'linear',
      autoplayHoverPause: false,
      mouseDrag: false,
      touchDrag: false,
      pullDrag: false,
      responsive: {
        0: {
          items: 2,
        },
        768: {
          items: 3,
        },
        992: {
          items: 4,
        },
        1200: {
          items: 5,
        },
        1320: {
          items: 5,
        },
      },
    });
  }
