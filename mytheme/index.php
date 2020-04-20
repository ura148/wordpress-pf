<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <?php  wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="myhead mycontainer">
      <a href="<?php echo esc_url( home_url( '/' )); ?>">
        <?php bloginfo( 'name' ); ?>
      </a>

      <p><?php bloginfo( 'description' ); ?></p>
    </header>
    <?php if(have_posts()): while(have_posts()):the_post(); ?>
      <article <?php post_class( 'mycontainer' ); ?>>
        <div class="myposthead">
          <?php the_category(); ?>
          <h1><?php the_title(); ?></h1>

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
    <?php wp_footer(); ?>
  </body>
</html>
