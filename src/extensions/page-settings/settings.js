/**
 * Meta Options build.
 */
import { PluginSidebar, PluginSidebarMoreMenuItem } from '@wordpress/edit-post';
import { compose } from '@wordpress/compose';
import { withSelect, withDispatch } from '@wordpress/data';
import { __ } from '@wordpress/i18n';
import SettingsIcons from './icons.js';
import { PanelBody, ToggleControl } from '@wordpress/components';
import { addFilter } from '@wordpress/hooks/build-types/index.js';

const SwtPageSettingsPopup = (props) => {

	const disableSections = Object.entries(spectra.disable_sections).map(([key, value]) => {
		let sectionValue = props.meta[value['key']] && true === props.meta[value['key']] ? true : false;
		return (
			<PanelBody
				title={__('Disable Elements')}
				initialOpen={true}
				className={'swt-disable-elements-panel'}
			>
				<ToggleControl
					key={key}
					label={value['label']}
					checked={sectionValue}
					onChange={(val) => {
						props.setMetaFieldValue(val, value['key']);
					}}
				/>
			</PanelBody>
		);

	});


	if (!spectra.is_spectra_plugin) {

		return (
			<>
				{/* Page Settings Icon. */}
				<PluginSidebarMoreMenuItem
					target="swt-page-settings-panel"
					icon={SettingsIcons.logo}
				>
					{__('Page Settings')}
				</PluginSidebarMoreMenuItem>

				{/* Page Settings Area. */}
				<PluginSidebar
					isPinnable={true}
					icon={SettingsIcons.logo}
					name="swt-page-settings-panel"
					title={__('Page Settings')}
					className={'swt-sidebar'}
				>
					{disableSections}
				</PluginSidebar>
			</>
		);

	}
}

export default compose(
	withSelect((select) => {
		const postMeta = select('core/editor').getEditedPostAttribute('meta');
		const oldPostMeta = select('core/editor').getCurrentPostAttribute('meta');
		return {
			meta: { ...oldPostMeta, ...postMeta },
			oldMeta: oldPostMeta,
		};
	}),
	withDispatch((dispatch) => ({
		setMetaFieldValue: (value, field) => dispatch('core/editor').editPost(
			{ meta: { [field]: value } }
		),
	})),
)(SwtPageSettingsPopup);
