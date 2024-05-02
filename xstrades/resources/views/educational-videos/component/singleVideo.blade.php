<div class="col-md-4 mb-4">
    <a class="text-decoration-none text-secondary" href="{{ $video->video_link }}" target="blank">

        <div class="blog-item">
            <div class='text-center blog-image border-radius-30 overflow-hidden border-1 border-black ratio ratio-1x78'>
                <img src="{{ asset('storage/' . $video->video_image) }}" alt="" class="img-fluid object-fit-cover">
            </div>

            <h4 class="my-2 text-primary">
                {{ date('Y F d', strtotime($video->date)) }}</h4>

            <div class="blog-inner-item">
                <h4 class='text-dark-grey fw-700'>{{ $video->title }}</h4>
                <p>{!! Str::words(strip_tags($video->description), 20, '...') !!}</p>
            </div>
        </div>
    </a>

</div>
