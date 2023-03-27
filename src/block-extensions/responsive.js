import { createHigherOrderComponent } from '@wordpress/compose';
import { InspectorControls } from '@wordpress/block-editor';
import { addFilter } from '@wordpress/hooks';
import { ToggleControl, Panel, PanelBody, PanelRow } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

const Responsive = createHigherOrderComponent((BlockEdit) => {
	return (props) => {
		const { attributes, name, setAttributes } = props;
		// Adding compatibility with spectra plugin. So the slugs are same as the plugin.
		const { SWTHideDesktop, SWTHideTab, SWTHideMob } = attributes;

		if( name && name.includes( 'uagb/') ) {
			return (
				<>
					<BlockEdit {...props} />
				</>
			);
		}

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
									checked={SWTHideDesktop}
									onChange={() =>
										setAttributes({
											SWTHideDesktop: !SWTHideDesktop,
										})
									}
								/>
							</PanelRow>

							<PanelRow>
								<ToggleControl
									label={__("Hide Tablet", "spectra-one")}
									checked={SWTHideTab}
									onChange={() =>
										setAttributes({
											SWTHideTab: !SWTHideTab,
										})
									}
								/>
							</PanelRow>
							<PanelRow>
								<ToggleControl
									label={__("Hide Mobile", "spectra-one")}
									checked={SWTHideMob}
									onChange={() =>
										setAttributes({
											SWTHideMob: !SWTHideMob,
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

addFilter("editor.BlockEdit", "swt/responsive", Responsive);

function ResponsiveAttributes(settings) {
	if (settings.attributes) {
		settings.attributes = Object.assign(settings.attributes, {
			SWTHideDesktop: {
				type: "boolean",
				default: false,
			},
			SWTHideTab: {
				type: "boolean",
				default: false,
			},
			SWTHideMob: {
				type: "boolean",
				default: false,
			},
		});
	}

	return settings;
}

addFilter(
	"blocks.registerBlockType",
	"swt/responsive-attributes",
	ResponsiveAttributes
);



