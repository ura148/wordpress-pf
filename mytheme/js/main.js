// ==============================
// メニューボタンの設定
//
$(".btn-trigger").on("click",function(){
  $(this).toggleClass("active");
  $(".header-nav").toggleClass("slide-in");
});
//
//
// ===============================


// ==============================
// fadein animation
//
$(function(){
  $(window).scroll(function(){
    let scrollTop = $(window).scrollTop(),
        windowHeight = $(window).height(),
        scrollBottom = scrollTop + windowHeight;

    $(".fade-animation").each(function(){
      let itemTop = $(this).offset().top,
          itemHeight =$(this).height(),
          fadeStart = itemTop + itemHeight;

          console.log(itemTop),
          console.log(fadeStart);

          if (scrollTop > fadeStart - windowHeight){
            $(this).addClass('fade-in');
          }
    });
  });
});
