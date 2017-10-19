<div>
    <div>
        <h1> Användare </h1>
    </div>
    <div style="color:black; width:100%; margin:auto; padding:15px; ">
        <?php foreach ($users as $user) : ?>
            <h1> <?=$user->name ?> </h1>
        <?php endforeach; ?>
    </div>
</div>
