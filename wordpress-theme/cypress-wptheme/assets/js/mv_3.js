// 環境設定
const MV3_ENV = {
    VIDEO_PATH: 'assets/images/top',
    VIDEO_1X: 'mv_3.mp4',
    VIDEO_2X: 'mv_3.mp4',
    MOBILE_BREAKPOINT: 430
};

// エラーハンドリング
function handleError(error, message = 'An error occurred') {
    console.error(`${message}:`, error);
}

// ユーティリティ関数
const mv3Utils = {
    isMobile: () => window.innerWidth <= MV3_ENV.MOBILE_BREAKPOINT,
    getVideoPath: () => mv3Utils.isMobile() ? MV3_ENV.VIDEO_1X : MV3_ENV.VIDEO_2X,
    getVideoElement: () => document.getElementById('img7'),
    getCodebyElement: () => document.getElementById('codeby')
};

// 動画管理
const mv3VideoManager = {
    setup: () => {
        const video = mv3Utils.getVideoElement();
        if (!video) return;

        const currentPath = video.src.split('/').pop();
        const targetPath = mv3Utils.getVideoPath();

        if (currentPath !== targetPath) {
            try {
                video.src = `${MV3_ENV.VIDEO_PATH}/${targetPath}`;
                video.load();
                video.play();
            } catch (error) {
                handleError(error, 'Failed to set video source');
            }
        }
    }
};

// アニメーション管理
class MV3AnimationManager {
    constructor() {
        this.players = [];
        this.observer = null;
        this.initialize();
    }

    initialize() {
        this.players = Array.from(document.querySelectorAll('dotlottie-player'));
        this.setupPlayers();
        this.setupObserver();
    }

    setupPlayers() {
        this.players.forEach(player => {
            try {
                player.stop();
            } catch (error) {
                handleError(error, 'Failed to stop player');
            }
        });
    }

    setupObserver() {
        this.observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    try {
                        entry.target.play();
                        this.observer.unobserve(entry.target);
                    } catch (error) {
                        handleError(error, 'Failed to play animation');
                    }
                }
            });
        }, { threshold: 0.5 });

        this.players.forEach(player => this.observer.observe(player));
    }
}

// スプラッシュウィンドウ管理
const mv3SplashManager = {
    init: () => {
        if (typeof window.splashWindow === 'function') {
            try {
                window.splashWindow();
            } catch (error) {
                handleError(error, 'Failed to initialize splash window');
            }
        }
    }
};

// コードバイ管理
const mv3CodebyManager = {
    setup: () => {
        const video = mv3Utils.getVideoElement();
        const codeby = mv3Utils.getCodebyElement();
        if (!video || !codeby) return;

        const showCodeby = () => {
            codeby.style.opacity = '1';
        };

        video.addEventListener('canplay', showCodeby);
        video.addEventListener('playing', showCodeby);

        if (video.readyState >= 3) {
            showCodeby();
        }
    }
};

// イベントハンドラー
document.addEventListener('DOMContentLoaded', () => {
    try {
        mv3VideoManager.setup();
        new MV3AnimationManager();
        mv3SplashManager.init();
        mv3CodebyManager.setup();
    } catch (error) {
        handleError(error, 'Failed to initialize DOMContentLoaded handlers');
    }
});

window.addEventListener('resize', () => {
    try {
        mv3VideoManager.setup();
    } catch (error) {
        handleError(error, 'Failed to handle resize event');
    }
});


// GSAP設定
const mv3GsapConfig = {
    scrollTrigger: {
        trigger: "#ImgWrapper",
        start: "0% 0%",
        end: "100% 0%",
        pin: "#ImgWrapper",
        scrub: 2.2
    }
};

// アニメーション管理
class MV3AnimationController {
    constructor() {
        this.timeline = null;
        this.init();
    }

    init() {
        // GSAPの初期化
        gsap.registerPlugin(ScrollTrigger);

        // ローディングアニメーション
        gsap.to("body", {
            opacity: 1,
            duration: 1.3
        });

        // ホバーイベントの設定
        this.setupHoverEvents();

        // スクロールトリガーの設定
        this.setupScrollTrigger();
    }

