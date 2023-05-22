<?php /* Template Name: Products & Color */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="productsAndColor">
			<?php get_template_part( 'snippets/hero'); ?>

			<?php $sectionOne = get_field('section_one'); ?>
			<div id="sectionOne" class = "my-5">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="header" data-aos="fade-up"><?php echo $sectionOne['header']; ?></h2>
							<div class="wysiwyg" data-aos="fade-down">
								<?php echo $sectionOne['copy']; ?>
							</div><!-- .wysiwyg -->
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</div><!-- #sectionOne -->

			<?php $sectionTwo = get_field('section_two'); ?>
			<div id="sectionTwo" class = "mb-3">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="header" data-aos="fade-up-right"><?php echo $sectionTwo['header']; ?></h3>
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
					<div class="row">
						<?php while(have_rows('section_two')) : the_row(); ?>
							<?php $i = 1; while(have_rows('popular_lines')) : the_row(); ?>
								<div class="col-lg-4 mb-3">
									<div class="inner p-3 text-center" data-aos="<?php if ($i == 1 || 4) {echo 'zoom-in-right';} elseif ($i == 2 || 5) {echo 'zoom-in';} elseif ($i == 3 || 6) {echo 'zoom-in-left';} ?>">
									<?php $img = get_sub_field('image');
									echo wp_get_attachment_image( $img, 'full', "", array( "class" => "mb-3" ) );
									?>
									<div class="wysiwyg"><?php the_sub_field('blurb'); ?></div><!-- .wysiwyg -->
									</div><!-- .p-3 -->
								</div><!-- .col-lg-4 -->		
							<?php endwhile; ?>			
						<?php endwhile; ?>
					</div><!-- .row -->
				</div><!-- .container -->
			</div><!-- #sectionTwo -->

			<?php $sectionThree = get_field('section_three'); ?>
			<div id="sectionThree" class = "mb-5">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div data-aos="zoom-in-up">
								<h3 class="header"><?php echo $sectionThree['header']; ?></h3>
								<div class="wysiwyg mb-3">
									<?php echo $sectionThree['copy']; ?>
								</div><!-- .wysiwyg -->
							</div>
							<div data-aos = "zoom-in-up" data-aos-delay = "150">
								<h2>Benefits of Organic Color:</h2>
								<?php while(have_rows('section_three')) : the_row(); ?>
								<ul class = "fa-ul">
								  <?php
								    $list = get_sub_field('benefits');
								    $items = explode(PHP_EOL, $list);
								    foreach($items as $item) {
								    echo '<li class = "d-flex"><i class="fa-li fa fa-scissors"></i>' . $item . '</li>';
								  } ?>
								</ul>						
							<?php endwhile; ?>
						</div>
						</div><!-- .col-lg-6 -->
						<div class="col-lg-6" data-aos="zoom-in-left">
							<?php $img = $sectionThree['image'];
							if($img) {
							    echo wp_get_attachment_image( $img, 'full', "", array( "class" => "" ) );
							} ?>
						</div><!-- .col-lg-6 -->
					</div><!-- .row -->
					
				</div><!-- .container -->
			</div><!-- #sectionOne -->
			
		</div><!-- #productsAndColor -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>