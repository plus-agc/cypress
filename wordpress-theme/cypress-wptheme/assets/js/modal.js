// モーダル機能
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('imageModal');
    const modalImg = modal.querySelector('img');
    const modalClose = modal.querySelector('.modal-close');

    // モーダルトリガー要素の設定
    document.querySelectorAll('[data-modal]').forEach(function (element) {
        element.addEventListener('click', function () {
            const imgElement = this.querySelector('img');
            if (imgElement) {
                modal.style.display = 'block';
                modalImg.src = imgElement.src;
                modalImg.alt = imgElement.alt;
            }
        });
    });

    // モーダル閉じる機能
    modalClose.addEventListener('click', function () {
        modal.style.display = 'none';
    });

    // モーダル外クリックで閉じる
    modal.addEventListener('click', function (e) {
        if (e.target === modal) {
            modal.style.display = 'none';
        }
    });

    // ESCキーで閉じる
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && modal.style.display === 'block') {
            modal.style.display = 'none';
        }
    });
});