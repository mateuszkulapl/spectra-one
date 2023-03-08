<?php
/**
 * Header functions
 *
 * @package Spectra
 * @author Brainstorm Force
 * @since x.x.x
 */

declare(strict_types=1);

namespace Swt;

add_filter( 'render_block', SWT_NS . 'render_header', 10, 2 );

/**
 * Header support.
 *
 * @param string $block_content Entire Block Content.
 * @param array  $block Block Properties As An Array.
 * @return string
 */
function render_header( string $block_content, array $block ):string { 
	if ( isset( $block['attrs']['SWTStickyHeader'] ) && true === $block['attrs']['SWTStickyHeader'] ) {
		$dom    = dom( $block_content );
		$header = get_dom_element( 'header', $dom );

		if ( ! $header ) {
			return $block_content;
		}

		$classes = $header->getAttribute( 'class' );
		$header->setAttribute( 'class', $classes . ' swt-sticky-header' );

		$block_content = $dom->saveHTML();

		add_filter( 'swt_dynamic_theme_css', SWT_NS . 'header_inline_css' );

		if ( ! ( isset( $block['attrs']['SWTTransparentHeader'] ) ) || ( isset( $block['attrs']['SWTTransparentHeader'] ) && false === $block['attrs']['SWTTransparentHeader'] ) ) {
			add_filter( 'swt_dynamic_theme_js', SWT_NS . 'header_inline_js' );
		}
	}

	if ( isset( $block['attrs']['SWTTransparentHeader'] ) && true === $block['attrs']['SWTTransparentHeader'] ) {
		$dom    = dom( $block_content );
		$header = get_dom_element( 'header', $dom );

		if ( ! $header ) {
			return $block_content;
		}

		$classes = $header->getAttribute( 'class' );
		$header->setAttribute( 'class', $classes . ' swt-transparent-header' );

		$block_content = $dom->saveHTML();

		add_filter( 'swt_dynamic_theme_css', SWT_NS . 'header_inline_transparent_css' );
		add_filter( 'swt_dynamic_theme_js', SWT_NS . 'header_inline_transparent_js' );
	}

	return $block_content;
}

/**
 * Load header Inline Css.
 *
 * @since x.x.x
 * @param string $css Inline CSS.
 * @return string
 */
function header_inline_css( string $css ): string {

	// Sticky header option.
	$css_output = array(
		'.swt-sticky-header' => array(
			'position' => 'fixed',
			'top'      => '0',
			'left'     => '0',
			'width'    => '100%',
			'z-index'  => '999',
		),
	);
	$css       .= parse_css( $css_output );
	return $css;
}

/**
 * Load Header Inline Js.
 *
 * @since x.x.x
 * @param string $js Inline JS.
 * @return string
 */
function header_inline_js( string $js ): string {
	$inline_js = <<<JS
	function docReady(fn) {
		// see if DOM is already available
		if (document.readyState === "complete" || document.readyState === "interactive") {
			// call on next available tick
			setTimeout(fn, 1);
		} else {
			document.addEventListener("DOMContentLoaded", fn);
		}
	}
	docReady(function() {
		// Sticky header option.
		const header = document.querySelector( '.swt-sticky-header' );
		const body = document.querySelector( 'body' );
		if( header ) {
			const height = header.offsetHeight;
			if( height ) {
				body.style.paddingTop = height + 'px';
			}
		}
	});
JS;
	$js       .= $inline_js;
	return $js;
}


/**
 * Load Transparent Header Inline Js.
 *
 * @since x.x.x
 * @param string $js Inline JS.
 * @return string
 */
function header_inline_transparent_js( string $js ): string {
	$inline_js = <<< JS
	function docReady(fn) {
		// see if DOM is already available
		if (document.readyState === "complete" || document.readyState === "interactive") {
			// call on next available tick
			setTimeout(fn, 1);
		} else {
			document.addEventListener("DOMContentLoaded", fn);
		}
	}
	docReady(function(){
		// Transparent Header
		const scroll = document.querySelector( '.swt-transparent-header' );
		const body = document.querySelector( 'body' );
		body.classList.add("swt-on-top");
		window.addEventListener('scroll', function() {
			const scroll = document.documentElement.scrollTop
			if (scroll > 5) {
				body.classList.remove("swt-on-top");
			} else {
				body.classList.add("swt-on-top")
			}
		});
	});
JS;
	$js       .= $inline_js;
	return $js;
}

/**
 * Load Transparent Header Inline Css.
 *
 * @since x.x.x
 * @param string $css Inline CSS.
 * @return string
 */
function header_inline_transparent_css( string $css ): string {

	// Sticky header option.
	$css_output = array(
		'.swt-transparent-header .has-foreground-background-color' => array(
			'transition' => '.2s',
		),

		'.swt-on-top .swt-transparent-header .has-foreground-background-color' => array(
			'background' => 'transparent !important',
		),
	);
	$css .= parse_css( $css_output );
	return $css;
}
