$(document).ready(function () {    
    $('.car-fleet').slick({
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
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
    $('.testimonial-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });

    $('.slider').slick({
        dots: false,
        infinite: true,
        arrows:false,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 5000,
    });

    $("#oneWayRide").click(function () {
        $(this).addClass("active");
        $("#hourlyRide").removeClass("active");
        $("#bookingHours").addClass("hidden");
        $("#bookingWhen").removeClass("col-md-4 col-lg-4").addClass("col-md-6 col-lg-6");
        $("#bookingTime").removeClass("col-md-4 col-lg-4").addClass("col-md-6 col-lg-6");
    });

    $("#hourlyRide").click(function () {
        $(this).addClass("active");
        $("#oneWayRide").removeClass("active");
        $("#bookingHours").removeClass("hidden");
        $("#bookingWhen").removeClass("col-md-6 col-lg-6").addClass("col-md-4 col-lg-4");
        $("#bookingTime").removeClass("col-md-6 col-lg-6").addClass("col-md-4 col-lg-4");
    });

    $(".animated-input").focus(function () {
        if (!$(this).parent(".form-group").hasClass("contain")) {
            $(this).parent(".form-group").addClass("contain");
        }
    });

    $(".animated-input").blur(function () {
        if ($(this).val() == "") { 
            $(this).parent(".form-group").removeClass("contain");
        }
    });
})