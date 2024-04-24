@include('layouts.banner', [
    'bannerTitle' => __('institutions.PAGE_TITLE_FULL_SOLUTION'),
    'bannerDescription' => __('institutions.PAGE_DESC_FULL_SOLUTION'),
    'bannerImage' => '/img/institutions-banners/desktop/full-solutions.svg',
    'mobileBanner' => '/img/institutions-banners/mobile/full-solutions.webp',
])

<section class="bg-gray">
    <div class="container">
        <div class="row py-5 flex-column-reverse-sm">
            <div class="col-lg-10 col-md-10 col-sm-10 m-auto">
                <div class="row">
                    <h1 class="col-12 text-center text-navy text-capitalize my-3">
                        {{ __('institutions.FULL_TRADING_SOLUTION') }}</h1>
                    <p class="col-12 text-dark-cust text-center">{!! __('institutions.THE_FULL_TRADING_SOLUTIONS') !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container pt-5">

        <div class="row pb-5">
            <h3 class="col-12 text-navy text-center text-capitalize my-3">
                {{ __('institutions.WHY_XS_FULL_TRADING_SOLUTION') }}</h3>
        </div>

        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2 mt-1">
                <img style="width:20px; height: 20px"
                    alt="{{ str_replace(':', '', __('institutions.EXTENSIVE_KNOWLEDGE')) }}"
                    src="{{ asset('/img/expert_guidance.svg') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span
                        class="text-secondary subttl">{{ __('institutions.EXTENSIVE_KNOWLEDGE') }}
                    </span>{{ __('institutions.ACCESS_TO_AN_EXTENSIVE') }}</p>
            </div>
        </div>

        {{-- <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2 mt-1">
                <img style="width:20px; height: 20px" alt="quick easy registration"
                    src="{{ asset('/img/customizable_platforms.svg') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span
                        class="text-secondary subttl">{{ __('institutions.CUSTOMIZABLE_TRADING_PLATFORMS') }}
                    </span>{{ __('institutions.XS_OFFER_CUSTOMIZABLE_TRADING_PLATFORMS') }}</p>
            </div>
        </div> --}}

        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2 mt-1">
                <img style="width:20px; height: 20px"
                    alt="{{ str_replace(':', '', __('institutions.CUSTOMISED_SOLUTIONS')) }}"
                    src="{{ asset('/img/customized_solutions.svg') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span
                        class="text-secondary subttl">{{ __('institutions.CUSTOMISED_SOLUTIONS') }}
                    </span>{{ __('institutions.OUR_TEAM_COLLABORATES_CLOSELY') }}</p>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2 mt-1">
                <img style="width:20px; height: 20px"
                    alt="{{ str_replace(':', '', __('institutions.DEEP_LIQUIDITY')) }}"
                    src="{{ asset('/img/deep_liquidity.svg') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span class="text-secondary subttl">{{ __('institutions.DEEP_LIQUIDITY') }}
                    </span>{{ __('institutions.WE_SOURCE_LIQUIDITY') }}</p>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2 mt-1">
                <img style="width:20px; height: 20px"
                    alt="{{ str_replace(':', '', __('institutions.ROBUST_CONNECTIVITY')) }}"
                    src="{{ asset('/img/robust_connectivity.svg') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span
                        class="text-secondary subttl">{{ __('institutions.ROBUST_CONNECTIVITY') }}
                    </span>{{ __('institutions.WE_OFFER_FIX_API_INTEGRATION') }}</p>
            </div>
        </div>



        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2 mt-1">
                <img style="width:20px; height: 20px"
                    alt="{{ str_replace(':', '', __('institutions.RISK_MANAGEMENT')) }}"
                    src="{{ asset('/img/risk_management.svg') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span class="text-secondary subttl">{{ __('institutions.RISK_MANAGEMENT') }}
                    </span>{{ __('institutions.ADVANCED_RISK_MANAGEMENT') }}</p>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2 mt-1">
                <img style="width:20px; height: 20px"
                    alt="{{ str_replace(':', '', __('institutions.PERSONALISED_EXPERIENCE')) }}"
                    src="{{ asset('/img/account-icon.png') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span
                        class="text-secondary subttl">{{ __('institutions.PERSONALISED_EXPERIENCE') }}
                    </span>{{ __('institutions.OUR_EXPERIENCED_RELATIONSHIP') }}</p>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2 mt-1">
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
            <div class="col-lg-auto col-md-1 col-2 mt-1">
                <img style="width:20px; height: 20px"
                    alt="{{ str_replace(':', '', __('tailored_services.REASON_10_TITLE')) }}"
                    src="{{ asset('/img/strategic_guidance.svg') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span
                        class="text-secondary subttl">{{ __('tailored_services.REASON_10_TITLE') }}
                    </span>{{ __('tailored_services.REASON_10_DESCRIPTION') }}</p>
            </div>
        </div>


        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2 mt-1">
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
