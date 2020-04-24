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
      <?php
      $posts = get_posts(array(
      'posts_per_page' => 1, // 表示件数
      'category' => 'portfolio' // カテゴリIDもしくはスラッグ名
      ));
      ?>
      <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>

      <!--表示する内容が入ります。-->
      <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
      <p><?php the_excerpt(); ?></p>
      <p><a href="<?php the_permalink() ?>">続きを見る</a></p>
      <!--表示する内容ここまで-->

      <?php endforeach; endif; ?>
    </section>



  </article>
<?php endwhile; endif; ?>

<!-- footerの呼び出し -->
<?php get_footer(); ?>
