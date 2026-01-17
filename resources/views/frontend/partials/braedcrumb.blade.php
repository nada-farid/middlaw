<section class="banner-header-section">
    <div class="row">
        <div class="col-12">
            <div class="page-thumbnails">
                <img src="{{$setting->background_image ?? asset('frontend/assets/images/bread.jpg')}}" class="" alt="About Banner">
                <div class="black-overlay"></div>
                <div class="banner-header-content">
                    <h1 class="page-title">
                        {{$title}}
                    </h1>
                    <ul class="breadcrumb fadeInUp animated">
                        <li class="crumb cl"><a class="color-white" href="{{route('frontend.home')}}">الرئيسية</a></li>

                        <li class="crumb current color-yellow">{{$sub_title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
