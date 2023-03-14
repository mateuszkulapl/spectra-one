
import { PanelBody, ToggleControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

export const SwtSettingList = (props) => {
    const disableSections = Object.entries(spectraOne.disable_sections).map(([key, value]) => {
        let sectionValue = props.meta[value['key']] && true === props.meta[value['key']] ? true : false;
        return (
            <ToggleControl
                key={key}
                label={value['label']}
                checked={sectionValue}
                onChange={(val) => {
                    props.setMetaFieldValue(val, value['key']);
                }}
            />);
    });

    const panelBody = <PanelBody
        title={__('Disable Elements', 'spectra-one')}
        initialOpen={true}
        className={'swt-disable-elements-panel'}
    >
        {disableSections}
    </PanelBody>

    return panelBody;
}