<?php
/**
 * Theme Helpers
 *
 * @package Spectra
 * @author Brainstorm Force
 * @since x.x.x
 */

declare(strict_types=1);

namespace Swt;

/**
 * Get template Directory Uri
 *
 * @since x.x.x
 *
 * @param string $path Optional path.
 *
 * @return string
 */
function get_uri( string $path = '' ): string {
	return trailingslashit( esc_url( get_template_directory_uri() . SWT_DS ) . $path );
}

/**
 * Parse CSS
 *
 * @param  array $css_output Array of CSS.
 * @param  mixed $min_media  Min Media breakpoint.
 * @param  mixed $max_media  Max Media breakpoint.
 * @return string             Generated CSS.
 */
function parse_css( array $css_output = array(), $min_media = '', $max_media = '' ): string {

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

/**
 * Render Image Placeholder
 *
 * @since x.x.x
 *
 * @param string $html Html.
 * @param array  $block Block array.
 *
 * @return string
 */
function render_image_placeholder( string $html, array $block ): string {
	
	$dom    = dom( $html );
	$figure = get_dom_element( 'figure', $dom );
	$img    = get_dom_element( 'img', $figure );

	if ( $img && $img->getAttribute( 'src' ) ) {
		return $html;
	}

	$html = ! $html ? '<figure class="wp-block-image"><img src="" alt=""/></figure>' : $html;
	$dom  = dom( $html );

	$svg         = get_svg_icon( 'image', 30 );
	$svg_dom     = dom( $svg );
	$svg_element = get_dom_element( 'svg', $svg_dom );

	if ( ! $svg_element ) {
		return $html;
	}

	$svg_classes = explode( ' ', $svg_element->getAttribute( 'class' ) );

	$svg_classes[] = 'wp-block-image__placeholder-icon';

	$svg_element->setAttribute( 'class', implode( ' ', $svg_classes ) );

	$svg_element->setAttribute( 'fill', 'currentColor' );

	$result = $dom->importNode( $svg_element, true );
	$figure = get_dom_element( 'figure', $dom );

	if ( ! $figure ) {
		return $html;
	}

	$img = get_dom_element( 'img', $figure );

	if ( $img ) {
		$figure->removeChild( $img );
	}

	$figure->appendChild( $result );
	$classes = explode( ' ', $figure->getAttribute( 'class' ) );

	if ( ! in_array( 'is-placeholder', $classes, true ) ) {
		$classes[] = 'is-placeholder';
	}

	if ( $block['align'] ?? null ) {
		$classes[] = 'align' . $block['align'];
	}

	$figure->setAttribute( 'class', implode( ' ', $classes ) );

	$styles = array(
		'width'                      => $block['width'] ?? null,
		'height'                     => $block['height'] ?? null,
		'margin-top'                 => $block['style']['spacing']['margin']['top'] ?? null,
		'margin-right'               => $block['style']['spacing']['margin']['right'] ?? null,
		'margin-bottom'              => $block['style']['spacing']['margin']['bottom'] ?? null,
		'margin-left'                => $block['style']['spacing']['margin']['left'] ?? null,
		'border-top-left-radius'     => $block['style']['border']['radius']['topLeft'] ?? null,
		'border-top-right-radius'    => $block['style']['border']['radius']['topRight'] ?? null,
		'border-bottom-left-radius'  => $block['style']['border']['radius']['bottomLeft'] ?? null,
		'border-bottom-right-radius' => $block['style']['border']['radius']['bottomRight'] ?? null,
	);

	$figure->setAttribute(
		'style',
		css_array_to_string(
			array_merge(
				css_string_to_array( $figure->getAttribute( 'style' ) ),
				$styles,
			)
		)
	);

	return $dom->saveHTML();
}

/**
 * Get SVG icon
 *
 * @since x.x.x
 *
 * @param string   $slug Icon name.
 * @param int|null $size Icon size.
 *
 * @throws DOMException If DOM can't create element.
 * @return string
 */
function get_svg_icon( string $slug, int $size = null ): string {
	ob_start();
	require_once SWT_DIR . 'assets/svg/svgs.json';
	$icon_set = json_decode( ob_get_clean(), true );

	$icon = isset( $icon_set[ $slug ] ) ? $icon_set[ $slug ] : '';

	if ( ! $icon ) {
		return '';
	}

	$dom = dom( $icon );
	$svg = get_dom_element( 'svg', $dom );

	if ( ! $svg ) {
		return '';
	}

	$unique_id = 'icon-' . uniqid();

	$svg->setAttribute( 'role', 'img' );
	$svg->setAttribute( 'aria-labelledby', $unique_id );
	$svg->setAttribute( 'data-icon', $slug );

	$label = ucwords( str_replace( '-', ' ', $slug ) ) . __( ' Icon', 'spectra' );
	$title = $dom->createElement( 'title' );

	$title->appendChild( $dom->createTextNode( $label ) );
	$title->setAttribute( 'id', $unique_id );

	$svg->insertBefore( $title, $svg->firstChild );

	if ( $size ) {
		$svg->setAttribute( 'width', (string) $size );
		$svg->setAttribute( 'height', (string) $size );
	}

	return $dom->saveHTML();
}


/**
 * Converts array of CSS rules to string.
 *
 * @since x.x.x
 *
 * @param array $styles Styles as array.
 * @param bool  $trim   Whether to trim the trailing semicolon.
 *
 * @return string
 */
function css_array_to_string( array $styles, bool $trim = false ): string {
	$css = '';

	foreach ( $styles as $property => $value ) {
		if ( is_null( $value ) ) {
			continue;
		}

		$semicolon = $trim && array_key_last( $styles ) === $property ? '' : ';';
		$css      .= $property . ':' . $value . $semicolon;
	}

	return $css;
}

/**
 * Converts string of CSS rules to an array.
 *
 * @since x.x.x
 *
 * @param string $css CSS string.
 *
 * @return array
 */
function css_string_to_array( string $css ): array {
	$array = array();

	// Prevent svg url strings from being split.
	$css = str_replace( 'xml;', 'xml$', $css );

	$elements = explode( ';', $css );

	foreach ( $elements as $element ) {
		$parts = explode( ':', $element, 2 );

		if ( isset( $parts[1] ) ) {
			$property = $parts[0];
			$value    = $parts[1];

			if ( '' !== $value && 'null' !== $value ) {
				$array[ $property ] = str_replace( 'xml$', 'xml;', $value );
			}
		}
	}

	return $array;
}
