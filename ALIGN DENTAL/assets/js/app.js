var swiper = new Swiper(".testimonialSL", {
  slidesPerView: 1.2,

  // loop: true,
  navigation: {
    nextEl: ".testimonial-next",
    prevEl: ".testimonial-prev",
  },

  breakpoints: {
    550: {
      slidesPerView: 2,
    },

    768: {
      slidesPerView: 2,
    },
    992: {
      spaceBetween: 30,
      centeredSlides: true,
      initialSlide: 1,
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".logoSlider", {
  slidesPerView: 3,
  spaceBetween: 30,
  autoPlay: true,
  loop: true,

  breakpoints: {
    550: {
      slidesPerView: 3,
    },

    768: {
      slidesPerView: 4,
    },
    992: {
      slidesPerView: 5,
    },
  },
});

var swiper = new Swiper(".careerSlider", {
  slidesPerView: 3,
  centeredSlides: true,
  initialSlide: 1,

  breakpoints: {
    550: {
      slidesPerView: 3,
      spaceBetween: 10,
    },

    768: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
  },
});

// FOR RESUME CATEGORY ACTIVE BUTTON
$(".service-show-link").on("click", function () {
  $(".service-show-link").removeClass("active");
  $(this).addClass("active");
});

$(".open-pp").on("click", function () {
  $("#review-popup").addClass("active");
});

$(".close-pp").on("click", function () {
  $(".review-popup").removeClass("active");
});
// FOR RESUME CATEGORY ACTIVE CONTENT
function filterService(active) {
  hide = document.getElementsByClassName("ss_item");
  for (i = 0; i < hide.length; i++) {
    hide[i].style.display = "none";
  }

  let show = document.getElementsByClassName(active);
  for (i = 0; i < show.length; i++) {
    show[i].style.display = "flex";
  }

  const locationMapIm = document.querySelector(".career-show-img img");

  switch (active) {
    case "general":
      locationMapIm.src = "assets/img/contact/3.png";
      break;
    case "cosmetic":
      locationMapIm.src = "assets/img/contact/7.png";
      break;
    case "restorative":
      locationMapIm.src = "assets/img/contact/8.png";
      break;
    case "specialist":
      locationMapIm.src = "assets/img/contact/9.png";
      break;
    default:
      locationMapIm.src = "assets/img/contact/3.png";
      break;
  }
}

// FOR RESUME CATEGORY ACTIVE CONTENT
function filter(active) {
  hide = document.getElementsByClassName("location-area");
  for (i = 0; i < hide.length; i++) {
    hide[i].style.display = "none";
  }

  let show = document.getElementsByClassName(active);
  for (i = 0; i < show.length; i++) {
    show[i].style.display = "block";
  }
  // Change the location map image based on the active location
  const locationMapIm = document.querySelector(".location-map-im img");
  switch (active) {
    case "dallas":
      locationMapIm.src = "assets/img/location/2.png";
      break;
    case "garland":
      locationMapIm.src = "assets/img/location/2.png";
      break;
    case "mesquite":
      locationMapIm.src = "assets/img/location/2.png";
      break;
    case "east_dallas":
      locationMapIm.src = "assets/img/location/2.png";
      break;
    default:
      locationMapIm.src = "assets/img/location/2.png";
      break;
  }
}
// FOR RESUME CATEGORY ACTIVE BUTTON
$(".location-tab").on("click", function () {
  $(".location-tab").removeClass("active");
  $(this).addClass("active");
});

// ===============================faq============
// FOR FAQ SECTION ACCORDION
$(function ($) {
  var panels = $(".faq__ans").hide();
  panels.first().show();

  $(".faq__que").click(function () {
    var $this = $(this);
    panels.slideUp();
    $this.next().slideDown();
  });
});

$(".faq__que").click(function () {
  $(".faq__que span").addClass("icon-plus");
  $(this.children[1]).removeClass("icon-plus");
  $(this.children[1]).addClass("icon-Minus");
});

// FOR NAVBAR FIXED WHEN SCROLL
$(window).on("scroll", function () {
  var scrolling = $(this).scrollTop();
  if (scrolling > 30) {
    $(".main-header").addClass("navbar-fixed");
  } else {
    $(".main-header").removeClass("navbar-fixed");
  }
});

// FOR CURRENT PAGE ACTIVE NAVBAR
$(function () {
  var url = window.location.href;
  url = url.substring(
    0,
    url.indexOf("#") == -1 ? url.length : url.indexOf("#")
  );
  url = url.substring(
    0,
    url.indexOf("?") == -1 ? url.length : url.indexOf("?")
  );
  url = url.substr(url.lastIndexOf("/") + 1);

  if (url == "") {
    url = "index.php";
  }
  $(".menu-list li").each(function () {
    var href = $(this).find("a").attr("href");
    if (url == href) {
      $(this).addClass("active");
    }
  });
});

// nav toggle class
$(".nav-toggle").on("click", function () {
  $(".mobile-menu").toggleClass("active");
});

// FOR RESUME CATEGORY ACTIVE BUTTON
$(".m-menu-list li").on("click", function () {
  $(this).find(".mobile-menu-dp").toggleClass("active");

  if ($(this).find("a span").hasClass("icon-Open-button")) {
    $(this).find("a span").removeClass("icon-Open-button");
    $(this).find("a span").addClass("icon-minimize-button");
  } else {
    $(this).find("a span").addClass("icon-Open-button");
  }
});



var swiper = new Swiper(".newPatient", {
  slidesPerView: 1.2,
  spaceBetween: 20,
  breakpoints: {
    550: {
      slidesPerView: 1.5,
    },

    768: {
      slidesPerView: 2,
    },
    992: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".Mservice", {
  slidesPerView: 1.2,
  spaceBetween: 20,
  breakpoints: {
    550: {
      slidesPerView: 1.5,
    },

    768: {
      slidesPerView: 2,
    },
    992: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".locationSlider", {
  slidesPerView: 1.5,
  spaceBetween: 20,
  breakpoints: {
    550: {
      slidesPerView: 2.5,
    },

    768: {
      slidesPerView: 3,
    },
    992: {
      slidesPerView: 4,
    },
  },
});

var swiper = new Swiper(".testimonialAll", {
  slidesPerView: 1.2,
  spaceBetween: 10,

  // loop: true,
  navigation: {
    nextEl: ".testimonial-next",
    prevEl: ".testimonial-prev",
  },

  breakpoints: {
    550: {
      slidesPerView: 1.4,
      spaceBetween: 10,
    },

    768: {
      slidesPerView: 1.8,
      spaceBetween: 20,
    },
    992: {
      spaceBetween: 30,
      centeredSlides: true,
      initialSlide: 1,
      slidesPerView: 1.9,
    },
  },
});

// =======================Google translate==================
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en',includedLanguages: 'es'}, 'google_translate_element');
}

