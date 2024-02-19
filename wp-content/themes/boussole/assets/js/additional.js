$(document).ready(function() {
    $("#menu-opener").on("click", function() {
        $("#menu-opener").toggleClass("active");
        $("#full-page-menu").toggleClass("active");
    })

    $("#full-page-menu .inner").on("click", '*', function() {
        $("#full-page-menu").removeClass("active");
        $("#menu-opener").removeClass("active");
    })
});