<?php
/*
Template Name: Blog
Template Post Type: post, page, product
*/

get_header();
?>

<?php
if ( have_posts() ) : // если имеются записи в блоге.

  while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
?>

  <section class="blog-banner container">

    <div class="img-fluid">
         <?php the_post_thumbnail(); ?>
    </div>
  </section>

<div class="about-blog-body simple-blog-body">
  <div class="about-blog-body-top"></div>

  <section class="blog-header">

    <div class="container">
        <div  class="snow-box head-snow-box blog-text">

          <div class="snow-box__head">
            <h1 class="top-h1-2 subtitle-h1"><span><?php the_field('name'); ?></span></h1>
            <div class="event-title-row"><span class="event-title name-event">Y&Y CURRENT EVENTS</span><span class="text-divider">|</span><span class="event-title data-event"><?php the_date(); ?></span><span class="text-divider">|</span><span class="event-title writer-event"><?php the_author(); ?></span></div>
          </div>

          <div class="snow-box__body">
        <?php
        the_content();

         wp_reset_postdata();

          endwhile;  // завершаем цикл.
        endif;
        /* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
        wp_reset_query();
        ?>
      </div>
    </div>

    <div class="press-list">
      <?php
      if ( have_posts() ) : // если имеются записи в блоге.
         query_posts( array('category_name' => 'press'));    // указываем ID рубрик, которые необходимо вывести.
        while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
      ?>

      <div class="press-list__item">
        <div class="press-list__thumb">
          <?php the_post_thumbnail('large'); ?>
        </div>
        <div class="press-list__content">
          <h3><?php the_title(); ?></h3>
          <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink();?>" class="top-btn"><u>Read More</u></a>
        </div>
      </div>

      <?php wp_reset_postdata();

        endwhile;  // завершаем цикл.
      endif;
      /* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
      wp_reset_query();
      ?>
    </div>




    </div>
  </section>
  </div>

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

  <?php wp_footer(); ?>
