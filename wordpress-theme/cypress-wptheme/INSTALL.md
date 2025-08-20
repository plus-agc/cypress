# 🚀 Cypress Holdings WordPress テーマ - インストールガイド

## 📋 **完成したファイル構成**

```
cypress-new/
├── style.css              # WordPressテーマヘッダー
├── functions.php           # メイン機能（元のJS/CSS読み込み）
├── header.php              # ヘッダー（完全再現）
├── footer.php              # フッター（完全再現）
├── front-page.php          # トップページ（完全再現）
├── index.php               # 投稿一覧
├── page.php                # 固定ページ
├── single.php              # 単一投稿
├── archive.php             # アーカイブ
├── 404.php                 # 404ページ
├── README.md               # テーマドキュメント
├── INSTALL.md              # このファイル
└── assets/                 # 元のassetsディレクトリ（そのまま）
    ├── css/                # 元のCSSファイル
    ├── js/                 # 元のJavaScriptファイル
    ├── images/             # 元の画像ファイル
    └── ...
```

## 🛠️ **インストール手順**

### 1. テーマのアップロード
```bash
# WordPress インストールディレクトリで
cp -r cypress-new/ wp-content/themes/
```

### 2. WordPressでの設定
1. **管理画面** → **外観** → **テーマ**
2. "Cypress Holdings" を有効化
3. **設定** → **表示設定**
4. 「ホームページの表示」を「固定ページ」に設定
5. フロントページを指定

### 3. 必要なプラグイン（任意）
- **Classic Editor** (ブロックエディタを無効化したい場合)

## ✅ **テーマの特徴**

### **✅ 元のHTML完全再現**
- ナビゲーション: 企業情報、IR情報、サステナビリティ、新着情報
- JavaScript読み込み順序: 元のHTMLと完全に同じ
- CSS読み込み順序: recruit.css → top.css → common.css → modal.css
- アニメーション: GSAP、Lottie、Swiper がすべて動作

### **✅ 使用している元ファイル（変更なし）**
- `main.js` (539KB) - そのまま使用
- `recruit.js` (512KB) - そのまま使用  
- `splash.js` - そのまま使用
- `custom.js` - そのまま使用
- すべてのCSSファイル - そのまま使用

### **✅ WordPress機能**
- カスタム投稿タイプ対応
- レスポンシブ対応
- SEO対応
- セキュリティ対応

## 🔧 **トラブルシューティング**

### **JavaScript エラーが出る場合**
1. ブラウザ開発者ツールでConsoleを確認
2. ファイルパスが正しいか確認
3. サーバーでのCORS設定を確認

### **CSS が適用されない場合**
1. functions.php の `cypress_asset_url()` を確認
2. assetsディレクトリのパーミッションを確認
3. ブラウザキャッシュをクリア

### **スプラッシュ画面が表示されない場合**
1. splash.js が正しく読み込まれているか確認
2. #js-splash 要素が存在するか確認
3. 画像パスが正しいか確認

## 📞 **サポート**

このテーマは元のHTMLサイトを**100%完全再現**しています。

問題が発生した場合は：
1. 元の `index.html` と比較
2. ブラウザ開発者ツールでデバッグ
3. functions.php の設定を確認

---

**🎯 このテーマは元のサイトと完全に同じ見た目・動作を実現します！**