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

<section class="top-slider">
		<div class="container">

			<div class="">

				<div class="col-12">

					<div class="carousel-inner sl1 single-item">
<?php
if ( have_posts() ) : // если имеются записи в блоге.
   query_posts( array('cat' => '2', 'posts_per_page' => '4',  ));    // указываем ID рубрик, которые необходимо вывести.
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


	<section class="hand-crafted">
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
				<a class="top-btn js-menu-popup" href="#"><u>Learn More</u></a>
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri();?>/img/bottles.jpg"
	       srcset="<?php echo get_template_directory_uri();?>/img/bottles@2x.jpg 2x,
	             <?php echo get_template_directory_uri();?>/img/bottles@3x.jpg 3x"
				 class="our-products__bottles">
	</section>

	<section class="room">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6 popup-gallery text-center">
					<img src="<?php echo get_template_directory_uri();?>/img/group-24.jpg"
					     srcset="<?php echo get_template_directory_uri();?>/img/group-24@2x.jpg 2x,
					             <?php echo get_template_directory_uri();?>/img/group-24@3x.jpg 3x"
					     data-object-fit="true" class="img-fluid room-img" alt="room">
				</div>
				<div class="col-12 col-lg-6 room-text">
					<h2 class="top-h1-2">OUR SPACE<span>Tasting Room & Event Space</span></h2>
					<div class="top-p">Our light and airy space provides the perfect relaxed-yet-sophisticated setting to enjoy an elevated imbibing experience. Stop by for a coctail, enjoy a tasting filght or book an event with us. We can accommodate groups of up to 85.</div>
					<a href="blog2.html" class="top-btn"><u>Learn More</u></a>
					<div class="tony-text">
						<p>“I had an amazing time at Y&Y.  The staff were amazing, and they catered to our group with grace, style, and booooze”</p>
						<b>-Toni T</b>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bringing">
		<div class="container">
			<div class="row">
				<div class="col-12 col-xl-6 bringing-text ">
					<div class="marker">“</div>
					<h2 class="top-h1-2"><span>It’s about bringing people together.</span></h2>
					<div class="top-p">Launched in March of 2017 after almost three years of planning, You & Yours Distilling Co. is a full production distillety, tasting room and event space, comlete with a world-class coctail program highlighting our current spirits offerings.</div>
					<div class="top-p">Salvaged wood, whitewashed brick, exposed concrete, push velvet, denim linen, copper and marble accents come together to create a fresh, unique and insta-worthy atmosphare.</div>
					<a href="<?php the_field('book-event'); ?>" class="top-btn" target="_blank"><u>Book Event</u></a>
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
	<section class="products">
		<h2 class="top-h1-2 text-center"><span>Our Flagship Products</span></h2>
		<div class="top-p text-center">Premium, distilled-on-site spirits and a world-class<br> cocktail program to match</div>
		<div class="container">
			<div class="flex-box prod-block">
				<div class="popup-gallery ">
					<a href="<?php echo get_template_directory_uri();?>/img/prod1.png"><img src="<?php echo get_template_directory_uri();?>/img/prod1.png" class="img-fluid pd" alt="room"></a>
					<a href="<?php echo get_template_directory_uri();?>/img/prod1.png">
						<div class="gallery-btn gallery-btn-2">
							<span><i class="fa fa-search" aria-hidden="true"></i></span></div>
					</a>
				</div>
				<div class="popup-gallery ">
					<a href="<?php echo get_template_directory_uri();?>/img/prod2.png"><img src="<?php echo get_template_directory_uri();?>/img/prod2.png" class="img-fluid pd" alt="room"></a>
					<a href="<?php echo get_template_directory_uri();?>/img/prod2.png">
						<div class="gallery-btn gallery-btn-2 ">
							<span><i class="fa fa-search" aria-hidden="true"></i></span></div>
					</a>
				</div>
				<div class="popup-gallery">
					<a href="<?php echo get_template_directory_uri();?>/img/prod3.png"><img src="<?php echo get_template_directory_uri();?>/img/prod3.png" class="img-fluid pd" alt="room"></a>
					<a href="<?php echo get_template_directory_uri();?>/img/prod3.png">
						<div class="gallery-btn gallery-btn-2 ">
							<span><i class="fa fa-search" aria-hidden="true"></i></span></div>
					</a>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
