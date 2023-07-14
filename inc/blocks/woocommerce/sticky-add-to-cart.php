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
	$sticky_add_to_cart_condition = ( isset( $block['blockName'] ) && 'swt/sticky-add-to-cart' === $block['blockName'] );

        if ( is_product() && $sticky_add_to_cart_condition ) {


            if( isset( $block['attrs']['SWTPosition'] ) && 'top' === $block['attrs']['SWTPosition'] ) {
                add_filter( 'swt_dynamic_theme_css', function(string $css):string {
                    $css .= parse_css(
						array(
							'.swt-sticky-add-to-cart' => array(
								'top' => '0'
							),
							'.swt-sticky-add-to-cart:not(.is-active)' => array(
								'transform' => 'translateY(-100%)'
							),
						),
					);

                    return $css;
                });
            } else {
                add_filter( 'swt_dynamic_theme_css', function(string $css):string {
					$css .= parse_css(
						array(
							'.swt-sticky-add-to-cart' => array(
								'bottom' => '0',
								'top' => 'initial !important'
							),
							'.swt-sticky-add-to-cart:not(.is-active)' => array(
								'transform' => 'translateY(100%)'
							),
						),
					);
                    return $css;
                });
            }

		add_filter( 'swt_dynamic_theme_css', SWT_NS . 'add_to_cart_block_inline_css' );
		add_filter( 'swt_dynamic_theme_js', SWT_NS . 'single_product_sticky_add_to_cart_js' );
    }

	return $block_content;
}

/**
 * Load add to cart inline css.
 *
 * @since x.x.x
 * @param string $css Inline CSS.
 * @return string
 */
function add_to_cart_block_inline_css( string $css ): string {
    $parent_class = '.swt-sticky-add-to-cart';

	$css_output = array(
		$parent_class => array(
			'position' => 'fixed',
			 rtl_css( 'left' ) => '0',
			'width' => '100%',
			'z-index' => '99',
			'margin-top' => '0',
			'box-shadow' => '0px -3px 24px -8px rgba(0, 0, 0, 0.08)',
			'transition' => '.2s ease-in',
		),

        $parent_class.' .cart' => array(
            'display' => 'flex',
            'align-items' => 'center',
		),

        $parent_class.' .quantity' => array(
            'padding-'. rtl_css( 'right' ) .'' => 'var(--wp--preset--spacing--small)',
		),

		$parent_class.' .quantity .qty ' => array(
			'border' => '1px solid var(--wp--preset--color--outline)',
			'border-radius' => 'var(--wp--custom--border-radius--x-small)',
		),

		$parent_class.' .wp-block-woocommerce-product-price' => array(
			'font-weight' => 'var(--wp--custom--font-weight--semi-bold)',
			'color' => 'var(--wp--preset--color--heading)'
		),

		$parent_class.' .wc-block-components-product-price' => array(
			'padding-'. rtl_css( 'right' ) .'' => 'var(--wp--preset--spacing--xxx-small)',
		),

		$parent_class.' .wp-block-woocommerce-product-price ins' => array(
			'text-decoration' => 'none',
		),

		$parent_class.' form.grouped_form .woocommerce-grouped-product-list, ' . $parent_class.' form.variations_form .variations, ' . $parent_class.' form.variations_form .quantity' => array(
			'display' => 'none',
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
			function docReady(fn) {
				// see if DOM is already available
				if (document.readyState === "complete" || document.readyState === "interactive") {
					// call on next available tick
					setTimeout(fn, 1);
				} else {
					document.addEventListener("DOMContentLoaded", fn);
				}
			}

			function wpAdminPaddingOffset() {
				const wpAdminBar = document.querySelector('#wpadminbar');
				const header = document.querySelector( '.swt-sticky-add-to-cart' );

				if( header && wpAdminBar ) {
					header.style.top = wpAdminBar.offsetHeight + 'px';
				}
			}

			function stickyAddToCart() {
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

				if( SWTSmoothScrollBtn ) {

				const checkProductType = SWTStickyAddToCart.querySelector('form.cart');

				if( checkProductType && ( checkProductType.classList.contains('variations_form') || checkProductType.classList.contains('grouped_form') ) ) {

					setTimeout(() => {
						SWTSmoothScrollBtn.classList.remove('wc-variation-selection-needed');
						SWTSmoothScrollBtn.classList.remove('disabled');
					}, 500);

						SWTSmoothScrollBtn.addEventListener('click', function (e) {
							e.preventDefault();
							document.querySelector('.product').scrollIntoView({
								behavior: 'smooth',
							});
						});
					}
				}
			}

			window.addEventListener('resize', function(event) {
				wpAdminPaddingOffset();
			}, true);

		docReady(function() {
			stickyAddToCart();
			wpAdminPaddingOffset();
		});
	JS;

	$js .= $inline_js;
	return $js;
}
