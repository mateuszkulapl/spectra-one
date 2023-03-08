/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/block-extensions/all.js":
/*!*************************************!*\
  !*** ./src/block-extensions/all.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _header_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./header.js */ "./src/block-extensions/header.js");
/* harmony import */ var _responsive_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./responsive.js */ "./src/block-extensions/responsive.js");



/***/ }),

/***/ "./src/block-extensions/header.js":
/*!****************************************!*\
  !*** ./src/block-extensions/header.js ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_compose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/compose */ "@wordpress/compose");
/* harmony import */ var _wordpress_compose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_compose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_hooks__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/hooks */ "@wordpress/hooks");
/* harmony import */ var _wordpress_hooks__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_hooks__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_5__);






const Header = (0,_wordpress_compose__WEBPACK_IMPORTED_MODULE_1__.createHigherOrderComponent)(BlockEdit => {
  return props => {
    const {
      attributes,
      name,
      setAttributes
    } = props;
    const {
      SWTStickyHeader,
      SWTTransparentHeader
    } = attributes;
    if ("header" === attributes.slug && "core/template-part" === name) {
      return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(BlockEdit, props), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__.InspectorControls, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.Panel, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.PanelBody, {
        title: "Header Settings",
        initialOpen: true
      }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.PanelRow, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.ToggleControl, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_5__.__)("Enable Sticky Header", "spectra"),
        checked: SWTStickyHeader,
        onChange: () => setAttributes({
          SWTStickyHeader: !SWTStickyHeader
        })
      })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.PanelRow, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.ToggleControl, {
        label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_5__.__)("Enable Transparent Header", "spectra"),
        checked: SWTTransparentHeader,
        onChange: () => setAttributes({
          SWTTransparentHeader: !SWTTransparentHeader
        })
      }))))));
    } else {
      return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(BlockEdit, props));
    }
  };
}, "Header");
(0,_wordpress_hooks__WEBPACK_IMPORTED_MODULE_3__.addFilter)("editor.BlockEdit", "swt/header", Header);
function HeaderAttributes(settings) {
  const includeBlock = ["core/template-part"];
  if (includeBlock.includes(settings.name)) {
    if (settings.attributes) {
      settings.attributes = Object.assign(settings.attributes, {
        SWTStickyHeader: {
          type: "boolean",
          default: false
        },
        SWTTransparentHeader: {
          type: "boolean",
          default: false
        }
      });
    }
  }
  return settings;
}
(0,_wordpress_hooks__WEBPACK_IMPORTED_MODULE_3__.addFilter)("blocks.registerBlockType", "swt/header-attributes", HeaderAttributes);

/***/ }),

/***/ "./src/block-extensions/responsive.js":
/*!********************************************!*\
  !*** ./src/block-extensions/responsive.js ***!
  \********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_compose__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/compose */ "@wordpress/compose");
/* harmony import */ var _wordpress_compose__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_compose__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_hooks__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/hooks */ "@wordpress/hooks");
/* harmony import */ var _wordpress_hooks__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_hooks__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_5__);






