<?php
/**
 * Title: Header left menu
 * Slug: spectra-one/header-left-menu
 * Categories: header
 * Block Types: core/template-part/header
 */

 $get_url = trailingslashit(get_template_directory_uri());

 $images = [
     $get_url . "assets/image/logo-white.svg",
 ];

?>
<!-- wp:group {"backgroundColor":"foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-foreground-background-color has-background"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:image {"id":849,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full">><a href="<?php echo esc_url( get_home_url() ); ?>"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-849"/></a></figure>
<!-- /wp:image -->
<!-- wp:navigation {"textColor":"white","overlayMenu":"never","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"SWTHideMob":true} -->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Home', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group -->
<!-- wp:buttons {"SWTHideMob":true} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-swt-button-inverse"} -->
<div class="wp-block-button is-style-swt-button-inverse"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'spectra-one' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:navigation {"textColor":"white","overlayMenu":"always","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"SWTHideDesktop":true,"SWTHideTab":true} -->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Home', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'spectra-one' ); ?>","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->