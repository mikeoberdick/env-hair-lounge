<?php /* Template Name: Contact */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="contact">
			<?php get_template_part( 'snippets/hero'); ?>

			<div id="sectionOne" class = "my-5">
				<div class="container">
					<div class="row">
						<div class="col-lg-6" data-aos = "fade-right">
							<h2 class="header"><?php the_field('header'); ?></h2>
							<?php echo do_shortcode ('[ninja_form id=1]'); ?>
						</div><!-- .col-lg-6 -->
						<div class="col-lg-6" data-aos = "fade-left">
							<div class="outer-wrapper position-relative">
							<?php $img = get_field('image');
							echo wp_get_attachment_image( $img, 'full', "", array( "class" => "" ) );
							?>
							<img class = "tilted-swirl" src="<?php echo get_stylesheet_directory_uri() . '/img/silhouette_swirl.svg'; ?>" alt="swirl graphic">
							</div><!-- .outer-wrapper -->
						</div><!-- .col-lg-6 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</div><!-- #sectionOne -->
			
		</div><!-- #contact -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>