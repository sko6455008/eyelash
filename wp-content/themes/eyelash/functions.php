<?php
/**
 * Eyelash MOLREVE テーマ functions.php
 *
 * @package Eyelash
 */

if (!defined('ABSPATH')) {
    exit; // 直接アクセスを禁止
}

/**
 * テーマのセットアップ
 */
function eyelash_theme_setup()
{
    // タイトルタグのサポートを追加
    add_theme_support('title-tag');

    // アイキャッチ画像のサポート
    add_theme_support('post-thumbnails');

    // HTML5サポート
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // カスタムロゴのサポート
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 300,
        'flex-height' => true,
        'flex-width' => true,
    ));

    // ナビゲーションメニューの登録
    register_nav_menus(array(
        'primary' => __('プライマリメニュー', 'eyelash'),
        'footer' => __('フッターメニュー', 'eyelash'),
    ));

    // ブログ用のカスタム画像サイズ
    add_image_size('blog-thumbnail', 400, 300, true);
    add_image_size('blog-single', 800, 450, true);
}
add_action('after_setup_theme', 'eyelash_theme_setup');

/**
 * 抜粋文字数の設定
 */
function eyelash_excerpt_length($length)
{
    return 80;
}
add_filter('excerpt_length', 'eyelash_excerpt_length');

/**
 * 抜粋の省略記号を変更
 */
function eyelash_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'eyelash_excerpt_more');

/**
 * スタイルシートとスクリプトの読み込み
 */
function eyelash_enqueue_scripts()
{
    // jQuery（WordPress標準を使用）
    wp_enqueue_script('jquery');

    // 外部CSS
    wp_enqueue_style('wp-block-library', 'https://eyelash.jp/wp-includes/css/dist/block-library/style.min-ver=5.2.5.css', array(), '5.2.5');
    wp_enqueue_style('beauty-slider', 'https://eyelash.jp/wp-content/themes/beauty_tcd054/pagebuilder/assets/css/slider-ver=1.3.3.css', array(), '1.3.3');
    wp_enqueue_style('contact-form-7', 'https://eyelash.jp/wp-content/plugins/contact-form-7/includes/css/styles-ver=5.1.6.css', array(), '5.1.6');
    wp_enqueue_style('beauty-slick', 'https://eyelash.jp/wp-content/themes/beauty_tcd054/assets/css/slick.min-ver=5.2.5.css', array(), '5.2.5');
    wp_enqueue_style('beauty-slick-theme', 'https://eyelash.jp/wp-content/themes/beauty_tcd054/assets/css/slick-theme.min-ver=5.2.5.css', array(), '5.2.5');
    wp_enqueue_style('beauty-style', 'https://eyelash.jp/wp-content/themes/beauty_tcd054/style-ver=1.3.css', array(), '1.3');
    wp_enqueue_style('beauty-googlemap', 'https://eyelash.jp/wp-content/themes/beauty_tcd054/pagebuilder/assets/css/googlemap-ver=1.3.3.css', array(), '1.3.3');
    wp_enqueue_style('beauty-pagebuilder', 'https://eyelash.jp/wp-content/themes/beauty_tcd054/pagebuilder/assets/css/pagebuilder-ver=1.3.3.css', array(), '1.3.3');
    wp_enqueue_style('beauty-pricemenu', 'https://eyelash.jp/wp-content/themes/beauty_tcd054/pagebuilder/assets/css/pricemenu-ver=1.3.3.css', array(), '1.3.3');

    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(), '6.0.0');

    // メインスタイルシート
    wp_enqueue_style('eyelash-style', get_stylesheet_uri(), array(), '1.0.0');

    // 外部JavaScript
    wp_enqueue_script('slick', 'https://eyelash.jp/wp-content/themes/beauty_tcd054/assets/js/slick.min-ver=1.3.js', array('jquery'), '1.3', true);
    wp_enqueue_script('beauty-functions', 'https://eyelash.jp/wp-content/themes/beauty_tcd054/assets/js/functions.min-ver=1.3.js', array('jquery'), '1.3', true);
}
add_action('wp_enqueue_scripts', 'eyelash_enqueue_scripts');


/**
 * テーマディレクトリURLを取得するヘルパー関数
 */
function eyelash_get_theme_uri()
{
    return get_template_directory_uri();
}

