<?php

/**
 * Title: Hero banner
 * Slug: spectra/hero-banner
 * Categories: banners
 * Keywords: Hero Banner
 */

$get_url = trailingslashit( get_template_directory_uri());

 $images = array(
	$get_url . 'assets/image/hero-img.png',
);
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained","justifyContent":"center","contentSize":""}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{}}} -->
<div class="wp-block-column"><!-- wp:heading {"level":1,"style":{"typography":{"letterSpacing":"-1px"},"spacing":{"padding":{"right":"var:preset|spacing|medium"}}},"textColor":"heading"} -->
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
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-large","padding":{"top":"var:preset|spacing|large"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"textColor":"heading"} -->
<h4 class="wp-block-heading has-heading-color has-text-color">A+</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Avg rating 4.9</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"textColor":"heading"} -->
<h4 class="wp-block-heading has-heading-color has-text-color">800K+</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Active install</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":191,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-191"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->