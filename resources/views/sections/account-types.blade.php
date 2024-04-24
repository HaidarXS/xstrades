<div class="market-leader pt-lg-5  section-reveal">
    <div class="row container mx-auto" style="margin-bottom: 30px">
        <div class="col-12">
            <h2 class="size-40 my-lg-5 my-3" style="text-align:center;color:#01337F;">
                {{ __('homepage.SELECT_YOUR_SUITABLE_ACCOUNT_TYPE') }}
            </h2>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8  col text-center">
                <p class="text-justify text-secondary">
                    {!! __('homepage.ACCOUNT_TYPES_DESCRIPTION') !!}
                </p>
            </div>
        </div>
        <div class="row justify-content-center my-0">

            @include('layouts.button', [
                'text' => __('homepage.ACCOUNT_TYPES'),
                'link' => route('account_types', ['lang' => App::getLocale()]),
                'newTab' => false,
                'icon' => '/homepage-svgs-ic/account-types.svg',
            ])

        </div>
    </div>
</div>
