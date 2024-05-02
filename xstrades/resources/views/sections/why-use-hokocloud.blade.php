@php
    $items = [
        [
            'text' => __('hoko-cloud.ADVANCED_PERFORMANCE'),
            'icon' => '/img/hoko/advanced_performance.svg',
        ],
        [
            'text' => __('hoko-cloud.ADVANCED_RISK'),
            'icon' => '/img/hoko/advanced_risk.svg',
        ],
        [
            'text' => __('hoko-cloud.CONSOLIDATED_REPORTING'),
            'icon' => '/img/hoko/conslidated_reporting.svg',
        ],
        [
            'text' => __('hoko-cloud.DIVERSIFICATION'),
            'icon' => '/img/hoko/diversification.svg',
        ],
        [
            'text' => __('hoko-cloud.TAKE_ADVANTAGE'),
            'icon' => '/img/hoko/take_advantage.svg',
        ],
        [
            'text' => __('hoko-cloud.DETERMINE_CAPITAL'),
            'icon' => '/img/hoko/determine_capital.svg',
        ],
    ];
@endphp

<section class="py-5">
    <div class="container">
        <div class="row text-center container m-auto d-felx justify-content-evenly">
            <h2 class="text-secondary">{{ __('hoko-cloud.WHY_USE_HOKOCLOUD') }}</h2>
            <div class="row my-5">
                @foreach ($items as $item)
                    <div class="col-lg-4 col-md-6 col-10 mx-auto my-4">
                        <img src="{{ asset($item['icon']) }}" class="mb-4 img-dim" alt="">
                        <p class="text-secondary col-6 m-auto text-bold">{{ $item['text'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
