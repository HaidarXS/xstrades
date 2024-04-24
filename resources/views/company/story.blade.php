@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('seo.TITLE_STORY') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_STORY') }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE_STORY') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_STORY') }}">
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_STORY') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_STORY') }}">
@endsection
@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('messages.STORY'),
        'bannerDescription' => __('aboutus.STORY_PAGE_SUBTITLE'),
        'bannerImage' => asset('/img/company-section/story.svg'),
        'mobileBanner' => asset('/img/company-section/story-mobile.webp'),
    ])
    <section class="text-md-start text-center">
        <div class="w-100 bg-gray">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4 col-5 mb-4 mb-md-0 d-flex justify-content-center">
                        <img class="img-fluid my-auto storyImg" src="{{ asset('/img/Component1.svg') }}"
                            alt="{{ __('aboutus.STORY') }}">
                    </div>
                    <div class="col-md-7">
                        <div class="w-100 h-100 d-flex justify-content-center flex-column text-md-start text-center">
                            <h1 class="text-secondary fw-700 mb-4">{{ __('aboutus.STORY') }}</h1>
                            <P class="">
                                {!! __('aboutus.STORY_DESCRIPTION') !!}
                            </P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4 col-5  mb-4 mb-md-0 d-flex justify-content-center">
                        <img class="img-fluid my-auto storyImg" src="{{ asset('/img/Component2.svg') }}"
                            alt="{{ __('aboutus.WHO_WE_ARE') }}">
                    </div>
                    <div class="col-md-7">
                        <div class="w-100 h-100 d-flex justify-content-center flex-column text-md-start text-center">
                            <h2 class="text-secondary fw-700 mb-4">{{ __('aboutus.WHO_WE_ARE') }}</h2>
                            <P class="">
                                {!! __('aboutus.WHO_WE_ARE_DESCRIPTION') !!}
                            </P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 bg-gray">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4 col-5 mb-4 mb-md-0 d-flex justify-content-center">
                        <img class="img-fluid my-auto storyImg" src="{{ asset('/img/Component3.svg') }}"
                            alt="{{ __('aboutus.MISSION') }}">
                    </div>
                    <div class="col-md-7">
                        <div class="w-100 h-100 d-flex justify-content-center flex-column text-md-start text-center">
                            <h3 class="text-secondary fw-700 mb-4">{{ __('aboutus.MISSION') }}</h3>
                            <P class="">
                                {!! __('aboutus.MISSION_DESCRIPTION') !!}
                            </P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4 col-5 mb-4 mb-md-0 d-flex justify-content-center">
                        <img class="img-fluid my-auto storyImg" src="{{ asset('/img/Component4.svg') }}"
                            alt="{{ __('aboutus.EXPERTISE') }}">
                    </div>
                    <div class="col-md-7">
                        <div class="w-100 h-100 d-flex justify-content-center flex-column text-md-start text-center">
                            <h3 class="text-secondary fw-700 mb-4">{{ __('aboutus.EXPERTISE') }}</h3>
                            <P class="">
                                {!! __('aboutus.EXPERTISE_DESCRIPTION_ONE') !!}
                            </P>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-secondary fw-700 mb-4">{{ __('aboutus.CORE_VALUES') }}</h3>
                </div>
            </div>

            <div class="row py-5">
                <div class="col-12">
                    <div class="row border-radius-50 p-5 grey-bg flex-column-sm justify-content-center story-box">
                        <div class="col-lg-9 col-12 mt-lg-0 mt-4">
                            <h4 class="text-navy text-capitalize mb-4">{{ __('aboutus.EXCELLENCE') }}</h4>
                            <p>{{ __('aboutus.EXCELLENCE_DESCRIPTION') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-12 ">
                    <div class="row border-radius-50 p-5 grey-bg flex-column-sm justify-content-center story-box">
                        <div class="col-lg-9 col-12 mt-lg-0 mt-4">
                            <h4 class="text-navy text-capitalize mb-4">{{ __('aboutus.INTEGRITY') }}</h4>
                            <p>{{ __('aboutus.INTEGRITY_DESCRIPTION') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-12 ">
                    <div class="row border-radius-50 p-5 grey-bg flex-column-sm justify-content-center story-box">
                        <div class="col-lg-9 col-12 mt-lg-0 mt-4">
                            <h4 class="text-navy text-capitalize mb-4">{{ __('aboutus.PEOPLE') }}</h4>
                            <p>{!! __('aboutus.PEOPLE_DESCRIPTION') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-12 ">
                    <div class="row border-radius-50 p-5 grey-bg flex-column-sm justify-content-center story-box">
                        <div class="col-lg-9 col-12 mt-lg-0 mt-4">
                            <h4 class="text-navy text-capitalize mb-4">{{ __('aboutus.INNOVATION_CREATIVITY') }}</h4>
                            <p>{!! __('aboutus.INNOVATION_CREATIVITY_DESCRIPTION') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-12">
                    <div class="row border-radius-50 p-5 grey-bg flex-column-sm justify-content-center story-box">
                        <div class="col-lg-9 col-12 mt-lg-0 mt-4">
                            <h4 class="text-navy text-capitalize mb-4">{{ __('aboutus.CONTINUOUS_IMPROVEMENT') }}</h4>
                            <p>{{ __('aboutus.CONTINUOUS_IMPROVEMENT_DESCRIPTION') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-12">
                    <div class="row border-radius-50 p-5 grey-bg flex-column-sm justify-content-center story-box">
                        <div class="col-lg-9 col-12 mt-lg-0 mt-4">
                            <h4 class="text-navy text-capitalize mb-4">{{ __('aboutus.COMMUNITY') }}</h4>
                            <p>{{ __('aboutus.COMMUNITY_DESCRIPTION') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-12">
                    <div class="row border-radius-50 p-5 grey-bg flex-column-sm justify-content-center story-box">
                        <div class="col-lg-9 col-12 mt-lg-0 mt-4">
                            <h4 class="text-navy text-capitalize mb-4">{{ __('aboutus.SECURITY') }}</h4>
                            <p>{{ __('aboutus.SECURITY_DESCRIPTION') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    {!! __('aboutus.JOIN_GLOBAL_MARKET_DESCRIPTION') !!}
                </div>
            </div>
            <hr>
        </div>
        @include('sections.easy')

    </section>
@endsection
