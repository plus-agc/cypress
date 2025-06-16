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
			if (splashLogo) {
				splashLogo.classList.add("is-play");
				splashLogo.addEventListener("animationend", () => {
					if (splashEffect) {
						splashEffect.classList.add("is-play");
					} else {
						console.warn("#js-splash-effect が見つかりません");
					}
				});
			} else {
				console.warn("#js-splash-logo が見つかりません");
			}

			if (splashEffect) {
				splashEffect.addEventListener("animationend", hideSplash);
			} else {
				console.warn("#js-splash-effect が見つかりません（イベント未登録）");
			}
		}
	}

	function hideSplash() {
		if (splash) splash.classList.add("is-hide");
		if (body) body.classList.remove("is-fixed");
		if (mainVisual) mainVisual.classList.add("is-animated");

		// `window.swiperOptions` が正しく読み込まれているかチェック
		if (window.swiperOptions && window.swiperOptions.autoplayStart) {
			window.swiperOptions.autoplayStart(window.swiperOptions.mvSlider);
		} else {
			console.error("swiperOptions が正しく読み込まれていません");
		}
	}
}

// グローバル変数に登録
window.splashWindow = splashWindow;
