@php
    $devices = [
        [
            'title' => __('homepage.AVAILABLE_ON_THE'),
            'platform' => __('homepage.WEB'),
            'image' => asset('/img/laptop.png'),
            'alt' => 'web',
        ],
        [
            'title' => __('homepage.AVAILABLE_ON_THE'),
            'platform' => __('homepage.WINDOWS'),
            'image' => asset('/img/window.png'),
            'alt' => 'windows',
        ],
        [
            'title' => __('homepage.AVAILABLE_ON_THE'),
            'platform' => __('homepage.MAC'),
            'image' => asset('/img/mac.png'),
            'alt' => 'mac',
        ],
        [
            'title' => __('homepage.AVAILABLE_ON_THE'),
            'platform' => __('homepage.PLAY_STORE'),
            'image' => asset('/img/play.png'),
            'alt' => 'play store',
        ],
        [
            'title' => __('homepage.AVAILABLE_ON_THE'),
            'platform' => __('homepage.APP_STORE'),
            'image' => asset('/img/ios.png'),
            'alt' => 'app store',
        ],
    ];
@endphp

<div class="py-5 section-reveal">
    <h2 class="size-40 px-4" style="text-align:center;color:#01337F;margin-bottom:70px">
        {!! __('homepage.ACCESS_GLOBAL_MARKETS_FROM_THE_PALM_OF_YOUR_HAND') !!}
    </h2>
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-lg-8 mb-3">
                <div class="d-flex h-100 align-items-center">
                    <img src="{{ asset('/webp/devices.webp') }}"class="w-100" height="auto" width="auto" class="img-fluid
                        w-100" alt="Devices">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex flex-column h-100 ">
                    <p class="mb-3 text-lg-start text-center">
                        {{ __('homepage.TRADE_A_WIDE_RANGE_OF_ASSET') }}
                    </p>
                    <div class="row justify-content-center mt-5 mb-5">
                        <a href="{{ route('mt4', ['lang' => App::getLocale()]) }}" class="col-4 me-4 text-center">
                            <img class="img-fluid" src="{{ asset('/webp/mt4.webp') }}" height="auto"
                                width="auto" alt="download MT4">
                        </a>
                        <a href="{{ route('mt5', ['lang' => App::getLocale()]) }}" class="col-4 ms-4 text-center">
                            <img class="img-fluid" src="{{ asset('/webp/mt5.webp') }}" height="auto"
                                width="auto" alt="download MT5">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-5">
            @foreach ($devices as $device)
                <div class="col-lg-35 col-md-4 col-sm-12 col-9 mb-3 px-lg-1">
                    <div class="d-flex w-100 align-items-center h-100 ">
                        <img class="mx-4 mx-md-0 p-1" style="max-width:50px" src="{{ $device['image'] }}" alt="{{ $device['alt'] }}">
                        @if (session()->get('locale') == 'jp')
                            <p class="m-0 ms-2">
                                <span class="fw-700">{{ $device['platform'] }}</span><br />
                                {{ $device['title'] }}
                            </p>
                        @else
                            <p class="m-0 ms-2 platform-text">{{ $device['title'] }} <br /> <span
                                    class="fw-700">{{ $device['platform'] }}</span></p>
                        @endif

                    </div>
                </div>
            @endforeach
        </div>
        <div class="row justify-content-center">

            @include('layouts.button', [
                'text' => __('homepage.TRADING_PLATFORMS'),
                'link' => route('platforms', ['lang' => App::getLocale()]),
                'newTab' => false,
                'icon' => asset('/img/Icon-Metatrader.svg'),
            ])
        </div>
    </div>


</div>
