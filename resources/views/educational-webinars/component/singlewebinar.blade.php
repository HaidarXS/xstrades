<div class="col-md-4 mb-4">
    <a class="text-decoration-none text-secondary" href="{{ $webinar->webinar_link }}" target="blank">

        <div class="blog-item">
            <div class='text-center blog-image border-radius-30 overflow-hidden border-1 border-black ratio ratio-1x78'>
                <img src="{{ asset('storage/' . $webinar->webinar_image) }}" alt=""
                    class="img-fluid object-fit-cover">
            </div>

            <p class="my-2 text-primary">
                {{ date('Y F d', strtotime($webinar->date)) }}</p>
            <p class="my-2 text-primary">
                {{ $webinar->time }}</p>

            <div class="blog-inner-item">
                <h4 class='text-dark-grey fw-700'>{{ $webinar->title }}</h4>
                <p>{!! Str::words(strip_tags($webinar->description), 20, '...') !!}</p>
                <p class="my-3 text-primary">
                    {{ $webinar->speaker }}</p>
            </div>
        </div>
    </a>

</div>
