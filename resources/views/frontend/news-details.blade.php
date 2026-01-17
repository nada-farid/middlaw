@extends('frontend.layouts.main')
@section('content')
<!-- Single content start -->
<section class="single-case-right-bar section-p-100 ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="">
                    <div class="blog--normal mb-80">
                        <div class="case-card home-2-case-card ">
                            <figure class="snip-case case-yellow">
                                <img src=" {{$news->inside_image}} " alt="">
                                <i class="ri-scales-3-line"></i>
                                <a href="{{route('frontend.news.show',$news->slug)}}"></a>
                            </figure>
                        </div>
                        <div class="case-card-desc ">
                            <p class="c-category text-uppercase mb-10">{{$news->created_at->format('d M Y')}}</p>
                            <h2 class="c-title mb-20"><a class="color-blue" href="{{route('frontend.news.show',$news->slug)}}">{{$news->title}}</a></h2>
                            <p class="mb-40 just">
                                {!! $news->description !!}
                            </p>

                            <footer class="blog-article-footer">
                                <div class="footer-top">

                                    {{-- <!-- Tags -->
												<div class="article-tags">
													<span>Tags:</span>
													<a href="#">Law</a>
													<a href="#">Legal Advice</a>
													<a href="#">Saudi Arabia</a>
												</div> --}}

                                    <!-- Share -->
                                    <div class="article-share">
                                        <span>Share:</span>

                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(route('frontend.news.show',$news->slug))}}" aria-label="Share on Facebook" class="share fb">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>

                                        <a href="https://x.com/share?url={{urlencode(route('frontend.news.show',$news->slug))}}" aria-label="Share on X" class="share x">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>

                                        <a href="https://www.linkedin.com/shareArticle?url={{urlencode(route('frontend.news.show',$news->slug))}}" aria-label="Share on LinkedIn" class="share in">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>

                                        <a href="https://wa.me/?text={{urlencode(route('frontend.news.show',$news->slug))}}" aria-label="Share on WhatsApp" class="share wa">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    </div>
                                </div>



                                <!-- Navigation -->
                                <div class="article-nav">
                                    <a href="{{route('frontend.news.show',$recentNews->first()->slug)}}" class="prev-article"><i class="fa-solid fa-arrow-right"></i> السابق </a>
                                    <a href="{{route('frontend.news.show',$recentNews->last()->slug)}}" class="next-article"> التالي <i class="fa-solid fa-arrow-left"></i></a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>






            </div>
        </div>
    </div>

</section>
<!-- Single content End -->
@endsection
