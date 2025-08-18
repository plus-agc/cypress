<?php get_header(); ?>

<main id="primary" class="site-main">
    <div class="l-container">
        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title">ページが見つかりません</h1>
            </header>

            <div class="page-content">
                <p>お探しのページは見つかりませんでした。削除された、名前が変更された、または一時的に利用できない可能性があります。</p>

                <div class="error-actions">
                    <a href="<?php echo home_url('/'); ?>" class="button">ホームページに戻る</a>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>