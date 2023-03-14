<?php
/**
 * Register Block Styles.
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

$swt_parent_class = '.is-style-' . SWT_PFX . '-search-minimal';

register_block_style(
	'core/search',
	array(
		'name'         => SWT_PFX . '-search-minimal',
		'label'        => __( 'Minimal', 'spectra-one' ),
		'inline_style' => '
            ' . $swt_parent_class . '.wp-block-search__button-inside .wp-block-search__button {
                color: var(--wp--preset--color--heading);
                background-color: var(--wp--preset--color--background);
                border-radius: 0px;
                margin: 0;
                padding: var(--wp--preset--spacing--xx-small) var(--wp--preset--spacing--x-small);
            }

            ' . $swt_parent_class . '.wp-block-search__button-inside .wp-block-search__button:hover {
                color: var(--wp--preset--color--heading);
                background-color: var(--wp--preset--color--background);
            }

            ' . $swt_parent_class . '.wp-block-search__button-inside .wp-block-search__inside-wrapper {
                padding: 4px;
                border: 1px solid var(--wp--preset--color--outline);
                border-radius: var(--wp--custom--border-radius--small);
            }

            ' . $swt_parent_class . ' .wp-block-search__input {
                color: var(--wp--preset--color--heading);
                background-color: var(--wp--preset--color--background);
                border-radius: 0px;
                border: 0;
            }

            ' . $swt_parent_class . '.wp-block-search__button-outside .wp-block-search__input, .wp-block-search__no-button .wp-block-search__input{
                border: 1px solid var(--wp--preset--color--outline);
                border-radius: var(--wp--custom--border-radius--small);
            }
        ',
	)
);
