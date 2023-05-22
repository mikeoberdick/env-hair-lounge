<?php /* Template Name: Our Staff */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="ourStaff">
			<?php get_template_part( 'snippets/hero'); ?>

			<?php $custom_query_args = array(
			    'post_type' => 'staff', 
			    'posts_per_page' => '-1'
			);

			$custom_query = new WP_Query( $custom_query_args ); $totalPosts = $custom_query->found_posts; ?>
			<div class="container">
				<div id = "staffList" class = "row mt-5">
				    <?php $i = 1; while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
				      	<article <?php post_class('staff-member mb-3'); ?>>
				      		<div class="row align-items-center">
				      			<?php if($i % 2 == 0) { ?>
				      			<div class= "col-md-6 offset-lg-1">
				      				<h2 class = "header mb-1" data-aos = "zoom-in-up"><?php the_title(); ?></h2>
				      				<h5 class="title" data-aos = "zoom-in-down"><?php the_field('title'); ?></h5>
				      				<div class="wysiwyg" data-aos = "zoom-in">
				      					<?php the_field('bio'); ?>
				      				</div><!-- .wysiwyg -->
				      			</div><!-- .col-lg-6 -->
				      			<div class="col-lg-4 offset-lg-1" data-aos = "fade-left">
				      				<?php $img = get_field('image');
				      				if($img) {
				      				    echo wp_get_attachment_image( $img, 'full', "", array( "class" => "" ) );
				      				} ?>
				      			</div><!-- .col-lg-4 -->
				      		<?php } else { ?>
				      			<div class="col-lg-4 offset-lg-1" data-aos = "fade-right">
				      				<?php $img = get_field('image');
				      				if($img) {
				      				    echo wp_get_attachment_image( $img, 'full', "", array( "class" => "" ) );
				      				} ?>
				      			</div><!-- .col-lg-4 -->
				      			<div class= "col-md-6 offset-lg-1">
				      				<h2 class = "header mb-1" data-aos = "zoom-in-up"><?php the_title(); ?></h2>
				      				<h5 class="title" data-aos = "zoom-in-down"><?php the_field('title'); ?></h5>
				      				<div class="wysiwyg" data-aos = "zoom-in">
				      					<?php the_field('bio'); ?>
				      				</div><!-- .wysiwyg -->
				      			</div><!-- .col-lg-6 -->				      			
				      		<?php } ?>
				      		</div><!-- .row -->			    			    		
				    	</article>
				    	<?php if ($i < $totalPosts) { ?>
				    	<div class="hr-holder">
							<?php $logo = get_field('logo', 'options'); ?>
							<img src="<?php echo $logo['url']; ?>" alt="small env logo" data-aos="zoom-in">
						</div><!-- .hr-holder -->
						<?php } ?>
				    <?php $i++; endwhile; ?>
				</div><!-- #staffList -->				
			</div><!-- .container -->					    
			
		</div><!-- #ourStaff -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>