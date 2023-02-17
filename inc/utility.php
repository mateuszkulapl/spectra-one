<?php

declare( strict_types=1 );

namespace Spectra\Theme;

use function get_template_directory_uri;
use function trailingslashit;

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