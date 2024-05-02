<div class="col-md-4 mb-4">
    <a class="text-decoration-none text-secondary"
        href="{{ route('course-overview', ['lang' => App::getLocale(), 'slug' => $course->slug]) }}">

        <div class="course-item">
            <div class='text-center course-image border-radius-30 overflow-hidden border-1 border-black ratio ratio-1x78'>
                <img src="{{ asset('storage/' . $course->featured_image) }}" alt=""
                    class="img-fluid object-fit-cover">
            </div>

            <div class="d-flex justify-content-between my-2">
                <p class="text-primary mb-2">{{ $course->category ? $course->category->title : __('course.DEFAULT_CATEGORY') }}
                </p>
            </div>
            <p class="mb-2">
                {{ date('Y F d', strtotime($course->published_date)) }}</p>

            <div class="course-inner-item">
                <h4 class='text-dark-grey fw-700'>{{ $course->title }}</h4>
                <p>{!! Str::words(strip_tags($course->description), 20, '...') !!}</p>
            </div>
        </div>
    </a>

</div>
