@extends('layouts.app')
@section('opengraph')
    @if ($section === 'home')
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ __('seo.TITLE_PARTNERS') }}">
        <meta property="og:description" content="{{ __('seo.DESCRIPTION_PARTNERS') }}">


        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="XSTrades.com">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ __('seo.TITLE_PARTNERS') }}">
        <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_PARTNERS') }}">
    @elseif($section === 'introducing-brokers')
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ __('seo.TITLE_INTRODUCING_BROKERS') }}">
        <meta property="og:description" content="{{ __('seo.DESCRIPTION_INTRODUCING_BROKERS') }}">


        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="XSTrades.com">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ __('seo.TITLE_INTRODUCING_BROKERS') }}">
        <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_INTRODUCING_BROKERS') }}">
    @elseif($section === 'asset-managers')
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ __('seo.TITLE_ASSET_MANAGERS') }}">
        <meta property="og:description" content="{{ __('seo.DESCRIPTION_ASSET_MANAGERS') }}">


        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="XSTrades.com">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ __('seo.TITLE_ASSET_MANAGERS') }}">
        <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_ASSET_MANAGERS') }}">
    @elseif($section === 'education-experts')
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ __('seo.TITLE_EDUCATION_EXPERTS') }}">
        <meta property="og:description" content="{{ __('seo.DESCRIPTION_EDUCATION_EXPERTS') }}">


        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="XSTrades.com">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ __('seo.TITLE_EDUCATION_EXPERTS') }}">
        <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_EDUCATION_EXPERTS') }}">
    @elseif($section === 'digital-affiliates')
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ __('seo.TITLE_DIGITAL_AFFILIATES') }}">
        <meta property="og:description" content="{{ __('seo.DESCRIPTION_DIGITAL_AFFILIATES') }}">


        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="XSTrades.com">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ __('seo.TITLE_DIGITAL_AFFILIATES') }}">
        <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_DIGITAL_AFFILIATES') }}">
    @elseif($section === 'influencers')
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ __('seo.TITLE_INFLUENCERS') }}">
        <meta property="og:description" content="{{ __('seo.DESCRIPTION_INFLUENCERS') }}">


        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="XSTrades.com">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ __('seo.TITLE_INFLUENCERS') }}">
        <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_INFLUENCERS') }}">
    @elseif($section === 'local-partners')
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ __('seo.TITLE_LOCAL_PARTNERS') }}">
        <meta property="og:description" content="{{ __('seo.DESCRIPTION_LOCAL_PARTNERS') }}">


        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="XSTrades.com">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ __('seo.TITLE_LOCAL_PARTNERS') }}">
        <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_LOCAL_PARTNERS') }}">
    @endif
