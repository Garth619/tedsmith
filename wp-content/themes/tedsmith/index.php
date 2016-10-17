<?php
/**
 * Main template file
 *
 */

get_header(); ?>

		

<div class="main">
	
	<?php include('banner.php');?>
	
	<div id="sidebar_content_wrapper">
		
		<?php get_sidebar('blog'); ?>
		
		<div class="content sidebar_template">
	
			<?php get_template_part( 'loop', 'index' ); ?>

		</div><!-- content -->
	
	</div><!-- sidebar_content_wrapper -->

</div><!-- main -->


<?php get_footer(); ?>