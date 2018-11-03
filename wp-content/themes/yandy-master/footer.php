<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yandy-master
 */

?>


<footer class="footer1">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-xl-push-6 contact-text">
					<div class="top-h1-2"><span>Contact Us</span></div>
					<div class="footer-p1">We love hearing from you! If you have any questions, hit us up.</div>
					<ul class="header__section-footer_list">
						<li class="header__section-top_item header__section-top_date">
								<span class="js-today">Hours Today: <span></span></span>
						</li>
						<li class="header__section-top_item header__section-top_date">
							<a class="header-link" href="https://goo.gl/maps/xDTP4R9YHz12" target="_blank">
								<span><span class="header__section-top_title">Address: </span>1495 G ST, San Diego, CA 92101</span></a>
						</li>
						<li class="header__section-top_item header__section-top_date">
							<a href="tel:" class="header-link">
								<span class="header__section-top_title">Phone: </span><span>(619) 955-8755</span></a></li>
						<li class="header__section-top_item header__section-top_date">
							<a href="mailto:cheers@youandyours.com" class="header-link">
							<span><span class="header__section-top_title">Email: </span>Cheers@YouAndYours.com</span></a></li>
						<li class="header__section-top_item header__section-top_socials">
							<a href="https://www.instagram.com/youandyourssd/" class="social-link" target="_blank"><i class="icon-instagram-filled"></i></a>
							<a href="https://twitter.com/youandyourssd/" class="social-link" target="_blank"><i class="icon-twitter"></i></a>
							<a href="https://www.facebook.com/YouAndYoursSD/" class="social-link" target="_blank"><i class="icon-facebook"></i></a>
						</li>
					</ul>
				</div>
				<div class="col-lg-6 col-xl-pull-6">
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
	</footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<?php wp_footer(); ?>
</body>

</html>
