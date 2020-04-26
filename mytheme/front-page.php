<?php get_header(); ?>



<?php if(have_posts()): while(have_posts()):the_post(); ?>
  <article <?php post_class( 'mycontainer' ); ?>>
    <div class="eyecatch alignfull">
      <h1>
        uraura<br>portfolio<br>site<br>
      </h1>
    </div>

    <section class="profile">
      <h2 class="text-center">Who is uraura?</h2>

      <?php echo "<img src='https://uraura-design.site/wp-content/uploads/2020/04/profile.png'>" ?>

      <p>初めましてurauraです。ポートフォリオサイトを見ていただき、誠にありがとうございます!</p>

      <p>現在22歳。大学3年の3月に社員2名の企業に内定。内定後はインターンとして働く。同年12月に内定を辞退。</p>

      <p>「自分が情熱を捧げることができることを仕事にしたい」と思い、Web業界への就職を目指し就職活動中。</p>

      <p>趣味は映画鑑賞・Star Wars グッズ収集・フットサル・釣り・サイクリングなど</p>
    </section>

    <section>
      
      <h2 class="text-center">Portfolios</h2>

      <?php
        $posts = get_posts(array(
        'posts_per_page' => 5,
        'category' => '7'
        ));
      ?>
        <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
          <a href="<?php the_permalink(); ?>">
            <div class="portfolio-post">
              <figure class="alignfull">
                <?php if( has_post_thumbnail() ): ?>
                    <?php the_post_thumbnail();  ?>
                <?php endif; ?>
              </figure>
              <h3 class="text-center"><?php the_title(); ?></h3>
            </div>
          </a>
        <?php endforeach; endif; ?>

      <a href="https://uraura-design.site/category/portfolio/">
        <div class="btna text-center">
          <span class="text-center">portfolios一覧を見る</span>
        </div>
      </a>

    </section>

    <section>
      <h2 class="text-center">Characteristics</h2>

      <ul>
        <li class="character-items">
          <div class="character-box">
            <?php echo "<img src='https://uraura-design.site/wp-content/themes/mytheme/img/top/chara1.png'>" ?>

            <div class="character-text">
              <p>新しいこと、自分の興味のあるモノゴトにはどんどん挑戦していきます。</p>
            </div>
          </div>
        </li>

        <li class="character-items">
          <div class="character-box">
            <?php echo "<img src='https://uraura-design.site/wp-content/themes/mytheme/img/top/chara2.png'>" ?>

            <div class="character-text">
              <p>新しくなっていくモノゴトに常に興味が湧きます。映画鑑賞も新しいモノゴトの考え方を教えてくれるため好きです。</p>
            </div>
          </div>
        </li>

        <li class="character-items">
          <div class="character-box">
            <?php echo "<img src='https://uraura-design.site/wp-content/themes/mytheme/img/top/chara3.png'>" ?>

            <div class="character-text">
              <p>「今人と違うこと・やらないようなことに挑戦しているな」と感じることにワクワクします。</p>
            </div>
          </div>
        </li>

        <li class="character-items">
          <div class="character-box">
            <?php echo "<img src='https://uraura-design.site/wp-content/themes/mytheme/img/top/chara4.png'>" ?>

            <div class="character-text">
              <p>好きなものはとことん追求する。SWが好きすぎて1人シカゴまで旅立ったことがあります。</p>
            </div>
          </div>
        </li>

      </ul>
    </section>

    <section>
      <h2 class="text-center">DailyStudy</h2>

      <p>DailyStudyではcssやJavaScriptの勉強の一環として投稿しているブログです。</p>

      <p>自分が仕組みを理解できていない機能などについて調べたり、参考サイトで紹介されているコードを自分なりに分解して理解を深めると行ったことを行っています。</p>

      <?php
        $posts = get_posts(array(
        'posts_per_page' => 1, // 表示件数
        'category' => '9' // カテゴリIDもしくはスラッグ名
        ));
      ?>
      <ul class="dailystudy-list">
        <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
          <li class="dailystudy-post">
            <figure class="alignfull">
              <?php if( has_post_thumbnail() ): ?>
                  <?php the_post_thumbnail();  ?>
              <?php endif; ?>
            </figure>

            <h3 class="text-center"><?php the_title(); ?></h3>
            <p class="post-time text-center"><?php the_time('Y/m/d') ?></p>

            <a href="<?php the_permalink() ?>">
              <div class="btna text-center">
                <span class="text-center">詳しく見る</span>
              </div>
            </a>
          </li>
        <?php endforeach; endif; ?>
      </ul>

      <a href="https://uraura-design.site/category/dailystudy/">
        <div class="btna text-center">
          <span class="text-center">DailyStudy一覧を見る</span>
        </div>
      </a>

    </section>



  </article>
<?php endwhile; endif; ?>

<!-- footerの呼び出し -->
<?php get_footer(); ?>
