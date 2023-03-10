<?php
/**
 * Post Template Block.
 *
 * @package Spectra
 * @author Brainstorm Force
 * @since 0.0.1
 */

declare( strict_types=1 );

namespace Swt;

add_filter( 'render_block_core/post-template', SWT_NS . 'render_post_template', 10, 2 );

/**
 * Modifies front end HTML output of block.
 *
 * @since 0.0.1
 *
 * @param string $html  Block HTML.
 * @param array  $block Block data.
 *
 * @return string
 */
function render_post_template( string $html, array $block ): string {
	add_filter( 'swt_dynamic_theme_css', SWT_NS . 'post_template_inline_css' );
	return $html;
}


/**
 * Load Inline Css.
 *
 * @since 0.0.1
 * @param string $css Inline CSS.
 * @return string
 */
function post_template_inline_css( string $css ): string {

	$css_mobile_output = array(
		'.wp-block-post-template.is-flex-container .wp-block-post'          => array(
			'margin-bottom' => 'var(--wp--preset--spacing--small);',
		),
	);

	$css .= parse_css( $css_mobile_output, '', '782' );
	return $css;
}

