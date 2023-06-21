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

$swt_parent_class = '.is-style-' . SWT_PFX . '-navigation-style-1';


register_block_style(
	'core/navigation',
	array(
		'name'         => SWT_PFX . '-navigation-style-1',
		'label'        => __( 'Simple', 'spectra-one' ),
		'inline_style' => '

            ' . common_desktop_inline_style( $swt_parent_class ) . '

            ' . common_mobile_inline_style( $swt_parent_class ) . '
		',
	) 
);

$swt_parent_class = '.is-style-' . SWT_PFX . '-navigation-style-2';

register_block_style(
	'core/navigation',
	array(
		'name'         => SWT_PFX . '-navigation-style-2',
		'label'        => __( 'Modern', 'spectra-one' ),
		'inline_style' => '
        
            ' . common_desktop_inline_style( $swt_parent_class ) . '
                
                ' . $swt_parent_class . ' .wp-block-navigation__submenu-container .wp-block-navigation-item {
                    border-radius: var(--wp--custom--border-radius--x-small);
                }

                ' . $swt_parent_class . ' .wp-block-navigation__submenu-container .wp-block-navigation-item:hover {
                    background-color: var(--wp--preset--color--surface);
                }

                ' . common_mobile_inline_style( $swt_parent_class ) . '
		',
	) 
);


$swt_parent_class = '.is-style-' . SWT_PFX . '-navigation-style-3';

register_block_style(
	'core/navigation',
	array(
		'name'         => SWT_PFX . '-navigation-style-3',
		'label'        => __( 'Divided', 'spectra-one' ),
		'inline_style' => '

            ' . common_desktop_inline_style( $swt_parent_class ) . '

            ' . $swt_parent_class . ' .wp-block-navigation__submenu-container {
                padding: 0;
            }
            
            ' . $swt_parent_class . ' .wp-block-navigation__submenu-container .wp-block-navigation-item {
                border-bottom: 1px solid var(--wp--preset--color--outline);
            }

            ' . $swt_parent_class . ' .wp-block-navigation__submenu-container .wp-block-navigation-item:nth-child(1){
                border-top-' . rtl_css( 'left' ) . '-radius: var(--wp--custom--border-radius--small);
                border-top-' . rtl_css( 'right' ) . '-radius: var(--wp--custom--border-radius--small);
            }

            ' . $swt_parent_class . ' .wp-block-navigation__submenu-container .wp-block-navigation-item:nth-last-child(1) {
                border-bottom-' . rtl_css( 'left' ) . '-radius: var(--wp--custom--border-radius--small);
                border-bottom-' . rtl_css( 'right' ) . '-radius: var(--wp--custom--border-radius--small);
            }

            ' . $swt_parent_class . ' .wp-block-navigation__submenu-container .wp-block-navigation-item:nth-child(1) .wp-block-navigation-item__content{
                padding-top: var(--wp--preset--spacing--xx-small);
            }

            ' . $swt_parent_class . ' .wp-block-navigation__submenu-container .wp-block-navigation-item:nth-last-child(1) .wp-block-navigation-item__content {
                padding-bottom: var(--wp--preset--spacing--xx-small);
                border-bottom: 0;
            }

            ' . $swt_parent_class . ' .wp-block-navigation__submenu-container .wp-block-navigation-item:hover {
                background-color: var(--wp--preset--color--surface);
            }
            
            ' . common_mobile_inline_style( $swt_parent_class ) . '
		',
	) 
);


/**
 * Common desktop css.
 *
 * @since x.x.x
 * @param string $parent_class Parent class.
 * @return string
 */
function common_desktop_inline_style( string $parent_class ):string {

	$common_desktop_inline_style = '

            ' . $parent_class . '.wp-block-navigation:not(.has-background) .wp-block-navigation__submenu-container {
                color: var(--wp--preset--color--heading);
                background-color: var(--wp--preset--color--background);
            }
            
            .wp-block-navigation__container > .wp-block-navigation-submenu{
                padding-top: var(--wp--preset--spacing--xx-small);
                padding-bottom: var(--wp--preset--spacing--xx-small);
            }

            ' . $parent_class . ' .wp-block-navigation__submenu-container {
                position: relative;
                padding: var(--wp--preset--spacing--xx-small);
                border-radius: var(--wp--custom--border-radius--small);
            }

            ' . $parent_class . ' .wp-block-navigation__submenu-container a {
                padding: 0;
            }
            
            ' . $parent_class . ' .wp-block-navigation__submenu-container .wp-block-navigation-item .wp-block-navigation-item__content {
                padding: var(--wp--preset--spacing--xxx-small) var(--wp--preset--spacing--xx-small);
            }

            ' . $parent_class . ' .wp-block-navigation__submenu-container .wp-block-navigation-item__content {
                color: var(--wp--preset--color--heading);
            }

            ' . $parent_class . ' .wp-block-navigation__submenu-container:not(.is-menu-open) .wp-block-navigation-item__content:hover {
                color: var(--wp--preset--color--primary);
            }

            ' . $parent_class . ' .wp-block-navigation__responsive-container:not(.has-modal-open) .wp-block-navigation-item.has-child .wp-block-navigation-item.has-child:hover {
                color: var(--wp--preset--color--primary) !important;
            }
    ';

	return $common_desktop_inline_style;

}

