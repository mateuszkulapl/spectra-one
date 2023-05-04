<?php
/**
 * Register tag cloud styles.
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since 0.0.1
 */

declare( strict_types=1 );

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


register_block_style(
	'core/tag-cloud',
	array(
		'name'         => SWT_PFX . '-tag-cloud-pill',
		'label'        => __( 'Pill', 'spectra-one' ),
		'inline_style' => '
            .is-style-' . SWT_PFX . '-tag-cloud-pill .tag-cloud-link {
                font-size: var(--wp--preset--font-size--x-small);
                color: var(--wp--preset--color--heading);
                font-weight: var(--wp--custom--font-weight--regular);
                border: 1px solid var(--wp--preset--color--outline);
                border-radius: var(--wp--custom--border-radius--x-large);
                padding: 2px 12px;
                margin-bottom: 5px;
            }
		',
	) 
);
