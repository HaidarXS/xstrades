<style>
    @media (max-width: 991px) {
        footer {
            margin-bottom: 100px !important;
        }
    }
</style>
<footer class="text-md-start footer-margin">
    <div class="py-5 container">
        <div class="row ">
            <div class="col-lg-6 col-md-6">
                <div>
                    <a href="{{ route('home', ['lang' => App::getLocale()]) }}"><img id="footer-logo"
                            src="{{ asset('/img/xstrades-logo.webp') }}" height="auto"
                            class="img-fluid col-lg-5 col-md-4 mb-md-3 col-8 mb-3
                            m-auto-sm "
                            alt="XS.com"></a>
                </div>
                <div>
                    <div class="text-darkgrey text-capitalize my-4 px-md-0">
                        {{ __('messages.FOLLOW_US') }}</div>
                </div>
                <br class="on-desktop">
                <div class="row">
                    <div class="col-12">
                        <a href="{{ __('social-media.FACEBOOK') }}" aria-label="social-media" rel="nofollow noopener"
                            target="_blank" class="col  color-white ps-0"><img
                                src="{{ asset('/img/sm-footer/facebook-footer.webp') }}"
                                alt="Facebook -  connect with xs.com on Facebook" style="width:40px; height:40px;"></a>
                        <a href="{{ __('social-media.INSTAGRAM') }}" aria-label="social-media" rel="nofollow noopener"
                            target="_blank" class="col  color-white"><img
                                src="{{ asset('/img/sm-footer/instagram-footer.webp') }}"
                                alt="Insta - connect with xs.com on Instagram" style="width:40px; height:40px;"></a>

                        <a href="{{ __('social-media.X') }}" aria-label="social-media" rel="nofollow noopener"
                            target="_blank" class="col  color-white"><img
                                src="{{ asset('/img/sm-footer/twitter-footer.webp') }}"
                                alt="X - connect with xs.com on X (Twiter)" style="width:40px; height:40px;"></a>
                        <a href="https://www.linkedin.com/company/xscomglobal/" aria-label="social-media"
                            rel="nofollow noopener" target="_blank" class="col  color-white"><img
                                src="{{ asset('/img/sm-footer/linkedin-footer.webp') }}"
                                alt="Linkedin - connect with xs.com on Linkedin" style="width:40px; height:40px;"></a>
                        <a href="https://www.youtube.com/@xscomglobal" aria-label="social-media" rel="nofollow noopener"
                            target="_blank" class="col  color-white"><img
                                src="{{ asset('/img/sm-footer/youtube-footer.webp') }}"
                                alt="Youtube - connect with xs.com on youtube" style="width:40px; height:40px;"></a>
                    </div>
                </div>
            </div>


            <hr class="d-block d-lg-none mt-3">
            <div class="col-lg-5 col-md-5 col-12 col-sm-12">
                <div class="row">
                    <div class="col-5 col-sm-5 col-lg-5  col-md-5 ">
                        <div class="pt-0 pt-lg-5 text-darkgrey">{!! __('messages.LICENSES') !!}</div>
                        <div class="pt-2">
                            <img src="{{ asset('img/licenses-footer.webp') }}" alt="Licenses XS.com"
                                class="img-fluid cust-max-w mt-3">
                        </div>
                    </div>

                    @if (session()->get('locale') == 'ar')
                        <div class=" col-1 col-md-2 col-lg-2 border-left-cust">
                        @else
                            <div class="col-1 col-sm-2 col-lg-2 col-md-2 border-right ">
                    @endif
                    &nbsp;
                </div>

                <div class="col-5 col-sm-5 col-lg-5 col-md-5 ">
                    <div class="pt-0 pt-lg-5 text-darkgrey"> &nbsp; {!! __('aboutus.SECURITY') !!}</div>
                    <div class="pt-2">
                        <img src="{{ asset('img/security-footer.webp') }}" alt="Licenses XS.com"
                            class="img-fluid cust-max-w mt-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="col-lg-12 col-md-10 mt-lg-0 mt-md-5 mt-5 sitemap py-4 container">
        <div class="row">
            <a href="#" id="sitemap-toggle-left" class="col-auto">
                <img src="{{ asset('/img/homepage/footer-ic/arrow-down.svg') }}" alt="">
            </a>
            <div class="col center-text-wrapper">
                <h6 class="footer-text-grey fw-bolder text-capitalize">

                    {{ __('messages.COMPANY') }}
                </h6>
                <span class="anchors-group center-text-wrapper mt-3 d-none flex-column">
                    <a class="footer-text-grey text-capitalize"
                        href="{{ route('company', ['lang' => App::getLocale(), 'tab' => 'legal-documents']) }}">{{ __('messages.LEGAL') }}</a>
                    {{-- <a class="footer-text-grey text-capitalize"
                        href="{{ route('company', ['lang' => App::getLocale(), 'tab' => 'contact']) }}">{{ __('messages.CONTACTS') }}</a> --}}
                    <a class="footer-text-grey text-capitalize"
                        href="{{ route('company', ['lang' => App::getLocale(), 'tab' => 'regulations']) }}">{{ __('messages.REGULATIONS') }}</a>
                    <a class="footer-text-grey text-capitalize"
                        href="{{ route('safety', ['lang' => App::getLocale()]) }}">{{ __('safety.PAGE_BANNER_TITLE') }}</a>
                    <a class="footer-text-grey text-capitalize"
                        href="{{ route('insurance', ['lang' => App::getLocale()]) }}">{{ __('insurance.INSURANCE') }}</a>
                    <a class="footer-text-grey text-capitalize"
                        href="{{ route('security', ['lang' => App::getLocale()]) }}">{{ __('security.PAGE_BANNER_TITLE') }}</a>

                    <a class="footer-text-grey text-capitalize"
                        href="{{ route('blogs', ['lang' => App::getLocale()]) }}">
                        {{ __('messages.BLOG') }}
                    </a>


                    @if (App::getLocale() !== 'zh-Hant')
                        <a class="footer-text-grey text-capitalize"
                            href="{{ route('all-media', ['lang' => App::getLocale()]) }}">
                            {{ __('messages.MEDIA_CENTER') }}
                        </a>
                    @endif
                    <a class="footer-text-grey text-capitalize"
                        href="{{ route('csr', ['lang' => App::getLocale()]) }}">
                        {{ __('csr-page.CSR') }}
                    </a>
                </span>

                <!-- <span class="anchors-group center-text-wrapper mt-3 d-flex flex-column">
                <p class="footer-text-grey  mb-0 fs-14 fw-bold text-capitalize invisible">{{ __('messages.PRESENCE') }}</p>

                </span> -->
            </div>
            <div class="col center-text-wrapper">
                <h6 class="footer-text-grey fw-bold text-capitalize">{{ __('messages.TRADERS') }}</h6>
                <span class="anchors-group center-text-wrapper mt-3 d-none flex-column">
                    <a class="footer-text-grey mb-0 fs-14 fw-bold text-capitalize"
                        href="{{ route('marketspage', ['lang' => App::getLocale()]) }}">{{ __('messages.MARKETS') }}</a>
                    <a class="footer-text-grey text-capitalize"
                        href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'shares']) }}">{{ __('messages.SHARES') }}</a>
                    <a class="footer-text-grey text-capitalize"
                        href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'indices']) }}">{{ __('messages.INDICES') }}</a>
                    <a class="footer-text-grey text-capitalize"
                        href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'metals']) }}">{{ __('messages.METAL') }}</a>
                    <a class="footer-text-grey text-capitalize"
                        href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'energy']) }}">{{ __('messages.ENERGY') }}</a>
                    <a class="footer-text-grey text-capitalize"
                        href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'crypto']) }}">{{ __('messages.CRYPTOS') }}</a>
                    <a class="footer-text-grey text-capitalize"
                        href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'forex']) }}">{{ __('messages.FOREX') }}</a>
                    <a class="footer-text-grey text-capitalize"
                        href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'commodities']) }}">{{ __('messages.COMMODITIES') }}</a>
                    <a class="footer-text-grey text-capitalize"
                        href="{{ route('markets', ['lang' => App::getLocale(), 'tab' => 'futures']) }}">{{ __('trading-hours.FUTURES') }}</a>
                </span>



                <span class="anchors-group center-text-wrapper mt-3 d-none flex-column">
                    <p class="footer-text-grey mb-0  fw-bold text-capitalize" style="margin-left: 0px !important;">
                        {{ __('messages.ACCOUNTS') }}</p>
                    <a class="footer-text-grey text-capitalize max-cont"
                        href="{{ route('account_types', ['lang' => App::getLocale()]) }}">{{ __('messages.ACCOUNT_TYPES') }}</a>
                    <a class="footer-text-grey text-capitalize max-cont"
                        href="{{ route('contract_specs', ['lang' => App::getLocale()]) }}">{{ __('messages.CONTRACT_SPECS') }}</a>
                    <a class="footer-text-grey text-capitalize"
                        href="{{ route('dynamic-leverage', ['lang' => App::getLocale()]) }}">{{ __('dynamic-leverage.PAGE_TITLE') }}</a>
                    <a class="footer-text-grey text-capitalize"
                        href="{{ route('trading-hours', ['lang' => App::getLocale()]) }}">{{ __('trading-hours.PAGE_TITLE') }}</a>

                </span>

                <span class="anchors-group center-text-wrapper mt-3 d-none flex-column">
                    <a class="footer-text-grey mt-lg-3 mb-0 fw-bold text-capitalize"
                        href="{{ route('platforms', ['lang' => App::getLocale()]) }}">{{ __('messages.PLATFORMS') }}</a>
                    <a class="footer-text-grey text-capitalize max-cont"
                        href="{{ route('mt4', ['lang' => App::getLocale()]) }}">{{ __('messages.MT4') }}</a>
                    <a class="footer-text-grey text-capitalize max-cont"
                        href="{{ route('mt5', ['lang' => App::getLocale()]) }}">{{ __('messages.MT5') }}</a>
                </span>

            </div>

            <div class="col center-text-wrapper">
                <h6 class="footer-text-grey fw-bold text-capitalize">{{ __('messages.PARTNERS') }}</h6>
                <span class="anchors-group center-text-wrapper d-none flex-column">
                    <a class="footer-text-grey mb-0 fs-14 fw-bold text-capitalize"
                        href="{{ route('partners', ['lang' => App::getLocale()]) }}">{{ __('messages.PARTNER_PROGRAMS') }}</a>
                    <a class="footer-text-grey text-capitalize max-cont"
                        href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'introducing-brokers']) }}">{{ __('messages.INTRODUCING_BROKERS') }}</a>
                    <a class="footer-text-grey text-capitalize max-cont"
                        href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'digital-affiliates']) }}">{{ __('messages.DIGITAL_AFFILIATES') }}</a>
                    @if (App::getLocale() != 'jp')
                        <a class="footer-text-grey text-capitalize max-cont"
                            href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'education-experts']) }}">{{ __('messages.EDUCATION_EXPERTS') }}</a>
                        <a class="footer-text-grey text-capitalize max-cont"
                            href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'influencers']) }}">{{ __('messages.INFLUENCERS') }}</a>
                        <a class="footer-text-grey text-capitalize max-cont"
                            href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'asset-managers']) }}">{{ __('messages.ASSET_MANAGERS') }}</a>
                        <a class="footer-text-grey text-capitalize max-cont"
                            href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'local-partners']) }}">{{ __('messages.LOCAL_PARTNERS') }}</a>
                    @endif
                </span>
            </div>
            <a href="#" id="sitemap-toggle-right" class="col-auto">
                <img src="{{ asset('/img/homepage/footer-ic/arrow-down.svg') }}" alt="">
            </a>



        </div>

    </div>
    <hr class="d-lg-block d-none">

    <div class="mt-5 grey cust-ft-footer container">
        <div class='cust-ft-footer text-darkgrey'>

            <div class='row'>
            <div class='col-md-12 col-lg-12'>
                {!! __('messages.XS_IS_A_TRADEMARK') !!}

            </div>
        </div></div>
    </div>

    <div class="row mt-5 grey container">
        @if (session()->get('locale') == 'ar')
            <p >
            @else
            <p>
        @endif
        <img src="{{ asset('img/logo.webp') }}" alt="XS.com" class="img-fluid logo-image-2">
        {!! __('messages.ALL_RIGHTS_RESERVED') !!} ©
        <script type="text/javascript">
            var startYear = 2010;
            var currentYear = new Date().getFullYear();
            document.write(startYear + " - " + currentYear);
        </script>
        </p>
    </div>
    </div>
