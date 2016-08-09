jQuery(document).ready(function() {
	
	
// Body FadeIn

jQuery('body').delay(600).queue(function(){
	
	jQuery(this).addClass('fadein').clearQueue();

});



// Process Desktop Hover



jQuery('.process.desktop .process_single_box').mouseenter(function() {
  	
  	jQuery(this).children('.process_hover_wrapper').addClass('open');
 });
 

jQuery('.process.desktop .process_single_box').mouseleave(function() {
  	jQuery(this).children('.process_hover_wrapper').removeClass('open');
 });






jQuery('.process.mobile .single_box_initial_content').click(function() {
  	
  	jQuery(this).next('.process_hover_wrapper').addClass('open');
  	
	});
	
jQuery('.process.mobile .process_hover_wrapper').click(function() {
  	
  jQuery(this).removeClass('open');
  	
});





/*
jQuery('.mobile .process_single_box_wrapper').click(function() {
  	
  	jQuery('.process_hover_wrapper').toggleClass('open');
  	
	});
	
	
jQuery('.desktop .process_single_box_wrapper').mouseenter(function() {
  	
  	jQuery('.process_hover_wrapper').addClass('open');
  	
	});
	
jQuery('.desktop .process_single_box_wrapper').mouseleave(function() {
  	
  	jQuery('.process_hover_wrapper').removeClass('open');
  	
	});
	
*/
	

// Gradient Text

jQuery(".demo1").pxgradient({

	  step: 10, // Step Color. The smaller the number, the greater the load. Default: 10

	  colors: ["#6535ce","#3c7ddf","#0bbbbb"], // an array of hex colors.

	  dir: "x" // gradient direction. "x" - horizontal,  "y" - vertical

	});
	
		
	
// Consultation Scroll 



jQuery(function() {
  jQuery('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 600);
        return false;
      }
    }
  });
});
	

// Read More Slide Toggle


jQuery('.read_more').click(function(){
		
		jQuery('.read_more').fadeOut();
		
		jQuery(this).next('.toggle_text').delay(300).slideDown(200);
		
	});
	
	// My Custom Fixed Mobile Menu
	
	jQuery(window).scroll(function(){
  	
  	var sticky = jQuery('.menu_wrapper, .nav_wrapper, .home_banner, .main'),
  			
      	scroll = jQuery(window).scrollTop();

		if (scroll >= 161) sticky.addClass('fixed');

		else sticky.removeClass('fixed')
		 			
	
	});
	
	jQuery('.mobile_menu_title, .menu_bars').click(function() {
  	
		jQuery('.nav_wrapper').slideToggle(400);
		jQuery('.mobile_menu_title, .menu_bars, span.mobile_menu_title').toggleClass('open');
  	
	});
	
	
	jQuery('.mobile_menu li.menu-item-has-children > a').click(function() {
  	
		jQuery(this).next('.sub-menu').slideToggle(400).toggleClass('open');
		jQuery(this, '.mobile_menu li.menu-item-has-children > a').toggleClass('open');
  	
	});
	
	// Sidebar Toggle


		jQuery('.sidebar_menu_wrapper li.menu-item-has-children a').click(function(){
			
			jQuery(this).next('.sidebar_menu_wrapper li.menu-item-has-children ul.sub-menu').slideToggle(200);
			jQuery(this,'.sidebar_menu_wrapper li.menu-item-has-children a').toggleClass('open');
			
			
		});
	
	
	// Slick Slideshow 
	

	
	  jQuery('.process.mobile .process_single_box_wrapper').slick({
	    slidesToShow: 2,
			slidesToScroll: 2,
			infinite: true,
			dots: true,
			prevArrow: ".prev",
			nextArrow: ".next",
			arrows:true,
			responsive: [
			  {
			    breakpoint: 755,
			    settings: {
			      dots:true,
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: true
			    }
			  }
			]
	   });
	   
	   
		 // Review Stars
	   
	  jQuery('.review_stars_wrapper').slick({
			slidesToShow: 3,
	    slidesToScroll: 3,
			responsive: [
			  {
			    breakpoint: 755,
			    settings: {
			      slidesToShow: 1,
			      slidesToScroll: 1,
			      infinite: true,
			      dots: true
			    }
			  }
			]
		});
	  
	  
	  // Process Desktop
	  
	  jQuery('.process.desktop .process_single_box_wrapper').slick({
			dots:true,
	    slidesToShow: 4,
	    slidesToScroll: 1,
	    infinite: true,
	   
	   
	   
		});
		
		
		// Attornies 
		
		
		jQuery('.attornies_slideshow').slick({
	    dots:true,
	    slidesToShow: 2,
	    slidesToScroll: 2,
	    infinite: true,
	    responsive: [
			  {
			    breakpoint: 1200,
			    settings: {
			      slidesToShow: 1,
			      slidesToScroll: 1,
			      infinite: true,
			      dots: true
			    }
			  }
			]
	   });
		
		
	  
	  
	 // Awards 
		
		
	 	jQuery('.logo_wrapper').slick({
			slidesToShow: 5,
			slidesToScroll: 5,
			responsive: [
			  {
			    breakpoint: 1400,
			    settings: {
			      slidesToShow: 2,
			      slidesToScroll: 2,
			      infinite: true,
			      
			    }
			  },
			  {
			    breakpoint: 755,
			    settings: {
			      slidesToShow: 1,
			      slidesToScroll: 1,
			      infinite: true,
			      dots: true
			    }
			  }
			]
		});
		
		
	// Social Icons
	
 
	jQuery('.social_icon_wrapper').slick({
			slidesToShow: 6,
			slidesToScroll: 6,
			dots: true,
			responsive: [
			  {
			    breakpoint: 1100,
			    settings: {
			      slidesToShow: 2,
			      slidesToScroll: 2,
			      infinite: true,
			      dots: true
			    }
			  },
			  {
			    breakpoint: 755,
			    settings: {
			      slidesToShow: 1,
			      slidesToScroll: 1,
			      infinite: true,
			      dots: true
			    }
			  }
			  
			]
		});
		

		
		
		
		

	  
	
	  
}); // End of Dcoumet Ready

