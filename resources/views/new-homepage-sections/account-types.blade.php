@php
    $proType = __('new-home.PRO');
    $standardType = __('new-home.STANDARD');
    $accounts = [
        [
            'account-type' => __('new-home.CENT'),
            'item-1' => __('new-home.SMALLEST_LOT_SIZE'),
            'item-2' => __('new-home.LEVERAGE1'),
            'item-3' => __('new-home.SPREAD1'),
            'item-4' => __('new-home.ZERO_COMMISSIONS'),
            'item-5' => __('new-home.AVAILABLE_MT5'),
            'item-6' => __('new-home.NO_MINIMUM_DEPOSIT'),
            'link' => route('account_type_details', ['lang' => App::getLocale(), 'type' => 'preferred', 'account_type' => 'cent-account']), 
        ],
        [
            'account-type' => __('new-home.MICRO'),
            'item-1' => __('new-home.MICRO_LOT_SIZE'),
            'item-2' => __('new-home.LEVERAGE1'),
            'item-3' => __('new-home.SPREAD1'),
            'item-4' => __('new-home.ZERO_COMMISSIONS'),
            'item-5' => __('new-home.AVAILABLE_MT5'),
            'item-6' => __('new-home.NO_MINIMUM_DEPOSIT'),
            'link' => route('account_type_details', ['lang' => App::getLocale(), 'type' => 'preferred', 'account_type' => 'micro-account']),
        ],
        [
            'account-type' => __('new-home.STANDARD'),
            'item-1' => __('new-home.POPULAR_ACCOUNT_TYPE'),
            'item-2' => __('new-home.LEVERAGE2'),
            'item-3' => __('new-home.SPREAD1'),
            'item-4' => __('new-home.ZERO_COMMISSIONS'),
            'item-5' => __('new-home.AVAILABLE_MT4_MT5'),
            'item-6' => __('new-home.NO_MINIMUM_DEPOSIT'),
            'link' => route('account_type_details', ['lang' => App::getLocale(), 'type' => 'preferred', 'account_type' => 'standard-account']),
        ],
        [
            'account-type' => __('new-home.PRO'),
            'item-1' => __('new-home.LOWEST_TRADING_COST'),
            'item-2' => __('new-home.LEVERAGE2'),
            'item-3' => __('new-home.SPREAD2'),
            'item-4' => __('new-home.ZERO_COMMISSIONS'),
            'item-5' => __('new-home.AVAILABLE_MT4_MT5'),
            'item-6' => __('new-home.MINIMUM_DEPOSIT1'),
            'link' => route('account_type_details', ['lang' => App::getLocale(), 'type' => 'professional', 'account_type' => 'pro-account']),
        ],
        [
            'account-type' => __('new-home.ELITE'),
            'item-1' => __('new-home.LOWEST_RAW_SPREAD'),
            'item-2' => __('new-home.LEVERAGE2'),
            'item-3' => __('new-home.SPREAD3'),
            'item-4' => __('new-home.COMMISSIONS1'),
            'item-5' => __('new-home.AVAILABLE_MT4_MT5'),
            'item-6' => __('new-home.MINIMUM_DEPOSIT1'),
            'link' => route('account_type_details', ['lang' => App::getLocale(), 'type' => 'professional', 'account_type' => 'elite-account']),
        ],
    ];
@endphp
<section id="account-section" class="my-5 new">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title mt-0">{!! __('new-home.ACCOUNT_TYPES') !!}</h2>
            </div>
            <div class="col-12 py-3">
                <p class="section-subtitle">{!! __('new-home.ACCOUNT_TYPES_DESC') !!}</p>
            </div>
            <div class="col-12">
                <div
                    class="row pb-4 d-flex justify-content-lg-between flex-xl-wrap flex-nowrap gap-2 px-md-0 px-3 overflow-x-scroll mb-4">
                    @foreach ($accounts as $account)
                        <div class="card account-types-card col-xl-auto col-lg-3 col-md-4 col-8 px-0 card-hover"
                            data-aos="zoom-in-down">
                            <div class="card-header py-3">
                                @if ($account['account-type'] == $proType || $account['account-type'] == $standardType)
                                    <div
                                        class="popular position-absolute top-0  @if (App::getLocale() == 'ar') end-0-cust @else start-0 @endif">
                                        <img src="{{ asset('/img/homepage/account-types-ic/popular.svg') }}"
                                            alt="popular">
                                    </div>
                                @endif
                                <p class="text-secondary fw-700 mb-0 account-type-title">{{ $account['account-type'] }}</p>
                            </div>
                            <div class="card-body">
                                <ol class="marker-none px-0">
                                    @for ($i = 1; $i <= 6; $i++)
                                        <li class="py-1 row text-start">
                                            <span
                                                class="col-1 col-auto px-0 @if (App::getLocale() == 'ar') me-1 ms-2 @else ms-3 @endif py-1">
                                                <img src="{{ asset('/img/homepage/account-types-ic/filled-green-checks.svg') }}"
                                                    alt="check">
                                            </span>
                                            <span
                                                class="text-darkgrey list-txt col-10 px-0 d-flex align-items-center">{{ $account['item-' . $i] }}</span>
                                        </li>
                                    @endfor

                                </ol>
                                <hr>
                                <a href="{{ $account['link'] }}" class="btn green-link">{{ __('new-home.LEARN_MORE') }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @include('new-homepage-sections.components.learn-more', [
                'link' => route('account_types', ['lang' => App::getLocale()]),
            ])
        </div>
    </div>
</section>
