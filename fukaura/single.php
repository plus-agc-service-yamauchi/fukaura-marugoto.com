<?php get_header()?>
<?php wp_head(); ?>
<main>
    <section id="single" style="background:url('<?php bloginfo('template_url');?>/img/bg_news.svg');">
        <div class="container">
            <div class="row justify-content-center">
                <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>
                <div class="col-sm-8">
                    <p calss="section-header"><?php echo get_the_date(); ?>
                    </p>
                    <h1><?php the_title(); ?>
                    </h1>
                </div>
                <div class="col-sm-8">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php endwhile;
    else :
    ?>
            <p>表示する記事がありません</p><?php
    endif; ?>
        </div>
        </div>
    </section>
    <section>
        <div class="container">
            <p class="allow"><a href="/news/index.php" class="text-dark">記事一覧へ戻る</a></p>
        </div>
    </section>
</main>
<?php wp_footer(); ?>
<?php get_footer();
