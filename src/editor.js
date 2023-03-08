import { registerPlugin } from '@wordpress/plugins';
import SwtPageSettingsPopup from './extensions/page-settings/settings';
import './extensions/editor/all.js';
import './block-extensions/all.js';

if (!spectra.is_spectra_plugin) {
    registerPlugin('swt-page-level-settings', { render: SwtPageSettingsPopup });
}
