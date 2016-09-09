<?php
/**
 * Template Name: About Us
 *
 */

get_header(); ?>

<div class="main">
	
	<?php include('banner.php');?>
	
	<div class="content">
	
		
		<h1><?php the_title(); ?></h1>
		<div class="gradient_divider"></div><!-- gradient_divider -->
		
		
		<div class="about_inner_wrapper">
			
			<div class="about_inner_content">
			
				<?php the_field('about_text');?>
			
			</div><!-- about_inner_content -->
			
			<div class="about_photo_wrapper">
				
				
				<?php $aboutphoto = wp_get_attachment_image_src(get_field('photo'), 'aboutphoto'); ?>
    	   <img src="<?php echo $aboutphoto[0]; ?>"/>
    	   
    	   <span class="about_caption"><?php the_field('photo_caption');?></span><!-- about_caption -->
				
				 <div class="gradient_divider"></div>
			
			</div><!-- about_photo_wrapper -->
		
		</div><!-- about_inner_wrapper -->

	</div><!-- content -->

</div><!-- main -->

<?php get_footer(); ?>
