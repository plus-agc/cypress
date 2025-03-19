__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
	/* harmony export */ splashWindow: function () {
		return /* binding */ splashWindow;
	},
	/* harmony export */
});
/* harmony import */ var _swiperOptions__WEBPACK_IMPORTED_MODULE_0__ =
	__webpack_require__(
		/*! ./_swiperOptions */ "./src/js/modules/_swiperOptions.js",
	);

function splashWindow() {
	const body = document.querySelector("body");
	const splash = document.getElementById("js-splash");
	const splashLogo = document.getElementById("js-splash-logo");
	const splashEffect = document.getElementById("js-splash-effect");
	const mainVisual = document.querySelector(".p-main-visual");

	if (splash) {
		if (sessionStorage.getItem("visited")) {
			hideSplash();
		} else {
			sessionStorage.setItem("visited", true);
			splashLogo.classList.add("is-play");
			splashLogo.addEventListener("animationend", () => {
				splashEffect.classList.add("is-play");
			});
			splashEffect.addEventListener("animationend", hideSplash);
		}
	}

	function hideSplash() {
		splash.classList.add("is-hide");
		body.classList.remove("is-fixed");
		mainVisual.classList.add("is-animated");
		(0, _swiperOptions__WEBPACK_IMPORTED_MODULE_0__.autoplayStart)(
			_swiperOptions__WEBPACK_IMPORTED_MODULE_0__.mvSlider,
		);
	}
}

//# sourceURL=webpack://kineyacp/./src/js/modules/_splash.js?