/**
 * テーマディレクトリパスを取得するヘルパー関数
 */
function eyelash_get_theme_path()
{
    return get_template_directory();
}

/**
 * サイト情報を取得するヘルパー関数
 */
function eyelash_get_site_info()
{
    return array(
        'site_url' => 'https://eyelash.jp',
        'site_name' => 'MOLREVE（モルレーヴ）',
        'description' => '池袋駅西口から3分★池袋マツエクなら美容所登録サロンMOLREVE(モルレーヴ)',
        'address' => '〒170-0014　東京都豊島区池袋2-40-13　VORT Ⅰ池袋ビル6F',
        'phone' => '050-5305-3300',
        'hours' => '月曜日～土曜日 11:00～22:00 / 日曜日・祝日 10:00～21:00',
        'reservation' => 'https://071f0f.b-merit.jp/0344057222/web/',
        'logo_url' => 'https://eyelash.jp/logo.png',
    );
}

/**
 * ページテンプレート用のQUERY_VARを追加
 */
function eyelash_query_vars($vars)
{
    $vars[] = 'eyelash_page';
    $vars[] = 'design_id';
    $vars[] = 'page_id';
    $vars[] = 'care_id';
    return $vars;
}
add_filter('query_vars', 'eyelash_query_vars');

/**
 * カスタムリライトルールを追加
 */
function eyelash_rewrite_rules()
{
    // .php 付きのURLと、付かないURLの両方に対応
    add_rewrite_rule('^design/([0-9]+)\.php$', 'index.php?eyelash_page=design&design_id=$matches[1]', 'top');
    add_rewrite_rule('^design/([0-9]+)/?$', 'index.php?eyelash_page=design&design_id=$matches[1]', 'top');

    add_rewrite_rule('^care/([0-9]+)\.php$', 'index.php?eyelash_page=care&care_id=$matches[1]', 'top');
    add_rewrite_rule('^care/([0-9]+)/?$', 'index.php?eyelash_page=care&care_id=$matches[1]', 'top');

    add_rewrite_rule('^page/([0-9]+)\.php$', 'index.php?eyelash_page=page&page_id=$matches[1]', 'top');
    add_rewrite_rule('^page/([0-9]+)/?$', 'index.php?eyelash_page=page&page_id=$matches[1]', 'top');

    add_rewrite_rule('^design/?$', 'index.php?eyelash_page=design', 'top');
    add_rewrite_rule('^menu/?$', 'index.php?eyelash_page=menu', 'top');
    add_rewrite_rule('^access/?$', 'index.php?eyelash_page=access', 'top');
    add_rewrite_rule('^faq/?$', 'index.php?eyelash_page=faq', 'top');
    add_rewrite_rule('^info/?$', 'index.php?eyelash_page=info', 'top');

    // ブログ一覧ページ
    add_rewrite_rule('^blog/?$', 'index.php?eyelash_page=blog', 'top');
    add_rewrite_rule('^blog/page/([0-9]+)/?$', 'index.php?eyelash_page=blog&paged=$matches[1]', 'top');
}
add_action('init', 'eyelash_rewrite_rules');

/**
 * テンプレートインクルード
 */
function eyelash_template_include($template)
{
    $eyelash_page = get_query_var('eyelash_page');

    if ($eyelash_page) {
        $theme_path = get_template_directory();

        switch ($eyelash_page) {
            case 'design':
                $design_id = get_query_var('design_id');
                if ($design_id) {
                    $file = $theme_path . '/design/' . sprintf('%02d', $design_id) . '.php';
                } else {
                    $file = $theme_path . '/design/index.php';
                }
                break;
            case 'menu':
                $file = $theme_path . '/menu/index.php';
                break;
            case 'access':
                $file = $theme_path . '/access/index.php';
                break;
            case 'faq':
                $file = $theme_path . '/faq/index.php';
                break;
            case 'info':
                $file = $theme_path . '/info/index.php';
                break;
            case 'page':
                $page_id = get_query_var('page_id');
                $file = $theme_path . '/page/' . sprintf('%02d', $page_id) . '.php';
                break;
            case 'care':
                $care_id = get_query_var('care_id');
                $file = $theme_path . '/care/' . sprintf('%02d', $care_id) . '.php';
                break;
            case 'blog':
                // ブログ一覧用のクエリを設定
                global $wp_query;
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 9,
                    'paged' => $paged,
                    'post_status' => 'publish',
                );
                $wp_query = new WP_Query($args);
                $file = $theme_path . '/archive.php';
                break;
            default:
                $file = null;
        }

        if ($file && file_exists($file)) {
            // 404ステータスを回避
            global $wp_query;
            $wp_query->is_404 = false;
            status_header(200);
            return $file;
        }
    }

    return $template;
}
add_filter('template_include', 'eyelash_template_include');

