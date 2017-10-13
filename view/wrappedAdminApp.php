<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <?php foreach ($stylesheets as $stylesheet) : ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= $this->asset($stylesheet) ?>">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">
    <script src="<?= $this->asset("js/jquery.js") ?>"></script>
    <?php endforeach; ?>
</head>
<body>




    <?php if ($this->regionHasContent("header")) : ?>
        <?php $this->renderRegion("header") ?>
    <?php endif; ?>

    <?php if ($this->regionHasContent("main")) : ?>
        <div class="container">
            <?php $this->renderRegion("main") ?>
        </div>
    <?php endif; ?>

    <?php if ($this->regionHasContent("login")) : ?>
        <?php $this->renderRegion("login") ?>
    <?php endif; ?>




<script src="<?= $this->asset("simplemde.min.js") ?>"></script>
<script>
    $('textarea').each(function() {
        var simplemde = new SimpleMDE({
            element: this,
            spellChecker: false
        });
        simplemde.render();
    })
</script>
<!-- javascript goes at end -->
<?php foreach ($javascripts as $javascript) : ?>
    <script src="<?= $this->asset($javascript) ?>"></script>
<?php endforeach; ?>

</body>
</html>
