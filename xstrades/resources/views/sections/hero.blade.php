{{--

<section class="hero-sec row">
    @if (session()->get('locale') == 'ar')
        <div class="position-relative container py-5 px-0 px-md-5 hero-section"style="background-image: url('../img/homepage-banner-ar.png');background-position:center center ; background-size: cover;min-height: 600px; object-fit: cover; scale:(-1);">
    @else
        <div class="position-relative  container py-5 px-0 px-md-5 hero-section"style="background-image: url('../img/homepage-banner.png');background-position:center center ;  background-size: cover;min-height: 600px; object-fit: cover;">
    @endif
    <div class="overlay"></div>
    <div class="container hero-info-container">
        <div class="d-flex">
            <div>
                <div class="row hero-section">
                @if (session()->get('locale') == 'de')
                    <div class="col-xl-9 col-lg-8 col-12 d-flex flex-column flex-wrap align-content-start">
                    @elseif(session()->get('locale') == 'zh-Hans' || session()->get('locale') == 'zh-Hant')
                <div class="col-lg-8 col-12 d-flex flex-column flex-wrap align-content-start">
                @else
                    <div class="col-md-12 d-flex flex-column flex-wrap align-content-start">
                @endif
                        <h1 class="hom-title text-center mb-4"> {!! __('homepage.HERO_TITLE') !!} </h1>
                        <h3 class="hom-sub text-center  mb-4 text-uppercase">
                            {!! __('homepage.HERO_SUBTITLE') !!}
                        </h3>
                        <div class="row justify-content-center">
                            <a href="https://my.XSTrades.com/{{getCorrectLangSlug()}}register/?sl=1" target="_blank" class="btn join-btn py-3">
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="me-3"><img src="{{asset('/svgs/join-us.svg')}}" alt="{{ __('homepage.JOIN_XS_NOW') }}" style="width: 30px; object-fit: contain;"></span>
                                    <span class="no-deco">
                                        {{ __('homepage.JOIN_XS_NOW') }}
                                    </span>
                                </div>
                            </a>
                        </div>
                        <p class="hom-desc text-center m-auto col-12 mt-5" style="font-size: 11px !important;">
                            {{ __('homepage.HERO_DESCRIPTION') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section> --}}





<div class="container hero-sec">
    <div class="row d-flex align-items-center">
        <div class="col-md-7 d-flex flex-column py-5 flex-wrap align-content-start justify-content-center justify-content-md-start text-center text-md-start">
            <h1 class="hom-title mb-0 mt-3">{!! __('homepage.HERO_TITLE') !!}</h1>
            <p class="hom-sub mb-4 text-capitalize">
                <b>{!! __('homepage.HERO_SUBTITLE') !!}</b>
            </p>

            <p class="hom-desc col-12 mt-4 mb-5 color-secondary d-md-none" style="font-size: 15px !important;"><b>{!! __('homepage.HERO_DESCRIPTION') !!}</b></p>
</p>

            <div class="row justify-content-center text-center text-md-start d-none d-md-block">
                <div class="col-12 col-md-auto d-flex justify-content-center justify-content-md-start">
                    <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1" target="_blank" class="btn join-btn py-3-desktop ">
                        <div class="d-flex align-items-center">
                            <span class="me-3"><img src="{{ asset('/svgs/join-us.svg') }}" alt="{{ __('homepage.JOIN_XS_NOW') }}" style="width: 30px; object-fit: contain;"></span>
                            <span class="no-deco">{{ __('homepage.JOIN_XS_NOW') }}</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row justify-content-center text-center text-md-start d-md-none">
                <div class="col-12 col-md-auto d-flex justify-content-center justify-content-md-start">
                    <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1" target="_blank" class="btn join-btn py-3-desktop ">
                        <div class="d-flex align-items-center">
                            <span class="me-3"><img src="{{ asset('/svgs/join-us.svg') }}" alt="{{ __('homepage.JOIN_XS_NOW') }}" style="width: 30px; object-fit: contain;"></span>
                            <span class="no-deco">{{ __('homepage.JOIN_XS_NOW') }}</span>
                        </div>
                    </a>
                </div>
            </div>

            <p class="hom-desc col-12 mt-4 mb-5 d-none d-sm-block" style="font-size: 11px !important;">{!! __('homepage.HERO_DESCRIPTION') !!}</p>
        </div>
        <div class="col-md-5 d-none d-sm-block">
            <img src="{{ asset('webp/hero-banner.webp') }}" height="auto" width="auto" class="w-100"
                alt="{{ __('homepage.HERO_TITLE') }} {{ __('homepage.HERO_SUBTITLE') }} ">
        </div>
    </div>
</div>
