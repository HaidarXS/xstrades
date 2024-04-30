<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @stack('seo-tags')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name='robots' content='index, follow'>
    <meta name='dmca-site-verification' content='V3FFVXdLN09qaU02d3QwRThUbmczQT090' />
    @php
        $cleanedUrl = substr(request()->path(), 3);
        if ($cleanedUrl != '') {
            $cleanedUrl = '/' . $cleanedUrl;
        }
    @endphp
    {{-- @php
        $blogView = route('blogs', ['lang' => App::getLocale()]);
        $blogDetails = isset($blog) && route('blogs', ['lang' => App()->getLocale(), 'category' => $blog->slug]);
    @endphp --}}

    @php
        $currentUrl = url()->current();
    @endphp

    {{-- @if ($currentUrl == $blogView || $currentUrl == $blogDetails)
        @if (session()->get('locale') == 'ar')
            <link rel="canonical" href="https://{{ request()->getHost() }}/ar{{ $cleanedUrl }}">
            <link rel="alternate" href="https://{{ request()->getHost() }}/ar{{ $cleanedUrl }}" hreflang="ar" />
        @else
            <link rel="canonical" href="https://{{ request()->getHost() }}/en{{ $cleanedUrl }}">
            <link rel="alternate" href="https://{{ request()->getHost() }}/en{{ $cleanedUrl }}" hreflang="en" />
            <link rel="alternate" href="https://{{ request()->getHost() }}/fr{{ $cleanedUrl }}" hreflang="fr" />
            <link rel="alternate" href="https://{{ request()->getHost() }}/es{{ $cleanedUrl }}" hreflang="es" />
            <link rel="alternate" href="https://{{ request()->getHost() }}/pt{{ $cleanedUrl }}" hreflang="pt" />
            <link rel="alternate" href="https://{{ request()->getHost() }}/jp{{ $cleanedUrl }}" hreflang="jp" />
            <link rel="alternate" href="https://{{ request()->getHost() }}/vi{{ $cleanedUrl }}" hreflang="vi" />
            <link rel="alternate" href="https://{{ request()->getHost() }}/cn{{ $cleanedUrl }}"
                hreflang="zh-Hans" />
            <link rel="alternate" href="https://{{ request()->getHost() }}/zh-Hant{{ $cleanedUrl }}"
                hreflang="zh-Hant" />
            <link rel="alternate" href="https://{{ request()->getHost() }}/th{{ $cleanedUrl }}" hreflang="th" />
            <link rel="alternate" href="https://{{ request()->getHost() }}/ko{{ $cleanedUrl }}" hreflang="ko" />
        @endif
    @else --}}
    @yield('meta_tags')
    @yield('opengraph')

    <link rel="canonical" href="{{ $currentUrl }}">


    {{-- @endif --}}

    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    {{-- @yield('opengraph')

    @yield('meta_tags') --}}

    <meta property="og:type" content="website" />

    @php
    $blogURL = route('blogs', ['lang' => App::getLocale()]);
    $memdiaURL = route('all-media', ['lang' => App::getLocale()]);
    $homeURL = route('home', ['lang' => App::getLocale()]);
    @endphp

    @if($currentUrl != $blogURL && $currentUrl != $memdiaURL && $currentUrl != $homeURL)
    <meta property="og:site_name" content="XS" />
    @endif
    <meta name="twitter:card" content="summary_large_image" />

    <link rel="icon" type="image/png" href="{{ asset('/Favicon.png') }}">
    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <link href="{{ asset('css/bootstrap-5.0.2.min.css') }}" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    {{-- <link href="{{ asset('js/jquery-3.7.0.min.js') }}" rel="stylesheet"> --}}
    <!-- jQuery UI -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> --}}
    {{-- <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"
        integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('js/jquery-ui-1.13.2.min.js') }}"></script>

    <!-- RTL Bootstrap CSS (conditionally loaded for Arabic) -->
    @if (session()->get('locale') == 'ar')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
            integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
        {{-- <link href="{{ asset('css/bootstrap-5.0.2.min.css') }}" rel="stylesheet"> --}}
    @endif

    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    {{-- <link href="{{ asset('css/beta3-6.0.0.all.min.css') }}" rel="stylesheet"> --}}
    <!-- Kendo UI CSS -->


    {{-- <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2023.1.117/styles/kendo.default-ocean-blue.min.css">
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2023.1.117/styles/kendo.default-main.min.css"> --}}

    <!-- Custom App CSS -->
    @if (session()->get('locale') == 'ar')
        <link href="{{ asset('css/font-family-ar.css') }}" rel="stylesheet">
    @else
        <link href="{{ asset('css/font-family.css') }}" rel="stylesheet">
    @endif

    <link href="{{ asset('css/new-css.css?v5.4') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css?v5.5') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css?v3.1') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css?v3.1') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css?v3.1') }}" rel="stylesheet">
    <link href="{{ asset('css/preloader.css?v2.1') }}" rel="stylesheet">

    <link href="{{ asset('css/flipbook.style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    @stack('styles')
    <!-- slick CSS -->
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" /> --}}
    <link href="{{ asset('css/slick-carousel-1.8.1-slick.css') }}" rel="stylesheet">

    {{-- <script src="https://kendo.cdn.telerik.com/2023.1.117/mjs/kendo.all.js" type="module"></script>
    <script src="https://kendo.cdn.telerik.com/2023.1.117/js/jquery.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2023.1.117/js/jszip.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2023.1.117/js/kendo.all.min.js"></script> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css">
    {{-- <link href="{{ asset('css/flag-icon-0.8.2.min.css') }}" rel="stylesheet"> --}}

    {{-- slick js --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer>
    </script>
    <!-- ScrollReveal.js -->
    {{-- <script src="https://unpkg.com/scrollreveal"></script> --}}


    {{-- <script src="{{ asset('js/turn.min.js') }}"></script> --}}



    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CFZNNSHTJG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
    </script>
    <script type="text/javascript" src="/js/flipbook.min.js" defer></script>
    {{-- <script type="text/javascript" src="{{ asset('js/flipbook.min.js') }}"></script>  --}}
    <!-- Google tag (gtag.js) -->

    <meta name="google-site-verification" content="idHnZGpySKFR1-FMaTX9L1qgzveSd1AfSqQmi9UKjqc" />

    {{-- Live Chat --}}
    <script>
        function initFreshChat() {
            window.fcWidget.init({
                token: "a835bb25-85e5-4462-b509-9c515dd386c2",
                host: "https://xsglobal.freshchat.com"
            });
        }

        function initialize(i, t) {
            var e;
            i.getElementById(t) ?
                initFreshChat() : ((e = i.createElement("script")).id = t, e.async = !0,
                    e.src = "https://xsglobal.freshchat.com/js/widget.js", e.onload = initFreshChat, i.head.appendChild(e))
        }

        function initiateCall() {
            initialize(document, "Freshchat-js-sdk")
        }
        window.addEventListener ? window.addEventListener("load", initiateCall, !1) :
            window.attachEvent("load", initiateCall, !1);
    </script>
    @php
        $currentUrl = url()->current();
        $currentLang = App::getLocale();
        $languages = ['x-default', 'en', 'fr', 'es', 'pt', 'ar', 'vi', 'th', 'ko', 'zh-Hant', 'zh-Hans', 'jp'];
        $baseLanguages = ['en', 'en', 'fr', 'es', 'pt', 'ar', 'vi', 'th', 'ko', 'zh-Hant', 'zh-Hans', 'jp'];
        $urlParts = explode("/$currentLang/", $currentUrl);
        $urlBefore = $urlParts[0] . '/';
        $urlAfter = '/' . $urlParts[1];
        $languagePairs = [];

        // Iterate through the languages and create pairs with base languages
        foreach ($languages as $index => $language) {
            $baseLanguage = $baseLanguages[$index];
            $languagePairs[] = ['full' => $language, 'base' => $baseLanguage];
        }
    @endphp

    @foreach ($languagePairs as $languagePair)
        <link rel="alternate" hreflang="{{ $languagePair['full'] }}"
            href="{{ $urlBefore . $languagePair['base'] . $urlAfter }}" />
    @endforeach
</head>
{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        ScrollReveal().reveal('.section-reveal', {
            duration: 600,
            easing: 'ease-in-out',
            opacity: 0,
            scale: 1,
            distance: '20px',
            origin: 'bottom',
            reset: true,
            afterReveal: function(el) {
                el.classList.add('revealed');
            }
        });
    });
</script> --}}


<body @if (session()->get('locale') == 'ar') dir="rtl" class="rtl" @endif>
    @include('layouts.header')

    <div class="page-content">

        @yield('content')

    </div>

    <!-- Custom App JS -->




    <script>

        var config = {
            lang: '{{ App::getLocale() }}'
        };
    </script>

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    @include('layouts.footer')
    <script>
        $(window).on("load", function() {
            console.log("This page took " + {{ microtime(true) - LARAVEL_START }} + " seconds to render.");
        });
    </script>
</body>

</html>
