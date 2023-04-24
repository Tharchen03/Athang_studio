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


</body>
</html>