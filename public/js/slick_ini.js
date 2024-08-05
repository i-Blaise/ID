$(".regular").slick({
  dots: true,
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  arrows: false,
  mobileFirst: true,
  swipe: true,
  pauseOnFocus: false
});


$(".lazy").slick({
    lazyLoad: 'ondemand', // ondemand progressive anticipated
    infinite: true,
    arrows: true,
    prevArrow: '<button type="button" class="prev-btn"><-</button>',
    nextArrow: '<button type="button" class="next-btn">-></button>',
    dots: true,
    autoplay: true,
    // dotsClass: 'test-dots'
  });
