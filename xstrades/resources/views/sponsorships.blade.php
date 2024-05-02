@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('seo.TITLE_SPONSORSHIPS') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_SPONSORSHIPS') }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE_SPONSORSHIPS') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_SPONSORSHIPS') }}">
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_SPONSORSHIPS') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_SPONSORSHIPS') }}">
@endsection
@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('messages.SPONSORSHIPS'),
        'bannerDescription' => __('sponsorships.SPONSORSHIPS_PAGE_SUBTITLE'),
        'bannerImage' => asset('/img/company-section/sponsorship.svg'),
        'mobileBanner' => asset('/img/company-section/sponsorship-mobile.webp'),
    ])
    {{-- <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-secondary fw-700">{{ __('sponsorships.SPONSORSHIPS') }}</h1>
            </div>
            <div class="col-12 mt-5">
                <img src="{{ asset('/img/sponsorships_banner.png') }}" alt="{{ __('sponsorships.SPONSORSHIPS') }}"
                    class="img-fluid">
            </div>
        </div>
    </div> --}}

    <div class="container pt-4">
        <div class="row justify-content-center mx-auto">
            <div class="row justify-content-center ">
                <div class="col-lg-4 col-md-5 mb-5">
                    <a href="{{ route('singleSponsorship', ['lang' => App::getLocale(), 'slug' => 'autralia-open-2024']) }}"
                        class="text-decoration-none text-primary">
                        <div class="mt-4 text-center">
                            <p class="text-lg fw-700">{{ __('sponsorships.AUSTRALIA_OPEN') }}</p>
                        </div>
                        <div class="w-100 border-radius-50  grey-bg ">
                            <img src="{{ asset('/webp/sponsorship/open-australia-square.webp') }}" class="w-100 img-fluid"
                                style="border-radius: 50px" alt="{{ __('sponsorships.AUSTRALIA_OPEN') }}">
                        </div>
                    </a>
                </div>
            </div>

            <div class="row justify-content-center ">
                <div class="col-lg-4 col-md-5 mb-5">
                    <a href="{{ route('singleSponsorship', ['lang' => App::getLocale(), 'slug' => 'roland-garros-2023']) }}"
                        class="text-decoration-none text-primary">
                        <div class="mt-4 text-center">
                            <p class="text-lg fw-700 sponsor-title">{{ __('sponsorships.ROLAND_GARROS') }} </p>
                        </div>
                        <div class="w-100 border-radius-50  grey-bg ">
                            <img src="{{ asset('/img/roland-garros.png') }}" class="w-100 img-fluid"
                                alt="{{ __('sponsorships.ROLAND_GARROS') }}">
                        </div>
                    </a>
                </div>
                <div class="col-1"></div>
                <div class="col-lg-4 col-md-5 mb-5">
                    <a href="{{ route('singleSponsorship', ['lang' => App::getLocale(), 'slug' => 'wimbledon-2023']) }}"
                        class="text-decoration-none text-primary">
                        <div class="mt-4 text-center">
                            <p class="text-lg fw-700">{{ __('sponsorships.WIMBLEDON') }} </p>
                        </div>
                        <div class="w-100 border-radius-50  grey-bg ">
                            <img src="{{ asset('/img/russia-ukraine-wimbledon.png') }}" class="w-100 img-fluid"
                                alt="{{ __('sponsorships.WIMBLEDON') }}">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <hr class="mt-5">
    </div>




    @include('sections.easy')
@endsection
