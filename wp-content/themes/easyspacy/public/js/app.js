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
	"./comments.js": "./wp-content/themes/easyspacy/resources/js/parts/comments.js",
	"./copy-link.js": "./wp-content/themes/easyspacy/resources/js/parts/copy-link.js",
	"./header-nav.js": "./wp-content/themes/easyspacy/resources/js/parts/header-nav.js",
	"./manage-input.js": "./wp-content/themes/easyspacy/resources/js/parts/manage-input.js",
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
    _classCallCheck(this, CommentForm);

    this.element = element;
    this.authorInput = element.querySelector('.author');
    this.allInput = this.element.querySelectorAll('input');
    this.eltFirstname = undefined;
    this.eltName = undefined;

    if (!this.element.classList.contains('comment-form_admin')) {
      this.init();
    }
  }

  _createClass(CommentForm, [{
    key: "init",
    value: function init() {
      var _this = this;

      this.element.addEventListener('input', function (e) {
        _this.adjustValue(e);
      });
    }
  }, {
    key: "adjustValue",
    value: function adjustValue(e) {
      if (e.target.classList.contains('comment-form__firstname-input')) {
        this.eltFirstname = e.target.value;
      } else if (e.target.classList.contains('comment-form__name-input')) {
        this.eltName = e.target.value;
      }

      this.authorInput.value = "".concat(this.eltFirstname, " ").concat(this.eltName);
    }
  }], [{
    key: "selector",
    get: function get() {
      return '#commentform';
    }
  }]);

  return CommentForm;
}();



/***/ }),

/***/ "./wp-content/themes/easyspacy/resources/js/parts/comments.js":
/*!********************************************************************!*\
  !*** ./wp-content/themes/easyspacy/resources/js/parts/comments.js ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Comments; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Comments = /*#__PURE__*/function () {
  function Comments(element) {
    _classCallCheck(this, Comments);

    this.element = element;
    this.button = document.querySelector('.existing-comments__discover');
    this.init();
  }

  _createClass(Comments, [{
    key: "init",
    value: function init() {
      var _this = this;

      this.button.addEventListener('click', function (e) {
        _this.element.classList.toggle('existing-comments_open');

        _this.changeTextContent(e);
      });
    }
  }, {
    key: "changeTextContent",
    value: function changeTextContent(e) {
      var text;

      if (this.element.classList.contains('existing-comments_open')) {
        text = 'Masquer les commentaires';
      } else {
        text = 'Lire d’autre commentaires';
      }

      e.target.textContent = text;
    }
  }], [{
    key: "selector",
    get: function get() {
      return '.existing-comments';
    }
  }]);

  return Comments;
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

/***/ "./wp-content/themes/easyspacy/resources/js/parts/header-nav.js":
/*!**********************************************************************!*\
  !*** ./wp-content/themes/easyspacy/resources/js/parts/header-nav.js ***!
  \**********************************************************************/
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
    _classCallCheck(this, CommentForm);

    this.element = element;
    this.buttonElt = document.createElement('button');
    this.container = document.querySelector('.navigation');
    this.searchFormInput = document.querySelector('.search-form__search-input');
    this.isOpen = false;
    this.init();
    this.update();
    this.openMenu();
  }

  _createClass(CommentForm, [{
    key: "init",
    value: function init() {
      var _this = this;

      this.buttonElt.className = 'top__menu-button';
      this.buttonElt.textContent = 'Menu'; //

      this.width = parseFloat(window.getComputedStyle(this.element, null).getPropertyValue('width')); //ecoute au resize

      window.addEventListener('resize', function (e) {
        _this.width = parseFloat(window.getComputedStyle(_this.element, null).getPropertyValue('width'));

        _this.update();

        _this.openMenu();
      });
      this.buttonElt.addEventListener('click', function (e) {
        _this.isOpen = _this.isOpen ? false : true;

        _this.openMenu();
      });
    }
  }, {
    key: "update",
    value: function update() {
      this.checkWidth();
    }
  }, {
    key: "checkWidth",
    value: function checkWidth() {
      if (this.width <= 1000) {
        if (!this.element.classList.contains('top_small')) {
          this.element.classList.add('top_small');
          this.element.insertAdjacentElement('beforeend', this.buttonElt);
          this.searchFormInput.setAttribute('placeholder', 'Rechercher');
        }
      } else {
        if (this.element.contains(this.buttonElt)) {
          this.element.removeChild(this.buttonElt);
        }

        this.element.classList.remove('top_small');
        this.searchFormInput.setAttribute('placeholder', '');

        if (!this.element.classList.contains('top_small')) {
          this.container.style = '';
          document.documentElement.style = '';
        }
      }
    }
  }, {
    key: "openMenu",
    value: function openMenu() {
      if (this.element.classList.contains('top_small')) {
        this.container.style.width = this.isOpen ? '80vw' : '0px';
        this.container.style.opacity = this.isOpen ? '1' : '0';
        document.documentElement.style.overflowY = this.isOpen ? 'hidden' : '';
        document.documentElement.style.position = this.isOpen ? 'fixed' : '';
        document.documentElement.style.width = this.isOpen ? '100vw' : '';
        this.buttonElt.textContent = this.isOpen ? 'Fermer' : 'Menu';
      }
    }
  }], [{
    key: "selector",
    get: function get() {
      return '.top';
    }
  }]);

  return CommentForm;
}();



/***/ }),

