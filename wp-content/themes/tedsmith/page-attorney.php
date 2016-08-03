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
				
				<div class="bio_title">Founder / Senior Partner</div><!-- bio_title -->
				
				<div class="gradient_divider"></div><!-- gradient_divider -->
				
				<a href="" class="bio_info"><span>Phone</span> 254.690.5688</a>
				<a href="" class="bio_info"><span>Fax</span>   254.690.5685</a>
				<a href="" class="bio_info"><span>Email</span>  Email Me</a>
				
				<h2>Certified Legal Specialties</h2>
				<ul>
					<li>Board Certified in Residential and Commercial Real Estate Law, Texas Board 
     of Legal Specialization, 1983</li>
     			<li>Certified Mediator including advanced training for family matters</li>
				</ul>
				<h2>Bar Admissions</h2>
				<ul>
					<li>Supreme Court of Indiana, 1973</li>
					<li>Supreme Court of Texas, 1975</li>
					<li>U.S. District Court Southern District of Indiana, 1973</li>
					<li>U. S. Court of Military Appeals, 1973</li>
					<li>U.S. District Court Western District of Texas, 1984</li>
				</ul>
				<h2>Education</h2>
				<ul>
					<li>Indiana University School of Law, Indianapolis, Indiana
     J.D. - 1973</li>
     			<li>Indiana University A.B. - 1970</li>
		 			<li>Major: Zoology and Radio & TV</li>
		 			<li>U.S. Army Judge Advocate General School - 1973</li>
				</ul>

				
			</div><!-- attorneys_bio_wrapper -->
			
		</div><!-- attorneys_bio -->
		
		
		
		<?php // get_template_part( 'loop', 'page' ); ?>

	</div><!-- content -->

</div><!-- main -->

<?php get_footer(); ?>
