@extends('frontend.layouts.main')
@section('content')
<!-- Single content start -->
<section class="blog-sidebar-page section-p-100">
    <div class="container">
        <div class="row left-sidebar-res">
            <div class="col-12 col-md-6">
                <h2 class="color-blue">بيانات التواصل</h2>
                <img class="mt-10 mb-20 img-100 shape-image" src="{{asset('frontend/assets/images/home/Shape.png')}}" alt="Shape">
                <div class="contact-information">
                    <div class="d-flex mb-40">
                        <div class="img-calls color-blue">
                            <i class="fa-solid fa-mobile"></i>
                        </div>
                        <div class="calls">
                            <p><a href="tel:{{$setting->phone}}">{{$setting->phone}}</a></p>

                        </div>
                    </div>
                    <div class="d-flex mb-40">
                        <div class="img-calls color-blue">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="calls">
                            <p><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="img-calls color-blue">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="calls">
                            <p class="color-dark-blue">
                                {{$setting->address}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-60-rs">
                <h2 class="color-blue">إرسال رسالة</h2>
                <img class="mt-10 mb-20 img-100 shape-image" src="{{asset('frontend/assets/images/home/Shape.png')}}" alt="Shape">
                <div class="comment-form-wrapper">
                    <div class="form-contact">
                        <form class="text-left comment-form" action="{{route('frontend.contact.store')}}" method="post">
                            @csrf
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="input-block">
                                        <input type="text" name="name" class="form-control floating-placeholder" placeholder="الاسم*" value="{{old('name')}}" required>
                                    </div>
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="input-block">
                                        <input type="email" name="email" class="form-control floating-placeholder" placeholder="البريد الإلكتروني*" value="{{old('email')}}" required>
                                        @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-block">
                                        <input type="text" name="phone" class="form-control floating-placeholder" placeholder="عنون الرسالة *" value="{{old('phone')}}" required>
                                        @error('phone')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-block">
                                        <textarea name="message" class="form-control floating-placeholder" rows="3" placeholder="الرسالة*" value="{{old('message')}}" required></textarea>
                                        @error('message')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 form-button mobile-align case-mt ">
                                    <div class="send-btn button-wrap-case1">
                                        <button type="submit" class="button-wrap button-wrap-case">
                                            <span>
                                                إرسال <i class="ri-arrow-right-line"></i>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Single content end -->
<!-- Map Section Start -->
<section class="map section-pb-100">
    <h2 class="d-none">none</h2>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <iframe class="contact-iframe" src="{{$setting->map_url}}" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- Map Section End -->
@endsection
