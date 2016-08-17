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
			
				<?php 

					$posts = get_field('practice_areas_directory');

					if( $posts ): ?>
					
					<ul>
    
						<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post); ?>
					
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						
					
						</li>
					
						<?php endforeach; ?>
    			</ul>
    			
						<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					
					<?php endif; ?>
							
			</div><!-- practice_wrapper -->
		

	</div><!-- content -->

</div><!-- main -->

<?php get_footer(); ?>
