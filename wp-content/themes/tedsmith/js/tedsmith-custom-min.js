jQuery(document).ready(function(){jQuery("body").delay(600).queue(function(){jQuery(this).addClass("fadein").clearQueue()}),jQuery(".mobile .process_single_box_wrapper").click(function(){jQuery(".process_hover_wrapper").toggleClass("open")}),jQuery(".desktop .process_single_box_wrapper").mouseenter(function(){jQuery(".process_hover_wrapper").addClass("open")}),jQuery(".desktop .process_single_box_wrapper").mouseleave(function(){jQuery(".process_hover_wrapper").removeClass("open")}),jQuery(function(){jQuery('a[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=jQuery(this.hash);if(e=e.length?e:jQuery("[name="+this.hash.slice(1)+"]"),e.length)return jQuery("html, body").animate({scrollTop:e.offset().top},600),!1}})}),jQuery(".read_more").click(function(){jQuery(".read_more").fadeOut(),jQuery(this).next(".toggle_text").delay(300).slideDown(200)}),jQuery(window).scroll(function(){var e=jQuery(".menu_wrapper, .nav_wrapper, .home_banner, .main"),s=jQuery(window).scrollTop();s>=161?e.addClass("fixed"):e.removeClass("fixed")}),jQuery(".mobile_menu_title, .menu_bars").click(function(){jQuery(".nav_wrapper").slideToggle(400),jQuery(".mobile_menu_title, .menu_bars, span.mobile_menu_title").toggleClass("open")}),jQuery(".mobile_menu li.menu-item-has-children > a").click(function(){jQuery(this).next(".sub-menu").slideToggle(400).toggleClass("open"),jQuery(this,".mobile_menu li.menu-item-has-children > a").toggleClass("open")}),jQuery(".sidebar_menu_wrapper li.menu-item-has-children a").click(function(){jQuery(this).next(".sidebar_menu_wrapper li.menu-item-has-children ul.sub-menu").slideToggle(200),jQuery(this,".sidebar_menu_wrapper li.menu-item-has-children a").toggleClass("open")}),jQuery(".process.mobile .process_single_box_wrapper").slick({dots:!0,slidesToShow:1,slidesToScroll:1,infinite:!0}),jQuery(".review_stars_wrapper").slick({slidesToShow:3,slidesToScroll:3,responsive:[{breakpoint:755,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!0}}]}),jQuery(".process.desktop .process_single_box_wrapper").slick({dots:!0,slidesToShow:4,slidesToScroll:1,infinite:!0,arrows:!0,prevArrow:".prev",nextArrow:".next",responsive:[{breakpoint:1300,settings:{slidesToShow:2,slidesToScroll:2,infinite:!0,dots:!0,prevArrow:".prev",nextArrow:".next",arrows:!0}}]}),jQuery(".attornies_slideshow").slick({dots:!0,slidesToShow:2,slidesToScroll:2,infinite:!0,responsive:[{breakpoint:1200,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!0}}]}),jQuery(".logo_wrapper").slick({slidesToShow:5,slidesToScroll:5,responsive:[{breakpoint:1400,settings:{slidesToShow:2,slidesToScroll:2,infinite:!0}},{breakpoint:755,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!0}}]}),jQuery(".social_icon_wrapper").slick({slidesToShow:6,slidesToScroll:6,dots:!0,responsive:[{breakpoint:1100,settings:{slidesToShow:2,slidesToScroll:2,infinite:!0,dots:!0}},{breakpoint:755,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!0}}]})});