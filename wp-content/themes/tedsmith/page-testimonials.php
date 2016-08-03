<?php
/**
 * Template Name: Testimonials
 *
 */

get_header(); ?>

<div class="main">
	
	<?php include('banner.php');?>
	
	<div class="content">
	
		<h1><?php the_title(); ?></h1>
		<div class="gradient_divider"></div><!-- gradient_divider -->
		
		<div class="testimonial_wrapper">
			
			
				
				
				<?php if(get_field('testimonials')): ?>
 
						<?php while(has_sub_field('testimonials')): ?>
						
						
							<div class="single_testimonial">
				
								<img class="testimonial_stars" src="<?php bloginfo('template_directory');?>/images/small-imgs/test-stars.png"/>
			
								<p><?php the_sub_field('testimonial');?></p>
			
								<span class="client_subheader"><?php the_sub_field('testimonial_name');?></span>
								<span class="client_lowerheader"><?php the_sub_field('testimonial_source');?></span>
			
							</div><!-- single_testimonial -->
						
 
						<?php endwhile; ?>
 
					<?php endif; ?>
				
							
		</div><!-- testimonial_wrapper -->

	</div><!-- content -->

</div><!-- main -->

<?php get_footer(); ?>
