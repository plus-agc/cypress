// DotLottieはCDNでグローバル変数として提供される

document.addEventListener('DOMContentLoaded', function () {
    const canvas = document.querySelector('#dotlottie-canvas');
    if (!canvas || typeof DotLottie === 'undefined') return;

    const dotLottie = new DotLottie({
        autoplay: true,
        loop: true,
        canvas: canvas,
        src: "../json/ROIC.json" // 必要に応じてパスを修正
    });
});