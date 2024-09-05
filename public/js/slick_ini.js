$(".regular").slick({
  dots: true,
  infinite: true,
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: true,
  arrows: false,
  mobileFirst: true,
  swipe: true,
  pauseOnFocus: false
});


$(".lazy").slick({
    // lazyLoad: 'ondemand', // ondemand progressive anticipated
    infinite: true,
    arrows: true,
    prevArrow: '<button type="button" class="prev-btn"><img src="../assets/homepage/left.svg" alt=""></button>',
    nextArrow: '<button type="button" class="next-btn"><img src="../assets/homepage/right.svg" alt=""></button>',
    dots: true,
    autoplay: false
    // dotsClass: 'test-dots'
  });
