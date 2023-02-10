<?php
/**
 * Spectra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Spectra
 * @author  Brainstorm Force
 * @since 1.0.0
 */

declare( strict_types=1 );

namespace Spectra\Theme;

use const DIRECTORY_SEPARATOR;
use function add_action;
use function wp_get_theme;
use function wp_register_style;
use function wp_enqueue_style;


const SWT_SLUG = 'spectra';
const SWT_NAME = 'Spectra';
const SWT_NS   = __NAMESPACE__ . '\\';
const SWT_DS   = DIRECTORY_SEPARATOR;
const SWT_DIR  = __DIR__ . SWT_DS;
const SWT_FILE = __FILE__;

/**
 * Enqueue scripts.
 *
 * @since 1.0
 *
 * @return void
 */
function swt_enqueue_scripts(): void {

	$theme_version = wp_get_theme()->get( 'Version' );

	$version_string = is_string( $theme_version ) ? $theme_version : false;
	wp_register_style(
		'swt-style',
		get_template_directory_uri() . '/style.css',
		[],
		$version_string
	);

	wp_enqueue_style( 'swt-style' );

}

add_action( 'wp_enqueue_scripts', SWT_NS . 'swt_enqueue_scripts', 8 );
