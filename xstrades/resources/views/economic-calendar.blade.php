@extends('layouts.app')

@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('economic-calendar.ECONoMIC_CALENDAR'),
        'bannerDescription' => __('economic-calendar.PAGE_DESC'),
        'bannerImage' => asset('/img/academy-banners/calendar.png'),
        'mobileBanner' => asset('/img/academy-banners/economic-calendar-mobile.png'),
    ])
    <div class="container">
        <section class="py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <h2 class="text-navy text-center text-uppercase col-4 m-auto">
                        {{ __('economic-calendar.ECONoMIC_CALENDAR') }}</h2>
                </div>
                <div class="col-12 px-5">
                    <iframe class="eco-cal mt-4" src="https://www.tradays.com/en/economic-calendar/widget"
                        frameborder="0"></iframe>
                </div>

            </div>

        </section>
    </div>
@endsection

@section('scripts')
@endsection
