<?php
/**
 * FAQページテンプレート
 *
 * @package Eyelash
 */

get_header();
$theme_uri = get_template_directory_uri();
?>

<main class="l-main">
  <ul class="p-breadcrumb c-breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
    <li class="p-breadcrumb__item c-breadcrumb__item c-breadcrumb__item--home" itemprop="itemListElement" itemscope=""
      itemtype="https://schema.org/ListItem">
      <a href="<?php echo esc_url(home_url('/')); ?>" itemscope="" itemtype="https://schema.org/Thing" itemprop="item">
        <span itemprop="name">HOME</span>
      </a>
      <meta itemprop="position" content="1">
    </li>
    <li class="p-breadcrumb__item c-breadcrumb__item">FAQ(よくあるご質問)</li>
  </ul>
  <header class="p-page-header" style="background: #b7aa9d;">
    <div class="p-page-header__inner l-inner">
      <h1 class="p-page-header__title" style="background: #000000; color: #ffffff; font-size: 34px;">FAQ<span
          class="p-page-header__sub" style="color: #ffffff; font-size: 12px;">よくあるご質問</span></h1>
      <p class="p-page-header__desc" style="color: ;">よくお問い合わせいただくご質問と回答</p>
    </div>
  </header>
  <div class="l-main__inner l-inner">
    <ul class="p-breadcrumb c-breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
      <li class="p-breadcrumb__item c-breadcrumb__item c-breadcrumb__item--home" itemprop="itemListElement" itemscope=""
        itemtype="https://schema.org/ListItem">
        <a href="<?php echo esc_url(home_url('/')); ?>" itemscope="" itemtype="https://schema.org/Thing"
          itemprop="item">
          <span itemprop="name">HOME</span>
        </a>
        <meta itemprop="position" content="1">
      </li>
      <li class="p-breadcrumb__item c-breadcrumb__item">FAQ(よくあるご質問)</li>
    </ul>
    <div class="l-contents">
      <div class="l-primary">
        <article class="p-entry">
          <div class="p-entry__body">

            <section class="p-faq-section">
              <h3 class="p-faq-section__title">ご来店前について</h3>
              <img width="770" height="240" src="<?php echo esc_url($theme_uri); ?>/faq/02.jpg" alt="ご来店前のよくある質問" class="p-faq-section__img" />

              <div class="p-faq-list">
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">アイラッシュとは？</summary>
                  <p class="p-faq-item__answer">専用の接着剤を使い、自まつ毛に1本1本つけていきます。</p>
                </details>
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">自まつ毛が少なくても平気？</summary>
                  <p class="p-faq-item__answer">自まつ毛の生えていないところに接着することはできませんが、少なくとも片目約60本くらいは生えていますので、接着は可能です。</p>
                </details>
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">どのくらいの時間がかかるの？</summary>
                  <p class="p-faq-item__answer">施術するメニューの内容にもよりますが、初回カウンセリングを含めまして1時間30分〜2時間くらいです。</p>
                </details>
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">どのくらいもちますか？</summary>
                  <p class="p-faq-item__answer">アフターケアにもよりますが約3週間〜1ヶ月です。自まつげの周期とともにエクステンションも少しずつ抜け落ちていきます。</p>
                </details>
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">自まつ毛は痛みませんか？</summary>
                  <p class="p-faq-item__answer">多少の負担をかけることにはなりますが無理に引っ張ったりしなければ痛むことはありません。ビューラーやマスカラ、まつ毛パーマ等よりは負担が少ないので自まつ毛が元気になる方もいらっしゃいます。美容液などで自まつ毛のケアをしていただくのが理想的です。</p>
                </details>
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">初めてなので似合うかどうか心配です。</summary>
                  <p class="p-faq-item__answer">目の形やまぶたに合わせてスタイルのご提案をしますのでご安心ください。</p>
                </details>
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">しみたり痛くありませんか？</summary>
                  <p class="p-faq-item__answer">接着剤は揮発性が高く、表面が乾かないうちに目を開けるとしみることがありますので、完成するまでは目は閉じたままでお願いしております。</p>
                </details>
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">コンタクトをつけていますが施術できますか？</summary>
                  <p class="p-faq-item__answer">施術中は目を閉じたままになりますので、ドライアイなど気になる場合ははずしていただくことをお勧めします。</p>
                </details>
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">接着剤は安全ですか？</summary>
                  <p class="p-faq-item__answer">歯医者さん等が医療用に使用している接着剤の成分なので安全です。</p>
                </details>
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">まつ毛パーマをかけていますがエクステンションは出来ますか？</summary>
                  <p class="p-faq-item__answer">自まつ毛自体が痛んでしまっているとエクステンションの持ちが悪くなってしまうこともございますが可能でございます。</p>
                </details>
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">下向きにまつ毛が生えているんですが大丈夫ですか？</summary>
                  <p class="p-faq-item__answer">自まつ毛の下向き具合にもよりますが、ほとんどの方は接着可能です。</p>
                </details>
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">下まつ毛にも付けられますか？</summary>
                  <p class="p-faq-item__answer">下まつげにも接着することでより華やかな目元になります。※状態によっては付けられない場合もございます。</p>
                </details>
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">お化粧したままでも大丈夫ですか？</summary>
                  <p class="p-faq-item__answer">こちらでポイントメイク落としでオフいたしますので大丈夫です。お時間の10分前くらいにご来店いただければと思います。</p>
                </details>
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">自まつ毛が細くて短いのですが大丈夫でしょうか？</summary>
                  <p class="p-faq-item__answer">日本人のまつ毛の平均的な長さは6ミリ〜11ミリと欧米人に比べて短めですが、5mm以上であれば問題なく接着できます。自まつ毛が細いという方には負担がかからないように細めのエクステンションを接着していきます。</p>
                </details>
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">他店で付けたエクステがまだ残っているのですが...</summary>
                  <p class="p-faq-item__answer">他店での施術につけ足すことも可能ですが、状態をみてオフしてつけなおすことをオススメする場合もございます。</p>
                </details>
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">不自然にならないですか？</summary>
                  <p class="p-faq-item__answer">当店のアイラッシュは、自まつげ一本に対しエクステを一本装着しますので、仕上がりはとても自然です。つけていることを気づかれたくないお客様にもご好評いただいております。</p>
                </details>
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">初めてですが、何本くらいが良いのですか？</summary>
                  <p class="p-faq-item__answer">自然に仕上げたい場合は80本〜100本（両目）、アイライン効果が欲しい場合は100〜120本（両目）をおすすめしております。</p>
                </details>
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">眼鏡にあたりませんか？</summary>
                  <p class="p-faq-item__answer">普段お使いの眼鏡をご持参ください、それに合わせて当たらない長さのアイラッシュでご提案させていただきます。</p>
                </details>
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">施術後、すぐに化粧はできますか？</summary>
                  <p class="p-faq-item__answer">施術直後は接着剤は完全に乾ききっていないので目のまわりのお化粧とマスカラは避けてください。</p>
                </details>
              </div>
            </section>

            <section class="p-faq-section">
              <h3 class="p-faq-section__title">ご来店後</h3>
              <img width="770" height="240" src="<?php echo esc_url($theme_uri); ?>/faq/01.jpg?213" alt="ご来店後のよくある質問" class="p-faq-section__img" />

              <div class="p-faq-list">
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">洗顔や入浴など水に濡らすことは大丈夫？</summary>
                  <p class="p-faq-item__answer">施術後5〜6時間はアイラッシュを濡らさないように注意してください。表面は乾いているようでも芯の部分が乾いていないと目に染みてしまうこともございます。洗顔に関しましては、強いシャワーをお顔にあてたり、強く擦らないように気をつけてください。オイルクレンジングはさけていただいてジェルタイプのものをオススメしています。</p>
                </details>
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">プールやサウナはOK？</summary>
                  <p class="p-faq-item__answer">日焼け止めやオイルなどは、アイラッシュが早く取れてしまう原因になりますので気をつけてください。</p>
                </details>
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">ホットヨガなど汗をかくスポーツですぐ取れたりしませんか？</summary>
                  <p class="p-faq-item__answer">当日は汗をかく行為は避けてください。接着剤が乾ききった翌日からでしたら問題ございません。</p>
                </details>
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">マスカラを塗ってもいいですか？</summary>
                  <p class="p-faq-item__answer">アイラッシュ専用のマスカラをおすすめしています。</p>
                </details>
                <details class="p-faq-item">
                  <summary class="p-faq-item__question">施術後にビューラーは使えますか？</summary>
                  <p class="p-faq-item__answer">なで上げるタイプのホットビューラーはお使いいただけます。</p>
                </details>
              </div>
            </section>

          </div>
        </article>
      </div>
      <!--  right -->
      <?php get_sidebar(); ?>
      <!--  End of right -->
    </div>
  </div>
</main>

<?php get_footer(); ?>
