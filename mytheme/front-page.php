<?php get_header(); ?>

    <main class="mycontainer">

      <div class="eyecatch alignfull">
          <h1>
          uraura portfolio site
          </h1>
      </div>

      <section class="section profile">
        <h2 class="text-center">Who is uraura?</h2>

        <div class="profile-content flex">
          <?php echo "<img src='https://uraura-design.site/wp-content/uploads/2020/04/profile.png'>" ?>

          <div class="">
            <p>初めましてurauraです。ポートフォリオサイトを見ていただき、誠にありがとうございます!</p>

            <p>現在22歳。大学3年の3月に社員2名の企業に内定。内定後はインターンとして働く。同年12月に内定を辞退。</p>

            <p>「自分が情熱を捧げることができることを仕事にしたい」と思い、Web業界への就職を目指し就職活動中。</p>

            <p>趣味は映画鑑賞・Star Wars グッズ収集・フットサル・釣り・サイクリングなど</p>
          </div>
        </div>
      </section>

      <section class="section portfolios">

        <h2 class="text-center">Portfolios</h2>

        <?php
          $posts = get_posts(array(
          'posts_per_page' => 5,
          'category' => '7'
          ));
        ?>

        <ul>
          <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
            <li>
              <a href="<?php the_permalink(); ?>">
                <div class="top-card portfolio-post flex fade-animation">
                  <figure class="flex-1">
                    <?php if( has_post_thumbnail() ): ?>
                        <?php the_post_thumbnail();  ?>
                    <?php endif; ?>
                  </figure>

                  <div class="top-card__contents text-center flex-2">
                    <h3><?php the_title(); ?></h3>
                    <h4><?php the_subtitle(); ?></h4>
                    <p>続きを見る</p>
                  </div>
                </div>
              </a>
          </li>
          <?php endforeach; endif; ?>
        </ul>

        <a href="https://uraura-design.site/category/portfolio/">
          <div class="btna text-center">
            <span class="text-center">portfolios一覧を見る</span>
          </div>
        </a>

      </section>

      <section class="section characteristics">
        <h2 class="text-center">Characteristics</h2>

        <ul class="flex">
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

        </ul>
      </section>

      <section class="section dailystudy">
        <h2 class="text-center next-is-text">DailyStudy</h2>

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

            <li>
              <a href="<?php the_permalink() ?>">
                <div class="top-card dailystudy-post flex fade-animation">

                  <figure class="flex-1">
                    <?php if( has_post_thumbnail() ): ?>
                        <?php the_post_thumbnail();  ?>
                    <?php endif; ?>
                  </figure>

                  <div class="top-card__contents text-center flex-2">
                    <h3 class="text-center"><?php the_title(); ?></h3>
                    <h4 class="post-time text-center"><?php the_time('Y/m/d') ?></h4>
                    <p>続きを見る</p>
                  </div>

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


      <section class="section contact">
        <h2 class="text-center next-is-text">Contact</h2>

        <p class="text-center">最後までポートフォリオサイトを見ていただき誠にありがとうございます。<br>お問い合わせはこちらからお願いいたします。</p>

        <a href="https://uraura-design.site/contact/">
          <div class="btna text-center">
            <span class="text-center">お問い合わせはこちら</span>
          </div>
        </a>

      </section>

    </main>

<!-- footerの呼び出し -->
<?php get_footer(); ?>
