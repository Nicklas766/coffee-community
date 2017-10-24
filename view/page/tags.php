<div class="container" style="background:#1F9C70; min-height:1000px;">




    <div class="text-container" style="text-align:center; background:#1F9C70; margin-top:50px;">
        <img src="<?= $app->link("img/coffee-bag2.png") ?>">
        <h1 style="font-family: 'Passion One', cursive;"> Våra tags </h1>
        <p> Kika runt om du hittar något som du är intresserad av </p>


        <!-- img style -->

    <img src="<?= $app->link("img/coffee-beans.png") ?>" style="float:left;">
    <img src="<?= $app->link("img/cookie.png") ?>" style="float:right;">

    <div style="margin:auto; width:60%;">
        <?php foreach ($tags as $key => $value) : ?>
            <a href="<?= $this->url("question/tagged/$key") ?>" style="background:#E96B2E; color:white; text-decoration:none;  margin: 0 10px; display:inline-block; padding: 8px 10px 10px; border-radius: 4px; margin-bottom: 10px; font-family: 'Open Sans', sans-serif;">
                <img style="vertical-align: middle;"src="<?= $app->link("img/tag-black-shape.png") ?>">
                <?= "$key($value)" ?>
        </a>
        <?php endforeach ; ?>
    </div>
</div>
</div>
