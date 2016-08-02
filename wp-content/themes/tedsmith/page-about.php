<?php
/**
 * Template Name: About Us
 *
 */

get_header(); ?>

<div class="main">
	
	<?php include('banner.php');?>
	
	<div class="content">
	
		<?php get_template_part( 'loop', 'page' ); ?>

	</div><!-- content -->

</div><!-- main -->

<?php get_footer(); ?>
