@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('seo.TITLE_ACCOUNT_TYPES') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_ACCOUNT_TYPES') }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE_ACCOUNT_TYPES') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_ACCOUNT_TYPES') }}">
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_ACCOUNT_TYPES') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_ACCOUNT_TYPES') }}">
@endsection



@section('bootstrap')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
<style>
    @media(max-width:991px) {

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            border-color: transparent !important;
        }
    }
</style>
@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('messages.ACCOUNT_TYPES'),
        'bannerDescription' => __('account_types.ACCOUNT_TYPES_SUBTITLE'),
        'bannerImage' => asset('/img/traders-accounts-banners/desktop/accounts-types.svg'),
        'mobileBanner' => asset('/img/traders-accounts-banners/mobile/accounts-types.webp'),
    ])


    <div class="container mt-3">

        {{-- <div class="d-md-none card border-0 mx-4 my-3">
            <div class="card-body row p-0">
                <select class="form-select w-100 col-12" id="accountTypeDropdown">
                    <option value=" " selected disabled>
                        {{ __('Select Category') }}
                    </option>
                    <option value="{{ route('account_types_tab', 'preferred') }}">
                        {{ __('account_types.PREFFERED_ACCOUNT_TYPES') }}
                    </option>
                    <option value="{{ route('account_types_tab', 'professional') }}">
                        {{ __('account_types.PROFESSIONAL_ACCOUNT_TYPES') }}
                    </option>
                    <option value="{{ route('account_types_tab', 'special') }}">
                        {{ __('account_types.PARTNERS_ACCOUNT_TYPES') }}
                    </option>
                    <option value="{{ route('account_types_tab', 'copy-trading') }}">
                        {{ __('account_types.COPY_ACCOUNT_TYPES') }}
                    </option>
                </select>
            </div>
        </div> --}}



        <div>
            {{-- <div class="d-md-none card border-0 mx-4 my-3">
                <div class="dropdown d-flex justify-content-center card-body row p-0">
                    <select
                        class="btn drop-menu dropdown-toggle w-100 px-3
                        col-12 accountTypeDropdown d-flex justify-content-center align-items-center position-relative"
                        type="button" id="mobileTabsDropdown" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">

                        <div class="dropdown-menu drop-content accountTypeDropdown w-100 col-12 py-3 position-relative"
                            aria-labelledby="mobileTabsDropdown">

                            <a class="dropdown-item {{ request()->is(App::getLocale() . '/accounts/account-types') ? ' active-drop' : '' }}"
                                href="{{ route('account_types_tab') }}">
                                <option value="" slected>{{ __('Select Category') }}</option>
                            </a>
                            <a class="dropdown-item {{ request()->is(App::getLocale() . '/accounts/account-types/preferred') ? ' active-drop' : '' }}"
                                href="{{ route('account_types_tab', 'preferred') }}">
                                <option value="">{{ __('account_types.PREFFERED_ACCOUNT_TYPES') }}</option>
                            </a>
                            <a class="dropdown-item {{ request()->is(App::getLocale() . '/accounts/account-types/professional') ? ' active-drop' : '' }}"
                                href="{{ route('account_types_tab', 'professional') }}">
                                <option value="">{{ __('account_types.PROFESSIONAL_ACCOUNT_TYPES') }}</option>
                            </a>
                            <a class="dropdown-item {{ request()->is(App::getLocale() . '/accounts/account-types/special') ? ' active-drop' : '' }}"
                                href="{{ route('account_types_tab', 'special') }}">
                                <option value="">{{ __('account_types.PARTNERS_ACCOUNT_TYPES') }}</option>
                            </a>
                            <a class="dropdown-item d-none {{ request()->is(App::getLocale() . '/accounts/account-types/copy-trading') ? ' active-drop' : '' }}"
                                href="{{ route('account_types_tab', 'copy-trading') }}">
                                {{ __('account_types.COPY_ACCOUNT_TYPES') }}
                            </a>
                        </div>
                    </select>
                </div>
            </div> --}}
            <div class="d-lg-none card border-0 mx-4 my-3">
                <div class="dropdown d-flex justify-content-center card-body row p-0">
                    <select
                        class="btn drop-menu dropdown-toggle w-100 px-3 col-12 accountTypeDropdown d-flex justify-content-center align-items-center position-relative"
                        type="button" id="mobileTabsDropdown" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" onchange="window.location.href=this.value">

                        <div class="dropdown-menu drop-content accountTypeDropdown w-100 col-12 py-3 position-relative"
                            aria-labelledby="mobileTabsDropdown">

                            <option value="{{ route('account_types_tab') }}"
                                {{ request()->is(App::getLocale() . '/accounts/account-types') ? ' selected' : '' }}>
                                {{ __('account_types.SELECT_CATEGORY') }}
                            </option>

                            <option value="{{ route('account_types_tab', 'preferred') }}"
                                {{ request()->is(App::getLocale() . '/accounts/account-types/preferred') ? ' selected' : '' }}>
                                {{ __('account_types.PREFFERED_ACCOUNT_TYPES') }}
                            </option>

                            <option value="{{ route('account_types_tab', 'professional') }}"
                                {{ request()->is(App::getLocale() . '/accounts/account-types/professional') ? ' selected' : '' }}>
                                {{ __('account_types.PROFESSIONAL_ACCOUNT_TYPES') }}
                            </option>

                            <option value="{{ route('account_types_tab', 'special') }}"
                                {{ request()->is(App::getLocale() . '/accounts/account-types/special') ? ' selected' : '' }}>
                                {{ __('account_types.PARTNERS_ACCOUNT_TYPES') }}
                            </option>

                            {{-- <option value="{{ route('account_types_tab', 'copy-trading') }}"
                                {{ request()->is(App::getLocale() . '/accounts/account-types/copy-trading') ? ' selected' : '' }}>
                                {{ __('account_types.COPY_ACCOUNT_TYPES') }}
                            </option> --}}
                        </div>
                    </select>
                </div>
            </div>


            <ul class="nav nav-tabs d-none d-lg-flex justify-content-around row" id="myTab">
                <li class="nav-item @if (session()->get('locale') == 'jp') col-4 @else col-auto @endif">
                    <a href="{{ route('account_types_tab', 'preferred') }}" class="nav-link ">
                        <h4
                            class="shadow-md account-type-btn w-100 h-100 d-flex border-radius-30 border-5 border justify-content-center align-items-center p-4 text-center {{ request()->is(App::getLocale() . '/accounts/account-types/preferred') ? ' active-tabb' : '' }}">
                            {!! __('account_types.PREFFERED_ACCOUNT_TYPES_TAB') !!}</h4>
                    </a>
                </li>
                <li class="nav-item @if (session()->get('locale') == 'jp') col-4 @else col-auto @endif">
                    <a href="{{ route('account_types_tab', 'professional') }}" class="nav-link ">
                        <h4
                            class="shadow-md account-type-btn w-100 h-100 d-flex border-radius-30 border-5 border justify-content-center align-items-center p-4 text-center {{ request()->is(App::getLocale() . '/accounts/account-types/professional') ? ' active-tabb' : '' }}">
                            {!! __('account_types.PROFESSIONAL_ACCOUNT_TYPES_TAB') !!}</h4>
                    </a>
                </li>
                <li class="nav-item  @if (session()->get('locale') == 'jp') col-4 @else col-auto @endif ">
                    <a href="{{ route('account_types_tab', 'special') }}" class="nav-link ">
                        <h4
                            class="shadow-md account-type-btn w-100 h-100 d-flex border-radius-30 border-5 border justify-content-center align-items-center p-4 text-center {{ request()->is(App::getLocale() . '/accounts/account-types/special') ? ' active-tabb' : '' }}">
                            {!! __('account_types.PARTNERS_ACCOUNT_TYPES_TAB') !!}</h4>
                    </a>
                </li>
                {{-- <li class="nav-item col-auto">
                    <a href="{{ route('account_types_tab', 'copy-trading') }}" class="nav-link ">
                        <h4
                            class="shadow-md account-type-btn w-100 h-100 d-flex border-radius-30 border-5 border justify-content-center align-items-center p-4 text-center {{ request()->is(App::getLocale() . '/accounts/account-types/copy-trading') ? ' active-tabb' : '' }}">
                            {!! __('account_types.COPY_ACCOUNT_TYPES_TAB') !!}</h4>
                    </a>
                </li> --}}
            </ul>


            <div class="tab-content">
                <div class="tab-pane fade {{ request()->is(App::getLocale() . '/accounts/account-types/preferred') ? ' show active' : '' }}"
                    id="preffered">
                    <div class="row row justify-content-center">
                        <div class="col-12 text-center mt-5 mb-3">
                            <h1 class="text-secondary text-center fw-700">{{ __('account_types.PREFFERED_ACCOUNT_TYPES') }}
                            </h1>
                        </div>

                        <div class="col-xl-3 col-md-4  @if (session()->get('locale') != 'jp') py-5 @endif">
                            <div
                                class="w-100 acc-table d-flex flex-column  border-radius-30 overflow-hidden border border-1 defualt-opacity">
                                <div class="bg-primary text-white py-4 px-2  ">
                                    <h4 class="text-center fw-700  text-uppercase">{{ __('account_types.CENT') }}</h4>
                                </div>
                                <div class="mx-4 my-3">
                                    <div class="bg-gray p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.TRADING_PLATFORM') }}
                                        </h5>
                                        <div>{{ __('account_types.MT5') }}</div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.AVERAGE_SPREAD') }}
                                        </h5>
                                        <div>1.1</div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="bg-gray p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.COMMISSIONS') }}
                                        </h5>
                                        <div>
                                            @if (session()->get('locale') == 'jp')
                                                <span class="">無料</span>
                                            @else
                                                <span class="text-danger fw-700 fs-22">X</span>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.INSTRUMENTS') }}
                                        </h5>
                                        <div>{{ __('account_types.CURRENCIES') }}, {{ __('account_types.METALS') }}
                                        </div>
                                    </div>
                                </div>

                                <div class="mx-4 my-2 text-center">
                                    <a href="{{ route('account_type_details', ['lang' => App::getLocale(), 'type' => 'preferred', 'account_type' => 'cent-account']) }}"
                                        class="text-secondary text-decoration-none text-center">
                                        {{ __('account_types.MORE_DETAILS') }}
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-4">
                            <div
                                class="w-100 acc-table d-flex flex-column  border-radius-30 overflow-hidden border border-1 defualt-opacity">

                                <div class="bg-primary text-white py-4 px-2    position-relative">
                                    <div class="bg-navy position-absolute d-flex align-items-center">
                                        <img src="{{ asset('/img/popular.svg') }}" class="popular-img" alt="popular">
                                    </div>
                                    <h4 class="text-center fw-700  text-uppercase">{{ __('account_types.STANDARD') }}</h4>
                                </div>
                                <div class="mx-4 my-3">
                                    <div class="bg-gray p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.TRADING_PLATFORM') }}
                                        </h5>
                                        <div>{{ __('account_types.MT4') }} , {{ __('account_types.MT5') }}</div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.AVERAGE_SPREAD') }}
                                        </h5>
                                        <div>1.1</div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="bg-gray p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.COMMISSIONS') }}
                                        </h5>
                                        <div>
                                            @if (session()->get('locale') == 'jp')
                                                <span class="">無料</span>
                                            @else
                                                <span class="text-danger fw-700 fs-22">X</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.INSTRUMENTS') }}
                                        </h5>
                                        <div>
                                            {{ __('account_types.CURRENCIES') }},
                                            {{ __('account_types.METALS') }},
                                            {{ __('account_types.CRYPTO') }},
                                            {{ __('account_types.ENERGY') }},
                                            {{ __('account_types.INDICES') }},
                                            {{ __('account_types.FUTURES') }},
                                            {{ __('account_types.SHARES_MT5') }}
                                        </div>
                                    </div>
                                </div>

                                <div class="mx-4 my-2 text-center">
                                    <a href="{{ route('account_type_details', ['lang' => App::getLocale(), 'type' => 'preferred', 'account_type' => 'standard-account']) }}"
                                        class="text-secondary text-decoration-none text-center">
                                        {{ __('account_types.MORE_DETAILS') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        @if (session()->get('locale') != 'jp')
                            <div class="col-xl-3 col-md-4 py-5">
                                <div
                                    class="w-100 acc-table d-flex flex-column  border-radius-30 overflow-hidden border border-1 defualt-opacity">
                                    <div class="bg-primary text-white py-4 px-2  ">
                                        <h4 class="text-center fw-700  text-uppercase">{{ __('account_types.MICRO') }}
                                        </h4>
                                    </div>
                                    <div class="mx-4 my-3">
                                        <div class="bg-gray p-1 text-center">
                                            <h5 class="text-primary">
                                                {{ __('account_types.TRADING_PLATFORM') }}
                                            </h5>
                                            <div>{{ __('account_types.MT5') }}</div>
                                        </div>
                                    </div>
                                    <div class="mx-4 my-2">
                                        <div class="p-1 text-center">
                                            <h5 class="text-primary">
                                                {{ __('account_types.AVERAGE_SPREAD') }}
                                            </h5>
                                            <div>1.1</div>
                                        </div>
                                    </div>
                                    <div class="mx-4 my-2">
                                        <div class="bg-gray p-1 text-center">
                                            <h5 class="text-primary">
                                                {{ __('account_types.COMMISSIONS') }}
                                            </h5>
                                            <div>
                                                @if (session()->get('locale') == 'jp')
                                                    <span class="">無料</span>
                                                @else
                                                    <span class="text-danger fw-700 fs-22">X</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mx-4 my-2">
                                        <div class="p-1 text-center">
                                            <h5 class="text-primary">
                                                {{ __('account_types.INSTRUMENTS') }}
                                            </h5>
                                            <div>
                                                {{ __('account_types.CURRENCIES') }},
                                                {{ __('account_types.METALS') }},
                                                {{ __('account_types.ENERGY') }},
                                                {{ __('account_types.INDICES') }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mx-4 my-2 text-center">
                                        <a href="{{ route('account_type_details', ['lang' => App::getLocale(), 'type' => 'preferred', 'account_type' => 'micro-account']) }}"
                                            class="text-secondary text-decoration-none text-center">
                                            {{ __('account_types.MORE_DETAILS') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    {{-- <div class="row justify-content-center">
                        <div class="pt-4 d-flex justify-content-center">
                            <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1" target="_blank"
                                class="btn join-us-button py-3 px-5">
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="me-3"><img class="btn-icon"
                                            src="{{ asset('/homepage-svgs-ic/join-xs-ic.svg') }}" alt="Join XS Trades"
                                            style="width: 30px; object-fit: contain;"></span>
                                    <span>
                                        {{ __('markets.JOIN_XS') }}
                                    </span>
                                </div>

                            </a>
                        </div>
                    </div> --}}
                </div>
                <div class="tab-pane fade {{ request()->is(App::getLocale() . '/accounts/account-types/professional') ? ' show active' : '' }}"
                    id="professional">

                    <div class="row row justify-content-center">
                        <div class="col-12 text-center mt-5 mb-3">
                            <h1 class="text-secondary text-center fw-700">
                                {{ __('account_types.PROFESSIONAL_ACCOUNT_TYPES') }}
                            </h1>
                        </div>

                        <div class="col-xl-3 col-md-4  py-5">
                            <div
                                class="w-100 acc-table d-flex flex-column  border-radius-30 overflow-hidden border border-1 defualt-opacity">
                                <div class="bg-primary text-white py-4 px-2  ">
                                    <h4 class="text-center fw-700  text-uppercase">{{ __('account_types.ELITE') }}</h4>
                                </div>
                                <div class="mx-4 my-3">
                                    <div class="bg-gray p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.TRADING_PLATFORM') }}
                                        </h5>
                                        <div>{{ __('account_types.MT4') }} , {{ __('account_types.MT5') }}</div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.AVERAGE_SPREAD') }}
                                        </h5>
                                        <div>0.1</div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="bg-gray p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.COMMISSIONS') }}
                                        </h5>
                                        <div>{{ __('account_types.3_PER_SIDE') }}</div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.INSTRUMENTS') }}
                                        </h5>
                                        <div>
                                            {{ __('account_types.CURRENCIES') }},
                                            {{ __('account_types.METALS') }},
                                            {{ __('account_types.CRYPTO') }},
                                            {{ __('account_types.ENERGY') }},
                                            {{ __('account_types.INDICES') }},
                                            {{ __('account_types.FUTURES') }}
                                        </div>
                                    </div>
                                </div>

                                <div class="mx-4 my-2 text-center">
                                    <a href="{{ route('account_type_details', ['lang' => App::getLocale(), 'type' => 'professional', 'account_type' => 'elite-account']) }}"
                                        class="text-secondary text-decoration-none text-center">
                                        {{ __('account_types.MORE_DETAILS') }}
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-4">
                            <div
                                class="w-100 acc-table d-flex flex-column  border-radius-30 overflow-hidden border border-1 defualt-opacity">
                                <div class="bg-primary text-white py-4 px-2    position-relative">
                                    <div class="bg-navy position-absolute d-flex align-items-center">
                                        <img src="{{ asset('/img/popular.svg') }}" class="popular-img" alt="popular">
                                    </div>
                                    <h4 class="text-center fw-700  text-uppercase">{{ __('account_types.PRO') }}</h4>
                                </div>
                                <div class="mx-4 my-3">
                                    <div class="bg-gray p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.TRADING_PLATFORM') }}
                                        </h5>
                                        <div>{{ __('account_types.MT4') }} , {{ __('account_types.MT5') }}</div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.AVERAGE_SPREAD') }}
                                        </h5>
                                        <div>0.7</div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="bg-gray p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.COMMISSIONS') }}
                                        </h5>
                                        <div>
                                            @if (session()->get('locale') == 'jp')
                                                <span class="">無料</span>
                                            @else
                                                <span class="text-danger fw-700 fs-22">X</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.INSTRUMENTS') }}
                                        </h5>
                                        <div>
                                            {{ __('account_types.CURRENCIES') }} ,
                                            {{ __('account_types.METALS') }},
                                            {{ __('account_types.CRYPTO') }},
                                            {{ __('account_types.ENERGY') }},
                                            {{ __('account_types.INDICES') }},
                                            {{ __('account_types.FUTURES') }},
                                            {{ __('account_types.SHARES_MT5') }}
                                        </div>
                                    </div>
                                </div>

                                <div class="mx-4 my-2 text-center">
                                    <a href="{{ route('account_type_details', ['lang' => App::getLocale(), 'type' => 'professional', 'account_type' => 'pro-account']) }}"
                                        class="text-secondary text-decoration-none text-center">
                                        {{ __('account_types.MORE_DETAILS') }}
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-4 py-5">
                            <div
                                class="w-100 acc-table d-flex flex-column  border-radius-30 overflow-hidden border border-1 defualt-opacity">
                                <div class="bg-primary text-white py-4 px-2  ">
                                    <h4 class="text-center fw-700  text-uppercase">{{ __('account_types.VIP') }}</h4>
                                </div>
                                <div class="mx-4 my-3">
                                    <div class="bg-gray p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.TRADING_PLATFORM') }}
                                        </h5>
                                        <div>{{ __('account_types.MT5') }}</div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.AVERAGE_SPREAD') }}
                                        </h5>
                                        <div>0.1</div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="bg-gray p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.COMMISSIONS') }}
                                        </h5>
                                        <div>
                                            @if (session()->get('locale') == 'jp')
                                                <span class="">カスタマイズ可能</span>
                                            @else
                                                <span class="text-primary fw-700 fs-22">✓</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.INSTRUMENTS') }}
                                        </h5>
                                        <div>
                                            {{ __('account_types.CURRENCIES') }} ,
                                            {{ __('account_types.METALS') }},
                                            {{ __('account_types.CRYPTO') }},
                                            {{ __('account_types.ENERGY') }},
                                            {{ __('account_types.INDICES') }},
                                            {{ __('account_types.FUTURES') }},
                                            {{ __('account_types.COMMODITIES') }}
                                        </div>
                                    </div>
                                </div>

                                <div class="mx-4 my-2 text-center">
                                    <a href="{{ route('account_type_details', ['lang' => App::getLocale(), 'type' => 'professional', 'account_type' => 'vip-account']) }}"
                                        class="text-secondary text-decoration-none text-center">
                                        {{ __('account_types.MORE_DETAILS') }}
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- <div class="row justify-content-center">
                        <div class="pt-4 d-flex justify-content-center">
                            <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1" target="_blank"
                                class="btn join-us-button py-3 px-5">
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="me-3"><img class="btn-icon"
                                            src="{{ asset('/homepage-svgs-ic/join-xs-ic.svg') }}" alt="Join XS Trades"
                                            style="width: 30px; object-fit: contain;"></span>
                                    <span>
                                        {{ __('markets.JOIN_XS') }}
                                    </span>
                                </div>

                            </a>
                        </div>
                    </div> --}}
                </div>
                <div class="tab-pane fade {{ request()->is(App::getLocale() . '/accounts/account-types/special') ? ' show active' : '' }}"
                    id="partners">

                    <div class="row justify-content-center">
                        <div class="col-12 text-center mt-5 mb-3">
                            <h1 class="text-secondary text-center fw-700">
                                {{ __('account_types.PARTNERS_ACCOUNT_TYPES') }}
                            </h1>
                        </div>

                        <div class="col-xl-3 col-md-4 py-5">
                            <div
                                class="w-100 acc-table d-flex flex-column  border-radius-30 overflow-hidden border border-1 defualt-opacity">
                                <div class="bg-primary text-white py-4 px-2">
                                    <h4 class="text-center fw-700 text-uppercase">{{ __('account_types.EXTRA') }}</h4>
                                </div>
                                <div class="mx-4 my-3">
                                    <div class="bg-gray p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.TRADING_PLATFORM') }}
                                        </h5>
                                        <div>{{ __('account_types.MT4') }} , {{ __('account_types.MT5') }}</div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.AVERAGE_SPREAD') }}
                                        </h5>
                                        <div>2.1</div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="bg-gray p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.COMMISSIONS') }}
                                        </h5>
                                        <div>
                                            @if (session()->get('locale') == 'jp')
                                                <span class="">無料</span>
                                            @else
                                                <span class="text-danger fw-700 fs-22">X</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.INSTRUMENTS') }}
                                        </h5>
                                        <div>
                                            {{ __('account_types.CURRENCIES') }},
                                            {{ __('account_types.METALS') }},
                                            {{ __('account_types.CRYPTO') }},
                                            {{ __('account_types.ENERGY') }},
                                            {{ __('account_types.INDICES') }},
                                            {{ __('account_types.FUTURES') }},
                                            {{ __('account_types.COMMODITIES') }}
                                        </div>
                                    </div>
                                </div>

                                <div class="mx-4 my-2 text-center">
                                    <a href="{{ route('account_type_details', ['lang' => App::getLocale(), 'type' => 'special', 'account_type' => 'extra-account']) }}"
                                        class="text-secondary text-decoration-none text-center">
                                        {{ __('account_types.MORE_DETAILS') }}
                                    </a>
                                </div>
                            </div>
                        </div>



                        <div class="col-xl-3 col-md-4 py-5">
                            <div
                                class="w-100 acc-table d-flex flex-column  border-radius-30 overflow-hidden border border-1 defualt-opacity">
                                <div class="bg-primary text-white py-4 px-2 position-relative">
                                    <div class="bg-navy position-absolute d-flex align-items-center">
                                        <img src="{{ asset('/img/popular.svg') }}" class="popular-img" alt="popular">
                                    </div>
                                    <h4 class="text-center fw-700  text-uppercase">{{ __('account_types.CLASSIC') }}</h4>
                                </div>
                                <div class="mx-4 my-3">
                                    <div class="bg-gray p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.TRADING_PLATFORM') }}
                                        </h5>
                                        <div>{{ __('account_types.MT4') }} , {{ __('account_types.MT5') }}</div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.AVERAGE_SPREAD') }}
                                        </h5>
                                        <div>1.6</div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="bg-gray p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.COMMISSIONS') }}
                                        </h5>
                                        <div>
                                            @if (session()->get('locale') == 'jp')
                                                <span class="">無料</span>
                                            @else
                                                <span class="text-danger fw-700 fs-22">X</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.INSTRUMENTS') }}
                                        </h5>
                                        <div>
                                            {{ __('account_types.CURRENCIES') }},
                                            {{ __('account_types.METALS') }},
                                            {{ __('account_types.CRYPTO') }},
                                            {{ __('account_types.ENERGY') }},
                                            {{ __('account_types.INDICES') }},
                                            {{ __('account_types.FUTURES') }},
                                            {{ __('account_types.COMMODITIES') }}
                                        </div>
                                    </div>
                                </div>

                                <div class="mx-4 my-2 text-center">
                                    <a href="{{ route('account_type_details', ['lang' => App::getLocale(), 'type' => 'special', 'account_type' => 'classic-account']) }}"
                                        class="text-secondary text-decoration-none text-center">
                                        {{ __('account_types.MORE_DETAILS') }}

                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- <div class="row justify-content-center mb-5">
                        <div class="pt-4 d-flex justify-content-center">
                            <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1" target="_blank"
                                class="btn join-us-button py-3 px-5">
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="me-3"><img class="btn-icon"
                                            src="{{ asset('/homepage-svgs-ic/join-xs-ic.svg') }}" alt="Join XS Trades"
                                            style="width: 30px; object-fit: contain;"></span>
                                    <span>
                                        {{ __('markets.JOIN_XS') }}
                                    </span>
                                </div>

                            </a>
                        </div>
                    </div> --}}
                </div>
                <div class="tab-pane fade {{ request()->is(App::getLocale() . '/accounts/account-types/copy-trading') ? ' show active' : '' }}"
                    id="copy-trading">

                    <div class="row justify-content-center">
                        <div class="col-12 text-center mt-5 mb-3">
                            <h1 class="text-secondary text-center fw-700">
                                {{ __('account_types.COPY_ACCOUNT_TYPES') }}
                            </h1>
                        </div>

                        <div class="col-xl-3 col-md-4 py-5">
                            <div
                                class="w-100 acc-table d-flex flex-column  border-radius-30 overflow-hidden border border-1 defualt-opacity">
                                <div class="bg-primary text-white py-4 px-2    position-relative">
                                    <div class="bg-navy position-absolute d-flex align-items-center">
                                        <img src="{{ asset('/img/popular.svg') }}" class="popular-img" alt="popular">
                                    </div>
                                    <h4 class="text-center fw-700 text-uppercase">{{ __('account_types.COPY_STANDARD') }}
                                    </h4>
                                </div>
                                <div class="mx-4 my-3">
                                    <div class="bg-gray p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.TRADING_PLATFORM') }}
                                        </h5>
                                        <div>{{ __('account_types.MT5') }}</div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.AVERAGE_SPREAD') }}
                                        </h5>
                                        <div>1.1</div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="bg-gray p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.COMMISSIONS') }}
                                        </h5>
                                        <div>
                                            @if (session()->get('locale') == 'jp')
                                                <span class="">無料</span>
                                            @else
                                                <span class="text-danger fw-700 fs-22">X</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.INSTRUMENTS') }}
                                        </h5>
                                        <div>
                                            {{ __('account_types.CURRENCIES') }},
                                            {{ __('account_types.METALS') }} ({{ __('dynamic-leverage.GOLD') }} &
                                            {{ __('dynamic-leverage.SILVER') }})

                                        </div>
                                    </div>
                                </div>

                                <div class="mx-4 my-2 text-center">
                                    <a href="{{ route('account_type_details', ['lang' => App::getLocale(), 'type' => 'copy-trading', 'account_type' => 'copy-standard']) }}"
                                        class="text-secondary text-decoration-none text-center">
                                        {{ __('account_types.MORE_DETAILS') }}
                                    </a>
                                </div>
                            </div>
                        </div>



                        <div class="col-xl-3 col-md-4 py-5">
                            <div
                                class="w-100 acc-table d-flex flex-column  border-radius-30 overflow-hidden border border-1 defualt-opacity">
                                <div class="bg-primary text-white py-4 px-2  ">
                                    <h4 class="text-center fw-700  text-uppercase">
                                        {{ __('account_types.COPY_PRO') }}</h4>
                                </div>
                                <div class="mx-4 my-3">
                                    <div class="bg-gray p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.TRADING_PLATFORM') }}
                                        </h5>
                                        <div>{{ __('account_types.MT5') }}</div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.AVERAGE_SPREAD') }}
                                        </h5>
                                        <div>0.7</div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="bg-gray p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.COMMISSIONS') }}
                                        </h5>
                                        <div>
                                            @if (session()->get('locale') == 'jp')
                                                <span class="">無料</span>
                                            @else
                                                <span class="text-danger fw-700 fs-22">X</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-4 my-2">
                                    <div class="p-1 text-center">
                                        <h5 class="text-primary">
                                            {{ __('account_types.INSTRUMENTS') }}
                                        </h5>
                                        <div>
                                            {{ __('account_types.CURRENCIES') }},
                                            {{ __('account_types.METALS') }} ({{ __('dynamic-leverage.GOLD') }} &
                                            {{ __('dynamic-leverage.SILVER') }})

                                        </div>
                                    </div>
                                </div>

                                <div class="mx-4 my-2 text-center">
                                    <a href="{{ route('account_type_details', ['lang' => App::getLocale(), 'type' => 'copy-trading', 'account_type' => 'copy-pro']) }}"
                                        class="text-secondary text-decoration-none text-center">
                                        {{ __('account_types.MORE_DETAILS') }}

                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        @include('sections.easy')
        {{--
        @include('layouts.button', [
            'text' => __('homepage.JOIN_XS'),
            'link' => 'https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1',
            'newTab' => true,
            'icon' => '/homepage-svgs-ic/join-xs-ic.svg',
        ]) --}}

    </div>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.drop-menu').on('click', function() {

                $('.drop-content').toggle();


                var isVisible = $('.drop-content').is(':visible');
                $('.fas.fa-chevron-down').css('transform', isVisible ? 'rotate(180deg)' : 'rotate(0deg)');
            });


            $(document).on('click', function(event) {
                if (!$(event.target).closest('.drop-menu').length) {
                    $('.drop-content').hide();
                    $('.fas.fa-chevron-down').css('transform', 'rotate(0deg)');
                }
            });
        });
    </script>

    {{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        const accountTypeDropdown = document.getElementById("accountTypeDropdown");

        // Retrieve the stored value from a cookie or local storage
        const selectedValue = localStorage.getItem("selectedAccountType");

        // Set the selected attribute based on the stored value
        if (selectedValue) {
            accountTypeDropdown.value = selectedValue;
        } else {
            // If no stored value, select the first option by default
            accountTypeDropdown.options[0].selected = true;
        }

        accountTypeDropdown.addEventListener("change", function() {
            const selectedRoute = accountTypeDropdown.value;

            if (selectedRoute) {
                // Store the selected value in a cookie or local storage
                localStorage.setItem("selectedAccountType", selectedRoute);

                // Redirect to the selected route
                window.location.href = selectedRoute;
            }
        });
    });
