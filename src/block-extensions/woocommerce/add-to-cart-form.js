import { createHigherOrderComponent } from '@wordpress/compose';
import { InspectorControls } from '@wordpress/block-editor';
import { addFilter } from '@wordpress/hooks';
import {
	ToggleControl,
	Panel,
	PanelBody,
	PanelRow,
} from '@wordpress/components';
import { __ } from '@wordpress/i18n';

const StickyAddToCart = createHigherOrderComponent( ( BlockEdit ) => {
	return ( props ) => {
		const { attributes, name, setAttributes } = props;

		const { SWTStickyAddToCart, SWTStickyAddToCartPosition } = attributes;

		if ( name && name.includes( 'woocommerce/add-to-cart-form' ) ) {
			return (
				<>
					<BlockEdit { ...props } />
					<InspectorControls>
						<Panel>
							<PanelBody
								title="Spectra One Options"
								initialOpen={ true }
							>

								<PanelRow>
									<ToggleControl
										label={ __( 'Enable Sticky Add To Cart', 'spectra-one' ) }
										checked={ SWTStickyAddToCart }
										onChange={ () =>
											setAttributes( {
												SWTStickyAddToCart: ! SWTStickyAddToCart,
											} )
										}
									/>
								</PanelRow>
								<PanelRow>
									<ToggleControl
										label={ __( 'Sticky Add To Cart Position', 'spectra-one' ) }
										checked={ SWTStickyAddToCartPosition }
										onChange={ () =>
											setAttributes( {
												SWTStickyAddToCartPosition: ! SWTStickyAddToCartPosition,
											} )
										}
									/>
								</PanelRow>
							</PanelBody>
						</Panel>
					</InspectorControls>
				</>
			);
		}
		return (
			<>
				<BlockEdit { ...props } />
			</>
		);
	};
}, 'StickyAddToCart' );

addFilter( 'editor.BlockEdit', 'swt/sticky-add-to-cart', StickyAddToCart );

function StickyAddToCartAttributes( settings ) {
	const { name, attributes } = settings;

	if ( name && name.includes( 'woocommerce/add-to-cart-form' ) ) {
		if ( attributes ) {
			settings.attributes = Object.assign( attributes, {
				SWTStickyAddToCart: {
					type: 'boolean',
					default: false,
				},
				SWTStickyAddToCartPosition: {
					type: 'boolean',
					default: false,
				},
			} );
		}
	}

	return settings;
}

addFilter(
	'blocks.registerBlockType',
	'swt/sticky-add-to-cart-attributes',
	StickyAddToCartAttributes
);
