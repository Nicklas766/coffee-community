<?php
$isActive = function ($route) use ($app) {
    return $route == $app->request->getRoute() ? "active" : "";
};

$isLogged = false;
?>


<div class="header">






    <?php if($isLogged) : ?>
        <nav id="navbar">
            <a class="<?= $isActive("") ?>" href="<?= $app->link('') ?>">Hem</a>
            <a class="<?= $isActive("services") ?>" href="<?= $app->link('services') ?>">Tjänster</a>
            <a class="<?= $isActive("about") ?>" href="<?= $app->link('about') ?>">Om oss</a>
            <a class="<?= $isActive("gallery") ?>" href="<?= $app->link('gallery') ?>"><i class="material-icons">whatshot</i></a>
            <a class="<?= $isActive("contact") ?>" href="<?= $app->link('contact') ?>"><i class="material-icons">person</i></a>
        <nav>
    <?php endif; ?>

    <?php if(!$isLogged) : ?>
        <nav id="navbar">
            <a class="<?= $isActive("d") ?>" href="<?= $app->link('') ?>">Hem</a>
            <a class="<?= $isActive("about") ?>" href="<?= $app->link('about') ?>">Om oss</a>

            <a class="<?= $isActive("") ?>" href="<?= $app->link('') ?>"><img src="<?= $app->link("img/logo.png") ?>"></a>

            <a class="<?= $isActive("user/login") ?>" href="<?= $app->link('user/login') ?>">Login</a>
            <a class="<?= $isActive("contact") ?>" href="<?= $app->link('user/create') ?>">Skapa konto</a>
        <nav>
    <?php endif; ?>




</div>
