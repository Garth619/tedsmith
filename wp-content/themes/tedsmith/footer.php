<section class="request_wrapper">
		<a name="free-consultation"/>
		<div class="request">
			
			<span class="request_header">request <br class="desktop_request_break"/>a free consultation</span>
			
			
		</div><!-- request -->
		
		
		<div class="form_wrapper">
			
			<span class="description">Fill out the form to schedule a free consultation. We will contact you within 24 hours about your case.</span>
			<span class="sub_description">*All fields required</span>
			<span class="white_line"></span><!-- white_line -->
			
			<?php gravity_form(1, false, true, false, '', true, 12);?>
			
		</div><!-- form_wrapper -->
		
	</section><!-- request_wrapper -->
	
	<section class="office">
		
		<div class="office_col_wrapper">
		
			<div class="office_col1">
				
				<div class="gradient_divider_vertical"></div><!-- gradient_divider -->
				
				<span class="office_titles">office</span>
				<span class="sub_office_titles"><?php the_field('contact_address', 104);?></span>
			
				<div class="gradient_button"><a href="<?php the_field('get_directions', 104);?>" target="_blank">Get Directions</a></div><!-- gradient_button -->
			
				<div class="gradient_divider"></div><!-- gradient_divider -->
			
			</div><!-- office_col1 -->
			
			<div class="office_col2">
			
				<div class="gradient_divider_vertical"></div><!-- gradient_divider -->
				
				<span class="office_titles">phone</span>
				<a href="tel:<?php the_field('contact_phone', 104);?>" class="sub_office_titles"><?php the_field('contact_phone', 104);?></a>
			
				<span class="office_titles fax_margin">fax</span>
				<a href="tel:<?php the_field('contact_fax', 104);?>" class="sub_office_titles"><?php the_field('contact_fax', 104);?></a>
			
				<div class="gradient_divider"></div><!-- gradient_divider -->
			
			</div><!-- office_col2 -->
			
			<div class="office_col3">
				
				<div class="gradient_divider_vertical"></div><!-- gradient_divider -->
			
			<span class="office_titles">we accept</span>
			
			<img class="payment" src="<?php bloginfo('template_directory');?>/images/small-imgs/paypal.png"/>
			
			<img class="payment cards" src="<?php bloginfo('template_directory');?>/images/small-imgs/creditcards.png"/>
			
			</div><!-- office_col3 -->
		
		</div><!-- office_col_wrapper -->
		
	</section><!-- office -->
	
	<section class="social_icons">
		
		<div class="social_icons_max_width">
		
			<div class="social_icon_wrapper">
				
				<div class="single_social_wrapper">
					<a href="<?php the_field('twitter_icon', 85);?>" target="_blank">

						<div class="twitter_hover social_icon"></div><!-- twitter_hover -->
						<span>Twitter</span>
					
					</a>
				</div>
				
				<div class="single_social_wrapper">
					<a href="<?php the_field('linkedin_icon', 85);?>" target="_blank">
						
						<div class="linkedin_hover social_icon"></div><!-- linkedin_hover -->
						<span>LinkedIn</span>
					
					</a>
				</div>
				
				<div class="single_social_wrapper">
					<a href="<?php the_field('google_icon', 85);?>" target="_blank">
						
						<div class="google_hover social_icon"></div><!-- google_hover -->
						<span>Google+</span>
					
					</a>
				</div>
				
				<div class="single_social_wrapper">
					<a href="<?php the_field('facebook_icon', 85);?>" target="_blank">
						
						<div class="facebook_hover social_icon"></div><!-- facebook_hover -->
						<span>Facebook</span>
					
					</a>
				</div>
				
				<div class="single_social_wrapper">
					<a href="<?php the_field('bbb_icon', 85);?>" target="_blank">
						
						<div class="bbb_hover social_icon"></div><!-- bbb_hover -->
						<span>BBB</span>
					
					</a>
				</div>
				
				<div class="single_social_wrapper">
					<a href="<?php the_field('youtube_icon', 85);?>" target="_blank">
						
						<div class="youtube_hover social_icon"></div><!-- youtube_hover -->
						<span>Youtube</span>
						
					</a>
				</div>
				
			</div><!-- social_icon_wrapper -->
		
		</div><!-- social_icons_max_width -->
		
		
	</section><!-- social_icons -->
	
	<footer>
		
		<div class="footer_inner">
		
			<span class="copyright">Copyright &copy; ted smith law group 2016 | <a href="<?php bloginfo('url');?>/disclaimer">disclaimer</a> | <a href="<?php bloginfo('url');?>/practice-areas">sitemap</a></span>
			<a href="http://ilawyermarketing.com" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/small-imgs/ilawyer-logo.png"/></a>
		
		</div><!-- footer_inner -->
		
	</footer>
	</div><!-- wrap -->
	
	
	<!-- Preload -->
	
	<img class="preload" src="<?php bloginfo('template_directory');?>/images/small-imgs/social-twitter-h.png"/>
	<img class="preload" src="<?php bloginfo('template_directory');?>/images/small-imgs/social-linkedin-h.png"/>
	<img class="preload" src="<?php bloginfo('template_directory');?>/images/small-imgs/social-goggle-h.png"/>
	<img class="preload" src="<?php bloginfo('template_directory');?>/images/small-imgs/social-fb-h.png"/>
	<img class="preload" src="<?php bloginfo('template_directory');?>/images/small-imgs/social-bbb-h.png"/>
	<img class="preload" src="<?php bloginfo('template_directory');?>/images/small-imgs/social-youtube-h.png"/>
	
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/tedsmith-custom-min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/slick/slick/slick.min.js"></script>

</body>
</html>
