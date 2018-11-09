<?php
/*
Template Name: Spirit
Template Post Type: post, page, product
*/

get_header();
?>

<?php
if ( have_posts() ) : // если имеются записи в блоге.

  while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
?>

<?php
  $brend = get_field('brend');
  $product_img1 = get_field('product_img1');
  $product_title1 = get_field('product_title1');
  $product_descr1 = get_field('product_descr1');
  $product_list1 = get_field('product_list1');
  $product_img2 = get_field('product_img2');
  $product_title2 = get_field('product_title2');
  $product_descr2 = get_field('product_descr2');
  $product_list2 = get_field('product_list2');
  $product_img3 = get_field('product_img3');
  $product_title3 = get_field('product_title3');
  $product_descr3 = get_field('product_descr3');
  $product_list3 = get_field('product_list3');
?>

  <section class="blog-banner container">

    <div class="img-fluid">
         <?php the_post_thumbnail(); ?>
    </div>
  </section>

<div class="about-blog-body simple-blog-body">
  <!-- <div class="about-blog-body-top"></div> -->

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

      <div class="spirit-brand">
        <img src="<?php echo $brend['url']; ?>" alt="<?php echo $brend['alt']; ?>">
      </div>
      <div class="spirit-products-wrap clearfix">
        <div class="spirit-product">
          <div class="spirit-product__thumb">
            <img src="<?php echo $product_img1['url']; ?>" alt="<?php echo $product_img1['alt']; ?>">
          </div>
          <div class="spirit-product__content">
            <h2 class="spirit-product__title top-h1-2 subtitle-h1">
              <span><?php echo $product_title1; ?></span>
            </h2>
            <div class="spirit-product__descr blog-text"><p><?php echo $product_descr1; ?></p></div>
            <ul class="spirit-product__list"><?php echo $product_list1; ?></ul>
          </div>
        </div>

        <div class="spirit-product">
          <div class="spirit-product__content content-order">
            <h2 class="spirit-product__title top-h1-2 subtitle-h1">
              <span><?php echo $product_title2; ?></span>
            </h2>
            <div class="spirit-product__descr blog-text"><p><?php echo $product_descr2; ?></p></div>
            <ul class="spirit-product__list"><?php echo $product_list2; ?></ul>
          </div>
          <div class="spirit-product__thumb thumb-order">
            <img src="<?php echo $product_img2['url']; ?>" alt="<?php echo $product_img2['alt']; ?>">
          </div>
        </div>

        <div class="spirit-product">
          <div class="spirit-product__thumb">
            <img src="<?php echo $product_img3['url']; ?>" alt="<?php echo $product_img3['alt']; ?>">
          </div>
          <div class="spirit-product__content">
            <h2 class="spirit-product__title top-h1-2 subtitle-h1">
              <span><?php echo $product_title3; ?></span>
            </h2>
            <div class="spirit-product__descr blog-text"><p><?php echo $product_descr3; ?></p></div>
            <ul class="spirit-product__list"><?php echo $product_list3; ?></ul>
          </div>
        </div>
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
