<?php

declare( strict_types=1 );

namespace Spectra\Theme;

add_action( 'wp_enqueue_scripts', SWT_NS . 'enqueue_frontend_scripts' );

/**
 * Enqueue Frontend Scripts.
 *
 * @since x.x.x
 *
 * @return void
 */

 function enqueue_frontend_scripts(): void {
	if ( false === apply_filters( 'swt_enqueue_frontend_scripts', true ) ) {
		return;
	}

	$file_prefix = ( SCRIPT_DEBUG ) ? '' : '.min';
	$dir_name    = ( SCRIPT_DEBUG ) ? 'unminified' : 'minified';

	$js_uri  = get_uri() . 'assets/js/' . $dir_name . '/';
	$css_uri = get_uri() . 'assets/css/' . $dir_name . '/';

	/* Check and added rtl prefix */
	if ( is_rtl() ) {
		$file_prefix .= '-rtl';
	}

	wp_enqueue_style( SWT_SLUG , $css_uri . '/style' . $file_prefix . '.css', [], SWT_VER );

	
    /* Load Woocommerce styles */
    if( class_exists( 'WooCommerce' ) ) {
        wp_enqueue_style( SWT_SLUG . '-woocommerce' , $css_uri . '/compatibility/woocommerce' . $file_prefix . '.css', [], SWT_VER );
    }
 }


 add_action( 'admin_enqueue_scripts', SWT_NS . 'enqueue_admin_scripts' );

 /**
 * Enqueue Admin Scripts.
 *
 * @since x.x.x
 *
 * @return void
 */

 function enqueue_admin_scripts(): void {
	if ( false === apply_filters( 'swt_enqueue_admin_scripts', true ) ) {
		return;
	}

	$file_prefix = ( SCRIPT_DEBUG ) ? '' : '.min';
	$dir_name    = ( SCRIPT_DEBUG ) ? 'unminified' : 'minified';

	$js_uri  = get_uri() . 'assets/js/' . $dir_name . '/';
	$css_uri = get_uri() . 'assets/css/' . $dir_name . '/';

	/* Check and added rtl prefix */
	if ( is_rtl() ) {
		$file_prefix .= '-rtl';
	}

 }

 add_action( 'enqueue_block_editor_assets', SWT_NS . 'enqueue_editor_scripts' );

/**
 * Enqueue Editor Scripts.
 *
 * @since x.x.x
 *
 * @return void
 */

 function enqueue_editor_scripts(): void {
	if ( false === apply_filters( 'swt_enqueue_editor_scripts', true ) ) {
		return;
	}

	$js    = SCRIPT_DEBUG ? get_uri() . 'build/' : get_uri() . 'assets/js/' ;
	$asset = SCRIPT_DEBUG ? require SWT_DIR . 'build/editor.asset.php'  : require SWT_DIR . 'assets/js/editor.asset.php';
	$deps  = $asset['dependencies'];

	wp_register_script( SWT_SLUG . '-editor', $js . 'editor.js', $deps , SWT_VER ,true );

	wp_enqueue_script( SWT_SLUG . '-editor' );

 }