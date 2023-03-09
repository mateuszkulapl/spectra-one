import { registerPlugin } from '@wordpress/plugins';
import SwtPageSettingsPopup from './extensions/page-settings/settings';
import { SwtSettingList } from './extensions/page-settings/settings-list.js';
import { addFilter } from '@wordpress/hooks';
import './extensions/editor/all.js';
import './block-extensions/all.js';

if (spectra.is_spectra_plugin) {
	addFilter(
		'uagb.pluginSidebar',
		'swt/setting-list',
		function ( markup, props ) {
			return <SwtSettingList {...props}/>
		}
	);
}

if (!spectra.is_spectra_plugin) {
    registerPlugin('swt-page-level-settings', { render: SwtPageSettingsPopup });
}
