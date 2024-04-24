<div class="col-md-4 mb-4">
    <a class="text-decoration-none text-secondary"
        href="{{ route('csr', ['lang' => App()->getLocale(), 'category' => $csr->slug]) }}">

        <div class="blog-item">
            <div class='text-center blog-image border-radius-30 overflow-hidden border-1 border-black ratio ratio-1x78'>
                <img src="{{ asset('storage/' . $csr->image) }}" alt="{{ $csr->title }}"
                    class="img-fluid object-fit-cover">
            </div>

            <h4 class="my-2 text-primary">
                {{ $csr->date }}</h4>

            <div class="blog-inner-item">
                <h4 class='text-dark-grey fw-700'>{{ $csr->title }}</h4>
                <p>{{ $csr->location }}</p>
            </div>
        </div>
    </a>

</div>
