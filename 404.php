<?php
/**
 * The template for displaying 404 pages
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div id="content" class = "page-wrapper" tabindex="-1">
	<main id="main" class="site-main">
		<div id="404">
			<div class="container">
				<div class="row">
					<div class="col-sm12">
						<h1>404</h1>
						<h2>Oops! Looks like you might be lost.</h2>
						<div class="links d-flex justify-content-around">
							<a href="/"><button role = "button" class = "btn white-button">Go Home</button></a>
							<a href="/services/"><button role = "button" class = "btn white-button">View Services</button></a>
							<a href="/contact-us"><button role = "button" class = "btn white-button">Contact Us</button></a>
						</div><!-- .links -->	
					</div><!-- .col-sm12 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- #404 -->
	</main><!-- #main -->
</div><!-- #content -->

<?php get_footer(); ?>