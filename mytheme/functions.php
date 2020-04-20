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
}
add_action( 'after_setup_theme', 'mytheme_setup' );

function mytheme_enqueue(){
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
