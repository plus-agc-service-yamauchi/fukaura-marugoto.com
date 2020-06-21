<?php get_header()?>
<?php wp_head(); ?>
<main>
  <section id="news" style="background:url('<?php bloginfo('template_url');?>/img/bg_news.svg') no-repeat;background-size:100%;">
    <div class="container">
      <div class="row">
        <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-5">
          <!-- Card -->
          <div class="card">
            <!-- Card image -->
            <div class="view overlay">

              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!-- Card content -->
            <div class="card-body">
              <!-- Title -->
              <h5 class="card-title text-left"><?php the_title();?>
              </h5>
              <!-- Text -->
              <p class="card-text">更新日：<?php echo get_the_date();?>
              </p>
              <div class="my-3">
                <?php 
    if(has_post_thumbnail()){ //アイキャッチ画像があったら
      $image_id = get_post_thumbnail_id(); //アイキャッチ画像IDを取得
      $image = wp_get_attachment_image_src( $image_id ); //↑の画像IDの情報を取得
      $image_src = $image[0]; //↑の戻り値の1番目（URL）をsrcに入れる
    }else{ //アイキャッチ画像がなかったら
      //自分で用意したNo Image画像をsrcに入れる
      $image_src = get_template_directory_uri() . "/img/noimage.png";
    }
?>
<img src="<?php echo $image_src; ?>" width="100%">

              </div>
              <!-- Button -->
              <a href="<?php the_permalink();?>" class="btn btn-seablue d-block mx-auto">Read
                More</a>
            </div>
          </div>
          <!-- Card -->
        </div>
        <?php endwhile;
    else :
        ?>
        <p>表示する記事がありません</p>
        <?php
    endif;?>
      </div>
    </div>
  </section>
</main>
<?php wp_footer(); ?>
<?php get_footer();
