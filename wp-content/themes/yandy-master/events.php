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

    <section class="room events-room-wrap">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6 room-text">
						<h2 class="top-h1-2"><span>Book Your Next Event With Y&Y</span></h2>
						<div class="top-p">Drop us and let’s partner together to make your perfect event happen!  We Tailor every event to your needs and your budget!  Hope to talk to talk to you soon!</div>
						<a href="" class="top-btn"><u>Learn More</u></a>
						<div class="tony-text">
							<p>“I had an amazing time at Y&Y.  The staff were amazing, and they catered to our group with grace, style, and booooze”</p>
							<b>-Toni T</b>
						</div>
					</div>
          <div class="col-12 col-lg-6 events-room-form">
            <form action="" method="post" class="home-form" name="contactForm" id="contactForm">
  						<div class="form-style row">
  							<div class="col-md-6">
  								<input type="text" name="name" placeholder="Full Name" required>
  							</div>
  							<div class="col-md-6">
  								<input type="email" name="email" placeholder="Email" required>
  							</div>
  							<div class="col-md-6">
  								<input type="text" name="title" placeholder="What This About" required>
  							</div>
  							<div class="col-md-6">
  								<input type="tel" name="phone" placeholder="Phone Number">
  							</div>
  							<div class="col-xl-12">
  								<textarea name="message"  placeholder="Message or Questions" required></textarea>
  							</div>
  						</div>
  						<button type="submit" class="book-event-submit" id="bookEvent">
  							<span class="book-event-submit__text">Submit</span>
  							<span class="lds-rolle-wrap">
  								<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
  							</span>
  						</button>
  					</form>
					</div>
				</div>
			</div>
		</section>

    <section class="bringing events-bringing-wrap">
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

    <section>
      <div class="spirit-products-wrap events-products-wrap clearfix">
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
