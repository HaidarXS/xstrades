@extends('layouts.app')
@section('content')
@include('layouts.banner', [
    'bannerTitle' => __('course.COURSE'),
    'bannerDescription' => __('course.PAGE_DESC'),
    'bannerImage' => asset('/img/academy-banners/trading-courses.png'),
    'mobileBanner' => asset('/img/academy-banners/trading-courses-mobile.png'),
])

<div class="row justify-content-center mt-5">
    <div class="col-auto">
        <h1 class="text-center text-secondary fw-700">{{ __('course.COURSE_OVERVIEW') }}</h1>
    </div>
</div>

<div class="container">
    <div class="row my-3">
        <div class="col-md-7 py-3">
            <div class="row">
                <div class="col-12">
                    <p class="fs-5">{{ __('course.DESCRIPTION') }} <br/><span class="text-primary">{!! $course->description !!}</span></p>
                </div>
            </div>
        </div>

        <div class="col-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-12 py-3">
                            <p class="fs-5">{{ __('course.TIME') }} <br/><span class="text-primary">{!! $course->time !!}</span></p>
                        </div>
                        <div class="col-12 py-3">
                            <p class="fs-5">{{ __('course.LEVEL') }} <br/><span class="text-primary">{!! $course->category->title !!}</span></p>
                        </div>
                        <div class="col-12 py-3">
                            <p class="fs-5">{{ __('course.BENEFITS') }} <br/>
                                <span class="text-primary">
                                    <ul class="list-style-none">
                                        @foreach($course->benefit as $benefit)
                                            <li class="text-primary fs-5 py-1"><span><img width="25" src="http://XSTrades.com/storage/{{ $benefit->image }}" alt=""></span> {!! $benefit->title !!}</li>
                                        @endforeach
                                    </ul>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <a class="btn btn-green" href="{{ route('course-single', ['lang' => App()->getLocale(), 'slug' => $course->slug]) }}">{{ __('course.START_COURSE') }}</a>
                
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    @foreach($course->step as $step)
    <div class="row other-courses my-3 py-4 px-2 d-flex justify-content-center">
        <div class="col-1 px-4">
            <h3 class="text-grey">{{ $loop->iteration }}</h3>
        </div>
        <div class="col-11">
            <h3 class="text-secondary">{{ $step->title }}</h3>
        </div>
    </div>
@endforeach
</div>

@endsection
