@extends('layouts.app')
@section('content')

    <section>
        <div class="container py-5">
            <h1 class="text-secondary fw-700 mb-4 text-center">
                Magazines
            </h1>
        </div>

        <div class="container">
            <div class="row text-center">
                <a href="{{ route('single-magazine', ['lang' => App::getLocale(), 'name' => 'xchanges', 'date' => 'nov2023']) }}" class="col-md-4 single-book new-tab py-3" target="_blank">
                    <img src="{{ asset('/img/flipbook/xchanges-cover.png') }}" class="w-100 book-1">
                    <div class="row">
                        <div class="row text-center py-3">
                            <h2 class="text-secondary text-decoration-none">XchangeS<span class="fw-normal">#1</span></h2>
                        </div>
                    </div>
                </a>
                <a href="{{ route('single-magazine', ['lang' => App::getLocale(), 'name' => 'xchanges', 'date' => 'dec2023']) }}" class="col-md-4 single-book new-tab py-3" target="_blank">
                    <img src="{{ asset('/img/flipbook/cover-xs-december-1.png') }}" class="w-100 book-1">
                    <div class="row">
                        <div class="row text-center py-3">
                            <h2 class="text-secondary text-decoration-none">XchangeS<span class="fw-normal">#2</span></h2>
                        </div>
                    </div>
                </a>
                <a href="{{ route('single-magazine', ['lang' => App::getLocale(), 'name' => 'xchanges', 'date' => 'jan2024']) }}" class="col-md-4 single-book new-tab py-3" target="_blank">
                    <img src="{{ asset('/img/flipbook/cover-xs-jan2024.png') }}" class="w-100 book-1">
                    <div class="row">
                        <div class="row text-center py-3">
                            <h2 class="text-secondary text-decoration-none">XchangeS<span class="fw-normal">#3</span></h2>
                        </div>
                    </div>
                </a>
                <a href="{{ route('single-magazine', ['lang' => App::getLocale(), 'name' => 'xchanges', 'date' => 'feb2024']) }}" class="col-md-4 single-book new-tab py-3" target="_blank">
                    <img src="{{ asset('/img/flipbook/cover-xs-feb2024.png') }}" class="w-100 book-1">
                    <div class="row">
                        <div class="row text-center py-3">
                            <h2 class="text-secondary text-decoration-none">XchangeS<span class="fw-normal">#4</span></h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    
@endsection