/**
 * Common mobile css.
 *
 * @since x.x.x
 * @param string $parent_class Parent class.
 * @return string
 */
function common_mobile_inline_style( string $parent_class ):string {

	$selector = $parent_class . ' .wp-block-navigation__responsive-container.has-modal-open';

	$common_mobile_inline_style = '

            ' . $selector . '.has-modal-open {
                color: var(--wp--preset--color--heading);
                background-color: var(--wp--preset--color--background);
            }

            ' . $selector . ' .wp-block-navigation__responsive-container-close {
                padding: var(--wp--preset--spacing--x-small);
                border: 1px solid var(--wp--preset--color--outline);
                border-radius: var(--wp--custom--border-radius--full);
                margin-top: var(--wp--preset--spacing--x-small);
            }
    
            ' . $selector . ' .wp-block-navigation__responsive-container-content {
                padding-top: var(--wp--preset--spacing--xx-large);
            }
    
            ' . $selector . ' .wp-block-navigation__responsive-container-content .wp-block-navigation-item,
            ' . $selector . ' .wp-block-navigation__responsive-container-content .wp-block-navigation__container,
            ' . $selector . ' .wp-block-navigation__responsive-container-content .wp-block-page-list {
                align-items: flex-start;
                width: 100%;
                gap: 0;             
            }
    
            ' . $selector . ' .wp-block-navigation__submenu-container.wp-block-navigation__submenu-container.wp-block-navigation__submenu-container.wp-block-navigation__submenu-container {
                width: 100%;
                padding-' . rtl_css( 'right' ) . ': 0;
                padding-' . rtl_css( 'left' ) . ': var(--wp--preset--spacing--x-small);
                padding-top: var(--wp--preset--spacing--x-small);
            } 
    
            ' . $selector . ' .wp-block-navigation__submenu-container.wp-block-navigation__submenu-container.wp-block-navigation__submenu-container.wp-block-navigation__submenu-container li:before {
                content: "\e900";
                position: absolute;
                ' . rtl_css( 'left' ) . ': -1.2em;
                top: 0.3em;
                font-family: icomoon, sans-serif;
                font-size: var(--wp--preset--font-size--medium);
                transform: rotate(270deg);
                transform-origin: center;
                pointer-events: none;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
    
            ' . $selector . ' .wp-block-navigation-item {
                font-size: var(--wp--preset--font-size--large);
                font-weight: var(--wp--custom--font-weight--regular);
                padding-bottom: var(--wp--preset--spacing--x-small);
                padding-top: 0;
            }
    
            ' . $selector . ' .wp-block-navigation-item:nth-last-child(1) {
                padding-bottom: 0;
            }

            ' . $selector . ' .wp-block-navigation__submenu-container .wp-block-navigation-item {
                border-bottom: 0;
            }
    
            ' . $selector . ' .wp-block-navigation__container > .wp-block-navigation-item {
                margin-bottom: var(--wp--preset--spacing--x-small);
                border-bottom: 1px solid var(--wp--preset--color--outline);
            }
    
            ' . $selector . ' .wp-block-navigation__container > .wp-block-navigation-item:nth-last-child(1) {
                margin-bottom: 0;
                border-bottom: 0;
            }


            ' . $selector . ' .wp-block-navigation__submenu-container .wp-block-navigation-item .wp-block-navigation-item__content,
            ' . $selector . ' .wp-block-navigation__submenu-container .wp-block-navigation-item:nth-last-child(1) .wp-block-navigation-item__content,
            ' . $selector . ' .wp-block-navigation__submenu-container .wp-block-navigation-item:nth-child(1) .wp-block-navigation-item__content {
                padding: 0;
            }
    
            ' . $selector . ' .wp-block-navigation-submenu__toggle {
                display: block;
                position: absolute;
                ' . rtl_css( 'right' ) . ': 0;
                top: var(--wp--preset--spacing--xx-small)
            }

            ' . $selector . ' .wp-block-navigation-submenu__toggle[aria-expanded="false"] > svg {
                transform: rotate(0);
            }

            ' . $selector . ' .wp-block-navigation-submenu__toggle[aria-expanded="true"] > svg {
                transform: rotate(180deg);
            }
    
            ' . $selector . ' ul.wp-block-navigation__submenu-container:not(.is-menu-open) {
                display: none;
            }

        ';
	
		return $common_mobile_inline_style;
}
