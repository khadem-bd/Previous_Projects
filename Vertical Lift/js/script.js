$(document).ready(function () {
  $("#clientLogos").slick({
    centerMode: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: true,
    speed: 500,
    fade: false,
    cssEase: "linear",
    dots: false,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });


  $("#testimonialSlider").slick({
    speed: 500,
    fade: true,
    cssEase: "linear",
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000,
  });

  $("#bannerTextSlider").slick({
    speed: 300,
    fade: true,
    cssEase: "linear",
    dots: false,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000,
  });

  $("body").on("click", "#triggerBookaServiceModal", function () {
    $("body").addClass("no-scroll");
    $("#bookaService").addClass("show");
    setTimeout(function () {
      $("#bookaServiceModal").addClass("show");
    }, 500);
  });

  $("body").on("click", ".bookAService", function () {
    $("body").addClass("no-scroll");
    $("#bookaService").addClass("show");
    setTimeout(function () {
      $("#bookaServiceModal").addClass("show");
    }, 500);
  });

  $("body").on("click", "#triggerSiteMapModal", function () {
    $("body").addClass("no-scroll");
    $("#sitemap").addClass("show");
    setTimeout(function () {
      $("#sitemapModal").addClass("show");
    }, 500)
  });

  $(".close-modal").click(function () {
    $("body").removeClass("no-scroll");
    $(".vts-modal-bg").removeClass("show");
    $(".vts-modal").removeClass("show");
  });


  $(".hamburger-menu").click(function () {
    $(".m-wrapper").addClass("show");
  });

  $(".close-menu").click(function () {
    $(".m-wrapper").removeClass("show");
  });

  $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    if (scroll > 0) {
      $(".goTotop").addClass("show");
    } else {
      $(".goTotop").removeClass("show");
    }
  });

  $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    if (scroll > 0) {
      $("#aboutUsMissionAnimateLift").addClass("animate");
    }

    // var position = $(".lift-fixed-size").position();
    // var x = position.top - triggerFactor;
    // if (scroll > x) {
      
    // }
  });



  $(".goTotop").click(function () {
    $("html, body").animate({ scrollTop: "0" }, 1000);
  });


  $("form#sentContactInfo").submit(function (event) {
    event.preventDefault();
    ajaxSubmitForm("#sentContactInfo", "sendContactInfo.php", "Information Send Successfully", "#sendContactInfoSuccess", "#sendContactInfoError", "refresh", "");
  });

  $("form#bookServiceEmail").submit(function (event) {
    event.preventDefault();
    ajaxSubmitForm("#bookServiceEmail", "sendServiceQueryInfo.php", "Information Send Successfully", "#BookServiceSuccess", "#BookServiceError", "refresh", "");
  });

  animateOnScroll();

  $("#bookAserviceSubmit").click(function () {
    $("#realSubmit").click();
  });
});


function animateOnScroll() {
  $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    var triggerFactor = 800;

    $(".vts_left").each(function () {
      var position = $(this).position();
      var x = position.top - triggerFactor;
      if (scroll > x) {
        $(this).addClass("animate");
        $(".lift-fixed-size").addClass("animate");
        $(".gray-lift").addClass("animate");
      }
    });


    $(".vts_right").each(function () {
      var position = $(this).position();
      var x = position.top - triggerFactor;
      if (scroll > x) {
        $(this).addClass("animate");
      }
    });

    $(".vts_top").each(function () {
      var position = $(this).position();
      var x = position.top - triggerFactor;
      if (scroll > x) {
        $(this).addClass("animate");
      }
    });

    $(".vts_bottom").each(function () {
      var position = $(this).position();
      var x = position.top - triggerFactor;
      if (scroll > x) {
        $(this).addClass("animate");
      }
    });
  });

  $(".animate_onLoad").each(function () {
    $(this).addClass("animate");
    $(".gray-lift").addClass("animate");
    if($(this).find('div.lift-up').length !== 0){
      $(this).find('div.lift-up').addClass("animate");
    }
  });
}
