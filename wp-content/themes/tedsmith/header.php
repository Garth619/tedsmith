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
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=99" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/fonts/demo-async.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/js/slick/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/js/slick/slick/slick-theme.css"/>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head();?>


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
				
				
				
				
				
			

