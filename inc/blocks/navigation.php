<?php
/**
 * Navigation functions
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since 0.0.6
 */

declare(strict_types=1);

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_filter( 'render_block', SWT_NS . 'render_navigation_block', 10, 2 );

/**
 * Navigation render function.
 *
 * @param string $block_content Entire Block Content.
 * @param array  $block Block Properties As An Array.
 * @return string
 */
function render_navigation_block( string $block_content, array $block ):string {

    if ( isset( $block['blockName'] ) && 'core/navigation' === $block['blockName'] ) {
        add_filter( 'swt_dynamic_theme_js', SWT_NS . 'navigation_inline_js' );
	}

	return $block_content;
}

/**
 * Navigation inline js.
 *
 * @since 0.0.6
 * @param string $js Inline JS.
 * @return string
 */
function navigation_inline_js( string $js ): string {
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

    const navigationItems = document.querySelectorAll('.wp-block-navigation-submenu__toggle');

        if( navigationItems ) {
            navigationItems.forEach( single => {
                single.addEventListener("click", ( single2 ) => {
                    single2.currentTarget.previousSibling.classList.toggle('is-menu-open');
                    single2.currentTarget.nextSibling.classList.toggle('is-menu-open');
                });
            });
        }

	});
JS;
	$js       .= $inline_js;
	return $js;
}
