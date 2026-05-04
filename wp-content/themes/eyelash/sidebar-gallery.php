<?php
/**
 * ギャラリー用サイドバー
 *
 * @package Eyelash
 */

$current_main_category = get_query_var('current_main_category');

$main_categories = get_terms(array(
    'taxonomy' => 'gallery_main_category',
    'hide_empty' => false,
));
?>

<aside class="l-secondary p-gallery__sidebar">
    <!-- カテゴリー -->
    <div class="p-sidebar-widget p-gallery-sidebar-widget">
        <h3 class="p-sidebar-widget__title">Category</h3>
        <ul class="p-gallery-category__list">
            <?php if (!empty($main_categories) && !is_wp_error($main_categories)): ?>
                <?php foreach ($main_categories as $main_cat): ?>
                    <?php $is_active = ($current_main_category === $main_cat->slug); ?>
                    <li class="p-gallery-category__item <?php echo $is_active ? 'is-active' : ''; ?>">
                        <a href="<?php echo esc_url(home_url('/gallery/' . $main_cat->slug . '/')); ?>">
                            <?php echo esc_html($main_cat->name); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
</aside>
