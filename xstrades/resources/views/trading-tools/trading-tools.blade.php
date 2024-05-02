@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('seo.TITLE_TRADING_TOOLS') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_TRADING_TOOLS') }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE_TRADING_TOOLS') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_TRADING_TOOLS') }}">
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_TRADING_TOOLS') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_TRADING_TOOLS') }}">
@endsection
@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('trading-tools.TRADERS_TOOLS'),
        'bannerDescription' => __('trading-tools.PAGE_BANNER_SUBTITLE'),
        'bannerImage' => asset('/img/academy-banners/traders-tools.png'),
        'mobileBanner' => asset('/img/academy-banners/traders-tools-mobile.png'),
    ])
    <div class="container py-5">
        <div class="row justify-content-between pb-3">
            <div class="col-lg-12">
                <h1 class="text-secondary fw-700 text-center mb-5 ">{{ __('trading-tools.TRADERS_TOOLS') }}</h1>
                <p class="text-lg text-center mt-5">{!! __('trading-tools.TRADING_TOOLS_DESCRIPTION') !!}</p>
            </div>
        </div>
    </div>


    <div class="container py-5">
        <div class="row mb-3">
            <div class="col-lg-6 col-12 mt-lg-0 mt-4 d-flex justify-content-center">
                <div class="text-center">
                    <img width="60%" src="{{ asset('/img/trading-tools/calculator.png') }}" alt="{{ __('trading-tools.CALCULATOR') }}" class="img-fluid">
                    <br><br>
                    <h2 class="text-secondary">{!! __('trading-tools.CALCULATOR_DESCRIPTION') !!}</h2>
                    <p class="text-secondary fw-bold d-flex justify-content-end pe-6"><a class="text-secondary text-decoration-none fs-6" href="{{ asset('trading-tools') }}">{!! __('trading-tools.VIEW_MORE') !!} <i class="fa-solid fa-arrow-right"></i></a> </p>
                </div>
            </div>

            <div class="col-lg-6 col-12 mt-lg-0 mt-4 d-flex justify-content-center">
                <div class="text-center">
                    <img width="60%" src="{{ asset('/img/trading-tools/calendar.png') }}" alt="{{ __('trading-tools.CALENDAR') }}" class="img-fluid">
                    <br><br>
                    <h2 class="text-secondary">{!! __('trading-tools.CALENDAR_DESCRIPTION') !!}</h2>
                    <p class="text-secondary fw-bold d-flex justify-content-end pe-6"><a class="text-secondary text-decoration-none fs-6" href="{{ asset('economic-calendar') }}">{!! __('trading-tools.VIEW_MORE') !!} <i class="fa-solid fa-arrow-right"></i></a> </p>
                </div>
            </div>
        </div>
    </div>

@endsection
