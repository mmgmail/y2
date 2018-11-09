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
	<title><?php bloginfo('name'); ?></title>
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600" rel="stylesheet">
 <?php wp_head(); ?>
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
