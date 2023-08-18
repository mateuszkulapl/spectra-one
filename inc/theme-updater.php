<?php
/**
 * Theme updater
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since x.x.x
 */

declare(strict_types=1);

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


add_action( 'after_setup_theme', SWT_NS . 'run_function_after_theme_update' );

/**
 * Regenerate spectra one.
 *
 * @return void
 * @since x.x.x
 */
function run_function_after_theme_update():void {
	$version = wp_get_theme()->get( 'Version' );

	if ( $version ) {
		/** @psalm-suppress PossiblyInvalidArgument */ // phpcs:ignore Generic.Commenting.DocComment.MissingShort -- $version comes from wordpress function itself.
		list( $current_version ) = explode( '-', $version );
		$old_version             = get_option( 'swt_theme_version' );
	
		if ( $old_version !== $current_version && $old_version < $current_version ) {
			// Run your function here.
			if ( is_spectra_plugin() ) {
				/** @psalm-suppress UndefinedClass */ // phpcs:ignore Generic.Commenting.DocComment.MissingShort -- Spectra plugin class called to regenerate fonts.
				$uagb_fonts = new \UAGB_FSE_Fonts_Compatibility();
				/** @psalm-suppress UndefinedClass */ // phpcs:ignore Generic.Commenting.DocComment.MissingShort -- Class, interface or enum named UAGB_FSE_Fonts_Compatibility does exist inside spectra one plugin.
				$uagb_fonts->save_google_fonts_to_theme();
			}
	
			// Update not to run twice.
			update_option( 'swt_theme_version', $current_version );
		}
	}
}

add_action( 'switch_theme', SWT_NS . 'remove_option_after_theme_update' );

/**
 * Implement theme update logic.
 *
 * @return void
 * @since x.x.x
 */
function remove_option_after_theme_update() {
	delete_option( 'swt_theme_version' );
}
