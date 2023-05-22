<?php /* Template Name: FAQ */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="faq">
			<?php get_template_part( 'snippets/hero'); ?>

			<div id="sectionOne" class = "my-5">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-sm-12">
							<h2 class="header" data-aos="fade-up"><?php the_field('header'); ?></h2>
							<div class="wysiwyg" data-aos="fade-down">
								<?php the_field('copy'); ?>
							</div><!-- .wysiwyg -->
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</div><!-- #sectionOne -->

			<div id="sectionTwo">
				<div class="container">
					<div class="row">
						<div id = "questionContainer" class="col-sm-12">
							<h2 class="header mb-0" data-aos = "zoom-in">Frequently Asked Questions</h2>
							<div class="w-100 accordion md-accordion" id="faqAccordion" role="tablist" aria-multiselectable="true">
								<?php $i = 0; ?>
								<?php while ( have_rows('questions_and_answers') ) : the_row(); ?>
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
								<?php $i++ ?>
								<?php endwhile; ?>
							</div><!-- .accordion -->
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</div><!-- #sectionTwo -->
			
		</div><!-- #faq -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>