<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <?php  wp_head(); ?>
    <!-- adobe fonts 読み込み -->
    <script>
    (function(d) {
      var config = {
        kitId: 'heu4bgw',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
    </script>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="myhead">
      <div class="header-menu-bar flex">
        <a href="<?php echo esc_url( home_url( '/' )); ?>">
          <span><?php bloginfo( 'name' ); ?></span>
        </a>

        <!-- <div class="">
          <a href="<?php echo get_category_link( 7 ); ?>">
            <span>Portfolio</span>
          </a>

          <a href="<?php echo get_page_link( 392 ); ?>">
            <span>Blog</span>
          </a>

          <a href="<?php echo get_page_link( 432 ); ?>">
            <span>contact</span>
          </a>
        </div> -->

        <button class="btn-trigger">
          <span class="btn-nav-line"></span>
          <span class="btn-nav-line"></span>
          <span class="btn-nav-line"></span>
          <span class="btn-menu menu">menu</span>
          <span class="btn-menu close">close</span>
        </button>

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
