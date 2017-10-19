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
    var numItems = $('.img-container').length;

    if (numItems % 2) {
        $(".img-container").last().css("width", "100%");
        $(".img-container").last().css("min-height", "500px");
        $(".hidden-title").last().css("line-height", "500px");
    };


    //
    //        HEADER AND SCROLL TO FUNCTION
    //

    var distance = $('nav').offset().top,
        $window = $(window);
    // If scrolled enough, make navbar fixed.
    if ( $window.scrollTop() >= distance ) {
        $("nav").first().css({
             'position' : 'fixed',
             "background" : "#272727",
        });
        $("nav a").css("line-height", "normal");
        $(".header img").css("height", "30px");

    }
    // If top of page, reset nav style
    if ( $(".header").offset().top + 83 >= $window.scrollTop() ) {
        $("nav").first().css({
             'position' : 'relative',
             "background" : "none",
        });
        $("nav a").first().removeAttr('style');
        $(".header img").first().removeAttr('style');
    }
});
