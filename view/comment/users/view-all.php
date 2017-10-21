<div>
    <div>
        <h1> Användare </h1>
    </div>
    <div style="color:black; width:100%; margin:auto; padding:15px; ">
        <?php foreach ($users as $user) : ?>
            <h1><a href="<?= $this->url("users/$user->name") ?>"> <?=$user->name ?> </a></h1>
            <img src="<?=$user->img ?>">
        <?php endforeach; ?>
    </div>
</div>