</script> --}}
@endsection

{{--
                        @if (request()->is(App::getLocale() . '/accounts/account-types/preferred'))
                            <option value="" selected>{{ __('account_types.PREFFERED_ACCOUNT_TYPES') }}</option>
                        @elseif(request()->is(App::getLocale() . '/accounts/account-types/professional'))
                            <option value="" selected>{{ __('account_types.PROFESSIONAL_ACCOUNT_TYPES') }}</option>
                        @elseif(request()->is(App::getLocale() . '/accounts/account-types/special'))
                            <option value="" selected>{{ __('account_types.PARTNERS_ACCOUNT_TYPES') }}</option>
                        @elseif(request()->is(App::getLocale() . '/accounts/account-types/copy-trading'))
                            <option value="" selected>{{ __('account_types.COPY_ACCOUNT_TYPES') }}</option>
                        @else
                            <option value="" selected>{{ __('Select Category') }}</option>
                        @endif --}}
{{-- <div class="row justify-content-between my-5">
            <div class="col-lg-3">
                <a href="#preffered" class="text-decoration-none">
                    <div
                        class="shadow-md account-type-btn w-100 h-100 d-flex border-radius-30 border-2 border justify-content-center align-items-center p-4">
                        <h4 class="m-0 text-center">{{ __('account_types.PREFFERED_ACCOUNT_TYPES') }}</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 py-lg-0 py-4">
                <a class="text-decoration-none" href="#professional">
                    <div
                        class="shadow-md account-type-btn w-100 h-100 d-flex border-radius-30 border-2 border justify-content-center align-items-center p-4">
                        <h4 class="m-0 text-center">{{ __('account_types.PROFESSIONAL_ACCOUNT_TYPES') }}</h3>
                    </div>
                </a>

            </div>
            <div class="col-lg-3">
                <a href="#partners" class="text-decoration-none">
                    <div
                        class="shadow-md account-type-btn w-100 h-100 d-flex border-radius-30 border-2 border justify-content-center align-items-center p-4">
                        <h4 class="m-0 text-center">{{ __('account_types.PARTNERS_ACCOUNT_TYPES') }}</h3>
                    </div>
                </a>
            </div>
        </div> --}}
{{-- <div class="m-4">
            <ul class="nav nav-tabs" id="myTab">
                <li class="nav-item">
                    <a href="#preffered" class="text-decoration-none">
                        <div class="shadow-md account-type-btn w-100 h-100 d-flex border-radius-30 border-2 border justify-content-center align-items-center p-4 nav-link active"
                            data-bs-toggle="tab">
                            <h4 class="m-0 text-center">{{ __('account_types.PREFFERED_ACCOUNT_TYPES') }}</h3>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="text-decoration-none" href="#professional">
                        <div
                            class="shadow-md account-type-btn w-100 h-100 d-flex border-radius-30 border-2 border justify-content-center align-items-center p-4 nav-link"data-bs-toggle="tab">
                            <h4 class="m-0 text-center">{{ __('account_types.PROFESSIONAL_ACCOUNT_TYPES') }}</h3>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#partners" class="text-decoration-none">
                        <div
                            class="shadow-md account-type-btn w-100 h-100 d-flex border-radius-30 border-2 border justify-content-center align-items-center p-4nav-link"data-bs-toggle="tab">
                            <h4 class="m-0 text-center">{{ __('account_types.PARTNERS_ACCOUNT_TYPES') }}</h3>
                        </div>
                    </a>
                </li>
            </ul>
        </div> --}}

