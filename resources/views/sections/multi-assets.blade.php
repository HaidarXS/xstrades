@php
    $assets = [
        [
            'title' => __('homepage.SHARES'),
            'description' => __('homepage.SHARES_DESCRIPTION'),
            'image' => '/img/market-icons/shares.webp',
            'link' => route('markets', ['lang' => App::getLocale(), 'tab' => 'shares']),
            'alt' => 'shares',
        ],
        [
            'title' => __('homepage.INDICES'),
            'description' => __('homepage.INDICES_DESCRIPTION'),
            'image' => '/img/market-icons/indices.webp',
            'link' => route('markets', ['lang' => App::getLocale(), 'tab' => 'indices']),
            'alt' => 'indices',
        ],
        [
            'title' => __('homepage.METALS'),
            'description' => __('homepage.METALS_DESCRIPTION'),
            'image' => '/img/market-icons/metals.webp',
            'link' => route('markets', ['lang' => App::getLocale(), 'tab' => 'metals']),
            'alt' => 'metals',
        ],
        [
            'title' => __('trading-hours.FUTURES'),
            'description' => __('homepage.FUTURES_DESCRIPTION'),
            'image' => '/img/market-icons/futures.svg',
            'link' => route('markets', ['lang' => App::getLocale(), 'tab' => 'futures']),
            'alt' => 'futures',
        ],
        [
            'title' => __('homepage.COMMODITIES'),
            'description' => __('homepage.COMMODITIES_DESCRIPTION'),
            'image' => '/img/market-icons/commodities.svg',
            'link' => route('markets', ['lang' => App::getLocale(), 'tab' => 'commodities']),
            'alt' => 'commodities',
        ],
        [
            'title' => __('homepage.FOREX'),
            'description' => __('homepage.FOREX_DESCRIPTION'),
            'image' => '/img/market-icons/forex.webp',
            'link' => route('markets', ['lang' => App::getLocale(), 'tab' => 'forex']),
            'alt' => 'forex',
        ],
        [
            'title' => __('homepage.ENERGY'),
            'description' => __('homepage.ENERGY_DESCRIPTION'),
            'image' => '/img/market-icons/energy.webp',
            'link' => route('markets', ['lang' => App::getLocale(), 'tab' => 'energy']),
            'alt' => 'energy',
        ],
        [
            'title' => __('homepage.CRYPTOS'),
            'description' => __('homepage.CRYPTOS_DESCRIPTION'),
            'image' => '/img/market-icons/cryptos.webp',
            'link' => route('markets', ['lang' => App::getLocale(), 'tab' => 'crypto']),
            'alt' => 'crypto',
        ],
    ];
@endphp
<div class="pt-5 container  pb-5 section-reveal">
    <h2 class="multi-asset my-lg-5 mt-3 size-40" style="text-align:center;color:#01337F;">
        {!! __('homepage.TRADE_WITH_THE_BEST_MULTI_ASSET_BROKER') !!}
    </h2>
    <div class="container ">
        <div class="row justify-content-center">
            @foreach ($assets as $asset)
                <div class="col-lg-3 col-md-4 col-6 mb-5 text-decoration-none">
                    <a href="{{ $asset['link'] }}" class="d-block text-decoration-none">
                        <div class="d-flex align-items-center justify-content-center flex-column px-4">

                            <div class="overflow-hidden max-w-150px mb-4">
                                <img class="img-fluid multi-asset-img" src="{{ asset($asset['image']) }}"
                                    alt="{{ $asset['alt'] }}" />
                            </div>
                            <h4 class="text-primary text-center text-secondary fw-700">{{ $asset['title'] }}</h4>
                            <p class="m-0 text-secondary text-center">{{ $asset['description'] }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="row justify-content-center">
            @php
                $currentUrl = url()->current();
                $marketsHome = route('marketspage', ['lang' => App::getLocale()]);
            @endphp
            @if ($currentUrl != $marketsHome)
                @include('layouts.button', [
                    'text' => __('homepage.PRODUCTS'),
                    'link' => route('marketspage', ['lang' => App::getLocale()]),
                    'newTab' => false,
                    'icon' => asset('/svgs/products-ic.svg'),
                ])
            @endif
        </div>
    </div>
</div>