/**
 * フラッシュリライトルール（テーマ有効化時）
 */
add_action('after_switch_theme', 'eyelash_flush_rewrite_rules');

// 一時的な強制反映処理（反映後は削除可能）
flush_rewrite_rules();

/**
 * フッターにスクリプトを追加
 */
function eyelash_footer_scripts()
{
    ?>
    <script>
        (function () {
            // DOMが完全に読み込まれた後に実行
            document.addEventListener('DOMContentLoaded', function () {
                initHamburgerMenu();
            });

            // jQueryも読み込まれている場合の保険
            if (typeof jQuery !== 'undefined') {
                jQuery(document).ready(function () {
                    initHamburgerMenu();
                });
            }

            var menuInitialized = false;

            function initHamburgerMenu() {
                if (menuInitialized) return;

                var menuBtn = document.getElementById('js-menu-btn');
                var globalNav = document.getElementById('js-global-nav');

                if (!menuBtn || !globalNav) return;

                menuInitialized = true;

                // 既存のイベントリスナーを削除するためにクローンで置き換え
                var newMenuBtn = menuBtn.cloneNode(true);
                menuBtn.parentNode.replaceChild(newMenuBtn, menuBtn);
                menuBtn = newMenuBtn;

                // ハンバーガーメニューの開閉
                menuBtn.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    e.stopImmediatePropagation();

                    // クラスをトグル
                    this.classList.toggle('is-active');
                    globalNav.classList.toggle('is-active');

                    // bodyのスクロールを制御（メニューが開いている時はスクロール禁止）
                    if (globalNav.classList.contains('is-active')) {
                        document.body.style.overflow = 'hidden';
                    } else {
                        document.body.style.overflow = '';
                    }

                    return false;
                }, true);

                // メニュー内のリンクをクリックした時にメニューを閉じる
                var menuLinks = globalNav.querySelectorAll('a');
                menuLinks.forEach(function (link) {
                    link.addEventListener('click', function () {
                        // サブメニュートグル以外のリンクの場合
                        if (!this.classList.contains('sub-menu-toggle')) {
                            menuBtn.classList.remove('is-active');
                            globalNav.classList.remove('is-active');
                            document.body.style.overflow = '';
                        }
                    });
                });
            }

            // ページ読み込み完了後にも実行（外部スクリプトの後に確実に実行するため）
            window.addEventListener('load', function () {
                setTimeout(initHamburgerMenu, 100);
            });
        })();
    </script>
    <?php
}
add_action('wp_footer', 'eyelash_footer_scripts');

/**
 * ギャラリー用カスタム投稿タイプとタクソノミーの登録
 */
