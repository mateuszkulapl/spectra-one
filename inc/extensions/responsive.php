<?php
/**
 * Responsive Support for Gutenburg Blocks
 *
 * @package Spectra
 * @author Brainstorm Force
 * @since 0.0.1
 */

declare(strict_types=1);

namespace Swt;

add_filter( 'render_block', SWT_NS . 'render_responsive_blocks', 10, 2 );

/**
 *  Render Responsive Blocks.
 *
 * @since 0.0.1
 * @param string $block_content Entire Block Content.
 * @param array  $block Block Properties As An Array.
 * @return string
 */
function render_responsive_blocks( string $block_content, array $block ):string { 
	$responsive_classes = '';

	if ( isset( $block['attrs']['UAGHideDesktop'] ) && true === $block['attrs']['UAGHideDesktop'] ) {
		$responsive_classes .= ' swt-hide-desktop';
	}

	if ( isset( $block['attrs']['UAGHideTab'] ) && true === $block['attrs']['UAGHideTab'] ) {
		$responsive_classes .= ' swt-hide-tablet';
	}

	if ( isset( $block['attrs']['UAGHideMob'] ) && true === $block['attrs']['UAGHideMob'] ) {
		$responsive_classes .= ' swt-hide-mobile';
	}

	$dom        = dom( $block_content );
	$first_item = get_dom_element( '*', $dom );

	if ( ! $first_item ) {
		return $block_content;
	}

	$classes = $first_item->getAttribute( 'class' );

	if ( $responsive_classes ) {
		$first_item->setAttribute( 'class', $classes . $responsive_classes );
		$block_content = $dom->saveHTML();
	}

	add_filter( 'swt_dynamic_theme_css', SWT_NS . 'responsive_blocks_inline_css' );

	return $block_content;
}

/**
 * Responsive Blocks Inline CSS.
 *
 * @since 0.0.1
 * @param string $css Inline CSS.
 * @return string
 */
function responsive_blocks_inline_css( $css ): string {

	$css_desktop_output = array(
		'.swt-hide-desktop' => array(
			'display' => 'none !important',
		),
	);

	$css .= parse_css( $css_desktop_output, '1025', '' );

	$css_tablet_output = array(
		'.swt-hide-tablet' => array(
			'display' => 'none !important ',
		),
	);

	$css .= parse_css( $css_tablet_output, '783', '1024' );

	$css_mobile_output = array(
		'.swt-hide-mobile' => array(
			'display' => 'none !important',
		),
	);

	$css .= parse_css( $css_mobile_output, '', '782' );

	return $css;
}
