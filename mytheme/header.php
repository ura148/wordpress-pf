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
      <div class="alignwide">
        <a href="<?php echo esc_url( home_url( '/' )); ?>">
          <?php bloginfo( 'name' ); ?>
        </a>

        <nav>
          <?php wp_nav_menu( array(
            'theme_location'   =>'mainmenu',
            'container_class'  =>'header-nav',
            'menu_class'       =>'nav-list'));
          ?>
        </nav>

        <!-- <p><?php bloginfo( 'description' ); ?></p> -->
      </div>
    </header>
