<?php
/**
 * ギャラリーメインカテゴリーアーカイブページ
 * URL: /gallery/{main-category-slug}/
 *
 * @package Eyelash
 */

get_header();

// 現在のメインカテゴリーを取得
$main_cat_slug = get_query_var('gallery_main_cat');
$main_category = get_term_by('slug', $main_cat_slug, 'gallery_main_category');

// カテゴリー名を取得
$category_name = $main_category ? $main_category->name : '';

// ペジネーション
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

// このメインカテゴリーのギャラリー投稿を取得
$gallery_query = new WP_Query(array(
    'post_type' => 'gallery',
    'posts_per_page' => 12,
    'paged' => $paged,
    'post_status' => 'publish',
    'tax_query' => array(
        array(
            'taxonomy' => 'gallery_main_category',
            'field' => 'slug',
            'terms' => $main_cat_slug,
        ),
    ),
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
        <li class="p-breadcrumb__item c-breadcrumb__item" itemprop="itemListElement" itemscope=""
            itemtype="https://schema.org/ListItem">
            <a href="<?php echo esc_url(home_url('/gallery/')); ?>" itemscope="" itemtype="https://schema.org/Thing"
                itemprop="item">
                <span itemprop="name">Gallery</span>
            </a>
            <meta itemprop="position" content="2">
        </li>
        <li class="p-breadcrumb__item c-breadcrumb__item"><?php echo esc_html($category_name); ?></li>
    </ul>
    <header class="p-page-header" style="background: #b7aa9d;">
        <div class="p-page-header__inner l-inner">
            <h1 class="p-page-header__title" style="background: #000000; color: #ffffff; font-size: 27px;">
                <?php echo esc_html(ucfirst($main_cat_slug)); ?>
                <span class="p-page-header__sub" style="color: #ffffff; font-size: 12px;">
                    <?php echo esc_html($category_name); ?>
                </span>
            </h1>
            <p class="p-page-header__desc" style="color: ;">骨格・目の形に合わせた似合わせデザインをご提案。</p>
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
            <li class="p-breadcrumb__item c-breadcrumb__item">ギャラリー</li>
            <li class="p-breadcrumb__item c-breadcrumb__item">
                <?php echo esc_html($category_name); ?>
            </li>
        </ul>

        <div class="l-contents--gallery">
            <!-- メインコンテンツ -->
            <main class="p-gallery__main">
                <?php if ($gallery_query->have_posts()): ?>
                    <div class="p-gallery__grid">
                        <?php while ($gallery_query->have_posts()):
                            $gallery_query->the_post(); ?>
                            <article class="p-gallery-item">
                                <?php
                                $full_image_url = '';
                                if (has_post_thumbnail()) {
                                    $full_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                } else {
                                    $full_image_url = get_template_directory_uri() . '/photo/no-image.jpg';
                                }
                                ?>
                                <a href="javascript:void(0);" class="p-gallery-item__link js-gallery-modal-trigger"
                                    data-image-url="<?php echo esc_url($full_image_url); ?>"
                                    data-image-title="<?php the_title_attribute(); ?>">
                                    <div class="p-gallery-item__thumbnail">
                                        <?php if (has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail('medium'); ?>
                                        <?php else: ?>
                                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/photo/no-image.jpg"
                                                alt="No Image">
                                        <?php endif; ?>
                                    </div>
                                </a>
                                <div class="p-gallery-item__info">
                                    <h3 class="p-gallery-item__title"><?php the_title(); ?></h3>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>

                    <!-- モーダル構造 -->
                    <div id="gallery-modal" class="p-gallery-modal">
                        <div class="p-gallery-modal__overlay js-gallery-modal-close"></div>
                        <div class="p-gallery-modal__content">
                            <button class="p-gallery-modal__close-btn js-gallery-modal-close">&times;</button>
                            <img src="" alt="" class="p-gallery-modal__image js-gallery-modal-image">
                            <h3 class="p-gallery-modal__title js-gallery-modal-title"></h3>
                        </div>
                    </div>

                    <style>
                        .p-gallery-modal {
                            display: none;
                            position: fixed;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            z-index: 9999;
                            justify-content: center;
                            align-items: center;
                        }

                        .p-gallery-modal.is-active {
                            display: flex;
                        }

                        .p-gallery-modal__overlay {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background: rgba(0, 0, 0, 0.8);
                        }

                        .p-gallery-modal__content {
                            position: relative;
                            max-width: 90%;
                            max-height: 90%;
                            z-index: 10000;
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                        }

                        .p-gallery-modal__image {
                            max-width: 100%;
                            max-height: 80vh;
                            display: block;
                            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
                            margin-bottom: 15px;
                        }

                        .p-gallery-modal__title {
                            color: #fff;
                            font-size: 18px;
                            margin: 0;
                            text-align: center;
                            font-weight: bold;
                            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8);
                        }

                        .p-gallery-modal__close-btn {
                            position: absolute;
                            top: -40px;
                            right: 0;
                            background: none;
                            border: none;
                            color: #fff;
                            font-size: 30px;
                            cursor: pointer;
                            padding: 0;
                            line-height: 1;
                        }

                        @media (max-width: 768px) {
                            .p-gallery-modal__close-btn {
                                top: -35px;
                                right: -5px;
                            }

                            .p-gallery-modal__content {
                                max-width: 95%;
                            }

                            .p-gallery-modal__image {
                                max-height: 70vh;
                            }

                            .p-gallery-modal__title {
                                font-size: 16px;
                            }
                        }
                    </style>

                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            var modal = document.getElementById('gallery-modal');
                            var modalImage = document.querySelector('.js-gallery-modal-image');
                            var modalTitle = document.querySelector('.js-gallery-modal-title');
                            var triggers = document.querySelectorAll('.js-gallery-modal-trigger');
                            var closeButtons = document.querySelectorAll('.js-gallery-modal-close');

                            if (!modal || !modalImage) return;

                            triggers.forEach(function (trigger) {
                                trigger.addEventListener('click', function (e) {
                                    e.preventDefault();
                                    var imageUrl = this.getAttribute('data-image-url');
                                    var imageTitle = this.getAttribute('data-image-title');

                                    if (imageUrl) {
                                        modalImage.src = imageUrl;
                                        if (modalTitle) {
                                            modalTitle.textContent = imageTitle || '';
                                        }
                                        modal.classList.add('is-active');
                                        document.body.style.overflow = 'hidden'; // 背景スクロール固定
                                    }
                                });
                            });

                            closeButtons.forEach(function (btn) {
                                btn.addEventListener('click', function () {
                                    modal.classList.remove('is-active');
                                    document.body.style.overflow = ''; // 背景スクロール解除
                                    setTimeout(function () {
                                        modalImage.src = '';
                                        if (modalTitle) {
                                            modalTitle.textContent = '';
                                        }
                                    }, 200);
                                });
                            });
                        });
                    </script>

                    <!-- ページネーション -->
                    <?php if ($gallery_query->max_num_pages > 1): ?>
                        <div class="p-gallery__pagination">
                            <?php
                            echo paginate_links(array(
                                'total' => $gallery_query->max_num_pages,
                                'current' => $paged,
                                'format' => 'page/%#%/',
                                'prev_text' => '&laquo;',
                                'next_text' => '&raquo;',
                            ));
                            ?>
                        </div>
                    <?php endif; ?>
                <?php else: ?>
                    <p class="p-gallery__no-posts">このカテゴリーにはまだ投稿がありません。</p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </main>

            <!-- サイドバー -->
            <?php
            // 現在のメインカテゴリーをサイドバーに渡す
            set_query_var('current_main_category', $main_cat_slug);
            get_sidebar('gallery');
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>