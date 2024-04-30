<section class="global-market-leader new py-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h2 class="text-secondary text-center">{{ __('new-home.JOIN_LEADER') }}</h2>
            <p class="text-center py-3 mb-0">{!! __('new-home.JOIN_LEADER_DESC') !!}</p>
        </div>
        <div class="row py-4 overflow-x-scroll d-flex flex-nowrap mb-4">
            @for ($i = 1; $i <= 4; $i++)
                <div class="col-lg-3 col-md-8 col-10">
                    <div class="card global-card" data-aos="fade-down-right">
                        {{-- main desktop card --}}
                        <div class="card-body flex-column align-items-center justify-content-center main-card">
                            <img src="{{ asset('/img/homepage/global-market/global-img-' . $i . '.webp') }}"
                                class="global-market-img py-4" alt="{!! __('new-home.SUB_TITLE_' . $i) !!}">
                            <p class="text-secondary fw-700 text-center mb-0">{!! __('new-home.SUB_TITLE_' . $i) !!}</p>
                        </div>
                        {{-- desktop hover --}}
                        <div class="card-body flex-column align-items-center justify-content-center hover-info">

                            <p class="text-secondary fw-700 text-center mb-3">{!! __('new-home.SUB_TITLE_' . $i) !!}</p>
                            <p class="text-center mb-0">{{ __('new-home.DESC_' . $i) }}</p>
                        </div>

                        {{-- mobile card --}}
                        <div class="card-body flex-column align-items-center justify-content-center mobile-cards-join">

                            <p class="text-secondary text-center mb-1">
                                <span class="col-1"><img
                                        src="{{ asset('/img/homepage/global-market/global-img-' . $i . '.webp') }}"
                                        class="global-market-img py-1"
                                        alt="{{ __('new-home.SUB_TITLE_' . $i) }}"></span>
                                <span class="col-10"><b>{!! __('new-home.SUB_TITLE_' . $i) !!}</b></span>
                            </p>
                            <p class="text-center mb-0">{{ __('new-home.DESC_' . $i) }}</p>
                        </div>
                    </div>

                </div>
            @endfor
        </div>

        @include('new-homepage-sections.components.learn-more', [
            'link' => route('company', ['lang' => App::getLocale(), 'tab' => 'advantages']),
        ])
    </div>
</section>
