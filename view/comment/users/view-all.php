<div>
    <div>
        <h1> Vår community </h1>
    </div>
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
