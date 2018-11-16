	<?php
	/*
	Template Name: Page Home
	Template Post Type: post, page, product
	*/

	get_header();
	?>

	<?php

		$menu = get_field('menu');

	?>

	<!-- <section class="question-block">
    <div class="in-block">
      <div class="question-logo"><img src="img/logo.png" alt="logo"></div>
    	<div class="question">Quick Question.<br>  Are you over the<br> age of 21?</div>
      <div style="margin:0 auto; width:205px;">
        <div class="yes"><a href="/">Yes!</a></div>
        <div class="no"><a href="">No</a></div>
      </div>
		</div>
  </section> -->

	<section class="top-slider">
		<div class="container">

			<div class="">

				<div class="col-12">

					<div class="carousel-inner sl1 single-item">
						<?php
						if ( have_posts() ) : // если имеются записи в блоге.
						   query_posts( array('posts_per_page' => '4',  ));    // указываем ID рубрик, которые необходимо вывести.
						  while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
						?>

						<div class="carousel-item active">
							<div class="d-block">
								<?php the_post_thumbnail(); ?>
							</div>
								<div class="top-text">
								<h1 class="top-h1"><?php the_title(); ?></h1>
									<div class="top-p"><?php the_excerpt(); ?></div>
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
			</div>
		</div>
	</section>

  <div class="pattern-wrap-1">

		<section id="menu" class="hand-crafted">
			<div class="container">
				<div class="flex-box">
					<div class="hand-p1">
						<h2 class="top-h1-2">OUR MENU<span>Hand Crafted Cocktails</span></h2>
						<div class="top-p">Our cocktail menu at You & Yours Distilling Co. was brought to life with a desire to feature original creations while also paying homage to some timeless classics and always highlighting the spirits that we produce in house.</div>
						<a class="top-btn js-menu-popup" href="<?php echo $menu['url']; ?>"><u>See Full Menu</u></a>
					</div>

					<div class="coctails-images">
						<img src="<?php echo get_template_directory_uri();?>/img/cocktails-0080.jpg"
						     srcset="<?php echo get_template_directory_uri();?>/img/cocktails-0080@2x.jpg 2x,
						             <?php echo get_template_directory_uri();?>/img/cocktails-0080@3x.jpg 3x">
						<img src="<?php echo get_template_directory_uri();?>/img/cocktails-0028.jpg"
						     srcset="<?php echo get_template_directory_uri();?>/img/cocktails-0028@2x.jpg 2x,
						             <?php echo get_template_directory_uri();?>/img/cocktails-0028@3x.jpg 3x">

						<img src="<?php echo get_template_directory_uri();?>/img/mgl-6275.jpg"
					       srcset="<?php echo get_template_directory_uri();?>/img/mgl-6275@2x.jpg 2x,
					               <?php echo get_template_directory_uri();?>/img/mgl-6275@3x.jpg 3x">
					</div>




					<!-- <?php
								if ( have_posts() ) : // если имеются записи в блоге.
								   query_posts( array('cat' => '3',  'posts_per_page' => '3',  ));    // указываем ID рубрик, которые необходимо вывести.
								  while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога


								?>
								<div class="hand-p2">
													<?php the_post_thumbnail(); ?>
													<p><a class="top-btn" href="<?php the_permalink();?>" style="color:#000;"><u><?php the_title(); ?></u></a></p>
												</div>

								<?php wp_reset_postdata();

								  endwhile;  // завершаем цикл.
								endif;
								/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
								wp_reset_query();
							?> -->

				</div>
			</div>
		</section>

		<section class="our-products">
			<div class="container">
				<div class="hand-p-products">
					<h2 class="top-h1-2">CRAFT DISTILLED<span class="text-center">Our Products</span></h2>
					<div class="top-p">Distilling high quality craft spirits is our passion, and we believe you can see this in every product we release. Learn about our spirits below.</div>
					<a class="top-btn" href="<?php echo get_permalink(); ?>/spirits/"><u>Learn More</u></a>
				</div>
			</div>
			<img src="<?php echo get_template_directory_uri();?>/img/bottles.jpg"
		       srcset="<?php echo get_template_directory_uri();?>/img/bottles@2x.jpg 2x,
		             <?php echo get_template_directory_uri();?>/img/bottles@3x.jpg 3x"
					 class="our-products__bottles">
		</section>

	</div>

	<div class="pattern-wrap-2">

		<section class="room">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6 popup-gallery text-center">
						<span class="popup-gallery-wrap">
							<img src="<?php echo get_template_directory_uri();?>/img/group-24.jpg"
							     srcset="<?php echo get_template_directory_uri();?>/img/group-24@2x.jpg 2x,
							             <?php echo get_template_directory_uri();?>/img/group-24@3x.jpg 3x"
							     data-object-fit="true" class="img-fluid room-img" alt="room">
					  </span>
					</div>
					<div class="col-12 col-lg-6 room-text">
						<h2 class="top-h1-2">OUR SPACE<span>Tasting Room & Event Space</span></h2>
						<div class="top-p">Our light and airy space provides the perfect relaxed-yet-sophisticated setting to enjoy an elevated imbibing experience. Stop by for a coctail, enjoy a tasting filght or book an event with us. We can accommodate groups of up to 85.</div>
						<a href="" class="top-btn"><u>Learn More</u></a>
						<div class="tony-text">
							<p>“I had an amazing time at Y&Y.  The staff were amazing, and they catered to our group with grace, style, and booooze”</p>
							<b>-Toni T</b>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="our-products">
			<div class="container">
				<div class="hand-p-products">
					<h2 class="top-h1-2">CANNED COCKTAILS<span class="text-center">Ready-To-Drink</span></h2>
					<div class="top-p">Our canned cocktails are perfect for any occasion. Find out where  you can get them and how they are  made by clicking the link below.</div>
					<a class="top-btn" href="<?php echo get_permalink(); ?>/coctails/"><u>Learn More</u></a>
				</div>
			</div>
			<img src="<?php echo get_template_directory_uri();?>/img/g-t-jpg.jpg"
		       srcset="<?php echo get_template_directory_uri();?>/img/g-t-jpg@2x.jpg 2x,
		             <?php echo get_template_directory_uri();?>/img/g-t-jpg@3x.jpg 3x"
					 class="our-products__bottles">
		</section>

	</div>

	<section class="bringing">
		<div class="container">
			<div class="row">
				<div class="col-12 col-xl-6 bringing-text ">
					<h2 class="top-h1-2">OUR MISSON<span>It’s about bringing people together.</span></h2>
					<div class="top-p">Launched in March of 2017 after almost three years of planning, You & Yours Distilling Co. is a full production distillety, tasting room and event space, comlete with a world-class coctail program highlighting our current spirits offerings.</div>
					<div class="top-p">Salvaged wood, whitewashed brick, exposed concrete, push velvet, denim linen, copper and marble accents come together to create a fresh, unique and insta-worthy atmosphare.</div>
					<a href="https://youandyours.youcanbook.me/" class="top-btn" target="_blank"><u>Book Event</u></a>
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

<?php get_footer(); ?>
