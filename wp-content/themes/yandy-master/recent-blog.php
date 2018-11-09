
  <section class="recent-posts-wrap clearfix">
    <div class="container">
      <div class="blog-text recent-posts-wrap__head">
        <h1 class="top-h1-2 subtitle-h1"><span>Recent Posts</span></h1>
        <div class="recent-posts-wrap__descr"><p>We are always up to something! Stay in the loop by chceking out our recent blog posts or following us on social!</p></div>
      </div>
    </div>
    <div class="recent-posts-wrap__inner">
      <div class="js-recent-blog">
        <?php
          if ( have_posts() ) : // если имеются записи в блоге.
           query_posts( array('posts_per_page' => '5'));    // указываем ID рубрик, которые необходимо вывести.
            while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
        ?>

            <a href="<?php the_permalink();?>">
              <!-- <?php the_title(); ?> -->
              <?php the_post_thumbnail('large'); ?>
            </a>

          <?php
            wp_reset_postdata();
              endwhile;  // завершаем цикл.
            endif;
            /* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
            wp_reset_query();
          ?>
        </div>
      </div>
    </section>
