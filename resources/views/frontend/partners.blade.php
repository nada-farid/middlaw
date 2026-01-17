@extends('frontend.layouts.main')
@section('content')
@include('frontend.partials.braedcrumb', ['title' => 'الشركاء', 'sub_title' => 'شركاء مداد'])
<section class="meet-expert back-white section-pb-100">
    <div class="container">
        <div class="row mobile-align">
            <div class="col-12 mb-20">
                <h3 class="d-none">Hidden</h3>
                <h4 class="d-none">Hidden</h4>
                <h5 class="d-none">Hidden</h5>
            </div>
            @foreach($partners as $partner)
            <div class="col-6 col-md-3 ">

                <div class="team-member text-center">
                    <div class="team-img p-3">
                        <img src="{{ $partner->image }}" alt="Team member">

                    </div>

                </div>

            </div>

            @endforeach

        </div>
    </div>
</section>
<!-- Fight Violence End -->
@endsection
