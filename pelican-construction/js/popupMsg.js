var waitingTime = 200;


$.fn.successAlert = function(heading, message) {
    $("body").prepend("<div class='alert-bg'>\
			<div class='alert-success'>\
				<a class='alert-close' href='javascript:void(0)'></a>\
				<span class='alert-icon'></span>\
				<span class='alert-content'>\
					<h3>" + heading + "</h3>\
                    <p>" + message + "</p>\
                    <div class='popup-btn-wrapper'>\
                        <a class='popup-btn' href='javascript:void(0)'>Ok</a>\
                    </div>\
				</span>\
			</div>\
		</div>");
    setTimeout(function() { $(".alert-bg").addClass("alert-trigger"); }, waitingTime);
    $("body").css("overflow", "hidden");
    closeAlert();
};


$.fn.errorAlert = function(heading, message) {
    $("body").prepend("<div class='alert-bg'>\
			<div class='alert-error'>\
				<a class='alert-close' href='javascript:void(0)'></a>\
				<span class='alert-icon'></span>\
				<span class='alert-content'>\
					<h3>" + heading + "</h3>\
                    <p>" + message + "</p>\
                    <div class='popup-btn-wrapper'>\
                        <a class='popup-btn' href='javascript:void(0)'>Ok</a>\
                    </div>\
				</span>\
			</div>\
		</div>");
    setTimeout(function() { $(".alert-bg").addClass("alert-trigger"); }, waitingTime);
    $("body").css("overflow", "hidden");
    closeAlert();
};

$.fn.infoAlert = function(heading, message) {
    $("body").prepend("<div class='alert-bg'>\
			<div class='alert-info'>\
				<a class='alert-close' href='javascript:void(0)'></a>\
				<span class='alert-icon'></span>\
				<span class='alert-content'>\
					<h3>" + heading + "</h3>\
                    <p>" + message + "</p>\
                    <div class='popup-btn-wrapper'>\
                        <a class='popup-btn' href='javascript:void(0)'>Ok</a>\
                    </div>\
				</span>\
			</div>\
		</div>");
    setTimeout(function() { $(".alert-bg").addClass("alert-trigger"); }, waitingTime);
    $("body").css("overflow", "hidden");
    closeAlert();
};

function closeAlert() {
    $("body").on("click", "a.alert-close, .popup-btn", function() {
        $(".alert-bg").removeClass("alert-trigger");
        $("body").css("overflow", "auto");
        setTimeout(function() { $(".alert-bg").remove(); }, waitingTime);
    });
}