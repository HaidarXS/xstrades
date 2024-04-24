@include('layouts.banner', [
    'bannerTitle' => __('institutions.PAGE_TITLE_TECHNOLOGY'),
    'bannerDescription' => __('institutions.PAGE_DESC_TECHNOLOGY'),
    'bannerImage' => '/img/institutions-banners/desktop/technology.svg',
    'mobileBanner' => '/img/institutions-banners/mobile/technology.webp',
])

<section class="bg-gray">
    <div class="container">
        <div class="row py-3 flex-column-reverse-sm">
            <div class="col-lg-12 col-sm-12">
                <div class="row">
                    <h1 class="col-12 text-center text-navy text-capitalize my-3">{{ __('institutions.XS_TECHNOLOGY') }}
                    </h1>
                    <p class="col-12 text-dark-cust text-center">{!! __('institutions.OUR_ADVEANCED_INFRASTRUCTURE') !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-5">
    <div class="container">
        <div class="row pb-3">
            <h3 class="col-12 text-navy text-center text-capitalize my-3">{{ __('institutions.WHY_XS_TECHNOLOGY') }}
            </h3>
        </div>
        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2 mt-1">
                <img style="width:20px; height: 20px" alt="{{ str_replace(':', '', __('institutions.CUTTING_EDGE')) }}"
                    src="{{ asset('/img/advanced_technology.svg') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span class="text-secondary subttl">{{ __('institutions.CUTTING_EDGE') }}
                    </span>{{ __('institutions.OUR_ADVANCED_TECHNOLOGY') }}</p>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2 mt-1">
                <img style="width:20px; height: 20px"
                    alt="{{ str_replace(':', '', __('institutions.CUSTOMIZABLE_TRADING_PLATFORMS')) }}"
                    src="{{ asset('/img/customizable_platforms.svg') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span
                        class="text-secondary subttl">{{ __('institutions.CUSTOMIZABLE_TRADING_PLATFORMS') }}
                    </span>{{ __('institutions.XS_OFFER_CUSTOMIZABLE_TRADING_PLATFORMS') }}</p>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2 mt-1">
                <img style="width:20px; height: 20px" alt="{{ str_replace(':', '', __('institutions.HIGH_SPEED')) }}"
                    src="{{ asset('/img/connectivity_stability.svg') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span class="text-secondary subttl">{{ __('institutions.HIGH_SPEED') }}
                    </span>{{ __('institutions.OUR_INFRASTRUCTURE_SPEED') }}</p>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2 mt-1">
                <img style="width:20px; height: 20px" alt="{{ str_replace(':', '', __('institutions.SECURE_DATA')) }}"
                    src="{{ asset('/img/secure_data_protection.svg') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span class="text-secondary subttl">{{ __('institutions.SECURE_DATA') }}
                    </span>{{ __('institutions.WE_EMPLOY_ROBUST') }}</p>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2 mt-1">
                <img style="width:20px; height: 20px"
                    alt="{{ str_replace(':', '', __('institutions.ROBUST_INFRASTRUCTURE')) }}"
                    src="{{ asset('/img/robust_infrastructure.svg') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span
                        class="text-secondary subttl">{{ __('institutions.ROBUST_INFRASTRUCTURE') }}
                    </span>{{ __('institutions.OUR_ROBUST_INFRASTRUCTURE') }}</p>
            </div>
        </div>

        {{-- <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2 mt-1">
                <img style="width:20px; height: 20px" alt="quick easy registration"
                    src="{{ asset('/img/scalable_customizable.svg') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span
                        class="text-secondary subttl">{{ __('institutions.SCALABLE_AND_CUSTOMIZABLE') }}
                    </span>{{ __('institutions.OUR_PACKAGE_ACCOMMODATE') }}</p>
            </div>
        </div> --}}

        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2 mt-1">

                <img style="width:20px; height: 20px"
                    alt="{{ str_replace(':', '', __('institutions.API_INTEGRATION')) }}"
                    src="{{ asset('/img/integration_connectivity.svg') }}" />
            </div>
            <div class="col-md-11 col-10 text-lg px-0">
                <p class="text-dark-cust"><span class="text-secondary subttl">{{ __('institutions.API_INTEGRATION') }}
                    </span>{{ __('institutions.OUR_CONNECTIVITY_SOLUTIONS') }}</p>
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
                    </span>
                    {{ __('institutions.OUR_EXPERIENCED_RELATIONSHIP') }}
                </p>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-lg-auto col-md-1 col-2 mt-1">
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
    </div>
</section>

<div class="container">
    <HR class="my-5">
</div>

<section class="pb-5">
    <div class="container">
        <div class="row">
            <h3 class="col-10 text-center text-navy text-capitalize my-3 m-auto">
                {{ __('institutions.LETS_TALK_FINTECH') }}
            </h3>
            <p class="col-10 text-center text-dark-cust m-auto">{!! __('institutions.OUR_TEAM_OF_EXPERTS') !!}</p>
        </div>
    </div>
</section>
