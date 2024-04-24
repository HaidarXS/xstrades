<footer class="text-md-start text-center">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 d-flex flex-column">
                <a href="{{ route('home', ['lang' => App::getLocale()]) }}"><img id="footer-logo"
                        src="{{ asset('/img/xstrades-logo-light.webp') }}" height=""
                        width=""
                        class="img-fluid col-lg-5 col-md-4 mb-md-3 col-8 mb-3
                        m-auto-sm" alt="XSTrades.com"></a>
                <div class="row">
                    @if (App::getLocale() == 'jp')
                        <h4 class="text-navy text-capitalize fw-bold mt-3 center-footer-sm">
                            Let Us Connect</h4>
                    @else
                        <h4 class="text-navy text-capitalize fw-bold mt-3 center-footer-sm">
                            {{ __('messages.LET_US_CONNECT') }}</h4>
                    @endif


                    <div class="m-auto-sm col-lg-12 col-9">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{ __('social-media.FACEBOOK') }}" aria-label="social-media"
                                    rel="nofollow noopener" target="_blank" class="col fs-30 color-white ps-0"><img
                                        src="{{ asset('/img/sm-footer/facebook.svg') }}"
                                        alt="Facebook -  connect with XSTrades.com on Facebook"
                                        style="width:26px; height:26px;"></a>
                                <a href="{{ __('social-media.INSTAGRAM') }}" aria-label="social-media"
                                    rel="nofollow noopener" target="_blank" class="col fs-30 color-white"><img
                                        src="{{ asset('/img/sm-footer/instagram.svg') }}"
                                        alt="Insta - connect with XSTrades.com on Instagram"
                                        style="width:26px; height:26px;"></a>

                                <a href="{{ __('social-media.X') }}" aria-label="social-media" rel="nofollow noopener"
                                    target="_blank" class="col fs-30 color-white"><img src="{{ asset('/img/X.png') }}"
                                        alt="X - connect with XSTrades.com on X (Twiiter)"
                                        style="width:26px; height:26px;"></a>
                                <a href="https://www.linkedin.com/company/xscomglobal/" aria-label="social-media"
                                    rel="nofollow noopener" target="_blank" class="col fs-30 color-white"><img
                                        src="{{ asset('/img/sm-footer/linkedin.svg') }}"
                                        alt="Linkedin - connect with XSTrades.com on Linkedin"
                                        style="width:26px; height:26px;"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-10 mt-lg-0 mt-md-5 mt-5 left-lg-2 sitemap">
                <div class="row">
                    <div class="col center-text-wrapper">
                        <h6 class="text-navy fw-bolder mb-3 text-capitalize">{{ __('messages.COMPANY') }}</h6>
                        <span class="anchors-group center-text-wrapper mt-3 d-flex flex-column">
                            <a class="text-navy text-capitalize"
                                href="{{ route('company', ['lang' => App::getLocale(), 'tab' => 'legal-documents']) }}">{{ __('messages.LEGAL') }}</a>
                            <a class="text-navy text-capitalize"
                                href="{{ route('company', ['lang' => App::getLocale(), 'tab' => 'regulations']) }}">{{ __('messages.REGULATIONS') }}</a>
                            <a class="text-navy text-capitalize"
                                href="{{ route('safety', ['lang' => App::getLocale()]) }}">{{ __('safety.PAGE_BANNER_TITLE') }}</a>
                            <a class="text-navy text-capitalize"
                                href="{{ route('insurance', ['lang' => App::getLocale()]) }}">{{ __('insurance.INSURANCE') }}</a>
                            <a class="text-navy text-capitalize"
                                href="{{ route('security', ['lang' => App::getLocale()]) }}">{{ __('security.PAGE_BANNER_TITLE') }}</a>
                        </span>
                    </div>
                    <div class="col center-text-wrapper">
                        <h6 class="text-navy fw-bold mb-3 text-capitalize">{{ __('messages.TRADERS') }}</h6>
                        <span class="anchors-group center-text-wrapper mt-3 d-flex flex-column">
                            <a class="text-navy mb-0 fs-14 fw-bold text-capitalize"
                                href="{{ route('marketspage', ['lang' => App::getLocale()]) }}">{{ __('messages.MARKETS') }}</a>
                            <a class="text-navy text-capitalize"
                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'shares']) }}">{{ __('messages.SHARES') }}</a>
                            <a class="text-navy text-capitalize"
                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'indices']) }}">{{ __('messages.INDICES') }}</a>
                            <a class="text-navy text-capitalize"
                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'metals']) }}">{{ __('messages.METAL') }}</a>
                            <a class="text-navy text-capitalize"
                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'energy']) }}">{{ __('messages.ENERGY') }}</a>
                            <a class="text-navy text-capitalize"
                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'crypto']) }}">{{ __('messages.CRYPTOS') }}</a>
                            <a class="text-navy text-capitalize"
                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'forex']) }}">{{ __('messages.FOREX') }}</a>
                            <a class="text-navy text-capitalize"
                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'commodities']) }}">{{ __('messages.COMMODITIES') }}</a>
                            <a class="text-navy text-capitalize"
                                href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'futures']) }}">{{ __('trading-hours.FUTURES') }}</a>
                        </span>



                        <span class="anchors-group center-text-wrapper mt-3 d-flex flex-column">
                            <p class="text-navy mt-lg-3 mb-0 fs-14 fw-bold text-capitalize"
                                style="margin-left: 0px !important;">
                                {{ __('messages.ACCOUNTS') }}</p>
                            <a class="text-navy text-capitalize max-cont"
                                href="{{ route('account_types', ['lang' => App::getLocale()]) }}">{{ __('messages.ACCOUNT_TYPES') }}</a>
                            <a class="text-navy text-capitalize max-cont"
                                href="{{ route('contract_specs', ['lang' => App::getLocale()]) }}">{{ __('messages.CONTRACT_SPECS') }}</a>
                            <a class="text-navy text-capitalize"
                                href="{{ route('dynamic-leverage', ['lang' => App::getLocale()]) }}">{{ __('dynamic-leverage.PAGE_TITLE') }}</a>
                            <a class="text-navy text-capitalize"
                                href="{{ route('trading-hours', ['lang' => App::getLocale()]) }}">{{ __('trading-hours.PAGE_TITLE') }}</a>
                        </span>

                        <span class="anchors-group center-text-wrapper mt-3 d-flex flex-column">
                            <a class="text-navy mt-lg-3 mb-0 fs-14 fw-bold text-capitalize"
                                href="{{ route('platforms', ['lang' => App::getLocale()]) }}">{{ __('messages.PLATFORMS') }}</a>
                            <a class="text-navy text-capitalize max-cont"
                                href="{{ route('mt4', ['lang' => App::getLocale()]) }}">{{ __('messages.MT4') }}</a>
                            <a class="text-navy text-capitalize max-cont"
                                href="{{ route('mt5', ['lang' => App::getLocale()]) }}">{{ __('messages.MT5') }}</a>
                        </span>

                    </div>

                    <div class="col center-text-wrapper">
                        <h6 class="text-navy fw-bold text-capitalize mb-3">{{ __('messages.PARTNERS') }}</h6>
                        <span class="anchors-group center-text-wrapper d-flex flex-column">
                            <a class="text-navy mb-0 fs-14 fw-bold text-capitalize"
                                href="{{ route('partners', ['lang' => App::getLocale()]) }}">{{ __('messages.PARTNERS') }}</a>
                            <a class="text-navy text-capitalize max-cont"
                                href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'introducing-brokers']) }}">{{ __('messages.INTRODUCING_BROKERS') }}</a>
                            <a class="text-navy text-capitalize max-cont"
                                href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'digital-affiliates']) }}">{{ __('messages.DIGITAL_AFFILIATES') }}</a>
                            @if (App::getLocale() != 'jp')
                                <a class="text-navy text-capitalize max-cont"
                                    href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'education-experts']) }}">{{ __('messages.EDUCATION_EXPERTS') }}</a>
                                <a class="text-navy text-capitalize max-cont"
                                    href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'influencers']) }}">{{ __('messages.INFLUENCERS') }}</a>
                                <a class="text-navy text-capitalize max-cont"
                                    href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'asset-managers']) }}">{{ __('messages.ASSET_MANAGERS') }}</a>
                                <a class="text-navy text-capitalize max-cont"
                                    href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'local-partners']) }}">{{ __('messages.LOCAL_PARTNERS') }}</a>
                            @endif
                        </span>
                    </div>
    

                </div>
            </div>
        </div>

        <div class="row mt-5">
            <p class="col-12 color-white fs-14 lh-15">
                {!! __('messages.XS_IS_A_TRADEMARK') !!}
            </p>
        </div>
        <div class="row mt-5">
            @if (session()->get('locale') == 'ar')
                <p class="col-12 color-white fs-14" style="direction: ltr">
                    ©
                    <script type="text/javascript">
                        var year = new Date();
                        document.write(year.getFullYear());
                    </script>
                    XSTrades.com {!! __('messages.ALL_RIGHTS_RESERVED') !!}
                </p>
            @else
                <p class="col-12 color-white fs-14">
                    ©
                    <script type="text/javascript">
                        var year = new Date();
                        document.write(year.getFullYear());
                    </script>
                    XSTrades.com {!! __('messages.ALL_RIGHTS_RESERVED') !!}
                </p>
            @endif
        </div>
    </div>
</footer>

<style>
    b,
    strong {
        font-weight: 900 !important;
    }
</style>
