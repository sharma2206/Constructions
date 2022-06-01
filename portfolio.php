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
								<a class="nav-link active-color" aria-current="page" href="portfolio.php">Portfolio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " aria-current="page" href="services.php">Services</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " aria-current="page" href="contact.php">Contact</a>
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
			<section class="page-title bg-dark-overlay text-center" style="background-image: url(assets/img/portfolio/portfolio.jpg);">
				<div class="container">
					<div class="page-title__holder">
						<h1 class="page-title__title">Portfolio Gallery</h1>
						<p class="page-title__subtitle">For each project we establish relationships with partners</p>
					</div>
				</div>
			</section> <!-- end page title -->

			<!-- Portfolio -->
			<section class="section-wrap">
				<div class="container-fluid container-semi-fluid">

					<!-- Filter -->
					<div class="masonry-filter text-center">
						<a class="filter active" data-filter="*">All</a>
						<a class="filter" data-filter=".residential">Residential</a>
						<a class="filter" data-filter=".commercial">Commercial</a>
						<a class="filter" data-filter=".interior">Interior</a>
						<a class="filter" data-filter=".landscape">Landscape</a>
					</div> <!-- end filter -->

					<div class="row masonry-grid">
					
						<div class="masonry-item col-lg-3 project hover-trigger residential">
							<div class="project__container">
								<div class="project__img-holder">
									<a>
										<img src="assets/img/portfolio/1.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Keangnam Grand Hall</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger commercial">
							<div class="project__container">
								<div class="project__img-holder">
									<a>
										<img src="assets/img/portfolio/2.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Green House</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger interior">
							<div class="project__container">
								<div class="project__img-holder">
									<a>
										<img src="assets/img/portfolio/3.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Contemporary Villa</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger landscape">
							<div class="project__container">
								<div class="project__img-holder">
									<a>
										<img src="assets/img/portfolio/4.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Keangnam Grand Hall</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger residential">
							<div class="project__container">
								<div class="project__img-holder">
									<a>
										<img src="assets/img/portfolio/5.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Business Office</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger commercial">
							<div class="project__container">
								<div class="project__img-holder">
									<a>
										<img src="assets/img/portfolio/6.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Horizon Urban</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger interior">
							<div class="project__container">
								<div class="project__img-holder">
									<a>
										<img src="assets/img/portfolio/7.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Center for Climate Change</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger landscape">
							<div class="project__container">
								<div class="project__img-holder">
									<a>
										<img src="assets/img/portfolio/8.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Northern Slope Sanctuary</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger residential">
							<div class="project__container">
								<div class="project__img-holder">
									<a>
										<img src="assets/img/portfolio/9.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Australian Museum</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger commercial">
							<div class="project__container">
								<div class="project__img-holder">
									<a>
										<img src="assets/img/portfolio/10.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Texas Children's Hospital</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger interior">
							<div class="project__container">
								<div class="project__img-holder">
									<a>
										<img src="assets/img/portfolio/11.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Modern Living Room</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger landscape">
							<div class="project__container">
								<div class="project__img-holder">
									<a>
										<img src="assets/img/portfolio/12.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Swift Style Flat</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger residential">
							<div class="project__container">
								<div class="project__img-holder">
									<a>
										<img src="assets/img/portfolio/13.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Bulgarian Getaway</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger commercial">
							<div class="project__container">
								<div class="project__img-holder">
									<a>
										<img src="assets/img/portfolio/14.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Living Room Interior</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger interior">
							<div class="project__container">
								<div class="project__img-holder">
									<a>
										<img src="assets/img/portfolio/15.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Norwegian Cold Proof Home</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger landscape">
							<div class="project__container">
								<div class="project__img-holder">
									<a>
										<img src="assets/img/portfolio/16.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">East Bethesda Market</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

					</div>
				</div>
			</section> <!-- end portfolio -->

			<?php
			include 'footer.php'
			?>