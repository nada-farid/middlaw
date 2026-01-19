@extends('frontend.layouts.main')
@section('content')
@include('frontend.partials.braedcrumb', ['title' => 'المدونة', 'sub_title' => 'المدونة'])
<section class="blog-sidebar-page section-p-100 left-sidebar-res reveal1">

    <div class="container container-770">
        <div class="row">
            <div class="col-12">
                <img class="img-100 mb-20" src="{{$blog->photo}}" alt="{{$blog->title}}">
                <p class="c-category text-uppercase mb-10 line-height-24 color-dark-blue">
                    {{$blog->category->name}} | {{$blog->created_at->format('d M Y')}}
                </p>
                <h2 class="c-title mb-40">
                    <a class="color-blue" href="{{route('frontend.blog.show',$blog->slug)}}">
                        {{$blog->title}}
                    </a>
                </h2>

                <p class="color-dark-blue mb-10">
                    {{$blog->content}}
                </p>

                <div class="blog--quote back-white-light mb-40">
                    <div class="blog-quote-img color-blue">
                        <p class="single-content-36 mb-20">
                            {{$blog->content_2}}
                        </p>
                        <p class="color-dark-blue">– {{$blog->by}}</p>
                    </div>
                </div>

                <p class="color-dark-blue mb-10">
                    {{$blog->content_2}}
                </p>

                <div class="row mb-40">
                    <div class="col-12 col-md-6 mb-60-rs">
                        <img class="img-100 pbmit-animation-style1 reveal1" src="{{$blog->inside_image}}" alt="{{$blog->title}}">
                    </div>
                    <div class="col-12 col-md-6">
                        <img class="img-100 pbmit-animation-style2 reveal1" src="{{$blog->other_images}}" alt="{{$blog->title}}">
                    </div>
                </div>

                <p class="single-content-36 mb-20 color-blue">الخلاصة</p>
                <p class="color-dark-blue mb-40">
                    {{$blog->conclusion}}
                </p>

                <div class="row mb-40 align-items-center">
                    <div class="col-6 col-md-6 single-sharer d-flex justify-content-end">
                        <div class="article-share">
                            <span>Share:</span>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(route('frontend.blog.show',$blog->slug))}}" aria-label="Share on Facebook" class="share fb">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://x.com/share?url={{urlencode(route('frontend.blog.show',$blog->slug))}}" aria-label="Share on X" class="share x">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?url={{urlencode(route('frontend.blog.show',$blog->slug))}}" aria-label="Share on LinkedIn" class="share in">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a href="https://wa.me/?text={{urlencode(route('frontend.blog.show',$blog->slug))}}" aria-label="Share on WhatsApp" class="share wa">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 col-md-6">
                        <div class="right-container">
                            <a href="{{route('frontend.blog.show',$recentBlogs->first()->slug)}}" class="right-container-button">
                                <span class="short-text">
                                    <i class="material-icons ri-arrow-left-up-line color-blue"></i>
                                </span>
                                <span class="long-text">{{__('filament.blog.fields.previous_blog')}}</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 d-flex justify-content-end">
                        <div class="right-container">
                            <a href="{{route('frontend.blog.show',$recentBlogs->last()->slug)}}" class="right-container-button">
                                <span class="long-text next-blog-1">{{__('filament.blog.fields.next_blog')}}</span>
                                <span class="short-text next-blog">
                                    <i class="material-icons ri-arrow-right-up-line color-blue"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection