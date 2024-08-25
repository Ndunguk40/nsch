!function(){var e={4184:function(e,t){var i;!function(){"use strict";var n={}.hasOwnProperty;function o(){for(var e=[],t=0;t<arguments.length;t++){var i=arguments[t];if(i){var r=typeof i;if("string"===r||"number"===r)e.push(i);else if(Array.isArray(i)){if(i.length){var s=o.apply(null,i);s&&e.push(s)}}else if("object"===r){if(i.toString!==Object.prototype.toString&&!i.toString.toString().includes("[native code]")){e.push(i.toString());continue}for(var a in i)n.call(i,a)&&i[a]&&e.push(a)}}}return e.join(" ")}e.exports?(o.default=o,e.exports=o):void 0===(i=function(){return o}.apply(t,[]))||(e.exports=i)}()}},t={};function i(n){var o=t[n];if(void 0!==o)return o.exports;var r=t[n]={exports:{}};return e[n](r,r.exports,i),r.exports}i.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return i.d(t,{a:t}),t},i.d=function(e,t){for(var n in t)i.o(t,n)&&!i.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},i.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},function(){"use strict";var e=jQuery,t=i.n(e),n=wp.i18n,o=wp.element,r=i(4184),s=i.n(r),a=["type","isDismissible","children"];function d(){return d=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var i=arguments[t];for(var n in i)Object.prototype.hasOwnProperty.call(i,n)&&(e[n]=i[n])}return e},d.apply(this,arguments)}function l(e,t){if(null==e)return{};var i,n,o=function(e,t){if(null==e)return{};var i,n,o={},r=Object.keys(e);for(n=0;n<r.length;n++)i=r[n],t.indexOf(i)>=0||(o[i]=e[i]);return o}(e,t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);for(n=0;n<r.length;n++)i=r[n],t.indexOf(i)>=0||Object.prototype.propertyIsEnumerable.call(e,i)&&(o[i]=e[i])}return o}var c=function(e){var t=e.type,i=void 0===t?"info":t,n=e.isDismissible,o=void 0!==n&&n,r=e.children,c=l(e,a),u=s()("notice","notice-"+i,{"is-dismissible":o});return wp.element.createElement("div",d({className:u},c),r)};function u(e){return u="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},u(e)}function p(e,t){for(var i=0;i<t.length;i++){var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,(o=n.key,r=void 0,r=function(e,t){if("object"!==u(e)||null===e)return e;var i=e[Symbol.toPrimitive];if(void 0!==i){var n=i.call(e,t||"default");if("object"!==u(n))return n;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===t?String:Number)(e)}(o,"string"),"symbol"===u(r)?r:String(r)),n)}var o,r}var _=function(){function e(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.cacheDom(),this.renderSeoSettingsNotice(),this.disableDiviSeoInputs()}var i,r,s;return i=e,(r=[{key:"cacheDom",value:function(){this.$etSeoSettingsArea=t()("#wrap-seo"),this.$etDisabledTextInputs=t()("#divi_seo_home_titletext").add("#divi_seo_home_descriptiontext").add("#divi_seo_home_keywordstext").add("#divi_seo_home_separate").add("#divi_seo_single_field_title").add("#divi_seo_single_field_description").add("#divi_seo_single_field_keywords").add("#divi_seo_single_separate").add("#divi_seo_index_separate"),this.$etDisabledSelectInputs=t()("#divi_seo_home_type").add("#divi_seo_single_type").add("#divi_seo_index_type"),this.$etDisabledToggleInputs=t()("#divi_seo_home_title").add("#divi_seo_home_description").add("#divi_seo_home_keywords").add("#divi_seo_home_canonical").add("#divi_seo_single_title").add("#divi_seo_single_description").add("#divi_seo_single_keywords").add("#divi_seo_single_canonical").add("#divi_seo_index_canonical").add("#divi_seo_index_description")}},{key:"renderSeoSettingsNotice",value:function(){var e="rank-math-divi-seo-admin-notice-container";this.$etSeoSettingsArea.find(".et-tab-content").prepend(t()('<div id="'.concat(e,'" />'))),document.querySelectorAll("#"+e).forEach((function(e){(0,o.render)(this.getAdminNotice(),e)}),this)}},{key:"disableDiviSeoInputs",value:function(){this.$etDisabledTextInputs.attr("readonly",!0).css({cursor:"not-allowed"}),this.$etDisabledSelectInputs.css({cursor:"not-allowed"}).find("option").attr("disabled",!0),this.$etDisabledToggleInputs.attr("disabled",!0).find("+ .et_pb_yes_no_button").css({cursor:"not-allowed"}).on("mousedown keydown",(function(){var e=t()(this);e.is(".et_pb_on_state")?e.removeClass("et_pb_on_state").addClass("et_pb_off_state"):e.is(".et_pb_off_state")&&e.addClass("et_pb_on_state").removeClass("et_pb_off_state")}))}},{key:"getAdminNotice",value:function(){return wp.element.createElement(c,{style:{margin:"0",marginBottom:"30px",padding:"12px",borderTopColor:"#e4e4e5",borderRightColor:"#e4e4e5",borderBottomColor:"#e4e4e5"}},wp.element.createElement("p",null,(0,o.createInterpolateElement)((0,n.__)("The below options are handled via the Rank Math SEO <settings_page_link/>.","rank-math"),{settings_page_link:wp.element.createElement("a",{href:"/wp-admin/admin.php?page=rank-math-options-titles"},(0,n.__)("settings page","rank-math"))})))}}])&&p(i.prototype,r),s&&p(i,s),Object.defineProperty(i,"prototype",{writable:!1}),e}();t()((function(){new _}))}()}();