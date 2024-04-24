<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2023.1.117/styles/kendo.default-ocean-blue.min.css">
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2023.1.117/styles/kendo.default-main.min.css">
<script src="https://kendo.cdn.telerik.com/2023.1.117/mjs/kendo.all.js" type="module"></script>
<script src="https://kendo.cdn.telerik.com/2023.1.117/js/jquery.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2023.1.117/js/jszip.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2023.1.117/js/kendo.all.min.js"></script>
@extends('layouts.app')
@section('opengraph')
    @if ($tab == 'shares')
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ __('seo.TITLE_SHARES') }}">
        <meta property="og:description" content="{{ __('seo.DESCRIPTION_SHARES') }}">


        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="XSTrades.com">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ __('seo.TITLE_SHARES') }}">
        <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_SHARES') }}">
    @elseif ($tab == 'indices')
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ __('seo.TITLE_INDICES') }}">
        <meta property="og:description" content="{{ __('seo.DESCRIPTION_INDICES') }}">


        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="XSTrades.com">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ __('seo.TITLE_INDICES') }}">
        <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_INDICES') }}">
    @elseif ($tab == 'metals')
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ __('seo.TITLE_METALS') }}">
        <meta property="og:description" content="{{ __('seo.DESCRIPTION_METALS') }}">


        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="XSTrades.com">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ __('seo.TITLE_METALS') }}">
        <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_METALS') }}">
    @elseif ($tab == 'energies')
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ __('seo.TITLE_ENERGIES') }}">
        <meta property="og:description" content="{{ __('seo.DESCRIPTION_ENERGIES') }}">


        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="XSTrades.com">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ __('seo.TITLE_ENERGIES') }}">
        <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_ENERGIES') }}">
    @elseif ($tab == 'cryptos')
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ __('seo.TITLE_CRYPTOS') }}">
        <meta property="og:description" content="{{ __('seo.DESCRIPTION_CRYPTOS') }}">


        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="XSTrades.com">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ __('seo.TITLE_CRYPTOS') }}">
        <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_CRYPTOS') }}">
    @elseif ($tab == 'forex')
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ __('seo.TITLE_FOREX') }}">
        <meta property="og:description" content="{{ __('seo.DESCRIPTION_FOREX') }}">


        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="XSTrades.com">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ __('seo.TITLE_FOREX') }}">
        <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_FOREX') }}">
    @elseif ($tab == 'commodities')
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ __('seo.TITLE_COMMODITIES') }}">
        <meta property="og:description" content="{{ __('seo.DESCRIPTION_COMMODITIES') }}">


        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="XSTrades.com">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ __('seo.TITLE_COMMODITIES') }}">
        <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_COMMODITIES') }}">
    @elseif ($tab == 'futures')
        @section('meta_tags')
            @parent
            <title>{{ __('seo.TITLE_FUTURES') }}</title>
            <meta name="description" content="{{ __('seo.DESCRIPTION_FUTURES') }}">
        @endsection
    @endif
@endsection
@section('meta_tags')
    @parent
    @if ($tab == 'shares')
        <title>{{ __('seo.TITLE_SHARES') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_SHARES') }}">
    @elseif ($tab == 'indices')
        <title>{{ __('seo.TITLE_INDICES') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_INDICES') }}">
    @elseif ($tab == 'metals')
        <title>{{ __('seo.TITLE_METALS') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_METALS') }}">
    @elseif ($tab == 'energies')
        <title>{{ __('seo.TITLE_ENERGIES') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_ENERGIES') }}">
    @elseif ($tab == 'crypto' || $tab == 'cryptos')
        <title>{{ __('seo.TITLE_CRYPTOS') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_CRYPTOS') }}">
    @elseif ($tab == 'forex')
        <title>{{ __('seo.TITLE_FOREX') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_FOREX') }}">
    @elseif ($tab == 'commodities')
        <title>{{ __('seo.TITLE_COMMODITIES') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_COMMODITIES') }}">
    @endif
@endsection
@section('content')
    <div class="tab-content" id="pills-tabContent">
        @if ($tab == 'markets')
            <div class="tab-pane fade show active" id="pills-markets" role="tabpanel"
                aria-labelledby="pills-markets-tab">
                @include('markets.markets')
            </div>
        @else
            <div class="tab-pane fade show active" id="pills-shares" role="tabpanel" aria-labelledby="pills-shares-tab">
                @include('markets.comon_page')

                @include('sections.multi-assets')
            </div>
        @endif
    </div>



    <div class="container dark-divider"></div>

    @include('sections.easy')
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            let tab = <?php echo json_encode($tab); ?>;
            let lang = <?php echo json_encode(app()->getLocale()); ?>;
            if (tab) {
                $(".nav-link").each(function(index) {
                    if ($(this).hasClass('active')) {
                        $(this).removeClass('active');
                    }
                });
                $("#pills-" + tab + "-tab").addClass('active');

                $(".tab-pane").each(function(index) {
                    if ($(this).hasClass('show')) {
                        $(this).removeClass('show active');
                    }
                });

                $("#pills-" + tab).addClass('show active');
            }
        });
    </script>
@endsection
