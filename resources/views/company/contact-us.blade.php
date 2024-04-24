@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('seo.TITLE_CONTACTS') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_CONTACTS') }}">
      

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{url()->current()}}">
    <meta name="twitter:title" content="{{ __('seo.TITLE_CONTACTS') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_CONTACTS') }}">
      
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_CONTACTS') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_CONTACTS') }}">
@endsection
@section('content')
    <div class="w-100">
        <img src="{{ asset('img/contact-banner.png') }}" alt="Careers" class="img-fluid">
    </div>

    @php
        $contacts = [
            [
                'title' => __('aboutus.EMAIL_SUPPORT'),
                'description' => __('aboutus.EMAIL_SUPPORT_DESC'),
                'image' => '/svgs/email.svg',
            ],

            [
                'title' => __('aboutus.LIVE_CHAT'),
                'description' => __('aboutus.LIVE_CHAT_DESC'),
                'image' => '/svgs/liveChat.svg',
            ],

            [
                'title' => __('aboutus.SOCAIL_MEDIA'),
                'description' => __('aboutus.SOCAIL_MEDIA_DESC'),
                'image' => '/svgs/socialMedia.svg',
            ],

            [
                'title' => __('aboutus.FEEDBACK_FORM'),
                'description' => __('aboutus.FEEDBACK_FORM_DESC'),
                'image' => '/svgs/feedback.svg',
            ],
        ];
    @endphp
    <section class="text-md-start text-center">
        <div class="container">
            <div class="row py-5 flex-column-reverse-sm">
                <div class="col-lg-7 col-sm-12">
                    <div class="row">
                        <h1 class="col-12  text-navy text-capitalize mb-3">{{ __('aboutus.CONTACT_US') }}</h1>
                        <p class="col-sm-10 col-12 mt-3">{{ __('aboutus.CONTACT_US_VALUE') }} </p>
                    </div>
                </div>

                <img src="{{ asset('/img/conatctus-img.png') }}" alt="contact us"
                    class="col-sm-5 col-8 mb-lg-0 mb-5 m-auto">
            </div>

            <div class="row py-5">
                @foreach ($contacts as $contact)
                    <div class="col-12 py-5">
                        <div class="row border-radius-50 p-5 grey-bg flex-column-sm">
                            <div class="col-lg-4 col-8 m-auto d-flex justify-content-center">
                                <img src="{{ asset($contact['image']) }}" class="contact-svg" alt="{{ $contact['title'] }}">
                            </div>

                            <div class="col-lg-8 col-12 mt-lg-0 mt-4">
                                <h3 class="text-navy text-capitalize">{{ $contact['title'] }}</h3>
                                <p>{{ $contact['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <hr>
            @include('sections.easy')
        </div>


    </section>
@endsection
