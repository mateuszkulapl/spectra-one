<?php
/**
 * Admin Global settings route.
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

add_action( 'rest_api_init', SWT_NS . 'create_rest_routes' );

/**
 * Creating rest routes
 *
 * @since x.x.x
 * @return void
 */
function create_rest_routes():void {
	register_rest_route(
		'swt/v1',
		'/global_settings',
		array(
			array(
				'methods'             => \WP_REST_Server::READABLE,
				'callback'            => SWT_NS . 'swt_get_global_settings',
				'permission_callback' => function () {
					return true;
				},
			),
			array(
				'methods'             => \WP_REST_Server::EDITABLE,
				'callback'            => SWT_NS . 'swt_update_global_settings',
				'permission_callback' => function () {
					return current_user_can( 'edit_theme_options' );
				},
			),
		)
	);
}

/**
 * Get configs
 * 
 * @since x.x.x
 * @return \WP_REST_Response 
 */
function swt_get_global_settings():\WP_REST_Response { 
	$settings = get_option( 'swt_theme_options' );

	return rest_ensure_response( $settings );
}


/**
 * Set configs
 *
 * @param mixed $request request payload.
 * @return \WP_REST_Response
 * @since x.x.x
 */
function swt_update_global_settings( mixed $request ):\WP_REST_Response {

	$fields = isset( $request['setting'] ) ? $request['setting'] : array();

	if ( ! empty( $fields ) ) {
		update_option( 'swt_theme_options', $fields );
	}

	return rest_ensure_response( 'success' );

}
