@extends('layouts.app')

@section('content')
    <div class="w-100">
        <img src="{{ asset('img/trading-conditions-banner.png') }}" alt=""
            class="img-fluid w-100\">
    </div>

    <section class="grey-bg">
        <div class="container py-3">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="container py-4">
                    <div class="row mb-4 flex-column-reverse-sm">
                        <div class="col-lg-12 col-sm-12">
                            <div class="row">
                                <h2 class="col-12 text-center text-navy text-capitalize">
                                    {{ __('trading-conditions.TRADING_CONDITIONS_TITLE1') }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                        <div class="row">
                            <p class="col-12 mb-3 text-center">
                                {!! __('trading-conditions.TRADING_CONDITIONS_DESCRIPTION1') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <div class="container mt-5">
            <div class="row">



                <div class="col-lg-4 col-md-6 my-4">
                    <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                        <div class="row">
                            <div class="bg-gray border-radius-50 p-5 td-box">
                                <div class="col-auto mx-auto text-center">
                                    <img src="{{ asset('/img/margin-leverage.svg') }}" alt="" class="td-image">
                                </div>
                                <div class="col-12 mt-3">
                                    <h5 class="text-secondary text-center">
                                        {{ __('trading-conditions.MARGIN_LEVERAGE') }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 my-4">
                    <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                        <div class="row">
                            <div class="bg-gray border-radius-50 p-5 td-box">
                                <div class="col-auto mx-auto text-center">
                                    <img src="{{ asset('/img/spreads.svg') }}" alt="" class="td-image">
                                </div>
                                <div class="col-12 mt-3">
                                    <h5 class="text-secondary text-center">
                                        {{ __('trading-conditions.SPREADS') }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 my-4">
                    <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                        <div class="row">
                            <div class="bg-gray border-radius-50 p-5 td-box">
                                <div class="col-auto mx-auto text-center">
                                    <img src="{{ asset('/img/swap-rates.svg') }}" alt="" class="td-image">
                                </div>
                                <div class="col-12 mt-3">
                                    <h5 class="text-secondary text-center">
                                        {{ __('trading-conditions.SWAP_RATES') }}

                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 my-4">
                    <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                        <div class="row">
                            <div class="bg-gray border-radius-50 p-5 td-box">
                                <div class="col-auto mx-auto text-center">
                                    <img src="{{ asset('/img/trading-hours.svg') }}" alt="" class="td-image">
                                </div>
                                <div class="col-12 mt-3">
                                    <h5 class="text-secondary text-center">
                                        {{ __('trading-conditions.TRADING_HOURS') }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 my-4">
                    <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                        <div class="row">
                            <div class="bg-gray border-radius-50 p-5 td-box">
                                <div class="col-auto mx-auto text-center">
                                    <img src="{{ asset('/img/execution.svg') }}" alt="" class="td-image">
                                </div>
                                <div class="col-12 mt-3">
                                    <h5 class="text-secondary text-center">
                                        {{ __('trading-conditions.EXECUTION') }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 my-4">
                    <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                        <div class="row">
                            <div class="bg-gray border-radius-50 p-5 td-box">
                                <div class="col-auto mx-auto text-center">
                                    <img src="{{ asset('/img/swap-free.svg') }}" alt="" class="td-image">
                                </div>
                                <div class="col-12 mt-3">
                                    <h5 class="text-secondary text-center">
                                        {{ __('trading-conditions.SWAP_FREE_RULES') }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>

        <div class="container py-3">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="container py-4">
                    <div class="row mb-4 flex-column-reverse-sm">
                        <div class="col-lg-12 col-sm-12">
                            <div class="row">
                                <h2 class="col-12 text-center text-navy text-capitalize">
                                    {{ __('trading-conditions.TRADING_CONDITIONS_TITLE2') }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 pb-5 col-sm-12">
                        <div class="row">
                            <p class="col-12 mb-3 text-center">
                                {!! __('trading-conditions.TRADING_CONDITIONS_DESCRIPTION2') !!}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection
