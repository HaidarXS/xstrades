@php
    $globalProps = [
        [
            'title' => __('homepage.EASY_REGISTRATION'),
            'icon' => '/svgs/quick.svg',
        ],
        [
            'title' => __('homepage.GLOBAL_BROKER'),
            'icon' => '/svgs/globalBroker.svg',
        ],
        [
            'title' => __('homepage.FAST_FUNDING'),
            'icon' => '/svgs/quickAndEasy.svg',
        ],

        [
            'title' => __('homepage.MULTIPLE_ASSET'),
            'icon' => '/svgs/mA.svg',
        ],
        [
            'title' => __('homepage.HIGH_SPEED_TRADE'),
            'icon' => '/svgs/highSpeed.svg',
        ],

        [
            'title' => __('homepage.CUSTOMER_SUPPORT'),
            'icon' => '/svgs/support.svg',
        ],
    ];
@endphp


<div class="market-leader section-reveal">
    <h2 class="size-40" style="text-align:center;color:#01337F;margin-bottom:3rem">
        {{ __('homepage.CHOOSE_THE_GLOBAL_MARKER_LEADER') }}
    </h2>

    @if (session()->get('locale') == 'ar')
        <div class="container cust-center-container-ar">
        @elseif (session()->get('locale') == 'jp')
            <div class="container cust-center-container-jp">
            @elseif (session()->get('locale') == 'zh-Hans' || session()->get('locale') == 'zh-Hant')
                <div class="container cust-center-container-cn">
                @else
                    <div class="container cust-center-container">
    @endif
    <div class="row m-auto justify-content-center mb-3 mt-3">
        @foreach ($globalProps as $index => $prop)
            <div class="col-lg-6 col-10 mb-3 col-md-6 @if ($index == 0 || $index == 2 || $index == 4) col-xl-5 @else col-xl-6 @endif">
                <div class="w-100 d-flex align-items-center  justify-content-lg-start justify-content-center">
                    <img src="{{ asset($prop['icon']) }}" alt="{{ $prop['title'] }}"
                        style="aspect-ratio:1 / 1; width:20px;">
                    <p class="ms-2 fw-700 text-lg-left m-0 ms-4">{{ $prop['title'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

</div>
