<?php
/**
 * ギャラリーメインページ
 *
 * @package Eyelash
 */

get_header();
$theme_uri = get_template_directory_uri();

// ペジネーション
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

// ギャラリー投稿を取得
$gallery_query = new WP_Query(array(
    'post_type' => 'gallery',
    'posts_per_page' => 12,
    'paged' => $paged,
    'post_status' => 'publish',
));
?>

<main class="l-main">
    <ul class="p-breadcrumb c-breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
        <li class="p-breadcrumb__item c-breadcrumb__item c-breadcrumb__item--home" itemprop="itemListElement"
            itemscope="" itemtype="https://schema.org/ListItem">
            <a href="<?php echo esc_url(home_url('/')); ?>" itemscope="" itemtype="https://schema.org/Thing"
                itemprop="item">
                <span itemprop="name">HOME</span>
            </a>
            <meta itemprop="position" content="1">
        </li>
        <li class="p-breadcrumb__item c-breadcrumb__item">ギャラリー</li>
    </ul>
    <header class="p-page-header" style="background: #b7aa9d;">
        <div class="p-page-header__inner l-inner">
            <h1 class="p-page-header__title" style="background: #000000; color: #ffffff; font-size: 34px;">Gallery<span
                    class="p-page-header__sub" style="color: #ffffff; font-size: 12px;">ギャラリー</span></h1>
            <p class="p-page-header__desc" style="color: ;">厳選されたデザインギャラリー。あなたの理想の目元が見つかります。</p>
        </div>
    </header>

    <div class="l-main__inner l-inner">
        <ul class="p-breadcrumb c-breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
            <li class="p-breadcrumb__item c-breadcrumb__item c-breadcrumb__item--home" itemprop="itemListElement"
                itemscope="" itemtype="https://schema.org/ListItem">
                <a href="<?php echo esc_url(home_url('/')); ?>" itemscope="" itemtype="https://schema.org/Thing"
                    itemprop="item">
                    <span itemprop="name">HOME</span>
                </a>
                <meta itemprop="position" content="1">
            </li>
            <li class="p-breadcrumb__item c-breadcrumb__item">Gallery</li>
        </ul>
        <div class="l-contents">
            <div class="l-primary">
                <div class="p-post-list">
                    <article class="p-post-list__item p-article01 u-clearfix">
                        <a href="<?php echo esc_url(home_url('/gallery/eyebrow/')); ?>"
                            class="p-article01__img p-hover-effect--type2">
                            <img width="510" height="" src="<?php echo esc_url($theme_uri); ?>/gallery/01.jpg" />
                        </a>
                        <div class="p-article01__content">
                            <h2 class="p-article01__title">
                                <a
                                    href="<?php echo esc_url(home_url('/gallery/eyebrow/')); ?>">骨格や表情に合わせた黄金比デザインで、あなただけの「似合わせ眉」をご提案。毎日のメイクが楽しくなる、理想の美眉へ。「アイブロウ」</a>
                            </h2>
                            <p class="p-article01__meta">
                                <time class="p-article01__date" datetime="2017-09-20">Eyebrow</time>
                            </p>
                        </div>
                    </article>
                    <article class="p-post-list__item p-article01 u-clearfix">
                        <a href="<?php echo esc_url(home_url('/gallery/matsueku/')); ?>"
                            class="p-article01__img p-hover-effect--type2">
                            <img width="510" height="" src="<?php echo esc_url($theme_uri); ?>/gallery/02.jpg" />
                        </a>
                        <div class="p-article01__content">
                            <h2 class="p-article01__title">
                                <a
                                    href="<?php echo esc_url(home_url('/gallery/matsueku/')); ?>">最高級の毛質と豊富なデザインで、ナチュラルからボリュームまで思いのまま。あなたの目元を最大限に美しく引き立てます。「マツエク」</a>
                            </h2>
                            <p class="p-article01__meta">
                                <time class="p-article01__date" datetime="2017-09-20">Eyelash</time>
                            </p>
                        </div>
                    </article>
                    <article class="p-post-list__item p-article01 u-clearfix">
                        <a href="<?php echo esc_url(home_url('/gallery/lashlift/')); ?>"
                            class="p-article01__img p-hover-effect--type2">
                            <img width="510" height="" src="<?php echo esc_url($theme_uri); ?>/gallery/03.jpg" />
                        </a>
                        <div class="p-article01__content">
                            <h2 class="p-article01__title">
                                <a
                                    href="<?php echo esc_url(home_url('/gallery/lashlift/')); ?>">自まつ毛を根元から立ち上げ、最大限に長く魅せる次世代まつ毛パーマ。ビューラーいらずで、一日中ぱっちりとした瞳をキープ。「ラッシュリフト」</a>
                            </h2>
                            <p class="p-article01__meta">
                                <time class="p-article01__date" datetime="2017-09-20">Lashlift</time>
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