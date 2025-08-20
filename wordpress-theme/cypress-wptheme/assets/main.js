// Webpack の `__webpack_require__` を削除し、グローバル変数から取得
document.addEventListener("DOMContentLoaded", () => {
	console.log("main.js がロードされました");

	// scroll effect
	if (window.scrollDetect && window.scrollDetect.onIntersect) {
		const targets = document.querySelectorAll(".js-scroll-effect");
		targets.forEach((target) =>
			window.scrollDetect.onIntersect(target, {
				rootMargin: "0px 0px -30% 0px",
			}),
		);
	}

	// count up
	if (window.scrollDetect && window.scrollDetect.onIntersect) {
		const countTarget = document.querySelectorAll(".js-countup");
		countTarget.forEach((cTarget) =>
			window.scrollDetect.onIntersect(cTarget, {
				rootMargin: "0px 0px -20% 0px",
			}),
		);
	}

	// スプラッシュスクリーン
	if (window.splashWindow) {
		window.splashWindow();
	}

	// スムーズスクロール
	if (window.smoothScroll) {
		window.smoothScroll();
	}

	// メニューの開閉
	const menuButton = document.getElementById("js-menu-button");
	const menuNav = document.getElementById("js-menu-nav");
	if (menuButton && menuNav) {
		menuButton.addEventListener("click", () => {
			menuButton.classList.toggle("is-active");
			menuNav.classList.toggle("is-open");
		});
	}
});

// ページロード時の処理
window.addEventListener("load", () => {
	if (window.accordion) {
		window.accordion();
	}
});
