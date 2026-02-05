<?php
/**
 * 最高級セーブルデザインテンプレート
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
      <li class="p-breadcrumb__item c-breadcrumb__item">最高級セーブルついて</li>
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
                      <h3 class="pb_headline pb_font_family_type3">Luxury Sable LASH<span>最高級セーブルラッシュについて</span></h3>
                      <p class="mb0"><img src="<?php echo esc_url($theme_uri); ?>/design/page-seble01.jpg"></p>
                    </div>
                    <div class="tcd-pb-widget widget2 pb-widget-editor">
                      <h4>世界で初めてまつげエクステンションシートの特許を取得、まつげエクステを知り尽くしているからこそ誕生できた、こだわりの最高級品質のものを使用しております</h4>
                      <p> 世界で初めてまつげエクステンションシートの特許を取得。<br>まつげエクステを知り尽くしているからこそ誕生した、こだわりの品質が実現しました。
                      <h3 class="pb_headline pb_font_family_type3">Commitment<span>セーブルのこだわり</span></h3>
                      <BR><BR>
                      <table width="100%">
                        <tbody>
                          <tr>
                            <th scope="col"><strong>商品へのこだわり</strong></th>
                          </tr>
                          <tr>
                            <td>当店で使用しているラッシュは、ナチュラル（自然）な仕上がりをとことん追求。</td>
                          </tr>
                          <tr>
                            <td>当店で使用しているラッシュは、柔らかくしなやかな質感・軽さ・艶-弾力性・形状記憶力・均一性を重視。</td>
                          </tr>
                          <tr>
                            <td>当店で使用しているラッシュは、毛の太さに誤差が少ないため、美しく均一なカールが実現でき、装着後のカールの持続力に優れています。</td>
                          </tr>
                          <tr>
                            <td>当店で使用しているラッシュは、弊社独自開発のカール検査機を使い、バラつきを最小限におさえることに成功しました。</td>
                          </tr>
                        </tbody>
                      </table><BR><BR>
                      <table width="100%">
                        <tbody>
                          <tr>
                            <th scope="col"><strong>品質へのこだわり</strong></th>
                          </tr>
                          <tr>
                            <td>当店で使用のラッシュを製造している工場内は完全空調設備を導入しています。</td>
                          </tr>
                          <tr>
                            <td>当店で使用しているラッシュは、製造工程において年間を通して、一定基準の湿度と温度を維持。<br> 製品にとって一番良い環境をつくることで、品質の安定と向上を図っています。
                            </td>
                          </tr>
                          <tr>
                            <td>当店で使用しているラッシュは、製造の各工程において、6回にわたる厳しい品質チェックを実施しています。</td>
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