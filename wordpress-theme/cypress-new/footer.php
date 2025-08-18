  <!-- CTA セクション -->
  <div class="cta">
      <div class="cta__inner">
          <div>
              <img src="<?php echo cypress_asset_url('images/top/cta.svg'); ?>" alt="" />
          </div>
          <div>
              <a href="<?php echo home_url('/contact/'); ?>">
                  <img src="<?php echo cypress_asset_url('images/top/cta_button.svg'); ?>" alt="" style="align-self: end;max-width:100%;" />
              </a>
          </div>
      </div>
  </div>

  <!-- ページトップボタン -->
  <div class="c-pagetop">
      <a href="#pagetop" class="c-pagetop__link js-anchor-link">
          <svg class="c-pagetop__link-svg" width="19" height="14">
              <use href="#arrow"></use>
          </svg>
      </a>
      <!-- SVGアイコン定義 -->
      <svg>
          <symbol id="arrow" viewBox="0 0 19 14">
              <g transform="translate(13606 13692.797)">
                  <path d="M-13587.6-13748.514h-18.527v-.987h18.527Z" transform="translate(0.129 63.396)"></path>
                  <path d="M-13594.036-13741.428l-.7-.7,6.486-6.486-6.486-6.486.7-.7,7.185,7.185Z"
                      transform="translate(-0.149 63.001)"></path>
              </g>
          </symbol>
          <symbol id="icon-pdf" viewBox="0 0 15 20.004">
              <path
                  d="M14.449,3.728,11.172.451A1.875,1.875,0,0,0,9.848-.1H1.875A1.881,1.881,0,0,0,0,1.779v16.25A1.875,1.875,0,0,0,1.875,19.9h11.25A1.875,1.875,0,0,0,15,18.029V5.056a1.884,1.884,0,0,0-.551-1.328Zm-.883.887a.615.615,0,0,1,.164.289H10V1.173a.615.615,0,0,1,.289.164Zm-.441,14.039H1.875a.627.627,0,0,1-.625-.625V1.779a.627.627,0,0,1,.625-.625H8.556V3Z"
                  transform="translate(-3 -3)"></path>
          </symbol>
      </svg>
  </div>

  <!-- フッター -->
  <footer class="l-footer">
      <div class="l-footer__inner">
          <h2 class="l-footer__logo">株式会社 サイプレス</h2>
          <ul class="l-footer-menu">
              <li class="l-footer-menu__item l-footer-menu__item--company">
                  <a href="<?php echo home_url('/company/'); ?>" class="l-footer-menu__link">企業情報</a>
              </li>
              <li class="l-footer-menu__item l-footer-menu__item--fc">
                  <a href="<?php echo home_url('/sustainability/'); ?>" class="l-footer-menu__link">サステナビリティ</a>
              </li>
              <li class="l-footer-menu__item l-footer-menu__item--rowspan l-footer-menu__item--parent js-accordion-menu">
                  <a href="<?php echo home_url('/ir/'); ?>" class="l-footer-menu__link">IR情報</a>
                  <ul class="l-footer-menu__nest js-accordion-body">
                      <li class="l-footer-menu__nest-item">
                          <a href="<?php echo home_url('/ir/'); ?>" class="l-footer-menu__nest-link">IRニュース</a>
                      </li>
                      <li class="l-footer-menu__nest-item">
                          <a href="<?php echo home_url('/ir/governance/'); ?>" class="l-footer-menu__nest-link">コーポレートガバナンス</a>
                      </li>
                      <li class="l-footer-menu__nest-item">
                          <a href="<?php echo home_url('/ir/material/'); ?>" class="l-footer-menu__nest-link">決算短信</a>
                      </li>
                      <li class="l-footer-menu__nest-item">
                          <a href="<?php echo home_url('/ir/material2/'); ?>" class="l-footer-menu__nest-link">有価証券報告書</a>
                      </li>
                      <li class="l-footer-menu__nest-item">
                          <a href="<?php echo home_url('/ir/material3/'); ?>" class="l-footer-menu__nest-link">年次報告書</a>
                      </li>
                      <li class="l-footer-menu__nest-item">
                          <a href="<?php echo home_url('/ir/monthly/'); ?>" class="l-footer-menu__nest-link">月次売上</a>
                      </li>
                      <li class="l-footer-menu__nest-item">
                          <a href="<?php echo home_url('/ir/highlight/'); ?>" class="l-footer-menu__nest-link">業績ハイライト</a>
                      </li>
                      <li class="l-footer-menu__nest-item">
                          <a href="<?php echo home_url('/ir/highlight2/'); ?>" class="l-footer-menu__nest-link">財政状況</a>
                      </li>
                      <li class="l-footer-menu__nest-item">
                          <a href="<?php echo home_url('/ir/highlight3/'); ?>" class="l-footer-menu__nest-link">キャッシュフローの状況</a>
                      </li>
                      <li class="l-footer-menu__nest-item">
                          <a href="<?php echo home_url('/ir/shareholder/'); ?>" class="l-footer-menu__nest-link">株主優待情報</a>
                      </li>
                      <li class="l-footer-menu__nest-item">
                          <a href="<?php echo cypress_asset_url('pdf/20240625kabunushi.pdf'); ?>" target="_blank" class="l-footer-menu__nest-link">
                              株主総会のご報告
                              <span class="l-footer-menu__nest-icon">
                                  <svg class="l-footer-menu__nest-svg" width="15" height="20">
                                      <use href="#icon-pdf"></use>
                                  </svg>
                              </span>
                          </a>
                      </li>
                      <li class="l-footer-menu__nest-item">
                          <a href="<?php echo home_url('/ir/disclosure/'); ?>" class="l-footer-menu__nest-link">ディスクロージャーポリシー</a>
                      </li>
                      <li class="l-footer-menu__nest-item">
                          <a href="<?php echo home_url('/ir/disclaimer/'); ?>" class="l-footer-menu__nest-link">免責事項</a>
                      </li>
                  </ul>
              </li>
              <li class="l-footer-menu__item">
                  <a href="<?php echo home_url('/news/'); ?>" class="l-footer-menu__link">新着情報</a>
              </li>
              <li class="l-footer-menu__item">
                  <a href="<?php echo home_url('/contact/'); ?>" class="l-footer-menu__link">お問い合わせ</a>
              </li>
          </ul>
          <div class="l-footer__bottom">
              <div class="l-footer__link">
                  <a href="<?php echo home_url('/privacy/'); ?>" class="l-footer__link-item">個人情報の取扱いについて</a>
                  <a href="<?php echo home_url('/socialmedia/'); ?>" class="l-footer__link-item">ソーシャルメディアポリシー</a>
                  <a href="<?php echo home_url('/sitepolicy/'); ?>" class="l-footer__link-item">サイトポリシー</a>
              </div>
              <small class="l-footer__copyright">© CYPRESS HOLDINGS</small>
          </div>
      </div>
  </footer>

  <!-- スプラッシュ画面 -->
  <div class="c-splash" id="js-splash">
      <img src="<?php echo cypress_asset_url('images/common/splash_logo.svg'); ?>" alt="" decoding="async" class="c-splash__logo"
          id="js-splash-logo">
      <div class="c-splash__effect" id="js-splash-effect"></div>
      <!-- 画像モーダル -->
      <div id="imageModal" class="modal">
          <button class="modal-close" aria-label="閉じる">&times;</button>
          <div class="modal-content">
              <img src="" alt="">
          </div>
      </div>
  </div>

  <?php wp_footer(); ?>
  </body>

  </html>