function eyelash_register_gallery_post_type()
{
    // ギャラリーカスタム投稿タイプ
    register_post_type('gallery', array(
        'labels' => array(
            'name' => 'ギャラリー',
            'singular_name' => 'ギャラリー',
            'add_new' => '新規ギャラリーを追加',
            'add_new_item' => 'ギャラリーを追加',
            'edit_item' => 'ギャラリーを編集',
            'view_item' => 'ギャラリーを表示',
            'search_items' => 'ギャラリーを検索',
            'not_found' => 'ギャラリーが見つかりません',
            'menu_name' => 'ギャラリー',
        ),
        'public' => true,
        'has_archive' => false,
        'rewrite' => false,
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => array('title', 'thumbnail'),
        'show_in_rest' => true,
    ));

    // メインカテゴリー（カスタムメタボックスを使用するためデフォルトUIを非表示）
    register_taxonomy('gallery_main_category', 'gallery', array(
        'labels' => array(
            'name' => 'メインカテゴリー',
            'singular_name' => 'メインカテゴリー',
            'add_new_item' => 'メインカテゴリーを追加',
            'new_item_name' => '新しいメインカテゴリー名',
            'edit_item' => 'メインカテゴリーを編集',
            'update_item' => 'メインカテゴリーを更新',
            'all_items' => 'すべてのメインカテゴリー',
            'search_items' => 'メインカテゴリーを検索',
            'menu_name' => 'メインカテゴリー',
        ),
        'hierarchical' => true,
        'public' => true,
        'rewrite' => false,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'meta_box_cb' => false, // デフォルトメタボックスを非表示
    ));

    // サブカテゴリー（カスタムメタボックスを使用するためデフォルトUIを非表示）
    register_taxonomy('gallery_subcategory', 'gallery', array(
        'labels' => array(
            'name' => 'サブカテゴリー',
            'singular_name' => 'サブカテゴリー',
            'add_new_item' => 'サブカテゴリーを追加',
            'new_item_name' => '新しいサブカテゴリー名',
            'edit_item' => 'サブカテゴリーを編集',
            'update_item' => 'サブカテゴリーを更新',
            'all_items' => 'すべてのサブカテゴリー',
            'search_items' => 'サブカテゴリーを検索',
            'menu_name' => 'サブカテゴリー',
        ),
        'hierarchical' => true,
        'public' => true,
        'rewrite' => false,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'meta_box_cb' => false, // デフォルトメタボックスを非表示
    ));
}
add_action('init', 'eyelash_register_gallery_post_type');

/**
 * サブカテゴリーに親メインカテゴリーのメタフィールドを追加
 */
function eyelash_add_subcategory_fields($taxonomy)
{
    $main_categories = get_terms(array(
        'taxonomy' => 'gallery_main_category',
        'hide_empty' => false,
    ));
    ?>
    <div class="form-field form-required">
        <label for="parent_main_category">親メインカテゴリー <span class="description">(必須)</span></label>
        <select name="parent_main_category" id="parent_main_category" required>
            <option value="">-- 選択してください --</option>
            <?php if (!is_wp_error($main_categories) && !empty($main_categories)): ?>
                <?php foreach ($main_categories as $cat): ?>
                    <option value="<?php echo esc_attr($cat->slug); ?>"><?php echo esc_html($cat->name); ?></option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>
        <p>このサブカテゴリーが属するメインカテゴリーを選択してください。</p>
    </div>
    <?php
}
add_action('gallery_subcategory_add_form_fields', 'eyelash_add_subcategory_fields');

/**
 * サブカテゴリー編集画面に親メインカテゴリーフィールドを追加
 */
function eyelash_edit_subcategory_fields($term)
{
    $parent_main_category = get_term_meta($term->term_id, 'parent_main_category', true);
    $main_categories = get_terms(array(
        'taxonomy' => 'gallery_main_category',
        'hide_empty' => false,
    ));
    ?>
    <tr class="form-field form-required">
        <th scope="row"><label for="parent_main_category">親メインカテゴリー <span class="description">(必須)</span></label></th>
        <td>
            <select name="parent_main_category" id="parent_main_category" required>
                <option value="">-- 選択してください --</option>
                <?php if (!is_wp_error($main_categories) && !empty($main_categories)): ?>
                    <?php foreach ($main_categories as $cat): ?>
                        <option value="<?php echo esc_attr($cat->slug); ?>" <?php selected($parent_main_category, $cat->slug); ?>>
                            <?php echo esc_html($cat->name); ?>
                        </option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
            <p class="description">このサブカテゴリーが属するメインカテゴリーを選択してください。</p>
        </td>
    </tr>
    <?php
}
add_action('gallery_subcategory_edit_form_fields', 'eyelash_edit_subcategory_fields');

/**
 * サブカテゴリーのメタフィールドを保存
 */
function eyelash_save_subcategory_fields($term_id)
{
    if (isset($_POST['parent_main_category'])) {
        update_term_meta($term_id, 'parent_main_category', sanitize_text_field($_POST['parent_main_category']));
    }
}
add_action('created_gallery_subcategory', 'eyelash_save_subcategory_fields');
add_action('edited_gallery_subcategory', 'eyelash_save_subcategory_fields');

/**
 * ギャラリー用のリライトルールを追加
 * URL構造: /gallery/, /gallery/{main-slug}/, /gallery/{main-slug}/{sub-slug}/
 */
