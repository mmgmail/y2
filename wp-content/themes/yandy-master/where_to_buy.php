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

    <section>
      <div class="spirit-products-wrap events-products-wrap clearfix container">
        <div class="spirit-product">
          <div class="spirit-product__thumb">
            <img src="<?php echo get_template_directory_uri();?>/img/events1.png" alt="photo">
          </div>
          <div class="spirit-product__content">
            <h2 class="spirit-product__title top-h1-2 subtitle-h1">
              <span>Tours & Cocktail Classes</span>
            </h2>
            <div class="spirit-product__descr blog-text"><p><b>Private Tour & Tasting.</b> A 45-minute educational experience finished with a guided tasting of our current offerings.</p></div>
            <a href="https://youandyours.youcanbook.me/" class="top-btn" target="_blank"><u>Book Event</u></a>
            <div class="spirit-product__descr blog-text"><p><b>Private Cocktail Class.</b> Learn how to mix up drinks like the pros with this hour long, hands-on introduction to cocktail basics. Attendees will learn how to measure, shake, stir and pour drinks. Each attendee will have the opportunity to make and enjoy two cocktails, all while learning a brief history of the drinks being made. Taught by our very own staff. Tools and ingredients will be provided. Available to groups of 8-12 guests. Attendees must be 21 years of age.</p></div>
            <a href="https://youandyours.youcanbook.me/" class="top-btn" target="_blank"><u>Book Event</u></a>
          </div>
        </div>

        <div class="spirit-product">
          <div class="spirit-product__content content-order">
            <h2 class="spirit-product__title top-h1-2 subtitle-h1">
              <span>Tours & Cocktail Classes</span>
            </h2>
            <div class="spirit-product__descr blog-text"><p>Reserve our bright, airy space and talented bar team exclusively for you & your guests. Our venue is perfect for bridal and baby showers, bachelorette parties, intimate wedding receptions, and company parties. We can even create custom experiences and drinks for your special event! Click below to inquire for package & pricing details.</p></div>
            <a href="https://youandyours.youcanbook.me/" class="top-btn" target="_blank"><u>Book Event</u></a>
          </div>
          <div class="spirit-product__thumb thumb-order">
            <img src="<?php echo get_template_directory_uri();?>/img/events2.png" alt="photo">
          </div>
        </div>
    </section>
</div>

<?php  include 'recent-blog.php' ?>

<?php wp_footer(); ?>
