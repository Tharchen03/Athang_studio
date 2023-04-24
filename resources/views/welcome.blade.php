file name welcome.blade.php
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:regular,500,600,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="nullstyle.css">
	<link rel="stylesheet" href="style.css">

	<title>Athang Studio</title>
</head>
<body>

	<div class="wrapper">
		@include('navbar')
	<div class="container">
		@yield('content')
	</div>

	
		<main class="main">
			<section class="home" id="home">
				<div class="container">
					<div class="home__inner">
						<div class="home__items">
							<h1 class="home__title">Athang  <br> is waiting for you</h1>
							<p class="home__subtitle text">is a pioneering software development and training academy firm greatly driven by the information technology.
 
              The company was founded in 2005 with the aim to meet the ever changing demand of the customers in the field of ICT. Athang strives for the excellence in offering our services, be it a training programme or developing your website or producing an animation work that our audience would love to watch or restoring your internet breakdown and many more…
  
               As a company, Athang believes in the team work and democratic working culture to bring the best of every employees at personal as well as professional level.</p>
							
                 <a href="https://www.athang.com/public/w" class="home__link btn">Know more</a>
						</div>
						<div class="home__slider">
							<div class="home__image">
								<img src="https://www.athang.com/public/images/logo.jpg" alt="home img" class="home__img img">
							</div>

							<div class="home__image">
 						<video  controls>
                   <source src="https://vimeo.com/user19468877?embedded=true&source=owner_name&owner=19468877" type="video/mp4">
                 Your browser does not support the video tag.
                        </video>
							</div>
							<div class="home__image">
								<img src="https://www.athang.com/public/images/logo.jpg" alt="home img" class="home__img img">
							</div>
							<div class="home__image">
								<img src="https://www.athang.com/public/images/logo.jpg" alt="home img" class="home__img img">
							</div>
						</div>
					</div>
				</div>
			</section>


			<section class="contact" id="contact">
				<div class="container">
					<div class="contact__inner">
						<h2 class="contact__title">Contact Us</h2>
						<form action="#">
							<div class="contact__form">
								<div class="contact__input">
									<input type="text" class="contact__name" placeholder="Your Name">
								</div>
								<div class="contact__input">
									<input type="email" class="contact__name" placeholder="Your Mail">
								</div>
								<div class="contact__input">
									<input type="tel" class="contact__name" placeholder="Phone Number">
								</div>
								<div class="contact__input">
									<textarea name="text" placeholder="Message"></textarea>
								</div>
								<div class="contact__input">
									<button class="contact__btn btn" type="submit">Send Message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>

			<div class="partners">
				<div class="container">
					<div class="partners__inner">
						<div class="partners__image">
							<img src="11.png" alt="partners" class="partners__img">
						</div>
						<div class="partners__image">
							<img src="2.png" alt="partners" class="partners__img">
						</div>
						<div class="partners__image">
							<img src="3.png" alt="partners" class="partners__img">
						</div>
						<div class="partners__image">
							<img src="4.png" alt="partners" class="partners__img">
						</div>
					</div>
				</div>
			</div>
		</main>
	
		<footer class="footer">
			<div class="container">
				<div class="footer__inner">
					<div class="footer__block">
						<a href="https://www.athang.com/public/w" class="footer__logo logo">
							<img src="Athang_logo.jpg" alt="logo" class="logo__img img">
							<span>Athang Studio</span>
						</a>
						<div class="footer__text text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo impedit consectetur facilis?
						</div>
						<div class="footer__socials">
							<a href="https://www.facebook.com/sherab.tharchen.1460" class="footer__social">
								<img src="fb.svg" alt="footer img" class="footer__img img">
							</a>
							<a href="https://www.instagram.com/tharchen_03/" class="footer__social">
								<img src="in.svg" alt="footer img" class="footer__img img">
							</a>
							<a href="https://twitter.com/home" class="footer__social">
								<img src="tw.svg" alt="footer img" class="footer__img img">
							</a>
						</div>
					</div>
					<div class="footer__block footer-contact">
						<div class="footer-contact__header">Contact Us</div>
						<ul class="footer-contact__list">
							<li class="footer-contact__item text">
								<a href="tel:+123456789123" class="footer-contact__link">+12(345)678-91-23</a>
							</li>
							<li class="footer-contact__item text">
								<a href="delicious@gmail.com" class="footer-contact__link">delicious@gmail.com</a>
							</li>
							<li class="footer-contact__item text">
								<a href="https://www.google.com/maps/place/1101+Central+Park+S,+New+York,+NY+10019,+США/@40.7677488,-73.9834272,17z/data=!3m1!4b1!4m5!3m4!1s0x89c258f648b163ef:0x43bd13fc89b52346!8m2!3d40.7677448!4d-73.9812385" class="footer-contact__link" target="_blank">Central Park, Manhattan</a>
							</li>
						</ul>
					</div>
					<div class="footer__block footer-link">
						<div class="footer-link__header">Explore</div>
						<ul class="footer-link__list">
							<li class="footer-link__item text">
								<a href="#" class="footer-link__link">About Us</a>
							</li>
							<li class="footer-link__item text">
								<a href="#" class="footer-link__link">Blog</a>
							</li>
							<li class="footer-link__item text">
								<a href="#" class="footer-link__link">Contact Us</a>
							</li>
							<li class="footer-link__item text">
								<a href="#" class="footer-link__link">Privacy Policy</a>
							</li>
						</ul>
					</div>
					<div class="footer__block footer-link">
						<div class="footer-link__header">Our Service</div>
						<ul class="footer-link__list">
							<li class="footer-link__item text">
								<a href="#" class="footer-link__link">Outdoor Catering</a>
							</li>
							<li class="footer-link__item text">
								<a href="#" class="footer-link__link">Industrial Services</a>
							</li>
							<li class="footer-link__item text">
								<a href="#" class="footer-link__link">Events & Exhibition</a>
							</li>
							<li class="footer-link__item text">
								<a href="#" class="footer-link__link">Hospital Catering</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer__copyright">
					<div class="footer__cooper text">Copyright © 
						<a href="https://dimafomaa.online" class="footer__link-bio" target="_blank">dimafomaa</a>, 2023. All rights reserved.
					</div>
				</div>
			</div>
		</footer>
	
	</div>
	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	<script src="slick.min.js"></script>
	<script src="script.js"></script>
</body>
</html>