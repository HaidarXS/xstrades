@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('seo.TITLE_EDUCATIONAL_WEBINARS') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_EDUCATIONAL_WEBINARS') }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE_EDUCATIONAL_WEBINARS') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_EDUCATIONAL_WEBINARS') }}">
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_EDUCATIONAL_WEBINARS') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_EDUCATIONAL_WEBINARS') }}">
@endsection
@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('educational_webinars.EDUCATIONAL_WEBINARS'),
        'bannerDescription' => __('educational_webinars.PAGE_BANNER_SUBTITLE'),
        'bannerImage' => asset('/img/educational-webinars.png'),
        'mobileBanner' => asset('/img/educational-webinars-mobile.png'),
    ])
    <div class="container py-5">
        <div class="row justify-content-between pb-3">
            <div class="col-lg-12">
                <h1 class="text-secondary fw-700 text-center mb-5 ">{{ __('educational_webinars.UPCOMING_WEBINARS') }}</h1>
            </div>
        </div>
    </div>
    <div class="container py-4">
        <div class="row mt-4">

            @if (count($upcomingWebinars) > 0)
                @foreach ($upcomingWebinars as $webinar)
                    @include('educational-webinars.component.singlewebinar', [
                        'webinar' => $webinar,
                        'type' => 'upcoming',
                    ])
                @endforeach

                {{ $upcomingWebinars->links() }}
            @else
                <p class="text-center">
                    {{ __('educational_webinars.NO_WEBINARS') }}
                </p>
            @endif
        </div>
    </div>

    <div class="container py-5">
        <div class="row justify-content-between pb-3">
            <div class="col-lg-12">
                <h1 class="text-secondary fw-700 text-center mb-5 ">{{ __('educational_webinars.PREVIOUS_WEBINARS') }}</h1>
            </div>
        </div>
    </div>
    <div class="container py-4">
        <div class="row mt-4">

            @if (count($previousWebinars) > 0)
                @foreach ($previousWebinars as $webinar)
                    @include('educational-webinars.component.singlewebinar', [
                        'webinar' => $webinar,
                        'type' => 'previous',
                    ])
                @endforeach

                {{ $upcomingWebinars->links() }}
            @else
                <p class="text-center">
                    {{ __('educational_webinars.NO_WEBINARS') }}
                </p>
            @endif
        </div>
    </div>
@endsection
