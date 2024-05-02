@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('seo.TITLE_EVENTS') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_EVENTS') }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE_EVENTS') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_EVENTS') }}">
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_EVENTS') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_EVENTS') }}">
@endsection
@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('messages.EVENTS'),
        'bannerDescription' => __('events.EVENTS_PAGE_SUBTITLE'),
        'bannerImage' => asset('/img/company-section/event.svg'),
        'mobileBanner' => asset('/img/company-section/event-mobile.webp'),
    ])
    <div class="container pt-4">
        {{-- <section class="py-3">
            <div class="row">
                <div class="col-12 mb-4">
                    <h1 class="text-navy text-center text-uppercase col-4 m-auto">{{ __('presence.EVENTS') }}</h1>
                </div>
                <div class="col-12">
                    <img src="{{ asset('/img/Event-ban.jpg') }}" class="w-100 img-fluid py-5" alt="xs events">
                </div>

            </div>

        </section> --}}


        <div class="row justify-content-between">
            <div class="col-lg-5 col-md-5 mb-5">
                <a href="{{ route('singleEvents', ['lang' => App::getLocale(), 'slug' => 'expos']) }}"
                    class="text-decoration-none text-primary">
                    <div class="mt-4 text-center">
                        <p class="text-lg text-navy fw-700">{{ __('events.EXPOS') }}</p>
                    </div>
                    <div class="w-100 border-radius-50  grey-bg overflow-hidden">
                        <img src="{{ asset('/img/expos.webp') }}" class="w-100 img-fluid"
                            alt="{{ __('presence.EXPOS') }}">
                    </div>
                </a>
            </div>
            <div class="col-1"></div>
            <div class="col-lg-5 col-md-5 mb-5">
                <a href="{{ route('singleEvents', ['lang' => App::getLocale(), 'slug' => 'seminars']) }}"
                    class="text-decoration-none text-primary">
                    <div class="mt-4 text-center">
                        <p class="text-lg text-navy fw-700">{{ __('events.SEMINARS') }}</p>
                    </div>
                    <div class="w-100 border-radius-50  grey-bg overflow-hidden">
                        <img src="{{ asset('/img/seminars.webp') }}" class="w-100 img-fluid"
                            alt="{{ __('presence.SEMINARS') }}">
                    </div>
                </a>
            </div>
            <div class="col-lg-5 col-md-5 mb-5">
                <a href="{{ route('singleEvents', ['lang' => App::getLocale(), 'slug' => 'conferences']) }}"
                    class="text-decoration-none text-primary">
                    <div class="mt-4 text-center">
                        <p class="text-lg text-navy fw-700">{{ __('events.CONFERENCES') }}</p>
                    </div>
                    <div class="w-100 border-radius-50  grey-bg overflow-hidden">
                        <img src="{{ asset('/img/conferences.webp') }}" class="w-100 img-fluid"
                            alt="{{ __('presence.CONFERENCES') }}">
                    </div>
                </a>
            </div>
            <div class="col-1"></div>
            <div class="col-lg-5 col-md-5 mb-5">
                <a href="{{ route('singleEvents', ['lang' => App::getLocale(), 'slug' => 'activities']) }}"
                    class="text-decoration-none text-primary">
                    <div class="mt-4 text-center">
                        <p class="text-lg text-navy fw-700">{{ __('events.ACTIVITIES') }}</p>
                    </div>
                    <div class="w-100 border-radius-50  grey-bg overflow-hidden">
                        <img src="{{ asset('/img/activities.webp') }}" class="w-100 img-fluid"
                            alt="{{ __('presence.ACTIVITIES') }}">
                    </div>
                </a>
            </div>

            <div class="col-lg-5 col-md-5 mb-5">
                <a href="{{ route('singleEvents', ['lang' => App::getLocale(), 'slug' => 'ceremonies']) }}"
                    class="text-decoration-none text-primary">
                    <div class="mt-4 text-center">
                        <p class="text-lg text-navy fw-700 text-uppercase">{{ __('events.CEREMONIES') }}</p>
                    </div>
                    <div class="w-100 border-radius-50  grey-bg overflow-hidden">
                        <img src="{{ asset('/img/351.png') }}" class="w-100 img-fluid"
                            alt="{{ __('presence.CEREMONIES') }}">
                    </div>

                </a>
            </div>


            {{-- <div class="col-1"></div>
            <div class="col-lg-5 col-md-5 mb-5">
                <a href="{{ route('singleEvents', ['lang' => App::getLocale(), 'slug' => 'csr']) }}"
                    class="text-decoration-none text-primary">
                    <div class="mt-4 text-center">
                        <p class="text-lg text-navy fw-700">{{ __('presence.CSR') }}</p>
                    </div>
                    <div class="w-100 border-radius-50  grey-bg overflow-hidden">
                        <img src="{{ asset('/img/activities.webp') }}" class="w-100 img-fluid"
                            alt="{{ __('presence.CSR') }}">
                    </div>
                </a>
            </div> --}}
        </div>
        <hr class="mt-5">
    </div>

    @include('sections.easy')
@endsection
