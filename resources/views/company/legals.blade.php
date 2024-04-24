@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('seo.TITLE_LEGAL') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_LEGAL') }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE_LEGAL') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_LEGAL') }}">
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_LEGAL') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_LEGAL') }}">
@endsection
@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('messages.LEGAL'),
        'bannerDescription' => __('aboutus.LEGAL_PAGE_SUBTITLE'),
        'bannerImage' => asset('/img/company-section/legal.svg'),
        'mobileBanner' => asset('/img/company-section/legal-mobile.webp'),
        ])
    @php
        $legals = [
            [
                'title' => __('aboutus.PRIVACY_POLICY'),
                'url' => asset('/docs/XS_EN-31012023-PRIVACY-POLICY-1.pdf'),
            ],

            [
                'title' => __('aboutus.CLIENT_AGREEMENT'),
                'url' => asset('/docs/XS_EN-31012023-CLIENT-SERVICES-AGREEMENT-1.pdf'),
            ],

            [
                'title' => __('aboutus.DISCLOSURE_STATEMENT'),
                'url' => asset('/docs/XS_EN-31012023-RISK-DISCLOSURE-1.pdf'),
            ],

            [
                'title' => __('aboutus.ORDERS_EXECUTION_POLICY'),
                'url' => asset('/docs/XS_EN-31012023-ORDER-EXECUTION-POLICY-1.pdf'),
            ],

            [
                'title' => __('aboutus.COMPLAINTS_HANDLING_POLICY'),
                'url' => asset('/docs/XS_EN-31012023_COMPLAINT-POLICY.pdf'),
            ],

            [
                'title' => __('aboutus.CONFLICT_OF_INTEREST_POLICY'),
                'url' => asset('/docs/XS_EN-31012023-CONFLICTS-OF-INTEREST-POLICY-1.pdf'),
            ],

            [
                'title' => __('aboutus.AML_POLICY'),
                'url' => asset('/docs/XS_EN-31012023-AML-POLICY-1.pdf'),
            ],
        ];
    @endphp

    <section class="text-md-start text-center">
        <div class="row pb-2 pt-4">
            <h1 class="text-center text-navy fw-700">{!! __('messages.LEGAL') !!}</h1>
        </div>

        <div class="container">

            @foreach ($legals as $legal)
                <div class="row py-5">
                    <div class="col-sm-6 col-10 py-3 m-auto">
                        <div class="row border-radius-50 py-5 grey-bg flex-column-sm">
                            <h3 class="text-navy text-capitalize text-center">{{ $legal['title'] }}</h3>
                            <div class="d-flex justify-content-center mt-5">
                                <div class="col-lg-7 text-center col-auto">
                                    <a class="btn button-style py-3 px-5 fw-700" href="{{ $legal['url'] }}" target="_blank">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <span class="me-3"><img src="{{ asset('/svgs/download-ic.svg') }}"
                                                    alt="{{ $legal['title'] }}"
                                                    style="width: 30px; object-fit: contain;"></span>
                                            <span>
                                                {{ __('aboutus.DOWNLOAD_PDF') }}
                                            </span>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


            <hr>
            @include('sections.easy')
        </div>


    </section>
@endsection
