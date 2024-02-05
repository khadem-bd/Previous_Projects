<script type="text/javascript">
    $(document).ready(function(){
        $("body").addClass("pt-1");
        $(window).scroll(function() {
            if ($(document).scrollTop() > 30) {
                $("header").addClass("fixed-header");
                $("body").removeClass("pt-1").addClass("pt-2");
            } else {
                $("header").removeClass("fixed-header");
                $("body").removeClass("pt-2").addClass("pt-1");
            }
        });
    })
</script>