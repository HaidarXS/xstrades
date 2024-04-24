@extends('layouts.app')
@if ($accountType == 'cent-account')
    @section('meta_tags')
        @parent
        <title>{{ __('seo.TITLE_ACC_TYPES_CENT_ACCOUNT') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_ACC_TYPES_CENT_ACCOUNT') }}">
    @endsection
@elseif ($accountType == 'standard-account')
    @section('meta_tags')
        @parent
        <title>{{ __('seo.TITLE_ACC_TYPES_STANDARD_ACCOUNT') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_ACC_TYPES_STANDARD_ACCOUNT') }}">
    @endsection
@elseif ($accountType == 'micro-account')
    @section('meta_tags')
        @parent
        <title>{{ __('seo.TITLE_ACC_TYPES_MICRO_ACCOUNT') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_ACC_TYPES_MICRO_ACCOUNT') }}">
    @endsection
@elseif ($accountType == 'elite-account')
    @section('meta_tags')
        @parent
        <title>{{ __('seo.TITLE_ACC_TYPES_ELITE_ACCOUNT') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_ACC_TYPES_ELITE_ACCOUNT') }}">
    @endsection
@elseif ($accountType == 'pro-account')
    @section('meta_tags')
        @parent
        <title>{{ __('seo.TITLE_ACC_TYPES_PRO_ACCOUNT') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_ACC_TYPES_PRO_ACCOUNT') }}">
    @endsection
@elseif ($accountType == 'vip-account')
    @section('meta_tags')
        @parent
        <title>{{ __('seo.TITLE_ACC_TYPES_VIP_ACCOUNT') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_ACC_TYPES_VIP_ACCOUNT') }}">
    @endsection
@elseif ($accountType == 'extra-account')
    @section('meta_tags')
        @parent
        <title>{{ __('seo.TITLE_ACC_TYPES_EXTRA_ACCOUNT') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_ACC_TYPES_EXTRA_ACCOUNT') }}">
    @endsection
    @elseif ($accountType == 'classic-account')
    @section('meta_tags')
        @parent
        <title>{{ __('seo.TITLE_ACC_TYPES_CLASSIC_ACCOUNT') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_ACC_TYPES_CLASSIC_ACCOUNT') }}">
    @endsection
    @else
    @section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_ACCOUNT_TYPES') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_ACCOUNT_TYPES') }}">
@endsection
@endif

@section('content')
    <style>
        #flush-headingOne {
            padding: 0px !important;
        }

        .account-table-image {
            max-width: 100px;
        }

        @media (max-width: 767px) {
            #account-table-title {
                font-size: 15px;
                padding: 0px;
            }

            .narrow-padding {
                padding: 5px;
            }

            .account-table-image {
                max-width: 40px !important;
            }

            .th-image {
                width: 86px;
            }

            #account-content .py-4 {
                font-size: 13px;
            }

            #account-content .py-4:nth-of-type(2),
            #account-content .py-4:nth-of-type(3) {
                width: 90px;
            }

            .border-bottom-none {
                padding: 0px;
            }
        }

        .page-banner {
            height: 320px;
            background: rgb(1, 51, 127, 1);
            background: linear-gradient(90deg, rgba(1, 51, 127, 1) 0%, rgba(48, 175, 133, 1) 100%) !important;
        }

        [dir="rtl"] .page-banner {
            height: 320px;
            background: rgb(1, 51, 127, 1);
            background: linear-gradient(-90deg, rgba(1, 51, 127, 1) 0%, rgba(48, 175, 133, 1) 100%) !important;
        }
    </style>

    @include('layouts.banner', [
        'bannerTitle' => __($accountType . '.ACCOUNT_TYPE'),
        'bannerDescription' => __($accountType . '.TITLE'),
        'bannerImage' => asset('/img/account-types/' . $accountType . '/new-ic/banner-desktop.png'),
        'mobileBanner' => asset('/img/account-types/' . $accountType . '/new-ic/banner.png'),
    ])
    @php
        $path = public_path('/img/account-types/' . $accountType . '/new-icons');
        $icons = [''];
        if (File::exists($path)) {
            $icons = File::allFiles($path);
        }
    @endphp
    <section class="mb-5">
        <div class="container mt-3">

            <div class="row justify-content-center my-5">
                <div class="col-md-10 text-center">
                    <p>{!! __($accountType . '.DESCRIPTION') !!}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="p-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="mb-4 col-md-10 col-sm-10 text-center">
                    <h2 class="text-secondary fw-700 text-uppercase">{{ __($accountType . '.BENIFITS_TITLE') }}</h2>
                </div>
                @for ($i = 0; $i < count($icons); $i++)
                    <div class="col-md-4 col-sm-10 my-5">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-8 col-xl-7">
                                <div class="d-flex flex-column align-items-center">

                                    <span class="mb-3"><img class="img-why"
                                            src="{{ asset('/img/account-types/' . $accountType . '/new-icons/' . $icons[$i]->getRelativePathName()) }}"
                                            alt="{{ __($accountType . '.ACCOUNT_TYPE') }}">
                                    </span>

                                    <p class="mb-0 text-secondary text-center fw-700">
                                        {{ __($accountType . '.BENIFIT_' . ($i + 1)) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor

            </div>
            <div class="row justify-content-center mt-3">
                <div class="pt-4 d-flex justify-content-center">
                    <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1" target="_blank"
                        class="btn join-us-button py-3 px-5 fw-700">
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="me-3"><img class="btn-icon"
                                    src="{{ asset('/homepage-svgs-ic/join-xs-ic.svg') }}"
                                    alt="{{ __('homepage.JOIN_XS_NOW') }}"
                                    style="width: 30px; object-fit: contain; aspect-ratio:1/1;"></span>
                            <span>
                                {{ __('homepage.JOIN_XS') }}
                            </span>
                        </div>

                    </a>
                </div>
            </div>
        </div>
    </section>

    @if (count($tables) > 0)
        <section class="mb-5">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    @foreach ($tables as $i => $records)
                        @php
                            $keys = collect($records[0])->keys();
                        @endphp
                        <div class="col-sm-12 mb-5">
                            <div class="accordion accordion-flush">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed narrow-padding px-3" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#table_{{ $i + 1 }}"
                                            aria-expanded="false" aria-controls="table_{{ $i + 1 }}">
                                            <table class="table mb-0 border-bottom-none">
                                                <thead>
                                                    <tr class="">
                                                        @foreach ($keys as $key)
                                                            @if ($loop->first)
                                                                <th class="border-bottom-none" scope="col">
                                                                    <h2 class="text-secondary fw-700 mb-0 text-uppercase"
                                                                        id="account-table-title">{{ $key }}
                                                                    </h2>
                                                                </th>
                                                            @else
                                                                <th class="border-bottom-none text-center th-image"
                                                                    scope="col">

                                                                    <img class="account-table-image"
                                                                        src="{{ asset('/img/' . $key . '.png') }}"
                                                                        alt="">
                                                                </th>
                                                            @endif
                                                        @endforeach
                                                    </tr>
                                                </thead>
                                            </table>
                                        </button>
                                    </h2>
                                    <div id="table_{{ $i + 1 }}" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#table_{{ $i + 1 }}">
                                        <div class="">
                                            <table class="table table-bordered mb-0" id="account-content">
                                                <tbody>
                                                    @foreach ($records as $record)
                                                        <tr>
                                                            @foreach ($keys as $key)
                                                                <td class="py-4 @if (!$loop->first) text-center @endif  @if (
                                                                    ($loop->parent->last || $loop->parent->index === $loop->parent->count - 2) &&
                                                                        !$loop->first &&
                                                                        App::getLocale() != 'vi') break-line @endif"
                                                                    scope="row">
                                                                    @if (gettype($record[$key]) == 'boolean')
                                                                        <span
                                                                            class="{{ $record[$key] ? 'text-primary' : 'text-danger' }} fw-700 fs-22">{{ $record[$key] == true ? '✓' : 'X' }}</span>
                                                                    @elseif($record[$key] == 'X')
                                                                        <span
                                                                            class="text-danger fw-700 fs-22">{{ $record[$key] }}</span>
                                                                    @else
                                                                        {!! $record[$key] !!}
                                                                    @endif
                                                            @endforeach
                                                        </tr>
                                                    @endforeach


                                                </tbody>
                                            </table>
                                            @if (session()->get('locale') == 'jp')
                                                <p>※ 現在、日本国内においてスワップフリーの提供は行っておりません。</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- <script>
        $(document).ready(function () {
            // Check the screen width on page load and resize
            function adjustImageWidth() {
                if ($(window).width() < 768) {
                    // Set the width to 50px for mobile
                    $(".account-table-image").css("width", "50px");
                } else {
                    // Set the width to 100px for desktop
                    $(".account-table-image").css("width", "100px");
                }
            }

            // Call the function on page load
            adjustImageWidth();

            // Call the function on window resize
            $(window).on("resize", function () {
                adjustImageWidth();
            });
        }); --}}
    </script>

    {{-- <section class="mb-5">
        <div class="container">
            <div class="row gx-5 justify-content-center">
                <div class="col-md-6 col-lg-4 col-sm-8 col-10 text-center mb-5">
                    <a class="text-decoration-none" href="{{ route('account_types', ['lang' => App::getLocale()]) }}">
                        <div class="p-3">
                            <div class="bg-gray border-radius-50 p-5 ">
                                <img style="max-height:100px" src="{{ asset('/img/account-types/account_types.svg') }}"
                                    alt="">
                                <p class="fw-700 mt-4 text-secondary">{{ __('messages.ACCOUNT_TYPES') }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-8 col-10 text-center mb-5">
                    <a class="text-decoration-none" href="{{ route('trading_conditions', ['lang' => App::getLocale()]) }}">
                        <div class="p-3">
                            <div class="bg-gray border-radius-50 p-5 ">
                                <img style="max-height:100px" src="{{ asset('/img/account-types/trading_conditions.svg') }}"
                                    alt="">
                                <p class="fw-700 mt-4 text-secondary">{{ __('messages.TRADING_CONDITIONS') }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-8 col-10 text-center mb-5">
                    <a class="text-decoration-none" href="{{ route('contract_specs', ['lang' => App::getLocale()]) }}">
                        <div class="p-3">
                            <div class="bg-gray border-radius-50 p-5 ">
                                <img style="max-height:100px" src="{{ asset('/img/account-types/contract_specs.svg') }}"
                                    alt="">
                                <p class="fw-700 mt-4 text-secondary">{{ __('messages.CONTRACT_SPECS') }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
