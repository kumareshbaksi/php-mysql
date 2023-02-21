(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.[jt]sx?$":
/*!****************************************************************************************************************!*\
  !*** ./assets/controllers/ sync ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \.[jt]sx?$ ***!
  \****************************************************************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var map = {
	"./hello_controller.js": "./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js"
};


function webpackContext(req) {
	var id = webpackContextResolve(req);
	return __webpack_require__(id);
}
function webpackContextResolve(req) {
	if(!__webpack_require__.o(map, req)) {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	}
	return map[req];
}
webpackContext.keys = function webpackContextKeys() {
	return Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = "./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.[jt]sx?$";

/***/ }),

/***/ "./node_modules/@symfony/stimulus-bridge/dist/webpack/loader.js!./assets/controllers.json":
/*!************************************************************************************************!*\
  !*** ./node_modules/@symfony/stimulus-bridge/dist/webpack/loader.js!./assets/controllers.json ***!
  \************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
});

/***/ }),

/***/ "./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js":
/*!******************************************************************************************************************!*\
  !*** ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js ***!
  \******************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _default)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.function.bind.js */ "./node_modules/core-js/modules/es.function.bind.js");
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_reflect_to_string_tag_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.reflect.to-string-tag.js */ "./node_modules/core-js/modules/es.reflect.to-string-tag.js");
/* harmony import */ var core_js_modules_es_reflect_to_string_tag_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_to_string_tag_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_error_cause_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.error.cause.js */ "./node_modules/core-js/modules/es.error.cause.js");
/* harmony import */ var core_js_modules_es_error_cause_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_error_cause_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_error_to_string_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.error.to-string.js */ "./node_modules/core-js/modules/es.error.to-string.js");
/* harmony import */ var core_js_modules_es_error_to_string_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_error_to_string_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.symbol.to-primitive.js */ "./node_modules/core-js/modules/es.symbol.to-primitive.js");
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.date.to-primitive.js */ "./node_modules/core-js/modules/es.date.to-primitive.js");
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var _hotwired_stimulus__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! @hotwired/stimulus */ "./node_modules/@hotwired/stimulus/dist/stimulus.js");
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }



















function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, _toPropertyKey(descriptor.key), descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _toPropertyKey(arg) { var key = _toPrimitive(arg, "string"); return _typeof(key) === "symbol" ? key : String(key); }
function _toPrimitive(input, hint) { if (_typeof(input) !== "object" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || "default"); if (_typeof(res) !== "object") return res; throw new TypeError("@@toPrimitive must return a primitive value."); } return (hint === "string" ? String : Number)(input); }
function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }
function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }
function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }
function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }
function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }
function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }
function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }


/*
 * This is an example Stimulus controller!
 *
 * Any element with a data-controller="hello" attribute will cause
 * this controller to be executed. The name "hello" comes from the filename:
 * hello_controller.js -> "hello"
 *
 * Delete this file or adapt it for your use!
 */
var _default = /*#__PURE__*/function (_Controller) {
  _inherits(_default, _Controller);
  var _super = _createSuper(_default);
  function _default() {
    _classCallCheck(this, _default);
    return _super.apply(this, arguments);
  }
  _createClass(_default, [{
    key: "connect",
    value: function connect() {
      this.element.textContent = 'Hello Stimulus! Edit me in assets/controllers/hello_controller.js';
    }
  }]);
  return _default;
}(_hotwired_stimulus__WEBPACK_IMPORTED_MODULE_19__.Controller);


/***/ }),

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _styles_app_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./styles/app.css */ "./assets/styles/app.css");
/* harmony import */ var _javascript_script_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./javascript/script.js */ "./assets/javascript/script.js");
/* harmony import */ var _javascript_script_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_javascript_script_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _bootstrap__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./bootstrap */ "./assets/bootstrap.js");
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)


// Working with js files


// start the Stimulus application


/***/ }),

