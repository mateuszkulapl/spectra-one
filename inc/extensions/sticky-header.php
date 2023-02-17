<?php 

declare( strict_types=1 );

namespace Spectra\Theme;

//add_filter( 'render_block', SWT_NS . 'sticky_header', 10, 2 );

/**
 * When the "hideBlock" custom block attribute is equal to "1" an empty string is returned.
 *
 * @param $block_content
 * @param $block
 * @return string
 */
function sticky_header($block_content, $block){

if( $block['blockName'] === 'core/pattern' && $block['attrs']['slug'] === 'header-default') {

    if( true === $block['attrs']['SWTStickyHeader'] ) {
        
    }
} else {
    return $block_content;
}

}