<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package yandy-master
 */


 /*
 Template Name: Single
 Template Post Type: post, page, product
 */


get_header();
?>

<?php
  $imaged1 = get_field('image');
  $imaged2 = get_field('image2');
  $text2 = get_field('text2');
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
          <h1 class="top-h1-2 subtitle-h1"><span><?php the_title(); ?></span></h1>
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

      <div class="blog-custom-image">
        <img data-object-fit="true" src="<?php echo $imaged1['url']; ?>" alt="<?php echo $imaged1['alt']; ?>">
        <img data-object-fit="true" src="<?php echo $imaged2['url']; ?>" alt="<?php echo $imaged2['alt']; ?>">
      </div>

      <div  class="snow-box blog-text">
        <div class="snow-box__body">
            <?php echo $text2; ?>
        </div>
      </div>

    </div>
  </section>
  </div>

  <?php  include 'recent-blog.php' ?>

<?php wp_footer(); ?>
