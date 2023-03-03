<?php
/**
 * Title: Banner Wide
 * Slug: spectra/banner-wide
 * Categories: banner
 * Keywords: Banner Wide
 */

$get_url = trailingslashit( get_template_directory_uri());

$images = array(
    $get_url . 'assets/image/banner-wide-img.jpg',
);

?>
<!-- wp:group {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:0px;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:columns {"align":"wide","style":{"border":{"radius":"24px"},"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"secondary"} -->
<div class="wp-block-columns alignwide has-secondary-background-color has-background" style="border-radius:24px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:image {"id":110,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topRight":"20px","bottomLeft":"24px","bottomRight":"0px"}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-110" style="border-top-right-radius:20px;border-bottom-left-radius:24px;border-bottom-right-radius:0px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"var:preset|spacing|xx-large","padding":{"right":"var:preset|spacing|small","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","top":"var:preset|spacing|x-large"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"style":{"typography":{"letterSpacing":"-1px"}},"textColor":"background"} -->
<h2 class="wp-block-heading has-background-color has-text-color" style="letter-spacing:-1px">Customize your website visually and see the changes instantly!</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"textColor":"background"} -->
<h4 class="wp-block-heading has-background-color has-text-color">100+</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"surface","fontSize":"small"} -->
<p class="has-surface-color has-text-color has-small-font-size">Block patterns</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"textColor":"background"} -->
<h4 class="wp-block-heading has-background-color has-text-color">20+</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"surface","fontSize":"small"} -->
<p class="has-surface-color has-text-color has-small-font-size">Style variations</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"textColor":"background"} -->
<h4 class="wp-block-heading has-background-color has-text-color">48</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"surface","fontSize":"small"} -->
<p class="has-surface-color has-text-color has-small-font-size">Pre-built templates</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->