<?php
/**
 * Title: Three columns featured
 * Slug: spectra/three-columns-featured
 * Categories: featured
 * Keywords: Three columns featured
 */

$get_url = trailingslashit( get_template_directory_uri());

$images = array(
	$get_url . 'assets/image/featured-icon-1.svg',
    $get_url . 'assets/image/featured-icon-2.svg',
    $get_url . 'assets/image/featured-icon-3.svg',
);

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"id":98,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-98"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"textColor":"heading"} -->
<h5 class="wp-block-heading has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--x-small)">Core WP Blocks</h5>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Endless use-cases that make it highly flexible, adaptable, and scalable for everyone.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"id":102,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-102"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"textColor":"heading"} -->
<h5 class="wp-block-heading has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--x-small)">Easy Customizable</h5>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Endless use-cases that make it highly flexible, adaptable, and scalable for everyone.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:image {"id":103,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $images[2] ); ?>" alt="" class="wp-image-103"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"textColor":"heading"} -->
<h5 class="wp-block-heading has-heading-color has-text-color" style="margin-top:var(--wp--preset--spacing--x-small)">Growing Library</h5>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Endless use-cases that make it highly flexible, adaptable, and scalable for everyone.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->