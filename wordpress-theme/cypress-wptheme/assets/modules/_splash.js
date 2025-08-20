// splash.js
function splashWindow() {
  const body = document.querySelector("body");
  const splash = document.getElementById("js-splash");
  const splashLogo = document.getElementById("js-splash-logo");
  const splashEffect = document.getElementById("js-splash-effect");
  const mainVisuals = document.querySelectorAll(".p-main-visual"); // main.js からの変更を考慮し追加

  if (splash) {
    if (sessionStorage.getItem("visited")) {
      hideSplash();
    } else {
      sessionStorage.setItem("visited", true);
      // nullチェックを追加
      if (splashLogo) {
        splashLogo.classList.add("is-play");
        splashLogo.addEventListener("animationend", () => {
          if (splashEffect) {
            splashEffect.classList.add("is-play");
          }
        });
      } else {
        console.error("エラー: #js-splash-logo 要素が見つかりません。");
      }

      if (splashEffect) {
        splashEffect.addEventListener("animationend", hideSplash);
      } else {
        console.error("エラー: #js-splash-effect 要素が見つかりません。");
      }
    }
  }

  function hideSplash() {
    if (splash) splash.classList.add("is-hide");
    if (body) body.classList.remove("is-fixed");
    if (mainVisuals) mainVisuals.forEach(mainVisual => mainVisual.classList.add("is-animated"));

    // `window.swiperOptions` が正しく読み込まれているかチェック
    if (window.swiperOptions && window.swiperOptions.autoplayStart) {
      window.swiperOptions.autoplayStart(window.swiperOptions.mvSlider);
    } else {
      console.error("swiperOptions が正しく読み込まれていません。Swiperの自動再生を開始できません。");
    }
  }
}

// グローバル変数に登録（既存のコードと同様）
window.splashWindow = splashWindow;