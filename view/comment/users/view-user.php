<div style="min-height:700px; background:#E96B2E; overflow:auto;">
    <div style="display:flex; margin-top:24px;">



        <div style="width:50%; margin:auto; display:flex; flex-wrap: wrap; background:white; margin-bottom:100px; box-shadow: 1px 1px 3px 1px black;">
            <div style="width:100%; display:flex; justify-content: center; align-items: center; background:#272727; color:white;">
                <i class="material-icons">person</i>
                <h1> <?=$user->name ?> </h1>
            </div>
            <div style="width:50%; border-bottom:1px solid;">
                <h3> Profilsida</h3>
                <img src="<?=$user->img ?>">
                <li><?= $user->reputation ?> <img src="<?= $this->url("img/star.png") ?>"></li>
            </div>


            <div style="width:50%; border-bottom:1px solid;">
                <h3> Community-stats <img src="<?= $app->link("img/team2.png") ?>"></h3>
                <li> Inlägg: <?=$user->postAmount ?> </li>

                <li>Frågor: <?= count($user->questions) ?></li>
                <li>Svar:  <?= count($user->posts) ?></li>
                <li>Kommentarer:  <?= count($user->comments) ?></li>
                <li>Befogenhet:  <?= $user->authority ?></li>
            </div>
            <div style="width:50%; border-bottom:1px solid; color:black;">
                <h3><?=$user->name ?> har ställt dessa frågor</h3>
                <?php foreach ($user->questions as $question) : ?>
                    <a href="<?= $this->url("question/$question->id") ?>"><?= $question->title ?></a>
                <?php endforeach; ?>
            </div>
            <div style="width:50%; border-bottom:1px solid;">
                <h3><?=$user->name ?> har svarat på dessa frågor<i class="material-icons">question_answer</i></h3>
                <?php foreach ($user->answeredQuestions as $question) : ?>
                    <a href="<?= $this->url("question/$question->id") ?>"><?= $question->title ?></a>
                <?php endforeach; ?>
        </div>

        <div style="width:50%">
                <h3><i class="dislike material-icons">comment</i> Användarens kommentarer</h3>
                <?php foreach ($user->comments as $comment) : ?>
                    <?= $comment->markdown ?>
                <?php endforeach; ?>
        </div>
        <div style="width:50%">
            <h3>Användarens röst historik <i class="material-icons">thumbs_up_down</i></h3>
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
