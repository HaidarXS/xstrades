@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }} " />
    <meta property="og:title" content="{{ __('seo.TITLE_BLOGS') }}" />
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_BLOGS') }}" />
    <meta property="og:image" content="https://www.XSTrades.com/img/company-section/blog.svg">

    <!-- Twitter Meta Tags -->
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }} " >
    <meta name="twitter:title" content="{{ __('seo.TITLE_BLOGS') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_BLOGS') }}">
    <meta name="twitter:image" content="https://www.XSTrades.com/img/company-section/blog.svg">

    <!-- Other Meta Tags -->
    <meta property="og:locale" content="{{ App::getLocale() }}" />

@endsection
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_BLOGS') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_BLOGS') }}">
@endsection
@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('messages.BLOG'),
        'bannerDescription' => __('blog.PAGE_DESC'),
        'bannerImage' => asset('/img/company-section/blog.svg'),
        'mobileBanner' => asset('/img/company-section/blog-mobile.webp'),
    ])

    <div class="row justify-content-center mt-5">
        <div class="col-auto">
            <h1 class="text-center text-secondary fw-700">{{ __('blog.BLOG') }}</h1>
        </div>
    </div>

    <div class="container py-4">
        <div class="row mb-4">
            <div class="col-auto">
                <div class="w-100 h-100 position-relative">
                    @if (count($blogs) > 0)
                        <form method="GET">
                            <input value="{{ request()->search ?? '' }}" type="text" name="search"
                                class="border-radius-30 border-primary placeholder-primary placeholder-fw-700 border-solid px-3 placeholder-align-center text-center py-2"
                                placeholder="{{__('blog.SEARCH')}}" />
                            <button type="submit"
                                class="btn position-y-center @if (App::getLocale() == 'ar') d-flex @endif end-0 text-primary me-3">
                                <i class="fa fa-search "></i>
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
        @if (count($categories) > 0)
            <div class="row justify-content-center justify-content-md-start gx-2">
                <div class="col-auto mb-4">
                    <a class="cat-filter text-decoration-none  text-primary px-3 py-1 {{ !$activeCategory ? 'active' : '' }}"
                        href="{{ route($preview ? 'blogs.previewlist' : 'blogs', ['lang' => App()->getLocale(), 'category' => 'slug']) }}">
                        {{ __('blog.ALL') }}
                    </a>
                </div>
                @foreach ($categories as $category)
                    <div class="col-auto mb-4">
                        <a class="cat-filter text-decoration-none  text-primary px-3 py-1 {{ $activeCategory && $category->slug == $activeCategory->slug ? 'active' : '' }}"
                            href="{{ route($preview ? 'blogs.previewlist' : 'blogs', ['lang' => App()->getLocale(), 'category' => $category->slug]) }}">
                            {{ $category->translate(App::getLocale())->title }}
                        </a>
                    </div>
                @endforeach

            </div>
        @endif
        <div class="row mt-4">

            @if (count($blogs) > 0)
                @foreach ($blogs as $blog)
                    @include('components.singleBlogComponent', ['blog' => $blog])
                @endforeach
            @else
                <p class="text-center">
                    {{ __('blog.NO_BLOGS') }}
                </p>
            @endif
        </div>

        @if (count($blogs) > 0)
            {{ $blogs->links() }}
        @endif

    </div>
@endsection
