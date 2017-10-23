<div>
    <div class="container" style="text-align:center; min-height:1000px; font-size:16px; color:white; background:#D52A55;">

        <img src="<?= $app->link("img/team3.png") ?>" style="height:128px;">
        <h1 style="font-family: 'Passion One', cursive;"> Vår Community </h1>
        <p> Nedan så ser du alla våra användare, kika på deras profiler! </p>
    <div style="width:30%; margin:auto;">
        <ul class="popular-list">
                <?php foreach ($users as $user) : ?>
                <li class='popular-item'>
                <div class='popular-rank'><?= $user->name ?></div>
                <ul class='space-list-items'>
                    <li>
                        <a href="<?= $this->url("users/$user->name")?>">
                        <img src="<?= $user->img?>" class='avatar-users'/>
                    </a>
                    </li>
                    <li>Inlägg:<?= $user->postAmount?></li>
                    <li><?= $user->reputation ?> <img src="<?= $this->url("img/star.png") ?>"></li>
                    <li>Reg: <?= strtok($user->created, " ") ?> </li>
                </ul>
            </li>
            <?php endforeach; ?>

        </ul>
    </div>
</div>
