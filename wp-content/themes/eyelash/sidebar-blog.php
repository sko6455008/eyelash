<?php
/**
 * ブログ用サイドバー
 *
 * @package Eyelash
 */
?>

<aside class="l-secondary p-blog__sidebar">
    <!-- カテゴリー -->
    <div class="p-sidebar-widget">
        <h3 class="p-sidebar-widget__title">カテゴリー</h3>
        <ul class="p-sidebar-widget__category-list">
            <?php
            $categories = get_categories(array(
                'orderby' => 'name',
                'order' => 'ASC',
                'hide_empty' => false,
            ));

            foreach ($categories as $category):
                ?>
                <li class="p-sidebar-widget__category-item">
                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                        <?php echo esc_html($category->name); ?>
                        <span class="p-sidebar-widget__category-count">(<?php echo $category->count; ?>)</span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- 最新の記事 -->
    <div class="p-sidebar-widget">
        <h3 class="p-sidebar-widget__title">最新の記事</h3>
        <ul class="p-sidebar-widget__recent-posts">
            <?php
            $recent_posts = new WP_Query(array(
                'posts_per_page' => 5,
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC',
            ));

            if ($recent_posts->have_posts()):
                while ($recent_posts->have_posts()):
                    $recent_posts->the_post();
                    ?>
                    <li class="p-sidebar-widget__recent-post">
                        <a href="<?php the_permalink(); ?>" class="p-sidebar-widget__recent-post-link">
                            <div class="p-sidebar-widget__recent-post-thumbnail">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                <?php else: ?>
                                    <img src="https://via.placeholder.com/150x100?text=No+Image" alt="No Image">
                                <?php endif; ?>
                            </div>
                            <div class="p-sidebar-widget__recent-post-content">
                                <time class="p-sidebar-widget__recent-post-date"
                                    datetime="<?php echo get_the_date('Y-m-d'); ?>">
                                    <?php echo get_the_date('Y.m.d'); ?>
                                </time>
                                <h4 class="p-sidebar-widget__recent-post-title">
                                    <?php the_title(); ?>
                                </h4>
                            </div>
                        </a>
                    </li>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </ul>
    </div>
</aside>