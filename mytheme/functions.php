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

  // アイキャッチ画像を有効化
	add_theme_support( 'post-thumbnails' );
  add_image_size('thumb750',750,446,true);

  //
  add_theme_support( 'align-wide' );
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

  if( is_front_page() ){
		// front-page様CSS
		wp_enqueue_style(
      'top-page',
      '/wp-content/themes/mytheme/top-page.css', array());
	}




  /* the_archive_title 余計な文字を削除 */
  add_filter( 'get_the_archive_title', function ($title) {
      if (is_category()) {
          $title = single_cat_title('',false);
      } elseif (is_tag()) {
          $title = single_tag_title('',false);
  	} elseif (is_tax()) {
  	    $title = single_term_title('',false);
  	} elseif (is_post_type_archive() ){
  		$title = post_type_archive_title('',false);
  	} elseif (is_date()) {
  	    $title = get_the_time('Y年n月');
  	} elseif (is_search()) {
  	    $title = '検索結果：'.esc_html( get_search_query(false) );
  	} elseif (is_404()) {
  	    $title = '「404」ページが見つかりません';
  	} else {

  	}
      return $title;
  });






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







function load_js() {
  if ( !is_admin() ){
    //jQueryを登録解除
    wp_deregister_script( 'jquery' );

    //Google CDNのjQueryを出力
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), NULL, true );

    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/main.js', array(), NULL, true );
  }
}
add_action( 'init', 'load_js' );
