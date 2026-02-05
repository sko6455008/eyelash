<?php
/**
 * Lシリーズデザインテンプレート
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
      <li class="p-breadcrumb__item c-breadcrumb__item">Lシリーズについて</li>
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
                      <h3 class="pb_headline pb_font_family_type3">L curl-series<span>Lシリーズについて</span></h3>
                    </div>
                    <div class="tcd-pb-widget widget2 pb-widget-editor">
                      <p>
                        ビューラーで立ち上げた時のように、まつ毛の存在感が出てパッチリとしたお目元を演出できるカール。<BR>根元がまっすぐなので、グルーと地まつ毛の接着面積が増え、まぶたの重みにも耐えることができるので、キレイなカールを維持することができます。<BR>他のカールと比較すると、接着面にあたる根元のストレート部分は約１mm。Lシリーズは約３倍の３mmになります!!
                        よって接着力UP。まぶたの厚みに押しつぶされないというメリットがあります。<BR>
                      <h3 class="pb_headline pb_font_family_type3">L curl-series style<span>Lシリーズの種類</span></h3>
                      <p class="mb0"><img src="<?php echo esc_url($theme_uri); ?>/design/page-lseries01.png"><BR><BR>
                      </p>
                      <h3 class="pb_headline pb_font_family_type3">Recommended<span>こんな方へおすすめ</span></h3>
                      <p class="mb0"><img src="<?php echo esc_url($theme_uri); ?>/design/page-lseries02.jpg"> <img
                          src="<?php echo esc_url($theme_uri); ?>/design/page-lseries03.jpg"> <img
                          src="<?php echo esc_url($theme_uri); ?>/design/page-lseries04.jpg"></p>
                      </p>
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