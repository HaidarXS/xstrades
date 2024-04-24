@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('seo.TITLE_ECONOMIC_CALENDAR') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_ECONOMIC_CALENDAR') }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE_ECONOMIC_CALENDAR') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_ECONOMIC_CALENDAR') }}">
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_ECONOMIC_CALENDAR') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_ECONOMIC_CALENDAR') }}">
@endsection
@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('economic-calendar.ECONoMIC_CALENDAR'),
        'bannerDescription' => __('economic-calendar.PAGE_DESC'),
        'bannerImage' => asset('/img/academy-banners/calendar.png'),
        'mobileBanner' => asset('/img/academy-banners/economic-calendar-mobile.png'),
    ])
    <div class="container py-5">
        <div class="row justify-content-between pb-3">
            <div class="col-lg-12">
                <h1 class="text-secondary fw-700 text-center mb-5 ">
                    {{ __('economic-calendar.ECONoMIC_CALENDAR') }}</h1>
                <p class="text-lg text-center mt-5">{!! __('economic-calendar.PAGE_DESC') !!}</p>
            </div>
        </div>
    </div>


    <div class="container py-5">
        <div id="economicCalendarWidget"></div>
        <script async type="text/javascript" data-type="calendar-widget" src="https://www.tradays.com/c/js/widgets/calendar/widget.js?v=13">
            {"width":"100%","height":"500px","mode":"1","lang":"{{ App::getLocale() === 'jp' ? 'ja' : (App::getLocale() === 'zh-Hant' ? 'zh' : (in_array(App::getLocale(), ['en', 'ru', 'zh', 'es', 'fr', 'it', 'de', 'ar', 'ja', 'pt', 'tr', 'ko']) ? App::getLocale() : 'en')) }}"}
        </script>
    </div>
@endsection
