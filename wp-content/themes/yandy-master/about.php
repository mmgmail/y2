<?php
/*
Template Name: About
Template Post Type: post, page, product
*/

get_header();
?>
  <section class="blog-banner container">
  	   	 	<?php

$prev = get_field('image_previe');
$images = get_field('image_desc2');
$image = get_field('image_desc');
$images = get_field('image_desc2');
$imageb1 = get_field('image_desc_bottom1');
$imageb2 = get_field('image_desc_bottom2');
$imageb3 = get_field('image_desc_bottom3');
$imageb4 = get_field('image_desc_bottom4');
$imageb5 = get_field('image_desc_bottom5');


?>


           <img data-object-fit="true" src="<?php echo $prev['url']; ?>" alt="<?php echo $prev['alt']; ?>"  class="img-fluid">
  </section>

<div class="about-blog-body">
    <div class="about-blog-body-top"></div>
    <section class="blog-header">
      <div class="container">
        <div class="snow-box head-snow-box blog-text">
          <h1 class="top-h1-2 subtitle-h1"><span><?php the_field('name'); ?></span></h1>

         <?php
            if ( have_posts() ) : // если имеются записи в блоге.

              while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
            ?>
              <div class="event-title-row"><span class="event-title name-event">Y&Y CURRENT EVENTS</span><span class="text-divider">|</span><span class="event-title data-event"><?php the_date(); ?></span><span class="text-divider">|</span><span class="event-title writer-event"><?php the_author(); ?></span></div>

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
    </section>

    <section class="blog-info">
        <div class="container">

          <div class="about-blog-images">
            <span class="about-image-item">
              <img src="<?php echo $imageb1['url']; ?>" alt="<?php echo $imageb1['alt']; ?>">
            </span>
            <span class="about-image-item">
              <img src="<?php echo $imageb2['url']; ?>" alt="<?php echo $imageb2['alt']; ?>">
            </span>
            <span class="about-image-item">
              <img src="<?php echo $imageb3['url']; ?>" alt="<?php echo $imageb3['alt']; ?>">
            </span>
            <span class="about-image-item">
              <img src="<?php echo $imageb4['url']; ?>" alt="<?php echo $imageb4['alt']; ?>">
            </span>
            <span class="about-image-item">
              <img src="<?php echo $imageb5['url']; ?>" alt="<?php echo $imageb5['alt']; ?>">
            </span>
          </div>

        </div>
      </div>
    </section>
</div>

  <?php wp_footer(); ?>
