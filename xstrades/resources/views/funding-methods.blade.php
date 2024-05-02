@extends('layouts.app')
@section('opengraph')
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ __('seo.TITLE_FUNDING_METHODS') }}">
    <meta property="og:description" content="{{ __('seo.DESCRIPTION_FUNDING_METHODS') }}">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="XSTrades.com">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ __('seo.TITLE_FUNDING_METHODS') }}">
    <meta name="twitter:description" content="{{ __('seo.DESCRIPTION_FUNDING_METHODS') }}">
@endsection

@if ($section == 'deposits')
    @section('meta_tags')
        @parent
        <title>{{ __('seo.TITLE_DEPOSITS') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_DEPOSITS') }}">
    @endsection
@elseif ($section == 'withdrawals')
    @section('meta_tags')
        @parent
        <title>{{ __('seo.TITLE_WITHDRAWALS') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_WITHDRAWALS') }}">
    @endsection
@else
    @section('meta_tags')
        @parent
        <title>{{ __('seo.TITLE_FUNDING_METHODS') }}</title>
        <meta name="description" content="{{ __('seo.DESCRIPTION_FUNDING_METHODS') }}">
    @endsection
@endif


@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('funding_methods.FUNDING_METHODS'),
        'bannerDescription' => __('funding_methods.SUBTITLE'),
        'bannerImage' => asset('/img/traders-accounts-banners/desktop/funding-methods.svg'),
        'mobileBanner' => asset('/img/traders-accounts-banners/mobile/funding-methods.webp'),
    ])


    <div class="container mt-3">

        @if (session()->get('locale') == 'ar')
            <div class="row d-flex align-items-center my-5 justify-content-center">
            @else
                <div class="row d-flex align-items-center my-5">
        @endif
        @if (session()->get('locale') == 'ar')
            <div class="col-lg-3 mb-3">
            @else
                <div class="offset-md-3 col-lg-3 mb-3">
        @endif

        <a href="{{ route('funding-methods', ['lang' => App::getLocale(), 'slug' => 'deposits']) }}"
            id="deposit-section-btn" class="text-decoration-none">
            <div class="w-100 h-100 d-flex border-radius-30 border border-5 justify-content-center align-items-center p-4">
                <h3 class="text-primary-hover m-0 text-center">
                    {{ __('funding_methods.DEPOSITS') }}</h3>
            </div>
        </a>
    </div>

    <div class="col-lg-3 mb-3">
        <a href="{{ route('funding-methods', ['lang' => App::getLocale(), 'slug' => 'withdrawals']) }}"
            id="withdraw-section-btn" class="text-decoration-none">
            <div class="w-100 h-100 d-flex border-radius-30 border border-5 justify-content-center align-items-center p-4">
                <h3 class="text-primary-hover m-0 text-center">
                    {{ __('funding_methods.WITHDRAWALS') }}</h3>
            </div>
        </a>
    </div>
    </div>
    </div>

    @if (isset($section))
        @include('funding-methods.' . $section . '-table')
    @endif

    <script>
        $(document).ready(function() {

            // $('#deposit-section').hide();
            // $('#withdraw-section').hide();

            // if($('#withdraw-section-btn > div').hasClass('border-1')){
            //         $('#withdraw-section-btn').hover(
            //         () => { //hover
            //             $('#withdraw-section-btn > div').removeClass('border-1 border');
            //             $('#withdraw-section-btn > div').addClass('bg-primary')
            //             $('#withdraw-section-btn > div > h3').removeClass('text-primary');
            //             $('#withdraw-section-btn > div').addClass('text-white')
            //         },
            //         () => { //out
            //             $('#withdraw-section-btn > div').removeClass('bg-primary');
            //             $('#withdraw-section-btn > div').addClass('border-1 border')
            //             $('#withdraw-section-btn > div > h3').removeClass('text-white');
            //             $('#withdraw-section-btn > div > h3').addClass('text-primary')
            //         }
            //     );
            // }

            // if($('#deposit-section-btn > div').hasClass('border-1')){
            //         $('#deposit-section-btn').hover(
            //         () => { //hover
            //             $('#deposit-section-btn > div').removeClass('border-1 border');
            //             $('#deposit-section-btn > div').addClass('bg-primary')
            //             $('#deposit-section-btn > div > h3').removeClass('text-primary');
            //             $('#deposit-section-btn > div').addClass('text-white')
            //         },
            //         () => { //out
            //             $('#deposit-section-btn > div').removeClass('bg-primary');
            //             $('#deposit-section-btn > div').addClass('border-1 border')
            //             $('#deposit-section-btn > div > h3').removeClass('text-white');
            //             $('#deposit-section-btn > div > h3').addClass('text-primary')
            //         }
            //     );
            // }

            // $('#deposit-section-btn').click(function() {
            //     $('#deposit-section-btn > div').addClass('active');
            //     $('#deposit-section-btn > div').removeClass('border-1 border');
            //     $('#deposit-section-btn > div').addClass('bg-primary')
            //     $('#deposit-section-btn > div > h3').removeClass('text-primary-hover');
            //     $('#deposit-section-btn > div').addClass('text-white')

            //     $('#withdraw-section-btn > div > h3').removeClass('active');
            //     $('#withdraw-section-btn > div').removeClass('bg-primary');
            //     $('#withdraw-section-btn > div').addClass('border-1 border')
            //     $('#withdraw-section-btn > div > h3').removeClass('text-white');
            //     $('#withdraw-section-btn > div > h3').addClass('text-primary-hover');

            //     $('#deposit-section').fadeIn();
            //     $('#withdraw-section').hide();
            // });

            // $('#withdraw-section-btn').click(function() {
            //     $('#withdraw-section-btn > div').addClass('active')
            //     $('#withdraw-section-btn > div').removeClass('border-1 border');
            //     $('#withdraw-section-btn > div').addClass('bg-primary')
            //     $('#withdraw-section-btn > div > h3').removeClass('text-primary-hover');
            //     $('#withdraw-section-btn > div').addClass('text-white')

            //     $('#deposit-section-btn > div > h3').removeClass('active');
            //     $('#deposit-section-btn > div').removeClass('bg-primary');
            //     $('#deposit-section-btn > div').addClass('border-1 border')
            //     $('#deposit-section-btn > div > h3').removeClass('text-white');
            //     $('#deposit-section-btn > div > h3').addClass('text-primary-hover');

            //     $('#deposit-section').hide();
            //     $('#withdraw-section').fadeIn();
            // });

        });
    </script>
@endsection
