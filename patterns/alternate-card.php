<?php
/**
 * Title: Alternate card
 * Slug: spectra-one/alternate-card
 * Categories: text
 * Keywords: Alternate card
 */

$get_url = trailingslashit( get_template_directory_uri());

$images = array(
    $get_url . 'assets/image/card-img.png',
    $get_url . 'assets/image/card-icon-1.svg',
    $get_url . 'assets/image/card-icon-2.svg',
);

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","right":"0","left":"0"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--large);padding-right:0;padding-bottom:var(--wp--preset--spacing--large);padding-left:0"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"560px","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"left","textColor":"heading"} -->
<h2 class="wp-block-heading has-text-align-left has-heading-color has-text-color">Everything you need to create amazing websites</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Interactive design tools and its many customization options to customize anything and everything needed to build the fully-functional website of your dreams.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"16px"}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:image {"id":148,"width":512,"height":320,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-148" style="border-radius:8px" width="512" height="320"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"textColor":"heading"} -->
<h4 class="wp-block-heading has-heading-color has-text-color">Huge Design Collection</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"var:preset|spacing|small"}}}} -->
<p style="padding-right:var(--wp--preset--spacing--small)">Imperdiet etiam scelerisque convallis pulvinar laoreet. Enim imperdiet nullam ullamcorper tempus vivamus eget leo elementum. Sed platea pellentesque nulla egestas porttitor.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"16px"}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:image {"id":149,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-149" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"right":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--70)"><!-- wp:heading {"level":4,"textColor":"heading"} -->
<h4 class="wp-block-heading has-heading-color has-text-color">Outstanding Performance</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"var:preset|spacing|small"}}}} -->
<p style="padding-right:var(--wp--preset--spacing--small)">In nisl enim vulputate varius. Nec sodales elit duis ornare. Non lectus elementum maecenas sit eu orci proin mauris netus.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"16px"}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:image {"id":150,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $images[2] ); ?>" alt="" class="wp-image-150" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"textColor":"heading"} -->
<h4 class="wp-block-heading has-heading-color has-text-color">Outstanding Performance</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"var:preset|spacing|small"}}}} -->
<p style="padding-right:var(--wp--preset--spacing--small)">In nisl enim vulputate varius. Nec sodales elit duis ornare. Non lectus elementum maecenas sit eu orci proin mauris netus.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"16px"}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"right":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--70)"><!-- wp:heading {"level":4,"textColor":"heading"} -->
<h4 class="wp-block-heading has-heading-color has-text-color">Huge Design Collection</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"var:preset|spacing|small"}}}} -->
<p style="padding-right:var(--wp--preset--spacing--small)">Imperdiet etiam scelerisque convallis pulvinar laoreet. Enim imperdiet nullam ullamcorper tempus vivamus eget leo elementum. Sed platea pellentesque nulla egestas porttitor.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"id":148,"width":512,"height":320,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-148" style="border-radius:8px" width="512" height="320"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->