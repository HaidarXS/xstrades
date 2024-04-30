<section id="platforms-section" class="my-5 new">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">{!! __('new-home.TRADING_PLATFORMS') !!}</h2>
            </div>
            <div class="col-12 py-3">
                <p class="section-subtitle">{!! __('new-home.TRADING_PLATFORMS_DESC') !!}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-6 p-3" data-aos="fade-down-left">
                <div class="row rounded-platform bg-green py-3 px-2 h-100">
                    <div class="col-md-4 col-6 py-2 d-flex align-items-center">
                        <img class="img-fluid" src="{{ asset('/img/homepage/mt4.svg') }}" alt="">
                    </div>
                    <div class="col-12 d-flex align-items-center">
                        <h4 class="text-white mb-0">{!! __('new-home.Metatrader4') !!}</h4>
                    </div>
                    <div class="col-12 py-2 d-flex align-items-center">
                        <div class="d-flex justify-content-start">
                            @include('new-homepage-sections.components.learn-more', [
                                'link' => route('mt4', ['lang' => App::getLocale()]),
                            ])
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-6 p-3" data-aos="fade-down-right">
                <div
                    class="row rounded-platform p-md-4 p-3 h-100 @if (App::getLocale() == 'ar') mt4-desc-ar @else mt4-desc @endif">
                    <div class="col-md-4 px-0 col-12">
                        <p class="text-darkgrey">{!! __('new-home.Metatrader4_DESC') !!}</p>
                    </div>
                    <div class="col-12 ps-0">
                        <p class=" m-0 fw-bold text-darkgrey">{!! __('new-home.AVAILABLE_ON') !!}</p>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 py-1 ps-0">
                        <img src="{{ asset('/img/homepage/devices.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9 col-6 p-3" data-aos="fade-down-left">
                <div
                    class="row rounded-platform p-md-4 p-3 h-100 @if (App::getLocale() == 'ar') mt5-desc-ar @else mt5-desc @endif">
                    <div class="col-md-4 col-12 px-0">
                        <p class="text-darkgrey">{!! __('new-home.Metatrader5_DESC') !!}</p>
                    </div>
                    <div class="col-12 ps-0">
                        <p class=" m-0 fw-bold text-darkgrey">{!! __('new-home.AVAILABLE_ON') !!}</p>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 py-1 ps-0">
                        <img src="{{ asset('/img/homepage/devices.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 p-3" data-aos="fade-down-right">
                <div class="row rounded-platform bg-blue py-3 px-2 h-100">
                    <div class="col-md-4 col-6 py-2 d-flex align-items-center">
                        <img class="img-fluid" src="{{ asset('/img/homepage/mt5.svg') }}" alt="">
                    </div>
                    <div class="col-12 d-flex align-items-center">
                        <h4 class="text-white mb-0">{!! __('new-home.Metatrader5') !!}</h4>
                    </div>

                    <div class="col-12 py-2 d-flex align-items-center">
                        <div class="d-flex justify-content-start">
                            @include('new-homepage-sections.components.learn-more', [
                                'link' => route('mt5', ['lang' => App::getLocale()]),
                            ])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
