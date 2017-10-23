<?php
$isActive = function ($route) use ($app) {
    return $route == $app->request->getRoute() ? "active" : "";
};

$isLogged = isset($_SESSION["user"]);
?>


<div class="header">

    <?php if ($isLogged) : ?>
        <nav id="navbar">
            <a class="<?= $isActive("about") ?>" href="<?= $app->link('about') ?>">Om oss</a>
            <a class="<?= $isActive("users") ?>" href="<?= $app->link('users') ?>">Community</a>
            <a class="<?= $isActive("question") ?>" href="<?= $app->link('question') ?>">Frågor</a>

            <a class="<?= $isActive("") ?>" href="<?= $app->link('') ?>"><img src="<?= $app->link("img/logo.png") ?>"></a>

            <a class="<?= $isActive("user/login") ?>" href="<?= $app->link('tags') ?>">Tags</a>
            <a class="<?= $isActive("question/create") ?>" href="<?= $app->link('question/create') ?>">Ställ en fråga</a>
            <a class="<?= $isActive("user/profile") ?>" href="<?= $app->link('user/profile') ?>">Profil</a>
        <nav>
    <?php endif; ?>

    <?php if (!$isLogged) : ?>
        <nav id="navbar">
            <a class="<?= $isActive("about") ?>" href="<?= $app->link('about') ?>">Om oss</a>
            <a class="<?= $isActive("users") ?>" href="<?= $app->link('users') ?>">Community</a>
            <a class="<?= $isActive("question") ?>" href="<?= $app->link('question') ?>">Frågor</a>

            <a class="<?= $isActive("") ?>" href="<?= $app->link('') ?>"><img src="<?= $app->link("img/logo.png") ?>"></a>

            <a class="<?= $isActive("tags") ?>" href="<?= $app->link('tags') ?>">Tags</a>
            <a class="<?= $isActive("user/login") ?>" href="<?= $app->link('user/login') ?>">Login</a>
            <a class="<?= $isActive("user/create") ?>" href="<?= $app->link('user/create') ?>">Skapa konto</a>
        <nav>
    <?php endif; ?>

</div>


    <i id="up" style="color:white; top:0; display: inline-block;
line-height: 64px; position:absolute; right: 0;  display: none; cursor:pointer;" class="material-icons">&#xE316;</i>
