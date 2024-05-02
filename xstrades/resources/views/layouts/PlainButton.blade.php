<div class="row justify-content-center mb-3">
    <div class="pt-4 d-flex justify-content-center">
        <a href="{{ $link }}" @if ($newTab == true) target="_blank" @endif
            class="btn button-style py-3 px-5 fw-700">
            <div class="d-flex align-items-center justify-content-center">
                <span>{!! $text !!} </span>
            </div>
        </a>
    </div>
</div>
