@extends('frontend.layouts.main')
@section('content')
<!-- Content Start -->
<div class="main-body">
    @include('frontend.partials.braedcrumb', ['title' => 'خدماتنا', 'sub_title' => 'خدمات مداد'])
    <section class="violence-wrapper violence-mob-wrap " style="background-image:none;">
        <div class="container">
            <div class="row">

                @include('frontend.partials.services',['services' => $services, 'inside' => true])
            </div>
        </div>
    </section>
@endsection
