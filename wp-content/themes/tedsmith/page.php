<?php
/**
 * Template for displaying all sidebar pages
 *
 */

get_header(); ?>


<div class="main">
	
	<?php include('banner.php');?>
	
	<div id="sidebar_content_wrapper">
		
		<?php get_sidebar(); ?>
		
		<div class="content sidebar_template">
	
			<?php get_template_part( 'loop', 'page' ); ?>

		</div><!-- content -->
	
	</div><!-- sidebar_content_wrapper -->

</div><!-- main -->




<?php get_footer(); ?>
