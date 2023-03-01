<?php
/**
 * Meta Box
 *
 * @package Spectra
 * @author Brainstorm Force
 * @since x.x.x
 */

declare(strict_types=1);

namespace Swt;

add_action( 'init',  SWT_NS . 'register_meta_settings' );

/**
 * Register Post Meta options for react based fields.
 *
 * @since x.x.x
 * @return void
 */
function register_meta_settings():void {
    register_post_meta(
        '',
        'swt_meta_header_display',
        array(
            'show_in_rest'  => true,
            'single'        => true,
            'default'       => false,
            'type'          => 'boolean',
            'auth_callback' => '__return_true',
        )
    );

    register_post_meta(
        '',
        'swt_meta_footer_display',
        array(
            'show_in_rest'  => true,
            'single'        => true,
            'default'       => false,
            'type'          => 'boolean',
            'auth_callback' => '__return_true',
        )
    );
}