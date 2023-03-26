<ul class = "list-unstyled d-flex social-links">
	<?php if ( get_field('facebook_url','options') ) : ?>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="social-link"><a target="_blank" href="<?php the_field('facebook_url','options'); ?>"><img src="<?php echo get_stylesheet_directory_uri() . '/img/facebook.svg'; ?>" alt="Facebook"></a></li>
	<?php endif; ?>
	<?php if ( get_field('instagram_url','options') ) : ?>	
		<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="social-link"><a target="_blank" href="<?php the_field('instagram_url','options'); ?>"><img src="<?php echo get_stylesheet_directory_uri() . '/img/instagram.svg'; ?>" alt="Instagram"></i></a></li>
	<?php endif; ?>
	<?php if ( get_field('twitter_url','options') ) : ?>
		<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="social-link"><a target="_blank" href="<?php the_field('twitter_url','options'); ?>"><img src="<?php echo get_stylesheet_directory_uri() . '/img/twitter.svg'; ?>" alt="Twitter"></i></a></li>
	<?php endif; ?>
</ul>