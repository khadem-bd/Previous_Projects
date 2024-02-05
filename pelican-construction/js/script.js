$(document).ready(function() {
    $('.service-slider').slick({
        dots: false,
        infinite: false,
        arrows: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    $('.slider').slick({
        arrows: false,
        dots: false,
        autoplay: true,
        fade: true,
        cssEase: 'linear',
        autoplaySpeed: 4000,
        speed: 2000,
    });
    $(".contactus-form .form-group .form-control").focus(function() {
        $(this).parent().addClass("focus");
    });

    $(".contactus-form .form-group .form-control").blur(function() {
        if ($(this).val() === "") {
            $(this).parent().removeClass("focus");
        }
    });

    $('.manyimages').slick({
        dots: false,
        autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        responsive: [{
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    arrows: false,
                    dots: true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    dots: true,
                }
            }
        ]
    });

    /*light box*/
    $("body").on("click", ".image-carousel li a", function() {
        initialteLightbox();
        var img = $(this).children("img").attr("src");
        $(this).parent().parent().parent().addClass("pointer");
        $(".lightbox-bg").children("img").attr("src", img);
        $("body").addClass("freezebody");
        setTimeout(function() {
            $(".lightbox-bg").addClass("show");
        }, 100);
    });

    var initiateLightbox = false;

    function initialteLightbox() {
        if (initiateLightbox == false) {
            var html = '<div class="lightbox-bg">\
            <a class="lightbox-close" href="javascript:void(0)"></a>\
            <img src="">\
            <a class="goNext" href="javascript:void(0)"></a>\
            <a class="goPrev" href="javascript:void(0)"></a>\
        </div>';
            $("body").append(html);
        }
    }

    $("body").on("click", "a.goNext", function() {
        if ($(".pointer").next().hasClass("slick-slide")) {
            $(".pointer").next().addClass("pointer");
            $(".pointer").first().removeClass("pointer");
            var img = $(".pointer").children().children().children().children("img").attr("src");
            $(".lightbox-bg").children("img").attr("src", img);
        } else {
            $(".lightboxNode").first().addClass("pointer");
            $(".lightboxNode").last().removeClass("pointer");
            var img = $(".pointer").children().children().children().children("img").attr("src");
            $(".lightbox-bg").children("img").attr("src", img);
        }
    })

    $("body").on("click", "a.goPrev", function() {
        if ($(".pointer").prev().hasClass("slick-slide")) {
            $(".pointer").prev().addClass("pointer");
            $(".pointer").last().removeClass("pointer");
            var img = $(".pointer").children().children().children().children("img").attr("src");
            $(".lightbox-bg").children("img").attr("src", img);
        } else {
            $(".lightboxNode").last().addClass("pointer");
            $(".lightboxNode").first().removeClass("pointer");
            var img = $(".pointer").children().children().children().children("img").attr("src");
            $(".lightbox-bg").children("img").attr("src", img);
        }
    });

    $("body").on("click", "a.lightbox-close", function() {
        $(".lightbox-bg").removeClass("show");
        setTimeout(function() {
            $(".lightbox-bg").children("img").attr("src", "");
            $("body").removeClass("freezebody");
        }, 500);
    });

    $(".menu li a").click(function() {
        var linktype = $(this).attr("data-linktype");
        if (linktype == "scrolltop") {
            // var elem = $(this).attr("data-scrollTo");
            // var pos = $(elem).position();
            // $("html, body").animate({
            //     scrolltop: pos.top;
            // }, 500)
        } else {
            var route = $(this).attr("data-url");
            $(location).attr('href', route);
        }
    });

    $(window).scroll(function() {
        if ($(document).scrollTop() > 0) {
            $("header").addClass("floating");
        } else {
            $("header").removeClass("floating");
        }
    });
    $(".hamburger-menu").click(function() {
        if ($(this).hasClass("open")) {
            $(".menu").removeClass("show");
            $(this).removeClass("open");
        } else {
            $(".menu").addClass("show");
            $(this).addClass("open");
        }
    });

    $(".slideInLeft, .slideInRight, .slideInUp, .slideInDown").addClass("animated");

    $("form#sendEmail").submit(function(event) {
        event.preventDefault();
        var formData = new FormData($(this)[0]);
        $.ajax({
            url: 'sendemail.php',
            type: 'POST',
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                data = trim11(data);
                if (data == "Your message have been send successfully") {
                    $("body").successAlert("Success", data);
                    $('#sendEmail')[0].reset();
                } else {
                    $("body").errorAlert("Error", data);
                }
            }
        });
        return false;
    });


})

function trim11(str) {
    str = str.replace(/^\s+/, '');
    for (var i = str.length - 1; i >= 0; i--) {
        if (/\S/.test(str.charAt(i))) {
            str = str.substring(0, i + 1);
            break;
        }
    }
    return str;
}