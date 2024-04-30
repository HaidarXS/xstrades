<section class="sponsorship-events new py-5">
    <div class="container">
        <div class="row d-flex justify-content-around">
            <div class="col-lg-6 col-10 mobile-bg py-3 px-3" data-aos="fade-down-right">
                <h2 class="text-secondary text-center sm-white pt-3 pt-lg-0">{{ __('new-home.SPONSORSHIPS') }}</h2>
                <img src="{{ asset('/img/homepage/sponsorship-evnets/sponsorship.svg') }}" class="w-100 py-4 zoom-in-img"
                    alt="{{ __('new-home.SPONSORSHIPS') }}">
                <div class="row d-flex align-items-center">
                    <div class="col-12">
                        <p class="sm-white mb-0 pb-3 event-desc">{{ __('new-home.SPONSORSHIPS_DESC') }}</p>
                    </div>
                    <div class="col-12">
                        <div class="col-12 py-2 d-flex justify-content-lg-start justify-content-center">
                            <div>

                                @include('new-homepage-sections.components.learn-more', [
                                    'link' => route('sponsorships', ['lang' => App::getLocale()]),
                                ])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-10 mobile-bg mt-lg-0 mt-4 py-3 px-3" data-aos="fade-down-left">
                <h2 class="text-secondary text-center sm-white pt-3 pt-lg-0">{{ __('new-home.EVENTS') }}</h2>
                <img src="{{ asset('/img/new-events/events.webp') }}" class="w-100 py-4 zoom-in-img"
                    alt="{{ __('new-home.EVENTS') }}">
                <div class="row d-flex align-items-center">
                    <div class="col-12">
                        <p class="sm-white mb-0 pb-3 event-desc">{{ __('new-home.EVENTS_DESC') }}</p>
                    </div>
                    <div class="col-12">
                        <div class="col-12 py-2 d-flex justify-content-lg-start justify-content-center">
                            <div>

                                @include('new-homepage-sections.components.learn-more', [
                                    'link' => route('events', ['lang' => App::getLocale()]),
                                ])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
