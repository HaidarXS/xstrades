@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('seo.TITLE_REGULATIONS') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_REGULATIONS') }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE_REGULATIONS') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_REGULATIONS') }}">
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_REGULATIONS') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_REGULATIONS') }}">
@endsection
@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('regulations.REGULATIONS'),
        'bannerDescription' => __('regulations.PAGE_BANNER_SUBTITLE'),
        'bannerImage' => asset('/img/company-section/regulation.svg'),
        'mobileBanner' => asset('/img/company-section/regulation-mobile.webp'),
    ])
    <div class="container py-5">
        <div class="row justify-content-between pb-3">
            <div class="col-lg-12">
                <h1 class="text-secondary fw-700 text-center mb-5 text-uppercase">{{ __('regulations.REGULATIONS') }}</h1>
                <p class="text-lg text-center mt-5">{!! __('regulations.REGULATIONS_DESCRIPTION') !!}</p>
            </div>
            <!-- <div class="col-lg-6">
                    <img src="{{ asset('/img/regulations.png') }}" alt="{{ __('regulations.GROUP_ENTITIES_LICENCES') }}" class="img-fluid">
                </div> -->
        </div>
    </div>


    <div class="row mb-3">
        <div class="col-12">
            <div class="container py-5">
                <h2 class="text-secondary fw-700 text-center text-lg-start">
                    {{ __('regulations.GROUP_ENTITIES_LICENCES') }}
                </h2>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-12 grey-bg py-5">
            <div class="container py-2">
                <div class="row border-radius-50 flex-column-sm mx-2">
                    <div class="col-lg-12 col-12 mt-lg-0 mt-4 text-center text-lg-start">
                        <h3 class="text-primary">{{ __('regulations.XSLTD') }}</h3>
                        <p class="mt-4">{!! __('regulations.XSLTD_DESCRIPTION') !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-12">
            <div class="container py-2 py-5">
                <div class="row border-radius-50 flex-column-sm mx-2">
                    <div class="col-lg-12 col-12 mt-lg-0 mt-4 text-center text-lg-start">
                        <h3 class="text-primary">{{ __('regulations.XS_PRIME_LTD') }}</h3>
                        <p class="mt-4">{!! __('regulations.XS_PRIME_LTD_DESCRIPTION') !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-12 grey-bg py-5">
            <div class="container py-2">
                <div class="row border-radius-50 flex-column-sm mx-2">
                    <div class="col-lg-12 col-12 mt-lg-0 mt-4 text-center text-lg-start">
                        <h3 class="text-primary">{{ __('regulations.XS_MARKETS_LTD') }}</h3>
                        <p class="mt-4">{!! __('regulations.XS_MARKETS_LTD_DESCRIPTION') !!}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="container py-2 py-5">
                    <div class="row border-radius-50 flex-column-sm mx-2">
                        <div class="col-lg-12 col-12 mt-lg-0 mt-4 text-center text-lg-start">
                            <h3 class="text-primary">{{ __('regulations.XS_ZA_PTY') }}</h3>
                            <p class="mt-4">{!! __('regulations.XS_ZA_PTY_DESCRIPTION') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 py-5">
                <div class="container py-2">
                    <div class="row border-radius-50 flex-column-sm mx-2">
                        <div class="col-lg-12 col-12 mt-lg-0 mt-4 text-center text-lg-start">
                            <p class="">{!! __('regulations.DISCLAIMER') !!}</p>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div class="col-12 py-5">
                <div class="row border-radius-50 p-5 grey-bg flex-column-sm mx-2">
                    <div class="col-lg-4 col-8 m-auto d-flex justify-content-center">
                        <img src="{{ asset('/svgs/xsfintechltd.svg') }}" class="contact-svg"
                            alt="{{ __('regulations.XS_FINTECH_LTD') }}">

                    </div>

                    <div class="col-lg-8 col-12 mt-lg-0 mt-4 text-center text-lg-start">
                        <h3 class="text-primary">{{ __('regulations.XS_FINTECH_LTD') }}</h3>
                        <p class="mt-4">{!! __('regulations.XS_FINTECH_LTD_DESCRIPTION') !!}</p>
                    </div>
                </div>
            </div> --}}



            <div class="col-12 mx-auto">
                <hr>
            </div>

            @include('sections.easy')
        @endsection
