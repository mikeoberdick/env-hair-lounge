<?php /* Template Name: Wig Center Accessories */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="wigCenterAccessories">
			<?php get_template_part( 'snippets/hero'); ?>

			<?php $sectionOne = get_field('section_one'); ?>
			<div id="sectionOne" class = "my-5">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-8" data-aos="fade-in" data-aos-easing = "linear">
							<h2 class="header"><?php echo $sectionOne['header']; ?></h2>
							<div class="wysiwyg">
								<?php echo $sectionOne['copy']; ?>
							</div><!-- .wysiwyg -->
						</div><!-- .col-lg-8 -->
						<div class="col-lg-4" data-aos = "zoom-in-left">
							<?php echo wp_get_attachment_image($sectionOne['image'], 'large'); ?>
						</div><!-- .col-lg-4 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</div><!-- #sectionOne -->

			<?php $sectionTwo = get_field('section_two'); ?>
			<div id="sectionTwo" class = "mb-5">
				<div class="container">
					<div class="row">
						<?php while(have_rows('section_two')) : the_row(); ?>
							<?php while(have_rows('buckets')) : the_row(); ?>
								<?php $img = get_sub_field('image'); ?>
								<div class="col-lg-4">
									<div class="image text-center mb-3">
										<?php echo wp_get_attachment_image($img, 'medium'); ?>
									</div><!-- .image -->								
									<h3><?php the_sub_field('header'); ?></h3>
									<div class="wysiwyg"><?php the_sub_field('description'); ?></div><!-- .wysiwyg -->									
								</div><!-- .col-lg-4 -->
							<?php endwhile; ?>
						<?php endwhile; ?>						
					</div><!-- .row -->
				</div><!-- .container -->
			</div><!-- #sectionTwo -->
			
		</div><!-- #wigCenterAccessories -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>