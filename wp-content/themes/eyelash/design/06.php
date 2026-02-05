<?php
/**
 * アイブロウデザインテンプレート
 *
 * @package Eyelash
 */

get_header();
$theme_uri = get_template_directory_uri();
?>

<main class="l-main">
  <ul class="p-breadcrumb c-breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
    <li class="p-breadcrumb__item c-breadcrumb__item c-breadcrumb__item--home" itemprop="itemListElement" itemscope=""
      itemtype="https://schema.org/ListItem">
      <a href="<?php echo esc_url(home_url('/')); ?>" itemscope="" itemtype="https://schema.org/Thing" itemprop="item">
        <span itemprop="name">HOME</span>
      </a>
      <meta itemprop="position" content="1">
    </li>
    <li class="p-breadcrumb__item c-breadcrumb__item">Design</li>
  </ul>
  <header class="p-page-header" style="background: #b7aa9d;">
    <div class="p-page-header__inner l-inner">
      <h1 class="p-page-header__title" style="background: #111111; color: #ffffff; font-size: 32px;">Design<span
          class="p-page-header__sub" style="color: #ffffff; font-size: 12px;">デザイン</span></h1>
      <p class="p-page-header__desc" style="color: #ffffff;">当店が誇るスタイリングをチェックして、あなた後好みのデザインを選んでください。</p>
    </div>
  </header>
  <div class="l-main__inner l-inner">
    <ul class="p-breadcrumb c-breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
      <li class="p-breadcrumb__item c-breadcrumb__item c-breadcrumb__item--home" itemprop="itemListElement" itemscope=""
        itemtype="https://schema.org/ListItem">
        <a href="<?php echo esc_url(home_url('/')); ?>" itemscope="" itemtype="https://schema.org/Thing"
          itemprop="item">
          <span itemprop="name">HOME</span>
        </a>
        <meta itemprop="position" content="1">
      </li>
      <li class="p-breadcrumb__item c-breadcrumb__item">アイブロウについて</li>
    </ul>
    <div class="l-contents">
      <div class="l-primary">
        <article class="p-entry">
          <div class="p-entry__body">
            <div id="tcd-pb-wrap">
              <div class="tcd-pb-row row3">
                <div class="tcd-pb-row-inner clearfix">
                  <div class="tcd-pb-col col1">
                    <div class="tcd-pb-widget widget1 pb-widget-editor">
                      <h3 class="pb_headline pb_font_family_type3">Eyebrow<span>アイブロウについて</span></h3>
                      <p class="mb0">
                        <img src="<?php echo esc_url($theme_uri); ?>/design/page-eyebrow01.jpg">
                      </p>
                    </div>
                    <div class="tcd-pb-widget widget2 pb-widget-editor">
                      <h4><br><BR>眉は顔のバランスをとり、印象をより良くするための重要なポイントです。眉をどのようにデザインするかによって、周囲に与える印象は大きく変わります。</h4>
                      <p>
                        顔の印象を左右する眉、・自分にどんな形の眉が似合うのかわからない<BR>・左右が同じ形に描けない！<BR>・毛が薄くて描くのが難しい！<BR>・毛が多くてどこを切ったらいいのかわからない…<BR>こんな悩みをおもちの方にお客様の筋肉と骨格を見て似合う眉を提案します。<BR>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tcd-pb-row row2">
                <div class="tcd-pb-row-inner clearfix">
                  <div class="tcd-pb-col col1">
                    <div class="tcd-pb-widget widget1 pb-widget-editor">
                      <h3 class="pb_headline pb_font_family_type3">Eyebrow<span>アイブロウスタイリング</span></h3>
                      <p class="mb0"><img src="<?php echo esc_url($theme_uri); ?>/menu/05.jpg" /></p>
                    </div>
                    <div class="tcd-pb-widget widget2 pb-widget-editor">
                      <p>「ノーメイクでも美しい」を実感!美眉<em>スタイリング</em>。描かなくてもいいような自眉をいかした似合うカタチの提案や、描く場合のコツなどのアドバイスも</p>
                    </div>
                    <div class="tcd-pb-widget widget3 pb-widget-pricemenu">
                      <div class="pb-pricemenu">
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">初回【美眉】アイブロウスタイリング</dt>
                          <dd class="pb-pricemenu__list-desc">お客様雰囲気、髪型、お顔立ちの筋肉と骨格を見て似合う眉を提案します。</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 3,980</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">リピーター【美眉】アイブロウスタイリン</dt>
                          <dd class="pb-pricemenu__list-desc">お客様雰囲気、髪型、お顔立ちの筋肉と骨格を見て似合う眉を提案します。</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 4,480</dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
      </div>
      <!--  right -->
      <?php get_sidebar(); ?>
      <!--  End of right -->
    </div>
  </div>
</main>

<?php get_footer(); ?>