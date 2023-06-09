<?php /* Template Name: Salon Info */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="salonInfo">
			<?php get_template_part( 'snippets/hero'); ?>

			<?php $sectionOne = get_field('section_one'); ?>
			<div id="sectionOne" class = "my-5">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6" data-aos="fade-in" data-aos-easing = "linear">
							<h2 class="header"><?php echo $sectionOne['header']; ?></h2>
							<div class="wysiwyg">
								<?php echo $sectionOne['copy']; ?>
							</div><!-- .wysiwyg -->
						</div><!-- .col-lg-6 -->
						<div class="col-lg-6" data-aos = "zoom-in-left">
							<?php echo wp_get_attachment_image($sectionOne['image'], 'full'); ?>
						</div><!-- .col-lg-6 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</div><!-- #sectionOne -->
			
		</div><!-- #salonInfo -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>