const Responsive = (0,_wordpress_compose__WEBPACK_IMPORTED_MODULE_1__.createHigherOrderComponent)(BlockEdit => {
  return props => {
    const {
      attributes,
      name,
      setAttributes
    } = props;
    // Adding compatibility with spectra plugin. So the slugs are same as the plugin.
    const {
      UAGHideDesktop,
      UAGHideTab,
      UAGHideMob
    } = attributes;
    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(BlockEdit, props), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__.InspectorControls, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.Panel, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.PanelBody, {
      title: "Responsive Settings",
      initialOpen: true
    }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.PanelRow, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.ToggleControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_5__.__)("Hide Desktop", "spectra"),
      checked: UAGHideDesktop,
      onChange: () => setAttributes({
        UAGHideDesktop: !UAGHideDesktop
      })
    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.PanelRow, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.ToggleControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_5__.__)("Hide Tablet", "spectra"),
      checked: UAGHideTab,
      onChange: () => setAttributes({
        UAGHideTab: !UAGHideTab
      })
    })), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.PanelRow, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__.ToggleControl, {
      label: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_5__.__)("Hide Mobile", "spectra"),
      checked: UAGHideMob,
      onChange: () => setAttributes({
        UAGHideMob: !UAGHideMob
      })
    }))))));
  };
}, "Responsive");
if (!spectra.is_spectra_plugin) {
  (0,_wordpress_hooks__WEBPACK_IMPORTED_MODULE_3__.addFilter)("editor.BlockEdit", "swt/responsive", Responsive);
}
function ResponsiveAttributes(settings) {
  if (settings.attributes) {
    settings.attributes = Object.assign(settings.attributes, {
      UAGHideDesktop: {
        type: "boolean",
        default: false
      },
      UAGHideTab: {
        type: "boolean",
        default: false
      },
      UAGHideMob: {
        type: "boolean",
        default: false
      }
    });
  }
  return settings;
}
if (!spectra.is_spectra_plugin) {
  (0,_wordpress_hooks__WEBPACK_IMPORTED_MODULE_3__.addFilter)("blocks.registerBlockType", "swt/responsive-attributes", ResponsiveAttributes);
}

/***/ }),

/***/ "./src/extensions/editor/all.js":
/*!**************************************!*\
  !*** ./src/extensions/editor/all.js ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _editor_title_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./editor-title.js */ "./src/extensions/editor/editor-title.js");
/* harmony import */ var _editor_title_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_editor_title_js__WEBPACK_IMPORTED_MODULE_0__);


/***/ }),

/***/ "./src/extensions/editor/editor-title.js":
/*!***********************************************!*\
  !*** ./src/extensions/editor/editor-title.js ***!
  \***********************************************/
/***/ (() => {

window.addEventListener('load', function (e) {
  swt_onload_function();
});
function swt_onload_function() {
  /* Do things after DOM has fully loaded */

  wp.data.subscribe(function () {
    setTimeout(function () {
      const editorStylesWrapper = document.querySelector('.editor-styles-wrapper');
      if (null !== editorStylesWrapper) {
        const editorStylesWrapperWidth = parseInt(editorStylesWrapper.offsetWidth);
        if (editorStylesWrapperWidth < 1350) {
          editorStylesWrapper.classList.remove('swt-stacked-title-visibility');
          editorStylesWrapper.classList.add('swt-stacked-title-visibility');
        } else {
          editorStylesWrapper.classList.remove('swt-stacked-title-visibility');
        }
      }
      console.log(wp.data.select('core/editor').getEditedPostAttribute('meta')['swt_meta_site_title_display']);

      // Title visibility with new editor compatibility update.
      const titleVisibility = document.querySelector('.title-visibility'),
        titleBlock = document.querySelector('.edit-post-visual-editor__post-title-wrapper');
      if (null === titleVisibility && null !== titleBlock) {
        var titleVisibilityTrigger = '';
        if (false === wp.data.select('core/editor').getEditedPostAttribute('meta')['swt_meta_site_title_display']) {
          titleVisibilityTrigger = '<span class="dashicons dashicons-hidden title-visibility" data-tooltip="Enable Title"></span>';
          titleBlock.classList.toggle('invisible');
        } else {
          titleVisibilityTrigger = '<span class="dashicons dashicons-visibility title-visibility" data-tooltip="Disable Title"></span>';
        }
        titleBlock.insertAdjacentHTML('beforeend', titleVisibilityTrigger);
        document.querySelector('.title-visibility').addEventListener('click', function () {
          const titleBlock = document.querySelector('.edit-post-visual-editor__post-title-wrapper');
          titleBlock.classList.toggle('invisible');
          if (this.classList.contains('dashicons-hidden')) {
            this.classList.add('dashicons-visibility');
            this.classList.remove('dashicons-hidden');
            this.dataset.tooltip = 'Disable Title';
            wp.data.dispatch('core/editor').editPost({
              meta: {
                'swt_meta_site_title_display': true
              }
            });
          } else {
            this.classList.add('dashicons-hidden');
            this.classList.remove('dashicons-visibility');
            this.dataset.tooltip = 'Enable Title';
            wp.data.dispatch('core/editor').editPost({
              meta: {
                'swt_meta_site_title_display': false
              }
            });
          }
        });
      }

      // Show post/page title wrapper outline & eye icon only when clicked.
      const titleInput = document.querySelector('.editor-post-title__input');
      const visibilityIcon = document.querySelector('.title-visibility');
      if (null != titleInput && null != visibilityIcon) {
        document.addEventListener('click', function (event) {
          if (!titleBlock.contains(event.target)) {
            visibilityIcon.classList.remove('swt-show-visibility-icon');
            titleInput.classList.remove('swt-show-editor-title-outline');
          }
        });
        document.addEventListener('visibilitychange', function () {
          visibilityIcon.classList.remove('swt-show-visibility-icon');
          titleInput.classList.remove('swt-show-editor-title-outline');
        });
        titleBlock.addEventListener('focusout', function () {
          visibilityIcon.classList.remove('swt-show-visibility-icon');
          titleInput.classList.remove('swt-show-editor-title-outline');
        });
        titleBlock.addEventListener('click', function () {
          visibilityIcon.classList.add('swt-show-visibility-icon');
          titleInput.classList.add('swt-show-editor-title-outline');
        });
        titleInput.addEventListener('input', function () {
          visibilityIcon.classList.add('swt-show-visibility-icon');
          this.classList.add('swt-show-editor-title-outline');
        });
      }
      const responsivePreview = document.querySelectorAll('.is-tablet-preview, .is-mobile-preview');
      if (responsivePreview.length) {
        document.body.classList.add('responsive-enabled');
      } else {
        document.body.classList.remove('responsive-enabled');
      }
    }, 1);
  });
}

/***/ }),

