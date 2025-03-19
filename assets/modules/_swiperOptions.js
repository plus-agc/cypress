__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   autoplayStart: function() { return /* binding */ autoplayStart; },
/* harmony export */   mvSlider: function() { return /* binding */ mvSlider; },
/* harmony export */   topProducts: function() { return /* binding */ topProducts; }
/* harmony export */ });
/* harmony import */ var swiper_bundle__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! swiper/bundle */ "./node_modules/swiper/swiper-bundle.esm.js");
/* harmony import */ var swiper_swiper_bundle_min_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! swiper/swiper-bundle.min.css */ "./node_modules/swiper/swiper-bundle.min.css");



const mvSlider = new swiper_bundle__WEBPACK_IMPORTED_MODULE_0__["default"]('.p-main-visual__slider', {
  slidesPerView: 1,
  loop: true,
  speed: 800,
  effect: 'fade',

  autoplay: {
    delay: 3000
  }
});

mvSlider.autoplay.stop();

const topProducts = new swiper_bundle__WEBPACK_IMPORTED_MODULE_0__["default"]('.p-products__slider', {
  slidesPerView: 1,
  loop: true,
  speed: 800,
  effect: 'fade',

  autoplay: {
    delay: 2000,
  }
});

topProducts.autoplay.stop();

function autoplayStart(slider) {
  slider.autoplay.start();
  //topProducts.autoplay.start();
}

//# sourceURL=webpack://kineyacp/./src/js/modules/_swiperOptions.js?