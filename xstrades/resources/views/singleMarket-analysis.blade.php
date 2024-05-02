@extends('layouts.app')
@push('seo-tags')
    @include('components.seoTags', [
        'title' => $analysis->seo_title,
        'description' => $analysis->seo_description,
        'image' => Storage::url($analysis->seo_img ?? $analysis->featured_image),
    ])
@endpush
@php
    $url = url()->current();
@endphp
{{-- @section('opengraph')
    <meta property="og:locale" content="{{ App::getLocale() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="blog" />
    <meta property="og:description"
        content="Discover valuable insights on the forex market and trading on XSTrades.com's blog. Stay informed and enhance your trading knowledge. Dive in now!" />
    <meta property="og:url" content="{{ url()->current() }} " />
    <meta property="og:site_name" content="XSTrades.com Blog: Insights into Trading & Markets" />
    <meta name="twitter:card" content="summary_large_image" />
@endsection --}}
@section('content')
    <div class="container pt-5">
        {{-- @if (count($categories) > 0)
            <div class="row justify-content-center justify-content-md-start gx-2">
                <div class="col-auto mb-4">
                    <a class="cat-filter text-decoration-none  text-primary px-3 py-1 "
                        href="{{ route('blogs', ['lang' => App::getLocale()]) }}">
                        All
                    </a>
                </div>
                @foreach ($categories as $category)
                    <div class="col-auto mb-4">
                        <a class="cat-filter text-decoration-none  text-primary px-3 py-1 {{ $category->slug == $analysis->category->slug ? 'active' : '' }}"
                            href="{{ route('blogs', ['lang' => App::getLocale(), 'category' => $category->slug]) }}">
                            {{ $category->translate(App::getLocale())->title }}
                        </a>
                    </div>
                @endforeach

            </div>
        @endif --}}
        <div class="row mb-5 justify-content-center">
            <div class="col-lg-8">
                <div class="row mt-5">
                    <div class="col-auto">
                        <p class="cat-filter text-decoration-none  text-primary px-3 py-1 active">
                            {{ $analysis->category->title }}
                        </p>
                    </div>
                    <div class="col-12">

                        <h1 class="text-dark-grey fw-700 mt-4">{{ $analysis->title }}</h1>
                        <p class="m-0 mt-3">by {{ $analysis->author_name }}</p>
                        <p class="m-0 mt-3">{{ date('Y F d', strtotime($analysis->published_date)) }}</p>
                    </div>
                    <div class="col-lg-12 mt-5">
                        <div class="border-radius-30 ratio ratio-16x9">
                            <img src="{{ asset('storage/' . $analysis->banner_image) }}" alt=""
                                class="img-fluid object-fit-cover border-radius-30">
                        </div>
                    </div>
                    <div class="col-12 mt-5 d-flex flex-column">
                        <p class="m-0 mt-5 text-justify">{!! $analysis->small_description !!}</p>
                    </div>
                    <div class="col-12 mt-3 text-justify blog-description">{!! $analysis->description !!}</div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-2 col-5 d-flex align-items-center">
                        <p style="margin-top: 1rem">Share: </p>
                    </div>
                    <div class="col-md-6 col-7 d-flex align-items-center">
                        <a class="btn btn-primary my-1 mx-1" href="{{ route('analysis.share.facebook', ['url' => $url]) }}"
                            target="_blank">
                            <i class="fab fa-facebook-square fa-lg"></i> <!-- Facebook icon -->
                        </a>
                        <a class="btn btn-primary my-1 mx-1" href="{{ route('analysis.share.twitter', ['url' => $url]) }}"
                            target="_blank">
                            <i class="fab fa-twitter-square fa-lg"></i> <!-- Twitter icon -->
                        </a>
                        <a class="btn btn-primary my-1 mx-1" href="{{ route('analysis.share.linkedin', ['url' => $url]) }}"
                            target="_blank">
                            <i class="fab fa-linkedin fa-lg"></i> <!-- LinkedIn icon -->
                        </a>
                        <a class="btn btn-primary my-1 mx-1"
                            href="mailto:?subject=Check out this blog&body=Hi! I thought you might be interested in reading this blog:%0D%0A{{ $url }}"
                            target="_blank">
                            <i class="fas fa-envelope fa-lg"></i> <!-- Email icon -->
                        </a>
                    </div>
                </div>
            </div>
        </div>

        @if ($otherAnalysis->count() > 0)
            <div class="row mb-5">
                <div class="col-12 mb-4">
                    <h3 class="fw-700 text-secondary">More</h3>
                </div>
                @foreach ($otherAnalysis as $analysis)
                    @include('components.singleAnalysisComponent')
                @endforeach
            </div>
        @endif

    </div>

@endsection
