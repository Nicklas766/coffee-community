<div>
    <div>
        <h1> Senaste frågor </h1>
    </div>
    <div style="color:black; width:100%; margin:auto; padding:15px; ">
        <?php foreach ($questions as $question) : ?>
            <h1><img src="<?=  $question->img ?>"> <?=  $question->user ?>: </h1>

            <h1><a href="<?= $this->url("question/$question->id") ?>"><?=  $question->title ?></a></h1>

            <?php foreach ($question->tags as $tag) : ?>
                <a href="<?= $this->url("question/tagged/$tag") ?>"><?= $tag ?></a>
            <?php endforeach; ?>

        <?php endforeach; ?>
    </div>
</div>
