<?php
/**
 * Functions and definitions
 *
 * @package Spectra
 * @author Brainstorm Force
 * @since x.x.x
 */

declare( strict_types=1 );

namespace Swt;

const SWT_VER  = '1.0.0';
const SWT_SLUG = 'spectra';
const SWT_NAME = 'Spectra';
const SWT_PFX  = 'swt';
const SWT_NS   = __NAMESPACE__ . '\\';
const SWT_DS   = DIRECTORY_SEPARATOR;
const SWT_DIR  = __DIR__ . SWT_DS;

/**
 * Setup base spectra functions
 */
require_once SWT_DIR . 'inc/utilities/all.php';
require_once SWT_DIR . 'inc/scripts.php';
require_once SWT_DIR . 'inc/blocks/all.php';
require_once SWT_DIR . 'inc/extensions/all.php';
require_once SWT_DIR . 'inc/block-styles/all.php';
/**
 * Admin Functions
 */
require_once SWT_DIR . 'inc/admin/welcome-notice.php';
