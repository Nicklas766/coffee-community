<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>

    <?php foreach ($stylesheets as $stylesheet) : ?>
    <link rel="stylesheet" type="text/css" href="<?= $this->asset($stylesheet) ?>">
    <?php endforeach; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="<?= $this->asset("css/simplemde.min.css") ?>" rel="stylesheet">
    <script src="<?= $this->asset("js/jquery.min.js") ?>"></script>


</head>
<body>



<div class="wrap-container">
    <?php if ($this->regionHasContent("header")) : ?>
        <?php $this->renderRegion("header") ?>
    <?php endif; ?>

    <div style="min-height:800px;">
    <?php if ($this->regionHasContent("main")) : ?>
        <?php $this->renderRegion("main") ?>
    <?php endif; ?>
    </div>

    <?php if ($this->regionHasContent("footer")) : ?>
        <?php $this->renderRegion("footer") ?>
    <?php endif; ?>
</div>


<!-- javascript goes at end -->
<?php foreach ($javascripts as $javascript) : ?>
    <script src="<?= $this->asset($javascript) ?>"></script>
<?php endforeach; ?>

<script src="<?= $this->asset("js/simplemde.min.js") ?>"></script>
<script>
    $('textarea').each(function() {
        simplemde = new SimpleMDE({
            element: this,
            spellChecker: false
        });
        simplemde.render();
    })
</script>
</body>
</html>
