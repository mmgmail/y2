<?php
/*
Template Name: Wheretobuy
Template Post Type: post, page, product
*/

get_header();
?>
  <section class="map-banner clearfix">
    <iframe src="https://www.google.com/maps/d/embed?mid=1GqllO9aogl1gmHKE7UluVOYwGN3jzc7O&libraries=places" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="600"></iframe>
    <!-- <div class="bh-sl-container">
      <div id="bh-sl-map-container" class="bh-sl-map-container">
        <div id="bh-sl-map" class="bh-sl-map"></div>
        <div class="bh-sl-loc-list">
          <ul class="list"></ul>
        </div>
      </div>
    </div> -->
  </section>

<div class="about-blog-body">
    <div class="about-blog-body-top"></div>
    <section class="blog-header">
      <div class="container">
        <div class="snow-box head-snow-box blog-text">
          <div class="snow-box__head">
            <h1 class="top-h1-2 subtitle-h1"><span><?php the_field('name'); ?></span></h1>

           <?php
              if ( have_posts() ) : // если имеются записи в блоге.

                while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
              ?>
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
      </div>
    </section>
</div>

<?php  include 'recent-blog.php' ?>

<?php wp_footer(); ?>
