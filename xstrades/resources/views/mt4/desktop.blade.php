@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('seo.TITLE_MT4_DESKTOP') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_MT4_DESKTOP') }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE_MT4_DESKTOP') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_MT4_DESKTOP') }}">
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_MT4_DESKTOP') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_MT4_DESKTOP') }}">
@endsection
@section('content')
    <style>
        @media (max-width: 768px) {
            .metatrader-mt4-banner {
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
                background-image: url(/img/Platform/mt4-mobile.webp);
            }
        }

        @media (min-width: 769px) {
            .metatrader-mt4-banner {
                background: rgb(1, 51, 127, 1);
                background: linear-gradient(90deg, rgba(1, 51, 127, 1) 0%, rgba(48, 175, 133, 1) 100%);
            }
        }
    </style>
    @include('layouts.banner', [
        'bannerTitle' => __('platforms.PAGE_TITLE_MT4'),
        'bannerDescription' => __('platforms.PAGE_DESC_MT4'),
        'bannerImage' => '/img/Platform/mt4.svg?v1.2',
        'mobileBanner' => '/img/Platform/mt4-mobile.webp',
    ])

    {{-- <section class="metatrader-mt4-banner p-3">
    <div class="row container py-3 m-auto d-flex flex-column-reverse-sm">
    <div class="col-md-6 col-12 text-white d-flex flex-column justify-content-center text-md-start text-center mb-md-0 mb-4">
        <h1 class="text-white fw-700">{!! __('platforms.PAGE_TITLE_MT4') !!}</h1>
        <p class="text-white my-4 ">{!! __('platforms.PAGE_DESC_MT4') !!}</p>
        <div class="row justify-content-start ">
            <div class="w-100 ">
                <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1" target="_blank"
                    class="btn join-btn-platforms col-lg-6 col-auto">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="me-3"><img src="{{ asset('/svgs/join-us.svg') }}"
                                alt="{{ __('homepage.JOIN_XS_NOW') }}" style="width: 30px; object-fit: contain;"></span>
                        <span class="fw-600 text-white">
                            {{ __('homepage.JOIN_XS') }}
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-12 d-none d-md-block text-end">
        <img src="{{ asset('img/Platform/mt4.svg') }}" class="metatrader-banner-img"
            alt="{{ __('hoko-trading.COPY_TRADING') }}">
    </div>

    </div>
</section> --}}

    <div class="container py-4 tabs-container">

        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">

            <li class="mx-4" role="presentation">
                <a href="{{ route('metatrader-4-desktop', ['lang' => App::getLocale()]) }}"
                    class="text-primary fw-700 nav-link text-center h-100">
                    <div class="d-flex flex-column h-100">
                        <svg fill="#30af85" height="100" width="100" class="platforms" x="0px" y="0px"
                            viewBox="0 0 149.59 137.46" style="enable-background:new 0 0 149.59 137.46;">
                            <path d="M3.32,18.85l56.37-7.77v54.47H3.32V18.85z M3.32,118.51l56.37,7.77V72.49H3.32
                                                                        V118.51L3.32,118.51z M65.89,127.11l74.97,10.35V72.49H65.89V127.11L65.89,127.11z M65.89,10.26v55.29h74.97V-0.09
                                                                        C140.87-0.09,65.89,10.26,65.89,10.26z" />
                        </svg>
                        <span class="mt-2">{{ __('platforms.DESKTOP_CAP') }}</span>
                    </div>
                </a>
            </li>
            <li class="mx-4" role="presentation">
                <a href="{{ route('metatrader-4-web', ['lang' => App::getLocale()]) }}"
                    class="text-primary fw-700 nav-link text-center h-100">
                    <div class="d-flex flex-column h-100">
                        <svg fill="#dadada" height="100" width="100" version="1.1" class="platforms" x="0px" y="0px"
                            viewBox="0 0 149.59 137.46" style="enable-background:new 0 0 149.59 137.46;">
                            <path id="Icon_material-web-2" class="st0" d="M132.51,11.1H17.25C9.32,11.13,2.9,17.57,2.91,25.5l-0.07,86.45
                                                                    c0.02,7.95,6.46,14.39,14.41,14.41h115.26c7.95-0.02,14.39-6.46,14.41-14.41V25.5C146.9,17.56,140.46,11.12,132.51,11.1z
                                                                    M96.49,111.95H17.25V83.14h79.24L96.49,111.95z M96.49,75.93H17.25V47.12h79.24L96.49,75.93z M132.51,111.95H103.7V47.12h28.82
                                                                    V111.95z" />
                        </svg>
                        <span class="mt-2">{{ __('platforms.WEB_CAP') }}</span>
                    </div>
                </a>
            </li>
            <li class="mx-4" role="presentation">
                <a href="{{ route('metatrader-4-mac', ['lang' => App::getLocale()]) }}"
                    class="text-primary fw-700 nav-link text-center h-100">
                    <div class="d-flex flex-column h-100">
                        <svg fill="#dadada" height="100" width="100" class="platforms"
                            xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 149.59 137.46"
                            style="enable-background:new 0 0 149.59 137.46;">
                            <path id="Icon_awesome-apple-2" class="st0"
                                d="M109.49,72.22c-0.06-10.07,4.5-17.67,13.72-23.26
                                                               c-5.16-7.38-12.95-11.44-23.23-12.23C90.24,35.96,79.6,42.4,75.7,42.4c-4.11,0-13.55-5.4-20.96-5.4
                                                               c-15.31,0.24-31.57,12.2-31.57,36.54c0.07,7.59,1.41,15.12,3.95,22.27c3.51,10.07,16.18,34.75,29.41,34.34
                                                               c6.91-0.16,11.8-4.91,20.79-4.91c8.72,0,13.25,4.91,20.96,4.91c13.33-0.19,24.8-22.63,28.14-32.72
                                                               C108.53,89.01,109.49,72.74,109.49,72.22z M93.97,27.18c7.49-8.89,6.8-16.98,6.58-19.89c-6.61,0.38-14.26,4.5-18.63,9.57
                                                               c-4.8,5.43-7.63,12.15-7.02,19.72C82.06,37.14,88.59,33.46,93.97,27.18L93.97,27.18z" />
                        </svg>
                        <span class="mt-2">{{ __('platforms.MAC_CAP') }}</span>
                    </div>
                </a>
            </li>
            <li class="mx-4" role="presentation">
                <a href="{{ route('metatrader-4-ios', ['lang' => App::getLocale()]) }}"
                    class="text-primary fw-700 nav-link text-center h-100">
                    <div class="d-flex flex-column h-100">
                        <svg fill="#dadada" height="100" width="100" version="1.1" class="platforms"
                            xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 149.59 137.46"
                            style="enable-background:new 0 0 149.59 137.46;">
                            <path id="Icon_awesome-app-store-ios" class="st0"
                                d="M123.06,6.69H26.53c-7.27,0-13.16,5.89-13.16,13.17v96.54
                                                                c0,7.27,5.89,13.16,13.16,13.16h96.53c7.27,0,13.16-5.89,13.17-13.16V19.86C136.22,12.59,130.33,6.69,123.06,6.69z M48.19,103.37
                                                                c-1.51,2.62-4.87,3.52-7.49,2c-2.62-1.51-3.52-4.87-2-7.49l0,0l3.92-6.77c4.42-1.34,8.04-0.3,10.86,3.13L48.19,103.37z M86.29,88.59
                                                                H36.4c-3.03,0-5.48-2.46-5.48-5.49s2.46-5.49,5.48-5.49h13.99l17.94-31.05l-5.62-9.71c-1.51-2.62-0.62-5.97,2-7.49
                                                                c2.62-1.51,5.97-0.62,7.49,2l0,0l2.44,4.22l2.44-4.22c1.51-2.62,4.87-3.52,7.49-2c2.62,1.51,3.52,4.87,2,7.49L63.03,77.62h17.03
                                                                C85.6,77.62,88.7,84.12,86.29,88.59z M113.19,88.59h-7.95l5.38,9.3c1.51,2.62,0.62,5.97-2,7.49s-5.97,0.62-7.49-2l0,0
                                                                c-9.02-15.61-15.79-27.32-20.3-35.13c-4.58-7.95-1.32-15.91,1.95-18.59c3.59,6.22,8.98,15.55,16.16,27.97h14.26
                                                                c3.03,0,5.49,2.46,5.49,5.49S116.22,88.59,113.19,88.59L113.19,88.59z" />
                        </svg>
                        <span class="mt-2">{{ __('platforms.IOS_CAP') }}</span>
                    </div>
                </a>
            </li>
            <li class="mx-4" role="presentation">
                <a href="{{ route('metatrader-4-android', ['lang' => App::getLocale()]) }}"
                    class="text-primary fw-700 nav-link text-center h-100">
                    <div class="d-flex flex-column h-100">
                        <svg fill="#dadada" height="100" width="100" class="platforms" data-name="Layer 1"
                            viewBox="0 0 112.03 130.68">
                            <path data-name="Icon awesome-android" class="cls-1"
                                d="m16.8,50.37v33.78c.05,4.42-3.5,8.04-7.92,8.08-.04,0-.07,0-.11,0-4.46,0-8.78-3.62-8.78-8.08v-33.78c0-4.4,4.32-8.02,8.78-8.02,4.42.02,8,3.6,8.02,8.02Zm3.15,45.81c-.01,4.76,3.84,8.62,8.6,8.64.01,0,.03,0,.04,0h5.81l.09,17.83c0,10.77,16.1,10.68,16.1,0v-17.83h10.86v17.83c0,10.71,16.19,10.74,16.19,0v-17.83h5.89c4.75-.01,8.59-3.87,8.58-8.62,0,0,0,0,0-.01v-52.34H19.96v52.34Zm72.35-55.17H19.63c0-12.49,7.47-23.34,18.56-29l-5.57-10.3c-.32-.53-.15-1.22.38-1.54s1.22-.15,1.54.38c.01.02.02.04.03.05l5.66,10.39c10.07-4.41,21.53-4.41,31.6,0l5.63-10.36c.3-.55.98-.75,1.52-.45.55.3.75.98.45,1.52,0,.01-.01.02-.02.03l-5.57,10.27c11,5.66,18.47,16.51,18.47,29h0Zm-49.8-16.19c0-1.69-1.37-3.06-3.06-3.06-1.69.05-3.02,1.47-2.97,3.16.05,1.62,1.35,2.92,2.97,2.97,1.69,0,3.06-1.37,3.06-3.06h0s0,0,0,0Zm33.09,0c-.02-1.67-1.4-3-3.06-2.98-1.67.02-3,1.4-2.98,3.06.02,1.67,1.39,3,3.06,2.98,1.66-.04,2.99-1.4,2.98-3.07h0Zm27.65,17.53c-4.42-.01-8.01,3.56-8.02,7.98,0,.02,0,.03,0,.05v33.78c-.02,4.45,3.57,8.06,8.02,8.08,0,0,0,0,0,0,4.49,0,8.78-3.62,8.78-8.08v-33.78c0-4.49-4.32-8.02-8.78-8.02Z" />
                        </svg>
                        <span class="mt-2">{{ __('platforms.ANDROID_CAP') }}</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>





    <section>
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-12 col-sm-12">
                    <div class="row">
                        <h3 class="col-12 text-center text-navy text-capitalize my-3">{{ __('platforms.FULL_POWER') }}
                        </h3>
                        <p class="col-12 text-dark-cust text-center">{!! __('platforms.EXPERIENCE_THE_FULL_POWER') !!}</p>
                    </div>
                </div>
                <div class="row mx-auto justify-content-center">
                    <div class="pt-4 d-flex justify-content-center">
                        <a href="https://download.mql5.com/cdn/web/XS Trades.fintech.ltd/mt4/xsfintech4setup.exe" target="_blank"
                            class="btn join-us-button py-3 px-5 fw-700">
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="me-3"><img class="btn-icon" src="{{ asset('/svgs/download-ic.svg') }}"
                                        alt="{{ __('platforms.MT4_DOWLOAD_DESKTOP') }}"
                                        style="width: 30px; object-fit: contain;">
                                </span>
                                <span>
                                    {{ __('platforms.MT4_DOWLOAD_DESKTOP') }}
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-12 col-sm-12">
                    <div class="row">
                        <h3 class="col-12 text-center text-navy text-capitalize my-3">{{ __('platforms.ACCESS_DESKTOP') }}
                        </h3>
                    </div>

                    <div class="row">
                        <div class="col-sm-5 col-10 text-dark-grey align-items-center d-flex">
                            <ol>
                                <li class="text-dark-cust mb-3">{{ __('platforms.DOWNLOAD_INSTALL_MT4') }}</li>
                                <li class="text-dark-cust mb-3">{{ __('platforms.LAUNCH_MT4_FILE_MENU') }}</li>
                                <li class="text-dark-cust mb-3">{{ __('platforms.SELECT_LOGIN_TRADE_ACCOUNT') }}</li>
                                <li class="text-dark-cust mb-3">{{ __('platforms.ENTER_XS_CREDENTIALS') }}</li>
                                <li class="text-dark-cust mb-3">{{ __('platforms.CLICK_LOGIN_START_TRADING') }}</li>

                            </ol>
                        </div>

                        <div class="col-sm-7 col-10 col-sm-6 col-10 m-sm-0 m-auto">
                            <img src="{{ asset('/img/1610.png') }}" class="img-fluid h-100" alt="xs account">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <h3 class="col-12 text-navy text-capitalize my-3">{{ __('platforms.MT4_DESKTOP_FEATURES') }}</h3>
            </div>
            <div class="row">
                <div class="col-sm-auto col-2 d-flex flex-wrap justify-content-center align-content-center pe-0 mb-2">
                    @if (session()->get('locale') == 'ar')
                        <img src="{{ asset('svgs/features-ic.svg') }}" class="me-3 d-flex"
                            style="aspect-ratio:1/1; width:20px; transform: scale(-1); " alt="features icon">
                    @else
                        <img src="{{ asset('svgs/features-ic.svg') }}" class="me-3 d-flex"
                            style="aspect-ratio:1/1; width:20px " alt="features icon">
                    @endif
                </div>
                <div class="col-sm-11 col-10 px-0">
                    <p class="subttl text-navy">{{ __('platforms.POPULAR_PC_PLATFORM') }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-auto col-2 d-flex flex-wrap justify-content-center align-content-center pe-0 mb-2">
                    @if (session()->get('locale') == 'ar')
                        <img src="{{ asset('svgs/features-ic.svg') }}" class="me-3 d-flex"
                            style="aspect-ratio:1/1; width:20px; transform: scale(-1); " alt="features icon">
                    @else
                        <img src="{{ asset('svgs/features-ic.svg') }}" class="me-3 d-flex"
                            style="aspect-ratio:1/1; width:20px " alt="features icon">
                    @endif
                </div>
                <div class="col-sm-11 col-10 px-0">
                    <p class="subttl text-navy">{{ __('platforms.VAST_SELECTION_INSTRUMENTS') }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-auto col-2 d-flex flex-wrap justify-content-center align-content-center pe-0 mb-2">
                    @if (session()->get('locale') == 'ar')
                        <img src="{{ asset('svgs/features-ic.svg') }}" class="me-3 d-flex"
                            style="aspect-ratio:1/1; width:20px; transform: scale(-1); " alt="features icon">
                    @else
                        <img src="{{ asset('svgs/features-ic.svg') }}" class="me-3 d-flex"
                            style="aspect-ratio:1/1; width:20px " alt="features icon">
                    @endif
                </div>
                <div class="col-sm-11 col-10 px-0">
                    <p class="subttl text-navy">{{ __('platforms.MARKET_LIMIT_STOP_ORDERS') }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-auto col-2 d-flex flex-wrap justify-content-center align-content-center pe-0 mb-2">
                    @if (session()->get('locale') == 'ar')
                        <img src="{{ asset('svgs/features-ic.svg') }}" class="me-3 d-flex"
                            style="aspect-ratio:1/1; width:20px; transform: scale(-1); " alt="features icon">
                    @else
                        <img src="{{ asset('svgs/features-ic.svg') }}" class="me-3 d-flex"
                            style="aspect-ratio:1/1; width:20px " alt="features icon">
                    @endif
                </div>
                <div class="col-sm-11 col-10 px-0">
                    <p class="subttl text-navy">{{ __('platforms.BASIC_CHARTING_TOOLS') }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-auto col-2 d-flex flex-wrap justify-content-center align-content-center pe-0 mb-2">
                    @if (session()->get('locale') == 'ar')
                        <img src="{{ asset('svgs/features-ic.svg') }}" class="me-3 d-flex"
                            style="aspect-ratio:1/1; width:20px; transform: scale(-1); " alt="features icon">
                    @else
                        <img src="{{ asset('svgs/features-ic.svg') }}" class="me-3 d-flex"
                            style="aspect-ratio:1/1; width:20px " alt="features icon">
                    @endif
                </div>
                <div class="col-sm-11 col-10 px-0">
                    <p class="subttl text-navy">{{ __('platforms.CUSTOMIZABLE_INTERFACE') }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-auto col-2 d-flex flex-wrap justify-content-center align-content-center pe-0 mb-2">
                    @if (session()->get('locale') == 'ar')
                        <img src="{{ asset('svgs/features-ic.svg') }}" class="me-3 d-flex"
                            style="aspect-ratio:1/1; width:20px; transform: scale(-1); " alt="features icon">
                    @else
                        <img src="{{ asset('svgs/features-ic.svg') }}" class="me-3 d-flex"
                            style="aspect-ratio:1/1; width:20px " alt="features icon">
                    @endif
                </div>
                <div class="col-sm-11 col-10 px-0">
                    <p class="subttl text-navy">{{ __('platforms.EXPERT_ADVISOR_SUPPORT') }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-auto col-2 d-flex flex-wrap justify-content-center align-content-center pe-0 mb-2">
                    @if (session()->get('locale') == 'ar')
                        <img src="{{ asset('svgs/features-ic.svg') }}" class="me-3 d-flex"
                            style="aspect-ratio:1/1; width:20px; transform: scale(-1); " alt="features icon">
                    @else
                        <img src="{{ asset('svgs/features-ic.svg') }}" class="me-3 d-flex"
                            style="aspect-ratio:1/1; width:20px " alt="features icon">
                    @endif
                </div>
                <div class="col-sm-11 col-10 px-0">
                    <p class="subttl text-navy">{{ __('platforms.SECURE_ENCRYPTED_TRANSMISSION') }}</p>
                </div>
            </div>
            {{-- <div class="row mx-auto justify-content-center my-4">
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


    <section class="bg-gray">
        @include('sections.why-choose-xs', ['title' => __('platforms.WHY_TRADE_WITH_XS')])
    </section>
    <div class="container">
        <HR class="my-5">
    </div>
    @include('sections.easy')


    </div>
@endsection
