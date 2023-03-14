<?php
/**
 * Title: Three columns listing
 * Slug: spectra-one/three-columns-listing
 * Categories: featured
 * Keywords: Three columns listing
 */

$get_url = trailingslashit( get_template_directory_uri());

$images = array(
    $get_url . 'assets/image/check.svg',
    $get_url . 'assets/image/thumbnail-1.jpg',
    $get_url . 'assets/image/thumbnail-2.jpg',
    $get_url . 'assets/image/thumbnail-3.jpg',
    $get_url . 'assets/image/thumbnail-4.jpg',
    $get_url . 'assets/image/thumbnail-5.jpg',
    $get_url . 'assets/image/thumbnail-6.jpg',
    $get_url . 'assets/image/thumbnail-7.jpg',
    $get_url . 'assets/image/thumbnail-8.jpg',
    $get_url . 'assets/image/thumbnail-9.jpg',
);
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained","contentSize":"160px"}} -->
<div class="wp-block-group" style="border-style:none;border-width:0px"><!-- wp:group {"style":{"border":{"radius":"20px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|xx-small","right":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small","left":"var:preset|spacing|xx-small"},"blockGap":"var:preset|spacing|xx-small"},"typography":{"lineHeight":"1"}},"borderColor":"outline","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-border-color has-outline-border-color" style="border-width:1px;border-radius:20px;padding-top:var(--wp--preset--spacing--xx-small);padding-right:var(--wp--preset--spacing--xx-small);padding-bottom:var(--wp--preset--spacing--xx-small);padding-left:var(--wp--preset--spacing--xx-small);line-height:1"><!-- wp:image {"id":136,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-136"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}}} -->
<p class="has-text-align-center" style="font-size:14px">Easy installation</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","textColor":"heading"} -->
<h2 class="wp-block-heading has-text-align-center has-heading-color has-text-color">Carefully crafted design. No coding required.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Install any demo and template with a single click. Choose and mix up patterns and blocks.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":141,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-141" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"textColor":"heading"} -->
<h6 class="wp-block-heading has-heading-color has-text-color">Template name</h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Category</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":142,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $images[2] ); ?>" alt="" class="wp-image-142" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"textColor":"heading"} -->
<h6 class="wp-block-heading has-heading-color has-text-color">Template name</h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Category</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":143,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $images[3] ); ?>" alt="" class="wp-image-143" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"textColor":"heading"} -->
<h6 class="wp-block-heading has-heading-color has-text-color">Template name</h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Category</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":141,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $images[4] ); ?>" alt="" class="wp-image-141" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"textColor":"heading"} -->
<h6 class="wp-block-heading has-heading-color has-text-color">Template name</h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Category</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":142,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $images[5] ); ?>" alt="" class="wp-image-142" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"textColor":"heading"} -->
<h6 class="wp-block-heading has-heading-color has-text-color">Template name</h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Category</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":143,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $images[6] ); ?>" alt="" class="wp-image-143" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"textColor":"heading"} -->
<h6 class="wp-block-heading has-heading-color has-text-color">Template name</h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Category</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":141,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $images[7] ); ?>" alt="" class="wp-image-141" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"textColor":"heading"} -->
<h6 class="wp-block-heading has-heading-color has-text-color">Template name</h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Category</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":142,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $images[8] ); ?>" alt="" class="wp-image-142" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"textColor":"heading"} -->
<h6 class="wp-block-heading has-heading-color has-text-color">Template name</h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Category</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":143,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $images[9] ); ?>" alt="" class="wp-image-143" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"textColor":"heading"} -->
<h6 class="wp-block-heading has-heading-color has-text-color">Template name</h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Category</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->