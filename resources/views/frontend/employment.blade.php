@extends('frontend.layouts.main')
@section('style')
	<style>

        .container {
            max-width: 650px;
            margin: 50px auto;
            background: #fff;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }
    
	</style>
@endsection
@section('content')
<!-- Content Start -->
<div class="main-body">
    @include('frontend.partials.braedcrumb', ['title' => 'التوظيف ', 'sub_title' => 'التوظيف'])
    <div class="container">

        <form class="job-form" action="{{route('frontend.employment.store')}}" enctype="multipart/form-data" method="post">
            @csrf

            <div class="field">
                <input type="text" id="name" name="name" value="{{old('name')}}" required placeholder=" ">
                <label for="name">الاسم الكامل</label>
                <i class="fa-solid fa-user"></i>
				@error('name')
					<span class="text-danger">{{$message}}</span>
				@enderror
            </div>

            <div class="field">
                <input type="text" id="address" name="address" required placeholder=" ">
                <label for="address">العنوان</label>
                <i class="fa-solid fa-location-dot"></i>
				@error('address')
					<span class="text-danger">{{$message}}</span>
				@enderror
            </div>

            <div class="field">
                <input type="text" id="phone" name="phone" value="{{old('phone')}}" required placeholder=" ">
                <label for="phone">رقم الهاتف</label>
                <i class="fa-solid fa-phone"></i>
				@error('phone')
					<span class="text-danger">{{$message}}</span>
				@enderror
            </div>

            <div class="field">
                <input type="email" id="email" name="email" value="{{old('email')}}" required placeholder=" ">
                <label for="email">البريد الإلكتروني</label>
                <i class="fa-solid fa-envelope"></i>
				@error('email')
					<span class="text-danger">{{$message}}</span>
				@enderror
            </div>

            <div class="field">
                <input type="text" id="position" name="position" value="{{old('position')}}" required placeholder=" ">
                <label for="position">الوظيفة المطلوبة</label>
                <i class="fa-solid fa-briefcase"></i>
				@error('position')
					<span class="text-danger">{{$message}}</span>
				@enderror
            </div>

            <div class="field">
                <textarea id="experience" name="experience" value="{{old('experience')}}" rows="4" placeholder=" "></textarea>
                <label for="experience">الخبرة العملية</label>
                <i class="fa-solid fa-clipboard-list"></i>
				@error('experience')
					<span class="text-danger">{{$message}}</span>
				@enderror
            </div>

            <div class="field">
                <input type="file" id="resume" name="resume"  required>
				@error('resume')
					<span class="text-danger">{{$message}}</span>
				@enderror
            </div>

            <button class="btn-submit" type="submit">إرسال الطلب</button>

        </form>
    </div>

</div>
<!-- Content End -->
@endsection
