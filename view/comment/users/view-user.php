<div style="min-height:700px; background:#E96B2E; overflow:auto;">
    <div style="display:flex; margin-top:24px;">

        <div style="width:10%; margin-left:20%; background:white;">
            <h1> <?=$user->name ?> </h1>
            <img src="<?=$user->img ?>">
            <li><?= $user->reputation ?> <img src="<?= $this->url("img/star.png") ?>"></li>
            <li> Inlägg: <?=$user->postAmount ?> </li>

            <li>Frågor: <?= count($user->questions) ?></li>
            <li>Svar:  <?= count($user->posts) ?></li>
            <li>Kommentarer:  <?= count($user->comments) ?></li>
        </div>


        <div style="width:50%; display:flex; flex-wrap: wrap; background:white;">
        <h1 style="width:100%;"> Användarens aktiviterer</h1>

        <div style="width:50%">
            <h3>Ställda frågor</h3>
            <?php foreach ($user->questions as $question) : ?>
                <a href="<?= $this->url("question/$question->id") ?>"><?= $question->title ?></a>
            <?php endforeach; ?>
        </div>

        <div style="width:50%">
            <h3>Svar till följande frågor</h3>
            <?php foreach ($user->answeredQuestions as $question) : ?>
                <a href="<?= $this->url("question/$question->id") ?>"><?= $question->title ?></a>
            <?php endforeach; ?>

    </div>


    <div style="width:50%">
            <h3>Kommentarer</h3>
            <?php foreach ($user->comments as $comment) : ?>
                <?= $comment->markdown ?>
            <?php endforeach; ?>
    </div>

        <div style="width:50%">
            <h3>Röstningar</h3>
            <?php foreach ($user->votes->likes as $vote) : ?>

                <?php if($vote->upVote != null) : ?>
                    <li><?=$user->name ?> gillade en <?= $vote->parentType ?></li>
                <?php endif; ?>

                <?php if($vote->downVote != null) : ?>
                    <li><?=$user->name ?> ogillade en <?= $vote->parentType ?></li>
                <?php endif; ?>

            <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>
