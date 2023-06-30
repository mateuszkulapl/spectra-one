<?php
/**
 * Add to cart form
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since x.x.x
 */

declare(strict_types=1);

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_filter( 'render_block', SWT_NS . 'render_add_to_cart_form', 10, 2 );

/**
 * Add to cart form render function.
 *
 * @param string $block_content Entire Block Content.
 * @param array  $block Block Properties As An Array.
 * @return string
 */
function render_add_to_cart_form( string $block_content, array $block ):string {

	/** @psalm-suppress PossiblyFalseArgument */ // phpcs:ignore PossiblyFalseArgument, Generic.Commenting.DocComment.MissingShort
	$sticky_add_to_cart_condition = ( isset( $block['blockName'] ) && isset( $block['attrs']['SWTStickyAddToCart'] ) && 'woocommerce/add-to-cart-form' === $block['blockName'] && true === $block['attrs']['SWTStickyAddToCart'] );

	if ( is_product() && $sticky_add_to_cart_condition ) {
		add_action( 'wp_footer', SWT_NS . 'single_product_sticky_add_to_cart' );
		add_filter( 'swt_dynamic_theme_css', SWT_NS . 'add_to_cart_block_inline_css' );
		add_filter( 'swt_dynamic_theme_js', SWT_NS . 'single_product_sticky_add_to_cart_js' );
	}

	return $block_content;
}

/**
 * Sticky add to cart markup.
 *
 * @since x.x.x
 * @return void
 */
function single_product_sticky_add_to_cart() {
	ob_start();
	block_template_part( 'sticky-add-to-cart' );
	echo ob_get_clean();
}

/**
 * Load add to cart inline css.
 *
 * @since x.x.x
 * @param string $css Inline CSS.
 * @return string
 */
function add_to_cart_block_inline_css( string $css ): string {

	$css_output = array(
		'.swt-sticky-add-to-cart' => array(
			'position' => 'fixed',
			'bottom' => '0',
			'left' => '0',
			'width' => '100%',
			'z-index' => '9',
			'box-shadow' => '0px -3px 24px -8px rgba(0, 0, 0, 0.08)',
			'transition' => '.2s ease-in-out',
		),
	);
	$css       .= parse_css( $css_output );
	return $css;
}

/**
 * Load header wp_admin_bar spacing inline js.
 *
 * @since x.x.x
 * @param string $js Inline JS.
 * @return string
 */
function single_product_sticky_add_to_cart_js( string $js ): string {
	$inline_js = <<<JS
		docReady(function() {

			// Triggers sticky add to cart on scroll.
			const SWTStickyAddToCart = document.querySelector( ".swt-sticky-add-to-cart" );

			if( SWTStickyAddToCart ) {
				const scrollOffset = document.querySelector( '.product .single_add_to_cart_button' ).offsetTop;
				window.addEventListener( "scroll", function() {
					if ( window.scrollY >= scrollOffset ) {
						SWTStickyAddToCart.classList.add('is-active');
					} else {
						SWTStickyAddToCart.classList.remove('is-active');
					}
				})
			}

			// Smooth scrolls if select option button is active.
			const SWTSmoothScrollBtn = document.querySelector( ".swt-sticky-add-to-cart .single_add_to_cart_button" );
			
			// if( SWTSmoothScrollBtn ) {
			// 	SWTSmoothScrollBtn.addEventListener('click', function (e) {
			// 		e.preventDefault();
			// 		document.querySelector('.').scrollIntoView({
			// 			behavior: 'smooth',
			// 		});
			// 	});
			// }

		});

	JS;

	$js .= $inline_js;
	return $js;
}
