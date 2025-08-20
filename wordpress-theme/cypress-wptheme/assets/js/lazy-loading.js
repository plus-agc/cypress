// Lazy loading script for images
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('img').forEach(function (img) {
        img.setAttribute('loading', 'lazy');
    });
});