/***/ "./src/extensions/page-settings/icons.js":
/*!***********************************************!*\
  !*** ./src/extensions/page-settings/icons.js ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);

const SettingsIcons = {
  logo: (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("svg", {
    className: "swt-page-settings-button",
    xmlns: "http://www.w3.org/2000/svg",
    width: "24",
    height: "24",
    viewBox: "0 0 70 70",
    fill: "none"
  }, " ", (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("path", {
    fillRule: "evenodd",
    clipRule: "evenodd",
    d: "M35 70C54.33 70 70 54.33 70 35C70 15.67 54.33 0 35 0C15.67 0 0 15.67 0 35C0 54.33 15.67 70 35 70ZM24.4471 23.5112C18.9722 26.7403 20.2852 35.3759 26.5032 37.0351L36.8875 39.806C37.7533 40.037 37.91 41.224 37.135 41.6811L27.0972 47.5799L26.036 58L45.5529 46.4888C51.0278 43.2597 49.7148 34.6241 43.4968 32.9649L33.1125 30.1941C32.2467 29.963 32.09 28.776 32.865 28.3189L42.9028 22.4202L43.964 12L24.4471 23.5112Z"
  }), " ")
};
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (SettingsIcons);

/***/ }),

/***/ "./src/extensions/page-settings/settings.js":
/*!**************************************************!*\
  !*** ./src/extensions/page-settings/settings.js ***!
  \**************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_edit_post__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/edit-post */ "@wordpress/edit-post");
/* harmony import */ var _wordpress_edit_post__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_edit_post__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_compose__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/compose */ "@wordpress/compose");
/* harmony import */ var _wordpress_compose__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_compose__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/data */ "@wordpress/data");
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_data__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _icons_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./icons.js */ "./src/extensions/page-settings/icons.js");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__);

/**
 * Meta Options build.
 */






