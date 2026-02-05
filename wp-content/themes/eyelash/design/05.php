<?php
/**
 * まつ毛パーマデザインテンプレート
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
      <li class="p-breadcrumb__item c-breadcrumb__item">まつ毛パーマについて</li>
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
                      <h3 class="pb_headline pb_font_family_type3">Eyelash perm<span>まつ毛パーマについて</span></h3>
                      <p class="mb0"><img src="<?php echo esc_url($theme_uri); ?>/design/page-rushlift01.jpg?1229"></p>
                    </div>
                    <div class="tcd-pb-widget widget2 pb-widget-editor">
                      <h4>「まつげエクステはしたくない」<BR>「メンテナンスがめんどくさい」<BR>「ナチュラルメイクに合った目元が欲しい」<BR>というお客様へまつげエクステ以外の目元美への新提案。<BR>
                      </h4>
                      <p>
                        この技術はまつげの最大限の美力を引き出し、カールアップやカールダウン・根本を上げたり・全体的にカールをかけたりとデザイン豊富に幅広い表現が可能。<BR>まぶたのリフトアップ、白目がはっきりみえることで目を大きく見せる事にも繋がります。<BR>自分自身のまつげを活かしより美しく、ナチュラルに目元を輝かせたい日本人の目元に合った技術です。<BR>
                      <h3 class="pb_headline pb_font_family_type3">Recommended<span>お客様の声</span></h3>
                      <table width="100%">
                        <tbody>
                          <tr>
                            <td>短いと思っていた自まつげが長くなった</td>
                          </tr>
                          <tr>
                            <td>白目部分が増えて、目元が大きくクッキリした</td>
                          </tr>
                          <tr>
                            <td>従来のパーマでは上がらなかったまつげが上がった</td>
                          </tr>
                          <tr>
                            <td>マスカラを塗るだけでボリューム感がでた</td>
                          </tr>
                          <tr>
                            <td>思ってたより施術時間が短かった</td>
                          </tr>
                          <tr>
                            <td>エクステと違って持ちのバランスが均一で持続期間が長く感じる</td>
                          </tr>
                        </tbody>
                      </table>
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