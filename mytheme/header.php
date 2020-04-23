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
      <div>
        <a href="<?php echo esc_url( home_url( '/' )); ?>">
          <?php bloginfo( 'name' ); ?>
        </a>

        <!-- <button class="btn-trigger">
          <span class="btn-nav-line"></span>
          <span class="btn-nav-line"></span>
          <span class="btn-menu menu">menu</span>
          <span class="btn-menu close">close</span>
        </button> -->

        <!-- <div class="header-nav">
          <?php wp_nav_menu( array(
            'theme_location'   =>'mainmenu',
            'menu_class'    =>'nav-list',
            'container'        => nav
            ));
          ?>
        </div> -->
      </div>
    </header>
