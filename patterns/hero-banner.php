<?php

/**
 * Title: Hero banner
 * Slug: spectra-one/hero-banner
 * Categories: banners
 * Keywords: Hero Banner
 */

$get_url = trailingslashit( get_template_directory_uri());

 $images = array(
	$get_url . 'assets/image/hero-img.png',
);
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"},"margin":{"top":"0","bottom":"0"}},"color":{"gradient":"linear-gradient(160deg,rgb(250,248,255) 31%,rgb(247,229,252) 49%,rgb(154,126,240) 69%,rgb(37,13,135) 79%)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background:linear-gradient(160deg,rgb(250,248,255) 31%,rgb(247,229,252) 49%,rgb(154,126,240) 69%,rgb(37,13,135) 79%);margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"padding":{"top":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--large)"><!-- wp:column {"style":{"spacing":{}}} -->
<div class="wp-block-column"><!-- wp:heading {"level":1,"style":{"typography":{"letterSpacing":"-1px"},"spacing":{"padding":{"right":"var:preset|spacing|medium"}}},"textColor":"heading","className":"wp-block-heading"} -->
<h1 class="wp-block-heading has-heading-color has-text-color" style="padding-right:var(--wp--preset--spacing--medium);letter-spacing:-1px">Discover a new way to build website</h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"var:preset|spacing|x-large"}}}} -->
<p style="padding-right:var(--wp--preset--spacing--x-large)">Create a functional and visually appealing website without having to write code.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Get Started</a></div>
<!-- /wp:button -->
<!-- wp:button {"textColor":"primary","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-color has-text-color wp-element-button">Learn More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":809,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-809"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->