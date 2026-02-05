<?php
/**
 * インフォメーションページテンプレート
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
    <li class="p-breadcrumb__item c-breadcrumb__item">Infomation</li>
  </ul>
  <header class="p-page-header" style="background: #b7aa9d;">
    <div class="p-page-header__inner l-inner">
      <h1 class="p-page-header__title" style="background: #000000; color: #ffffff; font-size: 34px;">Info<span
          class="p-page-header__sub" style="color: #ffffff; font-size: 12px;">インフォメーション</span></h1>
      <p class="p-page-header__desc" style="color: ;">モルレーヴについて</p>
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
      <li class="p-breadcrumb__item c-breadcrumb__item">Infomation</li>
    </ul>
    <div class="l-contents">
      <div class="l-primary">
        <article class="p-entry">
          <header>
          </header>
          <div class="p-entry__body">
            <div id="tcd-pb-wrap">
              <div class="tcd-pb-row row2" id="info">
                <div class="tcd-pb-row-inner clearfix">
                  <div class="tcd-pb-col col1">
                    <div class="tcd-pb-widget widget1 pb-widget-catchcopy">
                      <h4 class="pb_catchcopy pb_font_family_type2">自分らしく、美しく。<br> あなたらしいスタイルを提案します。</h4>
                    </div>
                    <div class="tcd-pb-widget widget2 pb-widget-editor">
                      <p>日にちが経過してもバランスよく減っていくようエクステを装着していきますのでモチが良い＆綺麗＆傷みにくいのが当店のエクステの特徴です。<BR>また
                        カールも「J、B、JC、C、CC、D、L、LC、LD」と豊富に揃えておりますので自まつ毛風に見せるスタイルからしっかりとボリュームを出していくスタイルまでご希望に応じて選んで頂けます。<BR>自まつ毛の生え方や仕上がりのイメージによってアイデザイナーがご提案させていただきます。<BR>長さは自まつ毛の長さもアイラッシュの持ちに関係してきますのでデザインはもちろんですが自まつ毛への負担も考慮に入れてご提案させていただいております。<BR><BR><img
                          src="<?php echo esc_url($theme_uri); ?>/info/01.jpg?0812" /><BR>技術力はもちろん、カウンセリングにも力をいれております。<BR>オーダーメイドデザインでは、熟練したベテランスタッフがしっかりとしたカウンセリングで理想のお目元に近付けていきます。<BR>「最高の技術」と「最高のおもてなし」でお客様がまた行きたくなるサロンを目指して営業しております。<BR>エクステは最高級の商材を使用しておりますので「美しい艶」で目元を明るくし自然な付け心地で「何か付いている。。。」といった違和感を感じさせません。<BR><BR>取れてしまった場合の5日間のお直しは、無料でさせていただいております
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tcd-pb-row row3">
                <div class="tcd-pb-row-inner clearfix">
                  <div class="tcd-pb-col col1">
                    <div class="tcd-pb-widget widget1 pb-widget-image"><img width="365" height="*"
                        src="<?php echo esc_url($theme_uri); ?>/photo/001.jpg" />
                    </div>
                  </div>
                  <div class="tcd-pb-col col2">
                    <div class="tcd-pb-widget widget1 pb-widget-editor">
                      <p><img src="https://eyelash.jp/logo_01.png"><BR><span class="b">受付</span><br />電話：050-5305-3300　(
                        9:00 〜 22:00 )　<br />メール：info@eyelash.jp<br /><span
                          class="b">営業時間</span><br />月曜日～土曜日　　11:00～22:00<br />日曜日・祝日　　　10:00～21:00<br /></p>
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