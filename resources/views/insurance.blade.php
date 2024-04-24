@extends('layouts.app')
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_INSURANCE') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_INSURANCE') }}">
@endsection
@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('insurance.INSURANCE'),
        'bannerDescription' => __('insurance.INSURANCE_PAGE_SUBTITLE'),
        'bannerImage' => asset('/img/company-section/inssurance.svg'),
        'mobileBanner' => asset('/img/company-section/inssurance-mobile.webp'),
    ])
    {{-- <div class="w-100 position-relative text-center">
        <img src="{{ asset('img/insurance/insurance-banner.png') }}" alt="{{ __('insurance.INSURANCE') }}"
            class="img-fluid w-100">
        <h1 class="m-auto position-absolute text-img-center">
            {{ __('insurance.INSURANCE') }}</h1>
    </div> --}}

    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-secondary fw-700 text-center">{!! __('insurance.INSURANCE_TITLE') !!}</h1>
                </div>
            </div>
            <hr class="my-5">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <p>{!! __('insurance.DESCRIPTION') !!}</p>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="pt-4 d-flex justify-content-center">
                    <button type="button" class="btn join-us-button py-3 px-5 fw-700" data-bs-toggle="modal"
                        data-bs-target="#myModal">
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="me-3"><img class="btn-icon" src="{{ asset('/img/insurance/certificate.svg') }}"
                                    alt=" {{ __('insurance.CERTIFICATE') }}"
                                    style="width: 30px; object-fit: contain; aspect-ratio:1/1;"></span>
                            <span>
                                {{ __('insurance.CERTIFICATE') }}
                            </span>
                        </div>

                        </a>
                </div>
            </div>

            <div class="container">
                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img class="img-fluid w-100" src="/img/insurance/certificate.jpg" alt="Certificate">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a type="button" class="btn bg-primary text-white"
                                    href="/docs/XS Ltd_Confirmation of Cover_PI_11.10.2023.pdf"
                                    download="/docs/XS Ltd_Confirmation of Cover_PI_11.10.2023.pdf">Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>

    <section class="my-5 text-center">
        <div class="container my-5">
            <div class=" py-3 px-5 grey-bg border-radius-50">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="container py-4">
                        <div class="row">
                            <h2 class="col-12 mb-3 text-secondary text-center mt-2 mb-4 fw-700">
                                {{ __('insurance.ABOUT_LLOYD') }}
                            </h2>
                        </div>
                        <div class="row">
                            <p class="text-center col-10 mx-auto">{!! __('insurance.ABOUT_LLOYD_DESC') !!}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5 text-center">
        <div class="container my-5">
            <div class=" py-3 px-5 grey-bg border-radius-50">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="container py-4">
                        <div class="row">
                            <h2 class="col-12 mb-3 text-secondary text-center mt-2 mb-4 fw-700">
                                {{ __('insurance.HOW_DOES_INSURANCE') }}
                            </h2>
                        </div>
                        <div class="row">
                            <p class="text-center col-10 mx-auto">{!! __('insurance.HOW_DOES_INSURANCE_DESC') !!}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

   <div class="container">
    <section class="my-5 text-center">
        <div class="row">
            <h2 class="col-12 mb-3 text-secondary text-center mt-2 mb-4 fw-700">
                {{ __('insurance.KEY_BENEFITS') }}
            </h2>
        </div>

        <div class="row py-4">
            <div class="row text-start container mx-auto my-1">
                <div class="col-12 mx-auto">
                    <div class="row">
                        <div class="col-lg-1 col-2 mt-1 text-center">
                            @if (session()->get('locale') == 'ar')
                                <img style="width:40px; height:auto; aspect-ratio:1/1; transform: scaleX(-1);"
                                    alt="excellent support" src="{{ asset('/img/insurance/commitment.svg') }}" />
                            @else
                                <img style="width:40px; height:auto; aspect-ratio:1/1;" alt="excellent support"
                                    src="{{ asset('/img/insurance/commitment.svg') }}" />
                            @endif
                        </div>
                        <p class="col-lg-11 col-10  mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('insurance.REASON_TITLE_1') }}</span>
                            {{ __('insurance.REASON_DESC_1') }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="row text-start container mx-auto my-1">
                <div class="col-12 mx-auto">
                    <div class="row">
                        <div class="col-lg-1 col-2 mt-1 text-center">
                            @if (session()->get('locale') == 'ar')
                                <img style="width:40px; height:auto; aspect-ratio:1/1; transform: scaleX(-1);"
                                    alt="excellent support" src="{{ asset('/img/insurance/regulatory.svg') }}" />
                            @else
                                <img style="width:40px; height:auto; aspect-ratio:1/1;" alt="excellent support"
                                    src="{{ asset('/img/insurance/regulatory.svg') }}" />
                            @endif
                        </div>
                        <p class="col-lg-11 col-10  mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('insurance.REASON_TITLE_2') }}</span>
                            {{ __('insurance.REASON_DESC_2') }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="row text-start container mx-auto my-1">
                <div class="col-12 mx-auto">
                    <div class="row">
                        <div class="col-lg-1 col-2 mt-1 text-center">
                            @if (session()->get('locale') == 'ar')
                                <img style="width:40px; height:auto; aspect-ratio:1/1; transform: scaleX(-1);"
                                    alt="excellent support" src="{{ asset('/img/insurance/peace-of-mind.svg') }}" />
                            @else
                                <img style="width:40px; height:auto; aspect-ratio:1/1;" alt="excellent support"
                                    src="{{ asset('/img/insurance/peace-of-mind.svg') }}" />
                            @endif
                        </div>
                        <p class="col-lg-11 col-10  mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('insurance.REASON_TITLE_3') }}</span>
                            {{ __('insurance.REASON_DESC_3') }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="row text-start container mx-auto my-1">
                <div class="col-12 mx-auto">
                    <div class="row">
                        <div class="col-lg-1 col-2 mt-1 text-center">
                            @if (session()->get('locale') == 'ar')
                                <img style="width:40px; height:auto; aspect-ratio:1/1; transform: scaleX(-1);"
                                    alt="excellent support" src="{{ asset('/img/insurance/security.svg') }}" />
                            @else
                                <img style="width:40px; height:auto; aspect-ratio:1/1;" alt="excellent support"
                                    src="{{ asset('/img/insurance/security.svg') }}" />
                            @endif

                        </div>
                        <p class="col-lg-11 col-10  mb-3 text-lg px-0">
                            <span class="text-secondary subttl">{{ __('insurance.REASON_TITLE_4') }}</span>
                            {{ __('insurance.REASON_DESC_4') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <p class="text-center col-8 mx-auto">{!! __('insurance.READY_TO_EXPERIENCE_THE_PEACE') !!}</p>
        </div>

        <div class="row justify-content-center mb-3">
            <div class="pt-4">
                <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1" target="_blank"
                    class="btn join-us-button py-3 px-5 fw-700">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="me-3"><img class="btn-icon" src="{{ asset('/homepage-svgs-ic/join-xs-ic.svg') }}"
                                alt="{{ __('insurance.JOIN_XS_NOW') }}"
                                style="width: 30px; object-fit: contain; aspect-ratio:1/1;"></span>
                        <span>
                            {{ __('insurance.JOIN_XS') }}
                        </span>
                    </div>

                </a>
            </div>
        </div>
    </section>
   </div>
@endsection
