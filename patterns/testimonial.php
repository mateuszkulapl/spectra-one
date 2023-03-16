<?php
/**
 * Title: Testimonial
 * Slug: spectra-one/testimonial
 * Categories: featured
 * Keywords: Testimonial
 */

$get_url = trailingslashit( get_template_directory_uri());

$images = array(
	$get_url . 'assets/image/quote-icon.svg',
);
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium"}},"border":{"radius":"24px"}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-surface-background-color has-background" style="border-radius:24px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:image {"align":"center","id":146,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-146"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"align":"center","textColor":"heading","fontSize":"x-large"} -->
<p class="has-text-align-center has-heading-color has-text-color has-x-large-font-size">No matter where you go, It's the coolest, most happening thing around! Not able to tell you how happy I am with it.</p>
<!-- /wp:paragraph -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","textColor":"heading"} -->
<p class="has-text-align-center has-heading-color has-text-color">Cameron Williamson</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">Director of Ucla</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->