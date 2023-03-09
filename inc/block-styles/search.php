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

$swt_parent_class = '.is-style-' . SWT_PFX . '-search-minimal';

register_block_style(
	'core/search',
	array(
		'name'         => SWT_PFX . '-search-minimal',
		'label'        => __( 'Minimal', 'spectra' ),
		'inline_style' => '
            ' . $swt_parent_class . ' .wp-block-search__button {
                background-color: var(--wp--preset--color--transparent);
                color: var(--wp--preset--color--heading);
                padding: var(--wp--preset--spacing--xx-small);
                margin-' . rtl_css( 'left' ) . ': 0;
            }

            ' . $swt_parent_class . ' .wp-block-search__button:hover {
                background-color: var(--wp--preset--color--transparent);
            }

            ' . $swt_parent_class . ' .wp-block-search__inside-wrapper {
                padding: 0;
                border-color: var(--wp--preset--color--outline);
                border-radius: var(--wp--custom--border-radius--small);
            }

            ' . $swt_parent_class . ' .wp-block-search__input {
                padding-' . rtl_css( 'left' ) . ': var(--wp--preset--spacing--xx-small);
                border-radius: var(--wp--custom--border-radius--small);
                color: var(--wp--preset--color--body);
            }

            ' . $swt_parent_class . ' .wp-block-search__input::placeholder { 
                color: var(--wp--preset--color--neutral);
                opacity: 1;
            }
        ',
	)
);
