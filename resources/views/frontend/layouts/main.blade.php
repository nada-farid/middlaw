<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>شركة مداد القانون</title>
	<link rel="icon" href="{{ asset('frontend/assets/images/favicon/favicon-icon.png') }}">
	<link href="{{ asset('frontend/assets/fonts/remixicon.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Mulish:wght@500;600;700;800;900&display=swap"
		  rel="stylesheet">
	<link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/assets/css/slick.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/assets/css/custom.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/assets/css/cursor.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/assets/css/media-query.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>
	<!-- Main Body Start -->
	<main class="site-content">
		<!-- Preloader Start -->
		<div class="preloader">
			<div class="vertical-centered-box">
				<div class="content">
					<div class="loader-circle"></div>
					<div class="loader-line-mask">
						<div class="loader-line"></div>
					</div>
					<img src="{{ asset('frontend/assets/images/home/preloader.png') }}" alt="">
				</div>
			</div>
		</div>
		<!-- Preloader End -->
		<!-- Header Start -->
		<div class="page-header page-header-v3 back-white">
			<div class="header-top-bar carbon-blue">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12 col-md-4 top-bar-img text-center">

						</div>
						<div class="col-12 col-md-4 top-bar-text text-center color-white">
							{{ $setting->site_name }}
						</div>
						<div class="col-12 col-md-4">
							<div class="d-none d-md-flex   top-bar-img justify-content-end   text-left">
								<div class="top-bar-mail">
									<a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
								</div>
								<div class="top-bar-phone">
									<a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<header class="header_area common-header home-3-header" id="header">
			<div class="main_header_area animated">
				<div class="container-fluid nav-padding">
					<nav id="navigation1" class="navigation">
						<div class="nav-header">
							<a class="nav-brand" href="{{ route('frontend.home') }}"><img class="" src="{{ $setting->logo ?? asset('frontend/assets/images/logo.png') }}" alt="Brand logo" ></a>
							<div class="nav-toggle"></div>
						</div>
						<div class="nav-menus-wrapper">
							<ul class="nav-menu align-to-right">
								<li class="active">
									<a href="{{ route('frontend.home') }}"> الرئيسية</a>
								</li>
								<li>
									<a href="{{ route('frontend.about') }}"> تعرف علينا</a>
								</li>
								<li>
									<a href="{{ route('frontend.jobs') }}"> التوظيف </a>
								</li>
								<li>
									<a href="{{ route('frontend.services') }}"> خدماتنا </a>
								</li>
								<!--<li>
								<a href="javascript:void(0)">خدماتنا </a>
								<ul class="nav-dropdown">
									<li><a href="our-services-1.html">Our services 1</a></li>
									<li><a href="our-services-2.html">Our services 2</a></li>
									<li><a href="our-services-3.html">Our services 3</a></li>
									<li>
										<a href="javascript:void(0)">Single services</a>
										<ul class="nav-dropdown">
											<li><a href="#">Single services standard</a></li>
											<li><a href="#">Single services Right</a></li>
											<li><a href="#">Single services Left</a></li>
										</ul>
									</li>
								</ul>
							</li>-->
								<li>
									<a href="{{ route('frontend.partners') }}"> الشركاء </a>
								</li>
								<li>
									<a href="{{ route('frontend.news') }}"> الأخبار </a>
								</li>
								<li>
									<a href="{{ route('frontend.blog') }}"> المدونة </a>
								</li>
								<li>
									<a href="{{ route('frontend.contact') }}"> تواصل معنا</a>
								</li>
							</ul>
						</div>
						<div class="button-box">
							<a href="#contact" class="button-wrap heder-btn">
								<span>
									حجز موعد <i class="ri-arrow-left-line"></i>
								</span>
							</a>
						</div>
					</nav>
				</div>
			</div>
		</header>
		
		<!-- Header End -->
         @yield('content')
        <!-- Footer top Start  -->
		<!-- Footer top End  -->
		<!-- Footer Start -->
		<footer class="footer-block-home-1 ">

			<div class="wrapper">
				<ul class="social ">
					<li>
						<a href="{{ $setting->twitter_url }}" class="social-item" target="_blank">
							<i class="ri-twitter-fill"></i>
						</a>
					</li>
					<li>
						<a href="{{ $setting->facebook_url }}" class="social-item" target="_blank">
							<i class="ri-facebook-fill"></i>
						</a>
					</li>
					<li>
						<a href="{{ $setting->linkedin_url }}" class="social-item" target="_blank">
							<i class="ri-linkedin-fill"></i>
						</a>
					</li>
					<li>
						<a href="{{ $setting->instagram_url }}" class="social-item" target="_blank">
							<i class="ri-instagram-line"></i>
						</a>
					</li>
				</ul>
			</div>

			<div class="row footer-bottom-copyright text-center">
				<div class="col-12 color-dark-blue">

					<strong>
						{{ $setting->footer_text }} © 2026 <a href="{{ $setting->website_url }}" target="_blank">{{ $setting->website_name }}</a>
					</strong><br />
					تصميم وبرمجة تكامل الرؤى
				</div>

			</div>
		</footer>
		<!-- Footer End -->
		<!-- Page cursor Start -->
		<div class="cursor cursor-shadow"></div>
		<div class="cursor cursor-dot"></div>
		<!-- Page cursor End -->
		<!-- Back-to-top Start -->
		<a href="#content" class="back-to-top">
			<span class="back-to-top-text"><i class="ri-arrow-up-s-line"></i></span>
		</a>
		<!-- Back-to-top End -->
	</main>
	<!-- Main Body End -->
	<!-- Main Body End -->
	<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/jquery.placeholder.label.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/cursor.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/menu.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/slider-custom.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/slider.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/slider1.js') }}"></script>    
	<script src="{{ asset('frontend/assets/js/back-to-top.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/counter.js') }}"></script>
    @yield('scripts')
</body>
</html>

