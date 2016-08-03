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
					
					
					
					<div class="attorneys_single_wrapper">
					
					<a href="">
						<img src="<?php bloginfo('template_directory');?>/images/attorneys/attorney-1-desk.jpg"/>
					
						<div class="attorneys_title">
							<span class="attorneys_name">Ted Smith</span>
							<span class="attorneys_position">Founder / Senior Partner</span>
							<img class="arrow" src="<?php bloginfo('template_directory');?>/images/small-imgs/process-arrow.png"/>
						</div><!-- attorneys_title -->
					</a>
				
				</div><!-- attorneys_single_wrapper -->
				
				<div class="attorneys_single_wrapper">
				
					<a href="">
						<img src="<?php bloginfo('template_directory');?>/images/attorneys/attorney-1-desk.jpg"/>
					
						<div class="attorneys_title">
							<span class="attorneys_name">Ted Smith2</span>
							<span class="attorneys_position">Founder / Senior Partner</span>
							<img class="arrow" src="<?php bloginfo('template_directory');?>/images/small-imgs/process-arrow.png"/>
						</div><!-- attorneys_title -->
					</a>
				
				</div><!-- attorneys_single_wrapper -->
				
				<div class="attorneys_single_wrapper">
				
					<a href="">
						<img src="<?php bloginfo('template_directory');?>/images/attorneys/attorney-1-desk.jpg"/>
					
						<div class="attorneys_title">
							<span class="attorneys_name">Ted Smith3</span>
							<span class="attorneys_position">Founder / Senior Partner</span>
							<img class="arrow" src="<?php bloginfo('template_directory');?>/images/small-imgs/process-arrow.png"/>
						</div><!-- attorneys_title -->
					</a>
				
				</div><!-- attorneys_single_wrapper -->
				
				<div class="attorneys_single_wrapper">
				
					<a href="">
						<img src="<?php bloginfo('template_directory');?>/images/attorneys/attorney-1-desk.jpg"/>
					
						<div class="attorneys_title">
							<span class="attorneys_name">Ted Smith4</span>
							<span class="attorneys_position">Founder / Senior Partner</span>
							<img class="arrow" src="<?php bloginfo('template_directory');?>/images/small-imgs/process-arrow.png"/>
						</div><!-- attorneys_title -->
					</a>
				
				</div><!-- attorneys_single_wrapper -->
				
				<div class="attorneys_single_wrapper">
				
					<a href="">
						<img src="<?php bloginfo('template_directory');?>/images/attorneys/attorney-1-desk.jpg"/>
					
						<div class="attorneys_title">
							<span class="attorneys_name">Ted Smith5</span>
							<span class="attorneys_position">Founder / Senior Partner</span>
							<img class="arrow" src="<?php bloginfo('template_directory');?>/images/small-imgs/process-arrow.png"/>
						</div><!-- attorneys_title -->
					</a>
				
				</div><!-- attorneys_single_wrapper -->
				
				<div class="attorneys_single_wrapper">
				
					<a href="">
						<img src="<?php bloginfo('template_directory');?>/images/attorneys/attorney-1-desk.jpg"/>
					
						<div class="attorneys_title">
							<span class="attorneys_name">Ted Smith6</span>
							<span class="attorneys_position">Founder / Senior Partner</span>
							<img class="arrow" src="<?php bloginfo('template_directory');?>/images/small-imgs/process-arrow.png"/>
						</div><!-- attorneys_title -->
					</a>
				
				</div><!-- attorneys_single_wrapper -->
				
			</div><!-- attorneys_wrapper -->

	</div><!-- content -->

</div><!-- main -->

<?php get_footer(); ?>
