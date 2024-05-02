@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('seo.TITLE_EDUCATIONAL_VIDEO') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_EDUCATIONAL_VIDEO') }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE_EDUCATIONAL_VIDEO') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_EDUCATIONAL_VIDEO') }}">
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_EDUCATIONAL_VIDEO') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_EDUCATIONAL_VIDEO') }}">
@endsection
@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('educational-video.EDUCATIONAL_VIDEO'),
        'bannerDescription' => __('educational-video.PAGE_BANNER_SUBTITLE'),
        'bannerImage' => asset('/img/educational-video.png'),
        'mobileBanner' => asset('/img/educational-video-mobile.png'),
    ])
    <div class="container py-5">
        <div class="row justify-content-between pb-3">
            <div class="col-lg-12">
                <h1 class="text-secondary fw-700 text-center mb-5 ">{{ __('educational-video.EDUCATIONAL_VIDEO') }}</h1>
            </div>
        </div>
    </div>
    <div class="container py-4">
        <div class="row mt-4">

            @if (count($videos) > 0)
                @foreach ($videos as $video)
                    @include('educational-videos.component.singleVideo', ['video' => $video])
                @endforeach
            @else
                <p class="text-center">
                    {{ __('educational-video.NO_VIDEOS') }}
                </p>
            @endif
        </div>

        @if (count($videos) > 0)
            {{ $videos->links() }}
        @endif
    </div>
@endsection
