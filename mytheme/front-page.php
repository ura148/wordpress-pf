<?php get_header(); ?>



<?php if(have_posts()): while(have_posts()):the_post(); ?>
  <article <?php post_class( 'mycontainer' ); ?>>
    <div class="eyecatch alignfull">
      <h1>
        <p>uraura<br>portfolio<br>site<br></p>
      </h1>
    </div>

    <div class="myposthead">
      <!--投稿日時を取得-->
      <time datetime="<?php echo esc_attr( get_the_date( DATE_w3c )); ?>">
        <?php echo esc_html( get_the_date() ); ?>
        <!-- echo は出力を意味する-->
        <!-- 投稿日をget_the_date()で取得　esc_html()で無害化 -->
      </time>
    </div>
    <?php the_content(); ?>

    <?php the_post_navigation(); ?>

  </article>
<?php endwhile; endif; ?>

<!-- footerの呼び出し -->
<?php get_footer(); ?>
