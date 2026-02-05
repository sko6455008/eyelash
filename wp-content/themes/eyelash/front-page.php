<?php
/**
 * フロントページテンプレート
 *
 * @package Eyelash
 */

get_header();
$theme_uri = get_template_directory_uri();
?>

<main class="l-main">
    <div class="p-header-content">
        <div id="js-header-slider" class="p-header-slider">
            <div class="p-header-slider__item p-header-slider__item1"
                style="background-image: url('<?php echo esc_url($theme_uri); ?>/photo/601.png?1255');">
                <div class="p-header-slider__item-inner">
                    <!--s  <h2 class="p-header-slider__item-title">Beauty For Your LifeStyle.</h2> -->
                </div>
            </div>
            <div class="p-header-slider__item p-header-slider__item1"
                style="background-image: url('<?php echo esc_url($theme_uri); ?>/photo/602.png?1255');">
                <div class="p-header-slider__item-inner">
                    <!--s  <h2 class="p-header-slider__item-title">Beauty For Your LifeStyle.</h2> -->
                </div>
            </div>
        </div>
        <div class="p-news-ticker">
            <div id="js-news-ticker" class="p-news-ticker__inner l-inner">
                <ul id="js-news-ticker__list" class="p-news-ticker__list">
                    <li class="p-news-ticker__list-item">
                        <time class="p-news-ticker__list-item-date" datetime="2017-12-26">2026.02.01</time>
                        <a href="https://eyelist.work/" class="p-news-ticker__list-item-title"
                            target="_blank">わたしたちと一緒に働きませんか？楽しい仲間を随時募集しております。</a>
                    </li>
                    <li class="p-news-ticker__list-item">
                        <time class="p-news-ticker__list-item-date" datetime="2017-12-26">2026.02.01</time>
                        <a href="https://eyelist.work/" class="p-news-ticker__list-item-title"
                            target="_blank">わたしたちと一緒に働きませんか？楽しい仲間を随時募集しております。</a>
                    </li>
                    <li class="p-news-ticker__list-item">
                        <time class="p-news-ticker__list-item-date" datetime="2017-12-26">2026.02.01</time>
                        <a href="https://eyelist.work/" class="p-news-ticker__list-item-title"
                            target="_blank">わたしたちと一緒に働きませんか？楽しい仲間を随時募集しております。</a>
                    </li>
                </ul>
                <a id="js-news-ticker__btn" href="#" class="p-news-ticker__btn p-btn">詳細を見る</a>
            </div>
        </div>
    </div>
    <div class="l-inner">
        <div class="l-contents">
            <div class="l-primary">
                <section class="p-index-content">
                    <header class="p-index-content__header">
                        <h2 class="p-index-content__header-title"
                            style="background: #111111; color: #ffffff; font-size: 34px;">News<span
                                style="color: #ffffff; font-size: 12px;">お知らせ</span></h2>
                        <p class="p-index-content__header-desc">当店の最新情報をチェック。<br />
                            クーポン、新しいスタイリング情報を配信します。<br>
                            WEBサイト限定情報も配信中！</p>
                    </header>
                    <div class="p-index-content__news">
                        <ul class="p-latest-news">
                            <li class="p-latest-news__item p-article05">
                                <a href="https://apps.apple.com/jp/app/molreve-%E3%83%A2%E3%83%AB%E3%83%AC%E3%83%BC%E3%83%B4/id1427332277"
                                    class="p-hover-effect--type2">
                                    <div class="p-article05__img">
                                        <img width="300" height=""
                                            src="<?php echo esc_url($theme_uri); ?>/photo/300.jpg?1905" />
                                    </div>
                                    <div class="p-article05__content">
                                        <h3 class="p-article05__title">モルレーヴ専用予約アプリが登場！【限定クーポン】で簡単即時予約が可能です。</h3>
                                        <time class="p-article05__date" datetime="2017-04-20"></time>
                                    </div>
                                </a>
                            </li>
                            <li class="p-latest-news__item p-article05">
                                <a href="<?php echo esc_url(home_url('/design/')); ?>" class="p-hover-effect--type2">
                                    <div class="p-article05__img">
                                        <img width="300" height=""
                                            src="<?php echo esc_url($theme_uri); ?>/photo/301.jpg?1905" />
                                    </div>
                                    <div class="p-article05__content">
                                        <h3 class="p-article05__title">当店のラッシュデザイン・スタイルはこちらからチェック。お好みのスタイルを見つけてください。
                                        </h3>

                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>

                </section>
                <section class="p-index-content">
                    <header class="p-index-content__header">
                        <h2 class="p-index-content__header-title"
                            style="background: #111111; color: #ffffff; font-size: 34px;">Gallery<span
                                style="color: #ffffff; font-size: 12px;">ギャラリー</span></h2>
                        <p class="p-index-content__header-desc">細部まで徹底したモルレーヴのこだわりをご堪能ください。</p>
                    </header>

                    <img src="<?php echo esc_url($theme_uri); ?>/photo/400.png" width="100%">

                </section>

            </div>
            <!--  right -->
            <?php get_sidebar(); ?>
            <!--  End of right -->

        </div>
    </div>
</main>

<script>jQuery(function (t) { if (t("#js-news-ticker").length) { var e, a = t("#js-news-ticker__list"), r = t(".p-news-ticker__list-item:first-child", a), i = t("#js-news-ticker__btn"); r.addClass("is-active"), i.attr("href", r.children("a").attr("href")).attr("target", r.children("a").attr("target") ? "_blank" : ""), e = setInterval(function () { t(".is-active", a).next().addClass("is-active").end().removeClass("is-active").appendTo(a), i.attr("href", t(".is-active a", a).attr("href")).attr("target", t(".is-active a", a).attr("target") ? "_blank" : "") }, 5e3) } });</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = { "apiSettings": { "root": "<?php echo esc_url(rest_url('contact-form-7/v1')); ?>", "namespace": "contact-form-7\/v1" } };
    /* ]]> */
</script>
<script>
    jQuery(function (e) { function i() { e("#js-header-slider").slick({ autoplay: !0, autoplaySpeed: 5000, infinite: !0, slidesToShow: 1, responsive: [{ breakpoint: 768, settings: { arrows: !1 } }], speed: 1000 }) } if (e("#site_loader_overlay").length) { var s = 3e3, a = e("body").height(); e("#site_wrap").css("display", "none"), e("body").height(a), e(window).load(function () { e("#site_wrap").css("display", "block"), e(".slick-slider").length && e(".slick-slider").slick("setPosition"), e("body").height(""), e("#site_loader_animation").delay(600).fadeOut(400), e("#site_loader_overlay").delay(900).fadeOut(800, i) }), e(function () { setTimeout(function () { e("#site_loader_animation").delay(600).fadeOut(400), e("#site_loader_overlay").delay(900).fadeOut(800), e("#site_wrap").css("display", "block") }, s) }) } else i() });
</script>

<?php get_footer(); ?>