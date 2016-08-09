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
				<span class="contact_sub_header"><?php the_field('contact_address');?></span>
			
				<a href="<?php the_field('get_directions');?>" target="_blank" class="contact_directions">get directions</a>
			
			</div><!-- single_contact -->
			
			<div class="single_contact">
			
				<span class="contact_header">phone</span>
				<a class="contact_sub_header" href="tel:<?php the_field('contact_phone');?>"><?php the_field('contact_phone');?></a>
			
			</div><!-- single_contact -->
			
			<div class="single_contact" style="border-right:none;">
			
				<span class="contact_header">fax</span>
				<a class="contact_sub_header" href="tel:<?php the_field('contact_fax');?>"><?php the_field('contact_fax');?></a>
			
			</div><!-- single_contact -->
			
			<div class="map">
				
				<?php the_field('google_map');?>
				
			
				
			</div><!-- map -->
			
		</div><!-- contact_wrapper -->

	</div><!-- content -->

</div><!-- main -->

<?php get_footer(); ?>
