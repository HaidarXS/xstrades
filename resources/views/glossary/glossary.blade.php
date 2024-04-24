@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('glossary.GLOSSARY') }} | XSTrades.com">
    <meta property="og:description" content="{{ __('glossary.PAGE_DESC') }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('glossary.GLOSSARY') }} | XSTrades.com">
    <meta name="twitter:description" content="{{ __('glossary.PAGE_DESC') }}">
@endsection
@section('meta_tags')
    @parent
    <title>{{ __('glossary.GLOSSARY') }} | XSTrades.com</title>
    <meta name="description" content="{{ __('glossary.PAGE_DESC') }}">
@endsection
@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('glossary.GLOSSARY'),
        'bannerDescription' => __('glossary.PAGE_DESC'),
        'bannerImage' => asset('/img/academy-banners/glossary.png'),
        'mobileBanner' => asset('/img/academy-banners/glossary-mobile.png'),
    ])

    <section class="py-5 glossary">
        <div class="row">
            <div class="col-12 mb-4">
                <h2 class="text-navy text-center text-uppercase col-4 m-auto">
                    {{ __('glossary.GLOSSARY') }}</h2>
            </div>
        </div>


        <div>
            <ul class="d-flex justify-content-around px-3 pb-3 filter-ul container">
                @foreach ($letters as $letter)
                    <li>
                        <a href="{{ route('glossary', ['letter' => $letter]) }}"
                            class=" filter-letter {{ $letter == $selectedLetter ? 'active' : '' }}">
                            {{ __($letter) }}
                        </a>
                    </li>
                @endforeach
            </ul>

            </ul>
        </div>



        <ul class="container">
            <h2 class="py-4 text-secondary">{{ __($selectedLetter) }}</h2>
            @foreach ($filteredItems as $item)
                <h5 class="text-primary mt-4">{{ $item['title'] }}</h5>
                <p> {{ $item['description'] }}</p>
            @endforeach
        </ul>

    </section>
@endsection
