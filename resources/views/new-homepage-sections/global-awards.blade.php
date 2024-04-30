<section class="awards new py-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h2 class="text-secondary text-center">{{ __('new-home.GLOBAL_AWARDS') }}</h2>
            <p class="text-center">{!! __('new-home.GLOBAL_AWARDS_DESC') !!}</p>
        </div>

        <div class="slick home-awards row py-4 my-3" data-aos="zoom-in-up">
            @foreach ($companyAwards as $award)
                @include('new-homepage-sections.components.award', [
                    'text' => $award->title,
                    'logo' => $award->img,
                ])
            @endforeach
        </div>

        @include('new-homepage-sections.components.learn-more', [
            'link' => route('awards', ['lang' => App::getLocale()]),
        ])
    </div>
</section>
