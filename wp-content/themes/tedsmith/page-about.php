<?php
/**
 * Template Name: About Us
 *
 */

get_header(); ?>


<div class="main">
	
	<div class="banner">
		
		<div class="banner_vertical_align">
			
			<span class="banner_header">Serving the citizens<br/>of Texas since 1976</span><!-- banner_header -->
			<span class="banner_sub_header">Our experienced lawyers handle all aspects of your case, and work hard to keep the legal process as stress free as possible for you.</span><!-- sub_banner_header -->
			<span class="mybutton">
				click for a free consultation
			</span><!-- button_consultation -->
		
		</div><!-- banner_vertical_align -->
		
	</div><!-- banner -->
	
<div id="content">
	
<?php get_template_part( 'loop', 'page' ); ?>

</div><!-- content -->


</div><!-- main -->

<?php get_footer(); ?>
