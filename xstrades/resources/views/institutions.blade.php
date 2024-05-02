@extends('layouts.app')
@section('opengraph')
    @if ($tab === 'liquidity')
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{url()->current()}}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ __('seo.TITLE_LIQUIDITY') }}">
        <meta property="og:description" content="{{ __('seo.DESCRIPTION_LIQUIDITY') }}">
 

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="XSTrades.com">
        <meta property="twitter:url" content="{{url()->current()}}">
        <meta name="twitter:title" content="{{ __('seo.TITLE_LIQUIDITY') }}">
        <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_LIQUIDITY') }}">
 
    @elseif($tab === 'technology')
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{url()->current()}}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ __('seo.TITLE_TECHNOLOGY') }}">
        <meta property="og:description" content="{{ __('seo.DESCRIPTION_TECHNOLOGY') }}">
 

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="XSTrades.com">
        <meta property="twitter:url" content="{{url()->current()}}">
        <meta name="twitter:title" content="{{ __('seo.TITLE_TECHNOLOGY') }}">
        <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_TECHNOLOGY') }}">
 
    @elseif($tab === 'consultancy')
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{url()->current()}}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ __('seo.TITLE_CONSULTANCY') }}">
        <meta property="og:description" content="{{ __('seo.DESCRIPTION_CONSULTANCY') }}">
 

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="XSTrades.com">
        <meta property="twitter:url" content="{{url()->current()}}">
        <meta name="twitter:title" content="{{ __('seo.TITLE_CONSULTANCY') }}">
        <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_CONSULTANCY') }}">
 
    @elseif($tab === 'white-labels')
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{url()->current()}}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ __('seo.TITLE_WHITE_LABELS') }}">
        <meta property="og:description" content="{{ __('seo.DESCRIPTION_WHITE_LABELS') }}">
 

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="XSTrades.com">
        <meta property="twitter:url" content="{{url()->current()}}">
        <meta name="twitter:title" content="{{ __('seo.TITLE_WHITE_LABELS') }}">
        <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_WHITE_LABELS') }}">
 
    @elseif($tab === 'full-solutions')
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{url()->current()}}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ __('seo.TITLE_FULL_SOLUTIONS') }}">
        <meta property="og:description" content="{{ __('seo.DESCRIPTION_FULL_SOLUTIONS') }}">
 

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="XSTrades.com">
        <meta property="twitter:url" content="{{url()->current()}}">
        <meta name="twitter:title" content="{{ __('seo.TITLE_FULL_SOLUTIONS') }}">
        <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_FULL_SOLUTIONS') }}">
 
        @elseif($tab === 'tailored-services')
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{url()->current()}}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ __('seo.TITLE_TAILORED_SERVICES') }}">
        <meta property="og:description" content="{{ __('seo.DESCRIPTION_TAILORED_SERVICES') }}">
 

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="XSTrades.com">
        <meta property="twitter:url" content="{{url()->current()}}">
        <meta name="twitter:title" content="{{ __('seo.TITLE_TAILORED_SERVICES') }}">
        <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_TAILORED_SERVICES') }}">
 
    @else
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{url()->current()}}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ __('seo.TITLE_INSTITUTIONS') }}">
        <meta property="og:description" content="{{ __('seo.DESCRIPTION_INSTITUTIONS') }}">
 

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="XSTrades.com">
        <meta property="twitter:url" content="{{url()->current()}}">
        <meta name="twitter:title" content="{{ __('seo.TITLE_INSTITUTIONS') }}">
        <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_INSTITUTIONS') }}">
 
    @endif
@endsection
@section('meta_tags')
    @parent
    @if ($tab === 'liquidity')
        <title>{{ __('seo.TITLE_LIQUIDITY') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_LIQUIDITY') }}">
    @elseif($tab === 'technology')
        <title>{{ __('seo.TITLE_THECHNOLOGY') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_THECHNOLOGY') }}">
    @elseif($tab === 'consultancy')
        <title>{{ __('seo.TITLE_CONSULTANCY') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_CONSULTANCY') }}">
    @elseif($tab === 'white-labels')
        <title>{{ __('seo.TITLE_WHITELABELS') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_WHITELABELS') }}">
    @elseif($tab === 'full-solutions')
        <title>{{ __('seo.TITLE_FULL_SOLUTIONS') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_FULL_SOLUTIONS') }}">
    @elseif($tab === 'tailored-services')
        <title>{{ __('seo.TITLE_TAILORED_SERVICES') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_TAILORED_SERVICES') }}">
    @else
        <title>{{ __('seo.TITLE_INSTITUTIONS') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_INSTITUTIONS') }}">
    @endif
@endsection
@section('content')
<div class="tab-content" id="pills-tabContent">
    @if (!$tab)
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-liquidity-tab">
            @include('institutions.institutions-home')
        </div>
    @else
        <div class="tab-pane fade show active" id="pills-liquidity" role="tabpanel"
            aria-labelledby="pills-liquidity-tab">
            @include('institutions.' . $tab)
        </div>
    @endif
</div>

@endsection

