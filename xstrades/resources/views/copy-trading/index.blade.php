@extends('layouts.app')
@section('content')
    @if (session()->get('locale') == 'ar')
        <section class="hoko-banner-ar w-100">
        @else
            <section class="hoko-banner w-100">
    @endif
    <div class="row container py-3 m-auto d-flex flex-column-reverse-sm">
        <div
            class="col-md-6 col-12 text-white d-flex flex-column justify-content-center text-md-start text-center mb-md-0 mb-4">
            <h2>{{ __('hoko-trading.COPY_TRADING') }}</h2>
            <p class="text-white my-4 ">{!! __('hoko-trading.COPY_TRADING_DESC') !!}</p>
            <div class="row justify-content-start ">
                <div class="w-100 ">
                    <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1" target="_blank"
                        class="btn join-btn join-btn-hoko py-3 col-lg-6 col-auto">
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="me-3"><img src="{{ asset('/svgs/join-us.svg') }}"
                                    alt="{{ __('homepage.JOIN_XS_NOW') }}" style="width: 30px; object-fit: contain;"></span>
                            <span class=" fw-700">
                                {{ __('homepage.JOIN_XS_NOW') }}
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 d-flex justify-content-end mb-md-0 mb-4">
            <img src="{{ asset('img/hoko/trading-solution-banner.svg') }}" class="hoko-trading"
                alt="{{ __('hoko-trading.COPY_TRADING') }}">
        </div>

    </div>
    </section>

    <section class="py-5">
        <div class="row text-center container m-auto">
            <h2 class="text-secondary ">{{ __('hoko-trading.COPY_TRADING') }}</h2>
            <p class="text-muted my-3 col-12">{{ __('hoko-trading.WE_OFFER_OUR_CLIENTS') }}</p>
            <div class="col-lg-4 col-md-6 col-8 m-auto hoko-cloud d-flex flex-column py-4 px-5 my-4">
                <img src="{{ asset('img/hoko/hoko-new-logo.png') }}" alt="{{ __('hoko-trading.COPY_TRADING') }}">
                <a href="{{ route('hokocloud', ['lang' => App::getLocale()]) }}"
                    class="text-secondary text-capitalize fw-bolder mt-3 more-details-hoko">{{ __('account_types.MORE_DETAILS') }}

                    @if (session()->get('locale') == 'ar')
                        <span> <i class="fa-solid fa-arrow-right" style="transform:scaleX(-1)"></i></span>
                </a>
            @else
                <span> <i class="fa-solid fa-arrow-right"></i></span></a>
                @endif
            </div>
        </div>
    </section>

    <section class="row grey-bg py-5">
        <div class="row text-center container m-auto">
            <h2 class="text-secondary ">{{ __('hoko-trading.XS_COPY_ACCOUNT_TYPE') }}</h2>
            <p class="text-muted my-3 col-12 m-auto">{!! __('hoko-trading.WE_OFFER_CLIENTS_MORE') !!}</p>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-auto">
                <a href="{{ route('company', ['lang' => App::getLocale(), 'tab' => 'advantages']) }}"
                    class="btn join-us-button py-3 px-5 fw-700">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="me-3"><img class="btn-icon" src="{{ asset('/img/hoko/copy-accounts.png') }}"
                                alt=" {{ __('hoko-trading.XS_COPY_ACCOUNTS') }}"
                                style="width: 30px; object-fit: contain;"></span>
                        <span>
                            {{ __('hoko-trading.XS_COPY_ACCOUNTS') }}
                        </span>
                    </div>

                </a>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="row text-center container m-auto d-felx justify-content-evenly">
            <h2 class="text-secondary mb-5">{{ __('hoko-trading.WHAT_IS_COPY_TRADING') }}</h2>
            <div class="row">
                <div class="col-lg-6 col-12 m-auto border-left mb-5 text-start d-flex align-items-center">
                    <p class="px-3 mb-0">{{ __('hoko-trading.GRID_1') }}</p>
                </div>

                <div class="col-lg-6 col-12 m-auto border-left mb-5 text-start d-flex align-items-center">
                    <p class="px-3 mb-0">{{ __('hoko-trading.GRID_2') }}</p>
                </div>

                <div class="col-lg-6 col-12 m-auto border-left mb-5 text-start d-flex align-items-center">
                    <p class="px-3 mb-0">{{ __('hoko-trading.GRID_3') }}</p>
                </div>

                <div class="col-lg-6 col-12 m-auto border-left mb-5 text-start d-flex align-items-center">
                    <p class="px-3 mb-0">{{ __('hoko-trading.GRID_4') }}</p>
                </div>
            </div>
        </div>
    </section>

    @include('sections.why-use-copy')
    @include('sections.why-choose-copy')
    @include('sections.lets-connect')
@endsection
