<div class="row">
    <div class="col-12 py-0 px-lg-2 px-0 d-flex justify-content-center align-items-center">
        <a class="btn  {{ $funding ?? false ? 'funding-btn' : 'btn-hero' }} col-auto px-md-4 px-3 py-2"
            href="{{ $link }}">{!! __('new-home.LEARN_MORE') !!} <span class="ms-2"><img
                    src="{{ asset('/img/homepage/funding-ic/learn-more-arrow.svg') }}" class="ar-scale"
                    alt="arrow"></span></a>
    </div>
</div>
