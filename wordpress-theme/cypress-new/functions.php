<?php

/**
 * Cypress Holdings Theme Functions
 * 元のHTMLを完全に再現するWordPressテーマ
 */

// テーマのセットアップ
function cypress_theme_setup()
{
    // HTML5サポート
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // タイトルタグサポート
    add_theme_support('title-tag');

    // アイキャッチ画像サポート
    add_theme_support('post-thumbnails');

    // メニューサポート
    register_nav_menus(array(
        'header' => 'ヘッダーメニュー',
        'footer' => 'フッターメニュー',
    ));
}
add_action('after_setup_theme', 'cypress_theme_setup');

/**
 * アセットURLヘルパー関数
 */
function cypress_asset_url($path)
{
    return get_template_directory_uri() . '/assets/' . ltrim($path, '/');
}

/**
 * スタイルとスクリプトの読み込み
 * 元のHTMLと完全に同じ順序で読み込み
 */
function cypress_enqueue_scripts()
{
    $theme_version = wp_get_theme()->get('Version');

    // CSS読み込み（mv_2.htmlと同じ順序）
    wp_enqueue_style('cypress-recruit', cypress_asset_url('css/pages/recruit.css'), array(), $theme_version);
    wp_enqueue_style('cypress-mv-2', cypress_asset_url('css/pages/mv_2.css'), array(), $theme_version);
    wp_enqueue_style('cypress-common', cypress_asset_url('css/pages/common.css'), array(), $theme_version);
    wp_enqueue_style('cypress-modal', cypress_asset_url('css/pages/modal.css'), array(), $theme_version);

    // JavaScript読み込み（元のHTMLと完全に同じ順序・属性）
    wp_deregister_script('jquery'); // WordPressのjQueryを無効化

    // 元のHTMLと同じ順序：jquery.min.js (async)
    wp_enqueue_script('cypress-jquery', cypress_asset_url('js/vendor/jquery.min.js'), array(), $theme_version, false);
    wp_script_add_data('cypress-jquery', 'async', true);



    // lodash.min.js (async)
    wp_enqueue_script('cypress-lodash', cypress_asset_url('js/vendor/lodash.min.js'), array(), $theme_version, false);
    wp_script_add_data('cypress-lodash', 'async', true);

    // dotlottie-player.mjs (module type) - コメントアウト（ローカルでも動作しない場合）
    // wp_enqueue_script('cypress-dotlottie', 'https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs', array(), null, false);
    // wp_script_add_data('cypress-dotlottie', 'type', 'module');

    // lottie.min.js (async)
    wp_enqueue_script('cypress-lottie', cypress_asset_url('js/vendor/lottie.min.js'), array(), $theme_version, false);
    wp_script_add_data('cypress-lottie', 'async', true);

    // gsap.min.js（同期）
    wp_enqueue_script('cypress-gsap', cypress_asset_url('js/vendor/gsap.min.js'), array(), $theme_version, false);

    // ScrollTrigger.min.js（同期）
    wp_enqueue_script('cypress-scrolltrigger', cypress_asset_url('js/vendor/ScrollTrigger.min.js'), array('cypress-gsap'), $theme_version, false);

    // swiper-bundle.min.js（同期）
    wp_enqueue_script('cypress-swiper', cypress_asset_url('js/vendor/swiper-bundle.min.js'), array(), $theme_version, false);

    // カスタムスクリプト（元のファイルをそのまま使用、defer属性で）
    wp_enqueue_script('cypress-splash', cypress_asset_url('js/splash.js'), array(), $theme_version, true);
    wp_script_add_data('cypress-splash', 'defer', true);

    // main.js (defer) - 復旧
    wp_enqueue_script('cypress-main', cypress_asset_url('js/main.js'), array(), $theme_version, true);
    wp_script_add_data('cypress-main', 'defer', true);

    // accordion.js（defer属性で）
    wp_enqueue_script('cypress-accordion', cypress_asset_url('js/accordion.js'), array(), $theme_version, true);
    wp_script_add_data('cypress-accordion', 'defer', true);

    // modal.js（defer属性で）
    wp_enqueue_script('cypress-modal', cypress_asset_url('js/modal.js'), array(), $theme_version, true);
    wp_script_add_data('cypress-modal', 'defer', true);

    wp_enqueue_script('cypress-recruit', cypress_asset_url('js/recruit.js'), array(), $theme_version, true);
    wp_script_add_data('cypress-recruit', 'defer', true);



    // mv_2.js（mv_2.html用スクリプト、defer属性で）- ENVエラー修正後に有効化
    wp_enqueue_script('cypress-mv-2', cypress_asset_url('js/mv_2.js'), array(), $theme_version, true);
    wp_script_add_data('cypress-mv-2', 'defer', true);

    // lazy-loading.js（ページロード後）
    wp_enqueue_script('cypress-lazy-loading', cypress_asset_url('js/lazy-loading.js'), array(), $theme_version, true);

    // custom.js（同期読み込み、フッター無し）
    wp_enqueue_script('cypress-custom', cypress_asset_url('js/custom.js'), array(), $theme_version, false);
}
add_action('wp_enqueue_scripts', 'cypress_enqueue_scripts');

/**
 * WordPressの自動生成を無効化
 */
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');

/**
 * セキュリティヘッダー
 */
function cypress_security_headers()
{
    if (!is_admin()) {
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: SAMEORIGIN');
        header('X-XSS-Protection: 1; mode=block');
    }
}
add_action('send_headers', 'cypress_security_headers');
