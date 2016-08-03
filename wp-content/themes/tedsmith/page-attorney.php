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
			
			<?php if(get_field('attorney_image')):?>
			
			<?php $biopic = wp_get_attachment_image_src(get_field('attorney_image'), 'attorneybio'); ?>
      <img src="<?php echo $biopic[0]; ?>"/>
      
      <?php endif;?>
			
			<div class="attorneys_bio_wrapper">
				
				<div class="bio_title"><?php the_field('position');?></div><!-- bio_title -->
				
				<div class="gradient_divider"></div><!-- gradient_divider -->
				
				<?php if(get_field('location')):?>
					<span>Location</span> &nbsp;<?php the_field('location');?></span>
				<?php endif;?>
				
				<?php if(get_field('attorney_phone')):?>
					<a href="tel:<?php the_field('attorney_phone');?>" class="bio_info"><span>Phone</span> &nbsp;<?php the_field('attorney_phone');?></a>
				<?php endif;?>
				
				<?php if(get_field('attorney_fax')):?>
					<a href="tel:<?php the_field('attorney_fax');?>" class="bio_info"><span>Fax</span>   &nbsp;<?php the_field('attorney_fax');?></a>
				<?php endif;?>
				<a href="mailto:<?php the_field('attorney_email');?>" class="bio_info"><span>Email</span>  &nbsp;<?php the_field('attorney_email');?></a>
				
				<div class="sidebar_stats">
				
					<?php the_field('additonal_bio_sidebar');?>
								
				</div><!-- sidebar_stats -->

				
			</div><!-- attorneys_bio_wrapper -->
			
		</div><!-- attorneys_bio -->
		
		<div class="attorneys_content">
			
			<?php the_field('main_bio_area');?>	
			
		</div><!-- attorneys_content -->
		
		
		
		<?php // get_template_part( 'loop', 'page' ); ?>

	</div><!-- content -->

</div><!-- main -->

<?php get_footer(); ?>
