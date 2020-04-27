// ==============================
// メニューボタンの設定
//
$(".btn-trigger").on("click",function(){
  $(this).toggleClass("active");
  $(".header-nav").fadeToggle(500);
});
//
//
// ===============================
