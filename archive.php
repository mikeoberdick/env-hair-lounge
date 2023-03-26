<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div class="wrapper" id="archive-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<div class="row">
			<main class="site-main" id="main">
				<div id="categoryArchive">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<h1 class = "h2 text-center mb-5"><?php echo single_cat_title('', false); ?> Category Posts</h1>
							</div><!-- .col-sm-12 -->
						</div><!-- .row -->
					</div><!-- .container -->
					<?php if ( have_posts() ) : ?>
						<section id="thePosts">
							<div class="container">
								<div class="row">
									<?php while ( have_posts() ) : the_post(); ?>
										<?php the_title(); ?>
									<?php endwhile; ?>
								</div><!-- .row -->
								<div class="row">
									<div class="col-sm-12">
										<div id="pagination">
											<?php understrap_pagination(); ?>
										</div><!-- #pagination -->
									</div><!-- .col-sm-12 -->
								</div><!-- .row -->
							</div><!-- .container -->
						</section><!-- #thePosts -->

						<?php else : ?>

						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<h2>Sorry, there are no posts in this category.</h2>
								</div><!-- .col-sm-12 -->
							</div><!-- .row -->
						</div><!-- .container -->

					<?php endif; ?>
				</div><!-- #categoryArchive -->

			</main><!-- #main -->
		</div><!-- .row -->
	</div><!-- #content -->
</div><!-- #archive-wrapper -->

<?php get_footer(); ?>