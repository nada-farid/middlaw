@extends('frontend.layouts.main')
@section('content')
@include('frontend.partials.braedcrumb', ['title' => 'المدونة', 'sub_title' => 'المدونة'])
<!-- Our client Succeed Start -->
			<section class="blog-sidebar-page section-p-100">
				<div class="container">
					<div class="row">
						<h2 class="d-none">المدونة</h2>
						<h3 class="d-none">المدونة</h3>

						<div class="col-12 col-md-8">
							<div class="row case-card-v2 blog-twocol-grid blog-two-col-sidebar">

								@foreach($blogs as $blog)
								<div class="col-12 col-md-6">
									<div class="case-card home-2-case-card">
										<figure class="snip-case case-yellow">
											<img src="{{$blog->photo}}" alt="{{$blog->title}}">
											<i class="ri-scales-3-line"></i>
											<a href="{{route('frontend.blog.show',$blog->slug)}}"></a>
										</figure>
										<div class="case-card-desc">
											<p class="c-category text-uppercase">{{$blog->category->name}}</p>
											<h4 class="c-title">
												<a href="{{route('frontend.blog.show',$blog->slug)}}">
													{{$blog->title}}
												</a>
											</h4>
										</div>
									</div>
								</div>
								@endforeach
					
							

								<div class="col-12 justify-content-center d-flex">
									{{ $blogs->links(
										'vendor.pagination.custom'
									) }}
								</div>

							</div>
						</div>

						<div class="col-12 col-md-4">

							<div class="search-box input-group mb-40">
								<input type="text" class="form-control blog-search" placeholder="ابحث عن مقال">
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="ri-search-line color-yellow"></i>
									</span>
								</div>
							</div>

							<div class="right-bar-services mb-40">
								<div class="right-bar-text text-center">
									<div class="subscribe-cap footer-list color-blue">التصنيفات</div>
									<img class="mb-30 img-100 shape-image" src="assets/images/home/Shape.png" alt="شكل">
								</div>

								<ul class="footer-menu-list single-services-list blog-categories">
									@foreach($categories as $category)
									<li><span class="color-dark-blue"><i class="ri-corner-down-left-line"></i>{{$category->name}}</span><span class="count-case">({{$category->blogs_count}})</span></li>
									@endforeach
								</ul>
							</div>

							<div class="download-pdf carbon-blue mb-40">
								<div class="download-icon back-yellow d-flex align-items-center justify-content-center ">
									<i class="ri-file-download-line color-blue"></i>
								</div>
								<div>
									<h4 class="color-white">{{__('filament.blog.fields.download_pdf')}}</h4>
									<a class="download-btn" href="{{$setting->download_pdf}}" download="">
										{{__('filament.blog.fields.download_pdf_name')}}  |  {{__('filament.blog.fields.download_pdf_size')}}
									</a>
								</div>
							</div>

							<div class="carbon-blue assist-content text-center">
								<img class="mb-40 " src="{{asset('frontend/assets/images/logo_w_word.png')}}" width="100" alt="Brand logo">
								<h5 class="d-block mb-60 color-white">لحجز موعد او استشارة قانونية من فضلك اضغط هنا</h5>
								<div class="in-top button-whole-wrap sidebar-btn">
									<a href="{{route('frontend.contact')}}" class="button-wrap">
										<span>
											حجز إستشارة <i class="ri-arrow-left-line"></i>
										</span>
									</a>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>

			<!-- Fight Violence End -->

@endsection