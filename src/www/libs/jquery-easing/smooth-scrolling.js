/*!
 * jQuery smooth scrolling function with advanced easing using jquery-easing plugin
 * David Miller, BlackRockDigital (https://github.com/davidtmiller)
 * Copyright 2013-2016 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap/blob/gh-pages/LICENSE)
 */

! function (a) { 

	"use strict";
	a(document).on("click", "a.page-scroll", function (e) {
		var l = a(this);
		a("html, body").stop().animate({
			scrollTop: a(l.attr("href")).offset().top - 50
		}, 1250, "easeInOutExpo"), e.preventDefault()
	})

}(jQuery);