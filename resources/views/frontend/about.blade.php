@extends('frontend.layouts.main')
@section('content')
	<!-- Content Start -->
		<div class="main-body">
			@include('frontend.partials.braedcrumb', ['title' => 'عن مداد', 'sub_title' => 'مكتب مداد'])
			<!-- Features Section Start -->
			<!-- End Header banner -->
			<!-- Our client Succeed Start -->
			<section class="client-wrap back-white section-p-100 reveal1">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-7">
							<div class="">

								<p class="color-dark-blue  mobile-align just">
									{!! $setting->about_us !!}

								</p>
							</div>
						</div>
						<div class="col-12 col-md-5">
							<div class="rotating-div">
								<div class=' mb-60'>
									<img src="{{$setting->about_us_image ?? asset('frontend/assets/images/about01.jpg')}}" alt="Lawyers">
								</div>  

							</div>

						</div>
					</div>
				</div>
			</section>
			<!-- Our client Succeed End -->
			<section class="back-white violence-mob-wrap violence-back-v4 section-pb-100">
				<div class="container">
					<h3 class="d-none">Hidden</h3>
					<div class="row">
						<div class="col-12">
							<div class="some-page-wrapper">
								<div class="row-box">
									<div class="column-box mb-60-rs">
										<div class="column">
											<div class="violence-back">
												<div class="wel-icon-box">
													<img src="{{asset('frontend/assets/images/tabs/tab-icon-3.png')}}" alt="tab content image">
												</div>
												<span class="color-blue">
													رسالتنا
												</span>
												<div>
													{!! $setting->vision !!}

												</div>
											</div>
										</div>
									</div>
									<div class="column-box mb-60-rs">
										<div class="column">
											<div class="violence-back vb-v4">
												<div class="wel-icon-box">
													<img src="{{asset('frontend/assets/images/tabs/tab-icon-2.png')}}" alt="tab content image">
												</div>
												<span class="color-blue">
													رؤيتنا
												</span>
												<div>
													{!! $setting->mission !!}
													<br />	<br />
												</div>
											</div>
										</div>
									</div>
									<div class="column-box carbon-blue values">
										<div class="column">
											<div class=" vb-3 ">

												<h2>قيمنا</h2>


												<div>
													<ul>
														{!! $setting->values !!}
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Fight Violence End -->


		</div>
		<!-- Content End -->
@endsection