/***/ "./wp-content/themes/easyspacy/resources/js/parts/manage-input.js":
/*!************************************************************************!*\
  !*** ./wp-content/themes/easyspacy/resources/js/parts/manage-input.js ***!
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
    _classCallCheck(this, CommentForm);

    this.element = element;
    this.allInput = this.element.querySelectorAll('input');
    this.txtAreaElt = this.element.querySelector('textarea');
    this.allInput = Array.from(this.allInput);
    this.init();
  }

  _createClass(CommentForm, [{
    key: "init",
    value: function init() {
      var _this = this;

      this.allInput.push(this.txtAreaElt); //Gestion des index si il y a quelque chose

      this.allInput.forEach(function (input) {
        _this.manageIndex(input);

        input.addEventListener('input', function (e) {
          _this.manageIndex(e.target);
        });
      });
    }
  }, {
    key: "manageIndex",
    value: function manageIndex(input) {
      console.log(input);

      if (input.value) {
        input.style.zIndex = '1';
      }

      if (!input.value) {
        input.style = '';
      }
    }
  }], [{
    key: "selector",
    get: function get() {
      return '.form-js';
    }
  }]);

  return CommentForm;
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
      return _this.open();
    });
    this.searchInput.addEventListener('focusin', function (e) {
      return _this.open();
    });
    this.searchInput.addEventListener('focusout', function (e) {
      return _this.close();
    });
  }

  _createClass(SearchForm, [{
    key: "bodyclick",
    value: function bodyclick(e) {
      if (e.target === this.searchForm || this.searchForm.contains(e.target)) {
        return;
      }

      this.close();
    }
  }, {
    key: "open",
    value: function open() {
      if (!this.searchForm.classList.contains('focused')) {
        this.searchForm.classList.add('focused');
      }
    }
  }, {
    key: "close",
    value: function close() {
      if (this.searchForm.classList.contains('focused')) {
        this.searchForm.classList.remove('focused');
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
    _classCallCheck(this, Slider);

    this.element = element;
    this.allImagesElt = this.element.querySelectorAll('.figure__image');
    this.buttons = document.querySelectorAll('.fig-slider__nav-button');
    this.phrase = document.querySelector('.progression__phrase');
    this.rocket = document.querySelector('.progression__rocket');
    this.progress = document.querySelector('.progression__bar');
    this.allLinks = document.querySelectorAll('.figure__link'); //

    this.times = 0; //

    this.init();
  }

  _createClass(Slider, [{
    key: "init",
    value: function init() {
      this.allLinks[0].classList.add('figure__link_current');
      this.estimatedTime = this.phrase.dataset.estime;
      this.value = parseFloat(window.getComputedStyle(this.element, null).getPropertyValue('width')); //preparing slider var

      this.imgArray = Array.from(this.allImagesElt);
      this.imgLen = this.imgArray.length - 1;
      this.addClass();
      this.update();
    }
  }, {
    key: "update",
    value: function update() {
      var _this = this;

      window.addEventListener('resize', function (e) {
        _this.value = parseFloat(window.getComputedStyle(_this.element, null).getPropertyValue('width'));
      });
      this.buttons.forEach(function (button) {
        button.addEventListener('click', function (e) {
          if (button.classList.contains('fig-slider__nav-button_prev')) {
            _this.checkTimes(-1);
          } else {
            _this.checkTimes(1);
          }

          _this.addClass();

          _this.slideImg();
        });
      });
      this.allLinks.forEach(function (link, index) {
        link.addEventListener('click', function (e) {
          _this.times = index;

          _this.addClass();

          e.preventDefault();
        });
      });
    }
  }, {
    key: "checkTimes",
    value: function checkTimes(value) {
      if (value > 0 && this.times < this.imgArray.length - 1) {
        this.times += value;
      }

      if (value < 0 && this.times > 0) {
        this.times += value;
      }
    }
  }, {
    key: "slideImg",
    value: function slideImg() {
      var slide = this.value * -this.times;
      this.imgArray.forEach(function (image) {
        image.style.transform = "translate(".concat(slide, "px)");
      });
    }
  }, {
    key: "addClass",
    value: function addClass() {
      this.updatePhrase();
      this.updateProgress();
      this.clearClasses();
      this.allLinks[this.times].classList.add('figure__link_current');
      this.slideImg();
    }
  }, {
    key: "clearClasses",
    value: function clearClasses() {
      this.allLinks.forEach(function (link) {
        link.classList.remove('figure__link_current');
      });
    }
  }, {
    key: "updateProgress",
    value: function updateProgress() {
      var placement;

      if (this.times === 0 || this.times <= 1) {
        placement = 0;
      } else {
        placement = "".concat((this.times - 1) / (this.imgLen - 1) * 100, "%");
      }

      if (this.times === this.imgLen || this.times <= 1) {
        this.rocket.style.opacity = 0;
      } else {
        this.rocket.style.opacity = 1;
      }

      this.rocket.style.left = placement;
      this.progress.setAttribute('max', this.imgLen - 1);
      this.progress.value = this.times <= 1 ? 0 : this.times - 1;
    }
  }, {
    key: "updatePhrase",
    value: function updatePhrase() {
      var value;

      if (this.times === 0) {
        value = this.imgLen * this.estimatedTime;
      } else {
        value = (this.imgLen - this.times + 1) * this.estimatedTime;
      }

      this.phrase.textContent = "".concat(value, " minute(s) restantes");
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
  function SortBy() {
    _classCallCheck(this, SortBy);
  }

  _createClass(SortBy, null, [{
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