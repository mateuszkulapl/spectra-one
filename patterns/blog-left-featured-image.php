<?php
/**
 * Title: Blog left featured image
 * Slug: spectra/blog-left-featured-image
 * Categories: query
 * Keywords: Blog left featured image
 */
?>
<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"left","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"0","bottom":"var:preset|spacing|large","left":"0"}}}} -->
<h2 class="wp-block-heading alignwide has-text-align-left" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:0;padding-bottom:var(--wp--preset--spacing--large);padding-left:0">Latest Posts</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":97,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"align":"wide"} -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"},"margin":{"bottom":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--large)"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-featured-image {"isLink":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--small)"><!-- wp:post-terms {"term":"category","className":"is-style-swt-post-terms-pill"} /-->

<!-- wp:post-title {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","right":"0","bottom":"0","left":"0"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":""} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size"><!-- wp:post-author {"showAvatar":false,"showBio":false} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->