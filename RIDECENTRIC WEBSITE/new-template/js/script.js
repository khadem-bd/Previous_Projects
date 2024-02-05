$(document).ready(function () {
  $("#banner-slider").slick({
    dots: false,
    infinite: true,
    arrows: false,
    speed: 500,
    fade: false,
    cssEase: "linear",
    autoplay: true,
    autoplaySpeed: 8000,
    slidesToScroll: 1,
  });

  $("#logoCarousel").slick({
    dots: false,
    infinite: true,
    arrows: false,
    speed: 2500,
    fade: false,
    cssEase: "linear",
    autoplay: true,
    slidesToShow: 5,
    autoplaySpeed: 0,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 5,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });

  $("#companyAnalyticsInfo").slick({
    dots: false,
    infinite: true,
    arrows: false,
    speed: 500,
    fade: false,
    cssEase: "linear",
    autoplay: true,
    autoplaySpeed: 1000,
  });

  $("#combo-slider").slick({
    dots: true,
    infinite: false,
    arrows: false,
    speed: 500,
    fade: false,
    cssEase: "linear",
    vertical: true,
    verticalSwiping: true,
  });

  $("#combo-slider2").slick({
    dots: true,
    infinite: false,
    arrows: false,
    speed: 500,
    fade: false,
    cssEase: "linear",
    autoplay: true,
    autoplaySpeed: 5000,
  });

  $(".feedback-slider").slick({
    dots: false,
    infinite: true,
    arrows: true,
    speed: 500,
    fade: false,
    cssEase: "linear",
    prevArrow: false,
    autoplay: true,
    autoplaySpeed: 5000,
    nextArrow:
      '<button type="button" class="slick-next  fs-6 border-0 position-absolute font-weight-bold">></button>',
  });

  $(".feedback-slider-mob").slick({
    dots: true,
    infinite: true,
    arrows: false,
    speed: 500,
    fade: false,
    cssEase: "linear",
    autoplay: true,
    autoplaySpeed: 5000,
  });

  $(".car-slider").slick({
    infinite: true,
    speed: 500,
    fade: false,
    cssEase: "linear",
    dots: true,
    slidesToShow: 1,

    prevArrow: '<button type="button" class="carousel-arrows left"><</button>',
    nextArrow: '<button type="button" class="carousel-arrows right">></button>',
    responsive: [
      {
        breakpoint: 992,
        settings: {
          arrows: false,
        },
      },
      {
        breakpoint: 768,
        settings: {
          arrows: false,
        },
      },
      {
        breakpoint: 507,
        settings: {
          arrows: false,
        },
      },
    ],
  });

  $("#photoGallery").slick({
    centerMode: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    speed: 500,
    fade: false,
    cssEase: "linear",
    dots: false,
    centerPadding: "70px",
    // autoplay: true,
    // autoplaySpeed: 5000,
    prevArrow: '<button type="button" class="carousel-arrows left"><</button>',
    nextArrow: '<button type="button" class="carousel-arrows right">></button>',
    responsive: [
      {
        breakpoint: 992,
        settings: {
          arrows: true,
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          arrows: true,
        },
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          arrows: true,
        },
      },
    ],
  });

  $(".car-fleet").slick({
    centerMode: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    // autoplay: true,
    // autoplaySpeed: 2000,
    prevArrow:
      '<button type="button" class="slick-prev p-0  fs-6 border-0 position-absolute font-weight-bold " style="font-size:48px; top: 40%; left: 26%; color: #0376F9; z-index: 1; "><span class="shadow" style="width:40px; height:40px; background-color: #fff; border-radius: 100%; display:inline-block; font-size:30px; line-height:1.3;"><</span></button>',
    nextArrow:
      '<button type="button" class="slick-prev p-0  fs-6 border-0 position-absolute font-weight-bold " style="font-size:48px; top: 40%; right:26%; color: #0376F9; z-index: 1; "><span class="shadow" style="width:40px; height:40px; background-color: #fff; border-radius: 100%; display:inline-block; font-size:30px; line-height:1.3;">></span></button>',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 1,
        },
      },
    ],
  });

  //Testimonial carousel start
  $("#testimonial1").slick({
    dots: true,
    infinite: true,
    arrows: false,
    fade: false,
    cssEase: "linear",
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 2000,
  });

  //Testimonial2 carousel start
  $("#testimonial2").slick({
    dots: true,
    infinite: true,
    arrows: false,
    fade: false,
    cssEase: "linear",
    slidesToShow: 1,
    autoplaySpeed: 2000,
  });

  //Testimonial3 carousel start
  $("#testimonial3").slick({
    dots: true,
    infinite: true,
    arrows: false,
    fade: false,
    cssEase: "linear",
    slidesToShow: 1,
    autoplaySpeed: 2000,
  });

  $("#hamburgerMenu").click(function () {
    $(".fullpage-menu").addClass("show");
  });

  $(".close-menu").click(function () {
    $(".fullpage-menu").removeClass("show");
  });

  // Flip Box
  const plusBtns = document.querySelectorAll(".plus-btn");
  const minusBtns = document.querySelectorAll(".minus-btn");

  plusBtns.forEach((plusBtn) => {
    plusBtn.addEventListener("click", () => {
      const card = plusBtn.closest(".flip-box-inner");
      card.classList.add("active");
    });
  });

  minusBtns.forEach((minusBtn) => {
    minusBtn.addEventListener("click", () => {
      const card = minusBtn.closest(".flip-box-inner");
      card.classList.remove("active");
    });
  });
});
