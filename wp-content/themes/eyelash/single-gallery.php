<?php
/**
 * ギャラリー詳細ページ
 *
 * @package Eyelash
 */

get_header();

// 現在のメインカテゴリーを取得
$main_categories = get_the_terms(get_the_ID(), 'gallery_main_category');
$main_cat_slug = '';
$main_cat_name = '';
if ($main_categories && !is_wp_error($main_categories)) {
    $main_cat_slug = $main_categories[0]->slug;
    $main_cat_name = $main_categories[0]->name;
}

// サブカテゴリーを取得
$sub_categories = get_the_terms(get_the_ID(), 'gallery_subcategory');
$sub_cat_name = '';
if ($sub_categories && !is_wp_error($sub_categories)) {
    $sub_cat_name = $sub_categories[0]->name;
}
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
        <li class="p-breadcrumb__item c-breadcrumb__item" itemprop="itemListElement" itemscope=""
            itemtype="https://schema.org/ListItem">
            <a href="<?php echo esc_url(home_url('/gallery/')); ?>" itemscope="" itemtype="https://schema.org/Thing"
                itemprop="item">
                <span itemprop="name">Gallery</span>
            </a>
            <meta itemprop="position" content="2">
        </li>
        <?php if ($main_cat_name): ?>
            <li class="p-breadcrumb__item c-breadcrumb__item" itemprop="itemListElement" itemscope=""
                itemtype="https://schema.org/ListItem">
                <a href="<?php echo esc_url(home_url('/gallery/' . $main_cat_slug . '/')); ?>" itemscope=""
                    itemtype="https://schema.org/Thing" itemprop="item">
                    <span itemprop="name"><?php echo esc_html($main_cat_name); ?></span>
                </a>
                <meta itemprop="position" content="3">
            </li>
        <?php endif; ?>
        <li class="p-breadcrumb__item c-breadcrumb__item"><?php the_title(); ?></li>
    </ul>


    <div class="l-main__inner l-inner">
        <div class="l-contents--gallery">
            <!-- メインコンテンツ -->
            <div class="p-gallery__main">
                <article class="p-gallery-single">
                    <div class="p-gallery-single__thumbnail">
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php endif; ?>
                    </div>

                    <div class="p-gallery-single__content">
                        <h1 class="p-gallery-single__title">
                            <?php the_title(); ?>
                        </h1>

                        <div class="p-gallery-single__meta">
                            <?php if ($main_cat_name): ?>
                                <span class="p-gallery-single__category">
                                    <?php echo esc_html($main_cat_name); ?>
                                </span>
                            <?php endif; ?>
                            <?php if ($sub_cat_name): ?>
                                <span class="p-gallery-single__subcategory">
                                    <?php echo esc_html($sub_cat_name); ?>
                                </span>
                            <?php endif; ?>
                            <span class="p-gallery-single__staff">
                                <?php echo esc_html(get_the_author()); ?>
                            </span>
                        </div>

                        <div class="p-gallery-single__body">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </article>

                <!-- 前後の記事ナビゲーション -->
                <nav class="p-gallery-nav">
                    <?php
                    $prev_post = get_previous_post(true, '', 'gallery_main_category');
                    $next_post = get_next_post(true, '', 'gallery_main_category');
                    ?>
                    <?php if ($prev_post): ?>
                        <div class="p-gallery-nav__prev">
                            <a href="<?php echo esc_url(get_permalink($prev_post)); ?>" class="p-gallery-nav__link">
                                <span class="p-gallery-nav__label">&laquo; 前の作品</span>
                                <span class="p-gallery-nav__title">
                                    <?php echo esc_html($prev_post->post_title); ?>
                                </span>
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php if ($next_post): ?>
                        <div class="p-gallery-nav__next">
                            <a href="<?php echo esc_url(get_permalink($next_post)); ?>" class="p-gallery-nav__link">
                                <span class="p-gallery-nav__label">次の作品 &raquo;</span>
                                <span class="p-gallery-nav__title">
                                    <?php echo esc_html($next_post->post_title); ?>
                                </span>
                            </a>
                        </div>
                    <?php endif; ?>
                </nav>
            </div>

            <!-- サイドバー -->
            <?php
            set_query_var('current_main_category', $main_cat_slug);
            get_sidebar('gallery');
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>