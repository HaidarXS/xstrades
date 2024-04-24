@extends('layouts.app')
@section('content')
    <style>
        .let-us-connect {
            background-color: white !important;
        }

        .why-choose-section {
            background-color: #FAFAFA !important;
        }
    </style>
    <section class="hokocloud-banner w-100">
        <div class="row container py-3 m-auto d-flex flex-column-reverse-sm">
            <div
                class="col-md-6 col-12 text-white d-flex flex-column justify-content-center text-md-start text-center mb-md-0 mb-4">
                <h2>{{ __('hoko-cloud.HOKOCLOUD_TITLE') }}</h2>
                <p class="text-white my-4 ">{!! __('hoko-cloud.HOKOCLOUD_SUBTITLE') !!}</p>
                <div class="row justify-content-start ">
                    <div class="w-100 ">
                        <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1" target="_blank"
                            class="btn join-btn join-btn-hoko py-3 col-lg-6 col-auto">
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="me-3"><img src="{{ asset('/svgs/join-us.svg') }}"
                                        alt="{{ __('homepage.JOIN_XS_NOW') }}"
                                        style="width: 30px; object-fit: contain;"></span>
                                <span class=" fw-700">
                                    {{ __('homepage.JOIN_XS_NOW') }}
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 d-flex justify-content-end mb-md-0 mb-4">
                <img src="{{ asset('img/hoko/hokocloud-white.svg') }}" class="hoko-trading"
                    alt="{{ __('hoko-cloud.COPY_TRADING') }}">
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="row text-center container m-auto">
            <h1 class="text-secondary ">{!! __('hoko-cloud.WHAT_IS_HOKOCLOUD') !!}</h1>
            <p class="text-muted my-3 col-12 m-auto">{!! __('hoko-cloud.HOKOCLOUD_DESC') !!}</p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 offset-md-1 my-3">
                    <div class="text-center grey-bg border-rad-40 py-4 px-2 mx-5">
                        <div class="col-12">
                            <img class="mb-4 heigth-160" src="{{ asset('/img/hoko/for-investors.svg') }}"
                                alt="{!! __('hoko-cloud.FOR_INVESTORS') !!}">
                        </div>
                        <div class="col-12">
                            <h5 class="text-primary">{!! __('hoko-cloud.FOR_INVESTORS') !!}</h5>
                        </div>
                        <div class="col-12">
                            <p>{!! __('hoko-cloud.FOR_INVESTORS_DESC') !!}</p>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-4 offset-md-2 my-3">
                    <div class="text-center grey-bg border-rad-40 py-4 px-2 mx-5">
                        <div class="col-12">
                            <img class="mb-4 heigth-160" src="{{ asset('/img/hoko/for-traders.png') }}"
                                alt="{!! __('hoko-cloud.FOR_TRADERS') !!}">
                        </div>
                        <div class="col-12">
                            <h5 class="text-primary">{!! __('hoko-cloud.FOR_TRADERS') !!}</h5>
                        </div>
                        <div class="col-12">
                            <p>{!! __('hoko-cloud.FOR_TRADERS_DESC') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        @include('sections.how-it-works-hokocloud')
    </section>

    <section class="grey-bg py-5">
        <div class="container">
            <div class="row text-center container m-auto">
                <h2 class="text-secondary ">{{ __('hoko-cloud.XS_COPY_ACCOUNT_TYPE') }}</h2>
                <p class="text-muted my-3 col-12">{!! __('hoko-cloud.WE_OFFER_CLIENTS_MORE') !!}</p>
            </div>
            <div class="row justify-content-center pt-4">
                <div class="pt-4 d-flex justify-content-center">
                    <a href="{{ route('company', ['lang' => App::getLocale(), 'tab' => 'advantages']) }}"
                        class="btn join-us-button py-3 px-5 fw-700">
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="me-3"><img class="btn-icon" src="{{ asset('/img/hoko/copy-accounts.png') }}"
                                    alt=" {{ __('hoko-cloud.XS_COPY_ACCOUNTS') }}"
                                    style="width: 30px; object-fit: contain;"></span>
                            <span>
                                {{ __('hoko-cloud.XS_COPY_ACCOUNTS') }}
                            </span>
                        </div>

                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('sections.why-use-hokocloud')
    @include('sections.why-choose-copy')
    @include('sections.lets-connect')
@endsection
