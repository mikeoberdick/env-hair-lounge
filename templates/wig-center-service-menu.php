<?php /* Template Name: Wig Center Service Menu */ 

//Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="wigCenterServices">
			<?php get_template_part( 'snippets/hero'); ?>

			<div class = "my-5">
				<div class="container">
					<div class="row">					
						<div id = "serviceMenu" class="col-lg-4">
							<h2>Services</h2>
							<ul id = "servicesMenu" class="nav nav-pills flex-column" role="tablist">
							<?php $i =1; while(have_rows('menu')) : the_row(); ?>
							<?php $lowercase = preg_replace('/[^a-z0-9]+/', '-', strtolower(get_sub_field('menu_section_name'))); ?>
								<li class="nav-item">
							   		<a class="nav-link <?php if ($i == 1) {echo 'active';} ?>" data-bs-toggle="tab" href="#<?php echo $lowercase; ?>" role="tab"><?php the_sub_field('menu_section_name'); ?></a>
							  	</li>
							<?php $i++; endwhile; ?>
							</ul>
						</div><!-- .col-lg-4 -->

						<div class="col-lg-8">
							<div class="tab-content">
							  <?php $i = 1; while(have_rows('menu')) : the_row(); ?>
							  	<?php $lowercase = preg_replace('/[^a-z0-9]+/', '-', strtolower(get_sub_field('menu_section_name'))); ?>
							  		<div class="tab-pane <?php if ($i == 1) {echo 'active';} ?>" id="<?php echo $lowercase; ?>" role="tabpanel">
							  			<h3><?php the_sub_field('menu_section_name'); ?></h3>
							  			<?php if (get_sub_field('copy')) : ?>
							  			<div class="wysiwyg mb-3"><?php the_sub_field('copy'); ?></div><!-- .wysiwyg -->
							  			<?php endif; ?>
							  			<table class="table">
							  				<tbody>
							  					<?php $i = 1; while(have_rows('price_list')) : the_row(); ?>
												  	<tr>
													    <td><?php the_sub_field('service'); ?></td>
													    <td>$<?php the_sub_field('price'); ?></td>
													</tr>
							  					<?php $i++; endwhile; ?>
							  				</tbody>
							  			</table>
							  		</div><!-- .tab-pane -->
							  <?php $i++; endwhile; ?>
							</div><!-- .tab-content -->
						</div><!-- .col-lg-8 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</div>
		</div><!-- #wigCenterServices -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>