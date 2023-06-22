<?php
/**
 * Theme updater
 *
 * @package Spectra One
 * @author Brainstorm Force
 * @since x.x.x
 */

declare( strict_types=1 );

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


if ( is_admin() ) {
    add_action( 'admin_init', SWT_NS . 'init', 5 );
} else {
    add_action( 'wp', SWT_NS . 'init', 5 );
}

/**
 * Implement theme update logic.
 * @return void
 * @since x.x.x
 */
function init():void {
    do_action( 'swt_update_before' );

    if ( ! needs_db_update() ) {
        return;
    }

    $db_version = get_option( '_swt_db_version', false );

    if ( version_compare( $db_version, '1.0.1', '<=' ) ) {
        v_1_0_2();
    }

    update_db_version();

    do_action( 'swt_update_after' );
}

/**
 * Test .
 *
 * @since x.x.x
 * @return void
 */
function v_1_0_2():void {
    
}

/**
 * Update DB version.
 *
 * @since x.x.x
 * @return void
 */
function update_db_version():void {
    update_option( '_swt_db_version', SWT_VER );
}

/**
 * Check if db upgrade is required.
 *
 * @since x.x.x
 * @return bool true|false True if stored database version is lower than constant; false if otherwise.
 */
function needs_db_update():bool {
    $db_version = get_option( '_swt_db_version', false );

    if ( false === $db_version || version_compare( $db_version, SWT_VER, '!=' ) ) {
        return true;
    }

    return false;
}

