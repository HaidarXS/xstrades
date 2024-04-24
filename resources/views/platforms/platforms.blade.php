@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('seo.TITLE_PLATFORMS') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_PLATFORMS') }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE_PLATFORMS') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_PLATFORMS') }}">
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_PLATFORMS') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_PLATFORMS') }}">
@endsection
@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('platforms.PLATFORMS'),
        'bannerDescription' => __('platforms.PAGE_DESC'),
        'bannerImage' => '/img/Platform/platforms.svg',
        'mobileBanner' => '/img/Platform/platforms-mobile.webp',
    ])


    {{-- <section class="bg-gray text-md-start text-center">
        <div class="row pb-2 pt-4">
            <h1 class="text-center text-navy fw-700">{!! __('platforms.PLATFORMS') !!}</h1>
        </div>
        <div class="container">
            <div class="row py-3">
                <div class="col-lg-12 col-sm-12">
                    <div class="row">
                        <h3 class="col-12 text-center text-navy text-capitalize my-3">{!! __('platforms.ACCESS_THE_FINANCIAL_GLOBAL_MARKETS') !!}</h3>
                        <p class="col-12 text-dark-cust pb-3 pt-5 d-flex justify-center text-center px-5">
                            <span>
                                {!! __('platforms.TRADE_AND_INVEST') !!}
                            </span>
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="pt-4 d-flex justify-content-center">
                        <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1" target="_blank"
                            class="btn join-us-button py-3 px-5">
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="me-3"><img class="btn-icon"
                                        src="{{ asset('/homepage-svgs-ic/join-xs-ic.svg') }}" alt="Join XS Trades"
                                        style="width: 30px; object-fit: contain;">
                                </span>
                                <span>
                                    {{ __('markets.JOIN_XS') }}
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section>
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-12 col-sm-12">
                    <div class="row d-flex justify-content-around">
                        <h3 class="col-12 text-navy pb-5 text-capitalize text-center my-3">
                            {{ __('platforms.SELECT_THE_TRADING_PLATFORMS') }}</h3>
                        <div
                            class="col-lg-5 col-md-7 grey-bg green-borders border-5 border-radius-50 text-center py-4 onhover-bg-primary onhover-text-white">
                            <a href="{{ route('mt4', ['lang' => App::getLocale()]) }}" class="text-decoration-none">
                                <h4 class="text-navy">
                                    <div class="row">
                                        <div class="col-8 offset-2" style="margin-top:10px;">
                                            <span class="col-2 px-2"><img class="mt-icons"
                                                    src="{{ asset('/img/Platform/mt4.svg') }}"
                                                    alt="{{ __('platforms.METATRADER_4') }}"></span>
                                            {{ __('platforms.METATRADER_4') }}
                                        </div>
                                    </div>
                                </h4>
                            </a>
                        </div>
                        <div
                            class="col-lg-5 col-md-7 mt-lg-0 mt-4 grey-bg green-borders border-5  onhover-bg-primary onhover-text-white border-radius-50  text-center py-4">
                            <a href="{{ route('mt5', ['lang' => App::getLocale()]) }}" class="text-decoration-none">
                                <h4 class="text-navy">
                                    <div class="row">
                                        <div class="col-8 offset-2" style="margin-top:10px;">
                                            <span class="col-2 px-2"><img class="mt-icons"
                                                    src="{{ asset('/img/Platform/mt5.svg') }}"
                                                    alt="{{ __('platforms.METATRADER_5') }}"></span>
                                            {{ __('platforms.METATRADER_5') }}
                                        </div>
                                    </div>
                                </h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-lg-35 col-md-4 col-sm-6 col-9 mb-3">
                    <div class="d-flex w-100 align-items-center h-100 ">
                        <img style="max-width:50px" src="{{ asset('/img/laptop.png') }}" alt="{{ __('platforms.WEB') }}">


                        @if (session()->get('locale') == 'jp')
                            <p class="m-0 ms-2">
                                <span class="fw-700">{{ __('homepage.WEB') }}</span><br />
                                {{ __('homepage.AVAILABLE_ON_THE') }}
                            </p>
                        @else
                            <p class="m-0 ms-2">{{ __('homepage.AVAILABLE_ON_THE') }} <span
                                    class="fw-700">{{ __('homepage.WEB') }}</span></p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-35 col-md-4 col-sm-6 col-9 mb-3">
                    <div class="d-flex w-100 align-items-center h-100 ">
                        <img style="max-width:50px" src="{{ asset('/img/window.png') }}"
                            alt="{{ __('platforms.WINDOWS') }}">
                        @if (session()->get('locale') == 'jp')
                            <p class="m-0 ms-2">
                                <span class="fw-700">{{ __('homepage.WINDOWS') }}</span><br />
                                {{ __('homepage.AVAILABLE_ON_THE') }}
                            </p>
                        @else
                            <p class="m-0 ms-2">{{ __('homepage.AVAILABLE_ON_THE') }} <span
                                    class="fw-700">{{ __('homepage.WINDOWS') }}</span></p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-35 col-md-4 col-sm-6 col-9 mb-3">
                    <div class="d-flex w-100 align-items-center h-100 ">
                        <img style="max-width:50px" src="{{ asset('/img/mac.png') }}" alt="{{ __('platforms.MAC') }}">
                        @if (session()->get('locale') == 'jp')
                            <p class="m-0 ms-2">
                                <span class="fw-700">{{ __('homepage.MAC') }}</span><br />
                                {{ __('homepage.AVAILABLE_ON_THE') }}
                            </p>
                        @else
                            <p class="m-0 ms-2">{{ __('homepage.AVAILABLE_ON_THE') }} <span
                                    class="fw-700">{{ __('homepage.MAC') }}</span></p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-35 col-md-4 col-sm-6 col-9 mb-3">
                    <div class="d-flex w-100 align-items-center h-100 ">
                        <img style="max-width:50px" src="{{ asset('/img/play.png') }}"
                            alt="{{ __('platforms.PLAY_STORE') }}">
                        @if (session()->get('locale') == 'jp')
                            <p class="m-0 ms-2">
                                <span class="fw-700">{{ __('homepage.PLAY_STORE') }}</span><br />
                                {{ __('homepage.AVAILABLE_ON_THE') }}
                            </p>
                        @else
                            <p class="m-0 ms-2">{{ __('homepage.AVAILABLE_ON_THE') }} <span
                                    class="fw-700">{{ __('homepage.PLAY_STORE') }}</span></p>
                        @endif

                    </div>
                </div>
                <div class="col-lg-35 col-md-4 col-sm-6 col-9 mb-3">
                    <div class="d-flex w-100 align-items-center h-100 ">
                        <img style="max-width:50px" src="{{ asset('/img/ios.png') }}"
                            alt="{{ __('platforms.APP_STORE') }}">
                        @if (session()->get('locale') == 'jp')
                            <p class="m-0 ms-2">
                                <span class="fw-700">{{ __('homepage.APP_STORE') }}</span><br />
                                {{ __('homepage.AVAILABLE_ON_THE') }}
                            </p>
                        @else
                            <p class="m-0 ms-2">{{ __('homepage.AVAILABLE_ON_THE') }} <span
                                    class="fw-700">{{ __('homepage.APP_STORE') }}</span></p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-8 m-auto mb-3">
                <div class="d-flex h-100 align-items-center">
                    <img src="{{ asset('/img/devices.png') }}" class="img-fluid w-100" alt="All devices">
                </div>
            </div>
            {{-- <div class="col-lg-8 m-auto mb-3">
                <h4 class="col-12 mb-3 text-center text-secondary mt-4">{{ __('platforms.FOR_MORE_INFO_HELP') }}</h4>
            </div> --}}
            {{-- <div class="row justify-content-center my-4">
                <div class="pt-4 col-auto">
                    <a href="{{ route('company', ['lang' => App::getLocale(), 'tab' => 'contact']) }}"
                        class="btn join-us-button py-3 px-5">
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="me-3">
                                <i class="fas fa-question quest-ic"></i></span>
                            <span>
                                {{ __('markets.HELP_CENTER') }}
                            </span>
                        </div>
                    </a>
                </div>
            </div> --}}
        </div>
    </section>

    {{-- 
    <section class="bg-gray">
        <div class="container">
            <div class="row">
                <h3 class="col-12 text-navy text-capitalize my-3">{{ __('platforms.WHY_TRADE_WITH_XS') }}</h3>
            </div>
            <div class="row">
                <div class="col-lg-auto col-md-1 col-2 pe-0 mt-1">
                    <i style="min-width: 36px; min-height:27px " aria-hidden="true" class="fas fa-check"></i>
                </div>
                <div class="col-md-11 col-10 mb-3 text-lg px-0">
                    <p class="text-dark-cust"><span class="subttl text-navy">{{ __('platforms.TRUST_GLOBAL_BROKER') }}
                        </span>{{ __('platforms.XS_IS_A_TRUSTED') }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-auto col-md-1 col-2 pe-0 mt-1">
                    <i style="min-width: 36px; min-height: 27px" aria-hidden="true" class="fas fa-check"></i>
                </div>
                <div class="col-md-11 col-10 mb-3 text-lg px-0">
                    <p class="text-dark-cust">
                        <span class="subttl text-navy">{{ __('platforms.AWARD_WINNING_BROKER') }}</span>
                        {{ __('platforms.TRADE_RECOGNIZED_SERVICES') }}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-auto col-md-1 col-2 pe-0 mt-1">
                    <i style="min-width: 36px; min-height: 27px" aria-hidden="true" class="fas fa-check"></i>
                </div>
                <div class="col-md-11 col-10 mb-3 text-lg px-0">
                    <p class="text-dark-cust">
                        <span class="subttl text-navy">{{ __('platforms.QUICK_EASY_REGISTRATION') }}</span>
                        {{ __('platforms.START_TRADING_STEPS') }}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-auto col-md-1 col-2 pe-0 mt-1">
                    <i style="min-width: 36px; min-height: 27px" aria-hidden="true" class="fas fa-check"></i>
                </div>
                <div class="col-md-11 col-10 mb-3 text-lg px-0">
                    <p class="text-dark-cust">
                        <span class="subttl text-navy">{{ __('platforms.MULTIPLE_FUNDING_METHODS') }}</span>
                        {{ __('platforms.DEPOSIT_WITHDRAW') }}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-auto col-md-1 col-2 pe-0 mt-1">
                    <i style="min-width: 36px; min-height: 27px" aria-hidden="true" class="fas fa-check"></i>
                </div>
                <div class="col-md-11 col-10 mb-3 text-lg px-0">
                    <p class="text-dark-cust">
                        <span class="subttl text-navy">{{ __('platforms.ADVANCED_TRADING_PLATFORMS') }}</span>
                        {{ __('platforms.PLATFORM_FOR_EVERY_TRADER') }}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-auto col-md-1 col-2 pe-0 mt-1">
                    <i style="min-width: 36px; min-height: 27px" aria-hidden="true" class="fas fa-check"></i>
                </div>
                <div class="col-md-11 col-10 mb-3 text-lg px-0">
                    <p class="text-dark-cust">
                        <span class="subttl text-navy">{{ __('platforms.MULTIPLE_ACCOUNT_TYPES') }}</span>
                        {{ __('platforms.CHOOSE_ACCOUNT_TYPES') }}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-auto col-md-1 col-2 pe-0 mt-1">
                    <i style="min-width: 36px; min-height: 27px" aria-hidden="true" class="fas fa-check"></i>
                </div>
                <div class="col-md-11 col-10 mb-3 text-lg px-0">
                    <p class="text-dark-cust">
                        <span class="subttl text-navy">{{ __('platforms.PREMIUM_TRADING_CONDITIONS') }}</span>
                        {{ __('platforms.UNLOCK_THE_FULL_POTENTIAL') }}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-auto col-md-1 col-2 pe-0 mt-1">
                    <i style="min-width: 36px; min-height: 27px" aria-hidden="true" class="fas fa-check"></i>
                </div>
                <div class="col-md-11 col-10 mb-3 text-lg px-0">
                    <p class="text-dark-cust">
                        <span class="subttl text-navy">{{ __('platforms.FAST_FAIR_EXECUTION') }}</span>
                        {{ __('platforms.ULTRA_FAST_TRADING_EXECUTION') }}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-auto col-md-1 col-2 pe-0 mt-1">
                    <i style="min-width: 36px; min-height: 27px" aria-hidden="true" class="fas fa-check"></i>
                </div>
                <div class="col-md-11 col-10 mb-3 text-lg px-0">
                    <p class="text-dark-cust">
                        <span class="subttl text-navy">{{ __('platforms.MULTILINGUAL_SUPPORT') }}</span>
                        {{ __('platforms.SUPPORT_IN_YOUR_LANGUAGE') }}
                    </p>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="bg-gray">

        @include('sections.why-choose-copy', [
            'title' => __('platforms.WHY_TRADE_WITH_XS'),
        ])
    </section>
    @include('sections.multi-assets')
    <div class="container">
        <hr class="my-5">
    </div>
    @include('sections.easy')
    </div>
@endsection
