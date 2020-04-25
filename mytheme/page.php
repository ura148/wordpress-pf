<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()):the_post(); ?>
  <article <?php post_class( 'mycontainer' ); ?>>
    <div class="myposthead">
      <h1><?php the_title(); ?></h1>
    </div>

    <?php the_content(); ?>

    <!-- footer menuの呼び出し -->
    <?php get_sidebar(); ?>
  </article>
<?php endwhile; endif; ?>

<!-- footerの呼び出し -->
<?php get_footer(); ?>
