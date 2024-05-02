@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('seo.TITLE_CAREERS') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_CAREERS') }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE_CAREERS') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_CAREERS') }}">
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_CAREERS') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_CAREERS') }}">
@endsection
@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('messages.CAREERS'),
        'bannerDescription' => __('aboutus.CAREER_PAGE_SUBTITLE'),
        'bannerImage' => asset('/img/company-section/career.svg'),
        'mobileBanner' => asset('/img/company-section/career-mobile.webp'),
    ])

    <section>
        <div class="container">
            <div class="row py-5 ">
                <div class="col-lg-7 col-sm-12">
                    <div class="row">
                        <h1 class="col-12 text-center text-md-start text-lg-start text-navy my-3 ps-0">
                            {{ __('aboutus.CAREERS_TITTLE') }}</h1>
                        <p class="col-sm-10 text-center text-md-start text-lg-start col-12 mt-3 px-5 px-md-0">
                            {!! __('aboutus.CAREERS_DISCRIPTION') !!} </p>
                    </div>
                        <div class="pt-3 d-flex justify-content-center justify-content-lg-start on-desktop">
                            <a href="https://XS Trades.bamboohr.com/careers/74" target="_blank" class="btn join-us-button py-3 px-5 fw-700">
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="me-3"><img class="btn-icon" src="{{ asset('/img/careers/arrow.svg') }}"
                                            alt=" {{ __('careers.APPLY_NOW') }}"></span>
                                    <span class="text-capitalize  text-secondary">
                                        {{ __('careers.APPLY_NOW') }}
                                    </span>
                                </div>

                            </a>
                        </div>
                </div>

                <div class="col-sm-12 col-lg-5 text-center pt-5 pt-md-0 px-5 px-md-0">
                    <img src="{{ asset('/img/careers-header.webp') }}" alt="{{ __('aboutus.CAREERS_TITTLE') }}"
                        class="w-100">
                </div>
                <div class="on-mobile">
                    <div class="pt-3 d-flex justify-content-center pt-5">
                        <a href="https://XS Trades.bamboohr.com/careers/74" target="_blank" class="btn join-us-button py-3 px-5 fw-700">
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="me-3"><img class="btn-icon" src="{{ asset('/img/careers/arrow.svg') }}"
                                        alt=" {{ __('careers.APPLY_NOW') }}"></span>
                                <span class="text-capitalize  text-secondary">
                                    {{ __('careers.APPLY_NOW') }}
                                </span>
                            </div>

                        </a>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <section>
        @include('sections.why-work-at-xs', [
            'title' => __('aboutus.WHY_WORK_AT_XS'),
        ])
    </section>
    <div class="row justify-content-center mb-3">
        <div class="pt-4 d-flex justify-content-center">
            <a href="https://XS Trades.bamboohr.com/careers" target="_blank"
                class="btn join-us-button py-3 px-5 fw-700">
                <div class="d-flex align-items-center justify-content-center">
                    <span class="me-3"><img class="btn-icon" src="{{ asset('/img/careers/briefcase.svg') }}"
                            alt=" {{ __('careers.CURRENT_JOB_OPENINGS') }}"
                            style="width: 30px; object-fit: contain; aspect-ratio:1/1;"></span>
                    <span class=" text-secondary">
                        {{ __('careers.CURRENT_JOB_OPENINGS') }}
                    </span>
                </div>

            </a>
        </div>
    </div>
@endsection
