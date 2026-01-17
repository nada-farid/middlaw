@extends('frontend.layouts.main')
@section('content')
@include('frontend.partials.braedcrumb', ['title' => 'الأخبار', 'sub_title' => 'الأخبار'])
	<section class="wakil-blog-layout section-p-100">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<h2>أحدث الاخبار  </h2>
							<img class="mt-10 mb-60 img-100 shape-image" src="{{asset('frontend/assets/images/home/Shape.png')}}" alt="Shape">
						</div>
                        @foreach($news as $new)
						<div class="col-12 col-md-4">
							<div class="blog__box">
								<div class="blog_image">
									<h3 class="d-none">None</h3>
									<img src="{{$new->photo}}" alt="blog-image">
									<div class="blog_category">
										<h4>{{$new->created_at->format('d M Y')}}</h4>
									</div>
								</div>
								<div class="blog_bottom_content">
									<div class="blog_title">
										<h2>
											<a href="{{route('frontend.news.show',$new->slug)}}">
												{{$new->title}}
											</a>
										</h2>
									</div>
									<div class="blog_para">
										<p class="mt-20 just">
												{{$new->short_description}}
										</p>
									</div>
								</div>
							</div>
						</div>
                        @endforeach
						

					</div>
				</div>
			</section>
             {{ $news->links(
                'vendor.pagination.custom'
            ) }}
@endsection