</footer>

<nav class="navbar navbar-expand-lg navbar-light bg-light d-lg-none fixed-bottom shadow-lg">
    <div class="container py-2">
        <div class="row w-100">
            <div class="col-12">
                <ul class="navbar-nav m-auto-sm flex-row justify-content-between w-100">

                    <li class="nav-item px-2 text-center green-hover">
                        <a class="text-decoration-none" href="{{ route('home', ['lang' => App::getLocale()]) }}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill="#30af85"
                                    d="M11.9627 0C12.1199 0 12.277 0 12.4342 0C12.4547 0.00953516 12.4771 0.00953516 12.4989 0.0125149C12.9999 0.079857 13.44 0.273838 13.8126 0.607271C14.1088 0.872169 14.4038 1.13826 14.6991 1.40405C15.0051 1.67968 15.3108 1.9556 15.6168 2.23093C15.6782 2.28605 15.6798 2.28635 15.7402 2.24255C16.181 1.92312 16.6789 1.77473 17.2264 1.77503C17.4769 1.77503 17.7274 1.77354 17.9778 1.77563C18.1129 1.77682 18.2479 1.78218 18.3815 1.80185C19.5604 1.97616 20.4202 2.94726 20.4205 4.10489C20.4205 4.88677 20.4214 5.66835 20.4189 6.45024C20.4189 6.52592 20.4423 6.57837 20.5 6.62992C20.9466 7.02801 21.3904 7.42938 21.8351 7.82956C22.2854 8.23451 22.7329 8.64243 23.1863 9.0438C23.5734 9.38647 23.8361 9.79768 23.9533 10.295C23.9779 10.3999 23.9883 10.5063 24 10.6126V10.9702C23.9859 11.0191 23.9926 11.0697 23.9853 11.1192C23.8514 12.0396 23.1636 12.7923 22.2366 13.0331C22.1274 13.0614 22.0166 13.081 21.9042 13.0942C21.8318 13.1025 21.8223 13.1147 21.8204 13.185C21.8198 13.2136 21.8204 13.2423 21.8204 13.2709C21.8204 16.0667 21.8204 18.8626 21.8204 21.6585C21.8204 21.8114 21.8069 21.9631 21.7793 22.1135C21.6181 22.9875 20.9281 23.7104 20.0441 23.9338C19.9346 23.9616 19.8228 23.9765 19.7127 24H4.25727C4.23824 23.9964 4.2189 23.9923 4.19987 23.989C3.3211 23.8445 2.6974 23.3778 2.33459 22.5882C2.19647 22.2881 2.14644 21.969 2.14674 21.6406C2.14766 18.8477 2.14736 16.0548 2.14736 13.2619C2.14736 13.2309 2.14797 13.1999 2.14705 13.169C2.1449 13.1076 2.13754 13.1004 2.07645 13.0903C2.00862 13.079 1.94048 13.0697 1.87357 13.0554C0.915911 12.8486 0.195521 12.1064 0.0365259 11.166C0.0263969 11.1052 0.0276247 11.042 0 10.9845V10.584C0.0135054 10.5581 0.0202581 10.5307 0.0239414 10.5021C0.103439 9.91985 0.375695 9.43742 0.826284 9.04797C0.985894 8.91001 1.1455 8.77235 1.3048 8.63439C1.91316 8.10816 2.52152 7.58164 3.12987 7.05542C3.78581 6.48778 4.44205 5.92044 5.09798 5.3531C5.65876 4.868 6.21923 4.3826 6.78001 3.89779C7.48199 3.29052 8.18365 2.68355 8.88563 2.07658C9.46667 1.5742 10.0465 1.07062 10.6291 0.569726C10.9366 0.305423 11.2936 0.1323 11.696 0.0485697C11.7847 0.0300953 11.8743 0.0160906 11.9633 0L11.9627 0ZM11.9799 23.1502C14.4056 23.1502 16.8317 23.1502 19.2575 23.1502C19.3532 23.1502 19.4487 23.1481 19.5445 23.1415C19.7897 23.1251 20.0178 23.0563 20.2231 22.9264C20.686 22.6335 20.9257 22.2151 20.9284 21.6794C20.9337 20.7425 20.93 19.806 20.93 18.8692C20.93 16.6979 20.93 14.5262 20.93 12.3549C20.93 12.2452 20.9315 12.2437 21.0451 12.2434C21.2415 12.2431 21.438 12.2428 21.6344 12.2434C21.9116 12.2443 22.1679 12.1734 22.4045 12.0343C22.8769 11.7563 23.1949 11.1979 23.101 10.5766C23.0503 10.2411 22.891 9.95918 22.636 9.72855C22.2732 9.40048 21.9091 9.0733 21.5454 8.74583C20.9008 8.16567 20.2569 7.58492 19.6107 7.00656C19.5515 6.95352 19.5282 6.89869 19.5285 6.82062C19.5309 5.91716 19.5297 5.014 19.5306 4.11055C19.5306 4.0292 19.5245 3.94815 19.5113 3.86859C19.3907 3.13468 18.7338 2.63945 18.0512 2.64392C17.7516 2.64601 17.452 2.64303 17.1525 2.64452C16.7467 2.6469 16.402 2.79321 16.115 3.06883C15.9962 3.18296 15.8962 3.31347 15.7872 3.43623C15.7264 3.50477 15.7261 3.50596 15.658 3.44458C15.0079 2.85965 14.3581 2.27473 13.708 1.68981C13.526 1.52622 13.3492 1.35667 13.1601 1.20143C12.7985 0.905244 12.3783 0.805125 11.9139 0.885578C11.6149 0.937425 11.3654 1.08135 11.1413 1.27771C10.6711 1.68981 10.1966 2.09714 9.72357 2.50626C8.97403 3.15495 8.22417 3.80334 7.47431 4.45173C6.8236 5.0146 6.17288 5.57777 5.52248 6.14064C4.81682 6.75119 4.11116 7.36174 3.4052 7.97199C2.92852 8.38439 2.45184 8.79648 1.97516 9.20858C1.78087 9.37664 1.58412 9.54231 1.3929 9.71335C0.994795 10.0697 0.830275 10.5116 0.916218 11.0301C1.03654 11.7539 1.66976 12.2467 2.37541 12.2425C2.5473 12.2417 2.71919 12.2425 2.89107 12.2425C2.91317 12.2425 2.93527 12.242 2.95737 12.2434C3.02459 12.2473 3.0338 12.256 3.03626 12.3194C3.03749 12.3504 3.03687 12.3814 3.03687 12.4124C3.03687 15.48 3.03687 18.5477 3.03687 21.6153C3.03687 21.7011 3.03564 21.7867 3.04884 21.8722C3.13202 22.4222 3.43958 22.8072 3.95831 23.0349C4.16825 23.1269 4.39263 23.1496 4.62038 23.1496C7.07314 23.1496 9.52621 23.1496 11.979 23.1496L11.9799 23.1502Z"
                                    fill="#707070" />
                            </svg>
                            <p class="font-light px-2 py-2 m-0" style="font-weight: 400 !important;">
                                {!! __('messages.HOME') !!}
                            </p>
                        </a>
                    </li>
                    <li class="nav-item px-2 text-center green-hover">
                        <a class="text-decoration-none"
                            href="https://my.xs.com/{{ getCorrectLangSlug() }}register/?sl=1">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill="#30af85"
                                    d="M1.56253 17.2714C2.0516 18.5899 2.7594 19.8055 3.66586 20.8837L21.9791 20.755L22.1322 20.8837C22.1322 20.8837 22.1322 20.8837 22.1322 20.8837C23.039 19.8052 23.7468 18.5899 24.2359 17.2711C24.7421 15.9064 24.9984 14.4687 24.9984 12.9992C24.9984 11.4996 24.7329 10.0402 24.2086 8.65497L24.2192 8.6585L24.0483 8.25123C23.4389 6.79868 22.5666 5.49389 21.4559 4.37379C20.3451 3.2537 19.051 2.37364 17.6098 1.75921C16.1176 1.12278 14.5325 0.8 12.8995 0.8C11.2664 0.8 9.68136 1.12278 8.18907 1.75922L8.18905 1.75923C6.74818 2.37391 5.45408 3.25368 4.34331 4.37379C3.23256 5.49387 2.36002 6.79866 1.75089 8.25125C1.11995 9.75562 0.8 11.3534 0.8 12.9995C0.8 14.469 1.0566 15.9064 1.56251 17.2714L1.56253 17.2714ZM8.7198 18.8897L8.61614 18.7187L8.71981 18.8897C10.0212 18.1009 11.4265 17.7023 12.8995 17.7023C14.3724 17.7023 15.7778 18.1009 17.0791 18.8897L17.1828 18.7187L17.0791 18.8897C18.2302 19.5873 19.2568 20.5818 20.063 21.7807C18.0486 23.4537 15.5189 24.3706 12.8995 24.3706C10.28 24.3706 7.7504 23.4534 5.73594 21.7807C6.54218 20.582 7.56878 19.5873 8.7198 18.8897ZM23.5008 16.8815L23.4634 16.9824C23.0077 18.2112 22.3482 19.3439 21.5026 20.3496C21.3973 20.4749 21.287 20.6003 21.1757 20.7217C21.0175 20.8939 20.8529 21.0623 20.6836 21.2253C19.8222 19.9714 18.732 18.9242 17.5053 18.1808C16.0963 17.3269 14.5036 16.8743 12.8995 16.8743C11.2953 16.8743 9.70292 17.3266 8.29361 18.1808C7.0669 18.9242 5.97668 19.9714 5.11533 21.2252C4.94599 21.0623 4.7814 20.8939 4.62313 20.7216L4.62309 20.7215C4.5116 20.6002 4.40172 20.4752 4.29642 20.3497L4.29628 20.3496C3.45076 19.3442 2.79121 18.2115 2.33549 16.9824L2.33548 16.9824C1.86384 15.7107 1.62473 14.3707 1.62473 12.9995C1.62473 11.4636 1.92292 9.97451 2.51089 8.57287C3.07899 7.2188 3.89183 6.0027 4.92774 4.95809C5.96364 3.91348 7.16916 3.09399 8.51177 2.5213L8.51178 2.5213C9.90128 1.92858 11.3774 1.62803 12.8997 1.62803C14.4221 1.62803 15.8982 1.92858 17.2877 2.5213C18.63 3.09399 19.8358 3.91349 20.8717 4.95809C21.9076 6.00271 22.7205 7.21854 23.2886 8.57286L23.473 8.4955L23.2886 8.57286C23.8765 9.9745 24.1747 11.4636 24.1747 12.9995C24.1747 14.3345 23.9481 15.6397 23.5008 16.8815Z"
                                    fill="#707070" stroke-width="0.4" />
                                <path fill="#30af85"
                                    d="M12.8994 5.38447C10.0675 5.38447 7.7668 7.70696 7.7668 10.5585C7.7668 13.4101 10.0675 15.7326 12.8994 15.7326C15.7313 15.7326 18.032 13.4101 18.032 10.5585C18.032 7.70696 15.7313 5.38447 12.8994 5.38447ZM12.8994 14.9046C10.5256 14.9046 8.59153 12.9564 8.59153 10.5588C8.59153 8.16125 10.5259 6.21304 12.8994 6.21304C15.2729 6.21304 17.2073 8.16125 17.2073 10.5588C17.2073 12.9563 15.2729 14.9046 12.8994 14.9046Z"
                                    fill="#707070" stroke-width="0.4" />
                            </svg>
                            <p class="font-light px-2 py-2 m-0" style="font-weight: 400 !important;">
                                {!! __('webinar.REGISTER') !!}
                            </p>
                        </a>
                    </li>
                    <li class="nav-item px-2 text-center green-hover">
                        <a class="text-decoration-none"
                            href="https://my.xs.com/{{ getCorrectLangSlug() }}login/?sl=1">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.45216 10.5458C5.48218 8.10602 7.32631 6.09883 9.67034 4.86627C12.0144 3.6337 14.7132 3.25203 17.3071 3.78627C19.901 4.32052 22.2294 5.73763 23.8956 7.79615C25.5618 9.85467 26.4626 12.4272 26.4447 15.0755C26.4267 17.7238 25.4911 20.2839 23.7972 22.3197C22.1033 24.3554 19.7559 25.7409 17.155 26.2399C14.5541 26.739 11.8607 26.3208 9.53357 25.0566C7.20646 23.7924 5.38969 21.7604 4.39281 19.3068"
                                    stroke="#30af85" stroke-width="1.2" />
                                <path
                                    d="M0.789552 15.372C0.837314 15.2505 0.887386 15.1315 0.993694 15.0395C1.11644 14.9333 1.25997 14.875 1.42662 14.8639C1.47721 14.8606 1.52805 14.8608 1.5789 14.8608C3.64495 14.8608 14.395 14.8608 16.461 14.8608C16.4967 14.8608 16.5324 14.8608 16.5874 14.8608C16.5604 14.8433 16.5491 14.8324 16.5355 14.8274C16.3355 14.752 16.1711 14.6316 16.0204 14.4916C15.4521 13.9638 14.8839 13.436 14.3133 12.9105C14.1081 12.7216 14.0195 12.5031 14.1071 12.2426C14.2342 11.8641 14.7514 11.7179 15.0934 11.9599C15.136 11.99 15.1763 12.0232 15.2143 12.058C16.2808 13.0416 17.3469 14.0256 18.4128 15.0099C18.6639 15.2417 18.7156 15.5221 18.5515 15.783C18.516 15.8394 18.4675 15.8904 18.4172 15.9368C17.3477 16.9249 16.2774 17.913 15.2066 18.9003C14.9103 19.1736 14.4871 19.166 14.2183 18.8849C14.0255 18.6835 14.0273 18.3336 14.2234 18.1137C14.2576 18.0755 14.2951 18.0398 14.3331 18.0047C14.8184 17.5563 15.3032 17.1074 15.7903 16.6606C16.0263 16.4442 16.2394 16.2011 16.5707 16.0932C16.5686 16.0861 16.5666 16.0793 16.5645 16.0722C16.5309 16.0722 16.4972 16.0722 16.4636 16.0722C14.3767 16.0722 3.60592 16.0714 1.51881 16.0733C1.28437 16.0733 1.0774 16.0193 0.936687 15.8401C0.870695 15.7562 0.837827 15.65 0.78981 15.5538L0.789552 15.372Z"
                                    fill="#30af85" />
                            </svg>

                            <p class="font-light px-2 py-1 m-0" style="font-weight: 400 !important;">
                                {!! __('messages.LOGIN') !!}
                            </p>
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>


