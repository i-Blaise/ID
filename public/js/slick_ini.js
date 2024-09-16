$(".regular").slick({
  dots: true,
  dotsClass: 'portfolio-dots',
  infinite: true,
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: true,
  arrows: false,
  swipe: true,
  pauseOnFocus: false,
  responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


$(".lazy").slick({
    // lazyLoad: 'ondemand', // ondemand progressive anticipated
    infinite: true,
    arrows: true,
    prevArrow: '<button type="button" class="prev-btn"><img src="../assets/homepage/left.svg" alt=""></button>',
    nextArrow: '<button type="button" class="next-btn"><img src="../assets/homepage/right.svg" alt=""></button>',
    dots: true,
    // autoplay: true,
    dotsClass: 'testimonial-dots'

  });
