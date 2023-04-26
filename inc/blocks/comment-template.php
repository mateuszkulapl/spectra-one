<?php
/**
 * Comment template block.
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since 0.0.5
 */

declare( strict_types=1 );

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_filter( 'render_block_core/comment-template', SWT_NS . 'render_comment_template_block', 10, 2 );


/**
 * Modifies front end HTML output of block.
 *
 * @since 0.0.5
 *
 * @param string $html  Block HTML.
 * @param array  $block Block data.
 *
 * @return string
 */
function render_comment_template_block( string $html, array $block ): string {

	if ( isset( $block['blockName'] ) && 'core/comment-template' === $block['blockName'] ) {
		add_filter( 'swt_dynamic_theme_css', SWT_NS . 'comment_template_inline_css' );
	}
	return $html;
}


/**
 * Load Inline Css.
 *
 * @since 0.0.5
 * @param string $css Inline CSS.
 * @return string
 */
function comment_template_inline_css( string $css ): string {

	$css_output = array(
		'.comment-form-comment textarea' => array(
			'position' => 'relative',
			'z-index'  => '1',
		),
	);

	$css .= parse_css( $css_output );
	return $css;
}
