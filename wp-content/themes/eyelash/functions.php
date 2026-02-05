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

