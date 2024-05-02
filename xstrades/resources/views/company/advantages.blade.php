@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('seo.TITLE_ADVANTAGES') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_ADVANTAGES') }}">


    <!-- Twitter Meta Tags -->
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE_ADVANTAGES') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_ADVANTAGES') }}">
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_ADVANTAGES') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_ADVANTAGES') }}">
@endsection
@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('messages.ADVANTAGES'),
        'bannerDescription' => __('aboutus.ADVANTAGES_PAGE_SUBTITLE'),
        'bannerImage' => asset('/img/company-section/advantages.svg'),
        'mobileBanner' => asset('/img/company-section/advantages-mobile.webp'),
    ])

    <section class="text-md-start text-center">
        <section class="py-5">
            @include('sections.why-trade-with-XS', [
                'title' => __('aboutus.WHY_TRADE_WITH_XS'),
            ])
        </section>
    </section>
    <section class=" grey-bg ">
            @include('sections.join-the-global-market-leader', [
                'title' => __('advantages.JOIN_THE_GLOBAL_MARKET_LEADER'),
            ])
    </section>

    <section class="container">
        @include('sections.easy')
    </section>
@endsection
