<?php

declare(strict_types=1);

namespace Spectra\Theme;

add_filter('render_block', SWT_NS . 'swt_responsive', 10, 2);

/**
 *  Responsive support.
 *
 * @param $block_content
 * @param $block
 * @return string
 */
function swt_responsive(string $block_content, array $block)
{

    $responsive_classes = '';

    if (isset($block['attrs']['UAGHideDesktop']) && true === $block['attrs']['UAGHideDesktop']) {
        $responsive_classes .= ' swt-hide-desktop';
    }

    if (isset($block['attrs']['UAGHideTab']) && true === $block['attrs']['UAGHideTab']) {
        $responsive_classes .= ' swt-hide-tablet';
    }

    if (isset($block['attrs']['UAGHideMob']) && true === $block['attrs']['UAGHideMob']) {
        $responsive_classes .= ' swt-hide-mobile';
    }

    $dom   = dom($block_content);
    $first_item = get_dom_element('*', $dom);

    if (!$first_item) {
        return $block_content;
    }

    $classes = $first_item->getAttribute('class');
    $first_item->setAttribute('class', $classes . $responsive_classes);

    $block_content = $dom->saveHTML();

    add_filter('swt_dynamic_theme_css', SWT_NS . 'swt_responsive_css');

    return $block_content;
}

/**
 * Load inline css.
 *
 * @return string
 */
function swt_responsive_css($css): string
{

    $css_desktop_output = array(
        '.swt-hide-desktop' => array(
            'display' => 'none !important',
        ),
    );

    $css .= swt_parse_css($css_desktop_output, '1025', '');

    $css_tablet_output = array(
        '.swt-hide-tablet' => array(
            'display' => 'none !important ',
        ),
    );

    $css .= swt_parse_css($css_tablet_output, '769', '1024');

    $css_mobile_output = array(
        '.swt-hide-mobile' => array(
            'display' => 'none !important',
        ),
    );

    $css .= swt_parse_css($css_mobile_output, '', '767');

    return $css;
}
