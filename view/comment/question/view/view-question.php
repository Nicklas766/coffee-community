<!-- Question section  -->
<div style="width:50%; margin:auto;">
    <!-- Text for question  -->
    <h1><?=  $question->title ?></h1>
    <div>
        <h1>
            <img src="<?=  $question->question->img ?>">
            <a href="<?= $this->url("users/$question->user") ?>"> <?= $question->user ?></a>
         </h1>
        <?= $question->question->markdown ?>
    </div>

    <!-- Tags for question  -->
    <?php foreach ($question->tags as $tag) : ?>
        <a href="<?= $this->url("question/tagged/$tag") ?>"><?= $tag ?></a>
    <?php endforeach; ?>

    <!-- Comments for question  -->
    <div style="background:white;">
        <?php foreach ($question->question->comments as $comment) : ?>
            <?= $comment->user . ":" . $comment->markdown?>
        <?php endforeach; ?>
    </div>
</div>
