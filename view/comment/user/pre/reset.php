<div class="container" style="background:#1F9C70; min-height:800px;">

    <div class="text-container" style="text-align:center; background:#1F9C70;">

        <h2> <i style="font-size:50px;" class="material-icons">lock</i> </h2>
        <p> Ange din kontrollfråga för att återställa lösenordet. </p>

        <!-- img style -->
    <img src="<?= $app->link("img/coffee-beans.png") ?>" style="float:left;">
    <img src="<?= $app->link("img/cookie.png") ?>" style="float:right;">

    <div style="margin:auto; width:60%;">
        <?= $form ?>
        </div>

        <li><a style="color:white" href="<?= $this->url('user/login')?>"> Tillbaka till logga in </a></li>

</div>