<style>
    b,
    strong {
        font-weight: 900 !important;
    }
</style>


<script>
    document.addEventListener("DOMContentLoaded", function() {

        var toggleButton = document.getElementById("sitemap-toggle-right");
        var toggleButtonL = document.getElementById("sitemap-toggle-left");

        var anchorGroups = document.querySelectorAll(".anchors-group");


        toggleButton.addEventListener("click", function(event) {
            event.preventDefault();
            anchorGroups.forEach(function(anchorGroup) {

                if (anchorGroup.classList.contains("d-flex")) {
                    anchorGroup.classList.remove("d-flex");
                    anchorGroup.classList.add("d-none");
                    toggleButton.classList.add("rotate-arrow");
                    toggleButtonL.classList.add("rotate-arrow");
                } else {
                    anchorGroup.classList.remove("d-none");
                    toggleButton.classList.remove("rotate-arrow");
                    toggleButtonL.classList.remove("rotate-arrow");
                    anchorGroup.classList.add("d-flex");
                }
            });
        });
    });

    document.addEventListener("DOMContentLoaded", function() {

        var toggleButtonL = document.getElementById("sitemap-toggle-left");
        var toggleButton = document.getElementById("sitemap-toggle-right");


        var anchorGroups = document.querySelectorAll(".anchors-group");


        toggleButtonL.addEventListener("click", function(event) {
            event.preventDefault();
            anchorGroups.forEach(function(anchorGroup) {

                if (anchorGroup.classList.contains("d-flex")) {
                    anchorGroup.classList.remove("d-flex");
                    anchorGroup.classList.add("d-none");
                    toggleButtonL.classList.add("rotate-arrow");
                    toggleButton.classList.add("rotate-arrow");
                } else {
                    anchorGroup.classList.remove("d-none");
                    toggleButtonL.classList.remove("rotate-arrow");
                    toggleButton.classList.remove("rotate-arrow");
                    anchorGroup.classList.add("d-flex");
                }
            });
        });
    });
</script>