const SwtPageSettingsPopup = props => {
  const disableSections = Object.entries(spectra.disable_sections).map(_ref => {
    let [key, value] = _ref;
    let sectionValue = props.meta[value['key']] && true === props.meta[value['key']] ? true : false;
    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__.ToggleControl, {
      key: key,
      label: value['label'],
      checked: sectionValue,
      onChange: val => {
        props.setMetaFieldValue(val, value['key']);
      }
    });
  });
  return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_edit_post__WEBPACK_IMPORTED_MODULE_1__.PluginSidebarMoreMenuItem, {
    target: "swt-page-settings-panel",
    icon: _icons_js__WEBPACK_IMPORTED_MODULE_5__["default"].logo
  }, (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_4__.__)('Page Settings')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_edit_post__WEBPACK_IMPORTED_MODULE_1__.PluginSidebar, {
    isPinnable: true,
    icon: _icons_js__WEBPACK_IMPORTED_MODULE_5__["default"].logo,
    name: "swt-page-settings-panel",
    title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_4__.__)('Page Settings'),
    className: 'swt-sidebar'
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__.PanelBody, {
    title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_4__.__)('Disable Elements'),
    initialOpen: true,
    className: 'swt-disable-elements-panel'
  }, disableSections)));
};
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ((0,_wordpress_compose__WEBPACK_IMPORTED_MODULE_2__.compose)((0,_wordpress_data__WEBPACK_IMPORTED_MODULE_3__.withSelect)(select => {
  const postMeta = select('core/editor').getEditedPostAttribute('meta');
  const oldPostMeta = select('core/editor').getCurrentPostAttribute('meta');
  return {
    meta: {
      ...oldPostMeta,
      ...postMeta
    },
    oldMeta: oldPostMeta
  };
}), (0,_wordpress_data__WEBPACK_IMPORTED_MODULE_3__.withDispatch)(dispatch => ({
  setMetaFieldValue: (value, field) => dispatch('core/editor').editPost({
    meta: {
      [field]: value
    }
  })
})))(SwtPageSettingsPopup));

/***/ }),

/***/ "@wordpress/block-editor":
/*!*************************************!*\
  !*** external ["wp","blockEditor"] ***!
  \*************************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["blockEditor"];

/***/ }),

/***/ "@wordpress/components":
/*!************************************!*\
  !*** external ["wp","components"] ***!
  \************************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["components"];

/***/ }),

/***/ "@wordpress/compose":
/*!*********************************!*\
  !*** external ["wp","compose"] ***!
  \*********************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["compose"];

/***/ }),

/***/ "@wordpress/data":
/*!******************************!*\
  !*** external ["wp","data"] ***!
  \******************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["data"];

/***/ }),

/***/ "@wordpress/edit-post":
/*!**********************************!*\
  !*** external ["wp","editPost"] ***!
  \**********************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["editPost"];

/***/ }),

/***/ "@wordpress/element":
/*!*********************************!*\
  !*** external ["wp","element"] ***!
  \*********************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["element"];

/***/ }),

/***/ "@wordpress/hooks":
/*!*******************************!*\
  !*** external ["wp","hooks"] ***!
  \*******************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["hooks"];

/***/ }),

/***/ "@wordpress/i18n":
/*!******************************!*\
  !*** external ["wp","i18n"] ***!
  \******************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["i18n"];

/***/ }),

/***/ "@wordpress/plugins":
/*!*********************************!*\
  !*** external ["wp","plugins"] ***!
  \*********************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["plugins"];

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!***********************!*\
  !*** ./src/editor.js ***!
  \***********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_plugins__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/plugins */ "@wordpress/plugins");
/* harmony import */ var _wordpress_plugins__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_plugins__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _extensions_page_settings_settings__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./extensions/page-settings/settings */ "./src/extensions/page-settings/settings.js");
/* harmony import */ var _extensions_editor_all_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./extensions/editor/all.js */ "./src/extensions/editor/all.js");
/* harmony import */ var _block_extensions_all_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./block-extensions/all.js */ "./src/block-extensions/all.js");




(0,_wordpress_plugins__WEBPACK_IMPORTED_MODULE_0__.registerPlugin)('swt-page-level-settings', {
  render: _extensions_page_settings_settings__WEBPACK_IMPORTED_MODULE_1__["default"]
});
})();

/******/ })()
;
//# sourceMappingURL=editor.js.map