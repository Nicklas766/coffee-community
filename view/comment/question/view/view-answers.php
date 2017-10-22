<!-- Answer Section  -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <?php foreach ($answers as $answer) : ?>
        <div class="answer">

            <!-- Actual answer with score  -->
            <div class="avatar">
                <a href="<?= $this->url("users/$answer->user") ?>"  style="border-bottom:1px solid grey;">
                    <div style="width:100%; color:#272727; margin-bottom:5px;"><?= $answer->user ?></div>
                    <img src="<?=  $answer->img ?>">
                </a>
                <p>100 <img src="<?= $this->url("img/star.png") ?>"></p>
             </div>

             <div class="question-text">
                <?= $answer->markdown ?>


                <!-- Accepted answer or not  -->
                <?php if($answer->accepted == "yes") : ?>
                    <p>Im accepted</p>
                <?php else : ?>
                    <p class="acceptme">acceptme</p>
                    <input type="hidden" value="<?= $answer->id?>">
                <?php endif; ?>

            </div>

            <!-- Score stats -->
            <div class="question-sidebar">
                <div class="votes">
                    <!-- like or dislike -->
                    <i class="like material-icons">keyboard_arrow_up</i>

                    <?php if($answer->vote->score === null) : ?>
                        <h1>0</h1>
                    <?php endif; ?>
                    <?php if($answer->vote->score !== null) : ?>
                        <h1><?= $answer->vote->score ?></h1>
                    <?php endif; ?>


                    <i class="dislike material-icons">keyboard_arrow_down</i>
                    <input type="hidden" name="parentId" value="<?= $answer->id ?>">
                </div>
            </div>


            <div class="question-info">
                <span><?= count($answer->vote->likes) ?></span><i class="material-icons">thumbs_up_down</i>
                <?= count($answer->comments) ?><i class="material-icons">comment</i>
                <?= $answer->created ?>
            </div>


            <!-- Popup for dislikes-->
            <div class="popup">
                    <span class="popclose">X</span>
                    <div class="poptext">
                    <?php foreach ($answer->vote->likes as $like) : ?>

                        <?php if($like->upVote != null) : ?>
                            <p><?= $like->user ?> gillar denna fråga</p>
                        <?php endif; ?>

                        <?php if($like->downVote != null) : ?>
                            <p><?= $like->user ?> ogillar denna fråga</p>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <?php if($answer->vote->likes == null) : ?>
                        <h1>Ingen har röstat på frågan än</h1>
                    <?php endif; ?>
                </div>
        </div>



        <!--    Commments     -->
        <?php foreach ($answer->comments as $comment) : ?>
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
        <p class="kommentera"><i class="material-icons">comment</i>Kommentera</p>
        <form style="width:100%;" method="POST">
            <textarea></textarea>
            <input type="hidden" value="<?=$answer->id?>">
            <p class="send-comment">Skicka</p>
        </form>
    </div>
<?php endforeach; ?>
