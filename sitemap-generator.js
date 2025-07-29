// sitemap-generator.js

const fs = require('fs');
const path = require('path');
const { SitemapStream, streamToPromise } = require('sitemap');

const SITE_URL = 'http://localhost:3000'; // デモ用のローカルURL
const PUBLIC_DIR = path.join(__dirname, './'); // 静的ファイルのディレクトリ

// 除外したいディレクトリ名をここに追加できます
const EXCLUDE_DIRS = ['node_modules', '.git'];

function getHtmlFiles(dir, baseUrl = '') {
    let results = [];
    const list = fs.readdirSync(dir);

    list.forEach(file => {
        if (EXCLUDE_DIRS.includes(file)) return; // 除外ディレクトリをスキップ
        const filePath = path.join(dir, file);
        const stat = fs.statSync(filePath);

        if (stat && stat.isDirectory()) {
            results = results.concat(getHtmlFiles(filePath, path.join(baseUrl, file)));
        } else if (file.endsWith('.html')) {
            let urlPath = path.join(baseUrl, file).replace(/\\/g, '/');
            if (urlPath.endsWith('index.html')) {
                urlPath = urlPath.replace(/index\.html$/, '');
            }
            if (!urlPath.startsWith('/')) urlPath = '/' + urlPath;
            results.push(urlPath);
        }
    });

    return results;
}

async function generateSitemap() {
    const htmlFiles = getHtmlFiles(PUBLIC_DIR);

    const sitemapStream = new SitemapStream({ hostname: SITE_URL });

    htmlFiles.forEach(url => {
        sitemapStream.write({ url });
    });

    sitemapStream.end();

    const sitemap = await streamToPromise(sitemapStream).then(sm => sm.toString());

    fs.writeFileSync(path.join(PUBLIC_DIR, 'sitemap.xml'), sitemap, 'utf8');
    console.log('sitemap.xml を生成しました');
}

generateSitemap().catch(err => {
    console.error('サイトマップ生成中にエラー:', err);
});
