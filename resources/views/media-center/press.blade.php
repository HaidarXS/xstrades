@extends('layouts.app')
@section('meta_tags')
    @parent
    <title>{{ __('seo.TITLE_MEDIA_PRESS') }}</title>
    <meta name="description" content="{{ __('seo.DESCRIPTION_MEDIA_PRESS') }}">
@endsection
@section('content')
    <section class="my-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">

                    <h1 class="text-secondary fw-700">{{ __('xs-press-releases.title') }}</h1>
                    <p class="text-secondary mt-3">{{ $press->sub_title }}</p>
                </div>
            </div>
            <div class="row">
                @foreach ($press->media as $record)
                    <div class="col-12 col-md-6 my-5">
                        <div class="row">
                            <div class="col-md-7 col-12 my-3">
                                <div class="ratio ratio-1x1">
                                    <img class="w-100 border-rad-20 box-shadow object-fit-cover"
                                        src="{{ asset('storage/' . $record->thumbnail_image) }}" alt="{{ $record->title }}">
                                </div>
                            </div>
                            <div class="col-md-9 col-12 my-1">
                                <h5 class="text-secondary">{{ $record->title }}</h5>
                            </div>
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
                                    href="{{ route('single-media', ['category' => $press->slug, 'slug' => $record->slug]) }}"
                                    target="_blank">{{ __('media.READ_MORE') }} <i
                                        class="fa-solid fa-lg @if (App::getLocale() == 'ar') fa-arrow-left @else fa-arrow-right @endif mx-1"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
