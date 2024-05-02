@include('layouts.banner', [
    'bannerTitle' => __('liquidity.PAGE_TITLE'),
    'bannerDescription' => __('liquidity.PAGE_DESC'),
    'bannerImage' => '/img/institutions-banners/desktop/liquidity.svg',
    'mobileBanner' => '/img/institutions-banners/mobile/liquidity.webp',
])

<section class="grey-bg">
    <div class="container py-3">
        <div class="col-lg-10 col-md-10 col-sm-10 m-auto ">
            <div class="container py-2">
                <div class="row mb-4 flex-column-reverse-sm">
                    <div class="col-lg-12 col-sm-12">
                        <div class="row">
                            <h1 class="col-12 text-center text-navy text-capitalize">
                                {!! __('liquidity.LIQUIDITY_SOLUTIONS') !!}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 pb-5 col-sm-12">
                    <div class="row">
                        <p class="col-12 text-center mb-3">
                            {!! __('liquidity.LIQUIDITY_SOLUTIONS_DESCRIPTION') !!}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container pt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 ">
            <div class="container py-4">
                <div class="row mb-4 flex-column-reverse-sm">
                    <div class="col-lg-12 col-sm-12">
                        <div class="row">
                            <h3 class="col-12 text-center text-navy text-capitalize">
                                {{ __('liquidity.WHY_CHOSE_XS') }}</h3>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12 pb-3 col-sm-12">

                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('liquidity.REASON_1_TITLE')) }}"
                                src="{{ asset('/img/multi_asset_classes.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('liquidity.REASON_1_TITLE') }}</span>
                            {{ __('liquidity.REASON_1_DESCRIPTION') }}
                        </p>
                    </div>

                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('liquidity.REASON_2_TITLE')) }}"
                                src="{{ asset('/img/deep_liquidity.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('liquidity.REASON_2_TITLE') }}</span>
                            {{ __('liquidity.REASON_2_DESCRIPTION') }}
                        </p>
                    </div>

                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('liquidity.REASON_3_TITLE')) }}"
                                src="{{ asset('/img/advanced_technology.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('liquidity.REASON_3_TITLE') }}</span>
                            {{ __('liquidity.REASON_3_DESCRIPTION') }}
                        </p>
                    </div>

                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('liquidity.REASON_4_TITLE')) }}"
                                src="{{ asset('/img/transparent_trading_conditions.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('liquidity.REASON_4_TITLE') }}</span>
                            {{ __('liquidity.REASON_4_DESCRIPTION') }}
                        </p>
                    </div>

                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('liquidity.REASON_5_TITLE')) }}"
                                src="{{ asset('/img/robust_connectivity.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('liquidity.REASON_5_TITLE') }}</span>
                            {{ __('liquidity.REASON_5_DESCRIPTION') }}
                        </p>
                    </div>

                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('liquidity.REASON_6_TITLE')) }}"
                                src="{{ asset('/img/flexible_execution.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('liquidity.REASON_6_TITLE') }}</span>
                            {{ __('liquidity.REASON_6_DESCRIPTION') }}
                        </p>
                    </div>

                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('liquidity.REASON_7_TITLE')) }}"
                                src="{{ asset('/img/risk_management.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('liquidity.REASON_7_TITLE') }}</span>
                            {{ __('liquidity.REASON_7_DESCRIPTION') }}
                        </p>
                    </div>

                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('liquidity.REASON_8_TITLE')) }}"
                                src="{{ asset('/img/account-icon.png') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('liquidity.REASON_8_TITLE') }}</span>
                            {{ __('liquidity.REASON_8_DESCRIPTION') }}
                        </p>
                    </div>

                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('liquidity.REASON_9_TITLE')) }}"
                                src="{{ asset('/img/scalable_customizable.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('liquidity.REASON_9_TITLE') }}</span>
                            {{ __('liquidity.REASON_9_DESCRIPTION') }}
                        </p>
                    </div>

                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('liquidity.REASON_10_TITLE')) }}"
                                src="{{ asset('/img/regulatory_compilance.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('liquidity.REASON_10_TITLE') }}</span>
                            {{ __('liquidity.REASON_10_DESCRIPTION') }}
                        </p>
                    </div>

                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('liquidity.REASON_11_TITLE')) }}"
                                src="{{ asset('/img/reputation_trust.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('liquidity.REASON_11_TITLE') }}</span>
                            {{ __('liquidity.REASON_11_DESCRIPTION') }}
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>



<section>
    <div class="container py-3">
        <hr>
        <div class="col-lg-10 col-md-10 col-sm-10 m-auto ">
            <div class="container py-4">
                <div class="row mb-4 flex-column-reverse-sm">
                    <div class="col-lg-12 col-sm-12">
                        <div class="row">
                            <h3 class="col-12 text-center text-navy text-capitalize">
                                {{ __('institutions.LETS_TALK_LIQUIDITY') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 pb-5 col-sm-12">
                    <div class="row justify-content-center">
                        <p class="col-lg-10 text-center mb-3">{!! __('institutions.LETS_TALK_LIQUIDITY_DISC') !!}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
