(function($) {
	"use strict"; // Start of use strict

	// Smooth scrolling using jQuery easing
	$('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(
			function() {
				if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name='+ this.hash.slice(1) + ']');
					if (target.length) {
						$('html, body').animate({
							scrollTop : (target.offset().top - 48)
						}, 1000, "easeInOutExpo");
						return false;
					}
				}
			});

	// Closes responsive menu when a scroll trigger link is clicked
	$('.js-scroll-trigger').click(function() {
		$('.navbar-collapse').collapse('hide');
	});

	// Activate scrollspy to add active class to navbar items on scroll
	$('body').scrollspy({
		target : '#mainNav',
		offset : 48
	});

	// Animations when page is scrolled
	$(window).scroll(function() {
		//	Collapse the navbar 
		if ($("#mainNav").offset().top > 100) {
			$("#mainNav").addClass("navbar-shrink");
		} else {
			$("#mainNav").removeClass("navbar-shrink");
		}

		var screenBottomOffset = $(window).scrollTop() + $(window).height();
		//	Spread programmation languages bargraph
		if($("#prog-lang").offset().top < screenBottomOffset){
			$("#prog-lang > div > ul").addClass("spread");
		}

		//	Spread programmation OS bargraph
		if($("#os").offset().top < screenBottomOffset){
			$("#os > div > ul").addClass("spread");
		}
	});

	// Scroll reveal calls
	window.sr = ScrollReveal({ delayType: 'onload' });
	sr.reveal('.sr-icons', {
		duration : 600,
		scale : 0.3,
		distance : '0px'
	}, 200);
	sr.reveal('.sr-button', {
		duration : 1000,
		delay : 200
	});
	sr.reveal('.sr-contact', {
		duration : 600,
		scale : 0.3,
		distance : '0px'
	}, 300);
	sr.reveal('.sr-icon', {
		duration : 300,
		delay : 700
	});

	$("#about-slider").carousel({
		interval: 10000
	});

	$.stellar({
		horizontalScrolling: false,
		verticalOffset: 150
	});
})(jQuery); // End of use strict
