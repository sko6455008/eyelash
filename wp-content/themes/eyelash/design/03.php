<?php
/**
 * フラットラッシュデザインテンプレート
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
      <li class="p-breadcrumb__item c-breadcrumb__item">フラットラッシュについて</li>
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
                      <h3 class="pb_headline pb_font_family_type3">FLAT LASH-series<span>フラットラッシュについて</span></h3>
                      <p class="mb0"><img src="<?php echo esc_url($theme_uri); ?>/design/page-flatrash01.jpg"></p>
                    </div>
                    <div class="tcd-pb-widget widget2 pb-widget-editor">
                      <h4>従来のエクステに比べ、圧倒的な軽さと持続力を実現</h4>
                      <p>
                        最近のマツエク業界でブームとなっている「フラットラッシュ」は、「とにかく付け心地が軽い！」「仕上がりがナチュラル！」と、SNSでも見かけることの多い話題のアイテム。<BR>「フラットラッシュ」は…<BR>・仕上がりも付け心地も、ふわふわでとにかく軽い<BR>・自まつ毛への負担が少ないので、まつ毛が弱い方でも安心<BR>・フラットな形状で接着面積が広く、密着度が増すためモチがいい<BR>・自まつ毛にフィットするのでしっかり装着でき、安定感があって倒れにくい<BR>とメリットに溢れています。<BR><BR>
                      <h3 class="pb_headline pb_font_family_type3">choice point<span>選ばれるポイント</span></h3>
                      <p class="mb0"><img src="<?php echo esc_url($theme_uri); ?>/design/page-flatrash02.jpg"><BR><BR>
                      </p>
                      <h3 class="pb_headline pb_font_family_type3">Recommended<span>こんな方へおすすめ</span></h3>
                      <table width="100%">
                        <tbody>
                          <tr>
                            <td>安定感とモチの両方が欲しい</td>
                          </tr>
                          <tr>
                            <td>自まつげにできるだけ負担をかけたくない</td>
                          </tr>
                          <tr>
                            <td>これまでのマツエクよりも軽い付け心地を求めている</td>
                          </tr>
                          <tr>
                            <td>自まつげをリフトアップしたい</td>
                          </tr>
                          <tr>
                            <td>ナチュラルやシンプルより、目元の印象が際立つデザインが好き</td>
                          </tr>
                        </tbody>
                      </table>
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