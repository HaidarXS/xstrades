@include('layouts.banner', [
    'bannerTitle' => __('markets.METALS'),
    'bannerDescription' => __('markets.UNLOCK_THE_POTENTIAL'),
    'bannerImage' => asset('/img/market-icons/banners/metals.png'),
    'mobileBanner' => asset('/img/market-icons/banners/metals-mobile.png'),
])

<section class="grey-bg">
    <div class="container py-3">
        <div class="col-lg-12 col-md-12 col-sm-12 ">
            <div class="container py-4">
                {{-- <div class="row mb-4 flex-column-reverse-sm">
                    <div class="col-lg-12 col-sm-12">
                        <div class="row">
                            <h2 class="col-12 text-center text-navy text-capitalize">
                                {{ __('markets.UNLOCK_THE_POTENTIAL') }}</h2>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-12 col-sm-12">
                    <div class="row">
                        <p class="col-12 text-center mb-3 text-secondary">{!! __('markets.METALS_DESC') !!}</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="pt-4 d-flex justify-content-center">
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
                                {{ __('markets.METALS_TRADING_WITH_XS') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 pb-5 col-sm-12">
                    <div class="row">
                        <p class="col-12 text-center mb-3">{!! __('markets.METALS_TRADING_WITH_XS_DESC') !!}</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class=" pt-4 d-flex justify-content-center">
                            <a href="{{ route('contract_specs', ['lang' => App::getLocale(), 'account_type' => 'standard', 'slug' => 'metals']) }}"
                                class="btn join-us-button py-3 px-5">
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
                    <p class="col-12 mb-3 text-primary fw-700">{{ __('markets.UNDERSTADING_METALS') }}</p>
                </div>
                <div class="col-lg-12 pb-3 col-sm-12">
                    <div class="row">
                        <p class="col-12 mb-3">{{ __('markets.UNDERSTADING_METALS_DESC_1') }}</p>
                    </div>
                    <div class="row">
                        <p class="col-12 mb-3">{{ __('markets.UNDERSTADING_METALS_DESC_2') }}</p>
                    </div>
                    <div class="row">
                        <p class="col-12 mb-3">{{ __('markets.UNDERSTADING_METALS_DESC_3') }}</p>
                    </div>
                    <div class="row">
                        <p class="col-12 mb-3">{{ __('markets.UNDERSTADING_METALS_DESC_4') }}</p>
                    </div>
                    <div class="row">
                        <p class="col-12 mb-3">{{ __('markets.UNDERSTADING_METALS_DESC_5') }}</p>
                    </div>
                    {{-- <div class="row">
                        <h4 class="col-12 my-3 text-center text-secondary">{{ __('markets.MORE_INFO') }}</h4>
                    </div>
                    <div class="row justify-content-center">
                        <div class="pt-4 d-flex justify-content-center">
                            <a href="{{ route('company', ['lang' => App::getLocale(), 'tab' => 'contact']) }}" class="btn join-us-button py-3 px-5">
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
                </div>
            </div>
        </div>

    </div>


</section>
