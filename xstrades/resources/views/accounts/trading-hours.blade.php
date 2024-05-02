@extends('layouts.app')
@if(request()->is(App::getLocale() . '/accounts/trading-hours'))
    @section('meta_tags')
        @parent
        <title>{{ __('seo.TITLE_TRADINGHOURS') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_TRADINGHOURS') }}">
    @endsection
@elseif(request()->is(App::getLocale() . '/accounts/trading-hours/hmr'))
    @section('meta_tags')
        @parent
        <title>{{ __('seo.TITLE_TRADINGHOURS_HMR') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_TRADINGHOURS_HMR') }}">
    @endsection
@elseif(request()->is(App::getLocale() . '/accounts/trading-hours/holidays'))
    @section('meta_tags')
        @parent
        <title>{{ __('seo.TITLE_TRADINGHOURS_HOLIDAYS') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_TRADINGHOURS_HOLIDAYS') }}">
    @endsection
@elseif(request()->is(App::getLocale() . '/accounts/trading-hours/notices'))
    @section('meta_tags')
        @parent
        <title>{{ __('seo.TITLE_TRADINGHOURS_NOTICES') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_TRADINGHOURS_NOTICES') }}">
    @endsection
@elseif(request()->is(App::getLocale() . '/accounts/trading-hours/normal'))
    @section('meta_tags')
        @parent
        <title>{{ __('seo.TITLE_TRADINGHOURS_NORMAL') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_TRADINGHOURS_NORMAL') }}">
    @endsection
@endif

@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('trading-hours.PAGE_TITLE'),
        'bannerDescription' => __('trading-hours.PAGE_DESC'),
        'bannerImage' => asset('/img/traders-accounts-banners/desktop/trading-hours.svg'),
        'mobileBanner' => asset('/img/traders-accounts-banners/mobile/trading-hours.webp'),
    ])

    <section class="py-5">
        <div class="row d-flex justify-content-center text-center">
            <h2 class="col-md-8 col-10 text-secondary">{{ __('trading-hours.TRADING_HOURS_MARKET_TITLE') }}</h2>
            <p class="col-md-8 col-10">{{ __('trading-hours.TRADING_HOURS_MARKET_DESC') }}</p>
        </div>
    </section>

    <section class="pb-5">
        <div class="d-lg-none card border-0 mx-4 my-3">
            <div class="dropdown d-flex justify-content-center card-body row p-0">
                <select
                    class="btn drop-menu dropdown-toggle w-100 px-3 col-12 accountTypeDropdown d-flex justify-content-center align-items-center position-relative"
                    type="button" id="mobileTabsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    onchange="window.location.href=this.value">

                    <div class="dropdown-menu drop-content accountTypeDropdown w-100 col-12 py-3 position-relative"
                        aria-labelledby="mobileTabsDropdown">

                        <option value="{{ route('trading-hours') }}"
                            {{ request()->is(App::getLocale() . '/accounts/trading-hours') ? ' selected' : '' }}>
                            {{ __('account_types.SELECT_CATEGORY') }}
                        </option>

                        <option value="{{ route('trading-hours-tab', 'normal') }}"
                            {{ request()->is(App::getLocale() . '/accounts/trading-hours/normal') ? ' selected' : '' }}>
                            {!! __('trading-hours.TRADING_NORMAL') !!}
                        </option>


                        <option value="{{ route('trading-hours-tab', 'holidays') }}"
                            {{ request()->is(App::getLocale() . '/accounts/trading-hours/holidays') ? ' selected' : '' }}>
                            {!! __('trading-hours.TRADING_HOLIDAYS') !!}
                        </option>

                        <option value="{{ route('trading-hours-tab', 'notices') }}"
                            {{ request()->is(App::getLocale() . '/accounts/trading-hours/notices') ? ' selected' : '' }}>
                            {!! __('trading-hours.TRADING_NOTICES') !!}
                        </option>
                        <option value="{{ route('trading-hours-tab', 'hmr') }}"
                            {{ request()->is(App::getLocale() . '/accounts/trading-hours/hmr') ? ' selected' : '' }}>
                            {!! __('trading-hours-hmr.HMR') !!}
                        </option>
                    </div>
                </select>
            </div>
        </div>

        <ul class="nav nav-tabs d-none d-lg-flex justify-content-around row" id="myTab">
            <li class="nav-item tabs-width col-auto p-0">
                <a href="{{ route('trading-hours-tab', 'normal') }}" class="nav-link tabAHeight">
                    <h4
                        class="shadow-md account-type-btn w-100 h-100 d-flex border-radius-30 border-5 border justify-content-center align-items-center p-4 text-center {{ request()->is(App::getLocale() . '/accounts/trading-hours/normal') ? ' active-tabb' : '' }}">
                        {!! __('trading-hours.TRADING_NORMAL') !!}</h4>
                </a>
            </li>
            <li class="nav-item tabs-width col-auto p-0">
                <a href="{{ route('trading-hours-tab', 'holidays') }}" class="nav-link tabAHeight">
                    <h4
                        class="shadow-md account-type-btn w-100 h-100 d-flex border-radius-30 border-5 border justify-content-center align-items-center p-4 text-center {{ request()->is(App::getLocale() . '/accounts/trading-hours/holidays') ? ' active-tabb' : '' }}">
                        {!! __('trading-hours.TRADING_HOLIDAYS') !!}</h4>
                </a>
            </li>
            <li class="nav-item tabs-width col-auto p-0">
                <a href="{{ route('trading-hours-tab', 'notices') }}" class="nav-link tabAHeight">
                    <h4
                        class="shadow-md account-type-btn w-100 h-100 d-flex border-radius-30 border-5 border justify-content-center align-items-center p-4 text-center {{ request()->is(App::getLocale() . '/accounts/trading-hours/notices') ? ' active-tabb' : '' }}">
                        {!! __('trading-hours.TRADING_NOTICES') !!}</h4>
                </a>
            </li>
            <li class="nav-item tabs-width col-auto p-0">
                <a href="{{ route('trading-hours-tab', 'hmr') }}" class="nav-link tabAHeight">
                    <h4
                        class="shadow-md account-type-btn w-100 h-100 d-flex border-radius-30 border-5 border justify-content-center align-items-center p-4 text-center {{ request()->is(App::getLocale() . '/accounts/trading-hours/hmr') ? ' active-tabb' : '' }}">
                        {!! __('trading-hours-hmr.HMR') !!}</h4>
                </a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane fade {{ request()->is(App::getLocale() . '/accounts/trading-hours/normal') ? ' show active' : '' }}"
                id="normal-hours">
                @include('accounts.tabs.normal')
            </div>

            <div class="tab-pane fade {{ request()->is(App::getLocale() . '/accounts/trading-hours/holidays') ? ' show active' : '' }}"
                id="holidays-hours">
                @include('accounts.tabs.holidays')
            </div>
            <div class="tab-pane fade {{ request()->is(App::getLocale() . '/accounts/trading-hours/notices') ? ' show active' : '' }}"
                id="notices-hours">
                @include('accounts.tabs.notices')
            </div>
            <div class="tab-pane fade {{ request()->is(App::getLocale() . '/accounts/trading-hours/hmr') ? ' show active' : '' }}"
                id="hmr-hours">
                @include('accounts.tabs.hmr')
            </div>
        </div>
    </section>

    @include('sections.multi-assets')
    @include('sections.easy')
@endsection
