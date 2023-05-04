<?php
/**
 * Title: Template page sidebar
 * Slug: spectra-one/template-page-sidebar
 * Categories: template
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","className":"swt-block-post-banner-group","layout":{"type":"constrained"}} -->
<div class="wp-block-group swt-block-post-banner-group has-primary-background-color has-background" style="margin-top:0;margin-bottom:0"><!-- wp:post-title {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|large"}}},"textColor":"background"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-large)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"75%","style":{"spacing":{"padding":{"right":"var:preset|spacing|small"}}}} -->
<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--small);flex-basis:75%"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:post-featured-image /-->

<!-- wp:post-content /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium"}}},"backgroundColor":"surface","className":"swt-block-comment-group","layout":{"type":"constrained"}} -->
<div class="wp-block-group swt-block-comment-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:post-comments-form /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","style":{"spacing":{"padding":{"left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-column" style="padding-left:var(--wp--preset--spacing--small);flex-basis:25%"><!-- wp:template-part {"slug":"sidebar","theme":"spectra-one"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->