function eyelash_gallery_rewrite_rules()
{
    // ギャラリートップページ（/gallery/）
    add_rewrite_rule('^gallery/?$', 'index.php?eyelash_page=gallery', 'top');
    add_rewrite_rule('^gallery/page/([0-9]+)/?$', 'index.php?eyelash_page=gallery&paged=$matches[1]', 'top');

    // メインカテゴリーページ（/gallery/{main-category-slug}/）
    add_rewrite_rule('^gallery/([^/]+)/?$', 'index.php?eyelash_page=gallery_category&gallery_main_cat=$matches[1]', 'top');
    add_rewrite_rule('^gallery/([^/]+)/page/([0-9]+)/?$', 'index.php?eyelash_page=gallery_category&gallery_main_cat=$matches[1]&paged=$matches[2]', 'top');

    // サブカテゴリーページ（/gallery/{main-category-slug}/{sub-category-slug}/）
    add_rewrite_rule('^gallery/([^/]+)/([^/]+)/?$', 'index.php?eyelash_page=gallery_subcategory&gallery_main_cat=$matches[1]&gallery_sub_cat=$matches[2]', 'top');
    add_rewrite_rule('^gallery/([^/]+)/([^/]+)/page/([0-9]+)/?$', 'index.php?eyelash_page=gallery_subcategory&gallery_main_cat=$matches[1]&gallery_sub_cat=$matches[2]&paged=$matches[3]', 'top');
}
add_action('init', 'eyelash_gallery_rewrite_rules', 20);

/**
 * メインカテゴリー追加・更新時にリライトルールを再生成
 */
function eyelash_flush_rewrite_on_category_change($term_id, $tt_id, $taxonomy)
{
    if ($taxonomy === 'gallery_main_category') {
        flush_rewrite_rules();
    }
}
add_action('created_term', 'eyelash_flush_rewrite_on_category_change', 10, 3);
add_action('edited_term', 'eyelash_flush_rewrite_on_category_change', 10, 3);
add_action('delete_term', 'eyelash_flush_rewrite_on_category_change', 10, 3);

/**
 * ギャラリー用のquery_varsを追加
 */
function eyelash_gallery_query_vars($vars)
{
    $vars[] = 'gallery_main_cat';
    $vars[] = 'gallery_sub_cat';
    return $vars;
}
add_filter('query_vars', 'eyelash_gallery_query_vars');

/**
 * 特定のメインカテゴリーに属するサブカテゴリーを取得
 */
function eyelash_get_subcategories_by_main($main_category_slug)
{
    $subcategories = get_terms(array(
        'taxonomy' => 'gallery_subcategory',
        'hide_empty' => false,
        'meta_query' => array(
            array(
                'key' => 'parent_main_category',
                'value' => $main_category_slug,
                'compare' => '=',
            ),
        ),
    ));

    return !is_wp_error($subcategories) ? $subcategories : array();
}

/**
 * すべてのメインカテゴリーを取得
 */
function eyelash_get_main_categories()
{
    $categories = get_terms(array(
        'taxonomy' => 'gallery_main_category',
        'hide_empty' => false,
        'orderby' => 'name',
        'order' => 'ASC',
    ));

    return !is_wp_error($categories) ? $categories : array();
}

/**
 * ギャラリーテンプレートのインクルード
 */
function eyelash_gallery_template_include($template)
{
    $eyelash_page = get_query_var('eyelash_page');
    $theme_path = get_template_directory();

    if ($eyelash_page === 'gallery') {
        global $wp_query;
        $wp_query->is_404 = false;
        status_header(200);
        return $theme_path . '/gallery/index.php';
    }

    if ($eyelash_page === 'gallery_category') {
        // メインカテゴリーが存在するか確認
        $main_cat_slug = get_query_var('gallery_main_cat');
        $main_category = get_term_by('slug', $main_cat_slug, 'gallery_main_category');

        if ($main_category) {
            global $wp_query;
            $wp_query->is_404 = false;
            status_header(200);
            return $theme_path . '/gallery/archive.php';
        }
    }

    if ($eyelash_page === 'gallery_subcategory') {
        // メインカテゴリーとサブカテゴリーが存在するか確認
        $main_cat_slug = get_query_var('gallery_main_cat');
        $sub_cat_slug = get_query_var('gallery_sub_cat');
        $main_category = get_term_by('slug', $main_cat_slug, 'gallery_main_category');
        $sub_category = get_term_by('slug', $sub_cat_slug, 'gallery_subcategory');

        if ($main_category && $sub_category) {
            global $wp_query;
            $wp_query->is_404 = false;
            status_header(200);
            return $theme_path . '/gallery/subcategory.php';
        }
    }

    return $template;
}
add_filter('template_include', 'eyelash_gallery_template_include', 5);

