<div class="container" style="background:#1F9C70;">

    <div class="text-container" style="text-align:center; background:#1F9C70;">
        <h1> Välkommen tillbaka! </h1>
        <img src="<?= $app->link("img/coffee-cup(1).png") ?>" style="height:64px;">
        <p> Det är bara att logga in och börja svara/fråga!</p>

        <!-- img style -->
    <img src="<?= $app->link("img/coffee-beans.png") ?>" style="float:left;">
    <img src="<?= $app->link("img/cookie.png") ?>" style="float:right;">

    <div style="margin:auto; width:60%;">
        <?= $form ?>
        </div>
        <a href="<?= $this->url('user/reset')?>"> Glömt lösenordet? </a>
        <a href="<?= $this->url('user/create')?>"> Skapa konto </a>
</div>
