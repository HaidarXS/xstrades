@extends('layouts.app')


@section('meta_tags')
    @parent
    @if ($cat == 'xs-market-analysis')
        <title>{{ __('seo.TITLE_MEDIA_MARKET_ANALYSIS') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_MEDIA_ANALYSIS') }}">
    @elseif($cat == 'xs-news-in-the-media')
        <title>{{ __('seo.TITLE_MEDIA_INTHENEWS') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_MEDIA_INTHENEWS') }}">
    @elseif($cat == 'xs-team-in-the-media')
        <title>{{ __('seo.TITLE_MEDIA_INTHETEAM') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_MEDIA_INTHETEAM') }}">
    @endif
@endsection


@section('content')
    <section class="my-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-secondary fw-700">{{ __($cat . '.title') }}</h1>
                    <p class="text-secondary mt-3">{{ $singleCategory->sub_title }}</p>
                </div>
            </div>
            <div class="row">
                @foreach ($singleCategory->media as $record)
                    <div class="col-12 col-md-6 my-5">
                        <div class="row h-100 align-items-end">
                            <div class="col-10 mb-auto">
                                <h2 class="text-primary px-0">{{ $record->title }}</h2>
                            </div>
                            {{-- <div class="col-md-9 col-12 my-1">
                                <h5 class="text-secondary">{{ $record->subtitle }}</h5>
                            </div> --}}
                            <div class="col-12 my-1">
                                @if (isset($record->date))
                                    <span class="text-primary"><i
                                            class="fa fa-calendar mx-1"></i>{{ $record->formated_date }}</span>
                                @endif
                            </div>
                            <div class="col-md-9 col-12 my-1">
                                <p class="text-secondary limit-text-3">{{ $record->breif }}</p>
                            </div>
                            <div class="col-12">
                                <a class="my-1 text-decoration-none text-secondary fw-700"
                                    href="{{ $record->external_link }}" target="_blank">
                                    {{ __('media.READ_MORE') }}
                                    <i
                                        class="fa-solid fa-lg mx-1 @if (App::getLocale() == 'ar') fa-arrow-left @else fa-arrow-right @endif"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
