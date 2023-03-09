<?php
/**
 * Title: Template Search
 * Slug: spectra/template-search
 * Categories: template
 * Inserter: false
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query-title {"type":"search","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large","top":"var:preset|spacing|x-large"}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--small)"><!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"256px","align":"wide"} /--></div>
<!-- /wp:group -->

<!-- wp:post-terms {"term":"category","className":"is-style-swt-post-terms-pill"} /-->

<!-- wp:post-title {"level":4,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","right":"0","bottom":"var:preset|spacing|x-small","left":"0"}}}} /-->

<!-- wp:post-date {"isLink":true,"textColor":"body"} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"Newer Posts"} /-->

<!-- wp:query-pagination-next {"label":"Older Posts"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->