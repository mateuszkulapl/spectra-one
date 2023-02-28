<?php
/**
 * Register Block Styles.
 *
 * @package Spectra
 * @author Brainstorm Force
 * @since x.x.x
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
				padding: var(--wp--preset--spacing--xx-small) var(--wp--preset--spacing--x-small);
				border-radius: 50px;
				color: var(--wp--preset--color--body);
				background-color: var(--wp--preset--color--surface);
				margin-right: var(--wp--preset--spacing--xx-small);
			}

			.is-style-' . SWT_PFX . '-post-terms-pill .wp-block-post-terms__separator {
				display: none;
			}

		',
	) 
);
