<script>
$(document).ready(function() {


var navHeight = $("nav").first().height();

// Click events
// If clicked on down, scrolldown to service-banner
$("#down").click(function() {
        $('html,body').animate({
             scrollTop: $(".service-banner").offset().top - (navHeight)
        }, "slow");
        $("#down").fadeTo("fast", 0);
        $("#up").fadeTo("fast", 1);
    });

});
</script>

<div class="container" style="height:1000px;">



    <div class="text-container"  style="text-align:center;">
        <img src="<?= $app->link("img/hello.png") ?>" style="height:128px;">

        <h1>Välkommen till Allt om Kaffe!</h1>

        <p>Hej och välkommen till vår hemsida! Om du nått denna sida så delar du nog vår
        kärlek till kaffe. Detta är ett ställe där du kan luta dig tillbaka och ställa frågor
        om kaffe eller dela med dig av din egna kunskap!</p>


        *Bringing coffee drinkers together. Sharing knowledge while learning!*


        <h2> Populära taggar </h2>

        <?php foreach ($tags as $key => $value) : ?>
            <a href="<?= $this->url("question/tagged/$key") ?>" style="background:#1F9C70; color:white; text-decoration:none;  margin: 0 10px; display:inline-block; padding: 8px 10px 10px; border-radius: 4px; margin-bottom: 10px; font-family: 'Open Sans', sans-serif;">
                <img style="vertical-align: middle;"src="<?= $app->link("img/tag-black-shape.png") ?>">
                <?= "$key($value)" ?>
        </a>

        <?php endforeach; ?>



        <img src="<?= $app->link("img/cookie.png") ?>" style="float:left;">
        <img src="<?= $app->link("img/coffee-beans.png") ?>" style="float:right;">

        <div style="margin:auto; text-align:center; position: relative;">

            <i id="down" style="color:white; font-size:80px; cursor:pointer;" class="material-icons">&#xE313;</i>
        </div>
    </div>
</div>
