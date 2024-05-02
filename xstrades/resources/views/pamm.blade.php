@extends('layouts.app')
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_PAMM') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_PAMM') }}">
@endsection
@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('pamm.PAMM_SOLUTIONS'),
        'bannerDescription' => __('pamm.PAGE_DESC'),
        'bannerImage' => asset('/img/pamm/pamm-desktop.webp'),
        'mobileBanner' => asset('/img/pamm/pamm-mobile.png'),
    ])
    <section class="grey-bg py-5">
        <div class="row justify-content-center mx-auto container">
            <div class="">
                <h2 class="text-navy text-center m-auto pb-3 ">
                    {{ __('pamm.PAMM_SOLUTIONS_WITH_XS') }}
                </h2>

                <p class="text-center">
                    {!! __('pamm.TEXT1') !!}
                </p>

                <p class="text-center">
                    {{ __('pamm.PAMM_SOLUTIONS_XS') }}
                </p>

                @include('layouts.button', [
                    'text' => __('homepage.JOIN_XS'),
                    'link' => 'https://my.XSTrades.com/' . getCorrectLangSlug() . 'register/?sl=1',
                    'newTab' => true,
                    'icon' => '/homepage-svgs-ic/join-xs-ic.svg',
                ])
    </section>
    <section>
        <div class="py-5 col-md-8 container">
            <h2 class="text-navy text-center m-auto pb-5">
                {{ __('pamm.WHAT_IS_PAMM') }}
            </h2>

            <p class="text-center">
                {{ __('pamm.TEXT2') }}
            </p>

            <p class="text-center">
                {{ __('pamm.TEXT3') }}
            </p>

        </div>
    </section>
    <section class="grey-bg">
        <div class="py-5 col-md-8 mx-auto container">

            <h2 class="text-navy text-center m-auto pb-5 ">
                {{ __('pamm.HOW_PAMM_WORK') }}
            </h2>

            <p class="text-center">
                {!! __('pamm.TEXT4') !!}
            </p>

            <p class="text-center">
                {{ __('pamm.TEXT5') }}
            </p>

            <p class="text-center mb-5">
                {{ __('pamm.TEXT6') }}
            </p>
            {{-- @include('layouts.PlainButton', [
                'text' => __('pamm.PAMM_USER_GUIDE'),
                'link' => route('xs-guide'),
                'newTab' => false,
            ]) --}}

        </div>
    </section>
    <section>
        <div class="py-5 container">
            <h2 class="text-navy text-center m-auto pb-5">
                {{ __('pamm.WHY_USE_XS_PAMM') }}
            </h2>
            <div>
                <div class="container mt-4 ">
                    <div class="row">
                        <div class="col-md-4 text-center ">
                            <img width="75" height="75" src="{{ asset('img/pamm/1.webp') }}" alt="Image 1">
                            <p class="mt-2 text-navy">{{ __('pamm.TB_1_1') }}</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img width="75" height="75" src="{{ asset('img/pamm/2.webp') }}" alt="Image 2">
                            <p class="mt-2 text-navy">{{ __('pamm.TB_1_2') }}</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img width="75" height="75" src="{{ asset('img/pamm/3.webp') }}" alt="Image 3">
                            <p class="mt-2 text-navy">{{ __('pamm.TB_1_3') }}</p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-4 text-center">
                            <img width="75" height="75" src="{{ asset('img/pamm/4.webp') }}" alt="Image 4">
                            <p class="mt-2 text-navy">{{ __('pamm.TB_1_4') }}</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img width="75" height="75" src="{{ asset('img/pamm/5.webp') }}" alt="Image 5">
                            <p class="mt-2 text-navy">{{ __('pamm.TB_1_5') }}</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img width="75" height="75" src="{{ asset('img/pamm/6.webp') }}" alt="Image 6">
                            <p class="mt-2 text-navy">{{ __('pamm.TB_1_6') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="grey-bg">
        @include('sections.why-choose-copy', [
            'title' => __('pamm.WHY_CHOOSE_XS'),
        ])
    </section>
    <section>
        <div class="row text-center m-auto d-felx justify-content-evenly py-5 container">
            <h1 class="text-secondary mb-5">{{ __('pamm.CONNECT') }}</h1>
            <p class="text-muted my-3 col-12 m-auto br-5">{{ __('pamm.TEXT7') }}</p>
            <p class="text-muted my-3 col-12 m-auto">{!! __('pamm.TEXT8') !!}</p>
        </div>
        <div class="row text-center grey-bg py-4 ">
            <div class="col-md-10 mx-auto">
                <p class="text-muted my-3 col-12 m-auto br-5">{!! __('pamm.DISCLAIMER') !!}</p>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
