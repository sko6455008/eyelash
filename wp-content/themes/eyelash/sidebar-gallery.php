<?php
/**
 * ギャラリー用サイドバー
 *
 * @package Eyelash
 */

// 現在のカテゴリー情報を取得
$current_main_category = get_query_var('current_main_category');
$current_sub_category = get_query_var('current_sub_category');

// サブカテゴリーを取得（現在のメインカテゴリーがある場合はそのカテゴリーのサブカテゴリーのみ）
if ($current_main_category) {
    $subcategories = eyelash_get_subcategories_by_main($current_main_category);
} else {
    // メインページの場合は全てのサブカテゴリーを表示しない（メインカテゴリーを表示）
    $subcategories = array();
}
?>

<aside class="l-secondary p-gallery__sidebar">
    <!-- カテゴリー -->
    <div class="p-sidebar-widget p-gallery-sidebar-widget">
        <h3 class="p-sidebar-widget__title">Category</h3>
        <ul class="p-gallery-category__list">
            <?php if ($current_main_category && !empty($subcategories)): ?>
                <!-- サブカテゴリー一覧（メインカテゴリーページ・サブカテゴリーページの場合） -->
                <?php foreach ($subcategories as $subcategory): ?>
                    <?php
                    $is_active = ($current_sub_category === $subcategory->slug);
                    $sub_url = home_url('/gallery/' . $current_main_category . '/' . $subcategory->slug . '/');
                    ?>
                    <li class="p-gallery-category__item <?php echo $is_active ? 'is-active' : ''; ?>">
                        <a href="<?php echo esc_url($sub_url); ?>">
                            <?php echo esc_html($subcategory->name); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <!-- メインカテゴリー一覧（ギャラリーメインページの場合） -->
                <?php
                $main_categories = get_terms(array(
                    'taxonomy' => 'gallery_main_category',
                    'hide_empty' => false,
                ));

                if (!empty($main_categories) && !is_wp_error($main_categories)):
                    foreach ($main_categories as $main_cat):
                        ?>
                        <li class="p-gallery-category__item">
                            <a href="<?php echo esc_url(home_url('/gallery/' . $main_cat->slug . '/')); ?>">
                                <?php echo esc_html($main_cat->name); ?>
                            </a>
                        </li>
                        <?php
                    endforeach;
                endif;
                ?>
            <?php endif; ?>
        </ul>
    </div>
</aside>