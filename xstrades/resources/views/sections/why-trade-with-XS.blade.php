@php
    $items = [
        [
            'title' => __('advantages.CHOOSE_REASON_1_TITLE'),
            'text' => __('advantages.CHOOSE_REASON_1_DESCRIPTION'),
            'icon' => '/img/advantages/multiple-regulations.webp',
        ],
        [
            'title' => __('advantages.CHOOSE_REASON_2_TITLE'),
            'text' => __('advantages.CHOOSE_REASON_2_DESCRIPTION'),
            'icon' => '/img/advantages/safety-of-funds.webp',
        ],
        [
            'title' => __('advantages.CHOOSE_REASON_3_TITLE'),
            'text' => __('advantages.CHOOSE_REASON_3_DESCRIPTION'),
            'icon' => '/img/advantages/global-markets-access.webp',
        ],
        [
            'title' => __('advantages.CHOOSE_REASON_4_TITLE'),
            'text' => __('advantages.CHOOSE_REASON_4_DESCRIPTION'),
            'icon' => '/img/advantages/advanced-trading-technology.webp',
        ],
        [
            'title' => __('advantages.CHOOSE_REASON_5_TITLE'),
            'text' => __('advantages.CHOOSE_REASON_5_DESCRIPTION'),
            'icon' => '/img/advantages/easy-registration-process.webp',
        ],
        [
            'title' => __('advantages.CHOOSE_REASON_6_TITLE'),
            'text' => __('advantages.CHOOSE_REASON_6_DESCRIPTION'),
            'icon' => '/img/advantages/reliable-funding-methods.webp',
        ],
        [
            'title' => __('advantages.CHOOSE_REASON_7_TITLE'),
            'text' => __('advantages.CHOOSE_REASON_7_DESCRIPTION'),
            'icon' => '/img/advantages/premium-trading-conditions.webp',
        ],
        [
            'title' => __('advantages.CHOOSE_REASON_8_TITLE'),
            'text' => __('advantages.CHOOSE_REASON_8_DESCRIPTION'),
            'icon' => '/img/advantages/multilingual-customer-support.webp',
        ],
    ];
@endphp

<section class="why-choose-section">
    <div class="container">
        <div class="row text-center container m-auto d-felx justify-content-evenly">
            <h2 class="text-secondary">{{ $title ?? __('aboutus.WHY_TRADE_WITH_XS') }}</h2>
            <div class="row my-5">
                @foreach ($items as $item)
                    <div class="col-lg-6 col-md-6 col-10 mx-auto my-4">
                        <img src="{{ asset($item['icon']) }}" class="mb-4 img-why"
                            alt="{{ str_replace(':', '', $item['title']) }}">
                        <h5 class="text-secondary">{{ str_replace(':', '', $item['title']) }}</h5>
                        <br>
                        <p class="text-muted col-12 col-md-8 col-lg-8 m-auto">{{ $item['text'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
