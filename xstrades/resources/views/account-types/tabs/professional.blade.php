<section id="professional">
            <div class="row">
                <div class="col-12 text-center mt-5 mb-3">
                    <h1 class="text-secondary text-center fw-700">{{ __('account_types.PROFESSIONAL_ACCOUNT_TYPES') }}
                    </h1>
                </div>

                <div class="col-md-4  py-5">
                    <div
                        class="w-100 h-100 d-flex flex-column  border-radius-30 overflow-hidden border border-1 defualt-opacity shadow">
                        <div class="bg-primary text-white p-4">
                            <h2 class="text-center fw-700  text-uppercase">{{ __('account_types.ELITE') }}</h2>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="bg-gray p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.TRADING_PLATFORM') }}
                                </h5>
                                <div>{{ __('account_types.MT4') }} , {{ __('account_types.MT5') }}</div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.AVERAGE_SPREAD') }}
                                </h5>
                                <div>0.1</div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="bg-gray p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.COMMISSIONS') }}
                                </h5>
                                <div>{{ __('account_types.3_PER_SIDE') }}</div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.INSTRUMENTS') }}
                                </h5>
                                <div>
                                    {{ __('account_types.CURRENCIES') }} <br />
                                    {{ __('account_types.METALS') }}<br />
                                    {{ __('account_types.CRYPTO') }}<br />
                                    {{ __('account_types.ENERGY') }}<br />
                                    {{ __('account_types.INDICES') }}<br />
                                    {{ __('account_types.FUTURES') }}<br />
                                    {{ __('account_types.SHARES') }}<br />
                                    {{ __('account_types.COMMODITIES') }}
                                </div>
                            </div>
                        </div>

                        <div class="my-5 text-center">
                            <a href="{{ route('account_type_details', ['lang' => App::getLocale(), 'type' => 'professional', 'account_type' => 'elite-account']) }}"
                                class="text-secondary text-decoration-none text-center">
                                {{ __('account_types.MORE_DETAILS') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div
                        class="w-100 h-100 d-flex flex-column  border-radius-30 overflow-hidden border border-1 defualt-opacity shadow">
                        <img class="ribbon" src="{{ asset('/img/popular-ribbon.svg') }}" alt="Popular">
                        <div class="bg-primary text-white p-4">
                            <h2 class="text-center fw-700  text-uppercase">{{ __('account_types.PRO') }}</h2>
                        </div>
                        <div class="mx-4 my-4">
                            <div class="bg-gray p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.TRADING_PLATFORM') }}
                                </h5>
                                <div>{{ __('account_types.MT4') }} , {{ __('account_types.MT5') }}</div>
                            </div>
                        </div>
                        <div class="mx-4 my-4">
                            <div class="p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.AVERAGE_SPREAD') }}
                                </h5>
                                <div>0.7</div>
                            </div>
                        </div>
                        <div class="mx-4 my-4">
                            <div class="bg-gray p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.COMMISSIONS') }}
                                </h5>
                                <div>
                                    @if (session()->get('locale') == 'jp')
                                        <span class="">無料</span>
                                    @else
                                        <span class="text-danger fw-700 fs-22">X</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="mx-4 my-4">
                            <div class="p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.INSTRUMENTS') }}
                                </h5>
                                <div>
                                    {{ __('account_types.CURRENCIES') }} <br />
                                    {{ __('account_types.METALS') }}<br />
                                    {{ __('account_types.CRYPTO') }}<br />
                                    {{ __('account_types.ENERGY') }}<br />
                                    {{ __('account_types.INDICES') }}<br />
                                    {{ __('account_types.FUTURES') }}<br />
                                    {{ __('account_types.SHARES') }}<br />
                                    {{ __('account_types.COMMODITIES') }}
                                </div>
                            </div>
                        </div>

                        <div class="my-5 text-center">
                            <a href="{{ route('account_type_details', ['lang' => App::getLocale(), 'type' => 'professional', 'account_type' => 'pro-account']) }}"
                                class="text-secondary text-decoration-none text-center">
                                {{ __('account_types.MORE_DETAILS') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 py-5">
                    <div
                        class="w-100 h-100 d-flex flex-column  border-radius-30 overflow-hidden border border-1 defualt-opacity shadow">
                        <div class="bg-primary text-white p-4">
                            <h2 class="text-center fw-700  text-uppercase">{{ __('account_types.VIP') }}</h2>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="bg-gray p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.TRADING_PLATFORM') }}
                                </h5>
                                <div>{{ __('account_types.MT5') }}</div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.AVERAGE_SPREAD') }}
                                </h5>
                                <div>0.1</div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="bg-gray p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.COMMISSIONS') }}
                                </h5>
                                <div>
                                    @if (session()->get('locale') == 'jp')
                                        <span class="">カスタマイズ可能</span>
                                    @else
                                        <span class="text-primary fw-700 fs-22">✓</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <div class="p-1 text-center">
                                <h5 class="text-primary">
                                    {{ __('account_types.INSTRUMENTS') }}
                                </h5>
                                <div>
                                    {{ __('account_types.CURRENCIES') }} <br />
                                    {{ __('account_types.METALS') }}<br />
                                    {{ __('account_types.CRYPTO') }}<br />
                                    {{ __('account_types.ENERGY') }}<br />
                                    {{ __('account_types.INDICES') }}<br />
                                    {{ __('account_types.FUTURES') }}<br />
                                    {{ __('account_types.SHARES') }}<br />
                                    {{ __('account_types.COMMODITIES') }}
                                </div>
                            </div>
                        </div>

                        <div class="my-5 text-center">
                            <a href="{{ route('account_type_details', ['lang' => App::getLocale(), 'type' => 'professional', 'account_type' => 'vip-account']) }}"
                                class="text-secondary text-decoration-none text-center">
                                {{ __('account_types.MORE_DETAILS') }}
                            </a>
                        </div>
                    </div>
                </div>

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
        </section>