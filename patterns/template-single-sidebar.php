<?php
/**
 * Title: Template single sidebar
 * Slug: spectra-one/template-single-sidebar
 * Categories: pages
 * Keywords: single sidebar, post sidebar
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}}},"backgroundColor":"foreground","className":"swt-block-post-banner-group","layout":{"type":"constrained"}} -->
<div class="wp-block-group swt-block-post-banner-group has-foreground-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:post-title {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"textColor":"white"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"textColor":"white","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-white-color has-text-color"><!-- wp:post-author {"showAvatar":false} /-->

<!-- wp:paragraph -->
<p>·</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"format":"M j, Y"} /-->

<!-- wp:paragraph -->
<p>·</p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-large)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"75%","style":{"spacing":{"padding":{"right":"var:preset|spacing|small"}}}} -->
<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--small);flex-basis:75%"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:post-featured-image /-->

<!-- wp:post-content /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:post-terms {"term":"post_tag","className":"is-style-swt-post-terms-pill"} /-->

<!-- wp:separator {"backgroundColor":"outline","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-outline-color has-alpha-channel-opacity has-outline-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:post-author {"showBio":true,"className":"is-style-swt-post-author-simple","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:comments-title {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} /-->

<!-- wp:comment-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|medium","top":"var:preset|spacing|medium"}},"border":{"top":{"width":"1px","color":"var:preset|color|outline"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--outline);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":32,"style":{"border":{"radius":"20px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:comment-author-name {"fontSize":"small"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:comment-date {"format":"M j, Y","isLink":false,"textColor":"neutral","fontSize":"x-small"} /-->

<!-- wp:comment-edit-link {"fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:comment-reply-link {"fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","style":{"spacing":{"padding":{"left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-column" style="padding-left:var(--wp--preset--spacing--small);flex-basis:25%"><!-- wp:template-part {"slug":"sidebar","theme":"spectra-one"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->