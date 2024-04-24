@php
    $items = [
        [
            'text' => __('hoko-trading.FAMILIARIZE_INV'),
            'icon' => '/img/hoko/familiarize-inv.svg',
        ],
        [
            'text' => __('hoko-trading.PARTICIPATE_INV'),
            'icon' => '/img/hoko/participate-inv.svg',
        ],
        [
            'text' => __('hoko-trading.DIVERSIFY'),
            'icon' => '/img/hoko/diversify.svg',
        ],
        [
            'text' => __('hoko-trading.COMMUNITY'),
            'icon' => '/img/hoko/community.svg',
        ],
        [
            'text' => __('hoko-trading.TRADERS_INCREASE'),
            'icon' => '/img/hoko/traders-increase.svg',
        ],
        [
            'text' => __('hoko-trading.TRADERS_EARN'),
            'icon' => '/img/hoko/traders-earn.svg',
        ],
    ];
@endphp

<section class="row grey-bg py-5">
    <div class="container">
        <div class="row text-center container m-auto d-felx justify-content-evenly">
            <h2 class="text-secondary">{{ __('hoko-trading.WHY_USE_COPY') }}</h2>
            <div class="row">
                @foreach ($items as $item)
                    <div class="col-lg-4 col-md-6 col-10 mx-auto my-4">
                        <img src="{{ asset($item['icon']) }}" class="mb-4 img-dim" alt="">
                        <p class="text-secondary col-6 m-auto">{{ $item['text'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
