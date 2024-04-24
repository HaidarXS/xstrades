@include('layouts.banner', [
    'bannerTitle' => __('consultancy.PAGE_TITLE'),
    'bannerDescription' => __('consultancy.PAGE_DESC'),
    'bannerImage' => '/img/institutions-banners/desktop/consultancy.svg',
    'mobileBanner' => '/img/institutions-banners/mobile/consultancy.webp',
])

<section class="bg-gray">
    <div class="container py-3">
        <div class="col-lg-10 col-md-10 col-sm-10 m-auto">
            <div class="container py-4">
                <div class="row mb-4 flex-column-reverse-sm">
                    <div class="col-lg-12 col-sm-12">
                        <div class="row">
                            <h1 class="col-12 text-center text-navy text-capitalize">
                                {{ __('consultancy.CONSULTANCY_SERVICES') }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 pb-5 col-sm-12">
                    <div class="row">
                        <p class="col-12 text-center mb-3">
                            {!! __('consultancy.CONSULTANCY_SERVICES_DESCRIPTION') !!}</p>
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
                        <div class="row my-3">
                            <h3 class="col-12 text-navy text-center text-capitalize">
                                {{ __('consultancy.WHY_CHOSE_XS') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('consultancy.REASON_1_TITLE')) }}"
                                src="{{ asset('/img/expert_consultancy.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('consultancy.REASON_1_TITLE') }}</span>
                            {{ __('consultancy.REASON_1_DESCRIPTION') }}
                        </p>
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('consultancy.REASON_2_TITLE')) }}"
                                src="{{ asset('/img/customized_solutions.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('consultancy.REASON_2_TITLE') }}</span>
                            {{ __('consultancy.REASON_2_DESCRIPTION') }}
                        </p>
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('consultancy.REASON_3_TITLE')) }}"
                                src="{{ asset('/img/strategic_guidance.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('consultancy.REASON_3_TITLE') }}</span>
                            {{ __('consultancy.REASON_3_DESCRIPTION') }}
                        </p>
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('consultancy.REASON_4_TITLE')) }}"
                                src="{{ asset('/img/training_program.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('consultancy.REASON_4_TITLE') }}</span>
                            {{ __('consultancy.REASON_4_DESCRIPTION') }}
                        </p>
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('consultancy.REASON_5_TITLE')) }}"
                                src="{{ asset('/img/comprehensive_solutions.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('consultancy.REASON_5_TITLE') }}</span>
                            {{ __('consultancy.REASON_5_DESCRIPTION') }}
                        </p>
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('consultancy.REASON_6_TITLE')) }}"
                                src="{{ asset('/img/account-icon.png') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('consultancy.REASON_6_TITLE') }}</span>
                            {{ __('consultancy.REASON_6_DESCRIPTION') }}
                        </p>
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('consultancy.REASON_7_TITLE')) }}"
                                src="{{ asset('/img/scalable_customizable.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('consultancy.REASON_7_TITLE') }}</span>
                            {{ __('consultancy.REASON_7_DESCRIPTION') }}
                        </p>
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('consultancy.REASON_8_TITLE')) }}"
                                src="{{ asset('/img/reputation_trust.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('consultancy.REASON_8_TITLE') }}</span>
                            {{ __('consultancy.REASON_8_DESCRIPTION') }}
                        </p>
                    </div>
                    {{-- <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px" alt="quick easy registration"
                                src="{{ asset('/img/regulatory_compilance.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('consultancy.REASON_9_TITLE') }}</span>
                            {{ __('consultancy.REASON_9_DESCRIPTION') }}
                        </p>

                    </div> --}}

                    <div class="row py-2">
                        <div class="col-lg-auto col-md-1 col-2 mt-1">
                            <img style="width:20px; height: 20px"
                                alt="{{ str_replace(':', '', __('consultancy.REASON_9_TITLE')) }}"
                                src="{{ asset('/img/excellent_support.svg') }}" />
                        </div>
                        <p class="col-md-11 col-10 mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('consultancy.REASON_9_TITLE') }}</span>
                            {{ __('consultancy.REASON_9_DESCRIPTION') }}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container dark-divider my-5"></div>

@include('institutions.b2b')