@endsection
@section('meta_tags')
    @parent
    @if ($section === 'home')
        <title>{{ __('seo.TITLE_PARTNERS') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_PARTNERS') }}">
    @elseif($section === 'introducing-brokers')
        <title>{{ __('seo.TITLE_INTRODUCING_BROKER') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_INTRODUCING_BROKER') }}">
    @elseif($section === 'asset-managers')
        <title>{{ __('seo.TITLE_ASSET_MANAGER') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_ASSET_MANAGER') }}">
    @elseif($section === 'education-experts')
        <title>{{ __('seo.TITLE_EDUCATION') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_EDUCATION') }}">
    @elseif($section === 'digital-affiliates')
        <title>{{ __('seo.TITLE_DIGITAL') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_DIGITAL') }}">
    @elseif($section === 'influencers')
        <title>{{ __('seo.TITLE_INFLUENCERS') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_INFLUENCERS') }}">
    @elseif($section === 'local-partners')
        <title>{{ __('seo.TITLE_LOCAL_PARTNERS') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_LOCAL_PARTNERS') }}">
    @endif
@endsection
@section('content')
    {{-- <div class="w-100">
        <img src="{{ asset('img/partners-banner.png') }}" alt="{{ __('global.PARTNERSHIP_PROGRAM') }}"
            class="img-fluid w-100">
    </div> --}}

    @include('layouts.banner', [
        'bannerTitle' => __(($section == 'home' ? 'partners' : $section) . '.BANNER_TITLE'),
        'bannerDescription' => __(($section == 'home' ? 'partners' : $section) . '.BANNER_DESCRIPTION'),
        'bannerImage' => asset('/img/partners-banners/desktop/' . $section . '.svg'),
        'mobileBanner' => asset('/img/partners-banners/mobile/' . $section . '.webp'),
    ])

    @include('partners.' . $section)

    <section>
        <div class="container pt-5">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="container py-4">
                    <div class="row mb-4 flex-column-reverse-sm">
                        <div class="col-lg-12 col-sm-12">
                            <div class="row">
                                @if ($section === 'local-partners' || $section === 'home')
                                    <h2 class="col-12 text-navy text-capitalize">
                                        {!! __('local-partner.WHY_PARTNER_WITH_XS') !!}</h2>
                                @elseif($section === 'asset-managers')
                                    <h2 class="col-12 text-navy text-capitalize">
                                        {!! __('asset_manager.ASSET_MANAGEMENT') !!}</h2>
                                @elseif($section === 'introducing-brokers')
                                    <h2 class="col-12 text-navy text-capitalize">
                                        {!! __('introducing_brokers.WHY_INTRODUCING_BROKER') !!}</h2>
                                @elseif($section === 'education-experts')
                                    <h2 class="col-12 text-navy text-capitalize">
                                        {!! __('education.WHY_EDUCATION_EXPERTS') !!}</h2>
                                @elseif($section === 'digital-affiliates')
                                    <h2 class="col-12 text-navy text-capitalize">
                                        {!! __('digital.WHY_DIGITAL_AFFLIATES') !!}</h2>
                                @else
                                    <h2 class="col-12 text-navy text-capitalize">
                                        {!! __('partners.WHY_JOIN_INFLUENCERS_XS') !!}</h2>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 pb-5 col-sm-12">
                        @if ($section === 'introducing-brokers' || $section === 'digital-affiliates')
                            <div class="row">

                                <div class="row py-2">
                                    <div class="col-lg-auto col-md-1 col-2 mt-1">
                                        <img style="width:20px; height: 20px"
                                            alt="{{ str_replace(':', '', __('partners.INFLUENCERS_REASON_2_TITLE')) }}"
                                            src="{{ asset('/img/generous_rewards.svg') }}" />
                                    </div>
                                    <p class="col-md-11 col-10 mb-3 text-lg px-0">
                                        <span class="text-secondary subttl">{!! __('partners.INFLUENCERS_REASON_2_TITLE') !!}</span>
                                        {{ __('partners.INFLUENCERS_REASON_2_DESCRIPTION') }}
                                    </p>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-auto col-md-1 col-2 mt-1">
                                        <img style="width:20px; height: 20px"
                                            alt="{{ str_replace(':', '', __('partners.INFLUENCERS_REASON_3_TITLE')) }}"
                                            src="{{ asset('/img/prompt_payouts.svg') }}" />
                                    </div>
                                    <p class="col-md-11 col-10 mb-3 text-lg px-0">
                                        <span class="text-secondary subttl">{!! __('partners.INFLUENCERS_REASON_3_TITLE') !!}</span>
                                        {{ __('partners.INFLUENCERS_REASON_3_DESCRIPTION') }}
                                    </p>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-auto col-md-1 col-2 mt-1">
                                        <img style="width:20px; height: 20px"
                                            alt="{{ str_replace(':', '', __('partners.INFLUENCERS_REASON_4_TITLE')) }}"
                                            src="{{ asset('/img/advanced_reporting.svg') }}" />
                                    </div>
                                    <p class="col-md-11 col-10 mb-3 text-lg px-0">
                                        <span class="text-secondary subttl">{!! __('partners.INFLUENCERS_REASON_4_TITLE') !!}</span>
                                        {{ __('partners.INFLUENCERS_REASON_4_DESCRIPTION') }}
                                    </p>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-auto col-md-1 col-2 mt-1">
                                        <img style="width:20px; height: 20px"
                                            alt="{{ str_replace(':', '', __('partners.INFLUENCERS_REASON_5_TITLE')) }}"
                                            src="{{ asset('/img/promotional_tools.svg') }}" />
                                    </div>
                                    <p class="col-md-11 col-10 mb-3 text-lg px-0">
                                        <span class="text-secondary subttl">{!! __('partners.INFLUENCERS_REASON_5_TITLE') !!}</span>
                                        {{ __('partners.INFLUENCERS_REASON_5_DESCRIPTION') }}
                                    </p>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-auto col-md-1 col-2 mt-1">
                                        <img style="width:20px; height: 20px"
                                            alt="{{ str_replace(':', '', __('partners.INFLUENCERS_REASON_6_TITLE')) }}"
                                            src="{{ asset('/img/marketing_resources.svg') }}" />
                                    </div>
                                    <p class="col-md-11 col-10 mb-3 text-lg px-0">
                                        <span class="text-secondary subttl">{!! __('partners.INFLUENCERS_REASON_6_TITLE') !!}</span>
                                        {{ __('partners.INFLUENCERS_REASON_6_DESCRIPTION') }}
                                    </p>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-auto col-md-1 col-2 mt-1">
                                        <img style="width:20px; height: 20px"
                                            alt="{{ str_replace(':', '', __('partners.INFLUENCERS_REASON_7_TITLE')) }}"
                                            src="{{ asset('/img/excellent_support.svg') }}" />
                                    </div>
                                    <p class="col-md-11 col-10 mb-3 text-lg px-0">
                                        <span class="text-secondary subttl">{!! __('partners.INFLUENCERS_REASON_7_TITLE') !!}</span>
                                        {{ __('partners.INFLUENCERS_REASON_7_DESCRIPTION') }}
                                    </p>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-auto col-md-1 col-2 mt-1">
                                        <img style="width:20px; height: 20px"
                                            alt="{{ str_replace(':', '', __('partners.INFLUENCERS_REASON_8_TITLE')) }}"
                                            src="{{ asset('/img/premium_conditions.svg') }}" />
                                    </div>
                                    <p class="col-md-11 col-10 mb-3 text-lg px-0">
                                        <span class="text-secondary subttl">{!! __('partners.INFLUENCERS_REASON_8_TITLE') !!}</span>
                                        {{ __('partners.INFLUENCERS_REASON_8_DESCRIPTION') }}
                                    </p>
                                </div>
                            </div>
                        @elseif($section === 'asset-managers')
                            <div class="row">

                                <div class="row py-2">
                                    <div class="col-lg-auto col-md-1 col-2 mt-1">
                                        <img style="width:20px; height: 20px"
                                            alt="{{ str_replace(':', '', __('partners.ASSET_MANAGEMENT_1')) }}"
                                            src="{{ asset('/img/comprehensive_solutions.svg') }}" />
                                    </div>
                                    <p class="col-md-11 col-10 mb-3 text-lg px-0">
                                        <span class="text-secondary subttl">{!! __('partners.ASSET_MANAGEMENT_1') !!}</span>
                                        {{ __('partners.ASSET_MANAGEMENT_DESC_1') }}
                                    </p>
                                </div>

                                <div class="row py-2">
                                    <div class="col-lg-auto col-md-1 col-2 mt-1">
                                        <img style="width:20px; height: 20px"
                                            alt="{{ str_replace(':', '', __('partners.ASSET_MANAGEMENT_2')) }}"
                                            src="{{ asset('/img/advanced_reporting.svg') }}" />
                                    </div>
                                    <p class="col-md-11 col-10 mb-3 text-lg px-0">
                                        <span class="text-secondary subttl">{!! __('partners.ASSET_MANAGEMENT_2') !!}</span>
                                        {{ __('partners.ASSET_MANAGEMENT_DESC_2') }}
                                    </p>
                                </div>

                                <div class="row py-2">
                                    <div class="col-lg-auto col-md-1 col-2 mt-1">
                                        <img style="width:20px; height: 20px"
                                            alt="{{ str_replace(':', '', __('partners.ASSET_MANAGEMENT_3')) }}"
                                            src="{{ asset('/img/personalised_experience.svg') }}" />
                                    </div>
                                    <p class="col-md-11 col-10 mb-3 text-lg px-0">
                                        <span class="text-secondary subttl">{!! __('partners.ASSET_MANAGEMENT_3') !!}</span>
                                        {{ __('partners.ASSET_MANAGEMENT_DESC_3') }}
                                    </p>
                                </div>

                                <div class="row py-2">
                                    <div class="col-lg-auto col-md-1 col-2 mt-1">
                                        <img style="width:20px; height: 20px"
                                            alt="{{ str_replace(':', '', __('partners.ASSET_MANAGEMENT_4')) }}"
                                            src="{{ asset('/img/regulatory_compilance.svg') }}" />
                                    </div>
                                    <p class="col-md-11 col-10 mb-3 text-lg px-0">
                                        <span class="text-secondary subttl">{!! __('partners.ASSET_MANAGEMENT_4') !!}</span>
                                        {{ __('partners.ASSET_MANAGEMENT_DESC_4') }}
                                    </p>
                                </div>

                                <div class="row py-2">
                                    <div class="col-lg-auto col-md-1 col-2 mt-1">
                                        <img style="width:20px; height: 20px"
                                            alt="{{ str_replace(':', '', __('partners.ASSET_MANAGEMENT_5')) }}"
                                            src="{{ asset('/img/multiple_asset_classes.svg') }}" />
                                    </div>
                                    <p class="col-md-11 col-10 mb-3 text-lg px-0">
                                        <span class="text-secondary subttl">{!! __('partners.ASSET_MANAGEMENT_5') !!}</span>
                                        {{ __('partners.ASSET_MANAGEMENT_DESC_5') }}
                                    </p>
                                </div>

                                <div class="row py-2">
                                    <div class="col-lg-auto col-md-1 col-2 mt-1">
                                        <img style="width:20px; height: 20px"
                                            alt="{{ str_replace(':', '', __('partners.ASSET_MANAGEMENT_6')) }}"
                                            src="{{ asset('/img/advanced_reporting_list.svg') }}" />
                                    </div>
                                    <p class="col-md-11 col-10 mb-3 text-lg px-0">
                                        <span class="text-secondary subttl">{!! __('partners.ASSET_MANAGEMENT_6') !!}</span>
                                        {{ __('partners.ASSET_MANAGEMENT_DESC_6') }}
                                    </p>
                                </div>

                            </div>
                        @else
                            <div class="row">
                                <div class="row py-2">
                                    <div class="col-lg-auto col-md-1 col-2  mt-1">
                                        <img style="width:20px; height: 20px"
                                            alt="{{ str_replace(':', '', __('partners.INFLUENCERS_REASON_1_TITLE')) }}"
                                            src="{{ asset('/img/multiple_programs.svg') }}" />
                                    </div>
                                    <p class="col-md-11 col-10 mb-3 text-lg px-0">
                                        <span class="text-secondary subttl">{!! __('partners.INFLUENCERS_REASON_1_TITLE') !!}</span>
                                        {{ __('partners.INFLUENCERS_REASON_1_DESCRIPTION') }}
                                    </p>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-auto col-md-1 col-2  mt-1">
                                        <img style="width:20px; height: 20px"
                                            alt="{{ str_replace(':', '', __('partners.INFLUENCERS_REASON_2_TITLE')) }}"
                                            src="{{ asset('/img/generous_rewards.svg') }}" />
                                    </div>
                                    <p class="col-md-11 col-10 mb-3 text-lg px-0">
                                        <span class="text-secondary subttl">{!! __('partners.INFLUENCERS_REASON_2_TITLE') !!}</span>
                                        {{ __('partners.INFLUENCERS_REASON_2_DESCRIPTION') }}
                                    </p>
                                </div>

                                <div class="row py-2">
                                    <div class="col-lg-auto col-md-1 col-2  mt-1">
                                        <img style="width:20px; height: 20px"
                                            alt="{{ str_replace(':', '', __('partners.INFLUENCERS_REASON_3_TITLE')) }}"
                                            src="{{ asset('/img/prompt_payouts.svg') }}" />
                                    </div>
                                    <p class="col-md-11 col-10 mb-3 text-lg px-0">
                                        <span class="text-secondary subttl">{!! __('partners.INFLUENCERS_REASON_3_TITLE') !!}</span>
                                        {{ __('partners.INFLUENCERS_REASON_3_DESCRIPTION') }}
                                    </p>
                                </div>

                                <div class="row py-2">
                                    <div class="col-lg-auto col-md-1 col-2  mt-1">
                                        <img style="width:20px; height: 20px"
                                            alt="{{ str_replace(':', '', __('partners.INFLUENCERS_REASON_4_TITLE')) }}"
                                            src="{{ asset('/img/advanced_reporting.svg') }}" />
                                    </div>
                                    <p class="col-md-11 col-10 mb-3 text-lg px-0">
                                        <span class="text-secondary subttl">{!! __('partners.INFLUENCERS_REASON_4_TITLE') !!}</span>
                                        {{ __('partners.INFLUENCERS_REASON_4_DESCRIPTION') }}
                                    </p>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-auto col-md-1 col-2  mt-1">
                                        <img style="width:20px; height: 20px"
                                            alt="{{ str_replace(':', '', __('partners.INFLUENCERS_REASON_5_TITLE')) }}"
                                            src="{{ asset('/img/promotional_tools.svg') }}" />
                                    </div>
                                    <p class="col-md-11 col-10 mb-3 text-lg px-0">
                                        <span class="text-secondary subttl">{!! __('partners.INFLUENCERS_REASON_5_TITLE') !!}</span>
                                        {{ __('partners.INFLUENCERS_REASON_5_DESCRIPTION') }}
                                    </p>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-auto col-md-1 col-2  mt-1">
                                        <img style="width:20px; height: 20px"
                                            alt="{{ str_replace(':', '', __('partners.INFLUENCERS_REASON_6_TITLE')) }}"
                                            src="{{ asset('/img/marketing_resources.svg') }}" />
                                    </div>
                                    <p class="col-md-11 col-10 mb-3 text-lg px-0">
                                        <span class="text-secondary subttl">{!! __('partners.INFLUENCERS_REASON_6_TITLE') !!}</span>
                                        {{ __('partners.INFLUENCERS_REASON_6_DESCRIPTION') }}
                                    </p>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-auto col-md-1 col-2  mt-1">
                                        <img style="width:20px; height: 20px"
                                            alt="{{ str_replace(':', '', __('partners.INFLUENCERS_REASON_7_TITLE')) }}"
                                            src="{{ asset('/img/excellent_support.svg') }}" />
                                    </div>
                                    <p class="col-md-11 col-10 mb-3 text-lg px-0">
                                        <span class="text-secondary subttl">{!! __('partners.INFLUENCERS_REASON_7_TITLE') !!}</span>
                                        {{ __('partners.INFLUENCERS_REASON_7_DESCRIPTION') }}
                                    </p>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-auto col-md-1 col-2  mt-1">
                                        <img style="width:20px; height: 20px"
                                            alt="{{ str_replace(':', '', __('partners.INFLUENCERS_REASON_8_TITLE')) }}"
                                            src="{{ asset('/img/premium_conditions.svg') }}" />
                                    </div>
                                    <p class="col-md-11 col-10 mb-3 text-lg px-0">
                                        <span class="text-secondary subttl">{!! __('partners.INFLUENCERS_REASON_8_TITLE') !!}</span>
                                        {{ __('partners.INFLUENCERS_REASON_8_DESCRIPTION') }}
                                    </p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="col-12 text-center text-navy text-capitalize pb-5">
                        {{ __('introducing_brokers.LIQUIDITY_SOLUTIONS') }}</h2>
                </div>
                <div class="how-it-works">
                    <div
                        class="w-100 h-100 position-relative py-4 py-md-5 {{ App::getLocale() == 'ar' ? 'rotate-y-n180' : '' }} ">
                        <img class="curv-path" src="{{ asset('/img/curv_path.svg') }}" />
                        <div class="circle position-absolute left ratio-1x1 ratio overflow-hidden">
                            <div class="w-100 h-100 {{ App::getLocale() == 'ar' ? 'rotate-y-180' : '' }}">
                                <div class="h-50 mt-auto d-flex justify-content-center align-items-end mb-1">
                                    <img class="py-sm-2 py-1" src="{{ asset('/svgs/register.svg') }}"
                                        alt="{{ __('partners.STEP_1_TITLE') }}" />
                                </div>
                                <div class="w-100 h-50 mt-auto d-flex justify-content-center ">
                                    <p class="mb-0 mt-ld-3 mt-sm-2 fw-700 text-primary">{{ __('partners.STEP_1') }}</p>
                                </div>

                            </div>
                        </div>

                        <div class="circle position-absolute middle ratio-1x1 ratio overflow-hidden">
                            <div class="w-100 h-100 {{ App::getLocale() == 'ar' ? 'rotate-y-180' : '' }}">
                                <div class="h-50 mt-auto d-flex justify-content-center align-items-end  mb-1">
                                    <img class="py-sm-2 py-1" src="{{ asset('/svgs/step2.svg') }}"
                                        alt="{{ __('partners.STEP_2_TITLE') }}" />
                                </div>
                                <div class="w-100 h-50 mt-auto d-flex justify-content-center bg-primary ">
                                    <p class="mb-0 mt-ld-3 mt-sm-2 fw-700 text-white">{{ __('partners.STEP_2') }}</p>
                                </div>

                            </div>
                        </div>
                        <div class="circle position-absolute right ratio-1x1 ratio bg-primary ">
                            <div class="w-100 h-100 {{ App::getLocale() == 'ar' ? 'rotate-y-180' : '' }}">
                                <div class="h-50 mt-auto d-flex justify-content-center align-items-end  mb-1">
                                    <img class="py-sm-2 py-1" src="{{ asset('/svgs/step3.svg') }}"
                                        alt="{{ __('partners.STEP_3_TITLE') }}" />
                                </div>
                                <div class="w-100 h-50 mt-auto d-flex justify-content-center ">
                                    <p class="mb-0 mt-ld-3 mt-sm-2 fw-700 text-white">{{ __('partners.STEP_3') }}</p>
                                </div>

                            </div>
                        </div>

                    </div>
                    {{-- <img src="{{ asset('/img/referpath.png') }}" alt="process" class="img-fluid"> --}}
                </div>
                <div class="col-12">
                    <div class="row justify-content-between">
                        <div class="col-25 text-center step-content  ">
                            <h1>{{ __('partners.STEP_1_TITLE') }}</h1>
                            <p class="mb-0">{!! __('partners.STEP_1_DESCRIPTION') !!}</p>
                        </div>
                        <div class="col-25 text-center step-content  ">
                            <h1>{{ __('partners.STEP_2_TITLE') }}</h1>
                            <p class="mb-0">{!! __('partners.STEP_2_DESCRIPTION') !!}</p>
                        </div>
                        <div class="col-25 text-center step-content  ">
                            <h1>{{ __('partners.STEP_3_TITLE') }}</h1>
                            <p class="mb-0">{!! __('partners.STEP_3_DESCRIPTION') !!}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    @include('sections.why-choose-copy', [
        'title' => __('partners.WHY_CLIENTS_CHOSE_XS'),
    ])

    <section>
        <div class="container py-3 text-center">
            <div class="col-lg-12 col-md-12 col-sm-12 m-auto ">
                <div class="container py-4">
                    <div class="row mb-4 flex-column-reverse-sm">
                        <div class="col-lg-12 col-sm-12">
                            <div class="row">
                                @if ($section === 'local_partners')
                                    <h3 class="col-12 text-center text-navy text-capitalize">
                                        {{ __('local-partner.WE_SPEAK_YOUR_LANG') }}</h3>
                                @else
                                    <h3 class="col-12 text-center text-navy text-capitalize">
                                        {{ __('partners.LETS_TALK_PARTNERSHIP') }}</h3>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 pb-5 col-sm-12">
                        <div class="row justify-content-center">
                            <p class="col-lg-10 mb-3">{!! __('partners.LETS_TALK_PARTNERSHIP_DESCRIPTION') !!} </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container dark-divider my-5"></div>

    @include('sections.our-awards')
@endsection
