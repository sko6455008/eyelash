<?php
/**
 * 404ページテンプレート
 *
 * @package Eyelash
 */

get_header();
?>

<main class="l-main">
    <div class="l-inner">
        <div class="l-contents">
            <div class="l-primary">
                <section class="p-index-content">
                    <header class="p-index-content__header">
                        <h2 class="p-index-content__header-title"
                            style="background: #111111; color: #ffffff; font-size: 34px;">404 Not Found<span
                                style="color: #ffffff; font-size: 12px;">ページが見つかりません</span></h2>
                    </header>
                    <div class="p-index-content__news" style="padding: 40px 20px;">
                        <p style="text-align: center; font-size: 16px; line-height: 2;">
                            申し訳ございませんが、お探しのページが見つかりませんでした。<br>
                            ページが削除されたか、URLが変更された可能性があります。
                        </p>
                        <p style="text-align: center; margin-top: 30px;">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-contact__appointment p-btn"
                                style="display: inline-block; text-decoration: none;">トップページへ戻る</a>
                        </p>
                    </div>
                </section>
            </div>

            <!--  right -->
            <?php get_sidebar(); ?>
            <!--  End of right -->

        </div>
    </div>
</main>

<?php get_footer(); ?>