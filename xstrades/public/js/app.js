
$('[data-toggle="slide-collapse"]').on('click', function () {
    console.log("clicked");
    $navMenuCont = $($(this).data('target'));
    $navMenuCont.animate({
        'width': 'toggle'
    }, 350);
    $(".menu-overlay").fadeIn(500);
});
$(".menu-overlay").click(function (event) {
    $(".navbar-toggle").trigger("click");
    $(".menu-overlay").fadeOut(500);
});



$(document).ready(function () {

    $('#company-btn').click(function () {
        if ($("#company-btn").attr('aria-expanded') == 'true') {
            $('#company-dropdown').attr('style', 'display: none !important');
            // $(this).attr('aria-expanded', 'false');
            console.log("false");
        } else if ($("#company-btn").attr('aria-expanded') == 'false') {
            $('#company-dropdown').attr('style', 'display: block !important');
            // $(this).attr('aria-expanded', 'true');
            console.log("true");
        }
    });

    $('#trading-btn').click(function () {
        if ($("#trading-btn").attr('aria-expanded') == 'true') {
            $('#trading-dropdown').attr('style', 'display: none !important');
            // $(this).attr('aria-expanded', 'false');
            console.log("false");
        } else if ($("#trading-btn").attr('aria-expanded') == 'false') {
            $('#trading-dropdown').attr('style', 'display: block !important');
            // $(this).attr('aria-expanded', 'true');
            console.log("true");
        }
    });

    $('#partners-btn').click(function () {
        if ($("#partners-btn").attr('aria-expanded') == 'true') {
            $('#partners-dropdown').attr('style', 'display: none !important');
            // $(this).attr('aria-expanded', 'false');
            console.log("false");
        } else if ($("#partners-btn").attr('aria-expanded') == 'false') {
            $('#partners-dropdown').attr('style', 'display: block !important');
            // $(this).attr('aria-expanded', 'true');
            console.log("true");
        }
    });

    $('#institutions-btn').click(function () {
        if ($("#institutions-btn").attr('aria-expanded') == 'true') {
            $('#institutions-dropdown').attr('style', 'display: none !important');
            // $(this).attr('aria-expanded', 'false');
            console.log("false");
        } else if ($("#institutions-btn").attr('aria-expanded') == 'false') {
            $('#institutions-dropdown').attr('style', 'display: block !important');
            // $(this).attr('aria-expanded', 'true');
            console.log("true");
        }
    });

    $('.slick.home-awards').not('.slick-initialized').slick({
        dots:false,
        infinite: true,
        slidesToScroll: 1,
        centerMode: true,
        slidesToShow: 5,
        centerPadding: '50px',
        touchThreshold: 50,
        nextArrow: '.slick-next',
        prevArrow: '.slick-prev',
        autoplay: true,
        autoplaySpeed: 2000,
        rtl: config.lang == 'ar',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    centerMode: true,
                    centerPadding: '20px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '70px',
                    dots: true,
                    slidesToShow: 1,
                    autoplay: false,
                }
            }
        ]

    });


    $('.slick.wimbledon').not('.slick-initialized').slick({
        infinite: true,
        slidesToScroll: 1,
        centerMode: true,
        slidesToShow: 1,
        centerPadding: '500px',
        touchThreshold: 50,
        prevArrow: false,
        nextArrow: false,
        rtl: config.lang == 'ar',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    centerMode: true,
                    centerPadding: '100px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]

    });

    $('.slick.roland-garros').not('.slick-initialized').slick({
        infinite: true,
        slidesToScroll: 1,
        centerMode: true,
        slidesToShow: 1,
        centerPadding: '500px',
        touchThreshold: 50,
        prevArrow: false,
        nextArrow: false,
        rtl: config.lang == 'ar',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    centerMode: true,
                    centerPadding: '100px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]

    });
    // $('.join-us-button').on('click', function (e) {
    //     let url = 'https://my.XSTrades.com/register/';
    //     e.preventDefault();
    //     window.open(url, '_blank');
    // })

    $('.slick.slick-fade').not('.slick-initialized').slick({
        infinite: true,
        slidesToScroll: 1,
        centerMode: false,
        fade: true,
        slidesToShow: 1,
        touchThreshold: 50,
        prevArrow: false,
        nextArrow: false,
        autoplay: true,
        autoplaySpeed: 2000,
        rtl: config.lang == 'ar',
    });
});


