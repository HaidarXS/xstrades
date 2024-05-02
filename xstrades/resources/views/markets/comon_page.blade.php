{{-- @include('markets.banners.' .$tab. '_banner') --}}

@include('layouts.banner', [
    'bannerTitle' => __($tab . '.BANNER_TITLE'),
    'bannerDescription' => __($tab . '.BANNER_DESCRIPTION'),
    'bannerImage' => asset('/img/market-icons/banners/'. $tab .'.svg'),
    'mobileBanner' => asset('/img/market-icons/banners/' . $tab . '-mobile.webp'),
])

<section class="grey-bg">
    <div class="container py-3">
        <div class="col-lg-12 col-md-12 col-sm-12 ">
            <div class="container py-4">
                <div class="row mb-4 flex-column-reverse-sm">
                    <div class="col-lg-12 col-sm-12">
                        <div class="row">
                            <h2 class="col-12 text-center text-navy text-capitalize">
                                {!! __($tab . '.SECTION_1_TITLE') !!}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <div class="row justify-content-center">
                        <p class="col-lg-10 col-12 text-center mb-3">{!! __($tab . '.DESCRIPTION_1') !!}</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class=" pt-4 d-flex justify-content-center">
                            <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1" target="_blank"
                                class="btn join-us-button px-4 py-2">
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
                                {{ __($tab . '.SECTION_2_TITLE') }}
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 pb-5 col-sm-12">
                    <div class="row justify-content-center">
                        <p class="col-lg-10 col-12 text-center mb-3">{!! __($tab . '.DESCRIPTION_2') !!}</p>
                    </div>
                    {{-- <div class="row justify-content-center">
                        <div class=" pt-4 d-flex justify-content-center">
                            <a href="{{ route('contract_specs', ['lang' => App::getLocale()]) }}"
                                class="btn join-us-button px-4 py-2">
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
                    </div> --}}
                    <div class="col-12 my-3">
                        @include('sections.contract-specs-table', ['asset' => $asset])
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <section class="mb-5 text-md-start text-center">
    <div class="container mb-4 py-3 px-5 grey-bg border-radius-50">
        <div class="col-lg-12 col-md-12 col-sm-12 ">
            <div class="container py-4">
                <div class="row">
                    <p class="col-12 mb-3 text-primary fw-700">{{ __('forex.UNDERSTANDING_FOREX') }}</p>
                </div>
                <div class="col-lg-12 pb-3 col-sm-12">
                    <div class="row">
                        <p class="col-12 mb-3">{{ __('forex.UNDERSTANDING_FOREX_DESC_1') }}</p>
                    </div>
                    <div class="row">
                        <p class="col-12 mb-3">{!! __('forex.UNDERSTANDING_FOREX_DESC_2') !!}</p>
                    </div>
                    <div class="row">
                        <p class="col-12 mb-3">{!! __('forex.UNDERSTANDING_FOREX_DESC_3') !!}</p>
                    </div>
                    <div class="row">
                        <p class="col-12 mb-3">{!! __('forex.UNDERSTANDING_FOREX_DESC_4') !!}</p>
                    </div>
                    <div class="row">
                        <h4 class="col-12 my-3 text-center text-secondary">{{ __('markets.MORE_INFO') }}</h4>
                    </div>
                    <div class="row justify-content-center">
                        <div class="pt-4 col-auto">
                            <a href="{{ route('company', ['lang' => App::getLocale(), 'tab' => 'contact']) }}" class="btn join-us-button px-4 py-2">
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="me-3">
                                        <i class="fas fa-question quest-ic"></i></span>
                                    <span>
                                        {{ __('markets.HELP_CENTER') }}
                                    </span>
                                </div>
                
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    </div>
</section> --}}


<section class="bg-gray py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <h2 class="col-12 text-center text-navy text-capitalize">{{ __($tab . '.SECTION_3_TITLE') }}</h2>
            </div>
        </div>
        <div class="row justify-content-between mt-5">
            <div class="col-md-5">
                <div class="row">
                    @for ($i = 0; $i < floor($conditionCounts[$tab] / 2); $i++)
                        <div class="mb-5">
                            <h3 class="text-primary">{{ __($tab . '.TRADING_CONDITION_' . ($i + 1) . '_TITLE') }}</h3>
                            <p class="d-flex flex-column">{!! __($tab . '.TRADING_CONDITION_' . ($i + 1) . '_DESCRIPTION') !!}</p>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    @for ($i = floor($conditionCounts[$tab] / 2); $i < $conditionCounts[$tab]; $i++)
                        <div class="col-12 mb-5">
                            <h3 class="text-primary">{{ __($tab . '.TRADING_CONDITION_' . ($i + 1) . '_TITLE') }}</h3>
                            <p>{!! __($tab . '.TRADING_CONDITION_' . ($i + 1) . '_DESCRIPTION') !!}</p>
                        </div>
                    @endfor

                </div>
            </div>
        </div>
    </div>
</section>


<section class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <h2 class="col-12 text-center text-navy text-capitalize">{!! __($tab . '.FAQ') !!}</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion faq" id="faqacordion">
                    @for ($i = 0; $i < $faqCounts[$tab]; $i++)
                        <div class="accordion-item mb-5">
                            <h2 class="accordion-header" id="">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq--{{ $i + 1 }}" aria-expanded="false">
                                    {!! __($tab . '.FAQ_' . ($i + 1) . '_Q') !!}
                                </button>
                            </h2>
                            <div id="faq--{{ $i + 1 }}" class="accordion-collapse collapse"
                                aria-labelledby="faq--{{ $i + 1 }}" data-bs-parent="#faqacordion">
                                <div class="accordion-body">
                                    {!! __($tab . '.FAQ_' . ($i + 1) . '_A') !!}
                                </div>
                            </div>
                        </div>
                    @endfor


                </div>
            </div>
        </div>

    </div>
</section>
