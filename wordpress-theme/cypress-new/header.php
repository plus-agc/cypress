<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title('|', true, 'right');
            bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>

<body id="pagetop" class="<?php echo is_front_page() ? '' : 'page'; ?>">
    <header class="l-header">
        <h1 hidden="">株式会社 株式会社サイプレス</h1>
        <div class="l-header__logo">
            <a href="<?php echo home_url('/'); ?>">
                <img src="<?php echo cypress_asset_url('images/common/logo.svg'); ?>" alt="株式会社 株式会社サイプレス" class="l-header__logo-image" width="592"
                    height="156" />
            </a>
        </div>
        <nav class="l-nav" id="js-menu-nav">
            <div class="l-nav__inner">
                <ul class="l-nav__list">
                    <li class="l-nav__item">
                        <a href="<?php echo home_url('/company/'); ?>" class="l-nav__link">企業情報</a>
                    </li>
                    <li class="l-nav__item l-nav__link-parent js-accordion-menu">
                        <a href="<?php echo home_url('/ir/'); ?>" class="l-nav__link">IR情報</a>
                        <div class="l-nav-nest js-accordion-body">
                            <div class="l-nav-nest__inner">
                                <a href="<?php echo home_url('/ir/'); ?>" class="l-nav-nest__parent">
                                    IR情報
                                    <span class="l-nav-nest__parent-icon c-icon__arrow">
                                        <svg class="l-nav-nest__parent-svg" width="19" height="14">
                                            <use href="#arrow"></use>
                                        </svg>
                                    </span>
                                </a>
                                <ul class="l-nav-nest__primary">
                                    <li class="l-nav-nest__primary-item">
                                        <a href="<?php echo home_url('/ir/'); ?>" class="l-nav-nest__primary-link">IRニュース
                                            <span class="l-nav-nest__primary-icon c-icon__arrow">
                                                <svg class="l-nav-nest__primary-svg" width="19" height="14">
                                                    <use href="#arrow"></use>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="l-nav-nest__primary-item">
                                        <a href="<?php echo home_url('/ir/material/'); ?>" class="l-nav-nest__primary-link">IR資料
                                            <span class="l-nav-nest__primary-icon c-icon__arrow">
                                                <svg class="l-nav-nest__primary-svg" width="19" height="14">
                                                    <use href="#arrow"></use>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="l-nav-nest__primary-item">
                                        <a href="<?php echo home_url('/ir/highlight/'); ?>" class="l-nav-nest__primary-link">財務ハイライト
                                            <span class="l-nav-nest__primary-icon c-icon__arrow">
                                                <svg class="l-nav-nest__primary-svg" width="19" height="14">
                                                    <use href="#arrow"></use>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="l-nav-nest__primary-item">
                                        <a href="<?php echo home_url('/ir/monthly/'); ?>" class="l-nav-nest__primary-link">月次売上
                                            <span class="l-nav-nest__primary-icon c-icon__arrow">
                                                <svg class="l-nav-nest__primary-svg" width="19" height="14">
                                                    <use href="#arrow"></use>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="l-nav-nest__primary-item">
                                        <a href="<?php echo home_url('/ir/governance/'); ?>" class="l-nav-nest__primary-link">コーポレートガバナンス
                                            <span class="l-nav-nest__primary-icon c-icon__arrow">
                                                <svg class="l-nav-nest__primary-svg" width="19" height="14">
                                                    <use href="#arrow"></use>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="l-nav-nest__primary-item">
                                        <a href="<?php echo home_url('/ir/shareholder/'); ?>" class="l-nav-nest__primary-link">株主優待情報
                                            <span class="l-nav-nest__primary-icon c-icon__arrow">
                                                <svg class="l-nav-nest__primary-svg" width="19" height="14">
                                                    <use href="#arrow"></use>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="l-nav-nest__primary-item">
                                        <a href="<?php echo home_url('/ir/disclosure/'); ?>" class="l-nav-nest__primary-link">ディスクロージャーポリシー
                                            <span class="l-nav-nest__primary-icon c-icon__arrow">
                                                <svg class="l-nav-nest__primary-svg" width="19" height="14">
                                                    <use href="#arrow"></use>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="l-nav-nest__primary-item">
                                        <a href="<?php echo cypress_asset_url('pdf/20240625kabunushi.pdf'); ?>" target="_blank"
                                            class="l-nav-nest__primary-link">株主総会のご報告
                                            <span class="l-nav-nest__primary-icon is-pc c-icon__pdf">
                                                <svg class="l-nav-nest__primary-svg" width="15" height="20">
                                                    <use href="#icon-pdf"></use>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="l-nav-nest__secondary">
                                    <li class="l-nav-nest__secondary-item">
                                        <a href="<?php echo home_url('/ir/disclaimer/'); ?>" class="l-nav-nest__secondary-link">免責事項</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="l-nav__item">
                        <a href="<?php echo home_url('/sustainability/'); ?>" class="l-nav__link">サステナビリティ</a>
                    </li>
                    <li class="l-nav__item">
                        <a href="<?php echo home_url('/news/'); ?>" class="l-nav__link">新着情報</a>
                    </li>
                </ul>
                <a href="<?php echo home_url('/company/en/'); ?>" class="l-nav__english">EN</a>
                <a href="<?php echo home_url('/contact/'); ?>" class="l-nav__button l-nav__button--contact"><span
                        class="l-nav__button-label">お問い合わせ</span></a>
            </div>
        </nav>
        <button class="l-header__menu" id="js-menu-button">
            <span class="l-header__menu-label">Menu</span>
            <span class="l-header__menu-icon">
                <span class="l-header__menu-rect"></span>
            </span>
        </button>
    </header>