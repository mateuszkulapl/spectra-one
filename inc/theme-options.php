<?php
/**
 * Theme Options
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

/**
 * Get theme.json
 *
 * @since 0.0.1
 * @return array
 */
function get_theme_json(): array {
	ob_start();
	echo file_get_contents( SWT_DIR . 'theme.json' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Required to get svg.json.
	return json_decode( ob_get_clean(), true );
}

/**
 * Get custom styles
 *
 * @since 0.0.1
 * @return array
 */
function get_theme_custom_styles(): array {
	$args = array(
		'orderby'     => 'post_type',
		'post_status' => 'publish',
		'post_type'   => array( 'wp_global_styles' ),
	);

	$export_posts  = get_posts( $args );
	$global_styles = '';
	if ( is_object( $export_posts[0] ) && isset( $export_posts[0]->post_content ) ) {
		$global_styles = $export_posts[0]->post_content;
	}

	return json_decode( $global_styles, true );
}


/**
 * Get css variable prefix
 *
 * @since x.x.x
 * @return string variable prefix
 */
function get_css_variable_prefix(): string {
	return '--wp--preset--color--';
}


/**
 * Get palette slugs
 *
 * @since x.x.x
 * @return array Palette slugs.
 */
function get_palette_slugs(): array {
	return array(
		'wp--preset--color--primary',
		'wp--preset--color--tertiary',
		'wp--preset--color--quaternary',
		'wp--preset--color--heading',
		'wp--preset--color--body',
		'wp--preset--color--surface',
		'wp--preset--color--background',
		'wp--preset--color--foreground',
		'wp--preset--color--outline',
		'wp--preset--color--neutral',
		'wp--preset--color--transparent',
		'wp--preset--color--current-color',
		'wp--preset--color--inherit',
	);
}
