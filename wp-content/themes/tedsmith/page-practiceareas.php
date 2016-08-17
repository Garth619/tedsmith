<?php
/**
 * Template Name: Practice Areas
 *
 */

get_header(); ?>

<div class="main">
	
	<?php include('banner.php');?>
	
	<div class="content">
	
		<h1><?php the_title(); ?></h1>
		<div class="gradient_divider"></div><!-- gradient_divider -->
		
		<div class="practice_wrapper">
			
			<?php if(get_field('practice_areas_directory')): ?>
 
			
 
				<?php while(has_sub_field('practice_areas_directory')): ?>
 
				<div class="pa_col">
 
				<h2 class="pa_subheader"><?php the_sub_field('section_title');?></h2>
				
				
				
				
				
				<?php if(get_sub_field('practice_areas_section')): ?>
 
			
 
				
				<ul>
				
				
				
				<?php while(has_sub_field('practice_areas_section')): ?>
				
				
				
				<li><a href="<?php the_sub_field('page_link');?>"><?php the_sub_field('page_title');?></a></li>
 
				
 
				<?php endwhile; ?>
 
			
 
				</ul>
			
			
			
			
			<?php endif; ?>
				
				
				
				
				</div>
					
				
				
				
				
				
				
				<?php endwhile; ?>
 
			
 
			<?php endif; ?>
							
			</div><!-- practice_wrapper -->
		

	</div><!-- content -->

</div><!-- main -->

<?php get_footer(); ?>
