<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package yandy-master
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
  <section class="blog-header">
    <div class="container">

      <div  class="snow-box head-snow-box blog-text">

        <div class="snow-box__head">
          <h1 class="top-h1-2 subtitle-h1"><span><?php the_title(); ?></span></h1>
          <div class="event-title-row"><span class="event-title name-event">Y&Y CURRENT EVENTS</span><span class="text-divider">|</span><span class="event-title data-event"><?php the_date(); ?></span><span class="text-divider">|</span><span class="event-title writer-event"><?php the_author(); ?></span></div>
        </div>

        <div class="snow-box__body">
          <?php
          the_content();?>
        </div>
        
      </div>

    </div>
  </section>
<?php


 wp_reset_postdata();

  endwhile;  // завершаем цикл.
endif;
/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
wp_reset_query();


wp_footer();?>
