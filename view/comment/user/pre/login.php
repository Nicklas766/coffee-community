<div class="login-wrapper">
    <div class="login-widget" style="font-size:1em;">

        <h1 style="font-size:3em;"> Välkommen! </h1>

        <?= $form ?>

        <a href="<?= $this->url('user/reset')?>"> Glömt lösenordet? </a>
        <a href="<?= $this->url('user/create')?>"> Skapa konto </a>
    </div>
</div>
