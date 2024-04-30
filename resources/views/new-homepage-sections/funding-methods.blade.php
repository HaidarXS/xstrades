<section class="funding-methods new py-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h2 class="text-secondary text-center">{{ __('new-home.FUNDING_METHODS') }}</h2>
            <p class="text-center">{!! __('new-home.FUNDING_METHODS_DESC') !!}</p>
        </div>
        <div class="row d-flex justify-content-center gap-md-0 gap-3 py-4">
            <div class="col-md-6 col-10 d-flex justify-content-center pb-4 pb-lg-0">
                @if ($lang == 'jp')
                    <img src="{{ asset('/img/homepage/payment-options-jp.svg?v1.1') }}" class="w-100"
                        alt="{{ __('new-home.FUNDING_METHODS') }}">
                @else
                    <img src="{{ asset('/img/homepage/payment-options.svg?v1.1') }}" class="w-100"
                        alt="{{ __('new-home.FUNDING_METHODS') }}">
                @endif
            </div>
            <div class="col-md-5 col-11 d-flex justify-content-center navy-bg-sm flex-column mx-auto">
                <ul
                    class="bg-secondary text-white funding-list d-flex flex-column justify-content-center mb-0 ps-5 ps-md-4 ps-lg-5 py-3  w-100">
                    @for ($i = 1; $i <= 5; $i++)
                        <li class="py-2 row">
                            <div class="col-1 ps-1">
                                <img src="{{ asset('/img/homepage/funding-ic/green-check.svg') }}" alt="check">
                            </div>
                            <div class="col-10 @if (App::getLocale() == 'ar') ps-3 @else pe-md-0 px-0 @endif ">
                                {!! __('new-home.FUNDING_METHODS_BENEFIT_' . $i) !!}
                            </div>
                        </li>
                    @endfor
                </ul>
                <div class="d-flex d-md-none align-items-end py-4 justify-content-center">

                    @include('new-homepage-sections.components.learn-more', [
                        'link' => route('funding-methods', ['lang' => App::getLocale()]),
                        'funding' => true,
                    ])
                </div>
            </div>
        </div>
        <div class="d-md-block d-none">

            @include('new-homepage-sections.components.learn-more', [
                'link' => route('funding-methods', ['lang' => App::getLocale()]),
                'funding' => true,
            ])
        </div>
    </div>
</section>
