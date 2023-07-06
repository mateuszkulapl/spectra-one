<?php
/**
 * Register product price block styles.
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since x.x.x
 */

declare( strict_types=1 );

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$swt_parent_class = '.is-style-' . SWT_PFX . '-product-price-style-1';

register_block_style(
	'woocommerce/product-price',
	array(
		'name'         => SWT_PFX . '-button-secondary',
		'label'        => __( 'Bold', 'spectra-one' ),
		'inline_style' => '

			' . $swt_parent_class . ' {
				font-weight: bold;
			}
		',
	)
);