/***/ "./assets/bootstrap.js":
/*!*****************************!*\
  !*** ./assets/bootstrap.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "app": () => (/* binding */ app)
/* harmony export */ });
/* harmony import */ var _symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @symfony/stimulus-bridge */ "./node_modules/@symfony/stimulus-bridge/dist/index.js");


// Registers Stimulus controllers from controllers.json and in the controllers/ directory
var app = (0,_symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_0__.startStimulusApp)(__webpack_require__("./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.[jt]sx?$"));

/***/ }),

/***/ "./assets/javascript/script.js":
/*!*************************************!*\
  !*** ./assets/javascript/script.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
__webpack_require__(/*! core-js/modules/web.timers.js */ "./node_modules/core-js/modules/web.timers.js");
__webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
__webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
__webpack_require__(/*! core-js/modules/es.symbol.to-primitive.js */ "./node_modules/core-js/modules/es.symbol.to-primitive.js");
__webpack_require__(/*! core-js/modules/es.date.to-primitive.js */ "./node_modules/core-js/modules/es.date.to-primitive.js");
__webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
__webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/es.error.cause.js */ "./node_modules/core-js/modules/es.error.cause.js");
__webpack_require__(/*! core-js/modules/es.error.to-string.js */ "./node_modules/core-js/modules/es.error.to-string.js");
__webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
__webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
__webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
__webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
function _defineProperty(obj, key, value) { key = _toPropertyKey(key); if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }
function _toPropertyKey(arg) { var key = _toPrimitive(arg, "string"); return _typeof(key) === "symbol" ? key : String(key); }
function _toPrimitive(input, hint) { if (_typeof(input) !== "object" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || "default"); if (_typeof(res) !== "object") return res; throw new TypeError("@@toPrimitive must return a primitive value."); } return (hint === "string" ? String : Number)(input); }
$("#userDetails").validate({
  rules: {
    username: {
      required: true,
      minlength: 2,
      maxlength: 20
    },
    password: {
      required: true,
      minlength: 5,
      maxlength: 15
    }
  },
  message: {
    username: "Please enter the username",
    email: "Please enter a valid email",
    password: "Email must have at least 5 character"
  }
});
$("#userDetails").validate({
  rules: {
    firstname: {
      required: true,
      minlength: 2,
      maxlength: 20
    },
    lastname: {
      required: true,
      minlength: 2,
      maxlength: 20
    },
    image: {
      required: true
    },
    marksArea: {
      required: true,
      minlength: 5,
      maxlength: 100
    },
    phNum: {
      required: true,
      minlength: 10,
      maxlength: 10
    }
  },
  message: _defineProperty({
    firstname: "Please enter the firstname",
    lastname: "Please enter the Lastname",
    email: "Please enter a valid email",
    image: "Please select an image",
    marksArea: "Enter yours marks",
    phNum: "Enter your phone number"
  }, "email", "Enter your valid email")
});
$("#userDetails").on("submit", function () {
  if (document.getElementsByClassName("error") == null) {
    document.getElementById('loader').style.visibility = "visiable";
  }
});
$("#logoutBtn").click(function () {
  localStorage.clear();
});
document.onreadystatechange = function () {
  var state = document.readyState;
  if (state == 'interactive') {
    document.getElementById('loader').style.visibility = "visible";
  } else if (state == 'complete') {
    setTimeout(function () {
      document.getElementById('loader').style.visibility = "hidden";
    }, 1000);
  }
};
document.getElementById("firstname").value = getSavedValue("firstname");
document.getElementById("lastname").value = getSavedValue("lastname");
document.getElementById("largeTextArea").value = getSavedValue("largeTextArea");
document.getElementById("phone").value = getSavedValue("phone");
function saveValue(e) {
  var id = e.id;
  var val = e.value;
  localStorage.setItem(id, val);
}
function getSavedValue(v) {
  if (!localStorage.getItem(v)) {
    return "";
  }
  return localStorage.getItem(v);
}
var digitValidate = function digitValidate(element) {
  element.value = element.value.replace(/[^0-9]/g, '');
};
var tabChange = function tabChange(value) {
  var element = document.querySelectorAll('input');
  if (element[value - 1].value != '') {
    element[value].focus();
  } else if (ele[val - 1].value == '') {
    element[value - 2].focus();
  }
};

