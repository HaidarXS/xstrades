<style>
    .carousel-indicators {
        position: absolute;
        right: 80% !important;
        top: 60%;
        left: 20px;
        /* Adjusted left position */
        transform: translateY(-50%);
        z-index: 15;
        list-style: none;
        padding-left: 0;
        margin-top: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-left: 0px !important;
    }

    .carousel-indicators li {
        width: 10px !important;
        height: 10px !important;
        cursor: pointer;
        background-color: rgba(255, 255, 255, 0.5);
        border-radius: 50%;
        margin: 0 5px !important;
        /* Adjusted margin for spacing */
        padding: 0 !important;
    }

    .carousel-indicators .active {
        background-color: #fff;
    }
</style>
@if (app()->getLocale() == 'ar')
    <style>
        .carousel-item {
            margin-right: 0px !important;
        }
    </style>
@endif
<section id="hero-section" class="new">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="home-hero-section home-hero-img-1 py-lg-5 pt-3 pb-5">
                    @include('new-homepage-sections.components.new-hero-section', [
                        'title' => __('new-home.JOIN_GLOBAL_BROKER'),
                        'description' => __('new-home.JOIN_GLOBAL_BROKER_DESC'),
                        'ctaLink' => route('regulations', ['lang' => App::getLocale()]),
                    ])
                </div>
            </div>
            <!-- Second carousel item -->
            <div class="carousel-item">
                <div class="home-hero-section home-hero-img-2 py-lg-5 pt-3 pb-5">
                    @include('new-homepage-sections.components.new-hero-section', [
                        'title' => __('new-home.ENHANCED_INSURANCE'),
                        'description' => __('new-home.ENHANCED_INSURANCE_DESC'),
                        'ctaLink' => route('insurance', ['lang' => App::getLocale()]),
                    ])
                </div>
            </div>
            <!-- third carousel item -->
            <div class="carousel-item">
                <div class="home-hero-section home-hero-img-3 py-lg-5 pt-3 pb-5">
                    @include('new-homepage-sections.components.new-hero-section', [
                        'title' => __('new-home.DYNAMIC_LEVERAGE'),
                        'description' => __('new-home.DYNAMIC_LEVERAGE_DESC'),
                        'ctaLink' => route('dynamic-leverage', ['lang' => App::getLocale()]),
                    ])
                </div>
            </div>
                <div class="carousel-item">
                    <div class="home-hero-section home-hero-img-4 py-lg-5 pt-3 pb-5">
                        @include('new-homepage-sections.components.new-hero-section', [
                            'title' => __('new-home.ENJOY_XS_MASTERCARD'),
                            'description' => __('new-home.ENJOY_XS_MASTERCARD_DESC'),
                            'ctaLink' => route('xs-mastercard', ['lang' => App::getLocale()]),
                        ])
                    </div>
                </div>


        </div>
        <!-- Indicators (bullets) -->
        <ol class="carousel-indicators hide-ipad">
            <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="3"></li>
            <!-- Add more indicators for additional slides -->
        </ol>
    </div>
</section>
<script>
    $(document).ready(function() {
        $('#carouselExample').carousel({
            interval: 3000
        });
    });
</script>
