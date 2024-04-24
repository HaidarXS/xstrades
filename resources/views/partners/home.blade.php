<section class="grey-bg text-center">
    <div class="container pb-3">
        <div class="col-lg-10 col-md-10 col-sm-10 m-auto ">
            <div class="container pt-4 pb-2">
                <div class="row mb-4 flex-column-reverse-sm">
                    <div class="col-lg-12 col-sm-12">
                        <div class="row pb-2">
                            <h1 class="col-12 text-center text-navy text-uppercase">
                                {{ __('global.PARTNERSHIP_PROGRAM') }}</h1>
                        </div>
                        <div class="row">
                            <h2 class="col-12 text-center text-navy text-capitalize">
                                {{ __('global.GLOBAL_PARTNER_TITLE') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <div class="row">
                        <p class="col-12 mb-3">
                            {!! __('global.GLOBAL_PARTNER_DISC') !!}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container pt-2 pb-4 text-center m-auto">
        <div class="row mb-4 flex-column-reverse-sm">
            <div class="col-lg-12 col-sm-12">
                <div class="row">
                    <h2 class="col-12 text-center text-navy text-capitalize">
                        {{ __('global.MULTIPLE_PARTNERSHIP') }}</h2>
                </div>
            </div>
            <div class="col-lg-10 py-4 col-sm-10 m-auto">
                <div class="row">
                    <p class="col-12 mb-3">
                        {!! __('global.GLOBAL_PARTNER_DISC2') !!}</p>
                </div>
            </div>
        </div>
    </div>

    @if (App::getLocale() != 'jp')
        <div class="container">

            <div class="row justify-content-center mb-3">
                <a href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'introducing-brokers']) }}"
                    class="col-xl-3 col-lg-4 col-md-6 col-12 text-center mb-4 px-2 text-decoration-none">
                    <div class="d-flex justify-content-center align-items-center bg-gray rounded-full-sides py-5">
                        <div class="row">
                            <div class="col-12">
                                <img class="mb-4 heigth-160" src="{{ asset('/svgs/Introducing-Brokers.svg') }}"
                                    alt="{!! __('global.INTRODUCING_BROKERS') !!}">
                            </div>
                            <div class="col-12">
                                <h5 class="text-primary">{!! __('global.INTRODUCING_BROKERS') !!}</h5>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'asset-managers']) }}"
                    class="col-xl-3 col-lg-4 col-md-6 col-12 text-center mb-4 px-2 text-decoration-none">
                    <div class="d-flex justify-content-center align-items-center bg-gray rounded-full-sides py-5">
                        <div class="row">
                            <div class="col-12">
                                <img class="mb-4 heigth-160" src="{{ asset('/svgs/Asset-Managers.svg') }}"
                                    alt="{!! __('global.ASSET_MANAGERS') !!}">
                            </div>
                            <div class="col-12">
                                <h5 class="text-primary">{!! __('global.ASSET_MANAGERS') !!}</h5>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'influencers']) }}"
                    class="col-xl-3 col-lg-4 col-md-6 col-12 text-center mb-4 px-2 text-decoration-none">
                    <div class="d-flex justify-content-center align-items-center bg-gray rounded-full-sides py-5">
                        <div class="row">
                            <div class="col-12">
                                <img class="mb-4 heigth-160" src="{{ asset('/svgs/Influencers.svg') }}"
                                    alt="{{ __('global.INFLUENCERS') }}">
                            </div>
                            <div class="col-12">
                                <h5 class="text-primary">{{ __('global.INFLUENCERS') }}</h5>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>

        <div class="container pe-4">
            <div class="row justify-content-center mb-3">
                <a href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'digital-affiliates']) }}"
                    class="col-xl-3 col-lg-4 col-md-6 col-12 text-center mb-4 px-2 text-decoration-none">
                    <div class="d-flex justify-content-center align-items-center bg-gray rounded-full-sides py-5">
                        <div class="row">
                            <div class="col-12">
                                <img class="mb-4 heigth-160" src="{{ asset('/svgs/Digital-Affiliates.svg') }}"
                                    alt="{{ __('global.DIGITAL_AFFILIATES') }}">
                            </div>
                            <div class="col-12">
                                <h5 class="text-primary">{{ __('global.DIGITAL_AFFILIATES') }}</h5>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'local-partners']) }}"
                    class="col-xl-3 col-lg-4 col-md-6 col-12 text-center mb-4 px-2 text-decoration-none">
                    <div class="d-flex justify-content-center align-items-center bg-gray rounded-full-sides py-5">
                        <div class="row">
                            <div class="col-12">
                                <img class="mb-4 heigth-160 local-img" src="{{ asset('/svgs/localPart.svg') }}"
                                    alt="{{ __('global.LOCAL_PARTNERS') }}">
                            </div>
                            <div class="col-12">
                                <h5 class="text-primary">{{ __('global.LOCAL_PARTNERS') }}</h5>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'education-experts']) }}"
                    class="col-xl-3 col-lg-4 col-md-6 col-12 text-center mb-4 px-2 text-decoration-none">
                    <div class="d-flex justify-content-center align-items-center bg-gray rounded-full-sides py-5">
                        <div class="row">
                            <div class="col-12">
                                <img class="mb-4 heigth-160" src="{{ asset('/svgs/Education-Experts.svg') }}"
                                    alt="{{ __('global.EDUCATION_EXPERTS') }}">
                            </div>
                            <div class="col-12">
                                <h5 class="text-primary">{{ __('global.EDUCATION_EXPERTS') }}</h5>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    @else
        <div class="container">

            <div class="row justify-content-center mb-3">
                <a href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'introducing-brokers']) }}"
                    class="col-xl-3 col-lg-4 col-md-6 col-12 text-center mb-4 px-2 text-decoration-none">
                    <div class="d-flex justify-content-center align-items-center bg-gray rounded-full-sides py-5">
                        <div class="row">
                            <div class="col-12">
                                <img class="mb-4 heigth-160" src="{{ asset('/svgs/Introducing-Brokers.svg') }}"
                                    alt="{!! __('global.INTRODUCING_BROKERS') !!}">
                            </div>
                            <div class="col-12">
                                <h5 class="text-primary">{!! __('global.INTRODUCING_BROKERS') !!}</h5>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ route('partners', ['lang' => App::getLocale(), 'slug' => 'digital-affiliates']) }}"
                    class="col-xl-3 col-lg-4 col-md-6 col-12 text-center mb-4 px-2 text-decoration-none">
                    <div class="d-flex justify-content-center align-items-center bg-gray rounded-full-sides py-5">
                        <div class="row">
                            <div class="col-12">
                                <img class="mb-4 heigth-160" src="{{ asset('/svgs/Digital-Affiliates.svg') }}"
                                    alt="{{ __('global.DIGITAL_AFFILIATES') }}">
                            </div>
                            <div class="col-12">
                                <h5 class="text-primary">{{ __('global.DIGITAL_AFFILIATES') }}</h5>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    @endif
</section>
