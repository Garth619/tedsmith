jQuery(document).ready(function(){jQuery(".process_single_box_wrapper").click(function(){jQuery(".process_hover_wrapper").toggleClass("open")}),jQuery(".read_more").click(function(){jQuery(".read_more").fadeOut(),jQuery(this).next(".toggle_text").delay(300).slideToggle(200)}),jQuery(window).scroll(function(){var e=jQuery(".menu_wrapper, .nav_wrapper, .home_banner"),r=jQuery(window).scrollTop();r>=161?e.addClass("fixed"):e.removeClass("fixed")}),jQuery(".mobile_menu_title, .menu_bars").click(function(){jQuery(".nav_wrapper").slideToggle(400),jQuery(".mobile_menu_title, .menu_bars, span.mobile_menu_title").toggleClass("open")}),jQuery("li.menu-item-has-children > a").click(function(){jQuery(this).next(".sub-menu").slideToggle(400).toggleClass("open"),jQuery(this,"li.menu-item-has-children > a").toggleClass("open")})});