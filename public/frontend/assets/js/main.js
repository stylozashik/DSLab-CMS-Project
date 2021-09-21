/************* Main Js File ************************
    Template Name: Robofume
    Author: Themescare
    Version: 1.0
    Copyright 2020
*************************************************************/


/*------------------------------------------------------------------------------------
    
JS INDEX
=============
01 - Pricing Filter JS
02 - Search Toggle JS
03 - Companies Slider JS
04 - Testimonial Slider JS
05 - Login Slider JS
06 - Youtube Popup JS
07 - Counter JS
08 - Hover Active JS
09 - Quantity Js
10 - Responsive Menu Js
11 - Wow Js
12 - Scroll Header Js
13 - Preloader Js

-------------------------------------------------------------------------------------*/


(function ($) {
	"use strict";

	jQuery(document).ready(function ($) {


		/* 
		=================================================================
		01 - Pricing Filter JS
		=================================================================	
		*/
		$('#checkbox[type="checkbox"]').on("click", function () {

			if ($(this).prop("checked") == true) {
				$('.priceHide').show(0);
				$('.priceShow').hide(0);
			} else if ($(this).prop("checked") == false) {
				$('.priceHide').hide(0);
				$('.priceShow').show(0);
			}
		});

		/* 
		=================================================================
		02 - Search Toggle JS
		=================================================================	
		*/

		$(".search-option .search-toggle").on("click", function () {
			$(".search-overlay").toggleClass("search-overlay-active");
		});
		$(".search-overlay-close").on("click", function () {
			$(".search-overlay").removeClass("search-overlay-active");
		});

		/* 
		=================================================================
		03 - Companies Slider JS
		=================================================================	
		*/

		$(".companies-slider").owlCarousel({
			autoplay: true,
			loop: true,
			margin: 20,
			touchDrag: true,
			mouseDrag: true,
			nav: false,
			dots: true,
			autoplayTimeout: 6000,
			autoplaySpeed: 1200,
			navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			responsive: {
				0: {
					items: 3
				},
				480: {
					items: 3
				},
				600: {
					items: 5
				},
				1000: {
					items: 3
				},
				1200: {
					items: 4
				}
			}
		});

		/* 
		=================================================================
		04 - Testimonial Slider JS
		=================================================================	
		*/

		$(".testimonial-slider").owlCarousel({
			autoplay: true,
			loop: true,
			margin: 0,
			items: 1,
			touchDrag: true,
			mouseDrag: true,
			nav: true,
			dots: false,
			autoplayTimeout: 6000,
			autoplaySpeed: 1200,
			navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
		});

		/* 
		=================================================================
		05 - Login Slider JS
		=================================================================	
		*/

		$(".login-text").owlCarousel({
			animateOut: 'fadeOutLeft',
			animateIn: 'fadeIn',
			autoplay: true,
			loop: true,
			margin: 0,
			items: 1,
			touchDrag: true,
			mouseDrag: true,
			nav: false,
			dots: true,
			navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
		});

		/* 
		=================================================================
		06 - Youtube Popup JS
		=================================================================	
		*/

		$('.play-video').magnificPopup({
			type: 'iframe',
			mainClass: 'mfp-fade',
			preloader: true,
		});

		/* 
		=================================================================
		07 - Counter JS
		=================================================================	
		*/


		$('.counter').counterUp({
			delay: 15,
			time: 5000
		});


		/* 
		=================================================================
		08 - Hover Active JS
		=================================================================	
		*/

		$('.service-box').on('mouseenter', function () {
			$(this).addClass('active').parent().siblings().find('.service-box').removeClass('active');
		})


		/*==============================
		09 - Quantity Js
		==============================*/
		$(".num-in span").on("click", function () {
			var $input = $(this).parents('.num-block').find('input.in-num');
			if ($(this).hasClass('minus')) {
				var count = parseFloat($input.val()) - 1;
				count = count < 1 ? 1 : count;
				if (count < 2) {
					$(this).addClass('dis');
				} else {
					$(this).removeClass('dis');
				}
				$input.val(count);
			} else {
				var count = parseFloat($input.val()) + 1
				$input.val(count);
				if (count > 1) {
					$(this).parents('.num-block').find(('.minus')).removeClass('dis');
				}
			}

			$input.change();
			return false;
		});


		/*==============================
		10 - Responsive Menu Js
		==============================*/

		$("#mobile-menu").slicknav({
			prependTo: ".mobile-menu"
		});


		/*==============================
		11 - Wow Js
		==============================*/
		new WOW().init();


	});


	/*==============================
	12 - Scroll Header Js
	==============================*/
	$(window).on('scroll', function () {
		var scroll = $(window).scrollTop();
		if (scroll < 200) {
			$(".header-area").removeClass("fixed-header");
		} else {
			$(".header-area").addClass("fixed-header");
		}
	});

	/*==============================
	13 - Preloader Js
	==============================*/
	$(window).on('load', function () {
		$('#preloader').fadeOut('1000', function () {
			$(this).remove();
		});
	});


}(jQuery));

