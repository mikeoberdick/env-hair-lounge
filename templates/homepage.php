<?php /* Template Name: Homepage */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="homepage">
			<?php get_template_part('snippets/hero'); ?>

			<?php $sectionOne = get_field('section_one'); ?>
			<section id="sectionOne" class = "pt-5 mb-5">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 position-relative">
							<span class="h5 subheader"><?php echo $sectionOne['subheader']; ?></span>
							<h1 class = "header mb-5"><?php echo $sectionOne['header']; ?></h1>
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
					<div class="row">
						<?php while(have_rows('section_one')) : the_row(); ?>
							<?php while(have_rows('buckets')) : the_row(); ?>
								<div class="col-lg-4">
									<a href="<?php the_sub_field('link'); ?>">
									<div class="bucket">
										<?php $img = get_sub_field('image');
										if($img) { ?>
										<div class="image-wrapper">
											<?php echo wp_get_attachment_image( $img, 'full', "", array( "class" => "" ) ); ?>
										</div><!-- .image-wrapper -->
										<?php } ?>
										<div class="title-wrapper">
											<h5 class = "title"><?php the_sub_field('title'); ?></h5>
										</div><!-- .title -->
									</div><!-- .bucket -->
									</a>
								</div><!-- .col-lg-4 -->
							<?php endwhile; ?>					
						<?php endwhile; ?>
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #sectionOne -->

			<?php $sectionTwo = get_field('section_two'); ?>
			<section id="sectionTwo" class = "mb-5">
				<div class="left" style = "background: url('<?php echo $sectionTwo['image']; ?>');">
					<div class="inner-wrapper offset-left">
						<h2 class = "dark-green fw-bold"><?php echo $sectionTwo['header']; ?></h2>
						<a href = "<?php echo $sectionTwo['link']; ?>"><button role = "button" class = "green btn"><img src="<?php echo get_stylesheet_directory_uri() . '/img/chevron_right.svg'; ?>" alt=""></button></a>
					</div><!-- .inner-wrapper -->
				</div><!-- .left -->
				<div class="right">
					<div class="wysiwyg offset-right">
						<?php echo $sectionTwo['copy']; ?>
					</div><!-- .wysiwyg -->
				</div><!-- .right -->
			</section><!-- #sectionTwo -->

			<?php $sectionThree = get_field('section_three'); ?>
			<section id="sectionThree" class = "mb-5">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							INSTAGRAM
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #sectionThree -->

			<?php $sectionFour = get_field('section_four'); ?>
			<section id="sectionFour" class = "mb-5">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-5">
							<div class="inner">
								<div class="visit-env">
									<h1><?php echo $sectionFour['header']; ?></h1>
									<?php $logo = get_field('logo', 'options'); ?>
									<img class = "img-fluid" src="<?php echo $logo['url']; ?>" alt="<?php echo get_bloginfo( 'name'); ?>">
								</div><!-- .visit-env -->
								<div class="contact-info text-end mt-3">
									<p><?php the_field('address_line_1', 'options'); ?><br><?php the_field('address_line_2', 'options'); ?></p>
									<?php $phone = preg_replace('/[^0-9]/', '', get_field('phone_number', 'option')); ?>
									
									<h3>Call us <a href="tel:<?php echo $phone ?>"><?php the_field('phone_number', 'option'); ?></a></h3>
								</div><!-- .contact-info -->
							</div><!-- .inner -->
						</div><!-- .col-lg-5 -->
						<div class="col-lg-6 offset-lg-1 push-to-right-edge">
							<div class="outer-wrapper">
								<?php $img = $sectionFour['image'];
								if($img) {
								    echo wp_get_attachment_image( $img, 'full', "", array( "class" => "" ) );
								} ?>
								<img class = "swirl" src="<?php echo get_stylesheet_directory_uri() . '/img/silhouette_swirl.svg'; ?>" alt="">
							</div><!-- .outer-wrapper -->
						</div><!-- .col-lg-6 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #sectionFour -->

		</div><!-- #homepage -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>