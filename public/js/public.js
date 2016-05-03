$(document).ready(function () {

    // This section takes care of all the home page effects
    $("#top").height($(window).height() + 5);
    // activate the side-nav

    $('.button-collapse').sideNav({
        edge: 'right', // Choose the horizontal origin
        closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    });

    // work with the navbar coloring
    $(".page-items").click(function () {
        
        // Go through all the .menu-items and remove the active
        // class if the element contatins it. 
        $.each($(".page-items"), function (k, v) {
            if ($(v).parent().hasClass("active")) {
                $(this).parent().removeClass("active");
            }
        });

        // Add the active class to the current element
        $(this).parent().addClass("active");

        // Move to the target location
        moveToLocation($(this).attr("href"));
    });

    // align the sidebars on the menu page on page scroll
    fixAlignment();

    $(window).scroll(function () {
        fixAlignment();
    });

    $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        items: 7,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 2]
    });
})


// function to simulate scrolling
function moveToLocation(href) {
    $('html, body').animate({
        scrollTop: $(href).offset().top - 60
    }, 1000, 'swing');
}


// function to fix the alignment
function fixAlignment() {
    if (window.pageYOffset > 40) {
        $(".nav-wrapper").addClass('white');
    } else {
        $(".nav-wrapper").removeClass('white');
    }
}