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



});
