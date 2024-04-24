@extends('layouts.app')
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_MASTERCARD') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_MASTERCARD') }}">
@endsection
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
            height: 55vh;
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

    .hide-on-mobile {
        display: none !important;
    }

    .hide-on-desktop {
        display: block !important;
    }

    @media (min-width: 991px) {
        .hide-on-mobile {
            display: block !important;
        }

        .hide-on-desktop {
            display: none !important;
        }
    }

    .mastercard-banner-mobile {
        background-image: url('/img/mastercard/mastercard-mobile.png');
        background-position: top;
        background-repeat: no-repeat;
        background-size: cover;
        height: 45vh;
    }
</style>
@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('mastercard.PAGE_BANNER_TITLE'),
        'bannerDescription' => __('mastercard.EASY_AND_FAST'),
        'bannerImage' => asset('/img/traders-accounts-banners/desktop/mastercard.svg'),
        'mobileBanner' => asset('/img/traders-accounts-banners/mobile/mastercard.webp'),
    ])

    <section class="my-5">
        <div class="container mt-3">
            <div class="row">
                <div class="col-12 text-center pb-4">
                    <h1 class="text-secondary fw-700 text-center">{{ __('mastercard.WHAT_IS_XS_PREPAID') }}
                    </h1>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-md-10 text-center">
                    <p>{!! __('mastercard.EASY_AND_FAST_DESC') !!}</p>
                </div>
            </div>
            <hr>
        </div>
    </section>


    <section class="mb-5">
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-3 col-5 m-auto mb-lg-0 mb-5">
                    <img class="w-100 img-fluid border-rad-40" src="{{ asset('/img/mastercard/Gate-to-pay-01.jpg') }}"
                        alt="Mastercard">
                </div>
                <div class="col-lg-9 col-12 ps-lg-5 text-lg-start text-center">
                    <div class="row">
                        <div class="col-12 pb-4">
                            <h2 class="text-secondary fw-700 px-0">{{ __('mastercard.XS_PREPAID_MASTERCARD') }}</h2>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-12">
                            <p>{!! __('mastercard.XS_PREPAID_MASTERCARD_DESC') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-5">
            <div class="row">
                <div class="col-lg-3 col-5 m-auto mb-lg-0 mb-5">
                    <img class="w-100 img-fluid border-rad-40" src="{{ asset('/img/mastercard/Gate-to-pay-02.jpg') }}"
                        alt="Mobile App">
                </div>
                <div class="col-lg-9 col-12 ps-lg-5 text-lg-start text-center">
                    <div class="row">
                        <div class="col-12 pb-4">
                            <h2 class="text-secondary fw-700  px-0">{{ __('mastercard.XS_CARDS_MOBILE_APP') }}</h2>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-12">
                            <p>{!! __('mastercard.XS_CARDS_MOBILE_APP_DESC') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-5">
            <div class="row">
                <div class="col-lg-3 col-5 m-auto mb-lg-0 mb-5">
                    <img class="w-100 img-fluid border-rad-40" src="{{ asset('/img/mastercard/Gate-to-pay-03.jpg') }}"
                        alt="Apply">
                </div>
                <div class="col-lg-9 col-12 ps-lg-5 text-lg-start text-center">
                    <div class="row">
                        <div class="col-12 pb-4">
                            <h2 class="text-secondary fw-700  px-0">
                                {{ __('mastercard.APPLY_FOR_YOUR_XS_MASTER_CARD') }}</h2>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-12">
                            <p>{!! __('mastercard.APPLY_FOR_YOUR_XS_MASTER_CARD_DESC') !!}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-12 text-center">
                    <div class="row justify-content-center mb-3">
                        <div class="pt-4 d-flex justify-content-center">
                            <a href="{{ route('xs-guide', ['lang' => App::getLocale()]) }}" target="_blank"
                                class="btn button-style py-3 px-5 fw-700">
                                <div class="d-flex align-items-center justify-content-center">
                                    <span>{{ __('user-guides.XS_MASTER_CARD_USER_GUIDE') }}</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
