<div class="col-md-4 mb-4">

    <a class="text-decoration-none text-secondary"
        href="{{ route($preview ? 'blogs.previewlist' : 'blogs', ['lang' => App()->getLocale(), 'category' => $blog->slug]) }}">

        <div class="blog-item">
            <div class='text-center blog-image border-radius-30 overflow-hidden border-1 border-black ratio ratio-1x78'>
                <img src="{{ asset('storage/' . $blog->featured_image) }}" alt=""
                    class="img-fluid object-fit-cover">
            </div>

            <div class="d-flex justify-content-between my-2">
                <p class="text-primary mb-2">{{ $blog->category ? $blog->category->title : __('blog.DEFAULT_CATEGORY') }}
                </p>
            </div>

            @php
                $lang = App::getLocale();
            @endphp
            @if ($lang)
                <p class="mb-2">
                    {{ $blog->date ? $blog->date : date('Y F d', strtotime($blog->published_date)) }}
                </p>
            @else
                <p class="mb-2">
                    {{ date('Y F d', strtotime($blog->published_date)) }}
                </p>
            @endif

            <div class="blog-inner-item">
                <h4 class='text-dark-grey fw-700'>{{ $blog->title }}</h4>
                @if (App::getLocale() == 'jp')
                    @php
                        $descriptionLines = explode("\n", strip_tags($blog->description));
                        $limitedDescription = implode("\n", array_slice($descriptionLines, 0, 2));
                    @endphp
                    <p>{!! nl2br(e($limitedDescription)) !!}</p>
                @else
                    <p>{!! Str::words(strip_tags($blog->description), 20, '...') !!}</p>
                @endif
            </div>
        </div>
    </a>

</div>
