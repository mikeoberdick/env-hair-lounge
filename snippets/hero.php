<?php
if (is_home() || is_category() || is_singular('post')) {
	$hero = get_field('hero', '172');
} else {
	$hero = get_field('hero');
}
if (isset($hero['background_image'])) {
	$bg = $hero['background_image'];
} else {
	$bg = get_stylesheet_directory_uri() . '/img/default_hero_bg.jpg';
}

if (isset($hero['header'])) {
	$title = $hero['header'];
} else {
	$title = get_the_title();
} ?>

<?php if ( is_page_template('templates/homepage.php') ) { ?>
<section class = "hero">
	<div class="container-fluid px-lg-0">
		<div class="row">
			<div id = "left" class="col-lg-6">
				<div class="inner-copy offset-left">
					<span class="h5 subheader"><?php echo $hero['subheader']; ?></span>
					<h1 class = "header mb-3"><?php echo $hero['header']; ?></h1>
					<a href = "<?php echo $hero['button_link']; ?>"><button role = "button" class = "btn green"><?php echo $hero["button_text"]; ?></button></a>	
				</div><!-- .inner-copy -->	
			</div><!-- .col-lg-6 -->
			<div id = "right" class="col-lg-6 px-0">
				<div id="heroSliderOuterWrapper">
					<div id="heroSlider">
						<?php $images = get_field('hero_slider');
							$size = 'full';
							if( $images ):
							    foreach( $images as $image_id ):
							    echo '<div class = "slide">';					    	
							    	echo '<div style = "background: url(' . wp_get_attachment_image_url( $image_id, $size ) . ');"></div>';
							    	echo '</div>';
							    endforeach;
							endif; ?>
					</div><!-- #heroSlider -->
					<div id="heroDots"></div><!-- #heroDots -->
				</div><!-- #heroSliderOuterWrapper -->
			</div><!-- .col-lg-6 -->
		</div><!-- .row -->
	</div><!-- .container-fluid -->
	<div class="swirl">
		<img src="<?php echo get_stylesheet_directory_uri() . '/img/hero_swirl.svg'; ?>" alt="swirl">
	</div><!-- .swirl -->
</section><!-- .hero -->
<?php } else { ?>
<section class = "hero subpage-hero" style = "background: url('<?php echo $bg; ?>'); ">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="content-container text-center">
					<h1 class = "title mb-0"><?php echo $title; ?></h1>
				</div><!-- .content-container -->
			</div><!-- .col-sm-12 -->
		</div><!-- .row -->
	</div><!-- .container -->	
</section><!-- .hero -->
<?php } ?>