    setupHoverEvents() {
        const codebyLink = document.querySelector("#codeby a");
        if (!codebyLink) return;

        const handleMouseEnter = () => {
            gsap.to("#ImgWrapper", { backgroundColor: "#f0f0f0" });
            gsap.to("#codeby a", { color: "#113C8C" });
            gsap.to("#codeby a span", { color: "#113C8C" });
        };

        const handleMouseLeave = () => {
            gsap.to("#ImgWrapper", { backgroundColor: "#000000" });
            gsap.to("#codeby a", { color: "#e6e6e6" });
            gsap.to("#codeby a span", { color: "#f0f0f0" });
        };

        codebyLink.addEventListener('mouseenter', handleMouseEnter);
        codebyLink.addEventListener('mouseleave', handleMouseLeave);
    }

    setupScrollTrigger() {
        this.timeline = gsap.timeline({
            scrollTrigger: mv3GsapConfig.scrollTrigger
        });

        // メイン画像のアニメーション
        this.timeline.to("#ImgWrapper #img7", {
            transform: "translateZ(4500px) translateX(-1000px)",
            duration: 1
        }, 0)
            .from("#codeby a", {
                y: 130,
                opacity: 0,
                duration: 0.31
            }, 0.31);

        // テキスト要素のアニメーション
        this.timeline.to("#ImgWrapper h1", {
            opacity: 0,
            duration: 0.5
        }, 0)
            .to("#ImgWrapper p", {
                opacity: 0,
                duration: 0.5
            }, 0)
            .to("#codeby a", {
                opacity: 0,
                duration: 0.5
            }, 0.1);
    }
}

// 初期化
document.addEventListener('DOMContentLoaded', () => {
    try {
        new MV3AnimationController();
    } catch (error) {
        handleError(error, 'Failed to initialize animation controller');
    }
});


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
document.addEventListener('DOMContentLoaded', () => {
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
    let isDragging = false;
    let isPinching = false; // ピンチ操作中かどうかのフラグ

    // 画像クリックでモーダルを開く
    const openModal = (src, alt = '') => {
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
    };

    // モーダルを閉じる
    const closeModal = () => {
        modal.classList.remove('show');
        document.body.style.overflow = '';
        // transitionの完了を待ってから画像をリセット
        setTimeout(() => {
            modal.style.display = 'none'; // 先に非表示にする
            resetTransform(false);
        }, 300);
    };

    // トランスフォームをリセット
    const resetTransform = (isOpening = false) => {
        scale = 1;
        lastScale = 1;
        translateX = 0;
        translateY = 0;
        lastTranslateX = 0;
        lastTranslateY = 0;
        isDragging = false;
        isPinching = false;

        if (isOpening) {
            if (window.innerWidth <= 767) {
                scale = 2; // SPは少し拡大
            } else {
                scale = 0.9; // PCは90%表示
            }
        }

        updateTransform();
    };

    // トランスフォームを更新
    const updateTransform = () => {
        const transform = `translate(${translateX}px, ${translateY}px) scale(${scale})`;
        modalImg.style.transform = transform;
    };

    // 2点間の距離を計算
    const getDistance = (touch1, touch2) => {
        const dx = touch1.clientX - touch2.clientX;
        const dy = touch1.clientY - touch2.clientY;
        return Math.sqrt(dx * dx + dy * dy);
    };

    // タッチイベントハンドラー
    const handleTouchStart = (e) => {
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
    };

    const handleTouchMove = (e) => {
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
    };

    const handleTouchEnd = (e) => {
        e.preventDefault();
        e.stopPropagation();

        if (e.touches.length < 2) {
            isPinching = false;
        }
        if (e.touches.length < 1) {
            isDragging = false;
        }
    };

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
    const setupTouchEvents = () => {
        modalImg.addEventListener('touchstart', handleTouchStart, { passive: false });
        modalImg.addEventListener('touchmove', handleTouchMove, { passive: false });
        modalImg.addEventListener('touchend', handleTouchEnd, { passive: false });
        modalImg.addEventListener('touchcancel', handleTouchEnd, { passive: false });
    };

    const removeTouchEvents = () => {
        modalImg.removeEventListener('touchstart', handleTouchStart);
        modalImg.removeEventListener('touchmove', handleTouchMove);
        modalImg.removeEventListener('touchend', handleTouchEnd);
        modalImg.removeEventListener('touchcancel', handleTouchEnd);
    };

    // 初期読み込み時とリサイズ時の処理
    const handleResize = () => {
        if (window.innerWidth <= 767) {
            setupTouchEvents();
        } else {
            removeTouchEvents();
            if (modal.classList.contains('show')) {
                resetTransform(false); // PC表示に切り替わったら変形をリセット
            }
        }
    };

    // 初期化
    handleResize();
    // リサイズ時の処理
    window.addEventListener('resize', handleResize);
});
