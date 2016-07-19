$(document).ready(function(){
	
	"use strict";
	
	/* Main Functions */
	enableRevolutionSlider(); // Revolution Slider
	enableOwlCarouselSlider(); //OwlCarousel Slider
	
	/* ============================== */
	/* 			FUNCTIONS		      */
	/* ============================== */
	
		/* Revolution Slider */
	function enableRevolutionSlider(){
		
		/* Revolution Slider */
		$('.tp-banner').not('.full-width-revolution').revolution({
			delay:5000,
			startwidth:1170,
			startheight:500,
			hideThumbs:10,
			navigationType:"none"
		});
		
		/* Revolution Slider Fullwidth */
		$('.tp-banner.full-width-revolution').revolution({
			delay:5000,
			startwidth:1170,
			startheight:500,
			hideThumbs:10,
			navigationType:"none",
			fullWidth:"on",
			forceFullWidth:"on"
		});
		
	}

	function enableOwlCarouselSlider(){

		$('#owl-slider').owlCarousel({
			loop:true,
			items:1,
		   	autoplay: true,
		   	autoplayTimeout:9000,
		   	nav: false,
		   	pagination: false,
		   	mouseDrag: false,
		});
	}
	
	
	
});