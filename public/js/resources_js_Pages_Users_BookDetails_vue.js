"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_Pages_Users_BookDetails_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Users/BookDetails.vue?vue&type=script&setup=true&lang=js":
/*!*****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Users/BookDetails.vue?vue&type=script&setup=true&lang=js ***!
  \*****************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");
/* harmony import */ var _inertiajs_inertia_vue3__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @inertiajs/inertia-vue3 */ "./node_modules/@inertiajs/inertia-vue3/dist/index.js");


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  props: {
    tickets: Array,
    movie: Object
  },
  setup: function setup(__props, _ref) {
    var expose = _ref.expose;
    expose();
    var props = __props;
    var filename = (0,vue__WEBPACK_IMPORTED_MODULE_0__.ref)("");
    var form = (0,_inertiajs_inertia_vue3__WEBPACK_IMPORTED_MODULE_1__.useForm)({
      inputs: props.tickets
    });

    var submit = function submit() {
      form.post("/book/ticket/proceed");
    };

    var fileChoosen = function fileChoosen(event) {
      // form.inputs.value = event.target.files[0].name;
      console.log(form);
    };

    var __returned__ = {
      filename: filename,
      props: props,
      form: form,
      submit: submit,
      fileChoosen: fileChoosen,
      ref: vue__WEBPACK_IMPORTED_MODULE_0__.ref,
      useForm: _inertiajs_inertia_vue3__WEBPACK_IMPORTED_MODULE_1__.useForm
    };
    Object.defineProperty(__returned__, '__isScriptSetup', {
      enumerable: false,
      value: true
    });
    return __returned__;
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Users/BookDetails.vue?vue&type=template&id=6a6573ce":
/*!**********************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Users/BookDetails.vue?vue&type=template&id=6a6573ce ***!
  \**********************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");

var _hoisted_1 = {
  "class": "font-main text-secondary"
};
var _hoisted_2 = {
  "class": "grid grid-cols-2 gap-14 mx-10 my-10"
};
var _hoisted_3 = {
  "class": "flex flex-row flex-wrap justify-end"
};
var _hoisted_4 = {
  "class": "text-sm font-bold mx-16"
};

var _hoisted_5 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("svg", {
  xmlns: "http://www.w3.org/2000/svg",
  "class": "h-5 w-5",
  fill: "none",
  viewBox: "0 0 24 24",
  stroke: "currentColor"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("path", {
  "stroke-linecap": "round",
  "stroke-linejoin": "round",
  "stroke-width": "2",
  d: "M15 19l-7-7 7-7"
})], -1
/* HOISTED */
);

var _hoisted_6 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("p", {
  "class": "text-xs link-underline link-underline-black cursor-pointer"
}, " BACK ", -1
/* HOISTED */
);

var _hoisted_7 = ["onSubmit"];
var _hoisted_8 = {
  "class": "text-primary text-2xl"
};
var _hoisted_9 = {
  "class": "font-bold text-primary"
};
var _hoisted_10 = {
  "class": "font-bold text-primary"
};
var _hoisted_11 = {
  "class": "mt-2"
};

var _hoisted_12 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("p", {
  "class": "font-bold text-secondary"
}, "Name", -1
/* HOISTED */
);

var _hoisted_13 = ["onUpdate:modelValue"];
var _hoisted_14 = {
  "class": "mt-6"
};

var _hoisted_15 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("p", {
  "class": "font-bold text-secondary"
}, " COVID-19 Vaccination Certificate (Vaxcert) ", -1
/* HOISTED */
);

var _hoisted_16 = {
  "for": "actual-btn"
};
var _hoisted_17 = ["onInput"];
var _hoisted_18 = {
  "class": "flex justify-between items-stretch shadow-md mt-2 w-64 text-base font-normal text-gray-700 bg-softgray bg-clip-padding transition ease-in-out m-0 focus:text-gray-700 focus:bg-softgray"
};
var _hoisted_19 = {
  "class": "flex flex-wrap flex-col p-2 overflow-x-hidden"
};

var _hoisted_20 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("p", {
  "class": "flex items-center justify-center bg-primary hover:bg-secondary p-1.5 px-4 m-0 text-sm text-white font-semibold cursor-pointer"
}, " UPLOAD ", -1
/* HOISTED */
);

