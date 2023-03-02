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

$parent_class = '.is-style-' . SWT_PFX . '-search-minimal';

register_block_style(
	'core/search',
	array(
		'name'         => SWT_PFX . '-search-minimal',
		'label'        => __( 'Minimal', 'spectra' ),
		'inline_style' => '
			'. $parent_class . ' .wp-block-search__button {
                background-color: transparent;
                color: var(--wp--preset--color--heading);
                padding: var(--wp--preset--spacing--xx-small);
			}

            '. $parent_class . ' .wp-block-search__button:hover {
                background-color: transparent;
            }

            '. $parent_class . ' .wp-block-search__inside-wrapper {
                padding: 0;
                border-color: var(--wp--preset--color--heading);
			}

            '. $parent_class . ' .wp-block-search__input {
                padding-'. rtl_css('left') .': var(--wp--preset--spacing--xx-small);
            }
		',
	)
);
