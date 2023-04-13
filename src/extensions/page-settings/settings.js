/**
 * Meta Options build.
 */
import { PluginSidebar, PluginSidebarMoreMenuItem } from '@wordpress/edit-post';
import { compose } from '@wordpress/compose';
import { withSelect, withDispatch } from '@wordpress/data';
import { __ } from '@wordpress/i18n';
import SettingsIcons from './icons.js';
import { SwtSettingList } from './settings-list.js';


const SwtPageSettingsPopup = (props) => {

	return (
		<>
			{/* Page Settings Icon. */}
			<PluginSidebarMoreMenuItem
				target="swt-page-settings-panel"
				icon={SettingsIcons.logo}
			>
				{__('Spectra Page Settings', 'spectra-one')}
			</PluginSidebarMoreMenuItem>

			{/* Page Settings Area. */}
			<PluginSidebar
				isPinnable={true}
				icon={SettingsIcons.logo}
				name="swt-page-settings-panel"
				title={__('Spectra Page Settings', 'spectra-one')}
				className={'swt-sidebar'}
			>
				<SwtSettingList {...props} />
			</PluginSidebar>
		</>
	);
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
