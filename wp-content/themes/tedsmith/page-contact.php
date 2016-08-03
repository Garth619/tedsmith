<?php
/**
 * Template Name: Contact Us
 *
 */

get_header(); ?>

<div class="main">
	
	<?php include('banner.php');?>
	
	<div class="content">
	
		<h1><?php the_title(); ?></h1>
		<div class="gradient_divider"></div><!-- gradient_divider -->
		
		<div class="contact_wrapper">
			
			<div class="single_contact">
			
				<span class="contact_header">our office</span>
				<span class="contact_sub_header">660 West FM 2410<br/>Harker Heights, TX 76548</span>
			
				<a href="" class="contact_directions">get directions</a>
			
			</div><!-- single_contact -->
			
			<div class="single_contact">
			
				<span class="contact_header">phone</span>
				<a class="contact_sub_header" href="tel:2546905688">254.690.5688</a>
			
			</div><!-- single_contact -->
			
			<div class="single_contact" style="border-right:none;">
			
				<span class="contact_header">fax</span>
				<span class="contact_sub_header">254.690.5685</span>
			
			</div><!-- single_contact -->
			
			
				
				<div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3417.22313636178!2d-97.68085619347792!3d31.0757196210423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8645499eb0ffb583%3A0xc3c3f6cbbde19987!2s660+W+FM+2410+Rd%2C+Harker+Heights%2C+TX+76548!5e0!3m2!1sen!2sus!4v1470229763672' width='600' height='450' frameborder='0' style='border:0' allowfullscreen></iframe>
				
			
			
		</div><!-- contact_wrapper -->

	</div><!-- content -->

</div><!-- main -->

<?php get_footer(); ?>
