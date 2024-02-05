$(document).ready(function() {
    themecolor("#0FC500");

    $('#rewardBanner').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
    });
})

function themecolor(color) {
    var html = "<style>";
    html = html + componentColors(color);
    html = html + "</style>";
    $("head").append(html);
}

function componentColors(color) {
    return "header nav ul.prelogin li a.btn-primary{background-color:" + color + ";} \
    .signup-options a{color:" + color + "; border-bottom:1px solid " + color + ";} \
    .login .form-check label::before{border: 1px solid " + color + ";} \
    .booking-form .location-info .form-check.ss-form-radio .ss-radio:checked + .ss-radio-label::after{background-color: " + color + ";} \
    .btn.header-btn, .btn.btn-primary, .btn.btn-primary:hover, .btn.btn-primary:focus{background-color: " + color + "; border:1px solid " + color + "}\
    .login p a{color:" + color + ";}\
    .guest-booking-link{color:" + color + "}\
    .login .form-group .form-control:focus{border:2px solid " + color + "}\
    .login .form-content .form-group.with-icon .input-icon.show{color:" + color + "}\
    header nav ul.postlogin li a:hover{color:" + color + "}\
    header nav ul.postlogin li a.active{color:" + color + "}\
    .btn-primary, .btn-success, .header-btn{background-color:" + color + "; border:1px solid " + color + ";}\
    .btn-primary:hover, .btn-success:hover, .header-btn:hover{background-color:" + color + "; border:1px solid " + color + ";}\
    .signup-options a::before{background-color: " + color + ";}\
    .themecolor{color:" + color + ";}\
    .themecolorbg{background-color: " + color + ";}\
    .btn.btn-ghost, .btn.btn-ghost:hover{border:1px solid " + color + "; color: " + color + ";}\
    .thumb-list li a.active{border:2px solid " + color + ";}\
    .btn-tabs{border:1px solid " + color + ";}\
    .btn-tabs a{color:" + color + ";}\
    .btn-tabs a.active, .btn-tabs a:hover{background-color: " + color + ";}\
    table tr td ul.ride-routing li a{color:" + color + ";}\
    .dispatch-controllers .icon-btn-group li a{color:" + color + ";}\
    .dispatch-controllers .icon-btn-group li a:hover{background-color:" + color + ";}\
    .dispatch-controllers .date-selector .icon{color:" + color + ";}\
    .booking-form.rewards .form-group.time-picker fieldset .btn{background-color: " + color + ";}\
    .booking-form .location-info .form-check.ss-form-radio .ss-radio-label::before{border:1px solid " + color + ";}\
    .btn-tabs .form-radio label{color: " + color + ";}\
    .btn-tabs .form-radio input[type='radio']:checked + label{background-color: " + color + ";}\
    .radio-btn{border:1px solid " + color + ";}\
    .radio-btn label{color:" + color + ";}\
    .radio-btn input[type='radio']:checked + label{background-color: " + color + ";}\
    .form-control:focus{border:1px solid " + color + " !important;}\
    .chkbox label:before{border:1px solid " + color + ";}\
    .chkbox input[type='checkbox']:checked + label:before{background-color: " + color + ";}\
    .nav-tabs .nav-link.active:after{background-color: " + color + ";}\
    .nav-tabs .nav-link.active{color: " + color + " !important;}\
    .btn.btn-square{background-color: " + color + ";}\
    .cash-input{border: 2px solid " + color + ";}\
    .cash-input input[type='text']{border-left: 2px solid " + color + " !important;}\
    .cash-input .icon{color: " + color + ";}"
}

function tabTrigger(elem) {
    document.getElementById(elem).addEventListener("click", function(event) {
        event.preventDefault();
    });
}


function triggerModal(elem) {
    document.getElementById(elem).classList.add("show");
    setTimeout(function() {
        document.getElementById(elem).getElementsByClassName("modal")[0].classList.add("show");
    }, 500);
}

function closeModal() {
    var modal = document.getElementsByClassName("modal")[0];
    var parent = modal.parentElement;
    modal.classList.remove("show");
    setTimeout(function() {
        parent.classList.remove("show");
    }, 500);
}