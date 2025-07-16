function splashWindow() {
	const body = document.querySelector('body');
	const splash = document.getElementById('js-splash');
	const splashLogo = document.getElementById('js-splash-logo');
	const splashEffect = document.getElementById('js-splash-effect');
	const mainVisual = document.querySelector('.p-main-visual');

	if (splash && splashLogo && splashEffect) {
		// DOMContentLoadedイベントを待ってから処理を開始
		document.addEventListener('DOMContentLoaded', () => {
			// localStorageの読み書きを非同期で行う
			setTimeout(() => {
				const visited = localStorage.getItem('visited');
				if (visited === 'true') {
					hideSplash();
				} else {
					localStorage.setItem('visited', 'true');
					splashLogo.classList.add('is-play');
					splashLogo.addEventListener('animationend', () => {
						splashEffect.classList.add('is-play');
					});
					splashEffect.addEventListener('animationend', hideSplash);
				}
			}, 100); // 少し遅延を追加してDOMの準備を待つ
		});
	}

	function hideSplash() {
		splash.classList.add('is-hide');
		body.classList.remove('is-fixed');
		mainVisual.classList.add('is-animated');
	}
}

// グローバル変数に登録
window.splashWindow = splashWindow;
