<?php get_header(); ?>

<!-- メインビジュアル（mv_2.html版） -->
<div>
    <?php if (file_exists(get_template_directory() . '/assets/images/top/mv_2.mp4')) : ?>
        <video id="img7" src="<?php echo cypress_asset_url('images/top/mv_2.mp4'); ?>" autoplay loop muted playsinline preload="auto"></video>
    <?php else : ?>
        <!-- 動画ファイルが見つからない場合、静止画を表示 -->
        <img src="<?php echo cypress_asset_url('images/top/mv_1@2x.webp'); ?>" alt="メインビジュアル" style="width: 100%; height: 100vh; object-fit: cover;" />
    <?php endif; ?>
</div>

<section class="p-main js-scroll-effect">
    <div class="p-main-visual">
        <div class="p-main-visual__text">
            <h2 class="p-main-visual__sticky">日常食における「感動と喜び」の追求</h2>
        </div>
    </div>
    <div class="p-main-intro">
        <div class="p-main-intro__inner" id="js-sticky-root">
            <p class="p-main-intro__text">
                私たちが目指すのは、特別ではない日常の食事に「感動と喜び」という新たな価値を提供することです。飽和しつつある食市場において、単なる栄養補給や利便性にとどまらない、心の豊かさを生み出す食体験こそが、持続的な成長を可能にすると確信しています。
            </p>
        </div>
    </div>
    <div class="p-main-visual">
        <div class="p-main-visual__text">
            <h2 class="p-main-visual__sticky">海鮮・寿司・焼鳥が中心となる15種の和食ブランドに加え、麺類・ファストフード・洋食・中華・カフェ等、全33種のブランドがサイプレスを構成</h2>
        </div>
    </div>
    <div class="p-main-intro">
        <div class="p-main-intro__inner" id="js-sticky-root">
            <p class="p-main-intro__text">
                主力ブランド「源ちゃん」で培った販売・食材・人材・立地の強みを武器に、
                新主力ブランド「ABURI百貫」・「銀座惣菜店」を続々成功させました。
                また36社にも上る多くのディベロッパーへの飲食コンサルティングを通じ、大規模・迅速な新規出店を可能にしました。
                主力3ブランド中心に「源ちゃん」・「銀座惣菜店」・「ABURI百貫」の、SC/郊外型・都市型複合型店舗の出店が成長戦略の柱とし、首都圏の「ABURI百貫」含む同一施設内・複数ブランド同時出店、全国の「銀座惣菜店」併設フォーマット活用出店が既に成功しています。
                サイプレスホールディングスはブランド全体で1000店舗を目指す、出店戦略で成長してまいります。
                <a href="<?php echo home_url('/company/#message'); ?>" class="p-main-intro__more c-arrow-link">
                    <span class="c-arrow-link__icon">
                        <svg class="c-arrow-link__svg" width="19" height="14">
                            <use href="#arrow"></use>
                        </svg>
                    </span>
                    <span class="c-arrow-link__label">代表メッセージ</span>
                </a>
            </p>
        </div>
    </div>
</section>

