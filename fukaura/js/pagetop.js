$(document).ready(function() {
      $("#page_top").hide();
      $(window).on("scroll", function() {
        if ($(this).scrollTop() > 100) {
          $("#page_top").fadeIn("fast");
        } else {
          $("#page_top").fadeOut("fast");
        }
        scrollHeight = $(document).height(); //ドキュメントの高さ
        scrollPosition = $(window).height() + $(window).scrollTop(); //現在地
        footHeight = $("footer").innerHeight(); //footerの高さ（＝止めたい位置）
        if (scrollHeight - scrollPosition <= footHeight) { //ドキュメントの高さと現在地の差がfooterの高さ以下になったら
          $("#page_top").css({
            "position": "absolute", //pisitionをabsolute（親：wrapperからの絶対値）に変更
            "bottom": footHeight + 20 //下からfooterの高さ + 20px上げた位置に配置
          });
        } else { //それ以外の場合は
          $("#page_top").css({
            "position": "fixed", //固定表示
            "bottom": "20px" //下から20px上げた位置に
          });
        }
      });
      $('#page_top').click(function() {
        $('body,html').animate({
          scrollTop: 0
        }, 400);
        return false;
      });
    });