const fs = require('fs');
const path = require('path');

// 更新対象のHTMLファイル
const htmlFiles = [
    'company.html',
    'contact.html',
    'eight.html',
    'five.html',
    'four.html',
    'ir.html',
    'midcareer.html',
    'newgraduate.html',
    'nine.html',
    'one.html',
    'poricy.html',
    'recruit.html',
    'seven.html',
    'sitepolicy.html',
    'six.html',
    'socialmedia.html',
    'sustainability.html',
    'three.html',
    'two.html'
];

// CDNからローカルへの置換マッピング
const replacements = [
    {
        from: /<script src="https:\/\/code\.jquery\.com\/jquery-3\.7\.1\.js"[^>]*><\/script>/g,
        to: '<script src="./assets/js/vendor/jquery.min.js" async></script>'
    },
    {
        from: /<script src="https:\/\/cdnjs\.cloudflare\.com\/ajax\/libs\/lodash\.js\/4\.17\.21\/lodash\.min\.js"[^>]*><\/script>/g,
        to: '<script src="./assets/js/vendor/lodash.min.js" async></script>'
    },
    {
        from: /<script src="https:\/\/unpkg\.com\/@dotlottie\/player-component@2\.7\.12\/dist\/dotlottie-player\.mjs"[^>]*><\/script>/g,
        to: '<script src="./assets/js/vendor/dotlottie-player.mjs" type="module"></script>'
    },
    {
        from: /<script src="https:\/\/cdnjs\.cloudflare\.com\/ajax\/libs\/lottie-web\/5\.12\.2\/lottie\.min\.js"[^>]*><\/script>/g,
        to: '<script src="./assets/js/vendor/lottie.min.js" async></script>'
    },
    {
        from: /<script src="https:\/\/s3-us-west-2\.amazonaws\.com\/s\.cdpn\.io\/16327\/gsap-latest-beta\.min\.js\?r=5426"[^>]*><\/script>/g,
        to: '<script src="./assets/js/vendor/gsap.min.js" defer></script>'
    },
    {
        from: /<script src="https:\/\/s3-us-west-2\.amazonaws\.com\/s\.cdpn\.io\/16327\/ScrollTrigger\.min\.js"[^>]*><\/script>/g,
        to: '<script src="./assets/js/vendor/ScrollTrigger.min.js" async></script>'
    },
    {
        from: /<script src="https:\/\/cdnjs\.cloudflare\.com\/ajax\/libs\/gsap\/3\.12\.5\/gsap\.min\.js"><\/script>/g,
        to: '<script src="./assets/js/vendor/gsap.min.js"></script>'
    },
    {
        from: /<script src="https:\/\/cdnjs\.cloudflare\.com\/ajax\/libs\/gsap\/3\.12\.5\/ScrollTrigger\.min\.js"><\/script>/g,
        to: '<script src="./assets/js/vendor/ScrollTrigger.min.js"></script>'
    },
    {
        from: /<script src="https:\/\/unpkg\.com\/swiper@11\/swiper-bundle\.min\.js"><\/script>/g,
        to: '<script src="./assets/js/vendor/swiper-bundle.min.js"></script>'
    }
];

// 各HTMLファイルを更新
htmlFiles.forEach(filename => {
    const filePath = path.join(__dirname, filename);

    if (fs.existsSync(filePath)) {
        let content = fs.readFileSync(filePath, 'utf8');
        let updated = false;

        replacements.forEach(replacement => {
            if (replacement.from.test(content)) {
                content = content.replace(replacement.from, replacement.to);
                updated = true;
            }
        });

        if (updated) {
            fs.writeFileSync(filePath, content, 'utf8');
            console.log(`Updated: ${filename}`);
        } else {
            console.log(`No CDN scripts found in: ${filename}`);
        }
    } else {
        console.log(`File not found: ${filename}`);
    }
});

console.log('CDN to local conversion completed!'); 