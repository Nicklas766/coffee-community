<script>
$(document).ready(function() {
var distance = $('nav').offset().top,
    $window = $(window),
    homeHeight = $('.service-banner').offset().top - 100;
    $("#up").clone().appendTo("nav");
    // add min height class to first text-container
    $(".text-container").first().addClass("text-container-min");
    // make last div stop when nav-header touch service-container
    var footerHeight = $("footer").height();
    var navHeight = $("nav").first().height();
    var homeHeight = $('.service-banner').height();
    var containerHeight = $window.height() - (navHeight + footerHeight + homeHeight) + navHeight;
    $(".container").last().css("minHeight", function(){
        return containerHeight;
    });

// Scroll events
$window.scroll(function() {
    // Change to home active or about active
    if ( $window.scrollTop() >= homeHeight ) {
        $("nav a.active").removeClass("active");
        $("nav a:eq( 4 )").addClass("active");
    } else {
        $("nav a.active").removeClass("active");
        $("nav a:eq( 2 )").addClass("active");
    }
    // If scrolled enough, make navbar fixed.
    if ( $window.scrollTop() >= distance ) {
        $("nav").first().css({
             'position' : 'fixed',
             "background" : "#272727",
        });
        $("nav a").css("line-height", "normal");
        $(".header img").css("height", "30px");

    }
    // If top of page, hide up arrow and show down
    if ( $(".header").offset().top >= $window.scrollTop() ) {
        $("#up").fadeTo("fast", 0);
        $("#down").fadeTo("fast", 1);
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
// Click events
// If clicked on down, scrolldown to service-banner
$("#down").click(function() {
        $('html,body').animate({
             scrollTop: $(".service-banner").offset().top - (navHeight)
        }, "slow");
        $("#down").fadeTo("fast", 0);
        $("#up").fadeTo("fast", 1);
    });
// If clicked on up, scrollup to top of page
$("#up").click(function() {
        $('html,body').animate({
             scrollTop: $(".header").offset().top
         }, "slow");
         $("#up").fadeTo("fast", 0);
        $("#down").fadeTo("fast", 1);
    });
});
</script>

<div class="container">



    <div class="text-container" style="text-align:center;">
        <img src="<?= $app->link("img/hello.png") ?>" style="height:128px;">

        <?= $content ?>

        
        <img src="<?= $app->link("img/cookie.png") ?>" style="float:left;">
        <img src="<?= $app->link("img/coffee-beans.png") ?>" style="float:right;">

        <div style="margin:auto; text-align:center; position: relative;">

            <i id="down" style="color:white; font-size:80px; cursor:pointer;" class="material-icons">&#xE313;</i>
            <i id="up" style="color:white; top:0; display: inline-block;
line-height: 64px; position:absolute; right: 0;  display: none; cursor:pointer;" class="material-icons">&#xE316;</i>
        </div>
    </div>
</div>
