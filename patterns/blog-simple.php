<?php
/**
 * Title: Blog Simple
 * Slug: spectra/blog-simple
 * Categories: posts
 * Keywords: Blog Simple
 */
?>
<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"left","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"0","bottom":"var:preset|spacing|large","left":"0"}}}} -->
<h2 class="alignwide has-text-align-left" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:0;padding-bottom:var(--wp--preset--spacing--large);padding-left:0">Latest Posts</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":97,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"align":"wide"} -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"},"margin":{"bottom":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--large)"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--small)"><!-- wp:post-terms {"term":"category","className":"is-style-swt-post-terms-pill"} /-->

<!-- wp:post-title {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","right":"0","bottom":"0","left":"0"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":""} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-author {"showAvatar":false,"showBio":false} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:post-featured-image {"isLink":true} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->