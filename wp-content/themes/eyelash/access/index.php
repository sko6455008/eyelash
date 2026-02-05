<?php
/**
 * アクセスページテンプレート
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
    <li class="p-breadcrumb__item c-breadcrumb__item">Access</li>
  </ul>
  <header class="p-page-header" style="background: #b7aa9d;">
    <div class="p-page-header__inner l-inner">
      <h1 class="p-page-header__title" style="background: #000000; color: #ffffff; font-size: 34px;">Access<span
          class="p-page-header__sub" style="color: #ffffff; font-size: 12px;">アクセス</span></h1>
      <p class="p-page-header__desc" style="color: ;">モルレーヴへのご来店を心よりお待ちしております。是非、ご予約をいれてください。</p>
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
      <li class="p-breadcrumb__item c-breadcrumb__item">Access</li>
    </ul>
    <div class="l-contents">
      <div class="l-primary">
        <article class="p-entry">
          <header>
          </header>
          <div class="p-entry__body">
            <div id="tcd-pb-wrap">
              <div class="tcd-pb-row row1">
                <div class="tcd-pb-row-inner clearfix">
                  <div class="tcd-pb-col col1">
                    <div class="tcd-pb-widget widget1 pb-widget-headline">
                      <h3 class="pb_headline pb_font_family_type2">モルレーヴ (池袋)</h3>
                    </div>
                    <div class="tcd-pb-widget widget2 pb-widget-googlemap">
                      <div class="pb_googlemap clearfix">
                        <!--	<div id="js-googlemap-2" class="pb_googlemap_embed"></div> -->
                        <div style="overflow:hidden; height:400px; width:100%;">
                          <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1513.2185557587864!2d139.70899975385862!3d35.732044131702786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d5ef5ffc2e9%3A0x66ada9c9b0fc1a86!2z77yt77yv77ys77yy77yl77y277yl!5e0!3m2!1sja!2sjp!4v1576624657695!5m2!1sja!2sjp"
                            width="100%" height="800" style="border:none; margin-top:-200px;"></iframe>
                        </div>
                        <div class="pb_googlemap_footer">
                          <div class="pb_googlemap_address">
                            <p>〒170-0014東京都豊島区池袋2-40-13VORTⅠ池袋ビル6F<br />TEL: 03-4405-7222　( 9:00 〜 22:00 )　</p>
                          </div>
                          <a href="https://www.google.com/maps/place/%EF%BC%AD%EF%BC%AF%EF%BC%AC%EF%BC%B2%EF%BC%A5%EF%BC%B6%EF%BC%A5/@35.7333319,139.7083997,19z/data=!3m1!4b1!4m5!3m4!1s0x60188d5ef5ffc2e9:0x66ada9c9b0fc1a86!8m2!3d35.7333319!4d139.7089482"
                            target="_blank" class="pb_googlemap_footer_button">大きな地図で見る</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tcd-pb-row row2">
                <div class="tcd-pb-row-inner clearfix">
                  <div class="tcd-pb-col col1">
                    <div class="tcd-pb-widget widget1 pb-widget-catchcopy">
                      <h4 class="pb_catchcopy pb_font_family_type2">自分らしく、美しく。あなたらしいスタイルを提案します。</h4>
                    </div>
                    <div class="tcd-pb-widget widget2 pb-widget-editor">
                      <p>
                        モルレーヴでは創業より、心と心の通い合いを大切にして、お客様のアイビューティーが叶えられるよう日々努力を重ねてまいりました。アイサロンが苦手なお客様におかれましても、安心、リラックスして心地よく過ごしていただける、笑顔の絶えない明るいサロンを目指しています。
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tcd-pb-row row3">
                <div class="tcd-pb-row-inner clearfix">
                  <div class="tcd-pb-col col1">
                    <div class="tcd-pb-widget widget1 pb-widget-image">
                      <img width="365" height="*" src="<?php echo esc_url($theme_uri); ?>/photo/001.jpg" />
                    </div>
                  </div>
                  <div class="tcd-pb-col col2">
                    <div class="tcd-pb-widget widget1 pb-widget-editor">
                      <p> <img src="https://eyelash.jp/logo_01.png"><BR>
                        <span class="b">受付</span><br />
                        電話：050-5305-3300　( 9:00 〜 22:00 )　<br />
                        メール：info@eyelash.jp<br />
                        <span class="b">営業時間</span><br />
                        月曜日～土曜日　　11:00～22:00<br />
                        日曜日・祝日　　　10:00～21:00<br />
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