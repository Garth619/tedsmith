<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				
		<h1><?php the_title(); ?></h1>
		<div class="gradient_divider"></div><!-- gradient_divider -->
					
		
		<div class="content_inner">
			<?php the_content(); ?>
		</div><!-- content_inner -->
						
						
		<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					

<?php endwhile; // end of the loop. ?>
