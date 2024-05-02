<div class="col-md-4 mb-4">
    <a class="text-decoration-none text-secondary"
        href="{{ route($preview ? 'analysis.previewlist' : 'analysis', ['lang' => App()->getLocale(), 'category' => $analysis->slug]) }}">

        <div class="blog-item">
            <div class='text-center blog-image border-radius-30 overflow-hidden border-1 border-black ratio ratio-1x78'>
                <img src="{{ asset('storage/' . $analysis->featured_image) }}" alt=""
                    class="img-fluid object-fit-cover">
            </div>

            <div class="d-flex justify-content-between my-2">
                <p class="text-primary mb-2">
                    {{ $analysis->category ? $analysis->category->title : __('market-analysis.DEFAULT_CATEGORY') }}
                </p>
            </div>
            <p class="mb-2">
                {{ date('Y F d', strtotime($analysis->published_date)) }}</p>

            <div class="blog-inner-item">
                <h4 class='text-dark-grey fw-700'>{{ $analysis->title }}</h4>
                <p>{!! Str::words(strip_tags($analysis->description), 20, '...') !!}</p>
            </div>
        </div>
    </a>

</div>
