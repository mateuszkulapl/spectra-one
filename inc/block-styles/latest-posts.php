<?php
/**
 * Register Latest post Styles.
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

$swt_parent_class = '.is-style-' . SWT_PFX . '-latest-posts-simple';

register_block_style(
	'core/latest-posts',
	array(
		'name'         => SWT_PFX . '-latest-posts-simple',
		'label'        => __( 'Simple image right', 'spectra-one' ),
		'inline_style' => '

            ' . $swt_parent_class . ' > li {
                margin-bottom: var(--wp--preset--spacing--x-small);
            }

             ' . $swt_parent_class . '.swt-has-featured-image > li {
                padding-right: 75px;
                position: relative;
			}

            ' . $swt_parent_class . ' .wp-block-latest-posts__featured-image {
                position: absolute;
                right: 0;
            }

            ' . $swt_parent_class . ' .wp-block-latest-posts__featured-image img {
                object-fit: cover;
                width: 56px;
                height: 56px;
            }

            ' . $swt_parent_class . ' .wp-block-latest-posts__post-title {
                font-size: var(--wp--preset--font-size--small);
                font-weight: var(--wp--custom--font-weight--medium);
                display: block;
            }

            ' . $swt_parent_class . ' .wp-block-latest-posts__post-author,' . $swt_parent_class . ' .wp-block-latest-posts__post-date {
                display: inline-block;
                font-size: var(--wp--preset--font-size--x-small); 
            }

            ' . $swt_parent_class . ' .wp-block-latest-posts__post-author + time:before {
                content:"·";
                padding-right: 5px;
                padding-left: 0;
            }

		',
	) 
);