/**
 * ギャラリー設定メタボックスを追加
 */
function eyelash_add_gallery_metabox()
{
    add_meta_box(
        'gallery_settings',
        'ギャラリー設定',
        'eyelash_gallery_metabox_callback',
        'gallery',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'eyelash_add_gallery_metabox');

/**
 * ギャラリー設定メタボックスの内容
 */
function eyelash_gallery_metabox_callback($post)
{
    wp_nonce_field('eyelash_gallery_metabox', 'eyelash_gallery_metabox_nonce');

    // 現在選択されているカテゴリーを取得
    $current_main_cats = wp_get_post_terms($post->ID, 'gallery_main_category', array('fields' => 'ids'));
    $current_main_cat_id = !empty($current_main_cats) ? $current_main_cats[0] : 0;

    $current_sub_cats = wp_get_post_terms($post->ID, 'gallery_subcategory', array('fields' => 'ids'));
    $current_sub_cat_id = !empty($current_sub_cats) ? $current_sub_cats[0] : 0;

    // メインカテゴリー一覧を取得
    $main_categories = get_terms(array(
        'taxonomy' => 'gallery_main_category',
        'hide_empty' => false,
        'orderby' => 'name',
        'order' => 'ASC',
    ));

    // サブカテゴリー一覧を取得（親カテゴリー情報付き）
    $sub_categories = get_terms(array(
        'taxonomy' => 'gallery_subcategory',
        'hide_empty' => false,
        'orderby' => 'name',
        'order' => 'ASC',
    ));

    // サブカテゴリーの親情報をJSON形式で準備
    $sub_cat_data = array();
    foreach ($sub_categories as $sub_cat) {
        $parent_main = get_term_meta($sub_cat->term_id, 'parent_main_category', true);
        $sub_cat_data[$sub_cat->term_id] = array(
            'name' => $sub_cat->name,
            'parent_main' => $parent_main,
        );
    }
    ?>
    <style>
        .gallery-metabox-section {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .gallery-metabox-section:last-child {
            border-bottom: none;
        }
        .gallery-metabox-label {
            display: block;
            font-weight: 600;
            margin-bottom: 10px;
            color: #1e1e1e;
        }
        .gallery-metabox-label .required {
            color: #d63638;
            margin-left: 4px;
        }
        .gallery-metabox-note {
            font-size: 12px;
            color: #666;
            margin-top: 5px;
            font-weight: normal;
        }
        .gallery-category-list {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .gallery-category-list li {
            margin-bottom: 8px;
        }
        .gallery-category-list label {
            display: inline-flex;
            align-items: center;
            cursor: pointer;
        }
        .gallery-category-list input[type="radio"] {
            margin-right: 8px;
        }
        #gallery-subcategory-list {
            max-height: 200px;
            overflow-y: auto;
            border: 1px solid #ddd;
            padding: 10px;
            background: #fafafa;
        }
        .no-subcategories {
            color: #666;
            font-style: italic;
        }
    </style>

    <div class="gallery-metabox-section">
        <label class="gallery-metabox-label">
            メインカテゴリー<span class="required">*</span>
        </label>
        <?php if (!empty($main_categories) && !is_wp_error($main_categories)): ?>
            <ul class="gallery-category-list" id="gallery-main-category-list">
                <?php foreach ($main_categories as $cat): ?>
                    <li>
                        <label>
                            <input type="radio" 
                                   name="gallery_main_category" 
                                   value="<?php echo esc_attr($cat->term_id); ?>"
                                   data-slug="<?php echo esc_attr($cat->slug); ?>"
                                   <?php checked($current_main_cat_id, $cat->term_id); ?>>
                            <?php echo esc_html($cat->name); ?>
                        </label>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p class="no-subcategories">メインカテゴリーが登録されていません。<a href="<?php echo admin_url('edit-tags.php?taxonomy=gallery_main_category&post_type=gallery'); ?>">メインカテゴリーを追加</a></p>
        <?php endif; ?>
    </div>

    <div class="gallery-metabox-section">
        <label class="gallery-metabox-label">
            サブカテゴリー
            <span class="gallery-metabox-note">※ギャラリーに紐づいているサブカテゴリーを削除した場合、Guestギャラリーページの「一覧」にだけ表示されます。</span>
        </label>
        <div id="gallery-subcategory-list">
            <?php if (!empty($sub_categories) && !is_wp_error($sub_categories)): ?>
                <ul class="gallery-category-list">
                    <?php foreach ($sub_categories as $sub_cat): 
                        $parent_main = get_term_meta($sub_cat->term_id, 'parent_main_category', true);
                        // 現在のメインカテゴリーに紐づくサブカテゴリーのみ表示（初期状態）
                        $current_main_slug = '';
                        if ($current_main_cat_id) {
                            $current_main_term = get_term($current_main_cat_id, 'gallery_main_category');
                            if ($current_main_term && !is_wp_error($current_main_term)) {
                                $current_main_slug = $current_main_term->slug;
                            }
                        }
                        $display = ($parent_main === $current_main_slug) ? '' : 'display:none;';
                    ?>
                        <li class="subcategory-item" data-parent="<?php echo esc_attr($parent_main); ?>" style="<?php echo $display; ?>">
                            <label>
                                <input type="radio" 
                                       name="gallery_subcategory" 
                                       value="<?php echo esc_attr($sub_cat->term_id); ?>"
                                       <?php checked($current_sub_cat_id, $sub_cat->term_id); ?>>
                                <?php echo esc_html($sub_cat->name); ?>
                            </label>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p class="no-subcategories">サブカテゴリーが登録されていません。<a href="<?php echo admin_url('edit-tags.php?taxonomy=gallery_subcategory&post_type=gallery'); ?>">サブカテゴリーを追加</a></p>
            <?php endif; ?>
        </div>
    </div>

    <script>
    jQuery(document).ready(function($) {
        // メインカテゴリー変更時にサブカテゴリーをフィルタリング
        $('input[name="gallery_main_category"]').on('change', function() {
            var selectedSlug = $(this).data('slug');
            
            // すべてのサブカテゴリーを非表示
            $('.subcategory-item').hide();
            
            // 選択したメインカテゴリーに紐づくサブカテゴリーのみ表示
            $('.subcategory-item[data-parent="' + selectedSlug + '"]').show();
            
            // サブカテゴリーの選択をリセット
            $('input[name="gallery_subcategory"]').prop('checked', false);
        });
    });
    </script>
    <?php
}

/**
 * ギャラリー設定メタボックスの保存
 */
function eyelash_save_gallery_metabox($post_id)
{
    // nonceチェック
    if (!isset($_POST['eyelash_gallery_metabox_nonce']) ||
        !wp_verify_nonce($_POST['eyelash_gallery_metabox_nonce'], 'eyelash_gallery_metabox')) {
        return;
    }

    // 自動保存の場合は何もしない
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // 権限チェック
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // メインカテゴリーを保存
    if (isset($_POST['gallery_main_category'])) {
        $main_cat_id = intval($_POST['gallery_main_category']);
        wp_set_post_terms($post_id, array($main_cat_id), 'gallery_main_category');
    } else {
        wp_set_post_terms($post_id, array(), 'gallery_main_category');
    }

    // サブカテゴリーを保存
    if (isset($_POST['gallery_subcategory'])) {
        $sub_cat_id = intval($_POST['gallery_subcategory']);
        wp_set_post_terms($post_id, array($sub_cat_id), 'gallery_subcategory');
    } else {
        wp_set_post_terms($post_id, array(), 'gallery_subcategory');
    }
}
add_action('save_post_gallery', 'eyelash_save_gallery_metabox');


/**
 * 管理画面でギャラリーカテゴリーの「親カテゴリー」と「説明」を非表示にする
 */
function eyelash_hide_gallery_category_fields()
{
    echo '<style>
        /* メインカテゴリー・サブカテゴリーのリスト画面と編集画面で適用 */
        
        /* メインカテゴリー */
        body.taxonomy-gallery_main_category .term-description-wrap,
        body.taxonomy-gallery_main_category .term-parent-wrap {
            display: none;
        }

        /* サブカテゴリー */
        body.taxonomy-gallery_subcategory .term-description-wrap,
        body.taxonomy-gallery_subcategory .term-parent-wrap {
            display: none;
        }
    </style>';
}
add_action('admin_head', 'eyelash_hide_gallery_category_fields');
/**
 * 管理画面でギャラリーカテゴリーの「名前」と「スラッグ」を必須にする
 */
function eyelash_require_gallery_category_name_slug() {
    $screen = get_current_screen();
    if ($screen && in_array($screen->taxonomy, array('gallery_main_category', 'gallery_subcategory'), true)) {
        ?>
        <script>
            jQuery(document).ready(function($) {
                // 名前とスラッグのinput要素にrequired属性を追加
                $('#tag-name, #tag-slug').prop('required', true);
                
                // ラベルに「必須」マークを追加
                $('label[for="tag-name"]').append(' <span class="required" style="color:red;">*</span>');
                $('label[for="tag-slug"]').append(' <span class="required" style="color:red;">*</span>');
            });
        </script>
        <?php
    }
}
add_action('admin_footer', 'eyelash_require_gallery_category_name_slug');

/**
 * サブカテゴリー一覧に「親メインカテゴリー」カラムを追加
 */
function eyelash_gallery_subcategory_columns($columns) {
    // 親メインカテゴリーをスラグの後ろに追加
    $new_columns = array();
    foreach ($columns as $key => $value) {
        $new_columns[$key] = $value;
        if ($key === 'slug') {
            $new_columns['parent_main_category'] = '親メインカテゴリー';
        }
    }
    return $new_columns;
}
add_filter('manage_edit-gallery_subcategory_columns', 'eyelash_gallery_subcategory_columns');

/**
 * サブカテゴリー一覧のカラム内容を表示
 */
function eyelash_gallery_subcategory_custom_column($content, $column_name, $term_id) {
    if ($column_name === 'parent_main_category') {
        $parent_main_cat_slug = get_term_meta($term_id, 'parent_main_category', true);
        if ($parent_main_cat_slug) {
            $parent_main_cat = get_term_by('slug', $parent_main_cat_slug, 'gallery_main_category');
            if ($parent_main_cat) {
                // 親カテゴリーの編集画面へのリンクを作成
                $edit_link = get_edit_term_link($parent_main_cat->term_id, 'gallery_main_category');
                $content = '<a href="' . esc_url($edit_link) . '">' . esc_html($parent_main_cat->name) . '</a>';
            } else {
                $content = esc_html($parent_main_cat_slug . ' (削除済み)');
            }
        } else {
            $content = '-';
        }
    }
    return $content;
}
add_filter('manage_gallery_subcategory_custom_column', 'eyelash_gallery_subcategory_custom_column', 10, 3);

/**
 * ギャラリー一覧にアイキャッチ画像を表示
 */
function eyelash_add_gallery_columns($columns) {
    // チェックボックスの後にサムネイルカラムを追加
    $new_columns = array();
    foreach ($columns as $key => $value) {
        if ($key === 'cb') {
            $new_columns[$key] = $value;
            $new_columns['thumbnail'] = '画像';
        } else {
            $new_columns[$key] = $value;
        }
    }
    return $new_columns;
}
add_filter('manage_gallery_posts_columns', 'eyelash_add_gallery_columns');

function eyelash_gallery_custom_column($column, $post_id) {
    if ($column === 'thumbnail') {
        if (has_post_thumbnail($post_id)) {
            echo get_the_post_thumbnail($post_id, array(80, 80));
        } else {
            echo 'なし';
        }
    }
}
add_action('manage_gallery_posts_custom_column', 'eyelash_gallery_custom_column', 10, 2);

/**
 * 管理画面のアイキャッチ画像カラムのスタイル
 */
function eyelash_gallery_column_style() {
    echo '<style>
        .column-thumbnail {
            width: 80px;
        }
        .column-thumbnail img {
            width: 100%;
            height: auto;
        }
    </style>';
}
add_action('admin_head', 'eyelash_gallery_column_style');
