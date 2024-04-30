<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-xl-9 mt-5 mt-lg-0">
            <h2 class="text-white fw-bold text-center mb-0">{!! $title !!}</h2>
            <div class="row d-flex align-items-center text-center justify-content-center">
                <div class="col-xl-12 col-md-8 col-12 my-3">
                    <h3 class="text-white text-center px-0 mb-0">
                        {!! $description !!}</h3>
                </div>
                <div class="col-md-12 col-12 d-flex text-center justify-content-center">
                    @include('new-homepage-sections.components.learn-more', [
                        'link' => $ctaLink,
                    ])
                </div>
            </div>
        </div>
    </div>
</div>
