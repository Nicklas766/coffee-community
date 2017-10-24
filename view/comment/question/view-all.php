<div>
    <div>
        <h1> <?= $headerTitle ?> </h1>
    </div>




    <div style="width:50%; margin:auto;">
        <?php foreach ($questions as $question) : ?>
            <div class="question" style="width:100%;">
                <div class="avatar">
                    <h1><img src="<?=  $question->img ?>"> <?=  $question->user ?>: </h1>
                        </div>

                <div class="question-text" style="width: 60%;">
                    <h1><a href="<?= $this->url("question/$question->id") ?>"><?=  $question->title ?></a></h1>
                </div>

            <div style="width:10%; background:grey;">
            <h1><i class="material-icons">question_answer</i><?=  $question->answerCount ?></h1>

            <?php if ($question->question->vote->score === null) : ?>
                <h1><i class="material-icons">thumbs_up_down</i>0</h1>
            <?php endif; ?>
            <?php if ($question->question->vote->score !== null) : ?>
                <h1><i class="material-icons">thumbs_up_down</i><?= $question->question->vote->score ?></h1>
            <?php endif; ?>

            <h1><i class="material-icons">people</i><?= count($question->question->vote->likes) ?></h1>
            </div>

            <!-- tags -->
            <div style="width:15%; background:blue;">
                <img style="vertical-align: middle;"src="<?= $app->link("img/tag-black-shape.png") ?>">
            <?php foreach ($question->tags as $tag) : ?>
                <li><a href="<?= $this->url("question/tagged/$tag") ?>"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </div>
                </div>
        <?php endforeach; ?>


    </div>
</div>
