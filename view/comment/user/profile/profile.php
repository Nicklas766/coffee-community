<div class='profile-wrapper'>

            <i class="material-icons">person</i> <?= $user->authority ?>
            <img src="<?= $user->img ?>">
            <h1><?= $user->name ?> </h1>
            <p><?= $user->email ?> </p>


        <div class="avatar-commands">
            <a href="<?= $this->url('user/edit') ?>"><i class="material-icons">edit</i> </a>
            <a href="<?= $this->url('user/security') ?>"><i class="material-icons">lock</i> </a>
            <a href="<?= $this->url('user/logout') ?>"><i class="material-icons">power_settings_new</i></a>
        </div>
</div>
