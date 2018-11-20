<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yandy-master
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Favicon-->
	<link rel="shortcut icon" href="">
	<!-- Author Meta -->
	<meta name="author" content="Colorlib">
	<!-- Meta Description -->
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<!-- FB -->
	<meta property="og:image" content="/og-image.jpg">
	<meta property="og:image:width" content="172">
	<meta property="og:image:height" content="90">
	<meta property="og:title" content="<?php bloginfo('name'); ?> <?php wp_title(); ?>">
	<meta property="og:description" content="<?php bloginfo('description'); ?>">
	<meta property="og:url" content="http://blog.youandyours.com">

	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600" rel="stylesheet">
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9wW6PnbQ9m-zwooBwfCaagS0vQcjjeOo&libraries=places&sensor=false"></script>
 <?php wp_head(); ?>

 <!-- <script type="text/javascript" scr="http://localhost:8888/y2/wp-content/themes/yandy-master/assets/js/libs/handlebars.min.js"></script>
 <script type="text/javascript" scr="http://localhost:8888/y2/wp-content/themes/yandy-master/assets/js/plugins/storeLocator/jquery.storelocator.js"></script> -->
</head>

<body <?php body_class(); ?>>
	<div class="over">

		<div class="menu">
			<i class="fa fa-times" aria-hidden="true"></i>

				<span class="menu-mobile-show">
				<?php
					wp_nav_menu( array(
						'theme_location'  => 'menu-1',
						'menu'            => 'menu-1',
						'container'       => 'ul',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'my-menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					) ); ?>
				</span>

				<?php
				wp_nav_menu( array(
					'theme_location'  => 'menu-3',
					'menu'            => 'menu-3',
					'container'       => 'ul',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'my-menu',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => '',
				) ); ?>

		</div>
	</div>
	<section class="header">
		<div class="header__section-top">
			<div class="container">
				<ul class="header__section-top_list">
						<li class="header__section-top_item header__section-top_address">
							<a class="header-link" href="https://goo.gl/maps/xDTP4R9YHz12" target="_blank">
								<span><span class="header__section-top_title">Address: </span>1495 G ST, San Diego, CA 92101</span></a>
						</li>
						<li class="header__section-top_item header__section-top_date">
								<span class="js-today">Hours Today: <span></span></span>
								<a href="#" class="header__section-top_select"><i class="icon-angle-down"></i></a>
								<div class="header__section-top_hours">
									<div class="day-hours-1"><span>MON</span><span>CLOSED</span></div>
									<div class="day-hours-2"><span>TUES</span><span>CLOSED</span></div>
									<div class="day-hours-3"><span>WEDS</span><span>4PM - 10PM</span></div>
									<div class="day-hours-4"><span>THURS</span><span>4PM - 10PM</span></div>
									<div class="day-hours-5"><span>FRI</span><span>4PM - 10PM</span></div>
									<div class="day-hours-6"><span>SAT</span><span>NOON - 10PM</span></div>
									<div class="day-hours-0"><span>SUN</span><span>NOON - 10PM</span></div>
								</div>
							</li>
						<li class="header__section-top_item header__section-top_tel">
							<a href="tel:" class="header-link">
								<span class="header__section-top_title">Phone: </span><span>(619) 955-8755</span></a></li>
						<li class="header__section-top_item header__section-top_mail">
							<a href="mailto:cheers@youandyours.com" class="header-link">
							<span><span class="header__section-top_title">Email: </span>Cheers@YouAndYours.com</span></a></li>
						<li class="header__section-top_item header__section-top_socials">
							<a href="https://www.instagram.com/youandyourssd/" class="social-link" target="_blank"><i class="icon-instagram-filled"></i></a>
							<a href="https://twitter.com/youandyourssd/" class="social-link" target="_blank"><i class="icon-twitter"></i></a>
							<a href="https://www.facebook.com/YouAndYoursSD/" class="social-link" target="_blank"><i class="icon-facebook"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="container">
				<div class="header-bottom">

					<div class="logo-img">
						<?php the_custom_logo(); ?>
					</div>

					<div class="header-bottom__left">

						<?php

						wp_nav_menu( array(
							'theme_location'  => 'menu-2',
							'menu'            => 'menu-2',
							'container'       => 'ul',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'my-menu-2',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						) ); ?>

						<div class="top-header-btn">
							<i></i>
						</div>
					</div>

				</div>
			</div>
	</section>

	<div class="fixed-today-bar">
		<button type="button"><i class="fas fa-times"></i></button>
		<div class="fixed-today-bar__title">Directions / Hours Today</div>
		<div class="fixed-today-bar__hours js-today">1495 G ST, San Diego 92101 / <span></span></div>
	</div>

	<div class="col-12 col-lg-6 events-room-form mfp-hide" id="modalSubscribe">
		<form class="home-form" name="mc-embedded-subscribe-form" id="pfb-signup-submission" method="post">
			<div class="form-style row">
				<div class="col-md-12">
					<input type="text" type="text" name="EMAIL" placeholder="Email Address*" required>
				</div>
				<div class="col-md-6">
					<input id="pfb-signup-box-fname" type="text" value="" placeholder="First Name*" name="FNAME">
				</div>
				<div class="col-md-6">
					<input id="pfb-signup-box-lname" type="text" value="" placeholder="Last Name" name="LNAME">
				</div>
				<div class="clearfix">
					<button id="pfb-signup-button" type="submit" class="book-event-submit" id="bookEvent">
						<span class="book-event-submit__text">Subscribe</span>
						<span class="lds-rolle-wrap">
							<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
						</span>
					</button>
				</div>
			</div>
		</form>
	</div>
