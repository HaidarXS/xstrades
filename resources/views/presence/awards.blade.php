@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('seo.TITLE_AWARDS') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_AWARDS') }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE_AWARDS') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_AWARDS') }}">
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_AWARDS') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_AWARDS') }}">
@endsection
@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('messages.AWARDS'),
        'bannerDescription' => __('aboutus.AWARDS_PAGE_SUBTITLE'),
        'bannerImage' => asset('/img/company-section/award.svg'),
        'mobileBanner' => asset('/img/company-section/award-mobile.webp'),
    ])
    {{-- <section class="pt-5">

        <div class="row justify-content-center">
            <div class="col-12 mb-4">
                <h1 class="text-navy text-center text-uppercase col-4 m-auto">{{ __('presence.AWARDS') }}</h1>
            </div>
            <img src="{{ asset('/img/awards-banner.webp') }}" class="col-10 py-5 m-auto" alt="{{ __('presence.AWARDS') }}">

        </div>

    </section> --}}

    <section class="pt-5">
        <h2 class="text-navy text-center text-uppercase col-4 m-auto">{{ __('presence.COMPANY_AWARDS') }}</h2>

        @foreach ($companyAwards as $award)
            <div class="row py-3">
                <div class="col-10 m-auto py-5">
                    <div class="row border-radius-50 p-5 grey-bg flex-column-sm">
                        <div class="col-lg-2  mx-auto mx-lg-0 d-flex justify-content-center">
                            <img src="{{ asset($award->img) }}" class="awardsImg" alt="{{ $award->title }}">

                        </div>

                        <div class="col-lg-10 col-12 mt-lg-0 mt-4">
                            <div class="d-flex flex-column justify-content-between align-items-center flex-lg-row">
                                <h5 class=" text-primary mb-4 text-uppercase text-center text-lg-start">{{ $award->title }}
                                </h5>
                                <p class="text-dark-grey text-center text-lg-start">{!! $award->country !!} <br />
                                    {!! $award->date !!}</p>

                            </div>

                            <div class="row mt-3 justify-content-center justify-content-lg-start">
                                <h5 class="col-lg-6 text-dark-grey text-center text-lg-start" style="width: max-content;">
                                    {!! $award->sponsor !!}</h5>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        @endforeach


        {{-- <div class="row py-3">
            <div class="col-10 m-auto py-5">
                <div class="row border-radius-50 p-5 grey-bg flex-column-sm">
                    <div class="col-lg-2 col-8 d-flex justify-content-center">
                        <img src="{{ asset('/img/best-b2b-broker.png') }}" class="awardsImg" alt="company awards">

                    </div>

                    <div class="col-lg-10 col-12 mt-lg-0 mt-4">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <h5 class=" text-primary mb-4 text-uppercase">{{ __('presence.BEST_B2B_BROKER') }}</h5>
                            <h5 class="text-dark-grey">{!! __('presence.DUBAI_UAE_MAY_2023') !!}</h5>
                        </div>

                        <div class="row mt-3">
                            <h5 class="col-6 text-dark-grey">{!! __('presence.SMART_VISION') !!}</h5>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <div class="row py-3">
            <div class="col-10 m-auto py-5">
                <div class="row border-radius-50 p-5 grey-bg flex-column-sm">
                    <div class="col-lg-2 col-8 d-flex justify-content-center">
                        <img src="{{ asset('/img/best-b2b-broker.png') }}" class="awardsImg" alt="company awards">

                    </div>

                    <div class="col-lg-10 col-12 mt-lg-0 mt-4">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <h5 class=" text-primary mb-4 text-uppercase">{{ __('presence.BEST_MULTI_ASSET_BROKER') }}</h5>
                            <h5 class="text-dark-grey">{!! __('presence.DUBAI_UAE_MAY_2023') !!}</h5>
                        </div>

                        <div class="row mt-3">
                            <h5 class="col-6 text-dark-grey">{!! __('presence.SMART_VISION') !!}</h5>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-10 m-auto py-5">
                <div class="row border-radius-50 p-5 grey-bg flex-column-sm">
                    <div class="col-lg-2 col-8 d-flex justify-content-center">
                        <img src="{{ asset('/img/most-valued-brand.png') }}" class="awardsImg" alt="company awards">

                    </div>

                    <div class="col-lg-10 col-12 mt-lg-0 mt-4">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <h5 class=" text-primary mb-4 text-uppercase">{{ __('presence.THE_MOST_INNOVATIVE_TEAM') }}
                            </h5>
                            <h5 class="text-dark-grey">{!! __('presence.MALAYSIA_MAY_2023') !!}</h5>
                        </div>

                        <div class="row mt-3">
                            <h5 class="col-6 text-dark-grey">{!! __('presence.BY_TRADING_LIVE') !!}</h5>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-10 m-auto py-5">
                <div class="row border-radius-50 p-5 grey-bg flex-column-sm">
                    <div class="col-lg-2 col-8 d-flex justify-content-center">
                        <img src="{{ asset('/img/most-valued-brand.png') }}" class="awardsImg" alt="company awards">

                    </div>

                    <div class="col-lg-10 col-12 mt-lg-0 mt-4">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <h5 class=" text-primary mb-4 text-uppercase">{{ __('presence.THE_MOST_VALUED_BRAND') }}</h5>
                            <h5 class="text-dark-grey">{!! __('presence.MALAYSIA_MAY_2023') !!}</h5>
                        </div>

                        <div class="row mt-3">
                            <h5 class="col-6 text-dark-grey">{!! __('presence.BY_TRADING_LIVE') !!}</h5>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-10 m-auto py-5">
                <div class="row border-radius-50 p-5 grey-bg flex-column-sm">
                    <div class="col-lg-2 col-8 d-flex justify-content-center">
                        <img src="{{ asset('/img/best-institutional-broker.png') }}" class="awardsImg img-fluid"
                            alt="company awards">

                    </div>

                    <div class="col-lg-10 col-12 mt-lg-0 mt-4">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <h5 class=" text-primary mb-4 text-uppercase">{{ __('presence.BEST_INSTITUTIONAL_BROKER') }}
                            </h5>
                            <h5 class="text-dark-grey">{!! __('presence.BAHRAIN_FEBRUARY_2023') !!}</h5>
                        </div>

                        <div class="row mt-3">
                            <h5 class="col-6 text-dark-grey">{!! __('presence.BY_SMART_VISION_FINTECH') !!}</h5>
                        </div>
                    </div>


                </div>
            </div>
        </div> --}}
        <!-- <div class="row">
                                                                                                             <i class="fa-solid fa-chevron-down text-center text-navy fs-30"></i>
                                                                                                             </div> -->
    </section>

    <section class="pb-5">
        <h2 class="text-navy text-center text-uppercase col-6 m-auto">{{ __('presence.PERSONNAL_AWARDS') }}</h2>
        @foreach ($personalAwards as $award)
            <div class="row py-3">
                <div class="col-10 m-auto py-5">
                    <div class="row border-radius-50 p-5 grey-bg flex-column-sm">
                        <div class="col-lg-2 col-8 d-flex justify-content-center mx-auto mx-lg-0">
                            <img src="{{ asset($award->img) }}" class="awardsImg img-fluid object-contain"
                                alt="{{ $award->title }}">
                        </div>
                        <div class="col-lg-10 col-12 mt-lg-0 mt-4">
                            <div class="row d-flex flex-column flex-lg-row justify-content-between align-items-center">
                                <div class="col-lg-8">
                                    <h5 class=" text-primary mb-4 text-uppercase text-center text-lg-start">
                                        {!! $award->title !!}</h5>
                                    <h4 class="text-dark-grey text-uppercase  text-center text-lg-start">
                                        {{ $award->person }}</h4>

                                </div>
                                <div class="col-lg-4 text-center text-lg-start">
                                    <p class="text-dark-grey m-0 px-3">{{ $award->country }} <br /> {{ $award->date }}
                                    </p>

                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-8 text-center text-lg-start">
                                    <h5 class="text-dark-grey">{!! $award->sponsor !!}</h5>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

    <section class="py-5">
        <hr>
        @include('sections.easy')

    </section>
@endsection
