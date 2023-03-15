import { createHigherOrderComponent } from '@wordpress/compose';
import { InspectorControls } from '@wordpress/block-editor';
import { addFilter } from '@wordpress/hooks';
import { ToggleControl, Panel, PanelBody, PanelRow } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

const Responsive = createHigherOrderComponent((BlockEdit) => {
	return (props) => {
		const { attributes, name, setAttributes } = props;
		// Adding compatibility with spectra plugin. So the slugs are same as the plugin.
		const { UAGHideDesktop, UAGHideTab, UAGHideMob } = attributes;

		return (
			<>
				<BlockEdit {...props} />
				<InspectorControls>
					<Panel>
						<PanelBody
							title="Responsive Settings"
							initialOpen={true}
						>
							<PanelRow>
								<ToggleControl
									label={__("Hide Desktop", "spectra-one")}
									checked={UAGHideDesktop}
									onChange={() =>
										setAttributes({
											UAGHideDesktop: !UAGHideDesktop,
										})
									}
								/>
							</PanelRow>

							<PanelRow>
								<ToggleControl
									label={__("Hide Tablet", "spectra-one")}
									checked={UAGHideTab}
									onChange={() =>
										setAttributes({
											UAGHideTab: !UAGHideTab,
										})
									}
								/>
							</PanelRow>
							<PanelRow>
								<ToggleControl
									label={__("Hide Mobile", "spectra-one")}
									checked={UAGHideMob}
									onChange={() =>
										setAttributes({
											UAGHideMob: !UAGHideMob,
										})
									}
								/>
							</PanelRow>
						</PanelBody>
					</Panel>
				</InspectorControls>
			</>
		);

	};
}, "Responsive");

if (!spectraOne.is_spectra_plugin) {
	addFilter("editor.BlockEdit", "swt/responsive", Responsive);
}



function ResponsiveAttributes(settings) {
	if (settings.attributes) {
		settings.attributes = Object.assign(settings.attributes, {
			UAGHideDesktop: {
				type: "boolean",
				default: false,
			},
			UAGHideTab: {
				type: "boolean",
				default: false,
			},
			UAGHideMob: {
				type: "boolean",
				default: false,
			},
		});
	}

	return settings;
}

if (!spectraOne.is_spectra_plugin) {
	addFilter(
		"blocks.registerBlockType",
		"swt/responsive-attributes",
		ResponsiveAttributes
	);
}

