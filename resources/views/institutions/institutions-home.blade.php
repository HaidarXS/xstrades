@include('layouts.banner', [
    'bannerTitle' => __('institutions.PAGE_TITLE'),
    'bannerDescription' => __('institutions.PAGE_DESC'),
    'bannerImage' => '/img/institutions-banners/desktop/institutions.svg',
    'mobileBanner' => '/img/institutions-banners/mobile/institutions.webp',
])

<section class="bg-gray">
    <div class="container">
        <div class="row py-3 flex-column-reverse-sm">
            <div class="col-lg-10 col-md-10 col-sm-10 m-auto">
                <div class="row">
                    <h1 class="col-12 text-center text-navy text-capitalize my-3 pb-3">
                        {{ __('institutions.INSTITUTIONAL_TRADING') }}</h1>
                    <p class="col-12 text-dark-cust text-center">{!! __('institutions.INSTITUTIONAL_TRADING_DESC') !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row py-5 flex-column-reverse-sm">
            <div class="col-lg-12 col-sm-12">
                <div class="row">
                    <h3 class="col-12 text-center text-navy text-capitalize my-3">
                        {{ __('institutions.MULTIPLE_INSTITUTIONAL_SOLUTIONS') }}</h3>
                    <p class="col-8 text-navy text-center m-auto">
                        {!! __('institutions.MULTIPLE_INSTITUTIONAL_SOLUTIONS_DESC') !!}</p>


                    <div class="row d-flex justify-content-around mt-5">
                        <a href="{{ route('institutions', ['lang' => App::getLocale(), 'tab' => 'liquidity']) }}"
                            class="col-xl-3 col-md-3 col-7 text-decoration-none">
                            <div class="card bg-gray border-rad-40 min-h-180">
                                <div class="card-body card-body-bet">
                                    <img src="{{ asset('/svgs/multiAsset.svg') }}"
                                        class="img-fluid d-flex justify-content-center m-auto"
                                        alt=" {{ __('institutions.MULTI_ASSET_LIQUIDITY_2') }}"
                                        style="aspect-ratio:1 / 1; width:65px;">
                                    <p class="text-green text-center fw-bold mt-3">
                                        {{ __('institutions.MULTI_ASSET_LIQUIDITY_2') }}</p>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('institutions', ['lang' => App::getLocale(), 'tab' => 'technology']) }}"
                            class="col-xl-3 col-md-3 col-7 text-decoration-none my-md-0 my-5">
                            <div class="card bg-gray border-rad-40 min-h-180">
                                <div class="card-body card-body-bet">
                                    <img src="{{ asset('/svgs/advancedTech.svg') }}"
                                        class="img-fluid d-flex justify-content-center m-auto"
                                        alt="{{ __('institutions.ADVANCED_TECHNOLOGY_2') }}"
                                        style="aspect-ratio:1 / 1; width:65px;">
                                    <p class="text-green text-center fw-bold mt-3">
                                        {{ __('institutions.ADVANCED_TECHNOLOGY_2') }}</p>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('institutions', ['lang' => App::getLocale(), 'tab' => 'tailored-services']) }}"
                            class="col-xl-3 col-md-3 col-7 text-decoration-none">
                            <div class="card bg-gray border-rad-40 min-h-180">
                                <div class="card-body card-body-bet">
                                    <img src="{{ asset('/svgs/tailored.svg') }}"
                                        class="img-fluid d-flex justify-content-center m-auto"
                                        alt="{{ __('institutions.TAILORED_SERVICES') }}"
                                        style="aspect-ratio:1 / 1; width:65px;">
                                    <p class="text-green text-center fw-bold mt-3">
                                        {{ __('institutions.TAILORED_SERVICES') }}</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="row d-flex justify-content-around mt-5">
                        <a href="{{ route('institutions', ['lang' => App::getLocale(), 'tab' => 'full-solutions']) }}"
                            class="col-xl-3 col-md-3 col-7 text-decoration-none">
                            <div class="card bg-gray border-rad-40 min-h-180">
                                <div class="card-body card-body-bet">
                                    <img src="{{ asset('/svgs/fullsol.svg') }}"
                                        class="img-fluid d-flex justify-content-center m-auto"
                                        alt=" {{ __('institutions.FULL_SOLUTION') }}"
                                        style="aspect-ratio:1 / 1; width:65px;">
                                    <p class="text-green text-center fw-bold mt-3">
                                        {{ __('institutions.FULL_SOLUTION') }}</p>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('institutions', ['lang' => App::getLocale(), 'tab' => 'consultancy']) }}"
                            class="col-xl-3 col-md-3 col-7 my-md-0 my-5 text-decoration-none">
                            <div class="card bg-gray border-rad-40 min-h-180">
                                <div class="card-body card-body-bet">
                                    <img src="{{ asset('/svgs/consultancy.svg') }}"
                                        class="img-fluid d-flex justify-content-center m-auto"
                                        alt="{{ __('institutions.CONSULTANCY') }}"
                                        style="aspect-ratio:1 / 1; width:65px;">
                                    <p class="text-green text-center fw-bold mt-3">{{ __('institutions.CONSULTANCY') }}
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('institutions', ['lang' => App::getLocale(), 'tab' => 'white-labels']) }}"
                            class="col-xl-3 col-md-3 col-7 text-decoration-none">
                            <div class="card bg-gray border-rad-40 min-h-180">
                                <div class="card-body card-body-bet">
                                    <img src="{{ asset('/svgs/whitelabel.svg') }}"
                                        class="img-fluid d-flex justify-content-center m-auto"
                                        alt="{{ __('institutions.WHITE_LABELS') }}"
                                        style="aspect-ratio:1 / 1; width:65px;">
                                    <p class="text-green text-center fw-bold mt-3">
                                        {{ __('institutions.WHITE_LABELS') }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <h3 class="col-12 text-navy text-capitalize my-3">{{ __('institutions.WHY_INSTITUTIONAL_TRADING') }}</h3>
        </div>
        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2  mt-1">
                <img style="width:20px; height: 20px"
                    alt="{{ str_replace(':', '', __('institutions.COMPREHENSIVE_SOLUTIONS')) }}"
                    src="{{ asset('/img/comprehensive_solutions.svg') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span
                        class="text-secondary subttl">{{ __('institutions.COMPREHENSIVE_SOLUTIONS') }}
                    </span>{{ __('institutions.WIDE_RANGE_OF_SOLUTIONS') }}</p>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2  mt-1">
                <img style="width:20px; height: 20px"
                    alt="{{ str_replace(':', '', __('institutions.COMPETITIVE_PRICING')) }}"
                    src="{{ asset('/img/competitive_pricing.svg') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span
                        class="text-secondary subttl">{{ __('institutions.COMPETITIVE_PRICING') }}
                    </span>{{ __('institutions.ACCESS_TO_INSTITUTIONAL_PRICING') }}</p>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2  mt-1">
                <img style="width:20px; height: 20px"
                    alt="{{ str_replace(':', '', __('institutions.ROBUST_TECHNOLOGY')) }}"
                    src="{{ asset('/img/advanced_reporting.svg') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span
                        class="text-secondary subttl">{{ __('institutions.ROBUST_TECHNOLOGY') }}
                    </span>{{ __('institutions.OUR_CUTTING_EDGE_TRADING_INFRASTRUCTURE') }}</p>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2  mt-1">
                <img style="width:20px; height: 20px"
                    alt="{{ str_replace(':', '', __('institutions.FLEXIBLE_EXECUTION')) }}"
                    src="{{ asset('/img/flexible_execution.svg') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span
                        class="text-secondary subttl">{{ __('institutions.FLEXIBLE_EXECUTION') }}
                    </span>{{ __('institutions.OUR_CUTTING_EDGE_TRADING_INFRASTRUCTURE_2') }}</p>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2  mt-1">
                <img style="width:20px; height: 20px"
                    alt="{{ str_replace(':', '', __('institutions.RISK_MANAGEMENT')) }}"
                    src="{{ asset('/img/risk_management.svg') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span
                        class="text-secondary subttl">{{ __('institutions.RISK_MANAGEMENT') }}
                    </span>{{ __('institutions.ADVANCED_RISK_MANAGEMENT_TOOLS') }}</p>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2  mt-1">
                <img style="width:20px; height: 20px"
                    alt="{{ str_replace(':', '', __('institutions.PERSONALISED_EXPERIENCE')) }}"
                    src="{{ asset('/img/account-icon.png') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust">
                    <span class="text-secondary subttl">{{ __('institutions.PERSONALISED_EXPERIENCE') }} </span>
                    {{ __('institutions.OUR_EXPERIENCED_RELATIONSHIP_MANAGERS_2') }}
                </p>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2  mt-1">
                <img style="width:20px; height: 20px"
                    alt="{{ str_replace(':', '', __('institutions.REGULATORY_COMPLIANCE')) }}"
                    src="{{ asset('/img/regulatory_compilance.svg') }}" />
            </div>

            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span
                        class="text-secondary subttl">{{ __('institutions.REGULATORY_COMPLIANCE') }}
                    </span>{{ __('institutions.WE_MAINTAIN_A_TRANSPARENT') }}</p>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2  mt-1">
                <img style="width:20px; height: 20px"
                    alt="{{ str_replace(':', '', __('institutions.SCALABLE_AND_CUSTOMIZABLE')) }}"
                    src="{{ asset('/img/scalable_customizable.svg') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust">
                    <span class="text-secondary subttl">{{ __('institutions.SCALABLE_AND_CUSTOMIZABLE') }} </span>
                    {{ __('institutions.OUR_PACKAGE_ACCOMMODATE') }}
                </p>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2  mt-1">
                <img style="width:20px; height: 20px"
                    alt="{{ str_replace(':', '', __('institutions.MULTIPLE_ASSET_CLASSES')) }}"
                    src="{{ asset('/img/multi_asset_classes.svg') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span
                        class="text-secondary subttl">{{ __('institutions.MULTIPLE_ASSET_CLASSES') }}
                    </span>{{ __('institutions.ACCESS_TO_A_WIDE_RANGE_OF_ASSET_CLASSES') }}</p>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2  mt-1">
                <img style="width:20px; height: 20px"
                    alt="{{ str_replace(':', '', __('institutions.REPUTATION_AND_TRUST')) }}"
                    src="{{ asset('/img/reputation_trust.svg') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span
                        class="text-secondary subttl">{{ __('institutions.REPUTATION_AND_TRUST') }}
                    </span>{{ __('institutions.INSTITUTIONS_CAN_RELY_ON_OUR_PROVEN') }}</p>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2  mt-1">
                <img style="width:20px; height: 20px"
                    alt="{{ str_replace(':', '', __('institutions.COMPLIANCE_SUPPORT')) }}"
                    src="{{ asset('/img/compliance_support.svg') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span
                        class="text-secondary subttl">{{ __('institutions.COMPLIANCE_SUPPORT') }}
                    </span>{{ __('institutions.EXPERT_ASSISTANCE_FOR_INSTITUTIONS_IN_MEETING') }}</p>
            </div>
        </div>
    </div>
</section>

<div class="container dark-divider my-5"></div>

@include('institutions.b2b')
