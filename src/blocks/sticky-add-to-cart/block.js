import { registerBlockType } from "@wordpress/blocks";
import { InnerBlocks } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";

registerBlockType("swt/sticky-add-to-cart", {
	// block settings
	title: __("Sticky Add To Cart", "spectra-one"),
	icon: "smiley",
	category: "common",
	// block implementation
	edit: function () {
		return (
			<div className="swt-sticky-add-to-cart">
				<InnerBlocks
					template={[
						[
							"core/group",
							{
								className: "swt-sticky-add-to-cart",
								backgroundColor: "background",
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
															flexWrap: 'nowrap',
															justifyContent: 'right',
															type: 'flex'
														},
														tagName: 'div'
													},

													[
														[
															"woocommerce/product-price",
															{
																isDescendentOfQueryLoop: true,
																isDescendentOfSingleProductBlock: false,
																isDescendentOfSingleProductTemplate: false
															},
														],
													],

													[
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
			</div>
		);
	},
	save: function () {
		return (
			<div className="my-custom-block">
				<InnerBlocks.Content />
			</div>
		);
	},
});
