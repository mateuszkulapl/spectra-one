<?php

declare( strict_types=1 );

namespace Spectra\Theme;

add_action( 'admin_notices', SWT_NS . 'render_welcome_notice', 0 );
add_action( 'wp_ajax_swt_dismiss_welcome_notice', SWT_NS . 'close_welcome_notice' );

/**
 * Render the welcome notice.
 *
 * @since x.x.x
 * @return void
 */
function render_welcome_notice() {
	if ( ! welcome_notice_display_condition() ) {
		return;
	}

	$plugin_status = get_spectra_status();

	$file_prefix = ( SCRIPT_DEBUG ) ? '' : '.min';
	$dir_name    = ( SCRIPT_DEBUG ) ? 'unminified' : 'minified';
	$css_uri = get_uri() . 'assets/css/' . $dir_name . '/admin';

	/* Check and added rtl prefix */
	if ( is_rtl() ) {
		$file_prefix .= '-rtl';
	}

	/* Load Theme Styles*/
	wp_enqueue_style( SWT_SLUG . '-welcome-notice' , $css_uri . '/welcome-notice' . $file_prefix . '.css', [], SWT_VER );

	$js    = SCRIPT_DEBUG ? get_uri() . 'build/' : get_uri() . 'assets/js/' ;
	$asset = SCRIPT_DEBUG ? require SWT_DIR . 'build/welcome_notice.asset.php'  : require SWT_DIR . 'assets/js/welcome_notice.asset.php';
	$deps  = $asset['dependencies'];

	wp_register_script( SWT_SLUG . '-welcome-notice', $js . 'welcome_notice.js', $deps , SWT_VER , true );

	wp_enqueue_script( SWT_SLUG . '-welcome-notice' );

	wp_localize_script(
		SWT_SLUG . '-welcome-notice',
		SWT_SLUG,
		localize_welcome_notice_js($plugin_status)
	);

	ob_start();
	?>
<div class="notice notice-info swt-welcome-notice">
    <button type="button" class="notice-dismiss"><span class="screen-reader-text">Close this notice.</span></button>
    <div class="notice-content">
        <h2 class="notice-title">
            <?php esc_html_e( 'Install Spectra plugin.', 'spectra' ); ?>
        </h2>
        <p class="description">
            <?php esc_html_e( 'This is the description.', 'spectra' ); ?>
        </p>
        <div class="notice-actions">
            <button id="swt-install-spectra" class="button button-primary button-hero">
                <span class="dashicons dashicons-update hidden"></span>
                <span class="text">
                    <?php
									'installed' === $plugin_status ? esc_html_e( 'Activate Spectra Plugin', 'spectra' ) : esc_html_e( 'Install & Activate Spectra Plugin', 'spectra' );
								?>
                </span>
            </button>
            <a href="https://wordpress.org/plugins/ultimate-addons-for-gutenberg/" target="_blank"
                class="button button-secondary button-hero">
                <?php esc_html_e( 'Learn More', 'spectra' ); ?>
            </a>
        </div>
    </div>
</div>
<?php
	echo wp_kses_post( ob_get_clean() );
}

/**
 * Close welcome notice.
 *
 * @since x.x.x
 * @return void
 */
function close_welcome_notice() {
	if ( ! isset( $_POST['nonce'] ) ) {
		return;
	}
	if ( ! wp_verify_nonce( sanitize_text_field( $_POST['nonce'] ), 'swt-dismiss-welcome-notice-nonce' ) ) {
		return;
	}
	update_option( 'swt-dismiss-welcome-notice', 'yes' );
	wp_die();
}

/**
 * Welcome notice condition.
 *
 * @since x.x.x
 * @return bool
 */
function welcome_notice_display_condition(): bool {

	// Check if plugin is active.
	if ( is_plugin_active( 'ultimate-addons-for-gutenberg/ultimate-addons-for-gutenberg.php' ) ) {
		return false;
	}

	// Check if welcome notice was closed.
	if ( get_option( 'close-welcome-notice', 'no' ) === 'yes' ) {
		return false;
	}

	$screen = get_current_screen();

	// Show the notice on dashboard.
	if ( ! in_array( $screen->id, array( 'dashboard', 'themes' ) ) ) {
		return false;
	}

	// Check AJAX actions.
	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
		return false;
	}

	// Hide from network admin.
	if ( is_network_admin() ) {
		return false;
	}

	// Check if use can 'manage_options'.
	if ( ! current_user_can( 'manage_options' ) ) {
		return false;
	}

	// Check if use can 'install_plugins'.
	if ( ! current_user_can( 'install_plugins' ) ) {
		return false;
	}

	// Block editor context.
	if ( $screen->is_block_editor() ) {
		return false;
	}

	// Close notice automatically after a week.
	$activated_time = get_option( 'swt_install' );

	if ( ! empty( $activated_time ) && time() - intval( $activated_time ) > WEEK_IN_SECONDS ) {
		update_option( 'close-welcome-notice' , 'yes' );

		return false;
	}

	return true;
}

/**
 * Spectra plugin status.
 *
 * @since x.x.x
 * @return string
 */
function get_spectra_status(): string {
	$status = 'not-installed';

	if ( file_exists( ABSPATH . 'wp-content/plugins/ultimate-addons-for-gutenberg/ultimate-addons-for-gutenberg.php' ) ) {
		return 'installed';
	}

	return $status;
}

/**
 * Localize js.
 *
 * @since x.x.x
 * @return array
 */
function localize_welcome_notice_js( $plugin_status ):array {

	return array(
		'nonce'         => wp_create_nonce( 'swt-dismiss-welcome-notice' ),
		'ajaxUrl'       => esc_url( admin_url( 'admin-ajax.php' ) ),
		'pluginStatus'   => $plugin_status,
		'pluginSlug'     => 'ultimate-addons-for-gutenberg',
		'activationUrl' => esc_url(
			add_query_arg(
				array(
					'plugin_status' => 'all',
					'paged'         => '1',
					'action'        => 'activate',
					'plugin'        => rawurlencode( 'ultimate-addons-for-gutenberg/ultimate-addons-for-gutenberg.php' ),
					'_wpnonce'      => wp_create_nonce( 'activate-plugin_ultimate-addons-for-gutenberg/ultimate-addons-for-gutenberg.php' ),
				),
				admin_url( 'plugins.php' )
			)
		),
		'activating'    => __( 'Activating', 'spectra' ) . '&hellip;',
		'installing'    => __( 'Installing', 'spectra' ) . '&hellip;',
		'done'          => __( 'Done', 'spectra' ),
	);
}