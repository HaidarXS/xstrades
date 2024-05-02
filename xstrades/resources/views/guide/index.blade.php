@extends('layouts.app')
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_USER_GUIDES') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_USER_GUIDES') }}">
@endsection
@section('content')

@php
    $locale = App::getLocale();
    $imageFilename = '/img/guides/mastercard-cover-' . ($locale === 'zh-Hans' || $locale === 'zh-Hant' ? 'cn' : $locale) . '.png';
@endphp

    <section>
        <div class="container py-5">
            <h1 class="text-secondary fw-700 mb-4 text-center">
               {{ __('user-guides.USER_GUIDES') }}
            </h1>
        </div>

        <div class="container">
            <div class="row text-center">
                <a href="{{ route('single-guide', ['lang' => App::getLocale(), 'name' => 'xs-mastercard-user-guide']) }}" class="col-md-4 single-book new-tab py-3" target="_blank">
                    <img src="{{ $imageFilename }}" class="w-100 book-1">
                    <div class="row">
                        <div class="row text-center py-3">
                            <h2 class="text-secondary text-decoration-none">{{ __('user-guides.XS_MASTER_CARD_USER_GUIDE') }}<span class="fw-normal">#1</span></h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

@endsection
