const { createHigherOrderComponent } = wp.compose;
const { InspectorControls } = wp.editor;
const { addFilter } = wp.hooks;
const { ToggleControl, Panel, PanelBody, PanelRow } = wp.components;
const { __ } = wp.i18n;

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
									label={__("Hide Desktop", "swt-theme")}
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
									label={__("Hide Tablet", "swt-theme")}
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
									label={__("Hide Mobile", "swt-theme")}
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

if (!spectra.is_spectra_plugin) {
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

if (!spectra.is_spectra_plugin) {
	wp.hooks.addFilter(
		"blocks.registerBlockType",
		"swt/responsive-attributes",
		ResponsiveAttributes
	);
}

