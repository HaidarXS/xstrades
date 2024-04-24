@extends('layouts.app')

@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('csr-page.CSR'),
        'bannerDescription' => __('csr-page.PAGE_DESC'),
        'bannerImage' => asset('/webp/csr/csr.webp'),
        'mobileBanner' => asset('/webp/csr/csr-mobile.webp'),
    ])

    <section class="container py-5">
        <h3 class="text-secondary mb-4">{{ $csr->title }}</h3>
        <div class="row">
            <div class="col-lg-8 col-12 onClickOpenPopup">
                <img src="{{ asset('storage/' . $csr->image) }}" alt="{{ $csr->title }}" class="img-fluid object-fit-cover">
            </div>

            <div class="col-lg-4 col-12">
                <p class="mb-0">{{ $csr->date }}</p>
                <p class="fw-700">{{ $csr->location }}</p>
                <p class="mt-4">{{ strip_tags($csr->description) }}</p>
            </div>
        </div>

        <div class="popup d-none align-items-center justify-content-center position-fixed top-0 start-0 w-100"
            style="height: 100vh; background-color:rgba(0,0,0,0.5);z-index: 999999;">
            <div class="container">

                <div class="row justify-content-center ">

                    <div class="col-6 position-relative">
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
                                @php
                                    $csr = $sliderImagesString = $csr->slider_image ?? '[]';
                                    $sliderImages = json_decode($sliderImagesString);
                                @endphp
                                <div class="popup-slider slick h-100">
                                    @if ($sliderImages)
                                        @foreach ($sliderImages as $img)
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('storage/' . $img) }}" class="img-fluid">
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var onClickOpenPopupElements = document.querySelectorAll('.onClickOpenPopup');
            var popupElement = document.querySelector('.popup');

            onClickOpenPopupElements.forEach(function(element) {
                element.addEventListener('click', function() {
                    popupElement.classList.remove('d-none');
                    popupElement.classList.add('d-flex');

                    $('.popup-slider').slick({
                        dots: false,
                        arrows: true,
                        nextArrow: '.slick-next',
                        prevArrow: '.slick-prev',
                    });
                });
            });


            const closePopup = ($this) => {
                $this.closest('.popup').fadeOut().removeClass('d-flex').addClass('d-none');
            };


            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('close-btn')) {
                    closePopup($(event.target));
                }
            });
        });
    </script>
@endsection
