<?php
/**
 * Icomoon functions
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since 0.0.5
 */

declare(strict_types=1);

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_filter( 'render_block', SWT_NS . 'render_icomoon', 10, 2 );

/**
 * Icomoon render function.
 * 
 * @since 0.0.5
 * @param string $block_content Entire Block Content.
 * @param array  $block Block Properties As An Array.
 * @return string
 */
function render_icomoon( string $block_content, array $block ):string {

	if ( ( isset( $block['blockName'] ) && 'core/archives' === $block['blockName'] ) || ( isset( $block['blockName'] ) && 'core/categories' === $block['blockName'] ) ) {
		if ( isset( $block['attrs']['displayAsDropdown'] ) && true === $block['attrs']['displayAsDropdown'] ) {
			add_filter( 'swt_dynamic_theme_css', SWT_NS . 'icomooon_inline_css' );
		}
	}

	return $block_content;
}

/**
 * Load transparent header inline css.
 *
 * @since 0.0.5
 * @param string $css Inline CSS.
 * @return string
 */
function icomooon_inline_css( string $css ): string {

	$css_output = array(

		'@font-face' => array(
			'font-family'  => 'icomoon',
			'src'          => 'url("' . get_uri() . 'assets/font-icons/icomoon.eot")',
			'src'          => 'url("' . get_uri() . 'assets/font-icons/icomoon.eot") format("embedded-opentype"),url("' . get_uri() . 'assets/font-icons/icomoon.ttf") format("truetype"),url("' . get_uri() . 'assets/font-icons/icomoon.woff") format("woff"),url("' . get_uri() . 'assets/font-icons/icomoon.svg") format("svg")',
			'font-weight'  => 'normal',
			'font-style'   => 'normal',
			'font-display' => 'block',
		),
	);
	$css       .= parse_css( $css_output );
	return $css;
}
