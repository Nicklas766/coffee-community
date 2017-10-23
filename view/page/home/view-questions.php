
<div class="container" style="text-align:center; font-size:16px; color:white; background:#D52A55;">

    <img src="<?= $app->link("img/team4.png") ?>" style="height:128px;">
    <h1 style="font-family: 'Passion One', cursive;"> Överblick av vår Community </h1>
    <p> Titta på de senaste frågorna eller våra mest aktiva användare.</p>


<div class="text-container" style="width:45%;background:#D52A55; display:inline-block;">

    <h1 style="font-family: 'Passion One', cursive;"> Senaste frågor </h1>


        <?php foreach ($questions as $question) : ?>
            <div class="question-container" style="display:flex;">

                <div style="width:25%;">

                    <!-- User -->
                    <p><a href="<?= $this->url("users/$question->user") ?>">skapad av <?= $question->user ?></a></p>
                    <?= $question->created ?>
                    <?php foreach ($question->tags as $tag) : ?>
                        <a href="<?= $this->url("question/tagged/$tag") ?>"><?= $tag ?></a>

                    <?php endforeach; ?>
                </div>

                <!-- QQuestion-->
                <div class="question-text" style="width:50%; min-height:100%;">
                    <p><a href="<?= $this->url("question/$question->id") ?>"><?= $question->title ?></a></p>
                </div>

             <!-- INFO -->
                <div style="width:10%; color:#D52A55;">
                    <h1><i class="material-icons">question_answer</i><?=  $question->answerCount ?></h1>
                </div>
                <div style="width:10%; color:#D52A55;">
                    <?php if ($question->question->vote->score === null) : ?>
                        <h1><i class="material-icons">thumbs_up_down</i>0</h1>
                    <?php endif; ?>
                    <?php if ($question->question->vote->score !== null) : ?>
                        <h1><i class="material-icons">thumbs_up_down</i><?= $question->question->vote->score ?></h1>
                    <?php endif; ?>
                </div>
                <div style="width:10%; color:#D52A55;">
                    <h1><i class="material-icons">people</i><?= count($question->question->vote->likes) ?></h1>
                </div>

            </div>
        <?php endforeach; ?>
        </div>


<div class="text-container" style="width:45%;background:#D52A55; display:inline-block;">

        <h1 style="font-family: 'Passion One', cursive;"> Heder användare </h1>
            <?php foreach ($users as $user) : ?>

                <a class="users-container" href="<?= $this->url("users/$user->name") ?>">
                    <img src="<?=  $user->img ?>" style="border-radius:100%;">
                        <p><?= $user->name?> </p>
                        <p>inlägg:<?= $user->postAmount?></p>
                </a>
            <?php endforeach; ?>


</div>
</div>
