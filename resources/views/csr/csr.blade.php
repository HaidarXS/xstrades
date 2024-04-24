@extends('layouts.app')

@section('content')
    @include('layouts.banner', [
        'bannerTitle' => __('csr-page.CSR'),
        'bannerDescription' => __('csr-page.PAGE_DESC'),
        'bannerImage' => asset('/webp/csr/csr.webp'),
        'mobileBanner' => asset('/webp/csr/csr-mobile.webp'),
    ])

    <section class="py-5">
        <div class="row d-flex justify-content-center text-center">
            <p class="col-md-8 col-10">{{ __('csr-page.content') }}</p>
        </div>
    </section>

    <div class="container py-4">
        <div class="row mt-4">

            @if ($csrs->count() > 0)
                @foreach ($csrs as $csr)
                    @include('csr.component.singleCsr', ['csr' => $csr])
                @endforeach
            @else
                <p class="text-center">
                    {{ __('csr-page.NO_CSR') }}
                </p>
            @endif
        </div>

        @if ($csrs->count() > 0)
            {{ $csrs->links() }}
        @endif
    </div>
@endsection
