<?php
/**
 * Template for displaying Category Archive pages
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		

				
			
<div class="main">
	
	<?php include('banner.php');?>
	
	<div id="sidebar_content_wrapper">
		
		<?php get_sidebar('blog'); ?>
		
		<div class="content sidebar_template">
	
			<h1 class="page-title"><?php
					printf( __( 'Category Archives: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
				
			<div class="gradient_divider"></div><!-- gradient_divider -->
				
				
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

				
				get_template_part( 'loop', 'category' );?>


		</div><!-- content -->
	
	</div><!-- sidebar_content_wrapper -->

</div><!-- main -->


<?php get_footer(); ?>
