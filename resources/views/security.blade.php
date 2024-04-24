@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('seo.TITLE_SECURITY') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_SECURITY') }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE_SECURITY') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_SECURITY') }}">
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_SECURITY') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_SECURITY') }}">
@endsection
@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('security.PAGE_BANNER_TITLE'),
        'bannerDescription' => __('security.PAGE_BANNER_SUBTITLE'),
        'bannerImage' => asset('/img/company-section/security.svg'),
        'mobileBanner' => asset('/img/company-section/security-mobile.webp'),
    ])

    {{-- <div class="w-100 position-relative mb-5">
        <div class="position-absolute w-100 h-100 top-0 start-0 d-flex align-items-center justify-content-center">
            <h1 class="text-white text-uppercase fw-700 fw-banner">{{ __('security.PAGE_BANNER_TITLE') }}</h1>
        </div>
        <img src="{{ asset('img/security-banner.png') }}" alt="Security" class="img-fluid w-100">
    </div> --}}
    <section class="text-md-start text-center py-5">
        <div class="container">
            <div class="row mb-4 flex-column-reverse-sm">
                <div class="col-lg-12 col-sm-12">
                    <div class="row">
                        <h1 class="col-12 text-center text-navy text-capitalize">{{ __('security.STAYING_SAFE') }}</h1>
                    </div>
                </div>
            </div>
            <div class="container dark-divider my-5"></div>
            <div class="row">
                <p class="col-12 text-center mb-3">{!! __('security.WE_PTIORITIZE') !!}</p>
            </div>
        </div>
    </section>

    <section class="py-3">
        <div class="container mb-4">
            <div class=" py-3 px-2 px-lg-5 grey-bg border-radius-50">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="container py-4">
                        <div class="row">
                            <h2 class="col-12 text-center text-navy text-capitalize pb-4">
                                {{ __('security.DATA_PROTECTION') }}</h2>
                        </div>
                        <div class="col-lg-12 pb-3 col-sm-12">
                            <div class="row">
                                <p class="col-12 mb-3 text-center">{!! __('security.DATA_PROTECTION_DESC') !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mb-4">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="container">
                    <div class="row">
                        <h2 class="col-12 text-center text-navy text-capitalize pb-4">{{ __('security.SAFETY_MEASURES') }}
                        </h2>
                        <p class="col-12 text-center mb-3 text-secondary">{{ __('security.SAFETY_MEASURES_SUB') }}</p>
                    </div>
                    <p class="col-12 mb-3 text-lg py-3">
                        <span class="text-secondary subttl">{{ __('security.BEWARE_OF_PHISHING') }}</span>
                        {{ __('security.BEWARE_OF_PHISHING_DESC') }}
                    </p>
                    <p class="col-12 mb-3 text-lg py-3">
                        <span class="text-secondary subttl">{{ __('security.SECURE_BROWSING') }}</span>
                        {{ __('security.SECURE_BROWSING_DESC') }}
                    </p>
                    <p class="col-12 mb-3 text-lg py-3">
                        <span class="text-secondary subttl">{{ __('security.PROTECTION_FROM_VIRUSES') }}</span>
                        {{ __('security.PROTECTION_FROM_VIRUSES_DESC') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container mb-4">
            <div class=" py-3 px-2 px-lg-5 grey-bg border-radius-50">
                <div class="col-lg-12 py-4 col-sm-12">
                    <div class="row">
                        <p class="col-12 mb-3 text-center">{!! __('security.YOUR_ONLINE_SAFETY') !!}</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="container pb-4">
                        <div class="row">
                            <h2 class="col-12 text-center text-navy text-capitalize">{{ __('security.WHAT_YOU_CAN_DO') }}
                            </h2>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 ">
                            <div class="container py-4">
                                <p class="col-12 mb-3 text-lg py-3">
                                    <span class="text-secondary subttl">{{ __('security.CONTACT_XS') }}</span>
                                    {{ __('security.CONTACT_XS_DESC') }}
                                </p>
                                <p class="col-12 mb-3 text-lg py-3">
                                    <span class="text-secondary subttl">{{ __('security.GATHER_INFORMATION') }}</span>
                                    {{ __('security.GATHER_INFORMATION_DESC') }}
                                </p>
                                <p class="col-12 mb-3 text-lg py-3">
                                    <span class="text-secondary subttl">{{ __('security.CHANGE_YOUR_PASSWORD') }}</span>
                                    {{ __('security.CHANGE_YOUR_PASSWORD_DESC') }}
                                </p>
                                <p class="col-12 mb-3 text-lg py-3">
                                    <span class="text-secondary subttl">{{ __('security.DATA_CONFIDENTIALITY') }}</span>
                                    {{ __('security.DATA_CONFIDENTIALITY_DESC') }}
                                </p>
                                <p class="col-12 mb-3 text-lg py-3">
                                    <span
                                        class="text-secondary subttl">{{ __('security.STRENGTHEN_YOUR_SECURITY') }}</span>
                                    {{ __('security.STRENGTHEN_YOUR_SECURITY_DESC') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mb-4">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="container">
                    <div class="row">
                        <h2 class="col-12 text-center text-navy text-capitalize pb-4">{{ __('security.BEWARE_OF_FRAUD') }}
                        </h2>
                        <p class="col-12 text-center mb-3 text-secondary pb-4">{{ __('security.BEWARE_OF_FRAUD_SUB') }}</p>
                        <h2 class="col-12 text-center text-navy text-capitalize pb-4 px-2 px-lg-5">
                            {{ __('security.HOW_TO_SPOT') }}</h2>
                    </div>
                    <p class="col-12 mb-3 text-lg py-3">
                        <span class="text-secondary subttl">{{ __('security.SCRUTINIZE_THE_SOURCE') }}</span>
                        {{ __('security.SCRUTINIZE_THE_SOURCE_DESC') }}
                    </p>
                    <p class="col-12 mb-3 text-lg py-3">
                        <span class="text-secondary subttl">{{ __('security.EXERCISE_CAUTION') }}</span>
                        {{ __('security.EXERCISE_CAUTION_DESC') }}
                    </p>
                    <p class="col-12 mb-3 text-lg py-3">
                        <span class="text-secondary subttl">{{ __('security.BEWARE_OF_URGENT') }}</span>
                        {{ __('security.BEWARE_OF_URGENT_DESC') }}
                    </p>
                    <p class="col-12 mb-3 text-lg py-3">
                        <span class="text-secondary subttl">{{ __('security.AVOID_CLICKING') }}</span>
                        {{ __('security.AVOID_CLICKING_DESC') }}
                    </p>
                    <p class="col-12 mb-3 text-lg py-3">
                        <span class="text-secondary subttl">{{ __('security.RERORTING_SUSPICIOUS') }}</span>
                        {{ __('security.RERORTING_SUSPICIOUS_DESC') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container dark-divider my-5"></div>
        <div class="col-lg-12 pb-5 col-sm-12">
            <div class="container">
                <div class="row">
                    <p class="col-12 mb-3 text-center">{!! __('security.WE_TAKE_ALL_REPORTS') !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
