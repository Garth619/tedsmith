<?php
/**
 * Template Name: Case Results
 *
 */

get_header(); ?>

<div class="main">
	
	<?php include('banner.php');?>
	
	<div class="content">
	
		<h1><?php the_title(); ?></h1>
		<div class="gradient_divider"></div><!-- gradient_divider -->
		
		<div class="case_results_wrapper">
			
			
			<?php if(get_field('case_results')): ?>
 
						<?php while(has_sub_field('case_results')): ?>
						
						
							<div class="single_case_result">
				
								<span class="case_number"><?php the_sub_field('case_amount');?></span><!-- case_number -->
								<span class="case_subheader"><?php the_sub_field('case_type');?></span><!-- case_subheader -->

								<p><?php the_sub_field('case_info');?></p>
				
				
							</div><!-- single_case_result -->
						
 
						<?php endwhile; ?>
 
					<?php endif; ?>
			
			
			
			
			
			
		</div><!-- case_results_wrapper -->
		

	</div><!-- content -->

</div><!-- main -->

<?php get_footer(); ?>
