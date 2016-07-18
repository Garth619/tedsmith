jQuery(document).ready(function() {
	
	


jQuery('.mobile .process_single_box_wrapper').click(function() {
  	
  	jQuery('.process_hover_wrapper').toggleClass('open');
  	
	});
	
	
jQuery('.desktop .process_single_box_wrapper').mouseenter(function() {
  	
  	jQuery('.process_hover_wrapper').addClass('open');
  	
	});
	
jQuery('.desktop .process_single_box_wrapper').mouseleave(function() {
  	
  	jQuery('.process_hover_wrapper').removeClass('open');
  	
	});



/*
          function garretttwo() {
						  jQuery('.process_hover_wrapper').toggleClass('open');
						}
						
						
						jQuery( ".process_single_box_wrapper" ).off( "click", garretttwo );
*/
	
	
	jQuery('.read_more').click(function(){
		
		jQuery('.read_more').fadeOut();
		
		jQuery(this).next('.toggle_text').delay(300).slideToggle(200);
		
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
	
	
	 		
 		

 		
 		
 		
 		
 		
 		
 		
 		

 	
});

