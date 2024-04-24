{{-- <section class="sub-market-banner position-relative overflow-hidden">
    <div class="container h-100 d-flex flex-column justify-content-center">
        <div class="row justify-content-between h-100">
            <div class="col-lg-6 col-12 text-white text-md-start text-center mb-0 banner-content">
                <div class="d-flex flex-column justify-content-center w-100 h-100">
                    <h2 class="py-2 text-lg-start text-center">{{ __('markets.COMMODITIES') }}</h2>
                    <p class="text-white py-2 text-lg-start text-center text-capitalize">{!! __('markets.EXPERIENCE_THE_WORLD_OF_COMMODITIES') !!}</p>
                    <div class="justify-content-center d-flex justify-content-lg-start ">
                        <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1" target="_blank"
                            class="btn button-style-white justify-content-center py-3 px-5">
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="me-3"><img src="{{ asset('/svgs/join-us.svg') }}" class="btn-icon"
                                        alt="Join XS Trades" style="object-fit: contain;"></span>
                                <span class="text-white fw-700"> {{ __('homepage.JOIN_XS') }}</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 top-0 h-100 py-4 justify-content-center justify-content-lg-start d-flex flex-row-reverse end-lg-0 p-0  desktop-banner flex-wrap align-content-center"
                style="height : 250px">
                <img src="{{ asset('/img/Market/new-banner/commodities.svg?v1') }}" class="img-fluid"
                    alt="{{ __('markets.COMMODITIES') }}"
                    style="width: auto; min-height:85%;
                    max-height:85%!important">
            </div>
        </div>
    </div>
</section> --}}

@include('layouts.banner', [
    'bannerTitle' => __('markets.COMMODITIES'),
    'bannerDescription' => __('markets.EXPERIENCE_THE_WORLD_OF_COMMODITIES'),
    'bannerImage' => asset('/img/market-icons/banners/commodities.png'),
    'mobileBanner' => asset('/img/market-icons/banners/commodities-mobile.png'),
])

<section class="grey-bg">
    <div class="container py-3">
        <div class="col-lg-12 col-md-12 col-sm-12 ">
            <div class="container py-4">
                {{-- <div class="row mb-4 flex-column-reverse-sm">
                    <div class="col-lg-12 col-sm-12">
                        <div class="row">
                            <h2 class="col-12 text-center text-navy text-capitalize">
                                {!! __('markets.EXPERIENCE_THE_WORLD_OF_COMMODITIES') !!}</h2>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-12 col-sm-12">
                    <div class="row">
                        <p class="col-12 text-center mb-3 text-secondary">
                            {{ __('markets.EXPERIENCE_THE_WORLD_OF_COMMODITIES_DESC') }}</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class=" pt-4 d-flex justify-content-center">
                            <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1" target="_blank"
                                class="btn join-us-button py-3 px-5">
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="me-3"><img class="btn-icon"
                                            src="{{ asset('/homepage-svgs-ic/join-xs-ic.svg') }}" alt="Join XS Trades"
                                            style="width: 30px; object-fit: contain;"></span>
                                    <span>
                                        {{ __('markets.JOIN_XS') }}
                                    </span>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container py-3">
        <div class="col-lg-12 col-md-12 col-sm-12 ">
            <div class="container py-4">
                <div class="row mb-4 flex-column-reverse-sm">
                    <div class="col-lg-12 col-sm-12">
                        <div class="row">
                            <h2 class="col-12 text-center text-navy text-capitalize">
                                {{ __('markets.COMMODITIES_TRADING_WITH_XS') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <div class="row">
                        <p class="col-12 text-center mb-3">{{ __('markets.COMMODITIES_TRADING_WITH_XS_DESC') }}</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class=" pt-4 d-flex justify-content-center">
                            <a href="{{ route('contract_specs', ['lang' => App::getLocale(), 'account_type' => 'standard', 'slug' => 'commodities']) }}"
                                class="btn join-us-button py-3 px-5  d-flex justify-content-center">
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="me-3">
                                        <img class="btn-icon d-flex" src="{{ asset('/img/contract-cta.svg') }}"
                                            alt="message-us" style="width: 30px; object-fit: contain;"></span>
                                    @if (App::getLocale() == 'jp')
                                        <span>
                                            詳しい契約仕様を見る
                                        </span>
                                    @else
                                        <span>
                                            {{ __('messages.CONTRACT_SPECS') }}
                                        </span>
                                    @endif
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-5 text-md-start text-center">
    <div class="container mb-4 py-3 px-5 grey-bg border-radius-50">
        <div class="col-lg-12 col-md-12 col-sm-12 ">
            <div class="container py-4">
                <div class="row">
                    <p class="col-12 mb-3 text-primary fw-700">{{ __('markets.UNDERSTANDING_COMMODITIES') }}</p>
                </div>
                <div class="col-lg-12 pb-3 col-sm-12">
                    <div class="row">
                        <p class="col-12 mb-3">{!! __('markets.UNDERSTANDING_COMMODITIES_DESC_1') !!}</p>
                    </div>
                    <div class="row">
                        <p class="col-12 mb-3">{!! __('markets.UNDERSTANDING_COMMODITIES_DESC_2') !!}</p>
                    </div>
                    <div class="row">
                        <p class="col-12 mb-3">{!! __('markets.UNDERSTANDING_COMMODITIES_DESC_3') !!}</p>
                    </div>
                    {{-- <div class="row">
                        <h4 class="col-12 my-3 text-center text-secondary">{{ __('markets.MORE_INFO') }}</h4>
                    </div>
                    <div class="row justify-content-center">
                        <div class="pt-4 col-auto">
                            <a href="{{ route('regulations', ['lang' => App::getLocale()]) }}" class="btn join-us-button py-3 px-5">
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="me-3">
                                        <i class="fas fa-question quest-ic"></i></span>
                                    <span>
                                        {{ __('markets.HELP_CENTER') }}
                                    </span>
                                </div>
                
                            </a>
                        </div>
                    </div> --}}
                    {{-- <div class="row justify-content-center">
                            <div class="col-lg-3 pt-4 col-auto">
                                <button class="btn join-us-button py-2  w-100 btn-outline-primary defualt-btn">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="me-3"><i class="fas fa-question quest-ic btn-icon"></i></span>
                                        <span>
                                            {{ __('markets.HELP_CENTER') }}
                                        </span>
                                    </div>
                
                                </button>
                            </div>
                        </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
