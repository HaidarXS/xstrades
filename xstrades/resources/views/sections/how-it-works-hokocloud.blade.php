<section class="py-5">
    <div class="container">
        <div class="row text-center container m-auto">
            <h2 class="text-secondary ">{{ __('hoko-cloud.HOW_DOES_IT_WORK') }}</h2>
            <p class="text-muted my-3 col-10 m-auto">{!! __('hoko-cloud.BECOME_A_COPY_TRADER') !!}</p>
        </div>
        <div class="how-it-works">
            <div
                class="w-100 h-100 position-relative py-4 py-md-5 {{ App::getLocale() == 'ar' ? 'rotate-y-n180' : '' }} ">
                <img class="curv-path" src="{{ asset('/img/curv_path.svg') }}" />
                <div class="circle position-absolute left ratio-1x1 ratio overflow-hidden">
                    <div class="w-100 h-100 {{ App::getLocale() == 'ar' ? 'rotate-y-180' : '' }}">
                        <div class="h-50 mt-auto d-flex justify-content-center align-items-end mb-1">
                            <img class="py-sm-2 py-1" src="{{ asset('/svgs/register.svg') }}"
                                alt="{{ __('hoko-cloud.STEP_1_TITLE') }}" />
                        </div>
                        <div class="w-100 h-50 mt-auto d-flex justify-content-center ">
                            <p class="mb-0 mt-ld-3 mt-sm-2 fw-700 text-primary">{{ __('hoko-cloud.STEP_ONE') }}</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12">
                    
                </div>
    
                <div class="circle position-absolute middle ratio-1x1 ratio overflow-hidden">
                    <div class="w-100 h-100 {{ App::getLocale() == 'ar' ? 'rotate-y-180' : '' }}">
                        <div class="h-50 mt-auto d-flex justify-content-center align-items-end  mb-1">
                            <img class="py-sm-2 py-1" src="{{ asset('/img/hoko/hokocloud.svg') }}"
                                alt="{{ __('hoko-cloud.HOKOCLOUD_TITLE') }}" />
                        </div>
                        <div class="w-100 h-50 mt-auto d-flex justify-content-center bg-primary ">
                            <p class="mb-0 mt-ld-3 mt-sm-2 fw-700 text-white">{{ __('hoko-cloud.STEP_TWO') }}</p>
                        </div>
    
                    </div>
                </div>
                <div class="circle position-absolute right ratio-1x1 ratio bg-primary ">
                    <div class="w-100 h-100 {{ App::getLocale() == 'ar' ? 'rotate-y-180' : '' }}">
                        <div class="h-50 mt-auto d-flex justify-content-center align-items-end  mb-1">
                            <img class="py-sm-2 py-1" src="{{ asset('/img/hoko/step3.svg') }}"
                                alt="{{ __('hoko-cloud.STEP_3_TITLE') }}" />
                        </div>
                        <div class="w-100 h-50 mt-auto d-flex justify-content-center ">
                            <p class="mb-0 mt-ld-3 mt-sm-2 fw-700 text-white">{{ __('hoko-cloud.STEP_THREE') }}</p>
                        </div>
    
                    </div>
                </div>
    
            </div>
            {{-- <img src="{{ asset('/img/referpath.png') }}" alt="process" class="img-fluid"> --}}
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <p>{{ __('hoko-cloud.STEP_ONE_DESC') }}</p>
            </div>
            <div class="col-4">
                <p>{{ __('hoko-cloud.STEP_TWO_DESC') }}</p>
            </div>
            <div class="col-4 text-center">
                <p>{{ __('hoko-cloud.STEP_THREE_DESC') }}</p>
            </div>
        </div>
    </div>
</section>