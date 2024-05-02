@extends('layouts.app')
@section('content')
    @include('sections.about-us-banner')

    {{-- <div class="container py-4 tabs-container">

        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="me-4" role="presentation">
                <button class="tabs-controls text-primary fw-700 nav-link text-center active" id="pills-story-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-story" type="button" role="tab" aria-controls="pills-story"
                    aria-selected="true">{{ __('aboutus.STORY') }}</button>
            </li>
            <li class="me-4" role="presentation">
                <button class="tabs-controls text-primary fw-700 nav-link text-center" id="pills-why-xs-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-why-xs" type="button" role="tab" aria-controls="pills-why-xs"
                    aria-selected="true">{{ __('aboutus.WHY_XS') }}</button>
            </li>
            <li class="me-4" role="presentation">
                <button class="tabs-controls text-primary fw-700 nav-link text-center" id="pills-legals-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-legals" type="button" role="tab" aria-controls="pills-legals"
                    aria-selected="true">{{ __('aboutus.LEGALS') }}</button>
            </li>
            <li class="me-4" role="presentation">
                <button class="tabs-controls text-primary fw-700 nav-link text-center" id="pills-careers-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-careers" type="button" role="tab" aria-controls="pills-careers"
                    aria-selected="true">{{ __('aboutus.CAREERS') }}</button>
            </li>
            <li class="me-4" role="presentation">
                <button class="tabs-controls text-primary fw-700 nav-link text-center" id="pills-contact-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                    aria-selected="true">{{ __('aboutus.CONTACT') }}</button>
            </li>


        </ul>
    </div> --}}

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-story" role="tabpanel" aria-labelledby="pills-story-tab">
            @include('company.' . $tab)
        </div>
        {{-- <div class="tab-pane fade " id="pills-advantages" role="tabpanel" aria-labelledby="pills-home-tab">
            @include('company.advantages')
        </div>
        <div class="tab-pane fade " id="pills-legals" role="tabpanel" aria-labelledby="pills-legal-tab">
            @include('company.legals')
        </div>
        <div class="tab-pane fade " id="pills-careers" role="tabpanel" aria-labelledby="pills-careers-tab">
            @include('company.careers')
        </div>
        <div class="tab-pane fade " id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            @include('company.contact')
        </div> --}}
    </div>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        let tab = <?php echo json_encode($tab); ?>;
        let lang = <?php echo json_encode(app()->getLocale()); ?>;
        if (tab) {
            $( ".nav-link").each(function( index ) {
                if($(this).hasClass('active')){
                    $(this).removeClass('active');
                }
            });
            $("#pills-" + tab + "-tab").addClass('active');

            $(".tab-pane").each(function( index ) {
                if($(this).hasClass('show')){
                    $(this).removeClass('show active');
                }
            });

            $("#pills-" + tab).addClass('show active'); 


            $(".tabs-controls").on('click', function() {
                let tab = $(this).attr('id').split('-')[1];
                window.history.replaceState({}, '','/' + lang + '/about/'+tab);
            });
        }
    });
</script>
@endsection
