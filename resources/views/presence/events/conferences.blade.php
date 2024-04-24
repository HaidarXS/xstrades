@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('seo.TITLE_CONFERENCES') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_CONFERENCES') }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE_CONFERENCES') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_CONFERENCES') }}">
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_CONFERENCES') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_CONFERENCES') }}">
@endsection
@section('content')

    @include('layouts.banner', [
        'bannerTitle' => __('events.CONFERENCES'),
        'bannerDescription' => __('events.CONFERENCES_PAGE_SUBTITLE'),
        'bannerImage' => asset('/img/events-banners/conferences.svg'),
        'mobileBanner' => asset('/img/events-banners/conferences-mobile.webp'),
    ])
    <style>
        @media screen and (max-width: 768px) {
            .cust-full-w {
                width: 100% !important;
            }

            .cust-pt {
                padding-top: 3rem !important;
            }
        }

        @media screen and (min-width: 769px) {

            .cust-pt {
                padding-top: 5rem !important;
            }
        }
    </style>
    {{-- <div class="container py-5">
        <div class="row">
            <div class="col-12 mb-4">
                <h1 class="text-navy text-center text-uppercase col-4 m-auto">{{ __('presence.CONFERENCES') }}</h1>
            </div>
            <div class="col-12">
                <img src="{{ asset('/img/conferences.webp') }}" class="py-5 img-fluid w-100"
                    alt="XSTrades.com at the conferences">
            </div>
        </div>
    </div> --}}
    @if (count($upcoming))
        {{-- upcoming  --}}
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 mb-5">
                    <div class="d-flex align-items-center">
                        <button onclick="toggleShowMore($(this) ,'.more-upcoming')"
                            class="text-secondary btn text-lg d-flex align-items-center px-0" style="font-size: 40px">
                            {{ __('events.UPCOMING_CONFERENCES') }}
                        </button>
                    </div>
                </div>

                @foreach ($upcoming as $i => $expo)
                    @if (session()->get('locale') == 'ar')
                        <div class="col-md-3 my-5 onClickOpenPopup">
                        @else
                            <div
                                class="col-md-3 my-5 onClickOpenPopup @if (App::getLocale() != 'ar') {{ $i % 3 != 0 ? 'offset-md-1 ' : '' }} @endif">
                    @endif

                    <img src="{{ asset('/img/Savethedate.png') }}" alt="{{ $expo['title'] }}" class="img-fluid">
                    <h5 class="text-dark-grey fw-700 mt-3">{{ $expo['title'] }}</h5>
                    <p class="date mb-2">{{ $expo['date'] }}</p>
                    <p>{{ $expo['country'] }}</p>
            </div>
            <div class="popup d-none align-items-center justify-content-center position-fixed top-0 start-0 w-100"
                style="height: 100vh; background-color:rgba(0,0,0,0.5);z-index: 999999;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-6 position-relative cust-full-w">
                            <div class="position-absolute top-0 start-0 m-4">
                                <button class="btn rounded-circle bg-white text-primary close-btn"
                                    onclick="closePopup($(this))">x</button>
                            </div>
                            <img src="{{ asset('/img/Savethedate.png') }}" alt="" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
    @endforeach

    </div>
    </div>
    @endif

    @if (count($prev) > 0)
        {{-- previous  --}}
        <div class="container mb-5">
            <div class="row ">
                <div class="col-12 my-5">

                    <button onclick="toggleShowMore($(this) ,'.more-previous')"
                        class="text-secondary btn text-lg d-flex align-items-center px-0" style="font-size: 40px">
                        <h2>{{ __('events.PREVIOUS_CONFERENCES') }}</h2>
                    </button>
                </div>
                @foreach ($prev as $i => $expo)
                    @php
                        $path = public_path('/img/prev-conferences/' . $expo['dir']);
                        $images = [''];
                        if (File::exists($path)) {
                            $images = File::allFiles($path);
                        }
                    @endphp

                    <div
                        class="col-md-3 my-5 onClickOpenPopup @if (App::getLocale() != 'ar') {{ $i % 3 != 0 ? 'offset-md-1 ' : '' }} @endif">

                        <div class="slick slick-fade">

                            @foreach ($images as $img)
                                <img src="{{ File::exists($path) ? asset('/img/prev-conferences/' . $expo['dir'] . '/' . $img->getRelativePathName()) : asset('/img/Savethedate.png') }}"
                                    alt="{{ $expo['title'] }}" class="img-fluid object-fit-cover"
                                    style="height : 306px !important">
                            @endforeach

                        </div>
                        <h5 class="text-dark-grey fw-700 mt-3">{{ $expo['title'] }}</h5>
                        <p class="date mb-2">{{ $expo['date'] }}</p>
                        <p>{{ $expo['country'] }}</p>
                    </div>
                    <div class="popup d-none align-items-center justify-content-center position-fixed top-0 start-0 w-100"
                        style="height: 100vh; background-color:rgba(0,0,0,0.5);z-index: 999999;">
                        <div class="container">

                            <div class="row justify-content-center ">

                                <div class="col-6 position-relative cust-full-w">
                                    <button class="slick-prev btn fw-700 text-primary bg-gray"><i
                                            class="fa-solid fa-arrow-left"></i></button>
                                    <button class="slick-next btn fw-700 text-primary bg-gray"><i
                                            class="fa-solid fa-arrow-right"></i></button>
                                    <div class="position-absolute top-0 start-0 m-4" style="z-index: 100">
                                        <button class="btn rounded-circle bg-white text-primary close-btn"
                                            onclick="closePopup($(this))">x</button>
                                    </div>
                                    <div class="ratio ratio-1x1">
                                        <div class="">

                                            <div class="slick h-100">
                                                @foreach ($images as $img)
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ File::exists($path) ? asset('/img/prev-conferences/' . $expo['dir'] . '/' . $img->getRelativePathName()) : asset('/img/Savethedate.png') }}"
                                                            alt="" class="img-fluid">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif


    {{-- @php
        $videos = ['j_vuRcAsIyo', 'Os7SW4Q6bYA', 'eg63FZ_iNzQ', 'p1OyXObNKMI', 'ZeXq221eZig', 'FnGZ3ucQt_E', 'YLvPMKvKE1Y', 'RH1BJ6Dm8Qo', 'dIgSXs95m2k', 'G0QgGRZxOF0', 'VAX-ELiyqQ0'];
    @endphp --}}

    {{-- <section class="bg-gray p-5">
        <div class="container position-relative">
            <button class="slick-prev btn fw-700 text-primary"><i class="fa-solid fa-arrow-left"></i></button>
            <button class="slick-next btn fw-700 text-primary"><i class="fa-solid fa-arrow-right"></i></button>
            <div class="slick slick-videos">
                <!-- Additional required wrapper -->
                <!-- Slides -->
                @for ($i = 1; $i < 12; $i++)
                    <div class="px-1">
                        <div class="border-radius-30 overflow-hidden ratio ratio-16x9">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/{{ __('videos.VIDEO_' . $i) }}?si=_IRkAV2poK2NjHyR"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>

                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section> --}}

    <div class="container">
        <hr class="my-5" />
    </div>

    @include('sections.easy')


    <script>
        const toggleShowMore = ($this, target) => {
            $this.find(`.fa-chevron-down`).toggleClass('active');
            $(target).slideToggle();
            $(target).find('.onClickOpenPopup .slick').addClass('slick-fade')

            setTimeout(() => {
                $('.slick.slick-fade').not('.slick-initialized').slick({
                    infinite: true,
                    slidesToScroll: 1,
                    centerMode: false,
                    fade: true,
                    slidesToShow: 1,
                    touchThreshold: 50,
                    prevArrow: false,
                    nextArrow: false,
                    autoplay: true,
                    autoplaySpeed: 2000,
                });
            }, 300);

        }

        $(() => {


            $('.onClickOpenPopup').on('click', function() {
                $(this).next('.popup').fadeIn().removeClass('d-none').addClass('d-flex');

                setTimeout(() => {
                    $(this).next('.popup').find('.slick').not('.slick-initialized').slick({
                        infinite: true,
                        slidesToScroll: 1,
                        centerMode: false,
                        fade: true,
                        slidesToShow: 1,
                        touchThreshold: 50,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        nextArrow: '.slick-next',
                        prevArrow: '.slick-prev',
                    })
                }, 300)


            })
        })

        const closePopup = ($this) => {
            $this.closest('.popup').fadeOut().removeClass('d-flex').addClass('d-none');
        }
    </script>
@endsection


@push('scripts')
    <script>
        $(function() {
            $('.slick.slick-videos').not('.slick-initialized').slick({
                infinite: true,
                slidesToScroll: 1,
                centerMode: true,
                slidesToShow: 2,
                centerPadding: '50px',
                touchThreshold: 50,
                autoplay: true,
                autoplaySpeed: 5000,
                nextArrow: '.slick-next',
                prevArrow: '.slick-prev',
                rtl: ("{{ App::getLocale() }}" == "ar"),
                responsive: [

                    {
                        breakpoint: 768,
                        settings: {
                            centerMode: true,
                            centerPadding: '20px',
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '20px',
                            slidesToShow: 1
                        }
                    }
                ]

            });
        })
    </script>
@endpush
