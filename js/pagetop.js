var showClass = "show";
var hideClass = "hide";
var staticClass = "static";
var hideCSS = {
  "z-index": "-1",
  visibility: "hidden"
};
var pagetopShowTrig = 100;

var pagetop = $("#pagetop");
var pagetopCloneStatic = pagetop
  .clone()
  .attr("id", "")
  .addClass(staticClass)
  .css(hideCSS);
var pagetopCloneFixed = pagetop
  .clone()
  .attr("id", "")
  .addClass(showClass)
  .css(hideCSS);
pagetop.after(pagetopCloneStatic, pagetopCloneFixed);

$(window).on("load scroll", function() {
  var scroll = $(window).scrollTop();
  if (scroll >= pagetopShowTrig) {
    if (!pagetop.hasClass(showClass)) {
      pagetop.addClass(showClass).removeClass(hideClass);
    }
  } else {
    if (pagetop.hasClass(showClass)) {
      pagetop.removeClass(showClass).addClass(hideClass);
    }
  }
  if (pagetopCloneStatic.offset().top <= pagetopCloneFixed.offset().top) {
    if (!pagetop.hasClass(staticClass)) {
      pagetop.addClass(staticClass);
    }
  } else {
    if (pagetop.hasClass(staticClass)) {
      pagetop.removeClass(staticClass);
    }
  }
});

$(document).ready(function() {
  $("#pagetop").click(function() {
    // #topBtnをクリックすると
    $("body,html").animate(
      {
        // いちばん上にanimateする
        scrollTop: 0 // 戻る位置
      },
      400
    ); // 戻るスピード
    return false;
  });
});
