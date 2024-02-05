$(document).ready(function () {
  $('#clientBrands').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: false,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('#servicesSlider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('#productSlider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('#homeBannerSlider').slick({
    fade: true,
    cssEase: 'linear',
    dots: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000,
  });

  $("body").on("click", "#toggleMenu", function () {
    if ($(this).hasClass("close")) {
      $(".nav-wrapper").removeClass("show");
      $("body").removeClass("no-scroll");
      $(this).removeClass("close");
    } else {
      $(".nav-wrapper").addClass("show");
      $("body").addClass("no-scroll");
      $(this).addClass("close");
    }
  });

  $(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
      $("header").addClass("opaque");
    } else {
      $("header").removeClass("opaque");
    }
  });


  animateOnScroll();
  animationOnLoad($(".bannerCta"));
  animationOnLoad($("#mission"));
  animationOnLoad($("#missionText"));
  animationOnLoad($("#serviceAnimate"));
  animationOnLoad($("#productAnimate"));

  animationOnLoad($("#whyChooseForeground"));
  animationOnLoad($("#safetyCommitment"));
})

function animateOnScroll() {

  $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();

    $(".animate-left").each(function () {
      animation($(this));
    });

    $(".animate-right").each(function () {
      animation($(this));
    });

    $(".animate-top").each(function () {
      animation($(this));
    });

    $(".animate-bottom").each(function () {
      animation($(this));
    });

    $(".animate-fadeIn").each(function () {
      animation($(this));
    });

    $(".animate-top-img-right").each(function () {
      animation($(this));
    });

    $(".animate-top-img-left").each(function () {
      animation($(this));
    });


    animateCount($("#analyticsSection"));
  });

  function animation(element) {
    var elementTop = element.offset().top;
    var elementHeight = element.height();
    var windowHeight = $(window).height();
    var scrollTop = $(window).scrollTop();
    if (elementTop - scrollTop < windowHeight && elementTop - scrollTop + elementHeight > 0) {
      element.addClass("play");
    }
  }

}

function animationOnLoad(targetElem) {
  targetElem.addClass("play");
}

var animated = false;
function animateCount(scrollTopElem) {
  if(animated != true){
    var elementTop = scrollTopElem.offset().top;
    var elementHeight = scrollTopElem.height();
    var windowHeight = $(window).height();
    var scrollTop = $(window).scrollTop();
    if (elementTop - scrollTop < windowHeight && elementTop - scrollTop + elementHeight > 0) {
      triggerCount($("#inspectionRequest"), 4500, 2000);
      triggerCount($("#publicMeeting"), 98, 2000);
      triggerCount($("#FamilyProperty"), 2345, 2000);
      triggerCount($("#fireAlarmInspection"), 98, 2000);
      animated = true;
    }
  }   
}

function triggerCount(countElement, targetCount, duration){
  var count = 0;
      var interval = 20; // Interval between count updates
      var increment = targetCount / (duration / interval);
      var countInterval = setInterval(function () {
        count += increment;
        if (count >= targetCount) {
          count = targetCount;
          clearInterval(countInterval);
        }
        countElement.text(Math.round(count)); // Round the count to an integer
      }, interval);
}