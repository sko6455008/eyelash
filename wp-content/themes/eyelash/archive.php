<?php
/**
 * ブログアーカイブページテンプレート
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
                    class="p-page-header__sub" style="color: #ffffff; font-size: 12px;">ブログ</span></h1>
            <p class="p-page-header__desc" style="color: ;">当店舗スタッフのブログ記事一覧です。</p>
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
        <div class="l-contents l-contents--blog">
            <!-- メインコンテンツ -->
            <div class="l-primary p-blog__main">
                <?php if (have_posts()): ?>
                    <div class="p-blog__list">
                        <?php while (have_posts()):
                            the_post(); ?>
                            <article class="p-blog-card">
                                <a href="<?php the_permalink(); ?>" class="p-blog-card__link">
                                    <div class="p-blog-card__thumbnail">
                                        <?php if (has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail('medium_large'); ?>
                                        <?php else: ?>
                                            <img src="https://via.placeholder.com/400x300?text=No+Image" alt="No Image">
                                        <?php endif; ?>
                                    </div>
                                    <div class="p-blog-card__content">
                                        <?php
                                        $categories = get_the_category();
                                        if ($categories): ?>
                                            <span class="p-blog-card__category">
                                                <?php echo esc_html($categories[0]->name); ?>
                                            </span>
                                        <?php endif; ?>
                                        <time class="p-blog-card__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                                            <?php echo get_the_date('Y.m.d'); ?>
                                        </time>
                                        <h2 class="p-blog-card__title">
                                            <?php the_title(); ?>
                                        </h2>
                                        <p class="p-blog-card__excerpt">
                                            <?php echo wp_trim_words(get_the_excerpt(), 80, '...'); ?>
                                        </p>
                                    </div>
                                </a>
                            </article>
                        <?php endwhile; ?>
                    </div>

                    <!-- ページネーション -->
                    <nav class="p-blog__pagination">
                        <?php
                        $pagination = paginate_links(array(
                            'mid_size' => 2,
                            'prev_text' => '<',
                            'next_text' => '>',
                            'type' => 'array',
                        ));

                        if ($pagination):
                            ?>
                            <ul class="p-pagination">
                                <?php foreach ($pagination as $page): ?>
                                    <li class="p-pagination__item">
                                        <?php echo $page; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </nav>

                <?php else: ?>
                    <div class="p-blog__empty">
                        <p>記事が見つかりませんでした。</p>
                    </div>
                <?php endif; ?>
            </div>

            <!-- サイドバー -->
            <?php get_sidebar('blog'); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>