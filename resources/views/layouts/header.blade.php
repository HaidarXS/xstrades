@if (session()->get('locale') == 'ar')
    <style>
        .lang-alignment {
            text-align: right !important;
        }
    </style>
@else
    <style>
        .lang-alignment {
            text-align: left !important;
        }
    </style>
@endif

@php
    $params = [];
    foreach (Request::route()->parameters() as $key => $value) {
        if ($key != 'lang') {
            $params[$key] = $value;
        }
    }
@endphp

<header class="fixed-top header-content">
    <div class="position-relative">
        <div class="container">
            <div class="row align-items-center pt-4" id="header-mobile-padding">
                <nav class="navbar navbar-expand-lg position-static">
                    <div class="text-center mx-auto p-0 container-fluid">
                        <a class="navbar-brand active-link" href="{{ route('home', ['lang' => App::getLocale()]) }}">
                            <img src="{{ asset('img/xstrades-logo.webp') }}" alt="XSTrades.com" class="img-fluid logo-image">
                        </a>



                            <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}login/?sl=1" target="_blank"
                                class="btn me-2 ms-5 py-0 px-2 login-btn-mobile on-mobile">
                                {{ __('messages.LOGIN') }}</a>


                        <button id="burger-btn" aria-label="burger-menu" class="btn pt-0" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                            aria-controls="offcanvasExample">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mb-2 mb-lg-0 margin-temp m-auto">
                                <li
                                    class="nav-item dropdown mx-4 position-static {{ request()->is(App::getLocale() . '/company*') ? 'active' : '' }}">
                                    <div class="position-relative active-state-container">
                                        <a class="nav-link" href="#" id="navbarDropdown6" role="button"
                                            aria-expanded="false">
                                            {{ __('messages.COMPANY') }} &nbsp;
                                        </a>
                                    </div>
                                    <div class="dropdown-menu w-100 start-0 pt-4">
                                        <ul class="list-unstyled w-100 start-0 py-5 top-100 shadow"
                                            aria-labelledby="navbarDropdown">

                                            <div class="container">
                                                <div class="row">
                                                    <div
                                                        class="col-4 {{ App::getLocale() == 'ar' ? 'border-left' : 'border-right' }} ">
                                                        <div
                                                            class="w-100 h-100 d-flex flex-column justify-content-center">
                                                            <h3 class="text-secondary mb-4">
                                                                {!! __('menu.COMPANY_MENU_TITLE') !!}</h3>
                                                            <div>
                                                                <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1"
                                                                    target="_blank"
                                                                    class="btn join-us-button py-3 px-5 fw-700">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-center">
                                                                        <span class="me-3"><img class="btn-icon"
                                                                                src="{{ asset('/homepage-svgs-ic/join-xs-ic.svg') }}"
                                                                                alt="{{ __('homepage.JOIN_XS_NOW') }}"
                                                                                style="width: 30px; object-fit: contain; aspect-ratio:1/1;"></span>
                                                                        <span>
                                                                            {{ __('homepage.JOIN_XS') }}
                                                                        </span>
                                                                    </div>

                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <li><a class="dropdown-item active-link {{ request()->is(App::getLocale() . '/company/legal-documents') ? 'active' : '' }}"
                                                                href="{{ route('legal-documents', ['lang' => App::getLocale()]) }}">{{ __('messages.LEGAL') }}</a>
                                                        </li>
                                                        <li><a class="dropdown-item active-link {{ request()->is(App::getLocale() . '/company/regulations') ? 'active' : '' }}"
                                                                href="{{ route('regulations', ['lang' => App::getLocale()]) }}">{{ __('messages.REGULATIONS') }}</a>
                                                        </li>
                                                    </div>
                                                    <div class="col-2">
                                                        <li><a class="dropdown-item active-link {{ request()->is(App::getLocale() . '/safety') ? 'active' : '' }}"
                                                                href="{{ route('safety', ['lang' => App::getLocale()]) }}">{{ __('safety.PAGE_BANNER_TITLE') }}</a>
                                                        </li>
                                                        <li><a class="dropdown-item active-link {{ request()->is(App::getLocale() . '/insurance') ? 'active' : '' }}"
                                                                href="{{ route('insurance', ['lang' => App::getLocale()]) }}">{{ __('insurance.INSURANCE') }}</a>
                                                        </li>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </li>





                    <li
                    class="nav-item dropdown mx-4 position-static  {{ request()->is(App::getLocale() . '/markets*') || request()->is(App::getLocale() . '/accounts*') || request()->is(App::getLocale() . '/platforms*') ? 'active' : '' }}">
                    <div class="position-relative active-state-container">
                        <a class="nav-link" href="#" id="navbarDropdown-traders" role="button"
                            aria-expanded="false">
                            {{ __('messages.TRADERS') }} &nbsp;
                        </a>
                    </div>
                    <div class="dropdown-menu w-100 start-0 pt-4">
                        <ul class="list-unstyled m-auto w-100 shadow top-100 start-0 py-5"
                            aria-labelledby="navbarDropdown"
                            style="width:800px; {{ App::getLocale() == 'ar' ? 'right' : 'left' }}: calc(50% - 400px);">
                            <div class="container">
                                <div class="row">
                                    <div
                                        class="col-4 {{ App::getLocale() == 'ar' ? 'border-left' : 'border-right' }} ">
                                        <div
                                            class="px-3 w-100 h-100 d-flex flex-column justify-content-center">
                                            <h3 class="text-secondary mb-4">
                                                {!! __('menu.TRADERS_MENU_TITLE') !!}</h3>
                                            <div>
                                                <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1"
                                                    target="_blank"
                                                    class="btn join-us-button py-3 px-5 fw-700">
                                                    <div
                                                        class="d-flex align-items-center justify-content-center">
                                                        <span class="me-3"><img class="btn-icon"
                                                                src="{{ asset('/homepage-svgs-ic/join-xs-ic.svg') }}"
                                                                alt="{{ __('homepage.JOIN_XS_NOW') }}"
                                                                style="width: 30px; object-fit: contain; aspect-ratio:1/1;"></span>
                                                        <span>
                                                            {{ __('homepage.JOIN_XS') }}
                                                        </span>
                                                    </div>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <li>
                                            <a class="dropdown-item active-link py-0 {{ request()->is(App::getLocale() . '/markets') ? 'active' : '' }}"
                                                href="{{ route('marketspage', ['lang' => App::getLocale()]) }}">
                                                <h5 class="sub-menu-title text-navy link-hover">
                                                    {{ __('messages.MARKETS') }}</h5>
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item active-link  {{ request()->is(App::getLocale() . '/markets/shares') ? 'active' : '' }}"
                                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'shares']) }}">{{ __('messages.SHARES') }}</a>
                                        </li>
                                        <li><a class="dropdown-item active-link {{ request()->is(App::getLocale() . '/markets/indices') ? 'active' : '' }}"
                                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'indices']) }}">{{ __('messages.INDICES') }}</a>
                                        </li>
                                        <li><a class="dropdown-item active-link {{ request()->is(App::getLocale() . '/markets/metals') ? 'active' : '' }}"
                                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'metals']) }}">{{ __('messages.METAL') }}</a>
                                        </li>
                                        <li><a class="dropdown-item active-link {{ request()->is(App::getLocale() . '/markets/energy') ? 'active' : '' }}"
                                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'energy']) }}">{{ __('messages.ENERGY') }}</a>
                                        </li>
                                        <li><a class="dropdown-item active-link {{ request()->is(App::getLocale() . '/markets/crypto') ? 'active' : '' }}"
                                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'crypto']) }}">{{ __('messages.CRYPTOS') }}</a>
                                        </li>
                                        <li><a class="dropdown-item active-link {{ request()->is(App::getLocale() . '/markets/forex') ? 'active' : '' }}"
                                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'forex']) }}">{{ __('messages.FOREX') }}</a>
                                        </li>
                                        <li><a class="dropdown-item active-link {{ request()->is(App::getLocale() . '/markets/commodities') ? 'active' : '' }}"
                                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'commodities']) }}">{{ __('messages.COMMODITIES') }}</a>
                                        </li>
                                        <li><a class="dropdown-item active-link {{ request()->is(App::getLocale() . '/markets/futures') ? 'active' : '' }}"
                                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'futures']) }}">{{ __('trading-hours.FUTURES') }}</a>
                                        </li>
                                    </div>
                                    @if (session()->get('locale') == 'fr')
                                        <div class="col-3">
                                        @else
                                            <div class="col-2">
                                    @endif
                                    <li class="mx-3">
                                        <h5 class="sub-menu-title text-navy">
                                            {{ __('messages.ACCOUNTS') }}
                                        </h5>
                                    </li>

                                    <li><a class="dropdown-item active-link {{ request()->is(App::getLocale() . '/accounts/account-types') ? 'active' : '' }}"
                                            href="{{ route('account_types', ['lang' => App::getLocale()]) }}">{{ __('messages.ACCOUNT_TYPES') }}</a>
                                    </li>
                                    <li><a class="dropdown-item active-link  {{ request()->is(App::getLocale() . '/accounts/contract-specs') ? 'active' : '' }} "
                                            href="{{ route('contract_specs', ['lang' => App::getLocale()]) }}">{{ __('messages.CONTRACT_SPECS') }}</a>
                                    </li>
                                    <li><a class="dropdown-item active-link  {{ request()->is(App::getLocale() . '/accounts/dynamic-leverage') ? 'active' : '' }} "
                                            href="{{ route('dynamic-leverage', ['lang' => App::getLocale()]) }}">{{ __('dynamic-leverage.PAGE_TITLE') }}</a>
                                    </li>
                                    <li><a class="dropdown-item active-link {{ request()->is(App::getLocale() . '/accounts/trading-hours*') ? 'active' : '' }} "
                                            href="{{ route('trading-hours', ['lang' => App::getLocale()]) }}">{{ __('trading-hours.PAGE_TITLE') }}</a>
                                    </li>
                                </div>
                                <div class="col-3">
                                <li><a class="dropdown-item active-link py-0 {{ request()->is(App::getLocale() . '/platforms') ? 'active' : '' }}"
                                        href="{{ route('platforms', ['lang' => App::getLocale()]) }}">
                                        <h5 class="sub-menu-title text-navy link-hover">
                                            {{ __('messages.PLATFORMS') }}</h5>
                                    </a></li>
                                <li><a class="dropdown-item active-link {{ request()->is(App::getLocale() . '/platforms/metatrader-4') ? 'active' : '' }}"
                                        href="{{ route('mt4', ['lang' => App::getLocale()]) }}">{{ __('messages.MT4') }}</a>
                                </li>
                                <li><a class="dropdown-item active-link {{ request()->is(App::getLocale() . '/platforms/metatrader-5') ? 'active' : '' }}"
                                        href="{{ route('mt5', ['lang' => App::getLocale()]) }}">{{ __('messages.MT5') }}</a>
                                </li>
                            </div>
                    </div>
                </div>
                </ul>
            </div>
            </li>


                    </a>
                    </li>
                    <li
                        class="nav-item dropdown mx-4 position-static {{ request()->is(App::getLocale() . '/partners*') ? 'active' : '' }}">
                        <div class="position-relative active-state-container">
                            <a class="nav-link" href="#" id="navbarDropdown1" role="button"
                                aria-expanded="false">
                                {{ __('messages.PARTNERS') }} &nbsp;
                                {{-- <i class='fas fa-chevron-down'></i> --}}
                            </a>
                        </div>
                        <div class="dropdown-menu w-100 start-0 pt-4">
                            <ul class="list-unstyled w-100 top-100 start-0 py-5 shadow"
                                aria-labelledby="navbarDropdown"
                                style="width:600px; {{ session()->get('locale') == 'ar' ? 'right' : 'left' }}: calc(50% - 300px);">
                                <div class="container">
                                    <div class="row">
                                        <div
                                            class="col-4 {{ App::getLocale() == 'ar' ? 'border-left' : 'border-right' }} ">
                                            <div class="px-3 w-100 h-100 d-flex flex-column justify-content-center">
                                                <h3 class="text-secondary mb-4">
                                                    {!! __('menu.PARTNERS_MENU_TITLE') !!}</h3>
                                                <div>
                                                    <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1"
                                                        target="_blank" class="btn join-us-button py-3 px-5 fw-700">
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <span class="me-3"><img class="btn-icon"
                                                                    src="{{ asset('/homepage-svgs-ic/join-xs-ic.svg') }}"
                                                                    alt="{{ __('homepage.JOIN_XS_NOW') }}"
                                                                    style="width: 30px; object-fit: contain; aspect-ratio:1/1;"></span>
                                                            <span>
                                                                {{ __('homepage.JOIN_XS') }}
                                                            </span>
                                                        </div>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        @if (session()->get('locale') == 'jp')
                                            <div class="col-4">
                                            @else
                                                <div class="col-3">
                                        @endif
                                        <li>
                                            <a class="dropdown-item active-link {{ request()->is(App::getLocale() . '/partners') ? 'active' : '' }}"
                                                href="{{ route('partners', ['lang' => App::getLocale()]) }}">
                                                <h5 class="sub-menu-title text-navy link-hover">
                                                    {{ __('messages.PARTNERS') }}</h5>
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item active-link {{ request()->is(App::getLocale() . '/partners/introducing-brokers') ? 'active' : '' }}"
                                                href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'introducing-brokers']) }}">{{ __('messages.INTRODUCING_BROKERS') }}</a>
                                        </li>
                                        @if (App::getLocale() != 'jp')
                                            <li><a class="dropdown-item active-link {{ request()->is(App::getLocale() . '/partners/education-experts') ? 'active' : '' }}"
                                                    href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'education-experts']) }}">{{ __('messages.EDUCATION_EXPERTS') }}</a>
                                            </li>
                                        @endif
                                    </div>
                                    @if (session()->get('locale') == 'jp')
                                        <div class="col-2">
                                        @else
                                            <div class="col-3">
                                    @endif
                                    <li style="margin-top:40px;"><a
                                            class="dropdown-item active-link {{ request()->is(App::getLocale() . '/partners/digital-affiliates') ? 'active' : '' }}"
                                            href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'digital-affiliates']) }}">{{ __('messages.DIGITAL_AFFILIATES') }}</a>
                                    </li>
                                    @if (App::getLocale() != 'jp')
                                        <li><a class="dropdown-item active-link {{ request()->is(App::getLocale() . '/partners/influencers') ? 'active' : '' }}"
                                                href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'influencers']) }}">{{ __('messages.INFLUENCERS') }}</a>
                                        </li>
                                    @endif
                                </div>
                                @if (App::getLocale() != 'jp')
                                    <div class="col-2">
                                        <li style="margin-top:40px;"><a
                                                class="dropdown-item active-link {{ request()->is(App::getLocale() . '/partners/asset-managers') ? 'active' : '' }}"
                                                href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'asset-managers']) }}">{{ __('messages.ASSET_MANAGERS') }}</a>
                                        </li>
                                        <li><a class="dropdown-item active-link {{ request()->is(App::getLocale() . '/partners/local-partners') ? 'active' : '' }}"
                                                href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'local-partners']) }}">{{ __('messages.LOCAL_PARTNERS') }}</a>
                                        </li>
                                    </div>
                                @endif
                        </div>
            </div>
            </ul>
        </div>
        </li>
        </ul>
    </div>
    </div>
    </nav>
    </div>
    </div>

    </div>
    @if (session()->get('locale') == 'ar')
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
        @else
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
    @endif

    <button type="button" class="ms-auto me-4 mt-4 btn-close text-reset" data-bs-dismiss="offcanvas"
        aria-label="Close"></button>
    <div class="offcanvas-body">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 margin-temp">
            <li class="nav-item dropdown mx-4 my-2">
                <a id="company-btn" class="nav-link dropdown-toggle" href="#" role="button"
                    aria-expanded="false">
                    {{ __('messages.COMPANY') }}
                </a>
                <div class="drop d-none">
                    <ul id="company-dropdown" class="dropdown-menu" aria-labelledby="navbarDropdown">



                        <li><a class="dropdown-item active-link"
                                href="{{ route('legal-documents', ['lang' => App::getLocale()]) }}">{{ __('messages.LEGAL') }}</a>
                        </li>

                        <li><a class="dropdown-item active-link"
                                href="{{ route('regulations', ['lang' => App::getLocale()]) }}">{{ __('messages.REGULATIONS') }}</a>
                        </li>
                        <li><a class="dropdown-item active-link {{ request()->is(App::getLocale() . '/company/safety') ? 'active' : '' }}"
                                href="{{ route('safety', ['lang' => App::getLocale()]) }}">{{ __('safety.PAGE_BANNER_TITLE') }}</a>
                        </li>
                        <li><a class="dropdown-item active-link {{ request()->is(App::getLocale() . '/company/insurance') ? 'active' : '' }}"
                                href="{{ route('insurance', ['lang' => App::getLocale()]) }}">{{ __('insurance.INSURANCE') }}</a>
                        </li>

                        <li><a class="dropdown-item active-link {{ request()->is(App::getLocale() . '/company/security') ? 'active' : '' }}"
                                href="{{ route('security', ['lang' => App::getLocale()]) }}">{{ __('security.PAGE_BANNER_TITLE') }}</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item dropdown mx-4 my-2">
                <a id="trading-btn" class="nav-link dropdown-toggle" href="#" id="navbarDropdown-traders"
                    role="button" aria-expanded="false">
                    {{ __('messages.TRADERS') }}
                </a>
                <div class="drop d-none">
                    <ul id="trading-dropdown" class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <li>
                            <a class="dropdown-item active-link"
                                href="{{ route('marketspage', ['lang' => App::getLocale()]) }}">
                                <h5 class="sub-menu-title mt-3">{{ __('messages.MARKETS') }}</h5>
                            </a>
                        </li>
                        <hr class="green-hr my-0">
                        <li><a class="dropdown-item active-link"
                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'shares']) }}">{{ __('messages.SHARES') }}</a>
                        </li>
                        <li><a class="dropdown-item active-link"
                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'indices']) }}">{{ __('messages.INDICES') }}</a>
                        </li>
                        <li><a class="dropdown-item active-link"
                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'metals']) }}">{{ __('messages.METAL') }}</a>
                        </li>
                        <li><a class="dropdown-item active-link"
                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'energy']) }}">{{ __('messages.ENERGY') }}</a>
                        </li>
                        <li><a class="dropdown-item active-link"
                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'crypto']) }}">{{ __('messages.CRYPTOS') }}</a>
                        </li>
                        <li><a class="dropdown-item active-link"
                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'forex']) }}">{{ __('messages.FOREX') }}</a>
                        </li>
                        <li><a class="dropdown-item active-link"
                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'commodities']) }}">{{ __('messages.COMMODITIES') }}</a>
                        </li>

                        <li><a class="dropdown-item active-link"
                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'futures']) }}">{{ __('trading-hours.FUTURES') }}</a>
                        </li>
                        <li>
                            <h5 class="sub-menu-title mt-3 dropdown-item">{{ __('messages.ACCOUNTS') }}</h5>
                        </li>

                        <hr class="green-hr my-0">

                        <li><a class="dropdown-item active-link"
                                href="{{ route('account_types', ['lang' => App::getLocale()]) }}">{{ __('messages.ACCOUNT_TYPES') }}</a>
                        </li>
                        <li><a class="dropdown-item active-link"
                                href="{{ route('contract_specs', ['lang' => App::getLocale()]) }}">{{ __('messages.CONTRACT_SPECS') }}</a>
                        </li>
                        <li><a class="dropdown-item active-link  {{ request()->is(App::getLocale() . '/accounts/dynamic-leverage') ? 'active' : '' }} "
                                href="{{ route('dynamic-leverage', ['lang' => App::getLocale()]) }}">{{ __('dynamic-leverage.PAGE_TITLE') }}</a>
                        </li>

                        <li><a class="dropdown-item active-link  {{ request()->is(App::getLocale() . '/accounts/trading-hours/*') ? 'active' : '' }} "
                                href="{{ route('trading-hours', ['lang' => App::getLocale()]) }}">{{ __('trading-hours.PAGE_TITLE') }}</a>
                        </li>
                        <li><a class="dropdown-item active-link"
                                href="{{ route('platforms', ['lang' => App::getLocale(), 'tab' => 'platforms']) }}">
                                <h5 class="sub-menu-title mt-3 text-navy link-hover">
                                    {{ __('messages.PLATFORMS') }}
                                </h5>
                            </a></li>
                        <hr class="green-hr my-0">
                        <li><a class="dropdown-item active-link"
                                href="{{ route('platforms', ['lang' => App::getLocale(), 'tab' => 'mt4']) }}">{{ __('messages.MT4') }}</a>
                        </li>
                        <li><a class="dropdown-item active-link"
                                href="{{ route('platforms', ['lang' => App::getLocale(), 'tab' => 'mt5']) }}">{{ __('messages.MT5') }}</a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="nav-item dropdown mx-4 my-2">
                <a id="partners-btn" class="nav-link dropdown-toggle" href="#" id="navbarDropdown3"
                    role="button" aria-expanded="false">
                    {{ __('messages.PARTNERS') }}
                </a>
                <div class="drop d-none">
                    <ul id="partners-dropdown" class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item active-link"
                                href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'home']) }}">
                                <h5 class="sub-menu-title mt-3 text-navy link-hover">
                                    {{ __('messages.PARTNERS') }}
                                </h5>
                            </a>
                        </li>
                        <hr class="green-hr my-0">
                        <li><a class="dropdown-item"
                                href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'introducing-brokers']) }}">{{ __('messages.INTRODUCING_BROKERS') }}</a>
                        </li>
                        @if (App::getLocale() != 'jp')
                            <li><a class="dropdown-item"
                                    href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'asset-managers']) }}">{{ __('messages.ASSET_MANAGERS') }}</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'local-partners']) }}">{{ __('messages.LOCAL_PARTNERS') }}</a>
                            </li>
                        @endif
                        {{-- <hr class="green-hr my-1"> --}}
                        <li><a class="dropdown-item"
                                href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'digital-affiliates']) }}">{{ __('messages.DIGITAL_AFFILIATES') }}</a>

                        </li>
                        @if (App::getLocale() != 'jp')
                            <li><a class="dropdown-item"
                                    href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'influencers']) }}">{{ __('messages.INFLUENCERS') }}</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'education-experts']) }}">{{ __('messages.EDUCATION_EXPERTS') }}</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    </div>



</header>

<script>
    $(document).ready(function() {
        $('#lang-changer-btn').click(function() {
            $('#myDropdown').toggle();
        });

        $('.dropdown:not(".lang-switch")').mouseenter(function() {
            $('.lang-switch .dropdown-content').hide()
        })

        $(document).click(function(event) {
            if (!$(event.target).closest('.dropdown').length) {
                $('#myDropdown').hide();
            }
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.dropdown-toggle').click(function() {
            $(this).next('.drop').toggleClass('d-none d-block');
        });
    });
</script>