<?php
/*
Template Name: Events
Template Post Type: post, page, product
*/

get_header();
?>
  <section class="blog-banner container">
<?php

  $prev = get_field('image_preview');
  $images = get_field('image_desc2');
  $image = get_field('image_desc');
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

    <section class="bringing">
  		<div class="container">
  			<div class="row">
  				<div class="col-12 col-xl-6 bringing-text ">
  					<h2 class="top-h1-2"><span>Tours & Cocktail Classes</span></h2>
  					<div class="top-p"><b>Distillery Tours</b> can be booked online. Tours run Wednesday through Sunday at 5 pm and include a 45-minute educational experience and guided tasting of our current offerings.</div>
            <a href="https://youandyours.youcanbook.me/" class="top-btn" target="_blank"><u>Book Event</u></a>
            <div class="p-top-divede-top">
              <div class="top-p"><b>Cocktail Classes</b> are held the first and third Wednesday of every month from 6:30 to 7:30 pm. Learn how to mix up drinks like the pros with this hour long, hands-on introduction to cocktail basics. Attendees will learn how to measure, shake, stir and pour drinks. Each attendee will have the opportunity to make and enjoy two cocktails, all while learning a brief history of the drinks being made. Taught by our very own staff. Tools and ingredients will be provided. Attendees must be 21 years of age.</div>
    					<a href="https://youandyours.youcanbook.me/" class="top-btn" target="_blank"><u>Book Event</u></a>
            </div>
  				</div>
  				<div class="col-12 col-xl-6 bringing-photo">
  					<img data-object-fit="true" src="<?php echo get_template_directory_uri();?>/img/br1.png" alt="photo">
  					<img data-object-fit="true" src="<?php echo get_template_directory_uri();?>/img/br2.png" alt="photo">
  					<img data-object-fit="true" src="<?php echo get_template_directory_uri();?>/img/br3.png" alt="photo">
  					<img data-object-fit="true" src="<?php echo get_template_directory_uri();?>/img/br4.png" alt="photo">
  				</div>
  			</div>
  		</div>
  	</section>


    <!-- <section class="blog-info">
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
    </section> -->
</div>

<?php  include 'recent-blog.php' ?>

<?php wp_footer(); ?>
