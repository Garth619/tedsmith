<?php
/**
 * Template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	<div class="main">
	
	<?php include('banner.php');?>
	
	<div id="sidebar_content_wrapper">
		
		<?php get_sidebar(); ?>
		
		<div class="content sidebar_template">
	
			<h1>Not Found</h1>
			<div class="gradient_divider"></div><!-- gradient_divider -->
				
				<div class="content_inner">
					<p style="text-align: center;">Apologies but the page you are looking cannot be found.</p>
				</div><!-- content_inner -->
				
			

		</div><!-- content -->
	
	</div><!-- sidebar_content_wrapper -->

</div><!-- main -->

<?php get_footer(); ?>