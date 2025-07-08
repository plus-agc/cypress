// 画面幅400px以下で動画ソースを切り替え
function setVideoSource() {
    const video = document.getElementById('img7');
    if (!video) return;
    if (window.matchMedia('(max-width: 430px)').matches) {
        if (video.src.indexOf('mv_1@1x.mp4') === -1) {
            video.src = 'assets/images/top/mv_1@1x.mp4';
            video.load();
            video.play();
        }
    } else {
        if (video.src.indexOf('mv_1@2x.mp4') === -1) {
            video.src = 'assets/images/top/mv_1@2x.mp4';
            video.load();
            video.play();
        }
    }
}
document.addEventListener('DOMContentLoaded', function () {
    // 動画ソースの設定
    setVideoSource();

    // dotlottie-playerの設定
    const players = document.querySelectorAll('dotlottie-player');
    if (players.length > 0) {
        // 全プレイヤーを最初は停止
        players.forEach(player => player.stop());

        // 1つのObserverで全てのプレイヤーを監視
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.play();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        // 全プレイヤーを監視対象に追加
        players.forEach(player => observer.observe(player));
    }

    // splashWindowの設定
    if (window.splashWindow) {
        window.splashWindow();
    }

    // 動画とcodebyの設定
    const video = document.getElementById('img7');
    const codeby = document.getElementById('codeby');
    function showCodeby() {
        if (codeby) codeby.style.opacity = '1';
    }
    if (video) {
        video.addEventListener('canplay', showCodeby);
        video.addEventListener('playing', showCodeby);
        // 動画がキャッシュ済みの場合も考慮
        if (video.readyState >= 3) showCodeby();
    }
});

// リサイズイベントリスナーの設定
window.addEventListener('resize', setVideoSource);


gsap.registerPlugin(ScrollTrigger);

//---------------------Landing Page ScrollTrigger---------------------
function LandingPageScrollTrigger() {
    gsap.to("body", {
        // LoadingAnimation---------------------
        opacity: 1,
        duration: 1.3,
    }); // /LoadingAnimation---------------------

    $("#codeby a").mouseenter(function () {
        // HoverAnimation---------------------
        gsap.to("#ImgWrapper", { backgroundColor: "#f0f0f0" });
        gsap.to("#codeby a", { color: "#113C8C" });
        gsap.to("#codeby a span", { color: "#113C8C" });
    });
    $("#codeby a").mouseout(function () {
        gsap.to("#ImgWrapper", { backgroundColor: "#000000" });
        gsap.to("#codeby a", { color: "#e6e6e6" });
        gsap.to("#codeby a span", { color: "#f0f0f0" });
    }); // /HoverAnimation---------------------

    let LandingPageScrollTrigger = gsap.timeline({
        scrollTrigger: {
            trigger: "#ImgWrapper",
            start: "0% 0%",
            end: "100% 0%",
            pin: "#ImgWrapper",
            scrub: 2.2,
        },
    });

    // メイン画像のアニメーション（img7のみ）
    LandingPageScrollTrigger.to(
        "#ImgWrapper #img7",
        { transform: "translateZ(4500px) translateX(-1000px)" },
        0
    ).from("#codeby a", { y: 130, opacity: 0 }, 0.31);

    // テキスト要素を非表示にするアニメーションを追加
    LandingPageScrollTrigger.to(
        "#ImgWrapper h1",
        { opacity: 0, duration: 0.5 },
        0
    ) // "EAT to live. Everyone is so."
        .to("#ImgWrapper p", { opacity: 0, duration: 0.5 }, 0) // "Scroll Down"
        .to("#codeby a", { opacity: 0, duration: 0.5 }, 0.1); // "CYPRESS HOLDINGS"
}

//---------------------/Landing Page ScrollTrigger---------------------

window.onload = () => {
    LandingPageScrollTrigger();
};


document.addEventListener('DOMContentLoaded', () => {
    const target = document.getElementById('lottie-animation');
    let animation = null;
    let isVisible = false;
    let loopTimeout = null;

    if (!target) return;

    const isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);

    const playWithInterval = () => {
        if (!isVisible || !animation) return;
        animation.goToAndPlay(0, true);
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && entry.intersectionRatio >= 0.5) {
                isVisible = true;

                if (!animation) {
                    animation = lottie.loadAnimation({
                        container: target,
                        renderer: isSafari ? 'canvas' : 'svg', // Safari は canvas
                        loop: false,
                        autoplay: true,
                        path: './assets/animation/animation.json'
                    });
                    animation.setSpeed(0.36);
                    // --- Insert canvas resolution adjustment here ---
                    const canvas = target.querySelector('canvas');
                    if (canvas) {
                        const rect = target.getBoundingClientRect();
                        canvas.width = rect.width;
                        canvas.height = rect.height;
                    }
                    // --- End inserted code ---
                    animation.addEventListener('complete', () => {
                        // no loop
                    });
                } else {
                    playWithInterval();
                }
            } else {
                isVisible = false;
                if (animation) animation.stop();
                if (loopTimeout) {
                    clearTimeout(loopTimeout);
                    loopTimeout = null;
                }
            }
        });
    }, { threshold: 0.5 });

    observer.observe(target);
});


