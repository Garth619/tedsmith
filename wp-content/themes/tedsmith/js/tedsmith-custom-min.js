jQuery(document).ready(function(){jQuery(".mobile .process_single_box_wrapper").click(function(){jQuery(".process_hover_wrapper").toggleClass("open")}),jQuery(".desktop .process_single_box_wrapper").mouseenter(function(){jQuery(".process_hover_wrapper").addClass("open")}),jQuery(".desktop .process_single_box_wrapper").mouseleave(function(){jQuery(".process_hover_wrapper").removeClass("open")}),jQuery(".read_more").click(function(){jQuery(".read_more").fadeOut(),jQuery(this).next(".toggle_text").delay(300).slideDown(200)}),jQuery(window).scroll(function(){var e=jQuery(".menu_wrapper, .nav_wrapper, .home_banner"),s=jQuery(window).scrollTop();s>=161?e.addClass("fixed"):e.removeClass("fixed")}),jQuery(".mobile_menu_title, .menu_bars").click(function(){jQuery(".nav_wrapper").slideToggle(400),jQuery(".mobile_menu_title, .menu_bars, span.mobile_menu_title").toggleClass("open")}),jQuery("li.menu-item-has-children > a").click(function(){jQuery(this).next(".sub-menu").slideToggle(400).toggleClass("open"),jQuery(this,"li.menu-item-has-children > a").toggleClass("open")}),jQuery(".process.mobile .process_single_box_wrapper, .attorneys_wrapper").slick({dots:!0,slidesToShow:1,slidesToScroll:1,infinite:!0}),jQuery(".review_stars_wrapper").slick({slidesToShow:3,slidesToScroll:3,responsive:[{breakpoint:755,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!0}}]}),jQuery(".process.desktop .process_single_box_wrapper").slick({dots:!0,slidesToShow:1,slidesToScroll:1,infinite:!0,prevArrow:".prev",nextArrow:".next"}),jQuery(".logo_wrapper").slick({slidesToShow:2,slidesToScroll:2,responsive:[{breakpoint:755,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!0}}]}),jQuery(".social_icon_wrapper").slick({slidesToShow:2,slidesToScroll:2,dots:!0,responsive:[{breakpoint:755,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!0}}]})});