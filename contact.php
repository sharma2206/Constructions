<?php
include 'header.php'
?>

<body>

	<!-- Preloader -->
	<div class="loader-mask">
		<div class="loader">
			"Loading..."
		</div>
	</div>

	<main class="main-wrapper">

		<!-- Navigation -->
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-white ">
				<div class="container">
					<a class="navbar-brand" href="#">
						<img class="logo" src="assets/img/logo2.png" width="50px" height="50px" alt="logo">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fa-solid fa-bars"></i>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link " aria-current="page" href="index.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " aria-current="page" href="about.php">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " aria-current="page" href="portfolio.php">Portfolio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " aria-current="page" href="services.php">Services</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active-color" aria-current="page" href="contact.php">Contact</a>
							</li>
						</ul>
						<div class="d-flex">
							<span class="contact">Call us:</span>
							<a href="nav-link" class="contact ">+91 87605
								13928</a>
						</div>
						<div class=" d-flex">
							<div class="social-icon">
								<i class="fa-brands fa-twitter"></i>
							</div>
							<div class="social-icon">
								<i class="fa-brands fa-facebook-f"></i>
							</div>
							<div class="social-icon">
								<i class="fa-brands fa-youtube"></i>
							</div>
							<div class="social-icon">
								<i class="fa-brands fa-instagram"></i>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</header>
		<!-- end navigation -->

		<div class="content-wrapper content-wrapper--boxed oh">

			<!-- Page Title -->
			<section class="page-title bg-dark-overlay text-center" style="background-image: url(assets/img/contact.jpeg);">
				<div class="container">
					<div class="page-title__holder">
						<h1 class="page-title__title">Contact</h1>
					</div>
				</div>
			</section> <!-- end page title -->

			<!-- Contact -->
			<section class="section-wrap">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="contact">
								<h5 class="contact__title">Sri Jayam Construction</h5>
								<ul class="contact__items">
									<li class="contact__item">
										<span class="contact__item-label">Address:</span>
										<address>22/41-B, L.R.N Complex,<br> kettukadai, Vellandivalasu, Idappadi,<br>
											Tamil Nadu 637105</address>
									</li>
									<li class="contact__item">
										<span class="contact__item-label">Phone: </span>
										<a href="tel:+918760513928">+91 87605 13928</a>
									</li>
									<li class="contact__item">
										<span class="contact__item-label">Email: </span>
										<a href="mailto:jayamconstruction@gmail.com">jayamconstruction@gmail.com</a>
									</li>
								</ul>

								<h5 class="contact__title mt-40">Follow Us</h5>
								<div class="socials">
									<a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
									<a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
									<a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
									<a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
								</div>

							</div>
						</div>
						<div class="col-lg-7 offset-lg-1">
							<h2 class="section-title">Get a Free Quote</h2>
							<p class="mb-40">If you have any question about project cost, get in touch.</p>
							<!-- Contact Form -->
							<form id="contact-form" class="contact-form material" method="post" action="#">

								<div class="row">
									<div class="col-lg-6">
										<!-- Name -->
										<div class="material__form-group form-group">
											<input type="text" name="name" id="name" class="form-input material__input" required="">
											<label for="name" class="material__label">Name
												<abbr title="required" class="required">*</abbr>
											</label>
											<span class="material__underline"></span>
										</div>
									</div>
									<div class="col-lg-6">
										<!-- Email -->
										<div class="material__form-group form-group">
											<input type="email" name="email" id="email" class="form-input material__input" required="">
											<label for="email" class="material__label">Email
												<abbr title="required" class="required">*</abbr>
											</label>
											<span class="material__underline"></span>
										</div>
									</div>
								</div>

								<!-- Subject -->
								<div class="material__form-group form-group">
									<input type="text" name="subject" id="subject" class="form-input material__input">
									<label for="subject" class="material__label">Subject
									</label>
									<span class="material__underline"></span>
								</div>

								<div class="material__form-group form-group">
									<textarea id="message" name="message" rows="7" class="form-input material__input" required=""></textarea>
									<label for="message" class="material__label">Message
										<abbr title="required" class="required">*</abbr>
									</label>
									<span class="material__underline"></span>
								</div>

								<input type="submit" class="btn btn--lg btn--color btn--button" value="Send Message" id="submit-message">
								<div id="msg" class="message"></div>
							</form>
						</div>
					</div>
				</div>
			</section> <!-- end contact -->


			<!-- Google Map -->
			<!-- <div id="google-map" class="gmap" data-address="V Tytana St, Manila, Philippines"></div> -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1001681.8234417825!2d76.85681154935904!3d11.274666144623119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba959742b016c53%3A0xa0feaac8c8ad6920!2sSri%20Jayam%20Bajaj!5e0!3m2!1sen!2sin!4v1649346125488!5m2!1sen!2sin" width="100%" height="600" style="margin:20px;padding-bottom: 40px;padding-top: 0px;" allowfullscreen=true loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


			<?php
			include 'footer.php'
			?>