<div class="l-container">
    <section class="p-recruit">
        <div class="p-recruit__mv">
            <picture>
                <source media="(min-width: 768px)" srcset="
                    <?php echo cypress_asset_url('images/top/strength.webp'); ?> 1x,
                    <?php echo cypress_asset_url('images/top/strength.webp'); ?> 2x
                " width="1290" height="492" />
                <img src="<?php echo cypress_asset_url('images/top/strength_sp.webp'); ?>" srcset="<?php echo cypress_asset_url('images/top/strength_sp.webp'); ?> 2x"
                    alt="採用情報" class="p-recruit__mv-image" width="355" height="200" />
            </picture>
        </div>
        <div class="p-recruit__content">
            <div class="p-recruit__inner">
                <section class="p-recruit_intro">
                    <h2 class="slideup js-scroll-effect">
                        <span>サイプレスの強み</span>
                        全国どこでも新鮮なままお届けする<br>即日配送システム
                    </h2>
                    <p class="slideup js-scroll-effect">
                        私たちサイプレス・ホールディングスでは、全国各地の市場で仕入れた新鮮な魚介類を、仕入れたその日のうちに各店舗へお届けしています。<br class="pci" />

                        早朝に買い付けた魚介類は、そのまま迅速に出荷され、午前中には店舗に到着。こうした迅速な即日配送システムによって、鮮度を最大限に維持し、「非加熱提供」など、新鮮だからこそ可能なメニュー展開を実現しています。<br
                            class="pci" />

                        また、私たちの物流ネットワークは今も成長を続けています。東京の豊洲市場では、自社トラックをはじめとする計7社の物流業者と連携し、大量かつスピーディーな配送を行っています。地方市場でも専属配送業者を各地に配置し、効率的かつ確実な配送体制を整備しています。<br
                            class="pci" />

                        今後も全国への出店が拡大するなか、物流網もさらなる拡充を図り、全国各地のお客様にいつでも最高の鮮度と品質をお届けできるよう、配送能力を強化し続けていきます。
                    </p>
                    <picture>
                        <source media="(min-width: 768px)" srcset="
                            <?php echo cypress_asset_url('images/top/data.svg'); ?> 1x,
                            <?php echo cypress_asset_url('images/top/data.svg'); ?> 2x
                        " width="480" height="541" />
                        <img src="<?php echo cypress_asset_url('images/top/data.svg'); ?>" srcset="<?php echo cypress_asset_url('images/top/data.svg'); ?> 2x" alt=""
                            width="375" height="599" class="slideup js-scroll-effect" />
                    </picture>
                </section>
                <section class="p-recruit_intro" style="margin:4.6vw 0;">
                    <h2 class="slideup js-scroll-effect">
                        <span>全国規模の海鮮仕入ネットワーク</span>30年間で構築した信頼の仕入れ基盤
                    </h2>
                    <p class="slideup js-scroll-effect">
                        サイプレス・ホールディングスの強みの核となるのが、1994年から30年間かけて構築した全国規模の海鮮仕入ネットワークです。東京豊洲市場を起点に、青森から鹿児島まで全国12の主要市場と強固な取引関係を築いています。<br
                            class="pci" />
                        豊洲市場仲卸による地方市場仲卸への紹介により、サイプレスの高い評価と信頼性が地方市場でも引き継がれ、質の高い海鮮仕入を全国で実現しています。<br class="pci" />
                        東北エリア: 青森五所川原市場（2012年）、仙台中央卸売市場（2002年）<br class="pci" />
                        関西エリア: 大阪市中央卸売市場（2014年）、奈良県中央卸売市場（2019年）<br class="pci" />
                        中部エリア: 名古屋市中央卸売市場北部市場（2022年）<br class="pci" />
                        中国エリア: 岡山市中央卸売市場（2020年）<br class="pci" />
                        九州エリア: 福岡・熊本・宮崎・鹿児島の4市場（2011年〜2024年）<br class="pci" />

                        各エリアの主要市場との取引開始により、地域特産の新鮮な海鮮を安定的に確保し、全国の店舗で高品質な海鮮料理を提供しています。
                    </p>
                    <picture>
                        <source media="(min-width: 768px)" srcset="
                            <?php echo cypress_asset_url('images/top/table.svg'); ?> 1x,
                            <?php echo cypress_asset_url('images/top/table.svg'); ?> 2x
                        " width="480" height="541" />
                        <img src="<?php echo cypress_asset_url('images/top/table.svg'); ?>" srcset="<?php echo cypress_asset_url('images/top/table.svg'); ?> 2x" alt=""
                            width="375" height="599" class="slideup js-scroll-effect" />
                    </picture>
                </section>
            </div>
        </div>

        <!-- スライダーセクション -->
        <section id="interview" class="js-scroll-effect">
            <div class="interview_inner">
                <h2 class="p-recruit-segment__title slideup js-scroll-effect">
                    <span class="p-recruit-segment__title-jpn">仕入れから提供までの流れ</span>
                    <span class="p-recruit-segment__title-eng">Flow</span>
                </h2>
                <div id="mainslide" class="swiper-container swiper-initialized swiper-horizontal">
                    <div class="swiper-wrapper" id="swiper-wrapper-4d0809b1d5a84463" aria-live="polite"
                        style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); transition-delay: 0ms;">
                        <!-- Swiperスライド - 実際のスライドは多数ありますが、主要なもののみ表示 -->
                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 17"
                            data-swiper-slide-index="0">
                            <div id="slide1" data-modal="0">
                                <div class="photo">
                                    <div class="desc">
                                        <p><span>発注<br>21:00〜23:00</span></p>
                                        <ul>
                                            <li>翌日メニューと顧客予測数をもとに店舗で発注を確定。</li>
                                        </ul>
                                    </div>
                                    <img src="<?php echo cypress_asset_url('images/recruit/01.webp'); ?>" alt="S.M." width="364" height="515"
                                        class="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 17"
                            data-swiper-slide-index="1">
                            <div id="slide2" data-modal="1">
                                <div class="photo">
                                    <div class="desc">
                                        <p><span>受注処理<br>2:00〜4:00</span></p>
                                        <ul>
                                            <li>店舗からの発注情報を取りまとめて、仕入担当者が仕入れリストを作成。</li>
                                            <li>仲卸との取引内容を事前確認、仕入れの調整を実施。</li>
                                        </ul>
                                    </div>
                                    <img src="<?php echo cypress_asset_url('images/recruit/02.webp'); ?>" alt="A.N." width="364" height="515"
                                        class="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="3 / 17" data-swiper-slide-index="2">
                            <div id="slide3" data-modal="2">
                                <div class="photo">
                                    <div class="desc">
                                        <p><span>競り・買付<br>4:00〜5:00</span></p>
                                        <ul>
                                            <li>豊洲市場で鮮魚の競りが始まり、仕入担当者が最適な品質と価格の魚介類を厳選して購入。</li>
                                            <li>状況に応じてボリュームディスカウント等を活用し、鮮度とコストを最適化。</li>
                                        </ul>
                                    </div>
                                    <img src="<?php echo cypress_asset_url('images/recruit/04.webp'); ?>" alt="S.A." width="364" height="515"
                                        class="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="4 / 17" data-swiper-slide-index="3">
                            <div id="slide4" data-modal="3">
                                <div class="photo">
                                    <div class="desc">
                                        <p><span>自社加工場での加工<br>5:00〜6:00</span></p>
                                        <ul>
                                            <li>買い付けた魚介類を自社加工場に運び込み、店舗ごとの注文に合わせて下処理を実施。</li>
                                            <li>店舗での調理工程を短縮できるよう、盛り付け直前までの加工を行う。</li>
                                        </ul>
                                    </div>
                                    <img src="<?php echo cypress_asset_url('images/recruit/06.webp'); ?>" alt="H.H." width="364" height="515"
                                        class="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="5 / 17" data-swiper-slide-index="4">
                            <div id="slide5" data-modal="4">
                                <div class="photo">
                                    <div class="desc">
                                        <p><span>配送・発送<br>6:00〜8:00</span></p>
                                        <ul>
                                            <li>加工した鮮魚を自社トラックおよび協力運送業者に迅速に引き渡し。</li>
                                            <li>店舗に向けた即日配送を開始、首都圏および近隣地域の店舗には午前中に到着。</li>
                                        </ul>
                                    </div>
                                    <img src="<?php echo cypress_asset_url('images/recruit/07.webp'); ?>" alt="T.I." width="364" height="515"
                                        class="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="6 / 17" data-swiper-slide-index="5">
                            <div id="slide6" data-modal="5">
                                <div class="photo">
                                    <div class="desc">
                                        <p><span>店舗到着<br>8:00〜9:00</span></p>
                                        <ul>
                                            <li>各店舗で仕入れた鮮魚の数量や状態を確認。</li>
                                            <li>店舗スタッフが当日のメニュー提供準備を開始。</li>
                                        </ul>
                                    </div>
                                    <img src="<?php echo cypress_asset_url('images/recruit/08.webp'); ?>" alt="K.T." width="364" height="515"
                                        class="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="7 / 17" data-swiper-slide-index="6">
                            <div id="slide7" data-modal="6">
                                <div class="photo">
                                    <div class="desc">
                                        <p><span>仕込み作業<br>9:00〜10:00</span></p>
                                        <ul>
                                            <li>到着した鮮魚の最終的な調理や盛り付けを店舗スタッフが行う。</li>
                                            <li>開店準備を整え、店舗での提供体制を確立。</li>
                                        </ul>
                                    </div>
                                    <img src="<?php echo cypress_asset_url('images/recruit/09.webp'); ?>" alt="N.D." width="364" height="515"
                                        class="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="8 / 17" data-swiper-slide-index="7">
                            <div id="slide8" data-modal="7">
                                <div class="photo">
                                    <div class="desc">
                                        <p><span>ランチタイム<br>11:00〜14:00</span></p>
                                        <ul>
                                            <li>ランチタイムがスタート。店舗スタッフが注文に応じて迅速に調理・提供を行う。</li>
                                            <li>提供後の顧客の反応や食材の状態を記録し、仕入れ改善に活かす。</li>
                                        </ul>
                                    </div>
                                    <img src="<?php echo cypress_asset_url('images/recruit/10.webp'); ?>" alt="T.R." width="364" height="515"
                                        class="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="9 / 17" data-swiper-slide-index="8">
                            <div id="slide9" data-modal="8">
                                <div class="photo">
                                    <div class="desc">
                                        <p><span>午後の仕込み・メニュー調整<br>14:00〜16:00</span></p>
                                        <ul>
                                            <li>午後の提供に向けて再度食材のチェックと追加仕込みを実施。</li>
                                            <li>当日の売れ行きを踏まえ、ディナータイムのメニュー調整を行う。</li>
                                        </ul>
                                    </div>
                                    <img src="<?php echo cypress_asset_url('images/top/pixta_8331719.webp'); ?>" alt="T.N." width="364"
                                        height="515" class="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="10 / 17" data-swiper-slide-index="9">
                            <div id="slide10" data-modal="9">
                                <div class="photo">
                                    <div class="desc">
                                        <p><span>ディナータイム準備<br>16:00〜17:00</span></p>
                                        <ul>
                                            <li>夜のピークタイムに向けて、店舗内の調理場を再整理し、ディナー向け食材の仕込みを最終調整。</li>
                                            <li>顧客への迅速なサービス提供のため、スタッフがスタンバイし、準備完了。</li>
                                        </ul>
                                    </div>
                                    <img src="<?php echo cypress_asset_url('images/recruit/14.webp'); ?>" alt="M.K." width="364" height="515"
                                        class="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="11 / 17" data-swiper-slide-index="10">
                            <div id="slide11" data-modal="10">
                                <div class="photo">
                                    <div class="desc">
                                        <p><span>ディナータイム<br>17:00〜</span></p>
                                        <ul>
                                            <li>本格的なディナータイムが始まり、ピーク時の迅速な調理と接客サービスを実施。</li>
                                            <li>顧客満足度を高めるために鮮度と味を最高の状態で提供し、一日の流れが完結。</li>
                                        </ul>
                                    </div>
                                    <img src="<?php echo cypress_asset_url('images/recruit/13.webp'); ?>" alt="M.Y." width="364" height="515"
                                        class="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagers">
                        <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"
                            aria-controls="swiper-wrapper-4d0809b1d5a84463"></div>
                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                            aria-controls="swiper-wrapper-4d0809b1d5a84463"></div>
                        <div class="swiper-pagination-number">
                            <span class="pagination-number-current">1</span> - <span
                                class="pagination-number-total">17</span>
                        </div>
                        <div
                            class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                            <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                role="button" aria-label="Go to slide 1" aria-current="true"></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet"
                                tabindex="0" role="button" aria-label="Go to slide 3"></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet"
                                tabindex="0" role="button" aria-label="Go to slide 5"></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet"
                                tabindex="0" role="button" aria-label="Go to slide 7"></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 8"></span><span class="swiper-pagination-bullet"
                                tabindex="0" role="button" aria-label="Go to slide 9"></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 10"></span><span class="swiper-pagination-bullet"
                                tabindex="0" role="button" aria-label="Go to slide 11"></span>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </section>
    </section>

    <!-- ビジネスセクション -->
    <section class="p-business js-scroll-effect">
        <header class="p-business__title c-section-title">
            <span class="c-section-title__jpn">株式会社サイプレスグループの事業</span>
            <h2 class="c-section-title__eng">Business</h2>
        </header>
        <div class="p-business__grid">
            <a href="<?php echo home_url('/business/one/'); ?>" class="p-business__item">
                <img src="<?php echo cypress_asset_url('images/top/business_1.webp'); ?>" srcset="<?php echo cypress_asset_url('images/top/business_1@2x.webp'); ?>"
                    alt="" class="p-business__image" />
                <div class="p-business__overlay"></div>
                <div class="p-business__logo">
                    <img src="<?php echo cypress_asset_url('images/top/icon_business_1.svg'); ?>" alt=""
                        class="p-business__logo-icon p-business__logo--1" />
                </div>
                <div class="p-business__text">
                    <h3 class="p-business__name">食の喜びを全ての人へ</h3>
                </div>
            </a>

            <a href="<?php echo home_url('/business/two/'); ?>" class="p-business__item">
                <img src="<?php echo cypress_asset_url('images/top/business_2.webp'); ?>" srcset="<?php echo cypress_asset_url('images/top/business_2@2x.webp'); ?>"
                    alt="" class="p-business__image" />
                <div class="p-business__overlay"></div>
                <div class="p-business__logo">
                    <img src="<?php echo cypress_asset_url('images/top/icon_business_1.svg'); ?>" alt=""
                        class="p-business__logo-icon p-business__logo--2" />
                </div>
                <div class="p-business__text">
                    <h3 class="p-business__name">
                        さまざまな働き方に応えた 安心して働ける組織体系
                    </h3>
                </div>
            </a>

            <a href="<?php echo home_url('/business/three/'); ?>" class="p-business__item">
                <img src="<?php echo cypress_asset_url('images/top/business_3.webp'); ?>" srcset="<?php echo cypress_asset_url('images/top/business_3@2x.webp'); ?>"
                    alt="" class="p-business__image" />
                <div class="p-business__overlay"></div>
                <div class="p-business__logo">
                    <img src="<?php echo cypress_asset_url('images/top/icon_business_1.svg'); ?>" alt=""
                        class="p-business__logo-icon p-business__logo--3" />
                </div>
                <div class="p-business__text">
                    <h3 class="p-business__name">
                        新鮮な食材は毎朝豊洲で 徹底管理された仕入れを行う
                    </h3>
                </div>
            </a>

            <a href="<?php echo home_url('/business/four/'); ?>" class="p-business__item">
                <img src="<?php echo cypress_asset_url('images/top/business_5.webp'); ?>" srcset="<?php echo cypress_asset_url('images/top/business_5@2x.webp'); ?>"
                    alt="" class="p-business__image" />
                <div class="p-business__overlay"></div>
                <div class="p-business__logo">
                    <img src="<?php echo cypress_asset_url('images/top/icon_business_1.svg'); ?>" alt=""
                        class="p-business__logo-icon p-business__logo--5" />
                </div>
                <div class="p-business__text">
                    <h3 class="p-business__name">公共施設のコントラクト事業</h3>
                </div>
            </a>

            <a href="<?php echo home_url('/business/five/'); ?>" class="p-business__item">
                <img src="<?php echo cypress_asset_url('images/top/business_6.webp'); ?>" srcset="<?php echo cypress_asset_url('images/top/business_6@2x.webp'); ?>"
                    alt="" class="p-business__image" />
                <div class="p-business__overlay"></div>
                <div class="p-business__logo">
                    <img src="<?php echo cypress_asset_url('images/top/icon_business_1.svg'); ?>" alt=""
                        class="p-business__logo-icon p-business__logo--6" />
                </div>
                <div class="p-business__text">
                    <h3 class="p-business__name">
                        豊洲市場内にある加工場で加工し即時出荷
                    </h3>
                </div>
            </a>

            <a href="<?php echo home_url('/business/six/'); ?>" class="p-business__item">
                <img src="<?php echo cypress_asset_url('images/top/business_7.webp'); ?>" srcset="<?php echo cypress_asset_url('images/top/business_7@2x.webp'); ?>"
                    alt="" class="p-business__image" />
                <div class="p-business__overlay"></div>
                <div class="p-business__logo">
                    <img src="<?php echo cypress_asset_url('images/top/icon_business_1.svg'); ?>" alt=""
                        class="p-business__logo-icon p-business__logo--6" />
                </div>
                <div class="p-business__text">
                    <h3 class="p-business__name">
                        和食を中心にした日常外食のブランド展開
                    </h3>
                </div>
            </a>
            <a href="<?php echo home_url('/business/seven/'); ?>" class="p-business__item">
                <img src="<?php echo cypress_asset_url('images/top/pixta_84158321.webp'); ?>" srcset="<?php echo cypress_asset_url('images/top/pixta_84158321.webp'); ?>"
                    alt="" class="p-business__image" />
                <div class="p-business__overlay"></div>
                <div class="p-business__logo">
                    <img src="<?php echo cypress_asset_url('images/top/icon_business_1.svg'); ?>" alt=""
                        class="p-business__logo-icon p-business__logo--6" />
                </div>
                <div class="p-business__text">
                    <h3 class="p-business__name">
                        女性が輝き続けられるキャリア支援
                    </h3>
                </div>
            </a>
            <a href="<?php echo home_url('/business/eight/'); ?>" class="p-business__item">
                <img src="<?php echo cypress_asset_url('images/top/pixta_99637125.webp'); ?>" srcset="<?php echo cypress_asset_url('images/top/pixta_99637125.webp'); ?>"
                    alt="" class="p-business__image" />
                <div class="p-business__overlay"></div>
                <div class="p-business__logo">
                    <img src="<?php echo cypress_asset_url('images/top/icon_business_1.svg'); ?>" alt=""
                        class="p-business__logo-icon p-business__logo--6" />
                </div>
                <div class="p-business__text">
                    <h3 class="p-business__name">
                        多様な人材が活躍できる職場環境
                    </h3>
                </div>
            </a>
            <a href="<?php echo home_url('/business/nine/'); ?>" class="p-business__item">
                <img src="<?php echo cypress_asset_url('images/top/pixta_74273168.webp'); ?>" srcset="<?php echo cypress_asset_url('images/top/pixta_74273168.webp'); ?>"
                    alt="" class="p-business__image" />
                <div class="p-business__overlay"></div>
                <div class="p-business__logo">
                    <img src="<?php echo cypress_asset_url('images/top/icon_business_1.svg'); ?>" alt=""
                        class="p-business__logo-icon p-business__logo--6" />
                </div>
                <div class="p-business__text">
                    <h3 class="p-business__name">
                        資格取得を会社が全面的にサポート
                    </h3>
                </div>
            </a>
        </div>
    </section>

    <!-- 商品・サービスセクション（mv_2.html版） -->
    <section class="p-products js-scroll-effect">
        <div class="p-products__inner">
            <div class="p-products__visual">
                <img src="<?php echo cypress_asset_url('images/top/products_slide2.webp'); ?>"
                    srcset="<?php echo cypress_asset_url('images/top/products_slide2@2x.webp'); ?> 2x" alt=""
                    class="p-products__slide-image" />
            </div>

            <header class="c-section-title p-products__title">
                <span class="c-section-title__jpn">商品・サービス</span>
                <h2 class="c-section-title__eng">Brands</h2>
            </header>

            <ul class="p-products__list">
                <li class="p-products__item">
                    <div class="p-products__image">
                        <a href="https://genchan.jp/" target="_blank" rel="noopener noreferrer">
                            <picture>
                                <img src="<?php echo cypress_asset_url('images/top/product_1.webp'); ?>"
                                    srcset="<?php echo cypress_asset_url('images/top/product_1@2x.webp'); ?> 2x" alt="築地食堂源ちゃん"
                                    decoding="async" class="p-products__image-thumbnail" />
                            </picture>
                        </a>
                    </div>
                </li>
                <li class="p-products__item">
                    <div class="p-products__image">
                        <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                            <picture>
                                <source media="(max-width: 767px)" srcset="
                                    <?php echo cypress_asset_url('images/top/product_2@2x.webp'); ?> 1x,
                                    <?php echo cypress_asset_url('images/top/product_2@2x.webp'); ?> 2x
                                " />
                                <img src="<?php echo cypress_asset_url('images/top/product_2@2x.webp'); ?>"
                                    srcset="<?php echo cypress_asset_url('images/top/product_2@2x.webp'); ?> 2x" alt="ABURI百貫" decoding="async"
                                    class="p-products__image-thumbnail" />
                            </picture>
                        </a>
                    </div>
                </li>
                <li class="p-products__item">
                    <div class="p-products__image">
                        <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                            <picture>
                                <img src="<?php echo cypress_asset_url('images/top/product_3@2x.webp'); ?>"
                                    srcset="<?php echo cypress_asset_url('images/top/product_3@2x.webp'); ?> 2x" alt="銀座総菜店" decoding="async"
                                    class="p-products__image-thumbnail" />
                            </picture>
                        </a>
                    </div>
                </li>
                <!-- 他の商品項目... -->
            </ul>


            <div class="p-products__accordion js-accordion-container"
                style="--open-height: 603px; --collapse-height: 0px">
                <ul class="p-products__list p-products__list--collapsed js-accordion-body">
                    <li class="p-products__item">
                        <div class="p-products__image">
                            <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <img src="<?php echo cypress_asset_url('images/top/product_7@2x.webp'); ?>"
                                        srcset="<?php echo cypress_asset_url('images/top/product_7@2x.webp'); ?> 2x" alt="築地とう庵"
                                        decoding="async" class="p-products__image-thumbnail" />
                                </picture>
                            </a>
                        </div>
                    </li>
                    <li class="p-products__item">
                        <div class="p-products__image">
                            <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="
                          <?php echo cypress_asset_url('images/top/product_8@2x.webp'); ?>    1x,
                          <?php echo cypress_asset_url('images/top/product_8@2x.webp'); ?> 2x
                        " />
                                    <img src="<?php echo cypress_asset_url('images/top/product_8@2x.webp'); ?>"
                                        srcset="<?php echo cypress_asset_url('images/top/product_8@2x.webp'); ?> 2x" alt="とんかつとう庵"
                                        decoding="async" class="p-products__image-thumbnail" />
                                </picture>
                            </a>
                        </div>
                    </li>
                    <li class="p-products__item">
                        <div class="p-products__image">
                            <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <img src="<?php echo cypress_asset_url('images/top/product_9.webp'); ?>"
                                        srcset="<?php echo cypress_asset_url('images/top/product_9@2x.webp'); ?> 2x" alt="スタンド源ちゃん"
                                        decoding="async" class="p-products__image-thumbnail" />
                                </picture>
                            </a>
                        </div>
                    </li>
                    <li class="p-products__item">
                        <div class="p-products__image">
                            <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <source media="(max-width: 767px)"
                                        srcset="<?php echo cypress_asset_url('images/top/product_10@2x.webp'); ?>">
                                    <img src="<?php echo cypress_asset_url('images/top/product_10@2x.webp'); ?>" alt="築地の宴源ちゃん"
                                        decoding="async" loading="lazy" class="p-products__image-thumbnail" />
                                </picture>
                            </a>
                        </div>
                    </li>
                    <li class="p-products__item">
                        <div class="p-products__image">
                            <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <source media="(max-width: 767px)"
                                        srcset="<?php echo cypress_asset_url('images/top/product_11@2x.webp'); ?>">
                                    <img src="<?php echo cypress_asset_url('images/top/product_11@2x.webp'); ?>" alt="とし食堂" decoding="async"
                                        loading="lazy" class="p-products__image-thumbnail" />
                                </picture>
                            </a>
                        </div>
                    </li>
                    <li class="p-products__item">
                        <div class="p-products__image">
                            <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <img src="<?php echo cypress_asset_url('images/top/product_13@2x.webp'); ?>"
                                        srcset="<?php echo cypress_asset_url('images/top/product_13@2x.webp'); ?> 2x" alt="ゲンの中華そば"
                                        decoding="async" class="p-products__image-thumbnail" />
                                </picture>
                            </a>
                        </div>
                    </li>
                    <li class="p-products__item">
                        <div class="p-products__image">
                            <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <img src="<?php echo cypress_asset_url('images/top/product_14@2x.webp'); ?>"
                                        srcset="<?php echo cypress_asset_url('images/top/product_14@2x.webp'); ?> 2x" alt="チャールストン"
                                        decoding="async" class="p-products__image-thumbnail" />
                                </picture>
                            </a>
                        </div>
                    </li>
                    <li class="p-products__item">
                        <div class="p-products__image">
                            <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="
                          <?php echo cypress_asset_url('images/top/product_16@2x.webp'); ?>    1x,
                          <?php echo cypress_asset_url('images/top/product_16@2x.webp'); ?> 2x
                        " />
                                    <img src="<?php echo cypress_asset_url('images/top/product_16@2x.webp'); ?>"
                                        srcset="<?php echo cypress_asset_url('images/top/product_16@2x.webp'); ?> 2x" alt="香鶏" decoding="async"
                                        class="p-products__image-thumbnail" />
                                </picture>
                            </a>
                        </div>
                    </li>
                    <li class="p-products__item">
                        <div class="p-products__image">
                            <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <img src="<?php echo cypress_asset_url('images/top/product_17@2.webp'); ?>"
                                        srcset="<?php echo cypress_asset_url('images/top/product_17@2x.webp'); ?> 2x" alt="魚とと"
                                        decoding="async" class="p-products__image-thumbnail" />
                                </picture>
                            </a>
                        </div>
                    </li>
                    <li class="p-products__item">
                        <div class="p-products__image">
                            <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="
                          <?php echo cypress_asset_url('images/top/product_18@2x.webp'); ?>    1x,
                          <?php echo cypress_asset_url('images/top/product_18@2x.webp'); ?> 2x
                        " />
                                    <img src="<?php echo cypress_asset_url('images/top/product_18@2x.webp'); ?>"
                                        srcset="<?php echo cypress_asset_url('images/top/product_18@2x.webp'); ?> 2x" alt="つけめん潤や"
                                        decoding="async" class="p-products__image-thumbnail" />
                                </picture>
                            </a>
                        </div>
                    </li>
                    <li class="p-products__item">
                        <div class="p-products__image">
                            <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="
                          <?php echo cypress_asset_url('images/top/product_19@2x.webp'); ?>    1x,
                          <?php echo cypress_asset_url('images/top/product_19@2x.webp'); ?> 2x
                        " />
                                    <img src="<?php echo cypress_asset_url('images/top/product_19@2x.webp'); ?>"
                                        srcset="<?php echo cypress_asset_url('images/top/product_19@2x.webp'); ?> 2x" alt="よかたい"
                                        decoding="async" class="p-products__image-thumbnail" />
                                </picture>
                            </a>
                        </div>
                    </li>
                    <li class="p-products__item">
                        <div class="p-products__image">
                            <picture>
                                <img src="<?php echo cypress_asset_url('images/top/product_20@2x.webp'); ?>"
                                    srcset="<?php echo cypress_asset_url('images/top/product_20@2x.webp'); ?> 2x" alt="雷電" decoding="async"
                                    class="p-products__image-thumbnail" />
                            </picture>
                        </div>
                    </li>
                    <li class="p-products__item">
                        <div class="p-products__image">
                            <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <img src="<?php echo cypress_asset_url('images/top/product_21@2x.webp'); ?>"
                                        srcset="<?php echo cypress_asset_url('images/top/product_21@2x.webp'); ?> 2x" alt="BAKER'S DINER"
                                        decoding="async" class="p-products__image-thumbnail" />
                                </picture>
                            </a>
                        </div>
                    </li>
                    <li class="p-products__item">
                        <div class="p-products__image">
                            <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="
                          <?php echo cypress_asset_url('images/top/product_22@2x.webp'); ?>    1x,
                          <?php echo cypress_asset_url('images/top/product_22@2x.webp'); ?> 2x
                        " />
                                    <img src="<?php echo cypress_asset_url('images/top/product_22@2x.webp'); ?>"
                                        srcset="<?php echo cypress_asset_url('images/top/product_22@2x.webp'); ?> 2x" alt="MPB"
                                        decoding="async" class="p-products__image-thumbnail" />
                                </picture>
                            </a>
                        </div>
                    </li>
                    <li class="p-products__item">
                        <div class="p-products__image">
                            <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <img src="<?php echo cypress_asset_url("images/top/product_23@2x.webp"); ?>"
                                        srcset="<?php echo cypress_asset_url("images/top/product_23@2x.webp 2x"); ?>" alt="築地すし源"
                                        decoding="async" class="p-products__image-thumbnail" />
                                </picture>
                            </a>
                        </div>
                    </li>
                    <li class="p-products__item">
                        <div class="p-products__image">
                            <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="
                          ./assets/images/top/product_24@2x.webp    1x,
                          ./assets/images/top/product_24@2x.webp 2x
                        " />
                                    <img src="<?php echo cypress_asset_url("images/top/product_24@2x.webp"); ?>"
                                        srcset="<?php echo cypress_asset_url("images/top/product_24@2x.webp 2x"); ?>" alt="串笑門"
                                        decoding="async" class="p-products__image-thumbnail" />
                                </picture>
                            </a>
                        </div>
                    </li>
                    <li class="p-products__item">
                        <div class="p-products__image">
                            <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="
                          ./assets/images/top/product_25@2x.webp    1x,
                          ./assets/images/top/product_25@2x.webp 2x
                        " />
                                    <img src="<?php echo cypress_asset_url("images/top/product_25@2x.webp"); ?>"
                                        srcset="<?php echo cypress_asset_url("images/top/product_25@2x.webp 2x"); ?>" alt="カレー香房"
                                        decoding="async" class="p-products__image-thumbnail" />
                                </picture>
                            </a>
                        </div>
                    </li>
                    <li class="p-products__item">
                        <div class="p-products__image">
                            <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <img src="<?php echo cypress_asset_url("images/top/product_26@2x.webp"); ?>"
                                        srcset="<?php echo cypress_asset_url("images/top/product_26@2x.webp 2x"); ?>" alt="JUICY PAPA"
                                        decoding="async" class="p-products__image-thumbnail" />
                                </picture>
                            </a>
                        </div>
                    </li>
                    <li class="p-products__item">
                        <div class="p-products__image">
                            <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <img src="<?php echo cypress_asset_url("images/top/product_27@2x.webp"); ?>"
                                        srcset="<?php echo cypress_asset_url("images/top/product_27@2x.webp 2x"); ?>" alt="EatiT!"
                                        decoding="async" class="p-products__image-thumbnail" />
                                </picture>
                            </a>
                        </div>
                    </li>
                    <li class="p-products__item">
                        <div class="p-products__image">
                            <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="
                          ./assets/images/top/product_28@2x.webp    1x,
                          ./assets/images/top/product_28@2x.webp 2x
                        " />
                                    <img src="<?php echo cypress_asset_url("images/top/product_28@2x.webp"); ?>"
                                        srcset="<?php echo cypress_asset_url("images/top/product_28@2x.webp 2x"); ?>" alt="フレッシュデリカEatiT!"
                                        decoding="async" class="p-products__image-thumbnail" />
                                </picture>
                            </a>
                        </div>
                    </li>
                    <li class="p-products__item">
                        <div class="p-products__image">
                            <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <img src="<?php echo cypress_asset_url("images/top/product_29@2x.webp"); ?>"
                                        srcset="<?php echo cypress_asset_url("images/top/product_29@2x.webp 2x"); ?>" alt="Food Square"
                                        decoding="async" class="p-products__image-thumbnail" />
                                </picture>
                            </a>
                        </div>
                    </li>
                    <li class="p-products__item">
                        <div class="p-products__image">
                            <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="
                          ./assets/images/top/product_30@2x.webp    1x,
                          ./assets/images/top/product_30@2x.webp 2x
                        " />
                                    <img src="<?php echo cypress_asset_url("images/top/product_30@2x.webp"); ?>"
                                        srcset="<?php echo cypress_asset_url("images/top/product_30@2x.webp 2x"); ?>" alt="源氏の宴"
                                        decoding="async" class="p-products__image-thumbnail" />
                                </picture>
                            </a>
                        </div>
                    </li>
                    <li class="p-products__item">
                        <div class="p-products__image">
                            <a href="https://cyp-jp.com/" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="
                          ./assets/images/top/product_31@2x.webp    1x,
                          ./assets/images/top/product_31@2x.webp 2x
                        " />
                                    <img src="<?php echo cypress_asset_url("images/top/product_31@2x.webp"); ?>"
                                        srcset="<?php echo cypress_asset_url("images/top/product_31@2x.webp 2x"); ?>" alt="マグロ解体ショー"
                                        decoding="async" class="p-products__image-thumbnail" />
                                </picture>
                            </a>
                        </div>
                    </li>
                </ul>

                <div class="p-products__toggle js-accordion-menu">
                    <button class="p-products__toggle-button">
                        <span class="p-products__toggle-label">もっとみる</span>
                        <span class="p-products__toggle-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- データセクション -->
    <section class="p-data js-scroll-effect">
        <div class="p-data__inner">
            <header class="p-data__title c-section-title">
                <span class="c-section-title__jpn">高水準の成長性・収益性・効率性</span>
                <h2 class="c-section-title__eng">Data</h2>
            </header>
            <ul class="p-data__list">
                <li class="p-data__item js-scroll-effect">
                    <h3 class="p-data__item-name p-data__item-name--data1">
                        売上成長率比較<sup>※1</sup>
                    </h3>
                    <figure class="p-data__graph">
                        <dotlottie-player
                            src="https://lottie.host/bd454840-a2e3-4a02-a359-efef21f5071c/e7lx7n8vyB.lottie"
                            background="transparent" speed="0.5"
                            style="width: 314px; height: 330px"></dotlottie-player>
                    </figure>
                    <div class="p-data__item-column">
                        <p class="p-data__item-label">サイプレス</p>
                        <p class="p-data__item-num p-data__item-num--3">
                            <strong class="p-data__item-count js-countup" data-num="37.2">0</strong>%
                        </p>
                    </div>
                    <span class="p-data__item-annotation">サイプレス :2024年 8月期、大戸屋 HD・松屋フーズ HD:2024年 3月期、ハイデイ日高・吉野家
                        HD:2024年 2月期、銚子丸
                        :2024年 5月期 を終点とした、 3年間の年平均成長率</span>
                </li>
                <li class="p-data__item js-scroll-effect">
                    <h3 class="p-data__item-name p-data__item-name--data2">
                        EBITDAマージン比較<sup>※2</sup>
                    </h3>
                    <figure class="p-data__graph">
                        <dotlottie-player
                            src="https://lottie.host/b734058d-e29a-4ea7-ba82-be05eb945a18/fsT3YI6MoW.lottie"
                            background="transparent" speed="0.5"
                            style="width: 314px; height: 330px"></dotlottie-player>
                    </figure>
                    <div class="p-data__item-column">
                        <p class="p-data__item-label">サイプレス</p>
                        <p class="p-data__item-num p-data__item-num--3">
                            <strong class="p-data__item-count js-countup" data-num="9.1">0</strong>%
                        </p>
                    </div>
                    <span class="p-data__item-annotation">サイプレス :2024年 8月期、大戸屋 HD・松屋フーズ HD:2024年 3月期、ハイデイ日高・吉野家
                        HD:2024年 2月期、銚子丸
                        :2024年 5月期</span>
                </li>
                <li class="p-data__item js-scroll-effect">
                    <h3 class="p-data__item-name p-data__item-name--data3">
                        ROIC比較<sup>※3</sup>
                    </h3>
                    <figure class="p-data__graph">
                        <dotlottie-player
                            src="https://lottie.host/bd27430b-89e2-4216-8cf9-cd0cbebaab13/ZDveHJbxXj.lottie"
                            background="transparent" speed="0.5"
                            style="width: 314px; height: 330px"></dotlottie-player>
                    </figure>
                    <div class="p-data__item-column">
                        <p class="p-data__item-label">サイプレス</p>
                        <p class="p-data__item-num p-data__item-num--3">
                            <strong class="p-data__item-count js-countup" data-num="25.3">0</strong>%
                        </p>
                    </div>
                    <span
                        class="p-data__item-annotation">ROIC=税引後営業利益/投下資本、投下資本=純資産+有利子負債残高-のれんの期首期末平均。サイプレスののれんは丸の内キャピタル投資に伴う組織再編により計上されたものであるため全額控除
                        5,365百万円(2024年 8月期の期首期末平均 )が控除対象。比較企業も同様にのれんを全額控除、吉野家HDの 1,177百万円 (2024年 2月期の期首期末平均
                        )が控除対象</span>
                </li>
            </ul>
        </div>
    </section>

    <!-- ニュースセクション -->
    <section class="p-news">
        <div class="p-news__inner">
            <header class="p-news__title c-section-title">
                <span class="c-section-title__jpn">新着情報</span>
                <h2 class="c-section-title__eng">News</h2>
            </header>
            <div class="p-news__grid">
                <article class="p-news__item">
                    <div class="p-news__thumbnail">
                        <img src="<?php echo cypress_asset_url('images/top/news_thumbnail_2.webp'); ?>" alt=""
                            class="p-news__thumbnail-image" />
                    </div>
                    <p class="p-news__meta">
                        <time class="p-news__date" datetime="20250307">2025.03.07</time>
                        <span class="p-news__tag">お知らせ</span>
                    </p>
                    <h3 class="p-news__headline">
                        岩手県初出店！銀座惣菜店 イオン盛岡南店4/23(水)OPEN！
                    </h3>
                    <a href="https://cyp-jp.com/news/post-7493/" target="_blank" class="p-news__link">
                        <svg class="p-news__link-arrow" width="19" height="14">
                            <use href="#arrow"></use>
                        </svg>
                    </a>
                </article>
            </div>
            <a href="<?php echo home_url('/news/'); ?>" class="p-news__more c-view-more">View all</a>
        </div>
    </section>

    <!-- IRニュースセクション -->
    <section class="p-ir">
        <div class="p-ir__inner">
            <header class="p-ir__title c-section-title">
                <span class="c-section-title__jpn">IRニュース</span>
                <h2 class="c-section-title__eng">IR News</h2>
            </header>
            <div class="p-ir__grid">
                <!-- IRニュース項目があればここに -->
            </div>
            <a href="<?php echo home_url('/ir/'); ?>" class="p-ir__more c-view-more">View all</a>
        </div>
    </section>
</div>

<!-- モーダル要素 -->
<div id="imageModal" class="modal">
    <button class="modal-close" aria-label="閉じる">&times;</button>
    <div class="modal-content">
        <img src="" alt="">
    </div>
</div>

<?php get_footer(); ?>