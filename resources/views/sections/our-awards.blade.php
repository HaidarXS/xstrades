<section class="py-5 ">
    <div class="container">
        <div class="row pb-3">
            <div class="col-12">
                @if (Route::currentRouteName() === 'home')
                    <h2 class="size-40 text-center text-navy my-lg-3 mb-4">
                        {{ __('homepage.JOIN_THE_MULTI_AWARD') }}</h2>
                @else
                    <h2 class="size-40 text-navy mb-5 text-lg-start text-center">
                        {{ __('partners.OUR_AWARDS') }}</h2>
                @endif
            </div>
        </div>
    </div>
    <div class=" position-relative container">
        {{-- <button class="slick-prev btn fw-700 text-primary"><i class="fa-solid fa-arrow-left"></i></button>
        <button class="slick-next btn fw-700 text-primary"><i class="fa-solid fa-arrow-right"></i></button> --}}
        <div class="slick home-awards">
            @foreach ($companyAwards as $award)
                {{-- @if ($loop->index < 4) --}}
                <div class="" width="150">
                    <img class="mx-auto" style="object-fit: contain" height="150" width="150"  src="{{ asset($award->img) }}"
                        alt="{{ $award->title }}">
                </div>
                {{-- <div class="col-12">
                                <p class="text-center text-navy">{{ __('partners.BEST_B2B_BROKER') }}</p>
                            </div> --}}
                {{-- @endif --}}
            @endforeach
        </div>

    </div>
    <div class="container mt-5">

        <div class="row justify-content-center">

            @include('layouts.button', [
                'text' => __('homepage.JOIN_XS'),
                'link' => 'https://my.XSTrades.com/' . getCorrectLangSlug() . 'register/?sl=1',
                'newTab' => true,
                'icon' => asset('/homepage-svgs-ic/join-xs-ic.svg'),
            ])
        </div>
    </div>
</section>
