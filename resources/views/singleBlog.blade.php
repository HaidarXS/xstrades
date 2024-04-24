@extends('layouts.app')
@push('seo-tags')
    @include('components.seoTags', [
        'title' => $blog->seo_title,
        'description' => $blog->seo_description,
        'image' => Storage::url($blog->seo_img ?? $blog->featured_image),
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
                        <a class="cat-filter text-decoration-none  text-primary px-3 py-1 {{ $category->slug == $blog->category->slug ? 'active' : '' }}"
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
                            {{ $blog->category->title }}
                        </p>
                    </div>
                    <div class="col-12">

                        <h1 class="text-dark-grey fw-700 mt-4">{{ $blog->title }}</h1>
                        <p class="m-0 mt-3">{{ __('blog.BY') }} {{ $blog->author_name }}</p>
                        @php
                            $lang = App::getLocale();
                        @endphp

                        @if ($lang)
                            <p class="m-0 mt-3">
                                {{ $blog->date ? $blog->date : date('Y F d', strtotime($blog->published_date)) }}
                            </p>
                        @else
                            <p class="m-0 mt-3">{{ date('Y F d', strtotime($blog->published_date)) }}</p>
                        @endif
                    </div>
                    <div class="col-lg-12 mt-5">
                        <div class="border-radius-30 ratio ratio-16x9">
                            <img src="{{ asset('storage/' . $blog->banner_image) }}" alt=""
                                class="img-fluid object-fit-cover border-radius-30">
                        </div>
                    </div>
                    <div class="col-12 mt-5 d-flex flex-column">
                        <p class="m-0 mt-5 text-justify">{!! $blog->small_description !!}</p>
                    </div>
                    <div class="col-12 mt-3 text-justify blog-description">{!! $blog->description !!}</div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-2 col-5 d-flex align-items-center" style="width: fit-content;">
                        <p style="margin-top: 1rem">{{ __('blog.SHARE_THIS_BLOG') }} </p>
                    </div>
                    <div class="col-md-6 col-7 d-flex align-items-center">
                        <a class="btn btn-primary my-1 mx-1" href="{{ route('blog.share.facebook', ['url' => $url]) }}"
                            target="_blank">
                            <i class="fab fa-facebook-square fa-lg"></i> <!-- Facebook icon -->
                        </a>
                        <a class="btn btn-primary my-1 mx-1" href="{{ route('blog.share.twitter', ['url' => $url]) }}"
                            target="_blank">
                            <i class="fab fa-twitter-square fa-lg"></i> <!-- Twitter icon -->
                        </a>
                        <a class="btn btn-primary my-1 mx-1" href="{{ route('blog.share.linkedin', ['url' => $url]) }}"
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

        @if ($otherBlogs->count() > 0)
            <div class="row mb-5">
                <div class="col-12 mb-4">
                    <h3 class="fw-700 text-secondary">{{ __('blog.MORE') }}</h3>
                </div>
                @foreach ($otherBlogs as $blog)
                    @include('components.singleBlogComponent')
                @endforeach
            </div>
        @endif

    </div>

@endsection
