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
		'name'         => SWT_TS . '-pill',
		'label'        => __( 'Pill', 'spectra' ),
		'inline_style' => '
			.is-style-' . SWT_TS . '-pill a {
				padding: var(--wp--preset--spacing--xx-small);
				border-radius: 13px;
				color: var(--wp--preset--color--body);
				background-color: var(--wp--preset--color--surface);
			}
		',
	) 
);