/***/ }),

/***/ "./assets/styles/app.css":
/*!*******************************!*\
  !*** ./assets/styles/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_es_date_to-primitive_js-node_modules_core-js_modules_es_-e5c96f","vendors-node_modules_symfony_stimulus-bridge_dist_index_js-node_modules_core-js_modules_es_fu-042691"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QUUsRUFBRUMsR0FBRyxDQUFDO0FBQy9CO0FBRUEsU0FBU0osYUFBYSxDQUFDTSxDQUFDLEVBQUU7RUFDeEIsSUFBSSxDQUFDYixZQUFZLENBQUNjLE9BQU8sQ0FBQ0QsQ0FBQyxDQUFDLEVBQUU7SUFDNUIsT0FBTyxFQUFFO0VBQ1g7RUFDQSxPQUFPYixZQUFZLENBQUNjLE9BQU8sQ0FBQ0QsQ0FBQyxDQUFDO0FBQ2hDO0FBRUEsSUFBSUUsYUFBYSxHQUFHLFNBQWhCQSxhQUFhLENBQWEzQyxPQUFPLEVBQUU7RUFDckNBLE9BQU8sQ0FBQ2tDLEtBQUssR0FBR2xDLE9BQU8sQ0FBQ2tDLEtBQUssQ0FBQ1UsT0FBTyxDQUFDLFNBQVMsRUFBRSxFQUFFLENBQUM7QUFDdEQsQ0FBQztBQUVELElBQUlDLFNBQVMsR0FBRyxTQUFaQSxTQUFTLENBQWFYLEtBQUssRUFBRTtFQUUvQixJQUFJbEMsT0FBTyxHQUFHc0IsUUFBUSxDQUFDd0IsZ0JBQWdCLENBQUMsT0FBTyxDQUFDO0VBRWhELElBQUk5QyxPQUFPLENBQUNrQyxLQUFLLEdBQUcsQ0FBQyxDQUFDLENBQUNBLEtBQUssSUFBSSxFQUFFLEVBQUU7SUFFbENsQyxPQUFPLENBQUNrQyxLQUFLLENBQUMsQ0FBQ2EsS0FBSyxFQUFFO0VBRXhCLENBQUMsTUFBTSxJQUFJQyxHQUFHLENBQUNULEdBQUcsR0FBRyxDQUFDLENBQUMsQ0FBQ0wsS0FBSyxJQUFJLEVBQUUsRUFBRTtJQUVuQ2xDLE9BQU8sQ0FBQ2tDLEtBQUssR0FBRyxDQUFDLENBQUMsQ0FBQ2EsS0FBSyxFQUFFO0VBQzVCO0FBQ0YsQ0FBQzs7Ozs7Ozs7Ozs7O0FDakhEIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLyBcXC5banRdc3giLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2NvbnRyb2xsZXJzLmpzb24iLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2NvbnRyb2xsZXJzL2hlbGxvX2NvbnRyb2xsZXIuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2FwcC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvYm9vdHN0cmFwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qYXZhc2NyaXB0L3NjcmlwdC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvc3R5bGVzL2FwcC5jc3M/M2ZiYSJdLCJzb3VyY2VzQ29udGVudCI6WyJ2YXIgbWFwID0ge1xuXHRcIi4vaGVsbG9fY29udHJvbGxlci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL0BzeW1mb255L3N0aW11bHVzLWJyaWRnZS9sYXp5LWNvbnRyb2xsZXItbG9hZGVyLmpzIS4vYXNzZXRzL2NvbnRyb2xsZXJzL2hlbGxvX2NvbnRyb2xsZXIuanNcIlxufTtcblxuXG5mdW5jdGlvbiB3ZWJwYWNrQ29udGV4dChyZXEpIHtcblx0dmFyIGlkID0gd2VicGFja0NvbnRleHRSZXNvbHZlKHJlcSk7XG5cdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKGlkKTtcbn1cbmZ1bmN0aW9uIHdlYnBhY2tDb250ZXh0UmVzb2x2ZShyZXEpIHtcblx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhtYXAsIHJlcSkpIHtcblx0XHR2YXIgZSA9IG5ldyBFcnJvcihcIkNhbm5vdCBmaW5kIG1vZHVsZSAnXCIgKyByZXEgKyBcIidcIik7XG5cdFx0ZS5jb2RlID0gJ01PRFVMRV9OT1RfRk9VTkQnO1xuXHRcdHRocm93IGU7XG5cdH1cblx0cmV0dXJuIG1hcFtyZXFdO1xufVxud2VicGFja0NvbnRleHQua2V5cyA9IGZ1bmN0aW9uIHdlYnBhY2tDb250ZXh0S2V5cygpIHtcblx0cmV0dXJuIE9iamVjdC5rZXlzKG1hcCk7XG59O1xud2VicGFja0NvbnRleHQucmVzb2x2ZSA9IHdlYnBhY2tDb250ZXh0UmVzb2x2ZTtcbm1vZHVsZS5leHBvcnRzID0gd2VicGFja0NvbnRleHQ7XG53ZWJwYWNrQ29udGV4dC5pZCA9IFwiLi9hc3NldHMvY29udHJvbGxlcnMgc3luYyByZWN1cnNpdmUgLi9ub2RlX21vZHVsZXMvQHN5bWZvbnkvc3RpbXVsdXMtYnJpZGdlL2xhenktY29udHJvbGxlci1sb2FkZXIuanMhIFxcXFwuW2p0XXN4PyRcIjsiLCJleHBvcnQgZGVmYXVsdCB7XG59OyIsImltcG9ydCB7IENvbnRyb2xsZXIgfSBmcm9tICdAaG90d2lyZWQvc3RpbXVsdXMnO1xuXG4vKlxuICogVGhpcyBpcyBhbiBleGFtcGxlIFN0aW11bHVzIGNvbnRyb2xsZXIhXG4gKlxuICogQW55IGVsZW1lbnQgd2l0aCBhIGRhdGEtY29udHJvbGxlcj1cImhlbGxvXCIgYXR0cmlidXRlIHdpbGwgY2F1c2VcbiAqIHRoaXMgY29udHJvbGxlciB0byBiZSBleGVjdXRlZC4gVGhlIG5hbWUgXCJoZWxsb1wiIGNvbWVzIGZyb20gdGhlIGZpbGVuYW1lOlxuICogaGVsbG9fY29udHJvbGxlci5qcyAtPiBcImhlbGxvXCJcbiAqXG4gKiBEZWxldGUgdGhpcyBmaWxlIG9yIGFkYXB0IGl0IGZvciB5b3VyIHVzZSFcbiAqL1xuZXhwb3J0IGRlZmF1bHQgY2xhc3MgZXh0ZW5kcyBDb250cm9sbGVyIHtcbiAgICBjb25uZWN0KCkge1xuICAgICAgICB0aGlzLmVsZW1lbnQudGV4dENvbnRlbnQgPSAnSGVsbG8gU3RpbXVsdXMhIEVkaXQgbWUgaW4gYXNzZXRzL2NvbnRyb2xsZXJzL2hlbGxvX2NvbnRyb2xsZXIuanMnO1xuICAgIH1cbn1cbiIsIi8qXG4gKiBXZWxjb21lIHRvIHlvdXIgYXBwJ3MgbWFpbiBKYXZhU2NyaXB0IGZpbGUhXG4gKlxuICogV2UgcmVjb21tZW5kIGluY2x1ZGluZyB0aGUgYnVpbHQgdmVyc2lvbiBvZiB0aGlzIEphdmFTY3JpcHQgZmlsZVxuICogKGFuZCBpdHMgQ1NTIGZpbGUpIGluIHlvdXIgYmFzZSBsYXlvdXQgKGJhc2UuaHRtbC50d2lnKS5cbiAqL1xuXG4vLyBhbnkgQ1NTIHlvdSBpbXBvcnQgd2lsbCBvdXRwdXQgaW50byBhIHNpbmdsZSBjc3MgZmlsZSAoYXBwLmNzcyBpbiB0aGlzIGNhc2UpXG5pbXBvcnQgJy4vc3R5bGVzL2FwcC5jc3MnO1xuXG4vLyBXb3JraW5nIHdpdGgganMgZmlsZXNcbmltcG9ydCAnLi9qYXZhc2NyaXB0L3NjcmlwdC5qcyc7XG5cbi8vIHN0YXJ0IHRoZSBTdGltdWx1cyBhcHBsaWNhdGlvblxuaW1wb3J0ICcuL2Jvb3RzdHJhcCc7XG4iLCJpbXBvcnQgeyBzdGFydFN0aW11bHVzQXBwIH0gZnJvbSAnQHN5bWZvbnkvc3RpbXVsdXMtYnJpZGdlJztcblxuLy8gUmVnaXN0ZXJzIFN0aW11bHVzIGNvbnRyb2xsZXJzIGZyb20gY29udHJvbGxlcnMuanNvbiBhbmQgaW4gdGhlIGNvbnRyb2xsZXJzLyBkaXJlY3RvcnlcbmV4cG9ydCBjb25zdCBhcHAgPSBzdGFydFN0aW11bHVzQXBwKHJlcXVpcmUuY29udGV4dChcbiAgICAnQHN5bWZvbnkvc3RpbXVsdXMtYnJpZGdlL2xhenktY29udHJvbGxlci1sb2FkZXIhLi9jb250cm9sbGVycycsXG4gICAgdHJ1ZSxcbiAgICAvXFwuW2p0XXN4PyQvXG4pKTsiLCIkKFwiI3VzZXJEZXRhaWxzXCIpLnZhbGlkYXRlKHtcbiAgcnVsZXM6IHtcbiAgICB1c2VybmFtZToge1xuICAgICAgcmVxdWlyZWQ6IHRydWUsXG4gICAgICBtaW5sZW5ndGg6IDIsXG4gICAgICBtYXhsZW5ndGg6IDIwXG4gICAgfSxcbiAgICBwYXNzd29yZDoge1xuICAgICAgcmVxdWlyZWQ6IHRydWUsXG4gICAgICBtaW5sZW5ndGg6IDUsXG4gICAgICBtYXhsZW5ndGg6IDE1XG4gICAgfVxuICB9LCBtZXNzYWdlOiB7XG5cbiAgICB1c2VybmFtZTogXCJQbGVhc2UgZW50ZXIgdGhlIHVzZXJuYW1lXCIsXG4gICAgZW1haWw6IFwiUGxlYXNlIGVudGVyIGEgdmFsaWQgZW1haWxcIixcbiAgICBwYXNzd29yZDogXCJFbWFpbCBtdXN0IGhhdmUgYXQgbGVhc3QgNSBjaGFyYWN0ZXJcIlxuICB9XG59KTtcblxuJChcIiN1c2VyRGV0YWlsc1wiKS52YWxpZGF0ZSh7XG4gIHJ1bGVzOiB7XG4gICAgZmlyc3RuYW1lOiB7XG4gICAgICByZXF1aXJlZDogdHJ1ZSxcbiAgICAgIG1pbmxlbmd0aDogMixcbiAgICAgIG1heGxlbmd0aDogMjBcbiAgICB9LFxuICAgIGxhc3RuYW1lOiB7XG4gICAgICByZXF1aXJlZDogdHJ1ZSxcbiAgICAgIG1pbmxlbmd0aDogMixcbiAgICAgIG1heGxlbmd0aDogMjBcbiAgICB9LFxuICAgIGltYWdlOiB7XG4gICAgICByZXF1aXJlZDogdHJ1ZSxcbiAgICB9LFxuICAgIG1hcmtzQXJlYToge1xuICAgICAgcmVxdWlyZWQ6IHRydWUsXG4gICAgICBtaW5sZW5ndGg6IDUsXG4gICAgICBtYXhsZW5ndGg6IDEwMFxuICAgIH0sXG4gICAgcGhOdW06IHtcbiAgICAgIHJlcXVpcmVkOiB0cnVlLFxuICAgICAgbWlubGVuZ3RoOiAxMCxcbiAgICAgIG1heGxlbmd0aDogMTBcbiAgICB9LFxuICB9LCBtZXNzYWdlOiB7XG4gICAgZmlyc3RuYW1lOiBcIlBsZWFzZSBlbnRlciB0aGUgZmlyc3RuYW1lXCIsXG4gICAgbGFzdG5hbWU6IFwiUGxlYXNlIGVudGVyIHRoZSBMYXN0bmFtZVwiLFxuICAgIGVtYWlsOiBcIlBsZWFzZSBlbnRlciBhIHZhbGlkIGVtYWlsXCIsXG4gICAgaW1hZ2U6IFwiUGxlYXNlIHNlbGVjdCBhbiBpbWFnZVwiLFxuICAgIG1hcmtzQXJlYTogXCJFbnRlciB5b3VycyBtYXJrc1wiLFxuICAgIHBoTnVtOiBcIkVudGVyIHlvdXIgcGhvbmUgbnVtYmVyXCIsXG4gICAgZW1haWw6IFwiRW50ZXIgeW91ciB2YWxpZCBlbWFpbFwiXG4gIH1cbn0pO1xuXG5cbiQoXCIjdXNlckRldGFpbHNcIikub24oXCJzdWJtaXRcIiwgZnVuY3Rpb24gKCkge1xuICBcbiAgaWYoZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShcImVycm9yXCIpID09IG51bGwpe1xuICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdsb2FkZXInKS5zdHlsZS52aXNpYmlsaXR5ID0gXCJ2aXNpYWJsZVwiO1xuICB9XG59KTtcblxuJChcIiNsb2dvdXRCdG5cIikuY2xpY2soZnVuY3Rpb24gKCkge1xuICBsb2NhbFN0b3JhZ2UuY2xlYXIoKTtcbn0pO1xuXG5kb2N1bWVudC5vbnJlYWR5c3RhdGVjaGFuZ2UgPSBmdW5jdGlvbiAoKSB7XG4gIHZhciBzdGF0ZSA9IGRvY3VtZW50LnJlYWR5U3RhdGVcbiAgaWYgKHN0YXRlID09ICdpbnRlcmFjdGl2ZScpIHtcbiAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbG9hZGVyJykuc3R5bGUudmlzaWJpbGl0eSA9IFwidmlzaWJsZVwiO1xuICB9IGVsc2UgaWYgKHN0YXRlID09ICdjb21wbGV0ZScpIHtcbiAgICBzZXRUaW1lb3V0KGZ1bmN0aW9uICgpIHtcbiAgICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdsb2FkZXInKS5zdHlsZS52aXNpYmlsaXR5ID0gXCJoaWRkZW5cIjtcbiAgICB9LCAxMDAwKTtcbiAgfVxufVxuXG5kb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImZpcnN0bmFtZVwiKS52YWx1ZSA9IGdldFNhdmVkVmFsdWUoXCJmaXJzdG5hbWVcIik7XG5kb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImxhc3RuYW1lXCIpLnZhbHVlID0gZ2V0U2F2ZWRWYWx1ZShcImxhc3RuYW1lXCIpO1xuZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJsYXJnZVRleHRBcmVhXCIpLnZhbHVlID0gZ2V0U2F2ZWRWYWx1ZShcImxhcmdlVGV4dEFyZWFcIik7XG5kb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInBob25lXCIpLnZhbHVlID0gZ2V0U2F2ZWRWYWx1ZShcInBob25lXCIpO1xuXG5mdW5jdGlvbiBzYXZlVmFsdWUoZSkge1xuICB2YXIgaWQgPSBlLmlkO1xuICB2YXIgdmFsID0gZS52YWx1ZTtcbiAgbG9jYWxTdG9yYWdlLnNldEl0ZW0oaWQsIHZhbCk7XG59XG5cbmZ1bmN0aW9uIGdldFNhdmVkVmFsdWUodikge1xuICBpZiAoIWxvY2FsU3RvcmFnZS5nZXRJdGVtKHYpKSB7XG4gICAgcmV0dXJuIFwiXCI7XG4gIH1cbiAgcmV0dXJuIGxvY2FsU3RvcmFnZS5nZXRJdGVtKHYpO1xufVxuXG5sZXQgZGlnaXRWYWxpZGF0ZSA9IGZ1bmN0aW9uIChlbGVtZW50KSB7XG4gIGVsZW1lbnQudmFsdWUgPSBlbGVtZW50LnZhbHVlLnJlcGxhY2UoL1teMC05XS9nLCAnJyk7XG59XG5cbmxldCB0YWJDaGFuZ2UgPSBmdW5jdGlvbiAodmFsdWUpIHtcblxuICBsZXQgZWxlbWVudCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJ2lucHV0Jyk7XG5cbiAgaWYgKGVsZW1lbnRbdmFsdWUgLSAxXS52YWx1ZSAhPSAnJykge1xuXG4gICAgZWxlbWVudFt2YWx1ZV0uZm9jdXMoKVxuXG4gIH0gZWxzZSBpZiAoZWxlW3ZhbCAtIDFdLnZhbHVlID09ICcnKSB7XG5cbiAgICBlbGVtZW50W3ZhbHVlIC0gMl0uZm9jdXMoKVxuICB9XG59XG4iLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiXSwibmFtZXMiOlsiQ29udHJvbGxlciIsImVsZW1lbnQiLCJ0ZXh0Q29udGVudCIsInN0YXJ0U3RpbXVsdXNBcHAiLCJhcHAiLCJyZXF1aXJlIiwiY29udGV4dCIsIiQiLCJ2YWxpZGF0ZSIsInJ1bGVzIiwidXNlcm5hbWUiLCJyZXF1aXJlZCIsIm1pbmxlbmd0aCIsIm1heGxlbmd0aCIsInBhc3N3b3JkIiwibWVzc2FnZSIsImVtYWlsIiwiZmlyc3RuYW1lIiwibGFzdG5hbWUiLCJpbWFnZSIsIm1hcmtzQXJlYSIsInBoTnVtIiwib24iLCJkb2N1bWVudCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJnZXRFbGVtZW50QnlJZCIsInN0eWxlIiwidmlzaWJpbGl0eSIsImNsaWNrIiwibG9jYWxTdG9yYWdlIiwiY2xlYXIiLCJvbnJlYWR5c3RhdGVjaGFuZ2UiLCJzdGF0ZSIsInJlYWR5U3RhdGUiLCJzZXRUaW1lb3V0IiwidmFsdWUiLCJnZXRTYXZlZFZhbHVlIiwic2F2ZVZhbHVlIiwiZSIsImlkIiwidmFsIiwic2V0SXRlbSIsInYiLCJnZXRJdGVtIiwiZGlnaXRWYWxpZGF0ZSIsInJlcGxhY2UiLCJ0YWJDaGFuZ2UiLCJxdWVyeVNlbGVjdG9yQWxsIiwiZm9jdXMiLCJlbGUiXSwic291cmNlUm9vdCI6IiJ9