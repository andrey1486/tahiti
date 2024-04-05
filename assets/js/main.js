$(function () {
  $(".slick-slider").slick({
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

$(function() {
  $(".carusel_card").slick({
    infinite: true,
    arrows: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    pauseOnFocus: true,
    responsive: [
	    {
	      breakpoint: 1430,
	      settings: {
	        slidesToShow: 3,
	      }
	    },
	    {
	      breakpoint: 1070,
	      settings: {
	        slidesToShow: 2,
	      }
	    },
      {
	      breakpoint: 728,
	      settings: {
	        slidesToShow: 1,
	      }
	    }
    ]
});

});
