@php
    $partners = [
        [
            'title' => __('homepage.MULTI_ASSET_LIQUIDITY'),
            'icon' => '/svgs/multiAssetLiquidity.svg',
        ],
        [
            'title' => __('homepage.ADVANCED_TECHNOLOGY'),
            'icon' => '/svgs/advtech.svg',
        ],
        [
            'title' => __('homepage.EXTENSIVE_EXPERIENCE'),
            'icon' => '/svgs/extensiveExp.svg',
        ],

        ['title' => __('homepage.TRAILORED_SOLUTIONS'), 'icon' => '/svgs/tailoredSol.svg'],
    ];
@endphp
<div class="py-5 market-leader section-reveal bg-light">
    <div class="container">
        <h2 class="size-40 my-lg-5 mt-3" style="text-align:center;color:#01337F;">
            {{ __('homepage.CONNECT_WITH_A_PRIME_INSTITUTIONAL_BROKER') }}
        </h2>
        <div class="row justify-content-center my-lg-5 my-3">
            @foreach ($partners as $partner)
                <div class="col-xl-3 col-md-3 col-sm-6 col-10 mt-lg-0 mt-4">
                    <div class="px-lg-0 px-md-2 px-5 text-center">
                        <div class="row text-center">
                            <div class="col-lg-1 col-12 mb-2 mb-md-0 p-0">
                                <img src="{{ asset($partner['icon']) }}" alt="{{ $partner['title'] }}" style="height:20px; width:20px;">
                            </div>
                            <div class="col-lg-11 col-12 p-0">
                                <p class="mb-0 fw-700 partner-text-align px-3"> {{ $partner['title'] }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
        <div class="row justify-content-center my-lg-4 mt-5">
            <div class="col-lg-10">
                <p class="text-secondary text-center text-partner">
                    <b>
                        {{ __('homepage.DISCOVER_HOW_OUR_INSTITUTIONAL_SOLUTIONS_WILL_HELP_YOU_IMPROVE_YOUR_BUSINESS') }}
                    </b>
                  
                </p>
            </div>
        </div>
    </div>
</div>
