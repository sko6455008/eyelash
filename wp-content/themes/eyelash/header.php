<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>
        <?php wp_title('|', true, 'right'); ?>
        <?php bloginfo('name'); ?>
    </title>
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta property="og:title" content="<?php bloginfo('name'); ?>">
    <meta property="og:description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
    <meta property="og:image" content="https://eyelash.jp/wp-content/uploads/2017/12/sp_slide1.jpg">
    <meta property="og:image:secure_url" content="https://eyelash.jp/wp-content/uploads/2017/12/sp_slide1.jpg">
    <meta property="og:image:width" content="980">
    <meta property="og:image:height" content="760">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@designplus1">
    <meta name="twitter:creator" content="designplus1">
    <meta name="twitter:title" content="<?php bloginfo('name'); ?>">
    <meta property="twitter:description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
    <meta name="twitter:image:src" content="https://eyelash.jp/wp-content/uploads/2017/12/sp_slide1-510x320.jpg">
    <link rel="shortcut icon" href="https://eyelash.jp/wp-content/uploads/2017/12/favicon.png">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div id="site_wrap">

        <header id="js-header" class="l-header">
            <div class="l-header__inner l-inner">
                <h1 class="l-header__logo c-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="https://eyelash.jp/logo.png" style="" class="pconly">
                        <img src="https://eyelash.jp/logo.png" style="width: 85%;" class="sponly">
                    </a>
                </h1>
                <p class="l-header__desc" style="display: none;">池袋駅西口3分 池袋マツエクなら美容所登録サロン MOLREVE ( モルレーヴ )</p>
                <div class="l-header__contact" style="display: flex; align-items: center;">
                    <a href="https://www.instagram.com/molreve_eyelash/" class="p-header-sns" target="_blank"
                        style="margin-right: 15px; color: #fff; font-size: 24px;"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="https://071f0f.b-merit.jp/0344057222/web/" class="p-contact__appointment p-btn"
                        target="_blank">WEB予約する</a>
                </div>
            </div>
            <a href="<?php echo esc_url(home_url('/')); ?>" id="js-menu-btn" class="p-menu-btn c-menu-btn"></a>
            <nav id="js-global-nav" class="p-global-nav">
                <div class="p-global-nav__header-actions">
                    <a href="https://www.instagram.com/molreve_eyelash/" class="p-global-nav__sns" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://071f0f.b-merit.jp/0344057222/web/" class="p-global-nav__reservation-btn"
                        target="_blank">WEB予約する</a>
                </div>
                <ul class="p-global-nav__inner">
                    <li id="menu-item-1553"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1553">
                        <a href="<?php echo esc_url(home_url('/')); ?>">Top<span class="sub-title">トップページ</span><span
                                class="sub-menu-toggle"></span></a>
                    </li>
                    <li id="menu-item-1555"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1555">
                        <a href="<?php echo esc_url(home_url('/info/')); ?>">Info<span
                                class="sub-title">インフォメーション</span><span class="sub-menu-toggle"></span></a>
                    </li>
                    <li id="menu-item-1555"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1555">
                        <a href="<?php echo esc_url(home_url('/design/')); ?>">Design<span
                                class="sub-title">デザイン</span><span class="sub-menu-toggle"></span></a>
                        <ul class="sub-menu">
                            <li id="menu-item-1936"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1936">
                                <a href="<?php echo esc_url(home_url('/design/01.php')); ?>">Lカール<span
                                        class="sub-title"></span><span class="sub-menu-toggle"></span></a>
                            </li>
                            <li id="menu-item-1935"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1935">
                                <a href="<?php echo esc_url(home_url('/design/02.php')); ?>">ボリュームラッシュ<span
                                        class="sub-title"></span><span class="sub-menu-toggle"></span></a>
                            </li>
                            <li id="menu-item-1934"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1934">
                                <a href="<?php echo esc_url(home_url('/design/03.php')); ?>">フラットラッシュ<span
                                        class="sub-title"></span><span class="sub-menu-toggle"></span></a>
                            </li>
                            <li id="menu-item-1933"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1933">
                                <a href="<?php echo esc_url(home_url('/design/04.php')); ?>">最高級セーブル<span
                                        class="sub-title"></span><span class="sub-menu-toggle"></span></a>
                            </li>
                            <li id="menu-item-1932"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1932">
                                <a href="<?php echo esc_url(home_url('/design/05.php')); ?>">まつ毛パーマ<span
                                        class="sub-title"></span><span class="sub-menu-toggle"></span></a>
                            </li>
                            <li id="menu-item-1932"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1932">
                                <a href="<?php echo esc_url(home_url('/design/06.php')); ?>">アイブロウ<span
                                        class="sub-title"></span><span class="sub-menu-toggle"></span></a>
                            </li>
                        </ul>
                    </li>
                    <li id="menu-item-1552"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1552">
                        <a title="メニュー" href="<?php echo esc_url(home_url('/menu/')); ?>">Menu<span
                                class="sub-title">メニュー</span><span class="sub-menu-toggle"></span></a>
                    </li>
                    <li id="menu-item-1556"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1556">
                        <a href="<?php echo esc_url(home_url('/faq/')); ?>">FAQ<span
                                class="sub-title">よくある質問</span><span class="sub-menu-toggle"></span></a>
                    </li>
                    <li id="menu-item-1560"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1560">
                        <a href="https://eyelist.work/" target="_blank">Recruit<span class="sub-title">リクルート</span><span
                                class="sub-menu-toggle"></span></a>
                    </li>
                    <li id="menu-item-1563"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1563">
                        <a href="<?php echo esc_url(home_url('/access/')); ?>">Access<span
                                class="sub-title">アクセス</span><span class="sub-menu-toggle"></span></a>
                    </li>
                </ul>
            </nav>
        </header>