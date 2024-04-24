<section class="container pt-5 section-reveal">
    <div class="row">
        <div class="col-12 mb-3">
            <h2 class="easy-steps size-40" style="text-align:center;color:#01337F;">
                {!! __('homepage.EASY_STEPS_TO_START_TRADING') !!}
            </h2>
        </div>
    </div>
    <div class="row justify-content-around mt-3 mb-3">

        @if (session()->get('locale') == 'fr' ||
                session()->get('locale') == 'es' ||
                session()->get('locale') == 'pt' ||
                session()->get('locale') == 'jp' ||
                session()->get('locale') == 'vi')
            <div class="col-lg-4 col-md-6 col-12 text-center mb-4">
            @else
                <div class="col-xl-3 col-lg-4 col-md-6 col-9 text-center mb-4">
        @endif
        <div
            class="d-flex justify-content-lg-around justify-content-between px-5 align-items-center bg-gray rounded-full-sides">
            <span class="numb me-4" style="margin-left:6px;">1 </span>
            <span class="easy-text">{{ __('homepage.REGISTER') }}</span>
            <img class="ms-4 easy-img" src="{{ asset('/svgs/register.svg') }}" alt="{{ __('homepage.REGISTER') }}"
                style="aspect-ratio:1/1; width:30px; object-fit:contain;">
        </div>
    </div>
    @if (session()->get('locale') == 'fr' ||
            session()->get('locale') == 'es' ||
            session()->get('locale') == 'pt' ||
            session()->get('locale') == 'jp' ||
            session()->get('locale') == 'vi')
        <div class="col-lg-4 col-md-6 col-12 text-center mb-4">
        @else
            <div class="col-xl-3 col-lg-4 col-md-6 col-9 text-center mb-4">
    @endif
    <div
        class="d-flex justify-content-lg-around justify-content-between px-5 align-items-center  bg-gray rounded-full-sides">
        <span class="numb me-4">2</span>
        <span class="easy-text">{{ __('homepage.FUND') }}</span>
        <img class="ms-4 easy-img" src="{{ asset('/svgs/fund.svg') }}" alt="{{ __('homepage.FUND') }}"
            style="aspect-ratio:1/1; width:30px; object-fit:contain;">

    </div>
    </div>
    @if (session()->get('locale') == 'fr' ||
            session()->get('locale') == 'es' ||
            session()->get('locale') == 'pt' ||
            session()->get('locale') == 'jp' ||
            session()->get('locale') == 'vi')
        <div class="col-lg-4 col-md-6 col-12 text-center mb-4">
        @else
            <div class="col-xl-3 col-lg-4 col-md-6 col-9 text-center mb-4">
    @endif
    <div
        class="d-flex justify-content-lg-around justify-content-between px-5 align-items-center  bg-gray rounded-full-sides">
        <span class="numb me-4">3</span>
        <span class="easy-text">{{ __('homepage.TRADE') }}</span>
        <img class="ms-4 easy-img" src="{{ asset('/svgs/trade.svg') }}" alt="{{ __('homepage.TRADE') }}"
            style="aspect-ratio:1/1; width:30px; object-fit:contain;">

    </div>
    </div>
    </div>
    @include('layouts.button', [
        'text' => __('homepage.JOIN_XS'),
        'link' => 'https://my.XSTrades.com/' . getCorrectLangSlug() . 'register/?sl=1',
        'newTab' => true,
        'icon' => '/homepage-svgs-ic/join-xs-ic.svg',
    ])

    </div>
