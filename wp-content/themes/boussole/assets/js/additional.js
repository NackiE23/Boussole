$(document).ready(function() {
    $("#menu-opener").on("click", function() {
        $("#menu-opener").toggleClass("active");
        $("#full-page-menu").toggleClass("active");

        if (window.innerHeight > 734) {
            $('#full-page-menu .inner').css('justify-content', 'center');
        } else {
            $('#full-page-menu .inner').css('justify-content', 'normal');
        }
    })

    $("#full-page-menu .inner").on("click", '*', function() {
        $("#full-page-menu").removeClass("active");
        $("#menu-opener").removeClass("active");
    })
});