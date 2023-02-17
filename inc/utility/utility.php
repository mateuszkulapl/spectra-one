<?php

declare( strict_types=1 );

namespace Spectra\Theme;

/**
 * Get template directory uri
 *
 * @since x.x.x
 *
 * @param string $path Optional path.
 *
 * @return string
 */
function get_uri( string $path = '' ): string {
	return trailingslashit(  esc_url( get_template_directory_uri() . SWT_DS ) . $path );
}

/**
 * Parse CSS
 *
 * @param  array $css_output Array of CSS.
 * @param  mixed $min_media  Min Media breakpoint.
 * @param  mixed $max_media  Max Media breakpoint.
 * @return string             Generated CSS.
 */
function swt_parse_css( array $css_output = array(), mixed $min_media = '', mixed $max_media = '' ) {

	$parse_css = '';
	if ( is_array( $css_output ) && count( $css_output ) > 0 ) {

		foreach ( $css_output as $selector => $properties ) {

			if ( null === $properties ) {
				break;
			}

			if ( ! count( $properties ) ) {
				continue;
			}

			$temp_parse_css   = $selector . '{';
			$properties_added = 0;

			foreach ( $properties as $property => $value ) {

				if ( '' == $value && 0 !== $value ) {
					continue;
				}

				$properties_added++;
				$temp_parse_css .= $property . ':' . $value . ';';
			}

			$temp_parse_css .= '}';

			if ( $properties_added > 0 ) {
				$parse_css .= $temp_parse_css;
			}
		}

		if ( '' != $parse_css && ( '' !== $min_media || '' !== $max_media ) ) {

			$media_css       = '@media ';
			$min_media_css   = '';
			$max_media_css   = '';
			$media_separator = '';

			if ( '' !== $min_media ) {
				$min_media_css = '(min-width:' . $min_media . 'px)';
			}
			if ( '' !== $max_media ) {
				$max_media_css = '(max-width:' . $max_media . 'px)';
			}
			if ( '' !== $min_media && '' !== $max_media ) {
				$media_separator = ' and ';
			}

			$media_css .= $min_media_css . $media_separator . $max_media_css . '{' . $parse_css . '}';

			return $media_css;
		}
	}

	return $parse_css;
}