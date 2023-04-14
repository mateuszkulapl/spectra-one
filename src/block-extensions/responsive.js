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
	// if not excluded then it causes render error as adding custom attributes to these blocks are prohibited.
	const excludeBlock = [ 'core/archives', 'core/calendar', 'core/latest-comments', 'core/tag-cloud', 'core/rss' ];

	if ( ! excludeBlock.includes( settings.name ) ) { 

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

	}

	return settings;
}

addFilter(
	"blocks.registerBlockType",
	"swt/responsive-attributes",
	ResponsiveAttributes
);



