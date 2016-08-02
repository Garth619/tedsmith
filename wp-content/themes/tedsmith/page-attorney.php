<?php
/**
 * Template Name: Attorney 
 *
 */

get_header(); ?>


<div class="main">
	
	<?php include('banner.php');?>
	
	<div class="content">
	
		
		
		<h1><?php the_title(); ?></h1>
		<div class="gradient_divider"></div><!-- gradient_divider -->
		
		
		<div class="attorneys_bio">
			
			<img src="<?php bloginfo('template_directory');?>/images/attorneys/attorney-1-desk.jpg"/>
			
			<div class="attorneys_bio_wrapper">
				
				<a href="" class="bio_info"><span>Phone</span> 254.690.5688</a>
				<a href="" class="bio_info"><span>Fax</span>   254.690.5685</a>
				<a href="" class="bio_info"><span>Email</span>  Email Me</a>
				
			</div><!-- attorneys_bio_wrapper -->
			
		</div><!-- attorneys_bio -->
		
		
		
		<?php // get_template_part( 'loop', 'page' ); ?>

	</div><!-- content -->

</div><!-- main -->

<?php get_footer(); ?>
