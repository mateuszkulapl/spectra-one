import { registerBlockType } from '@wordpress/blocks';
import { InnerBlocks, InspectorControls } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';
import {
	Panel,
	PanelBody,
	__experimentalToggleGroupControl as ToggleGroupControl,
	__experimentalToggleGroupControlOption as ToggleGroupControlOption,
} from '@wordpress/components';

const blockAttributes = {
	SWTPosition: {
		type: 'string',
		default: 'bottom',
	},
};

registerBlockType( 'swt/sticky-add-to-cart', {
	// block settings
	title: __( 'Sticky Add To Cart', 'spectra-one' ),
	icon: 'smiley',
	category: 'common',
	attributes: blockAttributes,
	// block implementation
	edit ( props ) {
		const { attributes, setAttributes } = props;
		const { SWTPosition } = attributes;

		return (
			<>
				<InspectorControls>
					<Panel>
						<PanelBody
							title="Stick Add To Cart Settings"
							initialOpen={ true }
						>
							<ToggleGroupControl
								label="Position"
								value={ SWTPosition }
								onChange={ ( value ) =>
									setAttributes( {
										SWTPosition: value,
									} )
								}
								isBlock
							>
								<ToggleGroupControlOption
									value="top"
									label="Top"
								/>
								<ToggleGroupControlOption
									value="bottom"
									label="Bottom"
								/>
							</ToggleGroupControl>
						</PanelBody>
					</Panel>
				</InspectorControls>

				<InnerBlocks
					template={ [
						[
							'core/group',
							{
								className: 'swt-sticky-add-to-cart',
								backgroundColor: 'background',
								attributes: {
									SWTHideMob: true,
								},
								style: {
									spacing: {
										padding: {
											bottom: 'var:preset|spacing|x-small',
											left: 'var:preset|spacing|x-small',
											right: 'var:preset|spacing|x-small',
											top: 'var:preset|spacing|x-small',
										},
									},
								},
								layout: {
									type: 'constrained',
								},
								tagName: 'div',
							},
							[
								[
									'core/columns',
									{
										align: 'wide',
										isStackedOnMobile: false,
										verticalAlignment: 'center',
									},
									[
										[
											'core/column',
											{
												verticalAlignment: 'center',
												SWTHideMob: true,
											},
											[
												[
													'core/post-title',
													{
														isLink: false,
														level: 6,
														linkTarget: '_self',
														rel: '',
													},
												],
											],
										],

										[
											'core/column',
											{
												verticalAlignment: 'center',
											},
											[
												[
													'core/group',
													{
														className: 'swt-mobile-space-between',
														layout: {
															flexWrap: 'nowrap',
															justifyContent:
																'right',
															type: 'flex',
														},
														tagName: 'div',
													},

													[
														[
															'woocommerce/product-price',
															{
																isDescendentOfQueryLoop: true,
																isDescendentOfSingleProductBlock: false,
																isDescendentOfSingleProductTemplate: false,
															},
														],
														[
															'woocommerce/add-to-cart-form',
															{},
														],
													],
												],
											],
										],
									],
								],
							],
						],
					] }
				/>
			</>
		);
	},
	save () {
		return (
			<>
				<InnerBlocks.Content />
			</>
		);
	},
} );
