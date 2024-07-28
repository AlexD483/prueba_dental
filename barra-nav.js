$(document).ready(function() {
    var nav = $('.nav-links');
    var navPosition = nav.offset().top;

    $(window).scroll(function() {
        var scrollPos = $(window).scrollTop();

        if (scrollPos >= navPosition) {
            nav.addClass('fixed');
        } else {
            nav.removeClass('fixed');
        }
    });
});
