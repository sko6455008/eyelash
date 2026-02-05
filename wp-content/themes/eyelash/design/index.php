<?php
/**
 * デザインページテンプレート
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
      <li class="p-breadcrumb__item c-breadcrumb__item">Design</li>
    </ul>
    <div class="l-contents">
      <div class="l-primary">
        <div class="p-post-list">
          <article class="p-post-list__item p-article01 u-clearfix">
            <a href="<?php echo esc_url(home_url('/design/01.php')); ?>" class="p-article01__img p-hover-effect--type2">
              <img width="510" height="" src="<?php echo esc_url($theme_uri); ?>/design/sam01.jpg" />
            </a>
            <div class="p-article01__content">
              <h2 class="p-article01__title">
                <a
                  href="<?php echo esc_url(home_url('/design/01.php')); ?>">ビューラーで立ち上げた時のように、まつ毛の存在感が出てパッチリとしたお目元を演出できるカール。キレイなカールを維持することができます。「Lシリーズ」</a>
              </h2>
              <p class="p-article01__meta">
                <time class="p-article01__date" datetime="2017-09-20">L curl-series</time>
              </p>
            </div>
          </article>
          <article class="p-post-list__item p-article01 u-clearfix">
            <a href="<?php echo esc_url(home_url('/design/02.php')); ?>" class="p-article01__img p-hover-effect--type2">
              <img width="510" height="" src="<?php echo esc_url($theme_uri); ?>/design/page-vol01.jpg" />
            </a>
            <div class="p-article01__content">
              <h2 class="p-article01__title">
                <a
                  href="<?php echo esc_url(home_url('/design/02.php')); ?>">ボリュームへの悩みをダイレクトに解決。3Dボリュームラッシュでふわふわまつ毛に毛量が気になる方も、自然にボリュームアップ「ボリュームラッシュ」</a>
              </h2>
              <p class="p-article01__meta">
                <time class="p-article01__date" datetime="2017-09-20">VOLUME LASH</time>
              </p>
            </div>
          </article>
          <article class="p-post-list__item p-article01 u-clearfix">
            <a href="<?php echo esc_url(home_url('/design/03.php')); ?>" class="p-article01__img p-hover-effect--type2">
              <img width="510" height="" src="<?php echo esc_url($theme_uri); ?>/design/page-flatrash01.jpg" />
            </a>
            <div class="p-article01__content">
              <h2 class="p-article01__title">
                <a href="<?php echo esc_url(home_url('/design/03.php')); ?>">「とにかく付け心地が軽い！」「仕上がりがナチュラル！」と、
                  SNSでも見かけることの多い話題のアイテム。「フラットラッシュ」</a>
              </h2>
              <p class="p-article01__meta">
                <time class="p-article01__date" datetime="2017-09-20">FLAT LASH-series</time>
              </p>
            </div>
          </article>
          <article class="p-post-list__item p-article01 u-clearfix">
            <a href="<?php echo esc_url(home_url('/design/04.php')); ?>" class="p-article01__img p-hover-effect--type2">
              <img width="510" height="" src="<?php echo esc_url($theme_uri); ?>/design/sam02.jpg" />
            </a>
            <div class="p-article01__content">
              <h2 class="p-article01__title">
                <a
                  href="<?php echo esc_url(home_url('/design/04.php')); ?>">まつげエクステを知り尽くしているからこそ誕生したゆずれない価値、こだわりの品質。ナチュラル（自然）な仕上がりをとことん追求。「セーブル」</a>
              </h2>
              <p class="p-article01__meta">
                <time class="p-article01__date" datetime="2017-09-20">Sable LASH</time>
              </p>
            </div>
          </article>
          <article class="p-post-list__item p-article01 u-clearfix">
            <a href="<?php echo esc_url(home_url('/design/05.php')); ?>" class="p-article01__img p-hover-effect--type2">
              <img width="510" height="" src="<?php echo esc_url($theme_uri); ?>/design/page-rushlift01.jpg" />
            </a>
            <div class="p-article01__content">
              <h2 class="p-article01__title">
                <a
                  href="<?php echo esc_url(home_url('/design/05.php')); ?>">「まつげエクステはしたくない」「メンテナンスがめんどくさい」というお客様へまつげエクステ以外の目元美への新提案。「まつ毛パーマ」</a>
              </h2>
              <p class="p-article01__meta">
                <time class="p-article01__date" datetime="2017-09-20">Eyelash perm</time>
              </p>
            </div>
          </article>
          <article class="p-post-list__item p-article01 u-clearfix">
            <a href="<?php echo esc_url(home_url('/design/06.php')); ?>" class="p-article01__img p-hover-effect--type2">
              <img width="510" height="" src="<?php echo esc_url($theme_uri); ?>/design/page-eyebrow01.jpg" />
            </a>
            <div class="p-article01__content">
              <h2 class="p-article01__title">
                <a
                  href="<?php echo esc_url(home_url('/design/06.php')); ?>">「ノーメイクでも美しい」を実感!描かなくてもいいような自眉をいかした似合うカタチの提案や、描く場合のコツなどのアドバイスも「アイブロウスタイリング」</a>
              </h2>
              <p class="p-article01__meta">
                <time class="p-article01__date" datetime="2017-09-20">Eyebrow</time>
              </p>
            </div>
          </article>
        </div>
      </div>

      <!--  right -->
      <?php get_sidebar(); ?>
      <!--  End of right -->

    </div>
  </div>
</main>

<?php get_footer(); ?>