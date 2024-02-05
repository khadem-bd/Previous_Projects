$(document).ready(function () {
    $("body").on("click", ".accordion .heading", function () {
        if ($(this).hasClass("turn")) {
            $(".accordion .heading").removeClass("turn");
            $(".accordion .content").stop().slideUp(300);
        } else {
            $(".accordion .heading").removeClass("turn");
            $(".accordion .content").stop().slideUp(300);
            $(this).next(".content").stop().slideDown(300);
            $(this).addClass("turn");
        }
    });

    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
    });

    $(".hamburger-menu").click(function(){
        $(".nav-wrapper").addClass("show");
    });

    $(".closeMenu").click(function(){
        $(".nav-wrapper").removeClass("show");
    });

    var togglePwd = false;

    $(".toggleShowHide").click(function(){
        if(togglePwd == false){
            $(this).children("span").removeClass("m-hide").addClass("m-show");
            togglePwd = true;
        }else{
            $(this).children("span").removeClass("m-show").addClass("m-hide");
            togglePwd = false;
        }
    })
})