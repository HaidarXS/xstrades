@include('layouts.banner', [
    'bannerTitle' => __('whitelabels.PAGE_TITLE'),
    'bannerDescription' => __('whitelabels.PAGE_DESC'),
    'bannerImage' => '/img/institutions-banners/desktop/white-label.svg',
    'mobileBanner' => '/img/institutions-banners/mobile/white-label.webp',
])

<section class="bg-gray">
    <div class="container py-3">
        <div class="col-lg-10 col-md-10 col-sm-10 m-auto ">
            <div class="container py-4">
                <div class="row mb-4 flex-column-reverse-sm">
                    <div class="col-lg-12 col-sm-12">
                        <div class="row">
                            <h1 class="col-12 text-center text-navy text-capitalize">
                                {{ __('whitelabels.WHITE_LABEL_SOLUTIONS') }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 pb-5 col-sm-12">
                    <div class="row">
                        <p class="col-12 text-center mb-3">
                            {!! __('whitelabels.WHITE_LABEL_SOLUTIONS_DESCRIPTION') !!}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container pt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 ">
            <div class="container">
                <div class="row mb-4 flex-column-reverse-sm">
                    <div class="col-lg-12 col-sm-12">
                        <div class="row pb-3">
                            <h3 class="col-12 text-center text-navy text-capitalize">
                                {{ __('whitelabels.WHY_CHOSE_XS') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 pb-5 col-sm-12">
                    <div class="row">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('whitelabels.REASON_1_TITLE')) }}"
                                src="{{ asset('/img/comprehensive_solutions.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('whitelabels.REASON_1_TITLE') }}</span>
                            {{ __('whitelabels.REASON_1_DESCRIPTION') }}
                        </p>
                    </div>

                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('whitelabels.REASON_2_TITLE')) }}"
                                src="{{ asset('/img/customizable_branding.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl fw-700">{{ __('whitelabels.REASON_2_TITLE') }}</span>
                            {{ __('whitelabels.REASON_2_DESCRIPTION') }}
                        </p>
                    </div>

                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('whitelabels.REASON_3_TITLE')) }}"
                                src="{{ asset('/img/advanced_technology.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl fw-700">{{ __('whitelabels.REASON_3_TITLE') }}</span>
                            {{ __('whitelabels.REASON_3_DESCRIPTION') }}
                        </p>
                    </div>

                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('whitelabels.REASON_4_TITLE')) }}"
                                src="{{ asset('/img/competitive_pricing.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl fw-700">{{ __('whitelabels.REASON_4_TITLE') }}</span>
                            {{ __('whitelabels.REASON_4_DESCRIPTION') }}
                        </p>
                    </div>

                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('whitelabels.REASON_5_TITLE')) }}"
                                src="{{ asset('/img/multi_asset_classes.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl fw-700">{{ __('whitelabels.REASON_5_TITLE') }}</span>
                            {{ __('whitelabels.REASON_5_DESCRIPTION') }}
                        </p>
                    </div>

                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('whitelabels.REASON_6_TITLE')) }}"
                                src="{{ asset('/img/risk_management.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl fw-700">{{ __('whitelabels.REASON_6_TITLE') }}</span>
                            {{ __('whitelabels.REASON_6_DESCRIPTION') }}
                        </p>
                    </div>

                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('whitelabels.REASON_7_TITLE')) }}"
                                src="{{ asset('/img/compliance_support.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl fw-700">{{ __('whitelabels.REASON_7_TITLE') }}</span>
                            {{ __('whitelabels.REASON_7_DESCRIPTION') }}
                        </p>
                    </div>


                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('whitelabels.REASON_8_TITLE')) }}"
                                src="{{ asset('/img/account-icon.png') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl fw-700">{{ __('whitelabels.REASON_8_TITLE') }}</span>
                            {{ __('whitelabels.REASON_8_DESCRIPTION') }}
                        </p>
                    </div>

                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('whitelabels.REASON_9_TITLE')) }}"
                                src="{{ asset('/img/secure_data_protection.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl fw-700">{{ __('whitelabels.REASON_9_TITLE') }}</span>
                            {{ __('whitelabels.REASON_9_DESCRIPTION') }}
                        </p>
                    </div>

                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('whitelabels.REASON_12_TITLE')) }}"
                                src="{{ asset('/img/robust_connectivity.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl fw-700">{{ __('whitelabels.REASON_12_TITLE') }}</span>
                            {{ __('whitelabels.REASON_12_DESCRIPTION') }}
                        </p>
                    </div>

                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('whitelabels.REASON_10_TITLE')) }}"
                                src="{{ asset('/img/robust_infrastructure.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl fw-700">{{ __('whitelabels.REASON_10_TITLE') }}</span>
                            {{ __('whitelabels.REASON_10_DESCRIPTION') }}
                        </p>
                    </div>

                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('whitelabels.REASON_11_TITLE')) }}"
                                src="{{ asset('/img/reputation_trust.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl fw-700">{{ __('whitelabels.REASON_11_TITLE') }}</span>
                            {{ __('whitelabels.REASON_11_DESCRIPTION') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container dark-divider my-5"></div>

@include('institutions.b2b')
