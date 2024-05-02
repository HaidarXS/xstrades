<style>
    @media (max-width: 768px) {
        .page-banner {
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url({{ $mobileBanner }});
        }
    }

    @media (min-width: 769px) {
        .page-banner {
            height: 320px;
            background: rgb(1, 51, 127, 1);
            /* background: linear-gradient(-90deg, rgba(1, 51, 127, 1) 0%, rgba(48, 175, 133, 1) 100%); */
            background: linear-gradient(130deg, rgba(46, 175, 134, 1) 0%, rgba(45, 163, 131, 1) 30%, rgba(36, 77, 133, 1) 100%);
        }

        [dir="rtl"] .page-banner {
            height: 320px;
            background: rgb(1, 51, 127, 1);
            /* background: linear-gradient(90deg, rgba(1, 51, 127, 1) 0%, rgba(48, 175, 133, 1) 100%); */
            background: linear-gradient(-130deg, rgba(46, 175, 134, 1) 0%, rgba(45, 163, 131, 1) 30%, rgba(36, 77, 133, 1) 100%);
        }
    }

    .page-banner-img {
        height: 250px;
    }

    .page-banner>.container {
        padding-right: 0 !important;
        padding-left: 0 !important;
    }

    .page-banner-button {
        font-weight: 600;
        background-color: transparent !important;
        border: 1px solid #ffffff;
        border-radius: 29px;
        color: var(--secondary-color) !important;
        width: 200px;
    }
</style>
@php
 $btnVar = strpos(url()->current(), '/company/careers/') !== false
@endphp
<section class="page-banner d-flex">
    <div class="row container pt-2 m-auto d-flex align-items-center flex-column-reverse-sm">
        <div
            class="col-md-8 col-12 text-white d-flex flex-column justify-content-center text-md-start text-center mb-md-0 mb-4">
            <h1 class="text-white fw-700 text-capitalize">{{ $bannerTitle }}</h1>
            <p class="text-white my-4 ">{!! $bannerDescription !!}</p>
            <div class="justify-content-center d-flex justify-content-lg-start">
                <a href=
                @if($btnVar)
                "https://XS Trades.bamboohr.com/careers/74"
                @else
                "https://my.XSTrades.com/{{getCorrectLangSlug()}}register/?sl=1"
                @endif
                target="_blank"
                    class="btn button-style-white justify-content-center py-3 px-5">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="me-3"><img src="{{ asset($bannerButtonIcon ?? '/svgs/join-us.svg') }}"
                                class="btn-icon" alt="Join XS Trades" style="object-fit: contain;"></span>
                        <span class="text-white fw-700">
                            @if($btnVar)
                            {{ __('careers.JOIN_XS_TEAM') }}
                            @else
                            {{ __('homepage.JOIN_XS') }}
                            @endif
                            </span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 col-12 d-none d-md-block text-end">
            <img src="{{ $bannerImage }}" class="page-banner-img" alt="{{ __('hoko-trading.COPY_TRADING') }}">
        </div>
    </div>
</section>
