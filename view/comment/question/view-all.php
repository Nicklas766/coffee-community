<div>
    <div>
        <h1> Senaste frågor </h1>
    </div>



    <div>
        <?php foreach ($questions as $question) : ?>
            <h1><img src="<?=  $question->img ?>"> <?=  $question->user ?>: </h1>

            <h1><a href="<?= $this->url("question/$question->id") ?>"><?=  $question->title ?></a></h1>

            <h1>Svar:<?=  $question->answerCount ?></h1>
            <h1>Poäng:<?= $question->question->vote->score ?></h1>
            <h1>Röster:<?= count($question->question->vote->likes) ?></h1>

            <!-- tags -->
            <?php foreach ($question->tags as $tag) : ?>
                <a href="<?= $this->url("question/tagged/$tag") ?>"><?= $tag ?></a>
            <?php endforeach; ?>

        <?php endforeach; ?>
    </div>
</div>
