$(document).ready(function(){
    // BANNER SLIDER INITIATION
    $('.slider ul').slick({
        dots: false,
        infinite: true,
        speed: 1000,
        arrows:false,
        // autoplay:true,
        slidesToShow: 1,
        autoplaySpeed: 2000
    });

    // SPEAKER LIST SLIDER INITIATION
    $('.speaker-slider ul').slick({
        centerMode: true,
        dots: false,
        infinite: true,
        speed: 1000,
        arrows:false,
        // autoplay:true,
        slidesToShow: 3,
        autoplaySpeed: 2000
    });
})