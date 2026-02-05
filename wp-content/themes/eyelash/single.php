<?php
/**
 * ブログ詳細ページテンプレート
 *
 * @package Eyelash
 */

get_header();
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
        <li class="p-breadcrumb__item c-breadcrumb__item">Blog</li>
    </ul>
    <header class="p-page-header" style="background: #b7aa9d;">
        <div class="p-page-header__inner l-inner">
            <h1 class="p-page-header__title" style="background: #000000; color: #ffffff; font-size: 34px;">Blog<span
                    class="p-page-header__sub" style="color: #ffffff; font-size: 12px;">ブログ詳細</span></h1>
            <p class="p-page-header__desc" style="color: ;">当店舗スタッフのブログ記事詳細です。</p>
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
            <li class="p-breadcrumb__item c-breadcrumb__item">Blog</li>
        </ul>
        <!-- メインコンテンツ -->
        <div class="l-contents l-contents--blog">
            <?php while (have_posts()):
                the_post(); ?>
                <article class="p-blog-single">
                    <!-- アイキャッチ画像 -->
                    <?php if (has_post_thumbnail()): ?>
                        <div class="p-blog-single__thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>

                    <!-- 記事ヘッダー -->
                    <header class="p-blog-single__header">
                        <?php
                        $categories = get_the_category();
                        if ($categories): ?>
                            <div class="p-blog-single__categories">
                                <?php foreach ($categories as $category): ?>
                                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"
                                        class="p-blog-single__category">
                                        <?php echo esc_html($category->name); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <time class="p-blog-single__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                            <?php echo get_the_date('Y.m.d'); ?>
                        </time>

                        <h1 class="p-blog-single__title">
                            <?php the_title(); ?>
                        </h1>
                    </header>

                    <!-- 記事本文 -->
                    <div class="p-blog-single__content p-entry__body">
                        <?php the_content(); ?>
                    </div>

                    <!-- 記事フッター -->
                    <footer class="p-blog-single__footer">
                        <?php
                        $tags = get_the_tags();
                        if ($tags): ?>
                            <div class="p-blog-single__tags">
                                <?php foreach ($tags as $tag): ?>
                                    <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="p-blog-single__tag">
                                        #
                                        <?php echo esc_html($tag->name); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </footer>
                </article>
            <?php endwhile; ?>

            <!-- サイドバー -->
            <?php get_sidebar('blog'); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>