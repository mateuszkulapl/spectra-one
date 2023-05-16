<?php
/**
 * Navigation Styles.
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since 0.0.6
 */

declare( strict_types=1 );

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$swt_parent_class = '.is-style-' . SWT_PFX . '-navigation-simple';

register_block_style(
	'core/navigation',
	array(
		'name'         => SWT_PFX . '-navigation-simple',
		'label'        => __( 'Simple', 'spectra-one' ),
		'inline_style' => '

            @media( '. media_query('desktop-to-tablet') .' ) {

                ' . $swt_parent_class . ' .wp-block-navigation__submenu-container {
                    box-shadow: 0px 16px 40px -16px rgba(0, 0, 0, 0.16);
                    border-radius: 6px;
                }
                
                ' . $swt_parent_class . ' .wp-block-navigation-submenu li:nth-child(1) .wp-block-navigation-item__content {
                    padding-top: 18px;
                    border-top-' . rtl_css( 'left' ) . '-radius: 6px;
                    border-top-' . rtl_css( 'right' ) . '-radius: 6px;
                }

                ' . $swt_parent_class . ' .wp-block-navigation-submenu li:nth-last-child(1) .wp-block-navigation-item__content {
                    padding-bottom: 18px;
                    border-bottom-' . rtl_css( 'left' ) . '-radius: 6px;
                    border-bottom-' . rtl_css( 'right' ) . '-radius: 6px;
                }

                ' . $swt_parent_class . ' .wp-block-navigation-submenu li.wp-block-navigation-submenu .wp-block-navigation__submenu-icon {
                    margin-' . rtl_css( 'right' ) . ': 18px;
                }

            }

            @media( '. media_query('mobile') .' ) {

                ' . $swt_parent_class . ' .wp-block-navigation-item.has-child .wp-block-navigation-item.has-child {
                    color: inherit !important;
                }

                ' . $swt_parent_class . ' .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation-item.has-child {
                    display: inline-block !important;
                }

                ' . $swt_parent_class . ' .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation-item__content {
                    display: inline-block !important;
                }

                ' . $swt_parent_class . ' .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation-submenu__toggle {
                    display: inline-block !important;
                }

                ' . $swt_parent_class . ' .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation-submenu__toggle[aria-expanded="true"] > svg {
                    transform: rotate(180deg);
                }

                ' . $swt_parent_class . ' .wp-block-navigation__responsive-container.has-modal-open ul.wp-block-navigation__submenu-container:not(.is-menu-open) {
                    display: none !important;
                }

                ' . $swt_parent_class . ' .wp-block-navigation__container {
                    font-size: 22px;
                    line-height: 32px;
                    color: #4B5563;
                    gap: 15px !important;
                    width: 100%;
                }

                ' . $swt_parent_class . ' .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .has-child .wp-block-navigation__submenu-container {
                    padding-top: 0;
                    padding-left: 18px;
                    padding-right: 0;
                }

                ' . $swt_parent_class . ' .wp-block-navigation__container .wp-block-navigation-item {
                    display: inline-block !important;
                    width: 100%;
                    text-align: left;
                }

                

            }

		',
	) 
);
