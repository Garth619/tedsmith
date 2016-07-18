jQuery(document).ready(function() {
	
	
// Process Mobile CLick

jQuery('.mobile .process_single_box_wrapper').click(function() {
  	
  	jQuery('.process_hover_wrapper').toggleClass('open');
  	
	});
	
	
jQuery('.desktop .process_single_box_wrapper').mouseenter(function() {
  	
  	jQuery('.process_hover_wrapper').addClass('open');
  	
	});
	
jQuery('.desktop .process_single_box_wrapper').mouseleave(function() {
  	
  	jQuery('.process_hover_wrapper').removeClass('open');
  	
	});
	

// Read More Slide Toggle


jQuery('.read_more').click(function(){
		
		jQuery('.read_more').fadeOut();
		
		jQuery(this).next('.toggle_text').delay(300).slideDown(200);
		
	});
	
	// My Custom Fixed Mobile Menu
	
	jQuery(window).scroll(function(){
  	
  	var sticky = jQuery('.menu_wrapper, .nav_wrapper, .home_banner'),
  			
      	scroll = jQuery(window).scrollTop();

		if (scroll >= 161) sticky.addClass('fixed');

		else sticky.removeClass('fixed')
		 			
	
	});
	
	jQuery('.mobile_menu_title, .menu_bars').click(function() {
  	
		jQuery('.nav_wrapper').slideToggle(400);
		jQuery('.mobile_menu_title, .menu_bars, span.mobile_menu_title').toggleClass('open');
  	
	});
	
	
	jQuery('li.menu-item-has-children > a').click(function() {
  	
		jQuery(this).next('.sub-menu').slideToggle(400).toggleClass('open');
		jQuery(this, 'li.menu-item-has-children > a').toggleClass('open');
  	
	});
	
	
	// Slick Slideshow 
	

	
	  jQuery('.process_single_box_wrapper, .attorneys_wrapper, .logo_wrapper, .social_icon_wrapper').slick({
	    dots:true,
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    infinite: true
	   });
	   
	   
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
	  
	
	  
}); // End of Dcoumet Ready

