import { registerPlugin } from '@wordpress/plugins';
import SwtPageSettingsPopup from './extensions/page-settings/settings';
import './block-extensions/header.js';
import './block-extensions/responsive.js';

registerPlugin( 'swt-page-level-settings', { render: SwtPageSettingsPopup } );
