$(function () {
  $(".single-item").slick({
    arrows: false,
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 1,
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	      }
	    }
    ]
});

  });

  // wow = new WOW(
  //   {
  //     boxClass: 'wow',      // default
  //     animateClass: 'animate__animated', // default
  //     offset: 0,          // default
  //     mobile: true,       // default
  //     live: true        // default
  //   }
  // )
  // wow.init();