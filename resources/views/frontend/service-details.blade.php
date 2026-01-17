@extends('frontend.layouts.main')
@section('content')
@include('frontend.partials.braedcrumb', ['title' => 'خدماتنا', 'sub_title' => $service->name])
<section class="single-services-rightbar mobile-align section-p-100">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-8">
							<!-- Single services Start -->
							<div class="">
								<div class="container">
									<div class="row">
										<div class="col-12">
											<div class="single-services-slide mb-60" style="direction:ltr">
												<img class="img-100" src="{{ $service->service_image }}" alt="Services">

											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Single services End -->
							<!-- Single content start -->
							<div class="single-services-content reveal1">
								<div class="container">
									<div class="row g-0 d-flex align-items-center mb-40">
										<div class="col-12 col-md-2">
											<img class="mb-60-rs  single-shape" src="{{ $service->service_icon }}" alt="Services Icon">
										</div>
										<div class="col-12 col-md-10">
											<h2 class="color-blue">{{ $service->name }}</h2>
											<h3 class="d-none">Hidden</h3>
										</div>
									</div>
								</div>
								<div class="container">
									<div class="row">
										<div class="col-12">
											<p class="mb-10 color-blue just">
												{!! $service->content !!}
											</p>
										</div>
										<div class="col-12 col-md-6">
											<img class="mb-40 img-100 pbmit-animation-style1 reveal1" src="{{asset('frontend/assets/images/servise_single1.jpg')}}" alt="Services Image">
										</div>
										<div class="col-12 col-md-6">
											<img class="mb-40 img-100 pbmit-animation-style2 reveal1" src="{{asset('frontend/assets/images/servise_single2.jpg')}}" alt="Services Image">
										</div>

									</div>
								</div>
							</div>
							<!-- Single content End -->
						</div>
						<div class="col-12 col-md-4 mt-single">
							<div class="right-bar-services mb-40">
								<div class="right-bar-text text-center">
									<div class="subscribe-cap footer-list color-blue">خدمات اخرى</div>
									<img class="mb-30 img-100 shape-image" src="{{asset('frontend/assets/images/home/Shape.png')}}" alt="Shape">
								</div>
								<ul class="footer-menu-list single-services-list">
									@foreach($recentServices as $recentService)
                                    <li>
										<a href="{{ route('frontend.service.show', $recentService->slug) }}">
											<span class="color-dark-blue "><i class="ri-corner-down-left-line"></i>{{ $recentService->name }}</span>
										</a>
									</li>
                                    @endforeach
									
								</ul>
							</div>
							<div class="download-pdf carbon-blue mb-40">
								<div class="download-icon back-yellow d-flex align-items-center justify-content-center ">
									<i class="ri-file-download-line color-blue"></i>
								</div>
								<div>
									<h4 class="color-white">تحميل الملف التعريفي</h4>
									<a class="download-btn" href="javascript:void(0)" download>
										mdad.PDF  |  2.3 MB
									</a>
								</div>
							</div>
							<div class="carbon-blue assist-content text-center">
								<img class="mb-40 " src="{{asset('frontend/assets/images/logo_w_word.png')}}" width="100" alt="Brand logo">
								<h5 class="d-block mb-60 color-white">لحجز موعد او استشارة قانونية من فضلك اضغط هنا</h5>
								<div class="in-top button-whole-wrap sidebar-btn">
									<a href="{{ route('frontend.contact') }}" class="button-wrap">
										<span>
											حجز إستشارة <i class="ri-arrow-right-line"></i>
										</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
@endsection