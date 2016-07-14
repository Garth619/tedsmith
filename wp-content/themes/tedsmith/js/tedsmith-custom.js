jQuery(document).ready(function() {
	
	
	jQuery('.process_single_box_wrapper').click(function() {
  	
  	jQuery('.process_hover_wrapper').toggleClass('open');
  	
	});
	
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
	
	
	// Media Queries Detection for various functions 
	
	
/*
	 var query = Modernizr.mq('(min-width: 755px)');
 
	 if (query) {
   	
   	jQuery('body').css("background","red");
 		
 		
 		}
*/


// MediaCheck library


/*
jQuery(function() {
  var $test = jQuery('test');

  mediaCheck({
    media: '(max-width: 420px)',
    entry: function() {
      console.log('starting 420');
    },
    exit: function() {
      console.log('leaving 420');
    }
  });

  mediaCheck({
    media: '(max-width: 600px)',
    entry: function() {
      jQuery('#test').text('This is a smaller screen.');
    },
    exit: function() {
      jQuery('#test').text('This is a larger screen.');
    }
  });

  mediaCheck({
    media: '(max-width: 40em)',
    entry: function() {
      console.log('starting 40em');
    },
    exit: function() {
      console.log('leaving 40em');
    }
  });

  mediaCheck({
    media: '(max-width: 50em)',
    both: function() {
      console.log('starting or ending 50em');
    }
  });

});
*/








/*
  var $demo = $('.demo-area');

  function stickyheader(mq) {
    if (mq.media)
    $demo.text('This is a smaller screen.');
    $demo.animate({
      backgroundColor: '#19ae2b'
    });
  }

  function largeScreen(mq) {
    if ($(document).width() >= 900) {
      // Note: Because this gets called by both media query checks,
      // it needs to make sure that it actually needs to apply so
      // it doesn't overwrite the smallScreen message.
      $demo.text('This is a larger screen.');
      $demo.animate({
        backgroundColor: '#d3811e'
      });
    }
  }

  function dude(mq) {
    $demo.text("Dude, that's a really big screen.");
    $demo.animate({
      backgroundColor: '#6814d3'
    });
  }

  mediaCheck({
    media: '(min-width: 900px)',
    entry: largeScreen,
    exit: smallScreen
  });

  mediaCheck({
    media: '(min-width: 1400px)',
    entry: dude,
    exit: largeScreen
  });
*/



	
	
	
	
	
});

