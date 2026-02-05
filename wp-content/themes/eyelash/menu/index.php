<?php
/**
 * メニューページテンプレート
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
    <li class="p-breadcrumb__item c-breadcrumb__item">Menu</li>
  </ul>
  <header class="p-page-header" style="background: #b7aa9d;">
    <div class="p-page-header__inner l-inner">
      <h1 class="p-page-header__title" style="background: #000000; color: #ffffff; font-size: 34px;">Menu<span
          class="p-page-header__sub" style="color: #ffffff; font-size: 12px;">メニュー</span></h1>
      <p class="p-page-header__desc" style="color: ;">自分らしく、美しく。あなたらしいスタイルを提案します。</p>
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
      <li class="p-breadcrumb__item c-breadcrumb__item">Menu</li>
    </ul>
    <div class="l-contents">
      <div class="l-primary">
        <article class="p-entry">
          <div class="p-entry__body">
            <div id="tcd-pb-wrap">
              <div class="tcd-pb-row row1">
                <div class="tcd-pb-row-inner clearfix">
                  <div class="tcd-pb-col col1">
                    <div class="tcd-pb-widget widget1 pb-widget-editor">
                      <h3 class="pb_headline pb_font_family_type3">Premier Sable<span>最高級プレミアセーブル （カラーも同額)</span></h3>
                      <p class="mb0"><img src="<?php echo esc_url($theme_uri); ?>/menu/02.jpg" /></p>
                    </div>
                    <div class="tcd-pb-widget widget2 pb-widget-editor">
                      <p>まるで地まつげのように軽いプレミアムセーブル。柔らかくて負担が最小限、自然なボリュームのセーブルです。<br> カラーも同額です。</p>
                    </div>
                    <div class="tcd-pb-widget widget3 pb-widget-pricemenu">
                      <div class="pb-pricemenu">
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title"> 80本セーブル</dt>
                          <dd class="pb-pricemenu__list-desc">まるで地まつげのように軽いプレミアムセーブル。自然な仕上がりの80本。</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 5,480</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">100本セーブル</dt>
                          <dd class="pb-pricemenu__list-desc">まるで地まつげのように軽いプレミアムセーブル。印象を変えたいあなたへ</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 6,480</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">130本セーブル</dt>
                          <dd class="pb-pricemenu__list-desc">まるで地まつげのように軽いプレミアムセーブル。強めに印象を付けたいあなたへ</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 6,980</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">150本セーブル</dt>
                          <dd class="pb-pricemenu__list-desc">まるで地まつげのように軽いプレミアムセーブル。しっかりと印象付けたいあなたへ</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 7,980</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">2Wリペア（60本）</dt>
                          <dd class="pb-pricemenu__list-desc">2週間以内の再来リペアの料金</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 3,980</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">3Wリペア（60本）</dt>
                          <dd class="pb-pricemenu__list-desc">3週間以内の再来リペアの料金</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 4,180</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">30分リペア(60本)</dt>
                          <dd class="pb-pricemenu__list-desc">30分60本目安のリペアの料金</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 4,480</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">60分リペア(130本)</dt>
                          <dd class="pb-pricemenu__list-desc">60分130本目安のリペアの料金</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 6,480</dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- 高級 -->
              <div class="tcd-pb-row row1">
                <div class="tcd-pb-row-inner clearfix">
                  <div class="tcd-pb-col col1">
                    <div class="tcd-pb-widget widget1 pb-widget-editor">
                      <h3 class="pb_headline pb_font_family_type3">Platinum Sable<span>最高級プラチナセーブル </span></h3>
                      <p class="mb0"><img src="<?php echo esc_url($theme_uri); ?>/menu/01.jpg" /></p>
                    </div>
                    <div class="tcd-pb-widget widget2 pb-widget-editor">
                      <p>しなやかで本物のまつげに近い最高級プラチナセーブル。<br>地まつ⽑に近い⾃然な⿊⾊と上品な艶感、しっとりとした手触りで、これまでにない弾力と美しくナチュラルな仕上がりをキープできます。
                      </p>
                    </div>
                    <div class="tcd-pb-widget widget3 pb-widget-pricemenu">
                      <div class="pb-pricemenu">
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title"> 80本【L・LC・LD】カール</dt>
                          <dd class="pb-pricemenu__list-desc">しなやかで本物のまつげに近い最高級プラチナセーブル。自然な仕上がりの80本。</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 5,980</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">100本【L・LC・LD】カール</dt>
                          <dd class="pb-pricemenu__list-desc">しなやかで本物のまつげに近い最高級プラチナセーブル。印象を変えたいあなたへ</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 6,980</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">130本【L・LC・LD】カール</dt>
                          <dd class="pb-pricemenu__list-desc">しなやかで本物のまつげに近い最高級プラチナセーブル。強めに印象を付けたいあなたへ</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 7,480</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">150本【L・LC・LD】カール</dt>
                          <dd class="pb-pricemenu__list-desc">しなやかで本物のまつげに近い最高級プラチナセーブル。しっかりと印象付けたいあなたへ</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 8,480</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">2Wリペア（60本）</dt>
                          <dd class="pb-pricemenu__list-desc">2週間以内の再来リペアの料金</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 4,480</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">3Wリペア（60本）</dt>
                          <dd class="pb-pricemenu__list-desc">3週間以内の再来リペアの料金</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 4,680</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">30分リペア(60本)</dt>
                          <dd class="pb-pricemenu__list-desc">30分60本目安のリペアの料金</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 4,980</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">60分リペア(130本)</dt>
                          <dd class="pb-pricemenu__list-desc">60分13本目安のリペアの料金</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 6,980</dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- プラチナ -->
              <div class="tcd-pb-row row2">
                <div class="tcd-pb-row-inner clearfix">
                  <div class="tcd-pb-col col1">
                    <div class="tcd-pb-widget widget1 pb-widget-editor">
                      <h3 class="pb_headline pb_font_family_type3">Llat Rush<span>フラットラッシュ</span></h3>
                      <p class="mb0"><img src="<?php echo esc_url($theme_uri); ?>/menu/03.jpg?0248" /></p>
                    </div>
                    <div class="tcd-pb-widget widget2 pb-widget-editor">
                      <p>自まつ毛への負担が少ないので、まつ毛が弱い方でも安心、フラットな形状で接着面積が広く、密着度が増すためモチがよく、フワフワで軽くつけ心地が抜群です。</p>
                    </div>
                    <div class="tcd-pb-widget widget3 pb-widget-pricemenu">
                      <div class="pb-pricemenu">
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title"> 100本フラットラッシュ</dt>
                          <dd class="pb-pricemenu__list-desc">安定感があって倒れにくく、根元が自まつげにフィットするためしっかり装着。フラットラッシュ100本</dd>
                          <dd class="pb-pricemenu__list-price">&yen;7,480</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">130本フラットラッシュ</dt>
                          <dd class="pb-pricemenu__list-desc">安定感があって倒れにくく、根元が自まつげにフィットするためしっかり装着。フラットラッシュ130本</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 7,980</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">150本フラットラッシュ</dt>
                          <dd class="pb-pricemenu__list-desc">安定感があって倒れにくく、根元が自まつげにフィットするためしっかり装着. フラットラッシュ150本</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 8,980</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">2Wリペア（60本）</dt>
                          <dd class="pb-pricemenu__list-desc">2週間以内の再来リペアの料金</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 4,480</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">3Wリペア（60本）</dt>
                          <dd class="pb-pricemenu__list-desc">3週間以内の再来リペアの料金</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 4,680</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">30分リペア(60本)</dt>
                          <dd class="pb-pricemenu__list-desc">30分60本目安のリペアの料金</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 4,980</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">60分リペア(130本)</dt>
                          <dd class="pb-pricemenu__list-desc">60分13本目安のリペアの料金</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 6,980</dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- フラットラッシュ -->
              <div class="tcd-pb-row row2">
                <div class="tcd-pb-row-inner clearfix">
                  <div class="tcd-pb-col col1">
                    <div class="tcd-pb-widget widget1 pb-widget-editor">
                      <h3 class="pb_headline pb_font_family_type3">Volume Rush<span>ボリュームラッシュ</span></h3>
                      <p class="mb0"><img src="<?php echo esc_url($theme_uri); ?>/menu/04.jpg" /></p>
                    </div>
                    <div class="tcd-pb-widget widget2 pb-widget-editor">
                      <p>従来のシングルラッシュや、ナチュラルに目元を盛ることのできるフラットラッシュに対して、ボリュームラッシュはつけまつげのようなバサバサとした印象になります。</p>
                    </div>
                    <div class="tcd-pb-widget widget3 pb-widget-pricemenu">
                      <div class="pb-pricemenu">
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title"> 300本 最高級セーブル</dt>
                          <dd class="pb-pricemenu__list-desc">憧れのふさふさエレガンスな目元に。ボリュームラッシュ300本</dd>
                          <dd class="pb-pricemenu__list-price">&yen;7,980</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">400本 最高級セーブル</dt>
                          <dd class="pb-pricemenu__list-desc">憧れのふさふさエレガンスな目元に。ボリュームラッシュ400本</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 8,980</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">120分つけ放題</dt>
                          <dd class="pb-pricemenu__list-desc">憧れのふさふさエレガンスな目元に。ボリュームラッシュ120分つけ放題</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 10,980</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">2Ｗリペア(200本)</dt>
                          <dd class="pb-pricemenu__list-desc">60分200本のリペアの料金</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 5,980</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">3Ｗリペア(200本)</dt>
                          <dd class="pb-pricemenu__list-desc">60分200本のリペアの料金</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 6,480</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">200本リペア</dt>
                          <dd class="pb-pricemenu__list-desc">ボリュームラッシュのリペア200本</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 6,980</dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- ボリュームラッシュ -->
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
                          <dt class="pb-pricemenu__list-title">リピーター【美眉】アイブロウスタイリング</dt>
                          <dd class="pb-pricemenu__list-desc">お客様雰囲気、髪型、お顔立ちの筋肉と骨格を見て似合う眉を提案します。</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 4,480</dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- アイブロウ -->
              <div class="tcd-pb-row row2">
                <div class="tcd-pb-row-inner clearfix">
                  <div class="tcd-pb-col col1">
                    <div class="tcd-pb-widget widget1 pb-widget-editor">
                      <h3 class="pb_headline pb_font_family_type3">OFF<span>オフ</span></h3>
                      <p class="mb0"><img src="<?php echo esc_url($theme_uri); ?>/menu/06.jpg" /></p>
                    </div>
                    <div class="tcd-pb-widget widget2 pb-widget-editor">
                      <p>自まつ毛をいたわり、しっかりオフをいたします。</p>
                    </div>
                    <div class="tcd-pb-widget widget3 pb-widget-pricemenu">
                      <div class="pb-pricemenu">
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">オフのみ</dt>
                          <dd class="pb-pricemenu__list-desc">自まつ毛をいたわり、しっかりオフをいたします。オフ施術のみ。</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 3,300</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">付け替えオフ</dt>
                          <dd class="pb-pricemenu__list-desc">自まつ毛をいたわり、しっかりオフをいたします。当店で付け替えの場合の料金。</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 500</dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- オフ -->
              <div class="tcd-pb-row row2">
                <div class="tcd-pb-row-inner clearfix">
                  <div class="tcd-pb-col col1">
                    <div class="tcd-pb-widget widget1 pb-widget-editor">
                      <h3 class="pb_headline pb_font_family_type3">Treatment<span>ラッシュリフト</span></h3>
                      <p class="mb0"><img src="<?php echo esc_url($theme_uri); ?>/menu/07.jpg" /></p>
                    </div>
                    <div class="tcd-pb-widget widget2 pb-widget-editor">
                      <p>当店の技法は、従来のまつ毛パーマと違い、まつ毛を根元から立ちちあげ、目元の印象をアップさせるといった方法です。<br> 自まつ毛とは思えないほどに、マツゲを長く見せます<span
                          class="pb-pricemenu__list-desc">。</span></p>
                    </div>
                    <div class="tcd-pb-widget widget3 pb-widget-pricemenu">
                      <div class="pb-pricemenu">
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title"> ラッシュアップカール</dt>
                          <dd class="pb-pricemenu__list-desc">自まつ毛とは思えないほどに、マツゲを長く見せます。</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 4,980</dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- ラッシュリフト -->
              <div class="tcd-pb-row row3">
                <div class="tcd-pb-row-inner clearfix">
                  <div class="tcd-pb-col col1">
                    <div class="tcd-pb-widget widget1 pb-widget-editor">
                      <h3 class="pb_headline pb_font_family_type3">Option<span>オプション</span></h3>
                      <!--<p class="mb0"><img src="01.jpg"  /></p> -->
                    </div>
                    <div class="tcd-pb-widget widget2 pb-widget-editor">
                      <!-- <p>お客様の髪質に合わせて不足している要素を過不足なく調合し、良質なタンパク質を手作業で入念に染みこませることで、髪にハリと潤いを与え、毛先まで柔らかくしっとりとサラサラした風合いに仕上げます。</p>-->
                    </div>
                    <div class="tcd-pb-widget widget3 pb-widget-pricemenu">
                      <div class="pb-pricemenu">
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">アイパッチ</dt>
                          <dd class="pb-pricemenu__list-desc"></dd>
                          <dd class="pb-pricemenu__list-price">&yen; 1,100</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">トリートメント</dt>
                          <dd class="pb-pricemenu__list-desc">まつげをいたわるマツエク対応のオイルフリーのまつげ美容液です</dd>
                          <dd class="pb-pricemenu__list-price">&yen;550</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">コーティング</dt>
                          <dd class="pb-pricemenu__list-desc">水や皮脂、ほこり、よごれ、衝撃から守る長持ちコーティング</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 550</dd>
                        </dl>
                        <dl class="pb-pricemenu__list">
                          <dt class="pb-pricemenu__list-title">下まつげ(同時施術)</dt>
                          <dd class="pb-pricemenu__list-desc"><em>目元の印象を更に強く、下まつげ</em>エクステ</dd>
                          <dd class="pb-pricemenu__list-price">&yen; 2,200</dd>
                        </dl>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!--　オプション  -->
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