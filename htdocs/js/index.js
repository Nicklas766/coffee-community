"use strict";


$(document).ready(function() {


    $(".img-container").click(function(){
        console.log("iwas clicked");
        var popup = $(this).next('.popup');
        popup.css("display","block");

       popup.children(".popclose").click(function() {
            popup.css("display","none");
        });
    });



// FIXED HEADER
    var distance = $('nav').offset().top,
        $window = $(window);
        // homeHeight = $('.service-banner').offset().top - 100;
        $("#up").clone().appendTo("nav");


        // make last div stop when nav-header touch service-container
        var footerHeight = $("footer").height();
        var navHeight = $("nav").first().height();


    // Scroll events
    $window.scroll(function() {
            // If scrolled enough, make navbar fixed.
            if ( $window.scrollTop() >= distance ) {
                $("nav").first().css({
                     'position' : 'fixed',
                     "background" : "#272727",
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
                     'position' : 'relative',
                     "background" : "none",
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
