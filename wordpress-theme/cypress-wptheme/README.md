# Cypress Holdings WordPress Theme

## 概要
株式会社サイプレス公式サイトのWordPressテーマです。元のHTMLサイトを**完全に再現**しています。

## 特徴
- ✅ **元のHTML構造を100%維持**
- ✅ **元のJS/CSSファイルをそのまま使用**（変更なし）
- ✅ **元のナビゲーション構造を完全再現**（企業情報、IR情報、サステナビリティ、新着情報）
- ✅ **元のscript読み込み順序・属性を完全再現**（async, defer）
- ✅ **採用情報は追加していません**（元のHTMLに存在しないため）

## 使用している元ファイル

### CSS（読み込み順序）
1. `recruit.css`
2. `top.css` 
3. `common.css`
4. `modal.css`

### JavaScript（読み込み順序・属性）
1. `jquery.min.js` (async)
2. `lodash.min.js` (async)
3. `lottie.min.js` (async)
4. `gsap.min.js`
5. `ScrollTrigger.min.js`
6. `swiper-bundle.min.js`
7. `splash.js` (defer)
8. `main.js` (defer)
9. `accordion.js` (defer)
10. `recruit.js` (defer)
11. `custom.js`

## ファイル構成

```
cypress-new/
├── style.css          # テーマヘッダー
├── functions.php      # メイン機能
├── header.php         # ヘッダー（完全再現）
├── footer.php         # フッター（完全再現）
├── front-page.php     # トップページ（完全再現）
├── index.php          # 投稿一覧
├── page.php           # 固定ページ
├── assets/            # 元のassetsディレクトリ（そのまま）
└── README.md          # このファイル
```

## 注意事項

⚠️ **このテーマは元のHTMLサイトを完全に再現するため、以下を変更していません：**

- JavaScriptファイル（main.js, recruit.js等の大きなファイルも含む）
- CSSファイル
- 画像ファイル
- HTML構造

## デバッグ

もし問題が発生した場合：

1. **ブラウザ開発者ツール** でJavaScriptエラーを確認
2. **Network タブ** でファイル読み込み状況を確認
3. **元のindex.html** と比較して相違点をチェック

## 設置方法

1. `wordpress-theme/cypress-new/` を WordPress の `wp-content/themes/` にコピー
2. WordPress管理画面でテーマを有効化
3. フロントページ設定で「固定ページ」を選択し、作成したページを指定

## バージョン
- Version: 1.0.0
- 元HTMLとの完全互換性を重視