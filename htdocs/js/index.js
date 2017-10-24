"use strict";

/* global $ */

$(document).ready(function() {
    // FIXED HEADER
    var distance = $('nav').offset().top;
    var $window = $(window);

    $("#up").clone().appendTo("nav");

    // Scroll events
    $window.scroll(function() {
        // If scrolled enough, make navbar fixed.
        if ( $window.scrollTop() >= distance ) {
            $("nav").first().css({
                'position': 'fixed',
                "background": "#272727",
            });
            $("nav a").css("line-height", "normal");
            $(".header img").css("height", "30px");
        }

        if ( $window.scrollTop() - 100 >= distance ) {
            $("#up").fadeTo("fast", 1).finish();
        }

        // If top of page, hide up arrow and show down
        if ( $(".header").offset().top >= $window.scrollTop() ) {
            $("#down").fadeTo("fast", 1);
        }
        // If top of page, reset nav style
        if ( $(".header").offset().top + 83 >= $window.scrollTop() ) {
            $("nav").first().css({
                'position': 'relative',
                "background": "none",
            });
            $("#up").fadeTo("fast", 0);
            $("nav a").first().removeAttr('style');
            $(".header img").first().removeAttr('style');
        }
    });

    // If clicked on up, scrollup to top of page
    $("#up").click(function() {
        $('html,body').animate({
            scrollTop: $(".header").offset().top
        }, "slow");

        $("#down").fadeTo("fast", 1);
    });
});
