<?php

declare( strict_types=1 );

namespace Spectra\Theme;

add_filter( 'render_block', SWT_NS . 'swt_header', 10, 2 );

/**
 * Header support.
 *
 * @param $block_content
 * @param $block
 * @return string
 */
function swt_header( string $block_content, array $block){

    if( isset( $block['attrs']['SWTStickyHeader'] ) && true === $block['attrs']['SWTStickyHeader'] ) {
        $dom   = dom( $block_content );
		$sticky_item = get_dom_element( 'header', $dom );

		if ( ! $sticky_item ) {
			return $block_content;
		}

        $classes = $sticky_item->getAttribute( 'class' );
        $sticky_item->setAttribute( 'class', $classes . ' sticky-header' );

        $block_content = $dom->saveHTML();

        add_filter( 'swt_dynamic_theme_css', SWT_NS . 'swt_header_css' );
        add_filter( 'swt_dynamic_theme_js', SWT_NS . 'swt_header_js' );
    }

    return $block_content;
}

/**
 * Load inline css.
 *
 * @return string
 */
function swt_header_css($css):string {

    // Sticky header option.
    $css_output = array(
        '.sticky-header' => array(
            'position' => 'fixed',
            'top' => '0',
            'left' => '0',
            'width' => '100%'
        ),
    );
    $css .= swt_parse_css($css_output);
    return $css;
}

/**
 * Load inline js.
 *
 * @return string
 */
function swt_header_js():string {
    $js = <<<JS
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
            const header = document.querySelector( '.sticky-header' );
            const body = document.querySelector( 'body' );
            if( header ) {
                const height = header.offsetHeight;
                if( height ) {
                    body.style.paddingTop = height + 'px';
                }
            }
        });
    JS;

    return $js;
}