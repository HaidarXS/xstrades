<section id="assets-section" class="mb-5 new position-relative">
    <div class="container section-assets shadow pt-5 px-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <ul class="nav nav-pills mb-3 d-flex justify-content-center gap-2 overflow-x-scroll pb-3 d-flex justify-content-between align-items-end flex-nowrap"
                    id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-forex-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-forex" type="button" role="tab" aria-controls="pills-forex"
                            aria-selected="true">{!! __('new-home.FOREX') !!}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-metals-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-metals" type="button" role="tab" aria-controls="pills-metals"
                            aria-selected="false">{!! __('new-home.METALS') !!}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-shares-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-shares" type="button" role="tab" aria-controls="pills-shares"
                            aria-selected="false">{!! __('new-home.SHARES') !!}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-energy-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-energy" type="button" role="tab" aria-controls="pills-energy"
                            aria-selected="false">{!! __('new-home.ENERGY') !!}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-futures-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-futures" type="button" role="tab" aria-controls="pills-futures"
                            aria-selected="false">{!! __('new-home.FUTURES') !!}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-crypto-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-crypto" type="button" role="tab" aria-controls="pills-crypto"
                            aria-selected="false">{!! __('new-home.CRYPTO') !!}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-indices-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-indices" type="button" role="tab" aria-controls="pills-indices"
                            aria-selected="false">{!! __('new-home.INDICES') !!}</button>
                    </li>
                    <li class="nav-item my-0" role="presentation">
                        <button class="nav-link" id="pills-commodities-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-commodities" type="button" role="tab"
                            aria-controls="pills-commodities" aria-selected="false">{!! __('new-home.COMMODITIES') !!}</button>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row py-4">
            <div class="col-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-forex" role="tabpanel"
                        aria-labelledby="pills-forex-tab">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-7 col-12 d-flex align-items-center">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="text-darkgrey mb-0 text-lg-start text-center">
                                            {!! __('new-home.FOREX_TRADING') !!}</h2>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-darkgrey my-4 text-lg-start text-center ">
                                            {!! __('new-home.FOREX_DESC') !!}
                                        </p>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center justify-content-lg-start">
                                        @include('new-homepage-sections.components.learn-more', [
                                            'link' => route('markets', [
                                                'lang' => App::getLocale(),
                                                'tab' => 'forex',
                                            ]),
                                        ])
                                    </div>
                                    <div class="col-12 col-lg-6 d-flex justify-content-center d-lg-none">
                                        <img class="img-fluid-assets"
                                            src="{{ asset('/img/homepage/new-assets/forex.jpg') }}" alt="Forex">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 d-lg-flex d-none">
                                <img class="img-fluid-assets" src="{{ asset('/img/homepage/new-assets/forex.jpg') }}"
                                    alt="Forex">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-metals" role="tabpanel" aria-labelledby="pills-metals-tab">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-7 col-12 d-flex align-items-center">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="text-darkgrey mb-0 text-lg-start text-center">
                                            {!! __('new-home.METALS_TRADING') !!}</h2>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-darkgrey my-4 text-lg-start text-center">
                                            {!! __('new-home.METALS_DESC') !!}</p>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center justify-content-lg-start">
                                        @include('new-homepage-sections.components.learn-more', [
                                            'link' => route('markets', [
                                                'lang' => App::getLocale(),
                                                'tab' => 'metals',
                                            ]),
                                        ])
                                    </div>
                                    <div class="col-12 col-lg-6 d-flex justify-content-center d-lg-none">
                                        <img class="img-fluid-assets"
                                            src="{{ asset('/img/homepage/new-assets/metals.jpg') }}" alt="metals">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 d-lg-flex d-none">
                                <img class="img-fluid-assets" src="{{ asset('/img/homepage/new-assets/metals.jpg') }}"
                                    alt="metals">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-shares" role="tabpanel" aria-labelledby="pills-shares-tab">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-7 col-12 d-flex align-items-center">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="text-darkgrey mb-0 text-lg-start text-center">
                                            {!! __('new-home.SHARES_TRADING') !!}</h2>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-darkgrey my-4 text-lg-start text-center">
                                            {!! __('new-home.SHARES_DESC') !!}</p>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center justify-content-lg-start">
                                        @include('new-homepage-sections.components.learn-more', [
                                            'link' => route('markets', [
                                                'lang' => App::getLocale(),
                                                'tab' => 'shares',
                                            ]),
                                        ])
                                    </div>
                                    <div class="col-12 col-lg-6 d-flex justify-content-center d-lg-none">
                                        <img class="img-fluid-assets"
                                            src="{{ asset('/img/homepage/new-assets/shares.jpg') }}" alt="shares">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 d-lg-flex d-none">
                                <img class="img-fluid-assets" src="{{ asset('/img/homepage/new-assets/shares.jpg') }}"
                                    alt="shares">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-energy" role="tabpanel" aria-labelledby="pills-energy-tab">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-7 col-12 d-flex align-items-center">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="text-darkgrey mb-0 text-lg-start text-center">
                                            {!! __('new-home.ENERGY_TRADING') !!}</h2>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-darkgrey my-4 text-lg-start text-center">
                                            {!! __('new-home.ENERGY_DESC') !!}</p>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center justify-content-lg-start">
                                        @include('new-homepage-sections.components.learn-more', [
                                            'link' => route('markets', [
                                                'lang' => App::getLocale(),
                                                'tab' => 'energy',
                                            ]),
                                        ])
                                    </div>
                                    <div class="col-12 col-lg-6 d-flex justify-content-center d-lg-none">
                                        <img class="img-fluid-assets"
                                            src="{{ asset('/img/homepage/new-assets/energy.jpg') }}" alt="energy">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 d-lg-flex d-none">
                                <img class="img-fluid-assets" src="{{ asset('/img/homepage/new-assets/energy.jpg') }}"
                                    alt="enery">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-futures" role="tabpanel"
                        aria-labelledby="pills-futures-tab">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-7 col-12 d-flex align-items-center">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="text-darkgrey mb-0 text-lg-start text-center">
                                            {!! __('new-home.FUTURES_TRADING') !!}</h2>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-darkgrey my-4 text-lg-start text-center">
                                            {!! __('new-home.FUTURES_DESC') !!}</p>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center justify-content-lg-start">
                                        @include('new-homepage-sections.components.learn-more', [
                                            'link' => route('markets', [
                                                'lang' => App::getLocale(),
                                                'tab' => 'futures',
                                            ]),
                                        ])
                                    </div>
                                    <div class="col-12 col-lg-6 d-flex justify-content-center d-lg-none">
                                        <img class="img-fluid-assets"
                                            src="{{ asset('/img/homepage/new-assets/futures.jpg') }}" alt="futures">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 d-lg-flex d-none">
                                <img class="img-fluid-assets"
                                    src="{{ asset('/img/homepage/new-assets/futures.jpg') }}" alt="futures">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-crypto" role="tabpanel" aria-labelledby="pills-crypto-tab">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-7 col-12 d-flex align-items-center">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="text-darkgrey mb-0 text-lg-start text-center">
                                            {!! __('new-home.CRYPTO_TRADING') !!}</h2>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-darkgrey my-4 text-lg-start text-center">
                                            {!! __('new-home.CRYPTO_DESC') !!}</p>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center justify-content-lg-start">
                                        @include('new-homepage-sections.components.learn-more', [
                                            'link' => route('markets', [
                                                'lang' => App::getLocale(),
                                                'tab' => 'crypto',
                                            ]),
                                        ])
                                    </div>
                                    <div class="col-12 col-lg-6 d-flex justify-content-center d-lg-none">
                                        <img class="img-fluid-assets"
                                            src="{{ asset('/img/homepage/new-assets/crypto.jpg') }}" alt="crypto">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 d-lg-flex d-none">
                                <img class="img-fluid-assets"
                                    src="{{ asset('/img/homepage/new-assets/crypto.jpg') }}" alt="crypto">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-indices" role="tabpanel"
                        aria-labelledby="pills-indices-tab">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-7 col-12 d-flex align-items-center">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="text-darkgrey mb-0 text-lg-start text-center">
                                            {!! __('new-home.INDICES_TRADING') !!}</h2>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-darkgrey my-4 text-lg-start text-center">
                                            {!! __('new-home.INDICES_DESC') !!}</p>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center justify-content-lg-start">
                                        @include('new-homepage-sections.components.learn-more', [
                                            'link' => route('markets', [
                                                'lang' => App::getLocale(),
                                                'tab' => 'indices',
                                            ]),
                                        ])
                                    </div>
                                    <div class="col-12 col-lg-6 d-flex justify-content-center d-lg-none">
                                        <img class="img-fluid-assets"
                                            src="{{ asset('/img/homepage/new-assets/indices.jpg') }}" alt="indices">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 d-lg-flex d-none">
                                <img class="img-fluid-assets"
                                    src="{{ asset('/img/homepage/new-assets/indices.jpg') }}" alt="indices">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-commodities" role="tabpanel"
                        aria-labelledby="pills-commodities-tab">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-7 col-12 d-flex align-items-center">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="text-darkgrey mb-0 text-lg-start text-center">
                                            {!! __('new-home.COMMODITIES_TRADING') !!}</h2>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-darkgrey my-4 text-lg-start text-center">
                                            {!! __('new-home.COMMODITIES_DESC') !!}</p>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center justify-content-lg-start">
                                        @include('new-homepage-sections.components.learn-more', [
                                            'link' => route('markets', [
                                                'lang' => App::getLocale(),
                                                'tab' => 'commodities',
                                            ]),
                                        ])
                                    </div>
                                    <div class="col-12 col-lg-6 d-flex justify-content-center d-lg-none">
                                        <img class="img-fluid-assets"
                                            src="{{ asset('/img/homepage/new-assets/commodities.jpg') }}"
                                            alt="commodities">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 d-lg-flex d-none">
                                <img class="img-fluid-assets"
                                    src="{{ asset('/img/homepage/new-assets/commodities.jpg') }}" alt="commodities">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
