<?php
/**
 * Register archive Styles.
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

$swt_parent_class = '.is-style-' . SWT_PFX . '-archives-minimal';

register_block_style(
	'core/archives',
	array(
		'name'         => SWT_PFX . '-archives-minimal',
		'label'        => __( 'Minimal', 'spectra-one' ),
		'inline_style' => '

            ' . $swt_parent_class . ' {
				padding: 0;
				list-style: none;
            }

			' . $swt_parent_class . ' .cat-item {
				font-size: var(--wp--preset--font-size--small);
				margin-bottom: var(--wp--preset--spacing--xx-small);
            }
			
			' . $swt_parent_class . '.wp-block-archives-dropdown select{
				padding: 0px 0px 0px 18px;
				border: 1px solid #E6E9EF;
				border-radius: 8px;
				width: 100%;
				height: 60px;
				font-style: normal;
				font-weight: 400;
				font-size: 16px;
				line-height: 26px;
				color: #1F2937;
            }

			' . $swt_parent_class . '.wp-block-archives-dropdown {
				position: relative;
			}

			' . $swt_parent_class . '.wp-block-archives-dropdown:after {
				content: "\e900";
				position: absolute;
				font-family: "icomoon" !important;
				font-size: 18px;
				right: 25px;
				top: 50%;
				transform: translateY(-50%);
				font-style: normal;
				font-weight: normal;
				font-variant: normal;
				text-transform: none;
				line-height: 1;
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
				pointer-events: none;
			}

			' . $swt_parent_class . ' select {
				appearance: none;
			}
		',
	) 
);
