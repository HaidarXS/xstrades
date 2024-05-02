@extends('layouts.app')

@section('content')
    @php
        $sections = [
            [
                'icon' => '/img/safety/enhanced_insurance.svg',
                'button_url' => route('company', ['lang' => App::getLocale(), 'tab' => 'insurance']),
            ],
            [
                'icon' => '/homepage-svgs-ic/join-xs-ic.svg',
                'button_url' => route('regulations', ['lang' => App::getLocale()]),
            ],
            [
                'icon' => '/homepage-svgs-ic/join-xs-ic.svg',
                'button_url' => route('company', ['lang' => App::getLocale(), 'tab' => 'security']),
            ],
            [
                'icon' => '/img/safety/story.svg',
                'button_url' => route('story', ['lang' => App::getLocale()]),
            ],
        ];
        foreach ($sections as $i => $section) {
            $sections[$i]['title'] = __('safety.SECTION_' . $i + 1 . '_TITLE');
            $sections[$i]['description'] = __('safety.SECTION_' . $i + 1 . '_DESCRIPTION');
            $sections[$i]['button_text'] = __('safety.SECTION_' . $i + 1 . '_BUTTON_TEXT');
        }

    @endphp
    <div class="w-100 position-relative mb-5">
        <div class="position-absolute w-100 h-100 top-0 start-0 d-flex align-items-center justify-content-center">
            <h1 class="text-white text-uppercase fw-700 fw-banner text-uppercase">{{ __('safety.PAGE_BANNER_TITLE') }}</h1>
        </div>
        <img id="markets-banner" src="{{ asset('/img/safety/safety_banner.png') }}" alt="" class="img-fluid">
    </div>

    <section class="mb-5">
        <div class="container mt-3">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-secondary fw-700 text-center">{{ __('safety.PAGE_TITLE') }}</h1>
                </div>
            </div>
            <hr class="my-5">
            <div class="row justify-content-center mb-5">
                <div class="col-md-10 text-center">
                    <p>{!! __('safety.PAGE_DESCRIPTION') !!}</p>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="pt-4 d-flex justify-content-center">
                    <a href="https://my.XSTrades.com/{{ getCorrectLangSlug() }}register/?sl=1" target="_blank"
                        class="btn join-us-button py-3 px-5 fw-700">
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="me-3"><img class="btn-icon" src="{{ asset('/homepage-svgs-ic/join-xs-ic.svg') }}"
                                    alt="{{ __('insurance.JOIN_XS_NOW') }}"
                                    style="width: 30px; object-fit: contain; aspect-ratio:1/1;"></span>
                            <span>
                                {{ __('insurance.JOIN_XS') }}
                            </span>
                        </div>

                    </a>
                </div>
            </div>

        </div>
    </section>
    <section class="mb-5 pb-5">
        <div class="container">

            @foreach ($sections as $section)
                <div class="bg-gray border-radius-50 p-5">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center mb-4">
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="me-3"><img class="btn-icon" src="{{ asset($section['icon']) }}"
                                        alt="{{ __('homepage.JOIN_XS_NOW') }}"
                                        style="width: 30px; object-fit: contain; aspect-ratio:1/1;"></span>
                                <h2 class="text-secondary fw-700 mb-0">{{ $section['title'] }}</h3>
                            </div>
                        </div>
                        <div class="col-md-10 text-center mb-4">
                            <p>{!! $section['description'] !!}</p>
                        </div>

                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="pt-4 d-flex justify-content-center">
                            <a href="{{ $section['button_url'] }}" class="btn join-us-button py-3 px-5 fw-700">
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="me-3"><img class="btn-icon" src="{{ asset($section['icon']) }}"
                                            alt="{{ $section['button_text'] }}"
                                            style="width: 30px; object-fit: contain; aspect-ratio:1/1;"></span>
                                    <span>
                                        {{ $section['button_text'] }}
                                    </span>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
                @if (!$loop->last)
                    <div class="row justify-content-center my-5">
                        <div class="col-10">
                            <hr />
                        </div>
                    </div>
                @endif
            @endforeach


        </div>
    </section>
@endsection
