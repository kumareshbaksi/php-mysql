(self["webpackChunk"] = self["webpackChunk"] || []).push([["script"],{

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

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_es_date_to-primitive_js-node_modules_core-js_modules_es_-e5c96f"], () => (__webpack_exec__("./assets/javascript/script.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QUcsQ0FBQyxDQUFDLENBQUNMLEtBQUssSUFBSSxFQUFFLEVBQUU7SUFFbkNVLE9BQU8sQ0FBQ1YsS0FBSyxHQUFHLENBQUMsQ0FBQyxDQUFDYyxLQUFLLEVBQUU7RUFDNUI7QUFDRixDQUFDIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2phdmFzY3JpcHQvc2NyaXB0LmpzIl0sInNvdXJjZXNDb250ZW50IjpbIiQoXCIjdXNlckRldGFpbHNcIikudmFsaWRhdGUoe1xuICBydWxlczoge1xuICAgIHVzZXJuYW1lOiB7XG4gICAgICByZXF1aXJlZDogdHJ1ZSxcbiAgICAgIG1pbmxlbmd0aDogMixcbiAgICAgIG1heGxlbmd0aDogMjBcbiAgICB9LFxuICAgIHBhc3N3b3JkOiB7XG4gICAgICByZXF1aXJlZDogdHJ1ZSxcbiAgICAgIG1pbmxlbmd0aDogNSxcbiAgICAgIG1heGxlbmd0aDogMTVcbiAgICB9XG4gIH0sIG1lc3NhZ2U6IHtcblxuICAgIHVzZXJuYW1lOiBcIlBsZWFzZSBlbnRlciB0aGUgdXNlcm5hbWVcIixcbiAgICBlbWFpbDogXCJQbGVhc2UgZW50ZXIgYSB2YWxpZCBlbWFpbFwiLFxuICAgIHBhc3N3b3JkOiBcIkVtYWlsIG11c3QgaGF2ZSBhdCBsZWFzdCA1IGNoYXJhY3RlclwiXG4gIH1cbn0pO1xuXG4kKFwiI3VzZXJEZXRhaWxzXCIpLnZhbGlkYXRlKHtcbiAgcnVsZXM6IHtcbiAgICBmaXJzdG5hbWU6IHtcbiAgICAgIHJlcXVpcmVkOiB0cnVlLFxuICAgICAgbWlubGVuZ3RoOiAyLFxuICAgICAgbWF4bGVuZ3RoOiAyMFxuICAgIH0sXG4gICAgbGFzdG5hbWU6IHtcbiAgICAgIHJlcXVpcmVkOiB0cnVlLFxuICAgICAgbWlubGVuZ3RoOiAyLFxuICAgICAgbWF4bGVuZ3RoOiAyMFxuICAgIH0sXG4gICAgaW1hZ2U6IHtcbiAgICAgIHJlcXVpcmVkOiB0cnVlLFxuICAgIH0sXG4gICAgbWFya3NBcmVhOiB7XG4gICAgICByZXF1aXJlZDogdHJ1ZSxcbiAgICAgIG1pbmxlbmd0aDogNSxcbiAgICAgIG1heGxlbmd0aDogMTAwXG4gICAgfSxcbiAgICBwaE51bToge1xuICAgICAgcmVxdWlyZWQ6IHRydWUsXG4gICAgICBtaW5sZW5ndGg6IDEwLFxuICAgICAgbWF4bGVuZ3RoOiAxMFxuICAgIH0sXG4gIH0sIG1lc3NhZ2U6IHtcbiAgICBmaXJzdG5hbWU6IFwiUGxlYXNlIGVudGVyIHRoZSBmaXJzdG5hbWVcIixcbiAgICBsYXN0bmFtZTogXCJQbGVhc2UgZW50ZXIgdGhlIExhc3RuYW1lXCIsXG4gICAgZW1haWw6IFwiUGxlYXNlIGVudGVyIGEgdmFsaWQgZW1haWxcIixcbiAgICBpbWFnZTogXCJQbGVhc2Ugc2VsZWN0IGFuIGltYWdlXCIsXG4gICAgbWFya3NBcmVhOiBcIkVudGVyIHlvdXJzIG1hcmtzXCIsXG4gICAgcGhOdW06IFwiRW50ZXIgeW91ciBwaG9uZSBudW1iZXJcIixcbiAgICBlbWFpbDogXCJFbnRlciB5b3VyIHZhbGlkIGVtYWlsXCJcbiAgfVxufSk7XG5cblxuJChcIiN1c2VyRGV0YWlsc1wiKS5vbihcInN1Ym1pdFwiLCBmdW5jdGlvbiAoKSB7XG4gIFxuICBpZihkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKFwiZXJyb3JcIikgPT0gbnVsbCl7XG4gICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2xvYWRlcicpLnN0eWxlLnZpc2liaWxpdHkgPSBcInZpc2lhYmxlXCI7XG4gIH1cbn0pO1xuXG4kKFwiI2xvZ291dEJ0blwiKS5jbGljayhmdW5jdGlvbiAoKSB7XG4gIGxvY2FsU3RvcmFnZS5jbGVhcigpO1xufSk7XG5cbmRvY3VtZW50Lm9ucmVhZHlzdGF0ZWNoYW5nZSA9IGZ1bmN0aW9uICgpIHtcbiAgdmFyIHN0YXRlID0gZG9jdW1lbnQucmVhZHlTdGF0ZVxuICBpZiAoc3RhdGUgPT0gJ2ludGVyYWN0aXZlJykge1xuICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdsb2FkZXInKS5zdHlsZS52aXNpYmlsaXR5ID0gXCJ2aXNpYmxlXCI7XG4gIH0gZWxzZSBpZiAoc3RhdGUgPT0gJ2NvbXBsZXRlJykge1xuICAgIHNldFRpbWVvdXQoZnVuY3Rpb24gKCkge1xuICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2xvYWRlcicpLnN0eWxlLnZpc2liaWxpdHkgPSBcImhpZGRlblwiO1xuICAgIH0sIDEwMDApO1xuICB9XG59XG5cbmRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiZmlyc3RuYW1lXCIpLnZhbHVlID0gZ2V0U2F2ZWRWYWx1ZShcImZpcnN0bmFtZVwiKTtcbmRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwibGFzdG5hbWVcIikudmFsdWUgPSBnZXRTYXZlZFZhbHVlKFwibGFzdG5hbWVcIik7XG5kb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImxhcmdlVGV4dEFyZWFcIikudmFsdWUgPSBnZXRTYXZlZFZhbHVlKFwibGFyZ2VUZXh0QXJlYVwiKTtcbmRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwicGhvbmVcIikudmFsdWUgPSBnZXRTYXZlZFZhbHVlKFwicGhvbmVcIik7XG5cbmZ1bmN0aW9uIHNhdmVWYWx1ZShlKSB7XG4gIHZhciBpZCA9IGUuaWQ7XG4gIHZhciB2YWwgPSBlLnZhbHVlO1xuICBsb2NhbFN0b3JhZ2Uuc2V0SXRlbShpZCwgdmFsKTtcbn1cblxuZnVuY3Rpb24gZ2V0U2F2ZWRWYWx1ZSh2KSB7XG4gIGlmICghbG9jYWxTdG9yYWdlLmdldEl0ZW0odikpIHtcbiAgICByZXR1cm4gXCJcIjtcbiAgfVxuICByZXR1cm4gbG9jYWxTdG9yYWdlLmdldEl0ZW0odik7XG59XG5cbmxldCBkaWdpdFZhbGlkYXRlID0gZnVuY3Rpb24gKGVsZW1lbnQpIHtcbiAgZWxlbWVudC52YWx1ZSA9IGVsZW1lbnQudmFsdWUucmVwbGFjZSgvW14wLTldL2csICcnKTtcbn1cblxubGV0IHRhYkNoYW5nZSA9IGZ1bmN0aW9uICh2YWx1ZSkge1xuXG4gIGxldCBlbGVtZW50ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnaW5wdXQnKTtcblxuICBpZiAoZWxlbWVudFt2YWx1ZSAtIDFdLnZhbHVlICE9ICcnKSB7XG5cbiAgICBlbGVtZW50W3ZhbHVlXS5mb2N1cygpXG5cbiAgfSBlbHNlIGlmIChlbGVbdmFsIC0gMV0udmFsdWUgPT0gJycpIHtcblxuICAgIGVsZW1lbnRbdmFsdWUgLSAyXS5mb2N1cygpXG4gIH1cbn1cbiJdLCJuYW1lcyI6WyIkIiwidmFsaWRhdGUiLCJydWxlcyIsInVzZXJuYW1lIiwicmVxdWlyZWQiLCJtaW5sZW5ndGgiLCJtYXhsZW5ndGgiLCJwYXNzd29yZCIsIm1lc3NhZ2UiLCJlbWFpbCIsImZpcnN0bmFtZSIsImxhc3RuYW1lIiwiaW1hZ2UiLCJtYXJrc0FyZWEiLCJwaE51bSIsIm9uIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwiZ2V0RWxlbWVudEJ5SWQiLCJzdHlsZSIsInZpc2liaWxpdHkiLCJjbGljayIsImxvY2FsU3RvcmFnZSIsImNsZWFyIiwib25yZWFkeXN0YXRlY2hhbmdlIiwic3RhdGUiLCJyZWFkeVN0YXRlIiwic2V0VGltZW91dCIsInZhbHVlIiwiZ2V0U2F2ZWRWYWx1ZSIsInNhdmVWYWx1ZSIsImUiLCJpZCIsInZhbCIsInNldEl0ZW0iLCJ2IiwiZ2V0SXRlbSIsImRpZ2l0VmFsaWRhdGUiLCJlbGVtZW50IiwicmVwbGFjZSIsInRhYkNoYW5nZSIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJmb2N1cyIsImVsZSJdLCJzb3VyY2VSb290IjoiIn0=