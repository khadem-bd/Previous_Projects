$(document).ready(function() {
    $('#publishingDate').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'yyyy-mm-dd'
    });

    tinymce.init({
        selector: "#newsContent",
        height: 400,
        theme: 'modern',
        remove_linebreaks: false,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
        ],
        toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
        image_advtab: true,
        templates: [
            { title: 'Test template 1', content: 'Test 1' },
            { title: 'Test template 2', content: 'Test 2' }
        ],
    });


    $("form#addNewsContent").submit(function(event) {
        event.preventDefault();

        var formData = new FormData($(this)[0]);
        var textcontent = tinyMCE.editors[$('#newsContent').attr('id')].getContent();
        formData.append('content', textcontent);

        $.ajax({
            url: 'controllers/addNewsContentAction.php',
            type: 'POST',
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                data = trim11(data);
                if (data == "Content added successfully") {
                    $("html, body").animate({ scrollTop: 0 });
                    $("#newsSuccess").html(data).slideDown(300).delay(1000).slideUp(300, function() {
                        $('#addNewsContent').trigger("reset");
                        $(location).attr('href', 'dashboard.php');
                        location.reload();
                    });
                } else {
                    $("html, body").animate({ scrollTop: 0 });
                    $("#newsError").html(data).slideDown(300);
                }
            }
        });
        return false;
    });

    $("#highlight").click(function() {
        if ($(this).is(":checked")) {
            $("#highlightValue").val("true");
        } else {
            $("#highlightValue").val("false");
        }
    })

    $("#trending").click(function() {
        if ($(this).is(":checked")) {
            $("#trendingValue").val("true");
        } else {
            $("#trendingValue").val("false");
        }
    })


    $("form#adminLogin").submit(function(event) {
        event.preventDefault();
        ajaxSubmitForm("#adminLogin", "loginAction.php", "Access Granted", "#loginSuccess", "#loginError", "relocate", "dashboard.php");
    });


    $("form#editNewsContent").submit(function(event) {
        event.preventDefault();

        var formData = new FormData($(this)[0]);
        var textcontent = tinyMCE.editors[$('#newsContent').attr('id')].getContent();
        formData.append('content', textcontent);

        $.ajax({
            url: 'controllers/editNewsContentAction.php',
            type: 'POST',
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                data = trim11(data);
                if (data == "Content updated successfully") {
                    $("html, body").animate({ scrollTop: 0 });
                    $("#newsSuccess").html(data).slideDown(300).delay(1000).slideUp(300, function() {
                        $('#editNewsContent').trigger("reset");
                        location.reload();
                    });
                } else {
                    $("html, body").animate({ scrollTop: 0 });
                    $("#newsError").html(data).slideDown(300);
                }
            }
        });
        return false;
    });
})