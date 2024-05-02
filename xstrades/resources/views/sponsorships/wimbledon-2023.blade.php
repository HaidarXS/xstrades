@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('seo.TITLE_WIMBLEDON') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_WIMBLEDON') }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE_WIMBLEDON') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_WIMBLEDON') }}">
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_WIMBLEDON') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_WIMBLEDON') }}">
@endsection
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-secondary fw-700">{{ __('sponsorships.WIMBLEDON') }}</h1>
            </div>
            <div class="col-12 mt-4">
                <img src="{{ asset('/img/wimbledon-banner.webp') }}" alt="{{ __('sponsorships.WIMBLEDON') }}"
                    class="img-fluid">
            </div>
        </div>

        <div class="row my-5">
            <div class="col-12 mb-4">
                <h2 class="text-navy text-center text-uppercase m-auto">{{ __('sponsorships.INTRODUCE_WIMBLEDON') }}</h2>
            </div>
            <div class="col-12">
                <p class="col-12 text-center">
                    {{ __('sponsorships.WIMBLEDON_DESCRIPTION') }}
                </p>
            </div>
        </div>
    </div>


    <div class="wimbledon d-flex justify-content-center">

        <div class="px-3">
            <img src="{{ asset('/img/wimbledon-swiper1.png') }}"
                alt="{{ __('sponsorships.WIMBLEDON') }} {{ __('sponsorships.SPONSORSHIPS') }}" class="img-fluid w-100">
        </div>
        <div class="px-3">
            <img src="{{ asset('/img/wimbledon-swiper2.png') }}"
                alt="{{ __('sponsorships.WIMBLEDON') }} {{ __('sponsorships.SPONSORSHIPS') }}" class="img-fluid w-100">
        </div>
        <div class="px-3">
            <img src="{{ asset('/img/wimbledon-swiper3.png') }}"
                alt="{{ __('sponsorships.WIMBLEDON') }} {{ __('sponsorships.SPONSORSHIPS') }}" class="img-fluid w-100">
        </div>
    </div>
    <div class="container">
        <hr class="mt-5">
    </div>

    @include('sections.easy')
@endsection