var _hoisted_21 = {
  "class": "flex flex-col mt-4"
};
var _hoisted_22 = ["disabled"];
function render(_ctx, _cache, $props, $setup, $data, $options) {
  var _component_Head = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("Head");

  var _component_Link = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("Link");

  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_Head, {
    title: "Booking Details"
  }), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_1, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_2, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_3, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_4, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_Link, {
    href: "/discoverbook",
    "class": "flex flex-row items-center space-x-1"
  }, {
    "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
      return [_hoisted_5, _hoisted_6];
    }),
    _: 1
    /* STABLE */

  })]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
    "class": "bg-secondary p-4 my-2 h-80 w-48 mt-6 bg-cover bg-center",
    style: (0,vue__WEBPACK_IMPORTED_MODULE_0__.normalizeStyle)({
      'background-image': "url(".concat($props.movie[0].image, ")")
    })
  }, null, 4
  /* STYLE */
  )]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("form", {
    onSubmit: (0,vue__WEBPACK_IMPORTED_MODULE_0__.withModifiers)($setup.submit, ["prevent"]),
    enctype: "multipart/form-data",
    method: "post",
    "class": "mt-6"
  }, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h1", _hoisted_8, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($props.movie[0].title), 1
  /* TEXT */
  ), ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($setup.form.inputs, function (ticket, index) {
    return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", {
      "class": "text-sm mt-6",
      key: index
    }, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h1", _hoisted_9, " Ticket #" + (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(ticket.id), 1
    /* TEXT */
    ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h1", _hoisted_10, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(ticket.title), 1
    /* TEXT */
    ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_11, [_hoisted_12, (0,vue__WEBPACK_IMPORTED_MODULE_0__.withDirectives)((0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
      name: "name",
      "onUpdate:modelValue": function onUpdateModelValue($event) {
        return ticket.name = $event;
      },
      type: "text",
      "class": "bg-softgray form-input p-1 shadow-md focus:outline-none w-52"
    }, null, 8
    /* PROPS */
    , _hoisted_13), [[vue__WEBPACK_IMPORTED_MODULE_0__.vModelText, ticket.name]])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_14, [_hoisted_15, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("label", _hoisted_16, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
      onChange: $setup.fileChoosen,
      name: "image",
      onInput: function onInput($event) {
        return ticket.image = $event.target.files[index];
      },
      type: "file",
      id: "actual-btn",
      hidden: ""
    }, null, 40
    /* PROPS, HYDRATE_EVENTS */
    , _hoisted_17), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_18, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", _hoisted_19, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(ticket.image), 1
    /* TEXT */
    ), _hoisted_20])])])]);
  }), 128
  /* KEYED_FRAGMENT */
  )), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_21, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" <form @submit.prevent=\"submit\" method=\"post\"> "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" <Link href=\"/discoverpayment\"> "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
    type: "submit",
    disabled: $setup.form.processing,
    "class": "block bg-primary text-white p-2 my-1 font-bold w-40 hover:bg-secondary"
  }, " PROCEED ", 8
  /* PROPS */
  , _hoisted_22), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" </Link> "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" </form> ")])], 40
  /* PROPS, HYDRATE_EVENTS */
  , _hoisted_7)])])], 64
  /* STABLE_FRAGMENT */
  );
}

/***/ }),

/***/ "./resources/js/Pages/Users/BookDetails.vue":
/*!**************************************************!*\
  !*** ./resources/js/Pages/Users/BookDetails.vue ***!
  \**************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _BookDetails_vue_vue_type_template_id_6a6573ce__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./BookDetails.vue?vue&type=template&id=6a6573ce */ "./resources/js/Pages/Users/BookDetails.vue?vue&type=template&id=6a6573ce");
/* harmony import */ var _BookDetails_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./BookDetails.vue?vue&type=script&setup=true&lang=js */ "./resources/js/Pages/Users/BookDetails.vue?vue&type=script&setup=true&lang=js");
/* harmony import */ var C_Users_Marc_Desktop_WEBDEV_FINAL_PROJECT_bobookie_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;
const __exports__ = /*#__PURE__*/(0,C_Users_Marc_Desktop_WEBDEV_FINAL_PROJECT_bobookie_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__["default"])(_BookDetails_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_BookDetails_vue_vue_type_template_id_6a6573ce__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/Pages/Users/BookDetails.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/Pages/Users/BookDetails.vue?vue&type=script&setup=true&lang=js":
/*!*************************************************************************************!*\
  !*** ./resources/js/Pages/Users/BookDetails.vue?vue&type=script&setup=true&lang=js ***!
  \*************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_BookDetails_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_BookDetails_vue_vue_type_script_setup_true_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./BookDetails.vue?vue&type=script&setup=true&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Users/BookDetails.vue?vue&type=script&setup=true&lang=js");
 

/***/ }),

/***/ "./resources/js/Pages/Users/BookDetails.vue?vue&type=template&id=6a6573ce":
/*!********************************************************************************!*\
  !*** ./resources/js/Pages/Users/BookDetails.vue?vue&type=template&id=6a6573ce ***!
  \********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_BookDetails_vue_vue_type_template_id_6a6573ce__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_BookDetails_vue_vue_type_template_id_6a6573ce__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./BookDetails.vue?vue&type=template&id=6a6573ce */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/Pages/Users/BookDetails.vue?vue&type=template&id=6a6573ce");


/***/ })

}]);