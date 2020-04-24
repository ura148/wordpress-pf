<?php get_header(); ?>



<?php if(have_posts()): while(have_posts()):the_post(); ?>
  <article <?php post_class( 'mycontainer' ); ?>>
    <div class="eyecatch alignfull">
      <h1>
        uraura<br>portfolio<br>site<br>
      </h1>
    </div>

    <section>
      <h2 class="text-center">Who is uraura?</h2>

      <?php echo "<img src='https://uraura-design.site/wp-content/uploads/2020/04/profile.png'>" ?>

      <p>初めましてurauraです。ポートフォリオサイトを見ていいただき、誠にありがとうございます!</p>
    </section>
    <section>
      <h2 class="text-center">Portfolios</h2>

      <?php
        $posts = get_posts(array(
        'posts_per_page' => 2, // 表示件数
        'category' => 'portfolio' // カテゴリIDもしくはスラッグ名
        ));
      ?>
        <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
          <!--Portfolioタグがついたものを表示-->
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
    </section>



  </article>
<?php endwhile; endif; ?>

<!-- footerの呼び出し -->
<?php get_footer(); ?>
