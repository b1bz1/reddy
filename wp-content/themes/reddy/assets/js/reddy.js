$( document ).ready(function() {

    // Add open class to navbar
    $('nav.main-nav').on('click', function(){
        $(this).toggleClass('open');
    });

    // Add active class to hamburger
    $('button.hamburger').on('click', function(){
        $(this).toggleClass('is-active');
    });

    // Add scrolled class to navbar
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 50) {
            $("nav.main-nav").addClass("scrolled");
        } else {
            $("nav.main-nav").removeClass("scrolled");
        }
    });
});
