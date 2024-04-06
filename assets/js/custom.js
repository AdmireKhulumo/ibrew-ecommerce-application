/*==========

Theme Name: Wine Cooler - Wine Shop HTML 5 Template
Theme Version: 1.0

==========*/

/*==========
----- JS INDEX -----
1.Whole Script Strict Mode Syntax
2.Book Table Img Slider JS
3.Team Slider JS
4.Project Tabbing JS
5.Menu Open JS
6.DropDown Menu JS
7.Mobile Navigation Menu JS
8.Sticky Header JS
9.Mouse Parallax JS
10.Scroll To Top JS
11.Active Menu JS
12.Loader JS
==========*/

$(document).ready(function($) {
    // Whole Script Strict Mode Syntax
    "use strict";

    // Banner Slider Img Slider JS

    var banner_slider = new Swiper(".banner_slider", {
        slidesPerView: 1,
        spaceBetween: 0,
        grabCursor: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        speed: 2000,
        effect: "creative",
        creativeEffect: {
            prev: {
                translate: ["-120%", 0, -500],
                opacity: 0,
            },
            next: {
                translate: ["120%", 0, -500],
                opacity: 0,
            },
        },
    });

    // Banner Slider Img Slider JS End


    // Gallery Slider JS

    var gallery_slider = new Swiper(".gallery-slider", {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        grabCursor: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        speed: 2000,

        breakpoints: {
            0: {
                slidesPerView: 1.2,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 24,
            },
        },
    });

    // Gallery Slider JS End

    // testimonial Slider JS

    var testimonial_slider = new Swiper(".testimonial-slider", {
        slidesPerView: 3,
        spaceBetween: 24,
        grabCursor: true,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        speed: 2000,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        breakpoints: {
            0: {
                slidesPerView: 1.2,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 24,
            },
        },
    });

    // testimonial Slider JS End


    // Brand Logo Slider JS

    var brand_logo_slider = new Swiper(".brand-logo-slider", {
        slidesPerView: 4,
        spaceBetween: 10,
        grabCursor: true,
        loop: true,
        speed: 1500,
        freeMode: true,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        breakpoints: {
            "@0.00": {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            "@0.75": {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            "@1.00": {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            "@1.50": {
                slidesPerView: 5,
                spaceBetween: 0,
            },
        },
    });

    // brand_logo_slider.el.addEventListener("mouseenter", function(event) {
    //     brand_logo_slider.autoplay.stop();
    // }, false);
    // brand_logo_slider.el.addEventListener("mouseleave", function(event) {
    //     brand_logo_slider.autoplay.start();
    // }, false);

    // Brand Logo Slider JS End

    /* product left start */
    if ($(".product-left").length) {
        var productSlider = new Swiper('.product-slider', {
            spaceBetween: 0,
            centeredSlides: false,
            loop: true,
            direction: 'horizontal',
            loopedSlides: 5,
            resizeObserver: true,
            grabCursor: true,
        });
        var productThumbs = new Swiper('.product-thumbs', {
            spaceBetween: 0,
            centeredSlides: true,
            loop: true,
            slideToClickedSlide: true,
            direction: 'horizontal',
            slidesPerView: 5,
            loopedSlides: 5,
        });
        productSlider.controller.control = productThumbs;
        productThumbs.controller.control = productSlider;
    }
    /* 	product left end */

    var related_product_slider = new Swiper(".related-product-slider", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        speed: 2000,
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 24,
            },
        },
    });


    // Video Play & Pause JS
    if (jQuery('#video').length) {
        var vid = document.getElementById("video");

        vid.addEventListener('click', function(e) {
            e.preventDefault();
            this.classList.toggle('cursor-active');
            this[this.paused ? 'play' : 'pause']();
        });
    }

    // Video Play & Pause JS End


    // Menu Open JS

    jQuery(".menu-toggle").click(function() {
        jQuery(".main-navigation").toggleClass("toggled");
        jQuery(".site-header").toggleClass("header-toggled");
    });

    // Menu Open JS End

    // DropDown Menu JS

    jQuery(".dropdown-items").click(function() {
        var cur = jQuery(this).closest(".dropdown-items");
        jQuery(".dropdown-items").not(cur).removeClass("dropdown-open");
        jQuery(this).closest(".dropdown-items").toggleClass("dropdown-open");
    });

    // DropDown Menu JS End

    // Mobile Navigation Menu Removeclass

    jQuery(".header-menu ul li a:not(.dropdown-items a)").click(function() {
        jQuery(".main-navigation").removeClass("toggled");
    });

    // Mobile Navigation Menu Removeclass End


    // Scroll To Top JS

    jQuery('#scrollToTop').click(function() {
        jQuery("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    // Scroll To Top JS End


    //Search Form JS

    $(".search-button").click(function() {
        $(".search-form-wp").toggleClass("open-search-form");
    });

    $("#search-button").click(function() {
        $(".search-form-wp").removeClass("open-search-form");
    });

    //Search Form JS End

    //Quantity Button JS

    $('.quantity-button').off('click').on('click', function() {

        if ($(this).hasClass('quantity-add')) {
            var addValue = parseInt($(this).parent().find('input').val()) + 1;
            $(this).parent().find('input').val(addValue).trigger('change');
        }

        if ($(this).hasClass('quantity-remove')) {
            var removeValue = parseInt($(this).parent().find('input').val()) - 1;
            if (removeValue == 0) {
                removeValue = 1;
            }
            $(this).parent().find('input').val(removeValue).trigger('change');
        }

    });
    //Quantity Button JS End

});

//Loader JS

jQuery(window).on("load", function() {
    $(".page-loader").fadeOut();
    $("body").removeClass("body-fixed");
});

//Loader JS End

//Cart Sidebar Form

$(".cart-sidebar-button").click(function() {
    $(".cart-sidebar").addClass("open-cart-sidebar");
});

$(".close-button, .cart-sidebar-overlay").click(function() {
    $(".cart-sidebar").removeClass("open-cart-sidebar");
});

//Cart Sidebar Form JS End

// Sticky Header JS

var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = jQuery('.site-header').outerHeight();
var stickycartHeight = jQuery('.sticky-cart-block').outerHeight();

jQuery(window).scroll(function(event) {
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = jQuery(this).scrollTop();

    // Make sure they scroll more than delta
    if (Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight) {
        // Scroll Down
        jQuery('.sticky-cart-block').css('bottom', function() {
            return stickycartHeight * 0;
        });

        jQuery('.site-header').css('top', function() {
            return navbarHeight * -1;
        });

    } else {
        // Scroll Up
        if (st + jQuery(window).height() < jQuery(document).height()) {
            jQuery('.sticky-cart-block').css('bottom', function() {
                return stickycartHeight * -1;
            });

            jQuery('.site-header').css('top', function() {
                return navbarHeight * 0;
            });
        }
    }

    lastScrollTop = st;
}

// Sticky Header JS End