$('.san-pham-lien-quan .owl-carousel').owlCarousel({
	loop: true,
	margin: 20,
	nav: true,
	autoplay: true,
	autoplayTimeout: 4000,
	autoplaySpeed: 4000,
  autoplayHoverPause: true,
  responsive:{
    0:{
        items:1,
        nav: false
    },
    425:{
        items:2,
        nav: false
    },
    769:{
        items:3,
        dots: false
    },
    1025:{
        items:4,
        dots: false
    },
  },
})