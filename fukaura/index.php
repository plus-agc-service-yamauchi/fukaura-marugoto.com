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
              <h4 class="card-title"><?php the_title();?>
              </h4>
              <!-- Text -->
              <p class="card-text"><?php echo get_the_date();?>
              </p>
              <?php the_post_thumbnail('medium', array('class' => 'w-100'));?>
              <p class="my-3"><?php the_content();?>
              </p>
              <!-- Button -->
              <a href="<?php the_permalink();?>" class="btn btn-seablue">Read
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
