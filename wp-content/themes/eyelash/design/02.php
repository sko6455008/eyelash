<?php
/**
 * ボリュームラッシュデザインテンプレート
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
      <li class="p-breadcrumb__item c-breadcrumb__item">ボリュームラッシュについて</li>
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
                      <h3 class="pb_headline pb_font_family_type3">VOLUME LASH<span>ボリュームラッシュについて</span></h3>
                      <p class="mb0">
                        <img src="<?php echo esc_url($theme_uri); ?>/design/page-vol01.jpg">
                      </p>
                    </div>
                    <div class="tcd-pb-widget widget2 pb-widget-editor">
                      <h4>3Dボリュームラッシュでふわふわまつ毛に 毛量が気になる方も、自然にボリュームアップ</h4>
                      <p> ボリュームラッシュであれば自まつ毛の本数×2以上のエクステを装着できることから、ボリュームへの悩みをダイレクトに解決。<br>
                        <BR>
                        <img src="<?php echo esc_url($theme_uri); ?>/design/page-vol02.jpg">
                        <br><br>
                        2016年からどんどん人気に火がついている「ボリュームラッシュ」は、束タイプのエクステのこと。「ボリュームラッシュ」以外にも、3Dレイヤーや3Dラッシュ、ロシアンボリュームラッシュなどとも呼ばれる。<BR>ボリュームラッシュは2〜6本ほどの極細のマツエクを扇状に広げた束にし、1本の自まつ毛に装着する技術が採用されています。<BR>従来束タイプのエクステは1本のエクステを比べると重さがある分取れやすかったものが、1本の太さが0.05〜0.07mmと超極細であるボリュームラッシュはその悩みが解決されているのです
                      </p>
                      <h3 class="pb_headline pb_font_family_type3">VOLUME LASH style<span>ボリュームラッシュシリーズの種類</span></h3>
                      <p><br><img src="<?php echo esc_url($theme_uri); ?>/design/page-vol03.jpg"><BR><BR></p>
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