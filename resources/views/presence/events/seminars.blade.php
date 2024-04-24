@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('seo.TITLE_SEMINARS') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_SEMINARS') }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE_SEMINARS') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_SEMINARS') }}">
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_SEMINARS') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_SEMINARS') }}">
@endsection
@section('content')

    @include('layouts.banner', [
        'bannerTitle' => __('events.SEMINARS'),
        'bannerDescription' => __('events.SEMINARS_PAGE_SUBTITLE'),
        'bannerImage' => asset('/img/events-banners/seminars.svg'),
        'mobileBanner' => asset('/img/events-banners/seminars-mobile.webp'),
    ])

    {{-- <div class="container py-5">
        <div class="row">
            <div class="col-12 mb-4">
                <h1 class="text-navy text-center text-uppercase col-4 m-auto">{{ __('presence.SEMINARS') }}</h1>
            </div>
            <div class="col-12">
                <img src="{{ asset('/img/seminars.webp') }}" class="py-5 img-fluid" alt="XSTrades.com at the seminars">
            </div>
        </div>
    </div> --}}
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
    @if (count($upcoming) > 0)
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-12 my-5">
                    <div class="d-flex align-items-center">
                        <button onclick="toggleShowMore($(this) ,'.more-upcoming')"
                            class="text-secondary btn text-lg d-flex align-items-center px-0" style="font-size: 40px">
                            {{ __('expos.UPCOMING_SEMINARS') }}
                            {{-- <i class="fa-solid fa-chevron-down text-secondary ms-2" style="font-size: 40px"></i> --}}
                        </button>
                    </div>
                </div>
                @forelse ($upcoming as $seminar)
                    <div class="col-md-3 onClickOpenPopup">
                        <img src="{{ asset('/img/seminars_1.webp') }}" alt="{{ $seminar['title'] }}" class="img-fluid">
                        <h5 class="text-dark-grey fw-700 mt-3">{{ $seminar['title'] }}<h5>
                                <p class="date mb-2">{{ $seminar['date'] }}</p>
                                <p>{{ $seminar['country'] }}</p>
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
                                    <img src="{{ asset('/img/oman-seminar.webp') }}" alt="{{ $seminar['title'] }}"
                                        class="img-fluid w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>

            {{-- <div class="more-upcoming row justify-content-start" style="display: none;">
                @for ($i = 0; $i < 7; $i++)
                    <div class="col-md-3 onClickOpenPopup {{ $i % 3 != 0 ? 'offset-md-1' : '' }} ">
                        <img src="{{ asset('/img/exposdummy.png') }}" alt="" class="img-fluid">
                        <h5 class="text-dark-grey fw-700 mt-3">JORDAN FINANCIAL EXPO & AWARDS JFEX</h5>
                        <p class="date">05-06 sep 2023</p>
                        <p>Amman, Jordan</p>
                    </div>
                    <div class="popup d-none align-items-center justify-content-center position-fixed top-0 start-0 w-100" style="height: 100vh; background-color:rgba(0,0,0,0.5);z-index: 999999;">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-6 position-relative">
                                    <div class="position-absolute top-0 start-0 m-4" >
                                        <button class="btn rounded-circle bg-white text-primary close-btn" onclick="closePopup($(this))" >x</button>
                                    </div>
                                    <img src="{{ asset('/img/exposdummy.png') }}" alt="" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor


            </div> --}}
        </div>
    @endif

    @if (count($prev))
        <div class="container mt-5">
            <div class="row justify-content-start">
                <div class="col-12 mb-5">
                    <button onclick="toggleShowMore($(this) ,'.more-previous')"
                        class="text-secondary btn text-lg d-flex align-items-center px-0" style="font-size: 40px">
                        <h2>{{ __('expos.PREVIOUS_SEMINARS') }}</h2>
                        {{-- <i class="fa-solid fa-chevron-down text-secondary ms-2" style="font-size: 40px"></i> --}}
                    </button>
                </div>

                @forelse ($prev as $seminar)
                    @php
                        $path = public_path('/img/prev-seminars/' . $seminar['dir']);
                        $images = [''];
                        if (File::exists($path)) {
                            $images = File::allFiles($path);
                        }
                    @endphp
                    <div class="col-md-3 onClickOpenPopup">
                        <div class="slick slick-fade">

                            @foreach ($images as $img)
                                <img src="{{ File::exists($path) ? asset('/img/prev-seminars/' . $seminar['dir'] . '/' . $img->getRelativePathName()) : asset('/img/Savethedate.png') }}"
                                    alt="{{ $seminar['title'] }}" class="img-fluid object-fit-cover"
                                    style="height : 306px !important">
                            @endforeach

                        </div>
                        <h5 class="text-dark-grey fw-700 mt-3">{{ $seminar['title'] }}</h5>
                        <p class="date">{{ $seminar['date'] }}</p>
                        <p>{{ $seminar['country'] }}</p>
                    </div>
                    <div class="popup d-none align-items-center justify-content-center position-fixed top-0 start-0 w-100"
                        style="height: 100vh; background-color:rgba(0,0,0,0.5);z-index: 999999;">
                        <div class="container">
                            <div class="row justify-content-center">
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
                                                        <img src="{{ File::exists($path) ? asset('/img/prev-seminars/' . $seminar['dir'] . '/' . $img->getRelativePathName()) : asset('/img/Savethedate.png') }}"
                                                            alt="{{ $seminar['title'] }}" class="img-fluid">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>

            {{-- <div class="more-previous row justify-content-start" style="display: none;">
            @for ($i = 0; $i < 7; $i++)
                <div class="col-md-3 onClickOpenPopup {{ $i % 3 != 0 ? 'offset-md-1' : '' }} ">
                    <img src="{{ asset('/img/exposdummy.png') }}" alt="" class="img-fluid">
                    <h5 class="text-dark-grey fw-700 mt-3">JORDAN FINANCIAL EXPO & AWARDS JFEX</h5>
                    <p class="date">05-06 sep 2023</p>
                    <p>Amman, Jordan</p>
                </div>
                <div class="popup d-none align-items-center justify-content-center position-fixed top-0 start-0 w-100" style="height: 100vh; background-color:rgba(0,0,0,0.5);z-index: 999999;">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-6 position-relative">
                                <div class="position-absolute top-0 start-0 m-4" >
                                    <button class="btn rounded-circle bg-white text-primary close-btn" onclick="closePopup($(this))" >x</button>
                                </div>
                                <img src="{{ asset('/img/exposdummy.png') }}" alt="" class="img-fluid w-100">
                            </div>
                        </div>
                    </div>
                </div>
            @endfor

        </div> --}}
        </div>
    @endif


    {{-- <section class="bg-gray p-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mx-auto mb-5">
                    <h2 class="text-secondary">{{ __('presence.VIDEOS') }}</h2>
                </div>
                <div class="col-md-6">
                    <div class="border-radius-30 overflow-hidden ratio ratio-16x9 mb-4">
                        <img src="{{ asset('/img/exposdummy.png') }}" alt=""
                            class="object-fit-cover img-fluid w-100">
                    </div>
                    <p class="text-lg">caption - name of the video - date</p>
                </div>
                <div class="col-md-6">
                    <div class="border-radius-30 overflow-hidden ratio ratio-16x9 mb-4">
                        <img src="{{ asset('/img/exposdummy.png') }}" alt=""
                            class="object-fit-cover img-fluid w-100">
                    </div>
                    <p class="text-lg">caption - name of the video - date</p>
                </div>
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
