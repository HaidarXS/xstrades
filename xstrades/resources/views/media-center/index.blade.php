@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }} " />
    <meta property="og:title" content="{{ __('seo.TITLE_MEDIA') }}" />
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_MEDIA') }}" />
    <meta property="og:image" content="https://www.XSTrades.com/img/company-section/media.png?v1">


    <!-- Twitter Meta Tags -->
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }} " >
    <meta name="twitter:title" content="{{ __('seo.TITLE_MEDIA') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_MEDIA') }}">
    <meta name="twitter:image" content="https://www.XSTrades.com/img/company-section/media.png?v1">

    <!-- Other Meta Tags -->
    <meta property="og:locale" content="{{ App::getLocale() }}" />

@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_MEDIA') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_MEDIA') }}">
@endsection
@section('content')
    <style>
        .slick-next,
        .slick-prev {
            display: none !important;
        }

        .slick-slide {
            padding: 20px !important;
        }

        .height-150 {
            height: 150px;
        }

        .inner-shadow {
            box-shadow: -1px -46px 25px -4px rgba(0, 0, 0, 0.50) inset;
            -webkit-box-shadow: -1px -46px 25px -4px rgba(0, 0, 0, 0.50) inset;
            -moz-box-shadow: -1px -46px 25px -4px rgba(0, 0, 0, 0.50) inset;
        }

        .image-caption {
            text-align: center;
            margin-top: -60px;
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            color: white;
        }
    </style>

    @include('layouts.banner', [
        'bannerTitle' => __('media.MEDIA_CENTER'),
        'bannerDescription' => __('media.STAY_INFORMED'),
        'bannerImage' => asset('/img/company-section/media.svg'),
        'mobileBanner' => asset('/img/company-section/media-mobile.webp'),
    ])
    {{-- <section class="page-banner p-3 mb-5">
        <div class="row container py-3 m-auto d-flex align-items-center flex-column-reverse-sm">
            <div
                class="col-md-8 col-12 text-white d-flex flex-column justify-content-center text-md-start text-center mb-md-0 mb-4">
                <h1 class="text-white fw-700 text-capitalize">{{ __('media.MEDIA_CENTER') }}</h1>
                <p class="text-white my-4 ">{{ __('media.STAY_INFORMED') }}</p>
                <div class="justify-content-center d-flex justify-content-lg-start">
                    <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1" target="_blank"
                        class="btn button-style-white justify-content-center py-3 px-5">
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="me-3"><img src="{{ asset('/svgs/White-mail-icon.svg') }}" class="btn-icon"
                                    alt="Join XS Trades" style="object-fit: contain;"></span>
                            <span class="text-white fw-700"> {{ __('aboutus.CONTACT_US') }}</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-12 d-none d-md-block text-end">
                <img src="{{ asset('/img/media_banner.svg') }}" class="page-banner-img"
                    alt="{{ __('aboutus.CONTACT_US') }}">
            </div>
        </div>
    </section> --}}


    @foreach ($mediaCategories as $key => $category)
        <section class="mt-5 pt-2">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-auto">
                        {{-- <h1 class="text-center text-secondary fw-700">{{ $category->title }}</h1> --}}
                        <h1 class="text-center text-secondary fw-700">{{ __($category->slug . '.title') }}</h1>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    @foreach ($category->media as $record)
                        <div class="col-10 col-md-4 my-4">
                            @if ($category->slug == 'xs-press-releases')
                                <a class="text-decoration-none"
                                    href="{{ route('single-media', ['category' => $category->slug, 'slug' => $record->slug]) }}"
                                    target="_blank">
                                @else
                                    <a class="text-decoration-none" href="{{ $record->external_link }}" target="_blank">
                            @endif

                            @if ($record->image)
                                @if ($key == 0 || $key == 2)
                                    <div class="ratio ratio-1x1">
                                        <div class="p-4">
                                            <img class="w-100 h-100 border-rad-20 object-fit-cover" style=""
                                                src="{{ asset('storage/' . $record->thumbnail_image) }}"
                                                alt="{{ $record->title }}">
                                        </div>
                                    </div>
                                @endif
                            @endif
                            @if ($record->brand_logo)
                                @if ($key != 0)
                                    <div class="w-100 d-flex justify-content-center">

                                        <img class="" style="max-height:60px"
                                            src="{{ asset('storage/' . $record->brand_logo) }}" alt="{{ $record->title }}">
                                    </div>
                                @endif
                            @endif

                            <p class="text-center mt-3 text-secondary">{{ $record->title }}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a class="btn join-us-button py-3 px-5 fw-700"
                            href="{{ route('single-category', ['lang' => App::getLocale(), 'category' => $category->slug]) }}"
                            target="_blank">{{ __($category->slug . '.title') }}</a>

                    </div>
                </div>

                <hr class="my-5" />
            </div>
        </section>
    @endforeach

    <section>
        <div class="container">
            <div class="row my-5">
                <div class="col-12 text-center">
                    <p>{{ __('media.XS_PRESS_KITS_DESC') }}</p>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="row p-4">
                        <div class="col-12 text-center onhover-showtext border-rad-20">
                            <div class="ratio ratio-16x9 overflow-hidden">
                                <div class="overlay-gradiant"></div>

                                <img class="w-100 border-rad-20" src="{{ asset('/img/media/xs-social-media.png') }}"
                                    alt="">
                                <div
                                    class="image-caption position-absolute bottom-0 start-0 w-100 h-100 d-flex align-items-center justify-content-end flex-column z-2 ">
                                    <h3 class="text-white">{{ __('media.XS_SOCIAL_MEDIA') }}</h3>
                                    <div class="px-5 text-show mb-3">
                                        <p class="text-white flex-shrink-1">
                                            {{ __('media.XS_SOCIAL_MEDIA_DESCRIPTION') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row p-4">
                        <div class="col-12 text-center onhover-showtext">
                            <div class="ratio ratio-16x9 overflow-hidden">
                                <div class="overlay-gradiant"></div>

                                <img class="w-100 border-rad-20" src="{{ asset('/img/media/xs-media-kits.png') }}"
                                    alt="">
                                <div
                                    class="image-caption position-absolute bottom-0 start-0 w-100 h-100 d-flex align-items-center justify-content-end flex-column z-2 ">
                                    <h3 class="text-white">{{ __('media.XS_MEDIA_KITS') }}</h3>
                                    <div class="px-5 text-show mb-3">
                                        <p class="text-white flex-shrink-1">{{ __('media.XS_MEDIA_KITS_DESCRIPTION') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-12 text-center">
                        <p>{{ __('media.XS_PRESS_RISK_WARNING') }}</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('.slick').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 5000,
            });
        });
    </script>
@endsection
