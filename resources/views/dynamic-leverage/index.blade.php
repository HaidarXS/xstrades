@extends('layouts.app')

@section('content')
    <style>
        td {
            border: 1px solid var(--primary-color) !important;
            text-align: center;
            padding: 12px;
            color: rgba(9, 9, 121, 1);
            font-weight: 800;
        }

        th {
            width: 300px;
            color: white;
            background-color: rgb(48, 175, 133);
            padding: 12px;
            text-align: center;
            border: 1px solid white !important;
            font-weight: 800;
        }

        [dir="rtl"] .left-corner {
            border-radius: 0 23px 0 0;
        }

        [dir="rtl"] .right-corner {
            border-radius: 23px 0 0 0;
        }

        .left-corner {
            border-radius: 23px 0 0 0;
        }

        .right-corner {
            border-radius: 0 23px 0 0;
        }

        .join-btn-leverage {
            background: transparent;
            border: 1px solid white;
            border-radius: 29px;
            width: 365px;
            max-width: 100%;
            min-width: max-content;
            height: 74px;
            font-size: 22px;
            padding: 0 1.5em !important;
            display: flex;
        }
    </style>
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_DYNAMIC') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_DYNAMIC') }}">
@endsection
@include('layouts.banner', [
    'bannerTitle' => __('dynamic-leverage.PAGE_TITLE'),
    'bannerDescription' => __('dynamic-leverage.PAGE_SUBTITLE'),
    'bannerImage' => asset('/img/traders-accounts-banners/desktop/leverage.svg'),
    'mobileBanner' => asset('/img/traders-accounts-banners/mobile/leverage.webp'),
])

