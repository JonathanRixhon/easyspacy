/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/whitecube-pluton/pluton.min.js":
/*!*****************************************************!*\
  !*** ./node_modules/whitecube-pluton/pluton.min.js ***!
  \*****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Pluton; });
class Pluton{constructor(){this.classes=this.importAll(),this.instances={},this.setup()}clear(){this.instances={}}setup(s){for(var t in this.classes)this.setupComponent(t,this.classes[t],s)}setupComponent(s,t,e){t.selector&&[].forEach.call((e||document).querySelectorAll(t.selector),e=>{this.instances[s]||(this.instances[s]=[]),this.instances[s].push(new t(e))})}call(s,t,e){if(this.instances[s])for(var n=this.instances[s].length-1;n>=0;n--)this.instances[s][n][t](e)}importAll(){var s=__webpack_require__("./wp-content/themes/easyspacy/resources/js/parts sync recursive \\.js$"),t={};return s.keys().forEach(e=>{let n=s(e);t[n.default.selector]=n.default}),t}}


/***/ }),

/***/ "./wp-content/themes/easyspacy/resources/js/app.js":
/*!*********************************************************!*\
  !*** ./wp-content/themes/easyspacy/resources/js/app.js ***!
  \*********************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var whitecube_pluton__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! whitecube-pluton */ "./node_modules/whitecube-pluton/pluton.min.js");
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }



var Easyspacy = /*#__PURE__*/function () {
  function Easyspacy() {//TODO: complèter le constructor

    _classCallCheck(this, Easyspacy);
  }

  _createClass(Easyspacy, [{
    key: "load",
    value: function load() {
      //initialiser pluton. Ça le charge
      this.pluton = new whitecube_pluton__WEBPACK_IMPORTED_MODULE_0__["default"]();
    }
  }]);

  return Easyspacy;
}();

window.addEventListener('load', function (e) {
  window.easyspacy = new Easyspacy();
  window.easyspacy.load();
});

/***/ }),

/***/ "./wp-content/themes/easyspacy/resources/js/parts sync recursive \\.js$":
/*!*******************************************************************!*\
  !*** ./wp-content/themes/easyspacy/resources/js/parts sync \.js$ ***!
  \*******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var map = {
	"./comment-form.js": "./wp-content/themes/easyspacy/resources/js/parts/comment-form.js",
	"./copy-link.js": "./wp-content/themes/easyspacy/resources/js/parts/copy-link.js",
	"./search-form.js": "./wp-content/themes/easyspacy/resources/js/parts/search-form.js",
	"./slider.js": "./wp-content/themes/easyspacy/resources/js/parts/slider.js",
	"./sort-by.js": "./wp-content/themes/easyspacy/resources/js/parts/sort-by.js"
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
webpackContext.id = "./wp-content/themes/easyspacy/resources/js/parts sync recursive \\.js$";

/***/ }),

/***/ "./wp-content/themes/easyspacy/resources/js/parts/comment-form.js":
/*!************************************************************************!*\
  !*** ./wp-content/themes/easyspacy/resources/js/parts/comment-form.js ***!
  \************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return CommentForm; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var CommentForm = /*#__PURE__*/function () {
  function CommentForm(element) {
    var _this = this;

    _classCallCheck(this, CommentForm);

    var eltFirstname, eltName;
    this.authorInput = element.querySelector('.author');
    element.addEventListener('input', function (e) {
      if (e.target.classList.contains('comment-form__firstname-input')) {
        eltFirstname = e.target.value;
      } else if (e.target.classList.contains('comment-form__name-input')) {
        eltName = e.target.value;
      }

      _this.authorInput.value = "".concat(eltFirstname, " ").concat(eltName);
    });
  }

  _createClass(CommentForm, null, [{
    key: "selector",
    get: function get() {
      return '#commentform';
    }
  }]);

  return CommentForm;
}();



/***/ }),

/***/ "./wp-content/themes/easyspacy/resources/js/parts/copy-link.js":
/*!*********************************************************************!*\
  !*** ./wp-content/themes/easyspacy/resources/js/parts/copy-link.js ***!
  \*********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return CopyLink; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var CopyLink = /*#__PURE__*/function () {
  function CopyLink(element) {
    var _this = this;

    _classCallCheck(this, CopyLink);

    element.addEventListener('click', function (e) {
      _this.copyToClipboard(_this.getUrl());
    });
  }

  _createClass(CopyLink, [{
    key: "getUrl",
    value: function getUrl() {
      return window.location.href;
    }
  }, {
    key: "copyToClipboard",
    value: function copyToClipboard(url) {
      var elt = document.createElement('textarea');
      elt.value = url; //faire en sorte que le text aria input soir invisible

      elt.classList.add('sro');
      elt.setAttribute('aria-hidden', 'true'); //ajouter l'elt au body, le sélectionner et le copier

      document.body.appendChild(elt);
      elt.select();
      document.execCommand('copy');
      document.body.removeChild(elt);
    }
  }], [{
    key: "selector",
    get: function get() {
      return '.copy-link';
    }
  }]);

  return CopyLink;
}();



/***/ }),

/***/ "./wp-content/themes/easyspacy/resources/js/parts/search-form.js":
/*!***********************************************************************!*\
  !*** ./wp-content/themes/easyspacy/resources/js/parts/search-form.js ***!
  \***********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return SearchForm; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var SearchForm = /*#__PURE__*/function () {
  function SearchForm(element) {
    var _this = this;

    _classCallCheck(this, SearchForm);

    //init
    this.searchForm = element;
    this.searchInput = this.searchForm.querySelector('.search-form__search-input');
    document.addEventListener('click', function (e) {
      return _this.bodyclick(e);
    });
    this.searchForm.addEventListener('click', function (e) {
      return _this.open(e);
    });
  }

  _createClass(SearchForm, [{
    key: "bodyclick",
    value: function bodyclick(e) {
      if (e.target === this.searchForm || this.searchForm.contains(e.target)) {
        return;
      }

      if (this.searchInput.classList.contains('focused')) {
        e.preventDefault();
        this.searchInput.classList.remove('focused');
      }
    }
  }, {
    key: "open",
    value: function open() {
      if (!this.searchInput.classList.contains('focused')) {
        console.log('ouvert');
        this.searchInput.classList.add('focused');
      }
    }
  }], [{
    key: "selector",
    get: function get() {
      return '.search-form';
    }
  }]);

  return SearchForm;
}();



/***/ }),

/***/ "./wp-content/themes/easyspacy/resources/js/parts/slider.js":
/*!******************************************************************!*\
  !*** ./wp-content/themes/easyspacy/resources/js/parts/slider.js ***!
  \******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Slider; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Slider = /*#__PURE__*/function () {
  function Slider(element) {
    var _this = this;

    _classCallCheck(this, Slider);

    this.element = element;
    this.init();
    element.addEventListener('click', function (e) {
      e.preventDefault();

      _this.slideImg();

      _this.addClass();
    });
  }

  _createClass(Slider, [{
    key: "init",
    value: function init() {
      this.allImagesElt = this.element.querySelectorAll('.figure__image');
      this.allLinks = document.querySelectorAll('.figure__link'); //preparing slider var

      this.imgArray = Array.from(this.allImagesElt);
      this.value = -430;
      this.times = 0;
      this.addClass();
    }
  }, {
    key: "checkTimes",
    value: function checkTimes() {
      if (this.times === this.imgArray.length - 1) {
        this.times = this.imgArray.length - 1;
      } else {
        this.times++;
      }
    }
  }, {
    key: "slideImg",
    value: function slideImg() {
      var _this2 = this;

      /* this.checkTimes() */
      this.value = -430 * this.times;
      this.imgArray.forEach(function (image) {
        image.style.transform = "translate(".concat(_this2.value, "px)");
      });
    } //logic for css classes

  }, {
    key: "addClass",
    value: function addClass() {
      var _this3 = this;

      this.allLinks.forEach(function (link, index) {
        link.addEventListener('click', function (e) {
          _this3.clearClasses();

          link.classList.add('figure__link_current');
          _this3.times = index;

          _this3.slideImg();

          e.preventDefault();
        });
      });
    }
  }, {
    key: "clearClasses",
    value: function clearClasses() {
      this.allLinks.forEach(function (link) {
        link.classList.remove('figure__link_current');
      });
    }
  }], [{
    key: "selector",
    get: function get() {
      return '.figure__wrapper';
    }
  }]);

  return Slider;
}();



/***/ }),

/***/ "./wp-content/themes/easyspacy/resources/js/parts/sort-by.js":
/*!*******************************************************************!*\
  !*** ./wp-content/themes/easyspacy/resources/js/parts/sort-by.js ***!
  \*******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return SortBy; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var SortBy = /*#__PURE__*/function () {
  function SortBy(element) {
    var _this = this;

    _classCallCheck(this, SortBy);

    this.xhr = this.httpRequestInit();
    window.addEventListener('click', function (e) {
      _this.redirect();
    });
  }

  _createClass(SortBy, [{
    key: "httpRequestInit",
    value: function httpRequestInit() {
      var httpRequest = false;

      if (window.XMLHttpRequest) {
        // Mozilla, Safari,...
        httpRequest = new XMLHttpRequest();

        if (httpRequest.overrideMimeType) {
          httpRequest.overrideMimeType('text/xml');
        }
      } else if (window.ActiveXObject) {
        // IE
        try {
          httpRequest = new ActiveXObject('Msxml2.XMLHTTP');
        } catch (e) {
          try {
            httpRequest = new ActiveXObject('Microsoft.XMLHTTP');
          } catch (e) {}
        }
      }

      if (!httpRequest) {
        alert('Abandon :( Impossible de créer une instance XMLHTTP');
        return false;
      }

      return httpRequest;
    }
  }, {
    key: "redirect",
    value: function redirect() {
      var _this2 = this;

      this.xhr.onreadystatechange = function () {
        if (_this2.xhr.readyState === 4) {
          console.log(_this2.xhr.responseText);
        }
      };

      this.xhr.open('GET', '', true); // On envoit un header pour indiquer au serveur que la page est appellée en Ajax

      this.xhr.setRequestHeader('X-Requested-With', 'xmlhttprequest'); // On lance la requête

      this.xhr.send();
    }
  }], [{
    key: "selector",
    get: function get() {
      return '.sort-capsule';
    }
  }]);

  return SortBy;
}();



/***/ }),

/***/ "./wp-content/themes/easyspacy/resources/sass/theme.scss":
/*!***************************************************************!*\
  !*** ./wp-content/themes/easyspacy/resources/sass/theme.scss ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!***********************************************************************************************************************!*\
  !*** multi ./wp-content/themes/easyspacy/resources/js/app.js ./wp-content/themes/easyspacy/resources/sass/theme.scss ***!
  \***********************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Applications/MAMP/htdocs/easyspacy/wp-content/themes/easyspacy/resources/js/app.js */"./wp-content/themes/easyspacy/resources/js/app.js");
module.exports = __webpack_require__(/*! /Applications/MAMP/htdocs/easyspacy/wp-content/themes/easyspacy/resources/sass/theme.scss */"./wp-content/themes/easyspacy/resources/sass/theme.scss");


/***/ })

/******/ });