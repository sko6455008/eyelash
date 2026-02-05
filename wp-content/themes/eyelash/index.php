<?php
/**
 * メインテンプレートファイル
 *
 * WordPressテンプレート階層のフォールバックテンプレート
 *
 * @package Eyelash
 */

get_header();
?>

<main class="l-main">
  <div class="l-inner">
    <div class="l-contents">
      <div class="l-primary">
        <?php if (have_posts()): ?>
          <section class="p-index-content">
            <header class="p-index-content__header">
              <h2 class="p-index-content__header-title" style="background: #111111; color: #ffffff; font-size: 34px;">
                Posts<span style="color: #ffffff; font-size: 12px;">投稿一覧</span></h2>
            </header>
            <div class="p-index-content__news">
              <ul class="p-latest-news">
                <?php while (have_posts()):
                  the_post(); ?>
                  <li class="p-latest-news__item p-article05">
                    <a href="<?php the_permalink(); ?>" class="p-hover-effect--type2">
                      <?php if (has_post_thumbnail()): ?>
                        <div class="p-article05__img">
                          <?php the_post_thumbnail('medium'); ?>
                        </div>
                      <?php endif; ?>
                      <div class="p-article05__content">
                        <h3 class="p-article05__title"><?php the_title(); ?></h3>
                        <time class="p-article05__date"
                          datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
                      </div>
                    </a>
                  </li>
                <?php endwhile; ?>
              </ul>
            </div>
          </section>

          <?php the_posts_navigation(); ?>

        <?php else: ?>
          <section class="p-index-content">
            <header class="p-index-content__header">
              <h2 class="p-index-content__header-title" style="background: #111111; color: #ffffff; font-size: 34px;">No
                Content<span style="color: #ffffff; font-size: 12px;">コンテンツがありません</span></h2>
            </header>
            <div class="p-index-content__news">
              <p>お探しのコンテンツが見つかりませんでした。</p>
            </div>
          </section>
        <?php endif; ?>
      </div>

      <!--  right -->
      <?php get_sidebar(); ?>
      <!--  End of right -->

    </div>
  </div>
</main>

<?php get_footer(); ?>