{{-- <section class="d-flex justify-content-center pt-5 row dl">


        <div class="accordion accordion-flush col-10" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        {{ __('dynamic-leverage.FX_MAJORS') }}
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        @include('dynamic-leverage.account-types.fx-majors')
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        {{ __('dynamic-leverage.FX_MINORS') }}
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        @include('dynamic-leverage.account-types.fx-minors')
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        {{ __('dynamic-leverage.FX_EXOTICS') }}
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        @include('dynamic-leverage.account-types.fx-exotics')
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingfour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                        {{ __('dynamic-leverage.GOLD') }}
                    </button>
                </h2>
                <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        @include('dynamic-leverage.account-types.gold')
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingfive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                        {{ __('dynamic-leverage.SILVER') }}
                    </button>
                </h2>
                <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        @include('dynamic-leverage.account-types.silver')
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingsix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapsesix">
                        {{ __('dynamic-leverage.METALS(PLATINUM & PALLADIUM)') }}
                    </button>
                </h2>
                <div id="flush-collapsesix" class="accordion-collapse collapse" aria-labelledby="flush-headingsix"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        @include('dynamic-leverage.account-types.metals')
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingseven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseseven" aria-expanded="false" aria-controls="flush-collapseseven">
                        {{ __('dynamic-leverage.MAJOR_INDICES') }}
                    </button>
                </h2>
                <div id="flush-collapseseven" class="accordion-collapse collapse" aria-labelledby="flush-headingseven"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        @include('dynamic-leverage.account-types.major-indices')
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingeight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseeight" aria-expanded="false" aria-controls="flush-collapseeight">
                        {{ __('dynamic-leverage.MINOR_INDICES') }}
                    </button>
                </h2>
                <div id="flush-collapseeight" class="accordion-collapse collapse" aria-labelledby="flush-headingeight"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        @include('dynamic-leverage.account-types.minor-indices')
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingnine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapsenine" aria-expanded="false" aria-controls="flush-collapsenine">
                        {{ __('dynamic-leverage.CRUDE_OIL') }}
                    </button>
                </h2>
                <div id="flush-collapsenine" class="accordion-collapse collapse" aria-labelledby="flush-headingnine"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        @include('dynamic-leverage.account-types.crude-oil')
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingten">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseten" aria-expanded="false" aria-controls="flush-collapseten">
                        {{ __('account_types.CRYPTO') }}
                    </button>
                </h2>
                <div id="flush-collapseten" class="accordion-collapse collapse" aria-labelledby="flush-headingten"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        @include('dynamic-leverage.account-types.cryptos')
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

<section class="my-5">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 text-center my-4">
                <h1 class="text-secondary fw-700 text-center">{{ __('dynamic-leverage.WHAT_IS') }}
                </h1>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 text-center">
                <p>{!! __('dynamic-leverage.WHAT_IS_TEXT') !!}</p>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 text-center my-4">
                <h1 class="text-secondary fw-700 text-center">{{ __('dynamic-leverage.DYNAMIC_LEVERAGE_WITH_XS') }}
                </h1>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 text-center">
                <p>{!! __('dynamic-leverage.DYNAMIC_LEVERAGE_WITH_XS_DESC') !!}</p>
            </div>
        </div>
    </div>
</section>

<section class="my-5 leverage-table">
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-12 text-center pb-4 mx-auto">
                <table cellpadding="10" cellspacing="0">
                    <tr>
                        <th class="left-corner">{!! __('dynamic-leverage.ASSET_CLASS') !!}</th>
                        <th class="right-corner">{!! __('dynamic-leverage.MAX_LEVERAGE') !!}</th>
                    </tr>
                    <tr>
                        <td>{!! __('dynamic-leverage.FX_MAJORS') !!}</td>
                        <td>1:2000</td>
                    </tr>
                    <tr>
                        <td>{!! __('dynamic-leverage.GOLD') !!}</td>
                        <td>1:2000</td>
                    </tr>
                    <tr>
                        <td>{!! __('dynamic-leverage.FX_MINORS') !!}</td>
                        <td>1:500</td>
                    </tr>
                    <tr>
                        <td>{!! __('dynamic-leverage.CRUDE_OIL') !!}</td>
                        <td>1:500</td>
                    </tr>
                    <tr>
                        <td>{!! __('dynamic-leverage.MAJOR_INDICES') !!}</td>
                        <td>1:500</td>
                    </tr>
                    <tr>
                        <td>{!! __('dynamic-leverage.BTC_ETH') !!}</td>
                        <td>1:500</td>
                    </tr>
                    <tr>
                        <td>{!! __('dynamic-leverage.FX_EXOTICS') !!}</td>
                        <td>1:200</td>
                    </tr>
                    <tr>
                        <td>{!! __('dynamic-leverage.SILVER') !!}</td>
                        <td>1:200</td>
                    </tr>
                    <tr>
                        <td>{!! __('dynamic-leverage.MINOR_INDICES') !!}</td>
                        <td>1:100</td>
                    </tr>
                    <tr>
                        <td>{!! __('dynamic-leverage.PLATINUM_AND_PALLADIUM') !!}</td>
                        <td>1:100</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</section>

<section class="leverage-table dl">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 text-center my-4">
                <h1 class="text-secondary fw-700 text-center">{{ __('dynamic-leverage.MARGIN_REQUIREMENTS') }}
                </h1>
            </div>
        </div>

        @include('dynamic-leverage.account-types.fx-majors')

        @include('dynamic-leverage.account-types.fx-minors')

        @include('dynamic-leverage.account-types.fx-exotics')

        @include('dynamic-leverage.account-types.gold')

        @include('dynamic-leverage.account-types.silver')

        @include('dynamic-leverage.account-types.metals')

        @include('dynamic-leverage.account-types.major-indices')

        @include('dynamic-leverage.account-types.minor-indices')

        @include('dynamic-leverage.account-types.crude-oil')

        @include('dynamic-leverage.account-types.cryptos')

    </div>
</section>

<section class="leverage-table">
    <div class="row container py-3 m-auto d-flex flex-column-sm">
        <div
            class="col-xl-8 col-md-9 col-12 mx-auto d-flex flex-column justify-content-center text-md-start text-center mb-md-0 mb-4">
            <p class="text-center">{!! __('dynamic-leverage.DYNAMIC_LEVERAGE_DOES_NOT_APPLY') !!}</p>
        </div>
        <div class="col-12 text-center">
            <div class="row justify-content-center">
                <div class=" pt-4 d-flex justify-content-center">
                    <a href="{{ route('contract_specs', ['lang' => App::getLocale()]) }}"
                        class="btn join-us-button py-3 px-5">
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="me-3">
                                <img class="btn-icon d-flex" src="{{ asset('/img/contract-cta.svg') }}" alt="message-us"
                                    style="width: 30px; object-fit: contain;"></span>
                            @if (App::getLocale() == 'jp')
                                <span>
                                    詳しい契約仕様を見る
                                </span>
                            @else
                                <span>
                                    {{ __('messages.CONTRACT_SPECS') }}
                                </span>
                            @endif
                        </div>

                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-4">
    <div class="row">
        <p class="col-10 mx-auto text-center">{!! __('dynamic-leverage.DYNAMIC_RISK_MANAGEMENT') !!}</p>
    </div>
</section>

<section class="my-5 leverage-table">
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-12 text-center pb-4 mx-auto">
                <table cellpadding="10" cellspacing="0">
                    <tr>
                        <th class="left-corner">{!! __('dynamic-leverage.ASSET_CLASS') !!}</th>
                        <th class="right-corner">{!! __('dynamic-leverage.HMR_LEVERAGE') !!}</th>
                    </tr>
                    <tr>
                        <td>{!! __('dynamic-leverage.FX_MAJORS') !!}</td>
                        <td>1:200</td>
                    </tr>
                    <tr>
                        <td>{!! __('dynamic-leverage.GOLD') !!}</td>
                        <td>1:200</td>
                    </tr>
                    <tr>
                        <td>{!! __('dynamic-leverage.FX_MINORS') !!}</td>
                        <td>1:100</td>
                    </tr>
                    <tr>
                        <td>{!! __('dynamic-leverage.MAJOR_INDICES') !!}</td>
                        <td>1:100</td>
                    </tr>
                    <tr>
                        <td>{!! __('dynamic-leverage.CRUDE_OIL') !!}</td>
                        <td>1:50</td>
                    </tr>

                    <tr>
                        <td>{!! __('dynamic-leverage.FX_EXOTICS') !!}</td>
                        <td>1:50</td>
                    </tr>
                    <tr>
                        <td>{!! __('dynamic-leverage.SILVER') !!}</td>
                        <td>1:50</td>
                    </tr>
                    <tr>
                        <td>{!! __('dynamic-leverage.BTC_ETH') !!}</td>
                        <td>1:10</td>
                    </tr>
                    <tr>
                        <td>{!! __('dynamic-leverage.MINOR_INDICES') !!}</td>
                        <td>1:10</td>
                    </tr>
                    <tr>
                        <td>{!! __('dynamic-leverage.PLATINUM_AND_PALLADIUM') !!}</td>
                        <td>1:10</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</section>
@endsection
