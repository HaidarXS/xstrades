<style>
        .page-content {
            margin-top: 140px !important;
        }
</style>
@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ __('seo.TITLE') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION') }}">
    <meta property="og:image" content="https://www.XSTrades.com/webp/hero-banner.webp">

    <!-- Twitter Meta Tags -->
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION') }}">
    <meta name="twitter:image" content="https://www.XSTrades.com/webp/hero-banner.webp">
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION') }}">
@endsection

@section('content')
    @include('sections.hero')
    @include('sections.easy')
    @include('sections.market-leader')
    @include('sections.multi-assets')
    @include('sections.account-types')
    @include('sections.global-markets')
    @include('sections.partners')
    @include('sections.connect')
    @include('sections.fast-reliable')
    {{-- @include('sections.our-awards') --}}
@endsection


@section('scripts')
    {{-- <script>
        $(document).ready(function() {
            let lang = "{{ session()->get('locale') }}";
            window.history.replaceState({}, '',"/" + lang);
        });
    </script> --}}
@endsection
