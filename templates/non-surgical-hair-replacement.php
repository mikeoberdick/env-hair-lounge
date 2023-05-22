<?php /* Template Name: Hair Replacement */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="hairReplacement">
			<?php get_template_part( 'snippets/hero'); ?>

			<?php $sectionOne = get_field('section_one'); ?>
			<div id="sectionOne" class = "my-5">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="header" data-aos="zoom-in-up"><?php echo $sectionOne['header']; ?></h2>
							<div class="wysiwyg" data-aos="zoom-in-down">
								<?php echo $sectionOne['copy']; ?>
							</div><!-- .wysiwyg -->
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</div><!-- #sectionOne -->

			<?php $sectionTwo = get_field('section_two'); ?>
			<div id="sectionTwo" class = "mb-5">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="header" data-aos="zoom-in"><?php echo $sectionTwo['header']; ?></h2>
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
					<div class="row mb-5">
						<?php while(have_rows('section_two')) : the_row(); ?>
							<?php $i = 1; while(have_rows('types_of_hair_bonding')) : the_row(); ?>
								<div class="col-lg-6">
									<div class="inner p-3 text-center" data-aos = "<?php if ($i == 1) {echo 'fade-left';} else {echo 'fade-right';} ?>">
										<h5 class = "mb-3"><?php the_sub_field('header'); ?></h5>
										<?php $img = get_sub_field('image');
										echo wp_get_attachment_image( $img, 'full', "", array( "class" => "mb-3" ) ); ?>
										<div class="wysiwyg mb-3">
											<?php the_sub_field('blurb'); ?>							
										</div><!-- .wysiwyg -->
										<span class = "fst-italic"><?php the_sub_field('disclaimer'); ?></span>
									</div><!-- .p-3 -->
								</div><!-- .col-lg-6 -->		
							<?php $i++; endwhile; ?>			
						<?php endwhile; ?>
					</div><!-- .row -->
					<div class="row">
						<div class="col-sm-12">
							<?php while(have_rows('section_two')) : the_row(); ?>
								<?php $privateRoom = get_sub_field('private_room'); ?>
								<h2 class="header" data-aos="zoom-in"><?php echo $privateRoom['header']; ?></h2>
								<div class="row">
									<div class="col-lg-6">
										<div class="image-wrapper mb-3" data-aos = "zoom-in-right">
											<?php $img = $privateRoom['image']; ?>
											<?php echo wp_get_attachment_image($img, 'full'); ?>
										</div><!-- .image-wrapper -->	
									</div><!-- .col-lg-6 -->
									<div class="col-lg-6">
										<div class="image-wrapper mb-3" data-aos = "zoom-in-left">
											<?php $imgTwo = $privateRoom['image_two']; ?>
											<?php echo wp_get_attachment_image($imgTwo, 'full'); ?>
										</div><!-- .image-wrapper -->
									</div><!-- .col-lg-6 -->
								</div><!-- .row -->								
								<div class="wysiwyg text-center" data-aos = "zoom-in">
									<span class = "fst-italic"><?php echo $privateRoom['copy']; ?></span>
								</div><!-- .wysiwyg -->
							<?php endwhile; ?>
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</div><!-- #sectionTwo -->

			<?php $sectionThree = get_field('section_three'); ?>
			<div id="sectionThree" class = "mb-5">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="header mb-0" data-aos="zoom-in"><?php echo $sectionThree['header']; ?></h2>
						</div><!-- .col-sm-12 -->						
					</div><!-- .row -->
					<div class="row">
						<div id = "questionContainer" class="col-sm-12">
							<div class="w-100 accordion md-accordion" id="faqAccordion" role="tablist" aria-multiselectable="true">
								<?php while(have_rows('section_three')) : the_row(); ?>						
								<?php $i = 0; while ( have_rows('questions_and_answers') ) : the_row(); ?>
						        	<div class="question-container" data-aos = "fade-in-up" data-aos-delay = "<?php $t = ($i *2); echo $t; ?>00">
						        		<div class="card-wrapper" role="tab" id="<?php echo 'question-' . $i; ?>">
				  							<a data-bs-toggle="collapse" data-bs-target="<?php echo '#collapse-question-' . $i; ?>" aria-expanded="<?php if ( $i == 0 ) {echo 'true';} else {echo 'false';}; ?>" aria-controls="<?php echo 'collapse-question-' . $i; ?>">
				  								<div class = "question">
				  									<div class = "plus-to-minus">
													  <span></span>
													  <span></span>
													</div><!-- .plus-to-minus -->
				    								<h3 class="question-text d-inline mb-0 h5"><?php the_sub_field('question'); ?></h3>
				  								</div><!-- .question -->
				  							
					        					<div id="<?php echo 'collapse-question-' . $i; ?>"
					        					class = "<?php if ( $i == 0 ) {echo 'collapse show';} else {echo 'collapse';}; ?>" role="tabpanel" aria-labelledby="<?php echo 'question-' . $i; ?>" data-bs-parent="#faqAccordion">
											      	<div class="card-body">
														<?php the_sub_field('answer'); ?>
											      	</div><!-- .card-body -->
					    						</div><!-- .collapse -->
				  							</a>
										</div><!-- card-wrapper -->
									</div><!-- .question-container -->
								<?php  ?>
									<?php $i++; endwhile; ?>
								<?php endwhile; ?>
							</div><!-- .accordion -->
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->					
				</div><!-- .container -->
			</div><!-- #sectionOne -->
			
		</div><!-- #hairReplacement -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>