<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; ?>

<div id="js-heightControl" style="height: 0;">&nbsp;</div>
<a href="#page" title="Scroll To Top" id="scroll_totop" style="opacity: 1; visibility: inherit;">
	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.983px" height="11.837px" viewBox="0 0 15.983 11.837" enable-background="new 0 0 15.983 11.837" xml:space="preserve"><path class="thb-arrow-head" d="M1.486,5.924l4.845-4.865c0.24-0.243,0.24-0.634,0-0.876c-0.242-0.243-0.634-0.243-0.874,0L0.18,5.481
c-0.24,0.242-0.24,0.634,0,0.876l5.278,5.299c0.24,0.241,0.632,0.241,0.874,0c0.24-0.241,0.24-0.634,0-0.876L1.486,5.924z"></path><path class="thb-arrow-line" d="M15.982,5.92c0,0.328-0.264,0.593-0.592,0.593H0.592C0.264,6.513,0,6.248,0,5.92c0-0.327,0.264-0.591,0.592-0.591h14.799
C15.719,5.329,15.982,5.593,15.982,5.92z"></path></svg>
</a>

<div id="wrapperFooter">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="inner">
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'footer',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'ms-auto',
							'fallback_cb'     => '',
							'menu_id'         => 'footerMenu',
							'depth'           => 1,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>
				</div><!-- .inner -->
			</div><!-- .col-sm-12 -->
			<div class="col-lg-7">
				<h3 class = "header">Our Mission</h3>
				<div class="wysiwyg mb-4">
					<?php the_field('mission_statement', 'options'); ?>
				</div><!-- .wysiwyg -->
				<?php get_template_part( 'snippets/social-links'); ?>
				<p id="copyrightAndTerms" class = "mb-0">
					&copy; <?php echo date('Y') . ' ' . get_bloginfo( 'name' ) ?>
				</p>
				<p class = "mb-0">Website Designed & Developed by <a target = "_blank" href="https://designs4theweb.com">Designs 4 The Web</a></p>
			</div><!-- .col-lg-7 -->
			<div class="col-lg-4 offset-lg-1">
				<h3 class = "header">Salon Hours</h3>
				<div class="hours-wrapper">
					<div class="days">
						<span>Sunday</span>
						<span>Monday</span>
						<span>Tuesday</span>
						<span>Wednesday</span>
						<span>Thursday</span>
						<span>Friday</span>
						<span>Saturday</span>
					</div><!-- .days -->
					<div class="hours">
						<?php the_field('salon_hours', 'options'); ?>
					</div><!-- .hours -->
				</div><!-- .hours-wrapper -->				
			</div><!-- .col-lg-4 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #wrapperFooter -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<?php if (is_page_template('templates/homepage.php')) : ?>
<script>
	jQuery(document).ready(function() {
  		jQuery('#heroSlider').slick({
  			arrows: false,
  			dots: true,
  			appendDots: jQuery('#heroDots'),
		    slidesToShow: 1,
		    slidesToScroll: 1,
		    fade: true,
		    cssEase: 'ease-in-out'
  		});
	});
</script>
<?php endif; ?>

</body>
</html>