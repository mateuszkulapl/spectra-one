<?php
/**
 * Title: Template page sidebar
 * Slug: spectra-one/template-page-sidebar
 * Categories: template
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-large)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:post-title /-->
<!-- wp:post-content /--></div>
<!-- /wp:column -->
<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%">
<!-- wp:template-part {"slug":"sidebar","theme":"spectra-one"} /-->
</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->