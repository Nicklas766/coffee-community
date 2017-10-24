<div style="min-height:700px; margin-bottom: 100px;">

    <h1> Hej <?=$user->name ?>! </h1>
    <div style="width:50%; margin:auto; display:flex; flex-wrap: wrap; background:white; margin-bottom:100px; box-shadow: 1px 1px 3px 1px black;">
        <div style="width:100%; display:flex; justify-content: center; align-items: center; background:#272727; color:white;">
            <i class="material-icons">person</i>
            <h1> <?=$user->name ?> </h1>
        </div>
        <div style="width:50%; border-bottom:1px solid;">
            <h3> Profilsida</h3>
            <img src="<?=$user->img ?>">
            <li><?= $user->reputation ?> <img src="<?= $this->url("img/star.png") ?>"></li>
            <li><?= $user->acceptedAnswers ?> <img src="<?= $this->url("img/checked.png") ?>" style="height:16px;"></li>
        </div>
        <div style="width:50%; border-bottom:1px solid;">

<?= $form ?>
    </div>
                <div style="display:flex; width:100%; background:grey;">
                    <a style="width:33.3%; color:white;" href="<?= $this->url('user/edit') ?>"><i style="font-size:40px;" class="material-icons">edit</i> </a>
                    <a style="width:33.3%; color:white;" href="<?= $this->url('user/security') ?>"><i style="font-size:40px;" class="material-icons">lock</i> </a>
                    <a style="width:33.3%; color:white;" href="<?= $this->url('user/logout') ?>"><i style="font-size:40px;" class="material-icons">power_settings_new</i></a>
                </div>
            </div>
            </div>
</div>
