@php
    $items = [
        [
            'title' => __('partners.CHOOSE_REASON_1_TITLE'),
            'text' => __('partners.CHOOSE_REASON_1_DESCRIPTION'),
            'icon' => '/img/hoko/trust-global-broker.svg',
        ],
        [
            'title' => __('partners.CHOOSE_REASON_2_TITLE'),
            'text' => __('partners.CHOOSE_REASON_2_DESCRIPTION'),
            'icon' => '/img/hoko/award-winning.svg',
        ],
        [
            'title' => __('partners.CHOOSE_REASON_3_TITLE'),
            'text' => __('partners.CHOOSE_REASON_3_DESCRIPTION'),
            'icon' => '/img/hoko/quickandeasy.svg',
        ],
        [
            'title' => __('partners.CHOOSE_REASON_4_TITLE'),
            'text' => __('partners.CHOOSE_REASON_4_DESCRIPTION'),
            'icon' => '/img/hoko/multiple-funding.svg',
        ],
        [
            'title' => __('partners.CHOOSE_REASON_5_TITLE'),
            'text' => __('partners.CHOOSE_REASON_5_DESCRIPTION'),
            'icon' => '/img/hoko/advanced-trading.svg',
        ],
        [
            'title' => __('partners.CHOOSE_REASON_6_TITLE'),
            'text' => __('partners.CHOOSE_REASON_6_DESCRIPTION'),
            'icon' => '/img/hoko/multiple-account.svg',
        ],
        [
            'title' => __('partners.CHOOSE_REASON_7_TITLE'),
            'text' => __('partners.CHOOSE_REASON_7_DESCRIPTION'),
            'icon' => '/img/hoko/premium-cond.svg',
        ],
        [
            'title' => __('partners.CHOOSE_REASON_8_TITLE'),
            'text' => __('partners.CHOOSE_REASON_8_DESCRIPTION'),
            'icon' => '/img/hoko/fastandfair.svg',
        ],
        [
            'title' => __('partners.CHOOSE_REASON_9_TITLE'),
            'text' => __('partners.CHOOSE_REASON_9_DESCRIPTION'),
            'icon' => '/img/hoko/multi-lang.svg',
        ],
    ];
@endphp

<section class="pt-5 why-choose-section">
    <div class="container">
        <div class="row text-center container m-auto d-felx justify-content-evenly">
            <h2 class="text-secondary">{{ $title ?? __('hoko-trading.WHY_CHOOSE_COPY') }}</h2>
            <div class="row my-5">
                @foreach ($items as $item)
                    <div class="col-lg-4 col-md-6 col-10 mx-auto my-4">
                        <img src="{{ asset($item['icon']) }}" class="mb-4 img-why"
                            alt="{{ str_replace(':', '', $item['title']) }}">
                        <h6 class="text-secondary">{{ str_replace(':', '', $item['title']) }}</h6>
                        <p class="text-muted col-8 m-auto">{{ $item['text'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
