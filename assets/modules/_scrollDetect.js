__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   onIntersect: function() { return /* binding */ onIntersect; }
/* harmony export */ });
/* harmony import */ var _countUp__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./_countUp */ "./src/js/modules/_countUp.js");
/* harmony import */ var _swiperOptions__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./_swiperOptions */ "./src/js/modules/_swiperOptions.js");



function onIntersect(target, options = '') {
  new IntersectionObserver(scrollToggle, options).observe(target);
}

let i = 0;

function scrollToggle(entries) {
  for(const entry of entries) {
    if(entry.isIntersecting) {
      entry.target.classList.add('is-animated');
      if(entry.target.classList.contains('p-products')) {
        (0,_swiperOptions__WEBPACK_IMPORTED_MODULE_1__.autoplayStart)(_swiperOptions__WEBPACK_IMPORTED_MODULE_1__.topProducts);
      } else if(entry.target.classList.contains('js-countup')) {
        (0,_countUp__WEBPACK_IMPORTED_MODULE_0__.countUp)(i);
        i++;
      }
    }
  }
}

//# sourceURL=webpack://kineyacp/./src/js/modules/_scrollDetect.js?