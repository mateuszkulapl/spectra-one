<?php
/**
 * Spectra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Spectra
 * @author  Brainstorm Force
 * @since 1.0.0
 */

declare( strict_types=1 );

namespace Spectra\Theme;

const SWT_VER  = '1.0.0';
const SWT_SLUG = 'spectra';
const SWT_NAME = 'Spectra';
const SWT_NS   = __NAMESPACE__ . '\\';
const SWT_DS   = DIRECTORY_SEPARATOR;
const SWT_DIR  = __DIR__ . SWT_DS;

/**
 * Setup base spectra functions
 */
require_once SWT_DIR . 'inc/utility/dom.php';
require_once SWT_DIR . 'inc/utility.php';
require_once SWT_DIR . 'inc/scripts.php';
require_once SWT_DIR . 'inc/extensions/sticky-header.php';