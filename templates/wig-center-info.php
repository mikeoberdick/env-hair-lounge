<?php /* Template Name: Wig Center Info */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="wigCenterInfo">
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
							<?php echo wp_get_attachment_image($sectionOne['image'], 'full'); ?>
						</div><!-- .col-lg-4 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</div><!-- #sectionOne -->
		
			<div class="container mb-5">
				<div class="row">
					<div class="col-sm-12">
						<?php while(have_rows('private_room')) : the_row(); ?>
							<h2 class="header" data-aos="zoom-in"><?php the_sub_field('header'); ?></h2>
							<div class="row">
								<div class="col-lg-6">
									<div class="image-wrapper mb-3" data-aos = "zoom-in-right">
										<?php $img = get_sub_field('image'); ?>
										<?php echo wp_get_attachment_image($img, 'full'); ?>
									</div><!-- .image-wrapper -->	
								</div><!-- .col-lg-6 -->
								<div class="col-lg-6">
									<div class="image-wrapper mb-3" data-aos = "zoom-in-left">
										<?php $imgTwo = get_sub_field('image_two'); ?>
										<?php echo wp_get_attachment_image($imgTwo, 'full'); ?>
									</div><!-- .image-wrapper -->
								</div><!-- .col-lg-6 -->
							</div><!-- .row -->								
							<div class="wysiwyg text-center" data-aos="zoom-in">
								<span class = "fst-italic"><?php the_sub_field('copy'); ?></span>
							</div><!-- .wysiwyg -->
						<?php endwhile; ?>
					</div><!-- .col-sm-12 -->
				</div><!-- .row -->
			</div><!-- .container -->

			<div class="container mb-5">
				<div class="row">
						<div class="col-sm-12">
							<?php $customPieces = get_field('custom_pieces'); ?>
							<h2 class="header" data-aos="zoom-in"><?php echo $customPieces['header']; ?></h2>
							<div class="row">
								<div class="col-lg-6">
									<div class="image-wrapper mb-3" data-aos = "zoom-in-right">
										<?php $img = $customPieces['image_one']; ?>
										<?php echo wp_get_attachment_image($img, 'full'); ?>
									</div><!-- .image-wrapper -->	
								</div><!-- .col-lg-6 -->
								<div class="col-lg-6">
									<div class="image-wrapper mb-3" data-aos = "zoom-in-left">
										<?php $imgTwo = $customPieces['image_two']; ?>
										<?php echo wp_get_attachment_image($imgTwo, 'full'); ?>
									</div><!-- .image-wrapper -->
								</div><!-- .col-lg-6 -->
							</div><!-- .row -->								
							<div class="wysiwyg text-center" data-aos = "zoom-in">
								<span class = "fst-italic"><?php echo $customPieces['copy']; ?></span>
							</div><!-- .wysiwyg -->
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->	
			</div><!-- .container -->			
			
		</div><!-- #wigCenterInfo -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>