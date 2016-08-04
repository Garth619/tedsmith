<?php
/**
 * Template Name: Videos
 *
 */

get_header(); ?>

<div class="main">
	
	<?php include('banner.php');?>
	
	<div class="content">
	
		<h1><?php the_title(); ?></h1>
		<div class="gradient_divider"></div><!-- gradient_divider -->
		
		<div class="video_wrapper">
			
			
			
			<?php if(get_field('videos')): ?>
 
				<?php while(has_sub_field('videos')): ?>
				
				
					<div class="single_video">
			
					<?php the_sub_field('video_link');?>
				
				<span class="video_title"><?php the_sub_field('video_title');?></span><!-- title -->
			
			</div><!-- single_video -->
 
				
				
				<?php endwhile; ?>
 
			<?php endif; ?>
			
		</div><!-- video_wrapper -->
		

	</div><!-- content -->

</div><!-- main -->

<?php get_footer(); ?>
