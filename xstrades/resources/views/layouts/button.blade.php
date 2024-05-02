<div class="row justify-content-center mb-3">
    <div class="pt-md-4 d-flex justify-content-center">
        <a href="{{ $link }}" @if ($newTab == true) target="_blank" @endif class="btn button-style px-5-desktop py-3-desktop fw-700">
            <div class="d-flex align-items-center justify-content-center">
                <span class="me-3"><img class="btn-icon" src="{{ $icon }}" alt="{!! $text !!}" style="width: 30px; object-fit: contain; aspect-ratio:1/1;"></span>
                <span class="text-secondary">{!! $text !!}</span>
            </div>
        </a>
    </div>
</div>