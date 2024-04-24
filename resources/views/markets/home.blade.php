@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('seo.TITLE_MARKETS') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_MARKETS') }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE_MARKETS') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_MARKETS') }}">
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_MARKETS') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_MARKETS') }}">
@endsection
@section('content')
    <style>
        .futures-banner {
            height: 50vh !important;
        }

        [dir="rtl"] .futures-banner {
            height: 50vh !important;
            top: auto;
            background: linear-gradient(to left, #2faf85, #2da98a, #1c80b1);
        }
    </style>

    @include('layouts.banner', [
        'bannerTitle' => __('markets.MARKETS'),
        'bannerDescription' => __('markets.TRADE_GLOBAL_MULTI_ASSET'),
        'bannerImage' => asset('/img/market-icons/banners/markets.svg'),
        'mobileBanner' => asset('/img/market-icons/banners/markets-mobile.webp'),
    ])

    <div class="row pb-2 pt-4">
        <h1 class="text-center text-navy fw-700"></h1>
    </div>

    @include('sections.multi-assets');

    <section class="mb-5">

        <div class="container mb-4">
            <div class="row mb-4 flex-column-reverse-sm">
                <div class="col-lg-12 col-sm-12">
                    <div class="row">
                        <h2 class="col-12 text-navy text-capitalize">{{ __('markets.WHY_TRADE_CDF') }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-sm-12">
                <div class="row">
                    <p class="col-12 mb-3">{{ __('markets.WHY_TRADE_CDF_DISC') }}</p>
                </div>
            </div>
        </div>

        <div class="container mb-4 ">
            <div class="py-3 px-5 grey-bg border-radius-50">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="container py-4">
                        <div class="row">
                            <p class="col-12 mb-3 text-navy fw-700">{{ __('markets.LEVERAGE_AND_FLEXIBILITY') }}</p>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <div class="row">
                                <p class="col-12 mb-3">{{ __('markets.LEVERAGE_AND_FLEXIBILITY_DISC') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-4">
            <div class=" py-3 px-5 grey-bg border-radius-50">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="container py-4">
                        <div class="row">
                            <p class="col-12 mb-3 text-navy fw-700">{{ __('markets.LONG_AND_SHORT') }}</p>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <div class="row">
                                <p class="col-12 mb-3">{{ __('markets.LONG_AND_SHORT_DISC') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mb-4">
            <div class=" py-3 px-5 grey-bg border-radius-50">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="container py-4">
                        <div class="row">
                            <p class="col-12 mb-3 text-navy fw-700">{{ __('markets.FRACTIONAL_TRADING') }}</p>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <div class="row">
                                <p class="col-12 mb-3">{{ __('markets.FRACTIONAL_TRADING_DISC') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    @include('sections.why-choose-copy', [
        'title' => __('partners.WHY_CLIENTS_CHOSE_XS'),
    ])
@endsection
