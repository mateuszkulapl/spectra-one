!function(){var e={837:function(){window.addEventListener("load",(function(e){wp.data.subscribe((function(){setTimeout((function(){const e=document.querySelector(".editor-styles-wrapper");null!==e&&(parseInt(e.offsetWidth)<1350?(e.classList.remove("swt-stacked-title-visibility"),e.classList.add("swt-stacked-title-visibility")):e.classList.remove("swt-stacked-title-visibility"));const t=document.querySelector(".title-visibility"),i=document.querySelector(".edit-post-visual-editor__post-title-wrapper");if(null===t&&null!==i){var s="";!1===wp.data.select("core/editor").getEditedPostAttribute("meta").swt_meta_site_title_display?(s='<span class="dashicons dashicons-hidden title-visibility" data-tooltip="Enable Title"></span>',i.classList.toggle("invisible")):s='<span class="dashicons dashicons-visibility title-visibility" data-tooltip="Disable Title"></span>',i.insertAdjacentHTML("beforeend",s),document.querySelector(".title-visibility").addEventListener("click",(function(){document.querySelector(".edit-post-visual-editor__post-title-wrapper").classList.toggle("invisible"),this.classList.contains("dashicons-hidden")?(this.classList.add("dashicons-visibility"),this.classList.remove("dashicons-hidden"),this.dataset.tooltip="Disable Title",wp.data.dispatch("core/editor").editPost({meta:{swt_meta_site_title_display:!0}})):(this.classList.add("dashicons-hidden"),this.classList.remove("dashicons-visibility"),this.dataset.tooltip="Enable Title",wp.data.dispatch("core/editor").editPost({meta:{swt_meta_site_title_display:!1}}))}))}const a=document.querySelector(".editor-post-title__input"),n=document.querySelector(".title-visibility");null!=a&&null!=n&&(document.addEventListener("click",(function(e){i.contains(e.target)||(n.classList.remove("swt-show-visibility-icon"),a.classList.remove("swt-show-editor-title-outline"))})),document.addEventListener("visibilitychange",(function(){n.classList.remove("swt-show-visibility-icon"),a.classList.remove("swt-show-editor-title-outline")})),i.addEventListener("focusout",(function(){n.classList.remove("swt-show-visibility-icon"),a.classList.remove("swt-show-editor-title-outline")})),i.addEventListener("click",(function(){n.classList.add("swt-show-visibility-icon"),a.classList.add("swt-show-editor-title-outline")})),a.addEventListener("input",(function(){n.classList.add("swt-show-visibility-icon"),this.classList.add("swt-show-editor-title-outline")}))),document.querySelectorAll(".is-tablet-preview, .is-mobile-preview").length?document.body.classList.add("responsive-enabled"):document.body.classList.remove("responsive-enabled")}),1)}))}))}},t={};function i(s){var a=t[s];if(void 0!==a)return a.exports;var n=t[s]={exports:{}};return e[s](n,n.exports,i),n.exports}!function(){"use strict";var e=window.wp.element,t=window.wp.plugins,s=window.wp.editPost,a=window.wp.compose,n=window.wp.data,l=window.wp.i18n,r={logo:(0,e.createElement)("svg",{className:"swt-page-settings-button",xmlns:"http://www.w3.org/2000/svg",width:"24",height:"24",viewBox:"0 0 70 70",fill:"none"}," ",(0,e.createElement)("path",{fillRule:"evenodd",clipRule:"evenodd",d:"M35 70C54.33 70 70 54.33 70 35C70 15.67 54.33 0 35 0C15.67 0 0 15.67 0 35C0 54.33 15.67 70 35 70ZM24.4471 23.5112C18.9722 26.7403 20.2852 35.3759 26.5032 37.0351L36.8875 39.806C37.7533 40.037 37.91 41.224 37.135 41.6811L27.0972 47.5799L26.036 58L45.5529 46.4888C51.0278 43.2597 49.7148 34.6241 43.4968 32.9649L33.1125 30.1941C32.2467 29.963 32.09 28.776 32.865 28.3189L42.9028 22.4202L43.964 12L24.4471 23.5112Z"})," ")};function o(){return o=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var i=arguments[t];for(var s in i)Object.prototype.hasOwnProperty.call(i,s)&&(e[s]=i[s])}return e},o.apply(this,arguments)}var c=window.wp.components,d=window.wp.blockEditor,p=window.wp.hooks;const u=t=>{let i,s;return t.hasOwnProperty("setAttributes")?(i=!(!t?.attributes?.SWTStickyHeader||!t.attributes.SWTStickyHeader),s=!(!t?.attributes?.SWTTransparentHeader||!t.attributes.SWTTransparentHeader)):(i=!(!t?.meta.swt_meta_sticky_header||!t.meta.swt_meta_sticky_header),s=!(!t?.meta.swt_meta_transparent_header||!t.meta.swt_meta_transparent_header)),(0,e.createElement)(e.Fragment,null,!s&&(0,e.createElement)(c.PanelRow,null,(0,e.createElement)(c.ToggleControl,{label:(0,l.__)("Enable Sticky Header","spectra-one"),help:i?(0,l.__)("Transparent header option will be disabled on enabling this option.","spectra-one"):"",checked:i,onChange:e=>{t.hasOwnProperty("setAttributes")?t.setAttributes({SWTStickyHeader:!i}):t.setMetaFieldValue(e,"swt_meta_sticky_header")}})),!i&&(0,e.createElement)(c.PanelRow,null,(0,e.createElement)(c.ToggleControl,{label:(0,l.__)("Enable Transparent Header","spectra-one"),help:s?(0,l.__)("Sticky header option will be disabled on enabling this option.","spectra-one"):"",checked:s,onChange:e=>{t.hasOwnProperty("setAttributes")?t.setAttributes({SWTTransparentHeader:!s}):t.setMetaFieldValue(e,"swt_meta_transparent_header")}})))},m=(0,a.createHigherOrderComponent)((t=>i=>{const{attributes:s,name:a}=i;return s?.tagName&&"header"===s.tagName&&"core/template-part"===a?(0,e.createElement)(e.Fragment,null,(0,e.createElement)(t,i),(0,e.createElement)(d.InspectorControls,null,(0,e.createElement)(c.Panel,null,(0,e.createElement)(c.PanelBody,{title:"Header Settings",initialOpen:!0},(0,e.createElement)(u,i))))):(0,e.createElement)(e.Fragment,null,(0,e.createElement)(t,i))}),"Header");(0,p.addFilter)("editor.BlockEdit","swt/header",m),(0,p.addFilter)("blocks.registerBlockType","swt/header-attributes",(function(e){return["core/template-part"].includes(e.name)&&e.attributes&&(e.attributes=Object.assign(e.attributes,{SWTStickyHeader:{type:"boolean",default:!1},SWTTransparentHeader:{type:"boolean",default:!1}})),e}));const b=t=>{const i=Object.entries(spectraOne.disable_sections).map((i=>{let[s,a]=i,n=!(!t?.meta[a.key]||!t.meta[a.key]);return(0,e.createElement)(c.PanelRow,null,(0,e.createElement)(c.ToggleControl,{key:s,label:a.label,checked:n,onChange:e=>{t.setMetaFieldValue(e,a.key)}}))}));return(0,e.createElement)(e.Fragment,null,(0,e.createElement)(c.PanelBody,{title:(0,l.__)("Disable Elements","spectra-one"),initialOpen:!0,className:"swt-disable-elements-panel"},i),!t?.meta?.swt_meta_header_display&&(0,e.createElement)(c.PanelBody,{title:(0,l.__)("Header Settings","spectra-one"),initialOpen:!0,className:"swt-header-settings-panel"},(0,e.createElement)(u,o({},t,spectraOne.header_settings))))};var w=(0,a.compose)((0,n.withSelect)((e=>{const t=e("core/editor").getEditedPostAttribute("meta"),i=e("core/editor").getCurrentPostAttribute("meta");return{meta:{...i,...t},oldMeta:i}})),(0,n.withDispatch)((e=>({setMetaFieldValue:(t,i)=>e("core/editor").editPost({meta:{[i]:t}})}))))((t=>(0,e.createElement)(e.Fragment,null,(0,e.createElement)(s.PluginSidebarMoreMenuItem,{target:"swt-page-settings-panel",icon:r.logo},(0,l.__)("Spectra Page Settings","spectra-one")),(0,e.createElement)(s.PluginSidebar,{isPinnable:!0,icon:r.logo,name:"swt-page-settings-panel",title:(0,l.__)("Spectra Page Settings","spectra-one"),className:"swt-sidebar"},(0,e.createElement)(b,t)))));i(837);const g=(0,a.createHigherOrderComponent)((t=>i=>{const{attributes:s,name:a,setAttributes:n}=i,{SWTHideDesktop:r,SWTHideTab:o,SWTHideMob:p}=s;return a&&a.includes("uagb/")?(0,e.createElement)(e.Fragment,null,(0,e.createElement)(t,i)):(0,e.createElement)(e.Fragment,null,(0,e.createElement)(t,i),(0,e.createElement)(d.InspectorControls,null,(0,e.createElement)(c.Panel,null,(0,e.createElement)(c.PanelBody,{title:"Responsive Settings",initialOpen:!0},(0,e.createElement)(c.PanelRow,null,(0,e.createElement)(c.ToggleControl,{label:(0,l.__)("Hide Desktop","spectra-one"),checked:r,onChange:()=>n({SWTHideDesktop:!r})})),(0,e.createElement)(c.PanelRow,null,(0,e.createElement)(c.ToggleControl,{label:(0,l.__)("Hide Tablet","spectra-one"),checked:o,onChange:()=>n({SWTHideTab:!o})})),(0,e.createElement)(c.PanelRow,null,(0,e.createElement)(c.ToggleControl,{label:(0,l.__)("Hide Mobile","spectra-one"),checked:p,onChange:()=>n({SWTHideMob:!p})}))))))}),"Responsive");(0,p.addFilter)("editor.BlockEdit","swt/responsive",g),(0,p.addFilter)("blocks.registerBlockType","swt/responsive-attributes",(function(e){return["core/archives","core/calendar","core/latest-comments","core/tag-cloud","core/rss"].includes(e.name)||e.attributes&&(e.attributes=Object.assign(e.attributes,{SWTHideDesktop:{type:"boolean",default:!1},SWTHideTab:{type:"boolean",default:!1},SWTHideMob:{type:"boolean",default:!1}})),e})),spectraOne.is_spectra_plugin&&(0,p.addFilter)("spectra.page-sidebar.before","swt/setting-list",(function(t,i){return(0,e.createElement)(e.Fragment,null,t,(0,e.createElement)(b,i))}),10),spectraOne.is_spectra_plugin||(0,t.registerPlugin)("swt-page-level-settings",{render:w})}()}();