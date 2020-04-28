    <?php get_header(); ?>

    <?php if(have_posts()): while(have_posts()):the_post(); ?>
      <article <?php post_class( 'mycontainer' ); ?>>
        <div class="myposthead">
          <?php the_category(); ?>
          <h1><?php the_title(); ?></h1>
          <p class="sub-title"><?php the_subtitle(); ?></p>

          <time datetime="<?php echo esc_attr( get_the_date( DATE_w3c )); ?>" class="datetime">
            <?php echo esc_html( get_the_date() ); ?>
          </time>
        </div>
        <?php the_content(); ?>

        <?php the_post_navigation(); ?>
      </article>
    <?php endwhile; endif; ?>

    <!-- footerの呼び出し -->
    <?php get_footer(); ?>
