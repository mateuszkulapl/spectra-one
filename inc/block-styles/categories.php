<?php
/**
 * Register Block Styles.
 *
 * @package Spectra
 * @author Brainstorm Force
 * @since 0.0.1
 */

declare( strict_types=1 );

namespace Swt;

register_block_style(
	'core/post-terms',
	array(
		'name'         => SWT_PFX . '-post-terms-pill',
		'label'        => __( 'Pill', 'spectra' ),
		'inline_style' => '
			.is-style-' . SWT_PFX . '-post-terms-pill a {
				padding: 6px 12px;
				border-radius: var(--wp--custom--border-radius--full);
				color: var(--wp--preset--color--body);
				background-color: var(--wp--preset--color--surface);
				margin-right: var(--wp--preset--spacing--xx-small);
				line-height: var(--wp--custom--line-height--initial);
			}

			.is-style-' . SWT_PFX . '-post-terms-pill .wp-block-post-terms__separator {
				display: none;
			}
		',
	) 
);