// 既存のコードを削除または置き換えて、以下のコードに変更
document.addEventListener('DOMContentLoaded', function () {
    // 既存のモーダル機能を初期化
    const modal = document.getElementById('imageModal');
    const modalImg = modal.querySelector('img');
    const closeBtn = modal.querySelector('.modal-close');

    // タッチ操作用の変数
    let scale = 1;
    let lastScale = 1;
    let startDistance = 0;
    let startX = 0;
    let startY = 0;
    let translateX = 0;
    let translateY = 0;
    let lastTranslateX = 0;
    let lastTranslateY = 0;
    let isDragging = false;
    let isPinching = false; // ピンチ操作中かどうかのフラグ

    // 画像クリックでモーダルを開く
    function openModal(src, alt = '') {
        modalImg.src = src;
        modalImg.alt = alt;

        // モーダル表示
        modal.style.display = 'flex'; // 先にflexにしておく
        modal.classList.add('show');
        document.body.style.overflow = 'hidden';

        // 表示が完了してからトランスフォームをリセット
        // requestAnimationFrameを使用して、ブラウザの描画タイミングに合わせる
        requestAnimationFrame(() => {
            resetTransform(true); // isOpeningフラグを立てて初期化
        });
    }

    // モーダルを閉じる
    function closeModal() {
        modal.classList.remove('show');
        document.body.style.overflow = '';
        // transitionの完了を待ってから画像をリセット
        setTimeout(() => {
            modal.style.display = 'none'; // 先に非表示にする
            resetTransform(false);
        }, 300);
    }


    // トランスフォームをリセット
    function resetTransform(isOpening = false) {
        scale = 1;
        lastScale = 1;
        translateX = 0;
        translateY = 0;
        lastTranslateX = 0;
        lastTranslateY = 0;
        isDragging = false;
        isPinching = false;

        // SPで開くときだけ少し拡大する
        if (isOpening && window.innerWidth <= 767) {
            scale = 1.2;
        }

        updateTransform();
    }

    // トランスフォームを更新
    function updateTransform() {
        const transform = `translate(${translateX}px, ${translateY}px) scale(${scale})`;
        modalImg.style.transform = transform;
    }

    // 2点間の距離を計算
    function getDistance(touch1, touch2) {
        const dx = touch1.clientX - touch2.clientX;
        const dy = touch1.clientY - touch2.clientY;
        return Math.sqrt(dx * dx + dy * dy);
    }

    // タッチイベントハンドラー
    function handleTouchStart(e) {
        e.preventDefault();
        e.stopPropagation();

        if (e.touches.length === 2) {
            isPinching = true;
            isDragging = false; // ピンチ中はドラッグを無効に
            startDistance = getDistance(e.touches[0], e.touches[1]);
            lastScale = scale;
        } else if (e.touches.length === 1 && !isPinching) {
            isDragging = true;
            startX = e.touches[0].clientX - translateX;
            startY = e.touches[0].clientY - translateY;
        }
    }

    function handleTouchMove(e) {
        e.preventDefault();
        e.stopPropagation();

        if (e.touches.length === 2 && isPinching) {
            const currentDistance = getDistance(e.touches[0], e.touches[1]);
            if (startDistance > 0) {
                const scaleChange = currentDistance / startDistance;
                scale = Math.max(1, lastScale * scaleChange); // 最小スケールを1に制限
                updateTransform();
            }
        } else if (e.touches.length === 1 && isDragging) {
            translateX = e.touches[0].clientX - startX;
            translateY = e.touches[0].clientY - startY;
            updateTransform();
        }
    }

    function handleTouchEnd(e) {
        e.preventDefault();
        e.stopPropagation();

        if (e.touches.length < 2) {
            isPinching = false;
        }
        if (e.touches.length < 1) {
            isDragging = false;
        }
    }

    // イベントリスナーの設定
    document.querySelectorAll('.p-recruit_intro picture, .p-recruit_intro img').forEach(el => {
        el.addEventListener('click', (e) => {
            e.preventDefault();
            // picture要素内の一番最適なimg要素を取得
            const img = e.currentTarget.querySelector('img');
            if (img && img.src) {
                openModal(img.src, img.alt);
            }
        });
    });

    // モーダルを閉じる
    closeBtn.addEventListener('click', closeModal);
    modal.addEventListener('click', (e) => {
        // 画像以外のモーダル背景クリックで閉じる
        if (e.target === modal) closeModal();
    });

    // ESCキーで閉じる
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.classList.contains('show')) {
            closeModal();
        }
    });

    // SP用タッチイベント
    function setupTouchEvents() {
        modalImg.addEventListener('touchstart', handleTouchStart, { passive: false });
        modalImg.addEventListener('touchmove', handleTouchMove, { passive: false });
        modalImg.addEventListener('touchend', handleTouchEnd, { passive: false });
        modalImg.addEventListener('touchcancel', handleTouchEnd, { passive: false });
    }

    function removeTouchEvents() {
        modalImg.removeEventListener('touchstart', handleTouchStart);
        modalImg.removeEventListener('touchmove', handleTouchMove);
        modalImg.removeEventListener('touchend', handleTouchEnd);
        modalImg.removeEventListener('touchcancel', handleTouchEnd);
    }

    // 初期読み込み時とリサイズ時の処理
    function handleResize() {
        if (window.innerWidth <= 767) {
            setupTouchEvents();
        } else {
            removeTouchEvents();
            if (modal.classList.contains('show')) {
                resetTransform(false); // PC表示に切り替わったら変形をリセット
            }
        }
    }

    // 初期化
    handleResize();
    // リサイズ時の処理
    window.addEventListener('resize', handleResize);
});
