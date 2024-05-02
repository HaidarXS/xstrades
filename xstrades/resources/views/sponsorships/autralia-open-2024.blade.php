@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('seo.TITLE_GARROS') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_GARROS') }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE_GARROS') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_GARROS') }}">
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_AUSTRALIA') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_AUSTRALIA') }}">
@endsection
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-secondary fw-700">{{ __('sponsorships.AUSTRALIA_OPEN') }}</h1>
            </div>
            <div class="col-12 mt-4">
                <img src="{{ asset('/webp/sponsorship/TennisCourt-02.webp') }}"
                    alt="{{ __('sponsorships.ROLAND_GARROS') }}" class="img-fluid">
            </div>
        </div>

        <div class="row my-5">
            <div class="col-12 mb-4">
                <h2 class="text-navy text-center text-uppercase m-auto">{{ __('sponsorships.AUSTRALIA_OPEN') }}
                    {{ __('sponsorships.SPONSORSHIPS') }}
                </h2>
            </div>
            <div class="col-12">
                <p class="col-12 text-center">
                    {{ __('sponsorships.AUSTRALIA_OPEN_DESCRIPTION') }}
                </p>
            </div>
        </div>
    </div>



    <div class="roland-garros d-flex justify-content-center ">

        <div class="px-3">
            <img src="{{ asset('/webp/sponsorship/swiper/ETCHEVERRY-AUSTRALIANOPEN-19012024-10303-XS Trades.webp') }}"
                alt="{{ __('sponsorships.AUSTRALIA_OPEN') }} {{ __('sponsorships.SPONSORSHIPS') }}"
                class="img-fluid w-100">
        </div>
        <div class="px-3">
            <img src="{{ asset('/webp/sponsorship/swiper/SEIDEL-AUSTRALIANOPEN-14012024-15927.webp') }}"
                alt="{{ __('sponsorships.AUSTRALIA_OPEN') }}  {{ __('sponsorships.SPONSORSHIPS') }}"
                class="img-fluid w-100">
        </div>
        <div class="px-3">
            <img src="{{ asset('/webp/sponsorship/swiper/VANDEZANDSCHULP-AUSTRALIANOPEN-14012024-11185.webp') }}"
                alt="{{ __('sponsorships.AUSTRALIA_OPEN') }}  {{ __('sponsorships.SPONSORSHIPS') }}"
                class="img-fluid w-100">
        </div>
    </div>
    <div class="container">
        <hr class="mt-5">
    </div>

    @include('sections.easy')
@endsection
