@extends('layouts.app')

<style>
    .master-card-banner {
        background-image: url(/img/master-banners/Banner-Mastercard-Background.jpg);
        background-position: 70% 0;
        background-repeat: no-repeat;
        background-size: cover;
        margin-top: 0;
        height: 40vh;
        padding: 150px 0;
    }

    .master-card-banner-ar {
        background-image: url(/img/master-banners/Background-Arabic.png);
        background-position: 0;
        background-repeat: no-repeat;
        background-size: cover;
        margin-top: 0;
        height: 40vh;
        padding: 150px 0;
    }

    .master-img-ar {
        bottom: 0;
        height: 100%;
        width: auto;
        left: 0;
        object-fit: contain;
    }

    .master-img {
        bottom: 0;
        height: 100%;
        width: auto;
        right: 0;
        object-fit: contain;
    }

    @media (max-width: 1199px) {
        .master-img {
            height: 90%;
        }
    }

    @media (max-width: 991px) {
        .master-card-banner-ar {
            height: 50vh;
            padding: 0;
        }

        .master-card-banner {
            height: 50vh;
            padding: 0;
        }

        .master-img {
            bottom: 0;
            height: 80%;
            width: auto;
            right: 0;
            object-fit: contain;
        }

        .master-img-ar {
            bottom: 0;
            height: 80%;
            width: auto;
            left: 0;
            object-fit: contain;
        }
    }

    @media (max-width: 500px) {
        .master-img-ar {
            display: none !important;
        }

        .master-img {
            display: none !important;
        }

        .master-card-banner-ar {
            background-position: 100%;
        }

        .master-card-banner {
            background-position: 0;
        }
    }

    .futures-banner {
        height: 50vh !important;
    }

    [dir="rtl"] .futures-banner {
        height: 50vh !important;
        top: auto;
        background: linear-gradient(to left, #2faf85, #2da98a, #1c80b1);
    }
</style>
@section('content')
    {{-- <section class="futures-banner position-relative">
        <div class="container h-100 d-flex flex-column justify-content-center">

            <div class="row justify-content-between h-100">
                <div class="col-md-6 col-12 text-white text-md-start text-center mb-0 h-100 banner-content">
                    <div class="d-flex flex-column justify-content-center w-100 h-100">
                        <h2 class="py-2">{{ __('futures.PAGE_BANNER_TITLE') }}</h2>
                        <p class="text-white py-2 text-capitalize">{!! __('futures.PAGE_BANNER_SUBTITLE') !!}</p>
                        <div class="justify-content-center d-flex justify-content-md-start ">
                            <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1" target="_blank"
                                class="btn button-style-white justify-content-center py-3 px-5">
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="me-3"><img src="{{ asset('/svgs/join-us.svg') }}" class="btn-icon"
                                            alt="Join XS Trades" style="object-fit: contain;"></span>
                                    <span class="text-white fw-700"> {{ __('homepage.JOIN_XS') }}</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4 d-md-flex d-none desktop-banner d-flex align-items-center h-100">
                    <img src="{{ asset('/img/futures_banner.svg?v1') }}" class="img-fluid"
                        alt="{{ __('futures.PAGE_BANNER_TITLE') }}"
                        style="width: auto; min-height:85%;
                        max-height:85%!important">
                </div>
                <div class="w-100 d-md-none d-flex justify-content-center mobile-banner position-absolute">
                    <img src="{{ asset('/img/futures_banner.svg') }}" class="img-fluid"
                        alt="{{ __('futures.PAGE_BANNER_TITLE') }}">
                </div>

            </div>
        </div>
    </section> --}}
    @include('layouts.banner', [
        'bannerTitle' => __('futures.PAGE_BANNER_TITLE'),
        'bannerDescription' => __('futures.PAGE_BANNER_SUBTITLE'),
        'bannerImage' => asset('/img/market-icons/banners/futures.png'),
        'mobileBanner' => asset('/img/market-icons/banners/futures-mobile.png'),
    ])


    <section class="py-5 bg-gray">
        <div class="container mt-3">
            <div class="row">
                <div class="col-12 text-center pb-4">
                    <h1 class="text-secondary fw-700 text-center">{{ __('futures.SECTION_1_TITLE') }}
                    </h1>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-md-10 text-center">
                    <p>{!! __('futures.SECTION_1_DESC') !!}</p>
                </div>
            </div>

            <div class="row justify-content-center mb-3">
                <div class="col-auto">
                    <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1" target="_blank"
                        class="btn join-us-button py-3 px-5 fw-700">
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="me-3"><img class="btn-icon" src="{{ asset('/homepage-svgs-ic/join-xs-ic.svg') }}"
                                    alt="{{ __('homepage.JOIN_XS') }}"
                                    style="width: 30px; object-fit: contain; aspect-ratio:1/1;"></span>
                            <span>
                                {{ __('homepage.JOIN_XS') }}
                            </span>
                        </div>

                    </a>
                </div>
            </div>

        </div>
    </section>

    <section class="py-5">
        <div class="container mt-3">
            <div class="row">
                <div class="col-12 text-center pb-4">
                    <h1 class="text-secondary fw-700 text-center">{{ __('futures.SECTION_2_TITLE') }}
                    </h1>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-md-10 text-center">
                    <p>{!! __('futures.SECTION_2_DESC') !!}</p>
                </div>
            </div>

            <div class="row justify-content-center mb-3">
                <div class="col-auto">


                    <a href="{{ route('contract_specs', ['lang' => App::getLocale(), 'account_type' => 'standard', 'slug' => 'futures']) }}"
                        class="btn join-us-button py-3 px-5 fw-700">


                        <div class="d-flex align-items-center justify-content-center">
                            <span class="me-3">
                                <img class="btn-icon d-flex" src="{{ asset('/img/contract-cta.svg') }}" alt="message-us"
                                    style="width: 30px; object-fit: contain;"></span>
                            @if (App::getLocale() == 'jp')
                                <span>
                                    詳しい契約仕様を見る
                                </span>
                            @else
                                <span>
                                    {{ __('messages.CONTRACT_SPECS') }}
                                </span>
                            @endif
                        </div>

                    </a>
                </div>
            </div>

        </div>
    </section>

    <section class="mb-5 text-md-start text-center">
        <div class="container mb-4">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="p-sm-5 p-3 grey-bg border-radius-50">
                        <div class="row">
                            <p class="col-12 mb-3 text-primary fw-700">{{ __('futures.SECTION_3_TITLE') }}</p>
                        </div>
                        <div class="col-lg-12 pb-3 col-sm-12">
                            <div class="row">
                                <p class="col-12 mb-3">{!! __('futures.SECTION_3_DESC') !!}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>


        </div>
    </section>
    @include('sections.multi-assets')

    <div class="container dark-divider"></div>

    @include('sections.easy')
@endsection
