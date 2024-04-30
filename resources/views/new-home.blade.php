@extends('layouts.app')

@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ __('seo.TITLE') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION') }}">
    <meta property="og:image" content="https://www.xs.com/webp/hero-banner.webp">

    <!-- Twitter Meta Tags -->
    <meta property="twitter:domain" content="xs.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION') }}">
    <meta name="twitter:image" content="https://www.xs.com/webp/hero-banner.webp">
@endsection

@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION') }}">
    <meta name="robots" content="noindex">
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css?v4.6') }}">
@endpush

@section('content')
    @include('new-homepage-sections.hero')

    @include('new-homepage-sections.assets')
    @include('new-homepage-sections.platforms')
    @include('new-homepage-sections.account-types')
    @include('new-homepage-sections.funding-methods')
    @include('new-homepage-sections.join-global-market-leader')
    @include('new-homepage-sections.sponsorship-events')
    @include('new-homepage-sections.global-awards')
@endsection

@section('scripts')
@endsection
