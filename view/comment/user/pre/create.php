<div class="container" style="background:#1F9C70;">

    <div class="text-container" style="text-align:center; background:#1F9C70;">
        <h1> Joina vår community! </h1>
        <img src="<?= $app->link("img/coffee-cup(1).png") ?>" style="height:64px;">
        <p> Så du kan ställa frågor eller dela med dig!</p>

        <!-- img style -->
    <img src="<?= $app->link("img/coffee-beans.png") ?>" style="float:left;">
    <img src="<?= $app->link("img/cookie.png") ?>" style="float:right;">

    <div style="margin:auto; width:60%;">
        <?= $form ?>
        </div>
        <li><a style="color:white" href="<?= $this->url('user/login')?>"> Tillbaka till logga in </a></li>
</div>
