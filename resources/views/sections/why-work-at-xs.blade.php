@php
    $items = [
        [
            'title' => __('careers.CHOOSE_REASON_1_TITLE'),
            'text' => __('careers.CHOOSE_REASON_1_DESCRIPTION'),
            'icon' => '/img/careers/collaborative-culture.webp',
        ],
        [
            'title' => __('careers.CHOOSE_REASON_2_TITLE'),
            'text' => __('careers.CHOOSE_REASON_2_DESCRIPTION'),
            'icon' => '/img/careers/profesionnal-growth.webp',
        ],
        [
            'title' => __('careers.CHOOSE_REASON_3_TITLE'),
            'text' => __('careers.CHOOSE_REASON_3_DESCRIPTION'),
            'icon' => '/img/careers/cutting-edge-technology.webp',
        ],
        [
            'title' => __('careers.CHOOSE_REASON_4_TITLE'),
            'text' => __('careers.CHOOSE_REASON_4_DESCRIPTION'),
            'icon' => '/img/careers/impactfull-work.webp',
        ],
        [
            'title' => __('careers.CHOOSE_REASON_5_TITLE'),
            'text' => __('careers.CHOOSE_REASON_5_DESCRIPTION'),
            'icon' => '/img/careers/competitive-compensation-and-benefits.webp',
        ],
        [
            'title' => __('careers.CHOOSE_REASON_6_TITLE'),
            'text' => __('careers.CHOOSE_REASON_6_DESCRIPTION'),
            'icon' => '/img/careers/work_life-balance.webp',
        ],
    ];
@endphp

<section class="pt-5 why-choose-section">
    <div class="container">
        <div class="row text-center">
            <h2 class="text-secondary">{{ $title ?? __('aboutus.WHY_WORK_AT_XS') }}</h2>
        </div>
        <div class="row justify-content-center align-items-center my-5">
            @foreach ($items as $item)
                <div class="col-lg-4 col-md-6 col-sm-10 col-12 my-4">
                    <div class="text-center">
                        <img src="{{ asset($item['icon']) }}" class="mb-4 img-why" alt="{{ str_replace(':', '', $item['title']) }}">
                        <h5 class="text-secondary">{{ str_replace(':', '', $item['title']) }}</h5>
                        <br>
                        <p class="text-muted mx-5">{{ $item['text'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

