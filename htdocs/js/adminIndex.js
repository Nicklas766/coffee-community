"use strict";


$(document).ready(function() {
    // example 1, click, slidedown.
    $(".clickme").click(function(){
        $(".hidden").slideToggle("slow");
        // $(".login-header").text() == "+" ? $(".login-header").text("-") : $(".login-header").text("+");
        $(".login-header").background = "red";
        // $(".clickme").css({"color": "orange"});
    });


    $(".flip").click(function(){
      // Holds the product ID of the clicked element

      var text = $(this).text();

       $(this).next('.panel').slideToggle("slow");


       var flipWidth = $(this).width() / $(this).parent().width() * 100;

       flipWidth == '100' ? $(this).width("70%") : $(this).width("100%");
        $(this).children(".flip-sign").text() == "+" ? $(this).children(".flip-sign").text("-") : $(this).children(".flip-sign").text("+");


    //   text.includes("+") ? $(this).text(text.replace("+", "-")) : $(this).text(text.replace("-", "+"));


    });
});
