<?php
/**
 * Template Name: Attorneys
 *
 */

get_header(); ?>

<div class="main attorneys_main">
	
	<?php include('banner.php');?>
	
	<div class="content">
		
		<h1><?php the_title(); ?></h1>
		<div class="gradient_divider"></div><!-- gradient_divider -->
	
		
<div class="attorneys_intro">

	<p class="attorney_intro_header">Integrity, Strength, Results — Not Just Words At Ted Smith Law Group</p>
	
	<p>Our Texas attorneys strive to provide you the best legal services available. Their knowledge, work ethic and high level of professionalism allow you to put your trust in our team as we address any legal issues that concern you. We have the resources and skill necessary to address personal injury claims, family law disputes, criminal defense cases, real estate matters and everything in between. Ted Smith has more than 40 years of legal experience, and he wants that experience to benefit you. Jeremy Brewer, Elizabeth Shehan bring to your team a willingness to provide you with an energetic approach to solving your legal difficulties.</p>
	
	<p><i>"I love how they give back to the community and really go above and beyond to make sure their clients are entirely taken care of. I am a huge fan of that. Very happy with working with them."</i></p>
	
	 <p>Client Ryan Anderson | June 2013</p>
	
	<p class="att_learn_more">learn more about our legal team by clicking on the profiles below</p>

</div><!-- attorneys_intro -->
		
		
		<div class="attorneys_wrapper">
				
			<?php if(get_field('attorneys_directory')): ?>
 
						<?php while(has_sub_field('attorneys_directory')): ?>
						
						<div class="attorneys_single_wrapper">
								
								<a href="<?php the_sub_field('page');?>">
									
									<?php $attorneyspic = wp_get_attachment_image_src(get_sub_field('attorneys_image'), 'attorneybio'); ?>
									<img src="<?php echo $attorneyspic[0]; ?>"/>
								
									<div class="attorneys_title">
										<span class="attorneys_name"><?php the_sub_field('name');?></span>
										<span class="attorneys_position"><?php the_sub_field('position');?></span>
										<img class="arrow" src="<?php bloginfo('template_directory');?>/images/small-imgs/process-arrow.png"/>
									</div><!-- attorneys_title -->
								</a>
							
							</div><!-- attorneys_single_wrapper -->
							
						
 
						<?php endwhile; ?>
 
					<?php endif; ?>
					
			</div><!-- attorneys_wrapper -->

	</div><!-- content -->

</div><!-- main -->

<?php get_footer(); ?>
