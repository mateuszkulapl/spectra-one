import { registerBlockType } from "@wordpress/blocks";
import { InnerBlocks } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";
import { InspectorControls } from "@wordpress/block-editor";
import {
	Panel,
	PanelBody,
	__experimentalToggleGroupControl as ToggleGroupControl,
	__experimentalToggleGroupControlOption as ToggleGroupControlOption,
} from "@wordpress/components";

const blockAttributes = {
	SWTPosition: {
		type: "string",
		default: "bottom",
	},
};

registerBlockType("swt/sticky-add-to-cart", {
	// block settings
	title: __("Sticky Add To Cart", "spectra-one"),
	icon: "smiley",
	category: "common",
	attributes: blockAttributes,
	// block implementation
	edit: function (props) {
		const { attributes, setAttributes } = props;
		const { SWTPosition } = attributes;

		return (
			<>
				<InspectorControls>
					<Panel>
						<PanelBody
							title="Stick Add To Cart Settings"
							initialOpen={true}
						>
							<ToggleGroupControl
								label="Position"
								value={SWTPosition}
								onChange={ (value) =>
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
					template={[
						[
							"core/group",
							{
								className: `swt-sticky-add-to-cart ${SWTPosition ? SWTPosition : ''}`,
								backgroundColor: "background",
								attributes: {
									SWTHideMob: true
								},
								layout: {
									type: "constrained",
								},
								tagName: "div",
							},
							[
								[
									"core/columns",
									{
										align: "wide",
										isStackedOnMobile: false,
										verticalAlignment: "center",
									},
									[
										[
											"core/column",
											{
												verticalAlignment: "center",
											},
											[
												[
													"core/post-title",
													{
														isLink: false,
														level: 5,
														linkTarget: "_self",
														rel: "",
													},
												],
											],
										],

										[
											"core/column",
											{
												verticalAlignment: "center",
											},
											[
												[
													"core/group",
													{
														layout: {
															flexWrap: "nowrap",
															justifyContent:
																"right",
															type: "flex",
														},
														tagName: "div",
													},

													[
														[
															"woocommerce/product-price",
															{
																isDescendentOfQueryLoop: true,
																isDescendentOfSingleProductBlock: false,
																isDescendentOfSingleProductTemplate: false,
															},
														],
														[
															"woocommerce/add-to-cart-form",
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
					]}
				/>
			</>
		);
	},
	save: function () {
		return (
			<>
				<InnerBlocks.Content />
			</>
		);
	},
});
