<?php
/**
 * リクルートページテンプレート
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
    <li class="p-breadcrumb__item c-breadcrumb__item" itemprop="itemListElement" itemscope=""
      itemtype="https://schema.org/ListItem">
      <span itemprop="name">Recruit</span>
      <meta itemprop="position" content="2">
    </li>
  </ul>
  <header class="p-page-header" style="background: #b7aa9d;">
    <div class="p-page-header__inner l-inner">
      <h1 class="p-page-header__title" style="background: #000000; color: #ffffff; font-size: 34px;">Recruit<span
          class="p-page-header__sub" style="color: #ffffff; font-size: 12px;">リクルート</span></h1>
      <p class="p-page-header__desc" style="color: ;">現在、アイリスト募集中｜一緒にお客様の“キレイ”をつくりませんか？</p>
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
      <li class="p-breadcrumb__item c-breadcrumb__item">Recruit</li>
    </ul>
    <div class="l-contents">
      <div class="l-primary">
        <article class="p-entry">
          <div class="p-entry__body">
            <div class="p-recruit-images">
              <img src="<?php echo esc_url($theme_uri); ?>/photo/page_pc_01-min.png" alt="アイリスト募集" class="pconly" />
              <img src="<?php echo esc_url($theme_uri); ?>/photo/page_pc_02-min.png" alt="募集要項" class="pconly" />
              <img src="<?php echo esc_url($theme_uri); ?>/photo/page_pc_03-min.png" alt="サロン紹介" class="pconly" />

              <a href="#recruit-form"><img src="<?php echo esc_url($theme_uri); ?>/photo/page_sp_01-min.png" alt="アイリスト募集" class="sponly" /></a>
              <img src="<?php echo esc_url($theme_uri); ?>/photo/page_sp_02-min.png" alt="募集要項" class="sponly" />
              <img src="<?php echo esc_url($theme_uri); ?>/photo/page_sp_10-min.png" alt="サロン紹介" class="sponly" />
              <img src="<?php echo esc_url($theme_uri); ?>/photo/page_sp_11-min.png" alt="スタッフ紹介" class="sponly" />

              <div style="text-align: center; margin: 20px 0;">
                <a href="tel:050-5305-3300"><img src="<?php echo esc_url($theme_uri); ?>/photo/tel.png" alt="電話でのお問い合わせ 050-5305-3300" /></a>
              </div>
            </div>

            <section id="recruit-form" style="margin-top: 40px;">
              <script src="https://sdk.form.run/js/v2/embed.js"></script>
              <div
                class="formrun-embed"
                data-formrun-form="@hotmail-7774"
                data-formrun-redirect="true">
              </div>
            </section>
          </div>
        </article>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>

<script type="application/ld+json">
<?php
echo wp_json_encode(array(
    '@context' => 'https://schema.org/',
    '@type' => 'JobPosting',
    'title' => 'アイリスト',
    'description' => '池袋西口MOLREVE（モルレーヴ）アイラッシュサロンではアイリスト・店長候補を大募集中。即戦力のある経験者の方大歓迎。アイラッシュを学びたい実務経験1年未満の方もOK。',
    'datePosted' => '2026-01-01',
    'validThrough' => '2027-03-31',
    'employmentType' => 'FULL_TIME',
    'hiringOrganization' => array(
        '@type' => 'Organization',
        'name' => 'MOLREVE（モルレーヴ）',
        'sameAs' => 'https://eyelash.jp/',
    ),
    'jobLocation' => array(
        '@type' => 'Place',
        'address' => array(
            '@type' => 'PostalAddress',
            'addressRegion' => '東京都',
            'addressLocality' => '豊島区',
            'streetAddress' => '池袋2-40-13 VORT I池袋ビル6F',
            'postalCode' => '170-0014',
            'addressCountry' => 'JP',
        ),
    ),
    'baseSalary' => array(
        '@type' => 'MonetaryAmount',
        'currency' => 'JPY',
        'value' => array(
            '@type' => 'QuantitativeValue',
            'minValue' => '250000',
            'maxValue' => '500000',
            'unitText' => 'MONTH',
        ),
    ),
), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>
</script>

<?php get_footer(); ?>
