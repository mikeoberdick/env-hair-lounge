<?php /* Template Name: Community Connections */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="communityConnections">
			<?php get_template_part( 'snippets/hero'); ?>

			<?php $sectionOne = get_field('section_one'); ?>
			<div id="sectionOne" class = "mt-5">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="header" data-aos = "zoom-in-up"><?php echo $sectionOne['header']; ?></h2>
							<div class="wysiwyg" data-aos = "zoom-in-down">
								<?php echo $sectionOne['copy']; ?>
							</div><!-- .wysiwyg -->
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</div><!-- #sectionOne -->

			<div id="sectionTwo">
				<div class="container">
					<?php $count = count(get_field('community_organizations')); $i = 1; while(have_rows('community_organizations')) : the_row(); ?>
					<div class = "row pb-5 mt-5 align-items-center" data-aos-delay = "<?php echo $i . '00'; ?>">
					<?php if($i % 2 == 0) { ?>											    
				    	<div class="col-lg-4 offset-lg-1" data-aos = "zoom-in-right">
		      				<?php $img = get_sub_field('image');
		      				if($img) {
		      				    echo wp_get_attachment_image( $img, 'full', "", array( "class" => "" ) );
		      				} ?>
		      			</div><!-- .col-lg-4 -->
		      			<div class= "col-md-6 offset-lg-1" data-aos = "zoom-in-left">
		      				<h2 class = "header mb-1"><?php the_sub_field('header'); ?></h2>
		      				<div class="wysiwyg">
		      					<?php the_sub_field('copy'); ?>
		      				</div><!-- .wysiwyg -->
		      			</div><!-- .col-lg-6 -->			    
											
					<?php } else { ?>					    
				    	<div class="col-lg-6 offset-lg-1" data-aos = "zoom-in-right">
		      				<h2 class = "header mb-1"><?php the_sub_field('header'); ?></h2>
		      				<div class="wysiwyg">
		      					<?php the_sub_field('copy'); ?>
		      				</div><!-- .wysiwyg -->
		      			</div><!-- .col-lg-6 -->
		      			<div class= "col-md-4 offset-lg-1" data-aos= "zoom-in-left">
		      				<?php $img = get_sub_field('image');
		      				if($img) {
		      				    echo wp_get_attachment_image( $img, 'full', "", array( "class" => "" ) );
		      				} ?>			      				
		      			</div><!-- .col-lg-4 -->
					<?php } ?>
					</div><!-- .row -->
					<?php if ($i < $count) {
						echo '<hr>';
					} ?>					
					<?php $i++; endwhile; ?>			
				</div><!-- .container -->
			</div><!-- #sectionTwo -->				    
			
		</div><!-- #communityConnections -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>