{{-- <section id="preffered">

            <div class="row">
                <div class="col-12 text-center mt-5 mb-3">
                    <h1 class="text-secondary text-center fw-700">{{ __('account_types.PREFFERED_ACCOUNT_TYPES') }}</h1>
                </div>

                <div class="col-md-4  py-5">
                    <div
                        class="w-100 h-100 d-flex flex-column  border-radius-30 overflow-hidden border border-1 defualt-opacity">
                        <div class="bg-primary text-white p-4">
                            <h2 class="text-center fw-700  text-uppercase">{{ __('account_types.CENT') }}</h2>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="bg-gray p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.TRADING_PLATFORM') }}
                                </h5>
                                <div>{{ __('account_types.MT5') }}</div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.AVERAGE_SPREAD') }}
                                </h5>
                                <div>1.1</div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="bg-gray p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.COMMISSIONS') }}
                                </h5>
                                <div>
                                    @if (session()->get('locale') == 'jp')
                                        <span class="">無料</span>
                                    @else
                                        <span class="text-danger fw-700 fs-22">X</span>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.INSTRUMENTS') }}
                                </h5>
                                <div>{{ __('account_types.CURRENCIES') }} <br /> {{ __('account_types.METALS') }}</div>
                            </div>
                        </div>

                        <div class="my-5 text-center">
                            <a href="{{ route('account_type_details', ['lang' => App::getLocale(), 'account_type' => 'cent-account']) }}"
                                class="text-secondary text-decoration-none text-center">
                                {{ __('account_types.MORE_DETAILS') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div
                        class="w-100 h-100 d-flex flex-column  border-radius-30 overflow-hidden border border-1 defualt-opacity">
                        <img class="ribbon" src="{{ asset('/img/popular-ribbon.svg') }}" alt="Popular">
                        <div class="bg-primary text-white p-4">
                            <h2 class="text-center fw-700  text-uppercase">{{ __('account_types.STANDARD') }}</h2>
                        </div>
                        <div class="mx-4 my-4">
                            <div class="bg-gray p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.TRADING_PLATFORM') }}
                                </h5>
                                <div>{{ __('account_types.MT4') }} , {{ __('account_types.MT5') }}</div>
                            </div>
                        </div>
                        <div class="mx-4 my-4">
                            <div class="p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.AVERAGE_SPREAD') }}
                                </h5>
                                <div>1.1</div>
                            </div>
                        </div>
                        <div class="mx-4 my-4">
                            <div class="bg-gray p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.COMMISSIONS') }}
                                </h5>
                                <div>
                                    @if (session()->get('locale') == 'jp')
                                        <span class="">無料</span>
                                    @else
                                        <span class="text-danger fw-700 fs-22">X</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="mx-4 my-4">
                            <div class="p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.INSTRUMENTS') }}
                                </h5>
                                <div>
                                    {{ __('account_types.CURRENCIES') }} <br />
                                    {{ __('account_types.METALS') }}<br />
                                    {{ __('account_types.CRYPTO') }}<br />
                                    {{ __('account_types.ENERGY') }}<br />
                                    {{ __('account_types.INDICES') }}<br />
                                    {{ __('account_types.FUTURES') }}<br />
                                    {{ __('account_types.SHARES') }}<br />
                                    {{ __('account_types.COMMODITIES') }}
                                </div>
                            </div>
                        </div>

                        <div class="my-5 text-center">
                            <a href="{{ route('account_type_details', ['lang' => App::getLocale(), 'account_type' => 'standard-account']) }}"
                                class="text-secondary text-decoration-none text-center">
                                {{ __('account_types.MORE_DETAILS') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 py-5">
                    <div
                        class="w-100 h-100 d-flex flex-column  border-radius-30 overflow-hidden border border-1 defualt-opacity">
                        <div class="bg-primary text-white p-4">
                            <h2 class="text-center fw-700  text-uppercase">{{ __('account_types.MICRO') }}</h2>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="bg-gray p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.TRADING_PLATFORM') }}
                                </h5>
                                <div>{{ __('account_types.MT5') }}</div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.AVERAGE_SPREAD') }}
                                </h5>
                                <div>1.1</div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="bg-gray p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.COMMISSIONS') }}
                                </h5>
                                <div>
                                    @if (session()->get('locale') == 'jp')
                                        <span class="">無料</span>
                                    @else
                                        <span class="text-danger fw-700 fs-22">X</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.INSTRUMENTS') }}
                                </h5>
                                <div>
                                    {{ __('account_types.CURRENCIES') }} <br />
                                    {{ __('account_types.METALS') }} <br />
                                    {{ __('account_types.ENERGY') }} <br />
                                    {{ __('account_types.INDICES') }}
                                </div>
                            </div>
                        </div>

                        <div class="my-5 text-center">
                            <a href="{{ route('account_type_details', ['lang' => App::getLocale(), 'account_type' => 'micro-account']) }}"
                                class="text-secondary text-decoration-none text-center">
                                {{ __('account_types.MORE_DETAILS') }}
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="pt-4 d-flex justify-content-center">
                    <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1" target="_blank"
                        class="btn join-us-button py-3 px-5">
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="me-3"><img class="btn-icon"
                                    src="{{ asset('/homepage-svgs-ic/join-xs-ic.svg') }}" alt="Join XS Trades"
                                    style="width: 30px; object-fit: contain;"></span>
                            <span>
                                {{ __('markets.JOIN_XS') }}
                            </span>
                        </div>

                    </a>
                </div>
            </div>
        </section>

        <section id="professional">
            <div class="row">
                <div class="col-12 text-center mt-5 mb-3">
                    <h1 class="text-secondary text-center fw-700">{{ __('account_types.PROFESSIONAL_ACCOUNT_TYPES') }}
                    </h1>
                </div>

                <div class="col-md-4  py-5">
                    <div
                        class="w-100 h-100 d-flex flex-column  border-radius-30 overflow-hidden border border-1 defualt-opacity">
                        <div class="bg-primary text-white p-4">
                            <h2 class="text-center fw-700  text-uppercase">{{ __('account_types.ELITE') }}</h2>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="bg-gray p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.TRADING_PLATFORM') }}
                                </h5>
                                <div>{{ __('account_types.MT4') }} , {{ __('account_types.MT5') }}</div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.AVERAGE_SPREAD') }}
                                </h5>
                                <div>0.1</div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="bg-gray p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.COMMISSIONS') }}
                                </h5>
                                <div>{{ __('account_types.3_PER_SIDE') }}</div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.INSTRUMENTS') }}
                                </h5>
                                <div>
                                    {{ __('account_types.CURRENCIES') }} <br />
                                    {{ __('account_types.METALS') }}<br />
                                    {{ __('account_types.CRYPTO') }}<br />
                                    {{ __('account_types.ENERGY') }}<br />
                                    {{ __('account_types.INDICES') }}<br />
                                    {{ __('account_types.FUTURES') }}<br />
                                    {{ __('account_types.SHARES') }}<br />
                                    {{ __('account_types.COMMODITIES') }}
                                </div>
                            </div>
                        </div>

                        <div class="my-5 text-center">
                            <a href="{{ route('account_type_details', ['lang' => App::getLocale(), 'account_type' => 'elite-account']) }}"
                                class="text-secondary text-decoration-none text-center">
                                {{ __('account_types.MORE_DETAILS') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div
                        class="w-100 h-100 d-flex flex-column  border-radius-30 overflow-hidden border border-1 defualt-opacity">
                        <img class="ribbon" src="{{ asset('/img/popular-ribbon.svg') }}" alt="Popular">
                        <div class="bg-primary text-white p-4">
                            <h2 class="text-center fw-700  text-uppercase">{{ __('account_types.PRO') }}</h2>
                        </div>
                        <div class="mx-4 my-4">
                            <div class="bg-gray p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.TRADING_PLATFORM') }}
                                </h5>
                                <div>{{ __('account_types.MT4') }} , {{ __('account_types.MT5') }}</div>
                            </div>
                        </div>
                        <div class="mx-4 my-4">
                            <div class="p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.AVERAGE_SPREAD') }}
                                </h5>
                                <div>0.7</div>
                            </div>
                        </div>
                        <div class="mx-4 my-4">
                            <div class="bg-gray p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.COMMISSIONS') }}
                                </h5>
                                <div>
                                    @if (session()->get('locale') == 'jp')
                                        <span class="">無料</span>
                                    @else
                                        <span class="text-danger fw-700 fs-22">X</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="mx-4 my-4">
                            <div class="p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.INSTRUMENTS') }}
                                </h5>
                                <div>
                                    {{ __('account_types.CURRENCIES') }} <br />
                                    {{ __('account_types.METALS') }}<br />
                                    {{ __('account_types.CRYPTO') }}<br />
                                    {{ __('account_types.ENERGY') }}<br />
                                    {{ __('account_types.INDICES') }}<br />
                                    {{ __('account_types.FUTURES') }}<br />
                                    {{ __('account_types.SHARES') }}<br />
                                    {{ __('account_types.COMMODITIES') }}
                                </div>
                            </div>
                        </div>

                        <div class="my-5 text-center">
                            <a href="{{ route('account_type_details', ['lang' => App::getLocale(), 'account_type' => 'pro-account']) }}"
                                class="text-secondary text-decoration-none text-center">
                                {{ __('account_types.MORE_DETAILS') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 py-5">
                    <div
                        class="w-100 h-100 d-flex flex-column  border-radius-30 overflow-hidden border border-1 defualt-opacity">
                        <div class="bg-primary text-white p-4">
                            <h2 class="text-center fw-700  text-uppercase">{{ __('account_types.VIP') }}</h2>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="bg-gray p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.TRADING_PLATFORM') }}
                                </h5>
                                <div>{{ __('account_types.MT5') }}</div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.AVERAGE_SPREAD') }}
                                </h5>
                                <div>0.1</div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="bg-gray p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.COMMISSIONS') }}
                                </h5>
                                <div>
                                    @if (session()->get('locale') == 'jp')
                                        <span class="">カスタマイズ可能</span>
                                    @else
                                        <span class="text-primary fw-700 fs-22">✓</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.INSTRUMENTS') }}
                                </h5>
                                <div>
                                    {{ __('account_types.CURRENCIES') }} <br />
                                    {{ __('account_types.METALS') }}<br />
                                    {{ __('account_types.CRYPTO') }}<br />
                                    {{ __('account_types.ENERGY') }}<br />
                                    {{ __('account_types.INDICES') }}<br />
                                    {{ __('account_types.FUTURES') }}<br />
                                    {{ __('account_types.SHARES') }}<br />
                                    {{ __('account_types.COMMODITIES') }}
                                </div>
                            </div>
                        </div>

                        <div class="my-5 text-center">
                            <a href="{{ route('account_type_details', ['lang' => App::getLocale(), 'account_type' => 'vip-account']) }}"
                                class="text-secondary text-decoration-none text-center">
                                {{ __('account_types.MORE_DETAILS') }}
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="pt-4 d-flex justify-content-center">
                    <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1" target="_blank"
                        class="btn join-us-button py-3 px-5">
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="me-3"><img class="btn-icon"
                                    src="{{ asset('/homepage-svgs-ic/join-xs-ic.svg') }}" alt="Join XS Trades"
                                    style="width: 30px; object-fit: contain;"></span>
                            <span>
                                {{ __('markets.JOIN_XS') }}
                            </span>
                        </div>

                    </a>
                </div>
            </div>
        </section>

        <section id="partners">
            <div class="row justify-content-center">
                <div class="col-12 text-center mt-5 mb-3">
                    <h1 class="text-secondary text-center fw-700">{{ __('account_types.PARTNERS_ACCOUNT_TYPES') }}</h1>
                </div>

                <div class="col-md-4 py-5">
                    <div
                        class="w-100 h-100 d-flex flex-column  border-radius-30 overflow-hidden border border-1 defualt-opacity">
                        <img class="ribbon" src="{{ asset('/img/popular-ribbon.svg') }}" alt="Popular">
                        <div class="bg-primary text-white p-4">
                            <h2 class="text-center fw-700 text-uppercase">{{ __('account_types.EXTRA') }}</h2>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="bg-gray p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.TRADING_PLATFORM') }}
                                </h5>
                                <div>{{ __('account_types.MT4') }} , {{ __('account_types.MT5') }}</div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.AVERAGE_SPREAD') }}
                                </h5>
                                <div>2.1</div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="bg-gray p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.COMMISSIONS') }}
                                </h5>
                                <div>
                                    @if (session()->get('locale') == 'jp')
                                        <span class="">無料</span>
                                    @else
                                        <span class="text-danger fw-700 fs-22">X</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.INSTRUMENTS') }}
                                </h5>
                                <div>
                                    {{ __('account_types.CURRENCIES') }}<br />
                                    {{ __('account_types.METALS') }}<br />
                                    {{ __('account_types.CRYPTO') }}<br />
                                    {{ __('account_types.ENERGY') }}<br />
                                    {{ __('account_types.INDICES') }}<br />
                                    {{ __('account_types.FUTURES') }}<br />
                                    {{ __('account_types.SHARES') }}<br />
                                    {{ __('account_types.COMMODITIES') }}
                                </div>
                            </div>
                        </div>

                        <div class="my-5 text-center">
                            <a href="{{ route('account_type_details', ['lang' => App::getLocale(), 'account_type' => 'extra-account']) }}"
                                class="text-secondary text-decoration-none text-center">
                                {{ __('account_types.MORE_DETAILS') }}
                            </a>
                        </div>
                    </div>
                </div>



                <div class="col-md-4 py-5">
                    <div
                        class="w-100 h-100 d-flex flex-column  border-radius-30 overflow-hidden border border-1 defualt-opacity">
                        <div class="bg-primary text-white p-4">
                            <h2 class="text-center fw-700  text-uppercase">{{ __('account_types.CLASSIC') }}</h2>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="bg-gray p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.TRADING_PLATFORM') }}
                                </h5>
                                <div>{{ __('account_types.MT4') }} , {{ __('account_types.MT5') }}</div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.AVERAGE_SPREAD') }}
                                </h5>
                                <div>1.6</div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="bg-gray p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.COMMISSIONS') }}
                                </h5>
                                <div>
                                    @if (session()->get('locale') == 'jp')
                                        <span class="">無料</span>
                                    @else
                                        <span class="text-danger fw-700 fs-22">X</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.INSTRUMENTS') }}
                                </h5>
                                <div>
                                    {{ __('account_types.CURRENCIES') }}<br />
                                    {{ __('account_types.METALS') }}<br />
                                    {{ __('account_types.CRYPTO') }}<br />
                                    {{ __('account_types.ENERGY') }}<br />
                                    {{ __('account_types.INDICES') }}<br />
                                    {{ __('account_types.FUTURES') }}<br />
                                    {{ __('account_types.SHARES') }}<br />
                                    {{ __('account_types.COMMODITIES') }}
                                </div>
                            </div>
                        </div>

                        <div class="my-5 text-center">
                            <a href="{{ route('account_type_details', ['lang' => App::getLocale(), 'account_type' => 'classic-account']) }}"
                                class="text-secondary text-decoration-none text-center">
                                {{ __('account_types.MORE_DETAILS') }}

                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row justify-content-center mb-5">
                <div class="pt-4 d-flex justify-content-center">
                    <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1" target="_blank"
                        class="btn join-us-button py-3 px-5">
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="me-3"><img class="btn-icon"
                                    src="{{ asset('/homepage-svgs-ic/join-xs-ic.svg') }}" alt="Join XS Trades"
                                    style="width: 30px; object-fit: contain;"></span>
                            <span>
                                {{ __('markets.JOIN_XS') }}
                            </span>
                        </div>

                    </a>
                </div>
            </div>
        </section> --}}
