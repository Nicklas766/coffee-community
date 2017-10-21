<div>
    <div style="color:black; width:100%; margin:auto; padding:15px; ">
            <h1> <?=$user->name ?> </h1>
            <img src="<?=$user->img ?>">
            <p> Utskick: <?=$user->postAmount ?> </p>

            <p> Poäng:   <?=$user->reputation ?> </p>

            <h1> Användarens aktiviterer</h1>

            <h3>Ställda frågor</h3>
            <?php foreach ($user->questions as $question) : ?>
                <a href="<?= $this->url("question/$question->id") ?>"><?= $question->title ?></a>
            <?php endforeach; ?>

            <h3>Gett svar till följande frågor</h3>
            <?php foreach ($user->answeredQuestions as $question) : ?>
                <a href="<?= $this->url("question/$question->id") ?>"><?= $question->title ?></a>
            <?php endforeach; ?>



            <h3>Senaste kommenterarer</h3>
            <?php foreach ($user->comments as $comment) : ?>
                <?= $comment->markdown ?>
            <?php endforeach; ?>

            <h3>Senaste votes</h3>
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
