@extends('layouts.app')
@push('seo-tags')
    @if($course->seo_title != null)
    @include('components.seoTags', [
        'title' => $course->seo_title,
        'description' => $course->seo_description,
        'image' => Storage::url($course->seo_img ?? $course->featured_image),
    ])

    @endif
@endpush
@php
    $url = url()->current();
@endphp

@section('content')
@include('layouts.banner', [
    'bannerTitle' => __('course.COURSE'),
    'bannerDescription' => __('course.PAGE_DESC'),
    'bannerImage' => asset('/img/academy-banners/trading-courses.png'),
    'mobileBanner' => asset('/img/academy-banners/trading-courses-mobile.png'),
])

<div class="row justify-content-center mt-5">
    <div class="col-auto">
        <h1 class="text-secondary fw-700 mt-4">{{ $course->title }}</h1>
    </div>
</div>


    <div class="container pt-5">
        <div class="row mb-5 justify-content-center">
            <div class="col-lg-4">
                @foreach($course->step as $step)
                    <a href="" class="text-decoration-none">
                        <div class="row other-courses my-3 py-3 px-2 d-flex justify-content-center">
                            <div class="col-1">
                                <h5 class="text-grey m-0 px-2">{{ $loop->iteration }}</h5>
                            </div>
                            <div class="col-11">
                                <h5 class="text-secondary">{{ $step->title }}</h5>
                            </div>
                        </div>
                    </a>
                @endforeach

                {{-- @if ($otherCourses->count() > 0)
                    <div class="row mb-5">
                        <div class="col-12 mb-4">
                            <h3 class="fw-700 text-secondary">More</h3>
                        </div>
                        @foreach ($otherCourses as $course)
                            @include('components.singleCourseComponent')
                        @endforeach
                    </div>
                @endif --}}
            </div>
            <div class="col-lg-1">
            </div>
            <div class="col-lg-7 ps-5">
                <div class="row">
                    <div class="col-12 mt-3 text-justify course-description">{!! $course->description !!}</div>
                </div>
            </div>
        </div>
    </div>

@endsection
