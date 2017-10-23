<!-- Question section  -->
<div class="question">
    <!-- Text for question  -->
    <div class="question-title">
        <h1 style="margin-left:20%; width:60%"><?=  $question->title ?></h1>
        <div class="title-img">
            <img src="<?= $app->link("img/question.png") ?>">
        </div>
    </div>

        <div class="avatar">
        <a href="<?= $this->url("users/$question->user") ?>"  style="border-bottom:1px solid grey;">
            <div style="width:100%; color:#272727; margin-bottom:5px;"><?= $question->user ?></div>
            <img src="<?=  $question->question->img ?>">
        </a>
            <p>100 <img src="<?= $this->url("img/star.png") ?>"></p>
        </div>

        <div class="question-text">
            <?= $question->question->markdown ?>
        </div>


        <div class="question-sidebar">
            <div class="votes">
                <!-- like or dislike -->
                <i class="like material-icons">keyboard_arrow_up</i>
                <?php if($question->question->vote->score === null) : ?>
                    <h1>0</h1>
                <?php endif; ?>
                <?php if($question->question->vote->score !== null) : ?>
                    <h1><?= $question->question->vote->score ?></h1>
                <?php endif; ?>
                <i class="dislike material-icons">keyboard_arrow_down</i>
                <input type="hidden" name="parentId" value="<?= $question->question->id ?>">
            </div>
        </div>

        <!-- Info for the question, comments, tags, likes -->
        <div class="question-info" style="display:flex; justify-content:center; align-items:center;">
            <div style="width:20%;">
                <p class="kommentera">Kommentera</p>
            </div>
            <div style="margin-left: 50%; width:10%;">
                <?= count($question->question->vote->likes) ?></span><i class="like material-icons">thumbs_up_down</i>
            </div>
            <div style="width:10%;">
                <?= count($question->question->comments) ?><i class="dislike material-icons">comment</i>
            </div>

            <div style="width:10%;">
            <!-- Tags for question  -->
            <?php foreach ($question->tags as $tag) : ?>
                <a href="<?= $this->url("question/tagged/$tag") ?>"><?= $tag ?></a>
            <?php endforeach; ?>
            </div>
        </div>

        <!-- Popup for dislikes-->
        <div class="popup">
                <span class="popclose">X</span>
                <div class="poptext">

                <?php foreach ($question->question->vote->likes as $like) : ?>

                    <?php if($like->upVote != null) : ?>
                        <p><?= $like->user ?> gillar denna fråga</p>
                    <?php endif; ?>

                    <?php if($like->downVote != null) : ?>
                        <p><?= $like->user ?> ogillar denna fråga</p>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php if($question->question->vote->likes == null) : ?>
                    <h1>Ingen har röstat på frågan än</h1>
                <?php endif; ?>
                </div>

    </div>




    <!--    Commments     -->
    <?php foreach ($question->question->comments as $comment) : ?>
        <div class="comment">
            <div style="width:10%; text-align: left;">
                <img style="height:60px;" src="<?= $comment->img ?>">
                <a href="<?= $this->url("users/$comment->user") ?>"> <?= $comment->user ?></a>
            </div>

            <div style="width:70%; text-align: left;">
                <?= $comment->markdown?>
            </div>

            <div class="comment-vote" style="width:20%; display:flex; justify-content:center;">
                <h3><?= $comment->vote->score ?></h3>
                <!-- like or dislike -->
                <i class="like material-icons">thumb_up</i>
                <i class="dislike material-icons">thumb_down</i>
                <input type="hidden" name="parentId" value="<?= $comment->id ?>">
            </div>
        </div>
    <?php endforeach; ?>



    <!--    Make comment form     -->
    <!-- <p class="kommentera"><i class="material-icons">comment</i>Kommentera</p> -->
    <form style="width:100%" method="POST">
        <textarea></textarea>
        <input type="hidden" value="<?=$question->question->id?>">
        <p class="send-comment">Skicka</p>
    </form>
</div>

<div class="sort-answers">
    <p>Sortering</p>
    <a href="<?= $this->url("question/$question->id/date")   . "?" . $_SERVER['QUERY_STRING'] ?>">Datum</a>
    <a href="<?= $this->url("question/$question->id/points") . "?" . $_SERVER['QUERY_STRING'] ?>">Poäng</a>
    <a href="<?= $this->url("question/$question->id/vote")   . "?" . $_SERVER['QUERY_STRING'] ?>">Röster</a>

    <a href="<?= $this->url($this->currentUrl()) ?>?order=up"><i class="material-icons">arrow_upward</i></a>
    <a href="<?= $this->url($this->currentUrl()) ?>?order=down"><i class="material-icons">arrow_downward</i></a>
</div>
