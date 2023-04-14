import { registerPlugin } from "@wordpress/plugins";
import SwtPageSettingsPopup from "./extensions/page-settings/settings";
import { SwtSettingList } from "./extensions/page-settings/settings-list.js";
import { addFilter } from "@wordpress/hooks";
import "./extensions/editor/all.js";
import "./block-extensions/all.js";

if (spectraOne.is_spectra_plugin) {
	addFilter(
		"spectra.page-sidebar.before",
		"swt/setting-list",
		function (markup, props) {
			return (
				<>
					{markup}
					<SwtSettingList {...props} />
				</>
			);
		},
		10
	);
}

if (!spectraOne.is_spectra_plugin) {
	registerPlugin("swt-page-level-settings", { render: SwtPageSettingsPopup });
}
