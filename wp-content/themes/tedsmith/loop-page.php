<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				
		<h1><?php the_title(); ?></h1>
		<div class="gradient_divider"></div><!-- gradient_divider -->
					
		<?php the_content(); ?>
						
						
		<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					

<?php endwhile; // end of the loop. ?>
