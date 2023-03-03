<?php
/**
 * Load Scripts
 *
 * @package Spectra
 * @author Brainstorm Force
 * @since x.x.x
 */

declare( strict_types=1 );

namespace Swt;

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

	/* RTL */
	if ( is_rtl() ) {
		$file_prefix .= '-rtl';
	}

	/* Load Theme Styles*/
	wp_enqueue_style( SWT_SLUG, $css_uri . '/style' . $file_prefix . '.css', array(), SWT_VER );

	$swt_inline_css = apply_filters( 'swt_dynamic_theme_css', '' );
	if ( $swt_inline_css ) {
		wp_add_inline_style( SWT_SLUG, $swt_inline_css );
	}

	/* Load Woocommerce Styles */
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( SWT_SLUG . '-woocommerce', $css_uri . '/compatibility/woocommerce' . $file_prefix . '.css', array(), SWT_VER );
	}

	/* Load Theme Scripts*/
	wp_enqueue_script( SWT_SLUG . '-js', $js_uri . 'script' . $file_prefix . '.js', array(), SWT_VER, false );

	$swt_inline_js = apply_filters( 'swt_dynamic_theme_js', '' );
	if ( $swt_inline_js ) {
		wp_add_inline_script( SWT_SLUG . '-js', $swt_inline_js );
	}
}

add_action( 'wp_enqueue_scripts', SWT_NS . 'enqueue_frontend_scripts' );

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

	$js    = SCRIPT_DEBUG ? get_uri() . 'build/' : get_uri() . 'assets/js/';
	$asset = SCRIPT_DEBUG ? require SWT_DIR . 'build/editor.asset.php' : require SWT_DIR . 'assets/js/editor.asset.php';
	$deps  = $asset['dependencies'];

	wp_register_script( SWT_SLUG . '-editor', $js . 'editor.js', $deps, SWT_VER, true );

	wp_enqueue_script( SWT_SLUG . '-editor' );

	wp_localize_script(
		SWT_SLUG . '-editor',
		SWT_SLUG,
		localize_editor_script()
	);
}

add_action( 'enqueue_block_editor_assets', SWT_NS . 'enqueue_editor_scripts' );

/**
 * Localize Editor Script.
 *
 * @since x.x.x
 *
 * @return mixed|void
 */
function localize_editor_script() {

	return apply_filters(
		'swt_editor_localize',
		array(
			'is_spectra_plugin' => defined( 'UAGB_VER' ),
			'disable_sections' => get_disable_section_fields()
		)
	);
}



/**
 * Enqueue Block Scripts.
 *
 * @since x.x.x
 *
 * @return void
 */
function enqueue_block_scripts(): void {

	if ( false === apply_filters( 'swt_enqueue_block_scripts', true ) ) {
		return;
	}

	$file_prefix = ( SCRIPT_DEBUG ) ? '' : '.min';
	$dir_name    = ( SCRIPT_DEBUG ) ? 'unminified' : 'minified';

	$css_uri = get_uri() . 'assets/css/' . $dir_name . '/';

	add_theme_support( 'editor-styles' );
    add_editor_style( array( SWT_SLUG, $css_uri . '/editor' . $file_prefix . '.css', SWT_SLUG, $css_uri . '/blocks' . $file_prefix . '.css' ) );
}

add_action( 'admin_init', SWT_NS . 'enqueue_block_scripts' );
