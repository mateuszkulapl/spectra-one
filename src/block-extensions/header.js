import { createHigherOrderComponent } from '@wordpress/compose';
import { InspectorControls } from '@wordpress/block-editor';
import { addFilter } from '@wordpress/hooks';
import { ToggleControl, Panel, PanelBody, PanelRow } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

const Header = createHigherOrderComponent((BlockEdit) => {
    return (props) => {

        const { attributes, name, setAttributes } = props;

        const { SWTStickyHeader, SWTTransparentHeader } = attributes;
        if ("header" === attributes.slug && "core/template-part" === name) {
            return (
                <>
                    <BlockEdit {...props} />
                    <InspectorControls>
                        <Panel>
                            <PanelBody
                                title="Header Settings"
                                initialOpen={true}
                            >
                                { !SWTTransparentHeader && <PanelRow>
                                    <ToggleControl
                                        label={__(
                                            "Enable Sticky Header",
                                            "spectra"
                                        )}
                                        help={
                                            SWTStickyHeader
                                                ? __("Transparent header option will be disabled on enabling this option.", "spectra")
                                                : ''
                                        }
                                        checked={SWTStickyHeader}
                                        onChange={() =>
                                            setAttributes({
                                                SWTStickyHeader:
                                                    !SWTStickyHeader,
                                            })
                                        }
                                    />
                                </PanelRow> }
                                { !SWTStickyHeader && <PanelRow>
                                    <ToggleControl
                                        label={__(
                                            "Enable Transparent Header",
                                            "spectra"
                                        )}
                                        help={
                                            SWTTransparentHeader
                                                ? __("Sticky header option will be disabled on enabling this option.", "spectra")
                                                : ''
                                        }
                                        checked={SWTTransparentHeader}
                                        onChange={() =>
                                            setAttributes({
                                                SWTTransparentHeader:
                                                    !SWTTransparentHeader,
                                            })
                                        }
                                    />
                                </PanelRow> }
                            </PanelBody>
                        </Panel>
                    </InspectorControls>
                </>
            );
        } else {
            return (
                <>
                    <BlockEdit {...props} />
                </>
            );
        }
    };
}, "Header");


addFilter("editor.BlockEdit", "swt/header", Header);

function HeaderAttributes(settings) {
    const includeBlock = ["core/template-part"];

    if (includeBlock.includes(settings.name)) {
        if (settings.attributes) {
            settings.attributes = Object.assign(settings.attributes, {
                SWTStickyHeader: {
                    type: "boolean",
                    default: false,
                },
                SWTTransparentHeader: {
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
    "swt/header-attributes",
    HeaderAttributes
);