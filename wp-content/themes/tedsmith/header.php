<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head();?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-26266994-1', 'auto');
  ga('send', 'pageview');

</script>

<script type="application/ld+json">
{
     "@context": "http://schema.org",
     "@type": "Attorney",
     "name": "Ted Smith Law Group, PLLC",
     "alternateName": " Personal Injury Lawyer",
         "description": "Harker Heights Personal Injury Attorney",
     "url" : "www.tedsmithlawgroup.com",
     "telephone": " (254) 690-5688",
     "openingHours" : "Mo,Tu,We,Th,Fr 08:00-17:00",
     "hasMap": "https://www.google.com/maps/place/Ted+Smith+Law+Group,+PLLC/@31.075285,-97.680624,15z/data=!4m5!3m4!1s0x0:0x5891e6b3ee205dc2!8m2!3d31.075285!4d-97.680624",
     "address":
          {
          "@type": "PostalAddress",
          "streetAddress": "660 West FM 2410 Rd",
          "addressLocality": "Harker Heights",
          "addressRegion": "TX",
          "postalCode": "76548",
          "addressCountry": "USA"
          },
     "sameAs": [
     "https://plus.google.com/+Tedsmithlawgroup",
     "http://pview.findlaw.com/lawfirm/ted-smith-law-group-pllc/tx/harker-heights/NDQ2MzA5Nl8x/PP",
     "http://www.bbb.org/central-texas/business-reviews/attorneys-and-lawyers-personal-injury-and-property-damage/ted-smith-law-group-pllc-in-harker-heights-tx-90098778/",
     "https://www.yelp.com/biz/ted-smith-law-group-harker-heights-3"
     ]
}
</script>

</head>

<body <?php body_class(); ?>>
	
	<div id="wrap">
	
	
	<header>
		
		<div class="header_inner">
			
			<div class="header_left">
			
				<a href="<?php bloginfo('url');?>">
					
				
					<img class="mobile_logo" src="<?php bloginfo('template_directory');?>/images/small-imgs/logo-m.png"/>
					<img class="desktop_logo" src="<?php bloginfo('template_directory');?>/images/small-imgs/smith-logo.png"/>
				</a>
				
				<div class="consultation_header">
					<span>Call for a Free Consultation</span>
					<a class="phone_header" href="tel:2546905688">254.690.5688</a>
				</div><!-- consultation_header -->
				
				</div><!-- header_left -->
			
		
		
		
		
			<div class="menu_wrapper">
					
					<span class="mobile_menu_title">Menu</span>
					
					<div class="menu_bars">
						
						<div class="menu_single_bar"></div>
						<div class="menu_single_bar"></div>
						<div class="menu_single_bar"></div>
						
					</div><!-- menu_bars -->
					
			</div><!-- menu_wrapper -->
			
			<div class="nav_wrapper">
				
				<nav class="mobile_menu">
				
					<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
				
				</nav><!-- mobile_menu -->
				
			</div><!-- nav_wrapper -->
			
			<nav class="desktop_menu">
					
					<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>

			</nav><!-- desktop_menu -->
			
			<div class="phone_header_desktop_wrapper">
				
				<a class="phone_header_desktop" href="tel:2546905688">254.690.5688</a>
			
			</div><!-- phone_header_desktop -->
		
		</div><!-- header_inner -->
		
		
	</header>
				
				
				
				
				
			

