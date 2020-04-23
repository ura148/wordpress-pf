<?php function mytheme_setup(){
  // フロントに適用するグーテンブルクのcssを有効化
  add_theme_support( 'wp-block-styles' );

  //縦横比を維持したレスポンシブを有効化
  add_theme_support( 'responsive-embeds');

  //エディタ用CSSの有効化、エディタに読み込み
  add_theme_support( 'editor-styles' ); //???p120
  add_editor_style( 'editor-style.css' );//???

  //ページのタイトルを有効化
  add_theme_support( 'title-tag' );

  //link, style, script のHTML5対応を有効化
  add_theme_support( 'html5', array(
    'style',
    'script'
  ) );

  //アイキャッチ画像の有効化
  add_theme_support( 'post_thumbnails' );

  //
  add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );

function mytheme_enqueue(){
  //Google fonts を読み込む
  wp_enqueue_style(
    'myfonts',
    'https://fonts.googleapis.com/css?family=Josefin+Sans:400,700&display=swap',
    array(),
    null
  );

  //Dashiconsを読み込み
  wp_enqueue_style(
    'dashicons'
  );

  // style.cssを読み込む
  wp_enqueue_style(
    'mytheme-style',
    get_stylesheet_uri(),
    array(),
    filemtime(get_theme_file_path('style.css'))
  );
}

add_action( 'wp_enqueue_scripts','mytheme_enqueue');

function mytheme_widgets(){
  //widgetsエリアの追加（footer menu）
  register_sidebar( array(
    'id' => 'sidebar-1',
    'name' => 'フッターメニュー',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',//パラメーターの1つ
    'after_widget' => '</section>'//パラメーターの1つ
  ) );
}

add_action( 'widgets_init','mytheme_widgets' );


register_nav_menu('mainmenu', 'メインメニュー');
