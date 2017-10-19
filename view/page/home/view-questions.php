
<div class="container" style="text-align:center; font-size:16px; color:white; background:#D52A55;">

    <img src="<?= $app->link("img/team.png") ?>" style="height:128px;">
    <h1 style="font-family: 'Passion One', cursive;"> Överblick av vår Community </h1>
    <p> Titta på de senaste frågorna eller våra mest aktiva användare.</p>


<div class="text-container" style="width:45%;background:#D52A55; display:inline-block;">

    <h1 style="font-family: 'Passion One', cursive;"> Senaste frågor </h1>


        <?php foreach ($questions as $question) : ?>
            <div class="question-container">

                <div class="question-tags">
                    <p><a href="<?= $this->url("users/$question->user") ?>">skapad av <?= $question->user ?></a></p>
                    <?php foreach ($question->tags as $tag) : ?>
                        <a href="<?= $this->url("question/tagged/$tag") ?>"><?= $tag ?></a>
                    <?php endforeach; ?>
                </div>

                <div style="width:60%; display:inline-block;">
                    <p><a href="<?= $this->url("question/$question->id") ?>"><?= $question->title ?></a></p>
                </div>


            </div>
        <?php endforeach; ?>
        </div>


<div class="text-container" style="width:45%;background:#D52A55; display:inline-block;">

        <h1 style="font-family: 'Passion One', cursive;"> Heder användare </h1>
            <?php foreach ($questions as $question) : ?>

                <a class="users-container" href="<?= $this->url("users/$question->user") ?>">
                    <img src="<?=  $question->img ?>" style="border-radius:100%;">
                        <p><?= $question->user?></p>
                        <p>posts: 100</p>
                </a>
            <?php endforeach; ?>


</div>
</div>
