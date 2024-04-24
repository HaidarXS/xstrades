@extends('layouts.app')
@section('opengraph')
    <meta property="og:locale" content="{{ App::getLocale() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="blog" />
    <meta property="og:description"
        content="Discover valuable insights on the forex market and trading on XSTrades.com's blog. Stay informed and enhance your trading knowledge. Dive in now!" />
    <meta property="og:url" content="{{ url()->current() }} " />
    <meta property="og:site_name" content="XSTrades.com Blog: Insights into Trading & Markets" />
    <meta name="twitter:card" content="summary_large_image" />
@endsection
@section('content')

    @include('layouts.banner', [
        'bannerTitle' => __('market-analysis.MARKET_ANALYSIS'),
        'bannerDescription' => __('market-analysis.PAGE_DESC'),
        'bannerImage' => asset('/img/academy-banners/market-analysis.png'),
        'mobileBanner' => asset('/img/academy-banners/market-analysis-mobile.png'),
    ])

    <section>
        <div class="row justify-content-center mt-5">
            <div class="col-auto">
                <h1 class="text-center text-secondary fw-700">{{ __('market-analysis.MARKET_ANALYSIS') }}</h1>
            </div>
        </div>

        <div class="container py-4">
            <div class="row mb-4">
                <div class="col-auto">
                    <div class="w-100 h-100 position-relative">
                        @if (count($analysis) > 0)
                            <form method="GET">
                                <input value="{{ request()->search ?? '' }}" type="text" name="search"
                                    class="border-radius-30 border-primary placeholder-primary placeholder-fw-700 border-solid px-3 placeholder-align-center text-center py-2"
                                    placeholder="search" />
                                <button type="submit" class="btn position-y-center end-0 text-primary me-3">
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
                            href="{{ route($preview ? 'analysis.previewlist' : 'analysis', ['lang' => App()->getLocale(), 'category' => 'slug']) }}">
                            All
                        </a>
                    </div>
                    @foreach ($categories as $category)
                        <div class="col-auto mb-4">
                            <a class="cat-filter text-decoration-none  text-primary px-3 py-1 {{ $activeCategory && $category->slug == $activeCategory->slug ? 'active' : '' }}"
                                href="{{ route($preview ? 'analysis.previewlist' : 'analysis', ['lang' => App()->getLocale(), 'category' => $category->slug]) }}">
                                {{ $category->translate(App::getLocale())->title }}
                            </a>
                        </div>
                    @endforeach

                </div>
            @endif
            <div class="row mt-4">

                @if (count($analysis) > 0)
                    @foreach ($analysis as $analysis)
                        @include('components.singleAnalysisComponent', ['blog' => $analysis])
                    @endforeach
                @endif
            </div>

        </div>
    </section>
@endsection
