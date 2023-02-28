const { createHigherOrderComponent } = wp.compose;
const { InspectorControls } = wp.editor;
const { addFilter } = wp.hooks;
const { ToggleControl, Panel, PanelBody, PanelRow } = wp.components;
const { __ } = wp.i18n;

const Header = createHigherOrderComponent((BlockEdit) => {
    return (props) => {

        const { attributes, name, setAttributes } = props;

        const { SWTStickyHeader } = attributes;
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
                                <PanelRow>
                                    <ToggleControl
                                        label={__(
                                            "Sticky Header",
                                            "swt-theme"
                                        )}
                                        checked={SWTStickyHeader}
                                        onChange={() =>
                                            setAttributes({
                                                SWTStickyHeader:
                                                    !SWTStickyHeader,
                                            })
                                        }
                                    />
                                </PanelRow>
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
            });
        }
    }

    return settings;
}

wp.hooks.addFilter(
    "blocks.registerBlockType",
    "swt/header-attributes",
    HeaderAttributes
);