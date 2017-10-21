<!-- Answer Section  -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<div style="width:50%; margin:auto;">
    <?php foreach ($answers as $answer) : ?>
        <div class="answer" style="background:#FFF8DC;">

            <!-- Actual answer with score  -->
            <h1>
                <img src="<?=  $answer->img ?>">
                 <a href="<?= $this->url("users/$answer->user") ?>"> <?= $answer->user ?></a>
             </h1>
            <?= $answer->markdown ?>

            <!-- Score stats -->
            <h1>score:<?= $answer->vote->score ?></h1>
            <?php foreach ($answer->vote->likes as $like) : ?>
                <?= $like->user?>

                <?php if($like->upVote) : ?>
                    <p>Liked it!</p>
                <?php else : ?>
                    <p>Disliked it!</p>
                <?php endif; ?>

                <?php endforeach; ?>

            <!-- like or dislike -->
            <p class="like">Gilla</p>
            <p class="dislike">Ogilla</p>
            <input type="hidden" name="parentType" value="post">
            <input type="hidden" name="parentId" value="<?= $answer->id ?>">


            <!-- Accepted answer or not  -->
            <?php if($answer->accepted == "yes") : ?>
                <p>Im accepted</p>
            <?php else : ?>
                <p class="acceptme">acceptme</p>
                <input type="hidden" value="<?= $answer->id?>">
            <?php endif; ?>



            <!--    Commments     -->
            <?php foreach ($answer->comments as $comment) : ?>
                <div style="width:10%; background:white;display: inline-block;">
                    <img style="height:20px;" src="<?= $comment->img ?>">
                    <a href="<?= $this->url("users/$comment->user") ?>"> <?= $comment->user ?></a>
                </div>

                <!-- Actual comment with score  -->
                <div class="comment" style="width:80%; display: inline-block;">
                    <?= $comment->markdown?>
                    <p>score:<?= $comment->vote->score ?></p>

                    <!-- like or dislike -->
                    <p class="like">Gilla</p>
                    <p class="dislike">Ogilla</p>
                    <input type="hidden" name="parentType" value="comment">
                    <input type="hidden" name="parentId" value="<?= $comment->id ?>">
                </div>
            <?php endforeach; ?>



        <!--    Make comment form     -->
        <p class="kommentera">Kommentera</p>
        <form method="POST">
            <textarea></textarea>
            <input type="hidden" value="<?=$answer->id?>">
            <p>Skicka</p>
        </form>
    </div>
<?php endforeach; ?>

</div>


<!-- JAVASCRIPT FOR ALL AJAX CALLS -->

<script type='text/javascript'>

    // Get needed urls
    var currentUrl  = "<?= $this->currentUrl() . "?" . $_SERVER['QUERY_STRING']?>";
    var acceptUrl   = "<?= $this->url("question/accept")?>";
    var commentUrl  = "<?= $this->url("question/comment")?>";
    var voteUrl     = "<?= $this->url("question/vote")?>";


$(document).ready(function() {

    // Add click event for each answer
    $( ".answer" ).each(function() {

        // Hide forms, and add click to show forms
        $(this).children("form").hide();
        $(this).children(".kommentera").click(function() {
            $(this).next().toggle("slow", function() {
              // Animation complete.
            });
        });

        // Post comment
        var id = $(this).children("form").children(":nth-child(2)").val();

        $(this).children("form").children(":nth-child(3)").on("click", function(){
            var text = $(this).prev().prev().val();
            var url = commentUrl + "/" + id; // the script where you handle the form input.
            if (text == "") {
                return true;
            }
            ajaxPost(url, {text: text});
            console.log(id);
            console.log(text);
        });

        // Accept answer
        $(this).children(".acceptme").on("click", function(){
            id = $(this).next().val();
            url = acceptUrl + "/" + id;
            ajaxPost(url, {});
        });

        // Up vote Answer
        $(this).children(".like").on("click", function() {
            var parentType = $(this).next().next().val();
            var parentId = $(this).next().next().next().val();
            console.log("iwasclicked");
                ajaxPost(voteUrl, {parentType: parentType, parentId: parentId, upVote: 1});
            });

        // Down vote Answer
        $(this).children(".dislike").on("click", function() {
            var parentType = $(this).next().val();
            var parentId = $(this).next().next().val();
            console.log("iwasclicked");
            ajaxPost(voteUrl, {parentType: parentType, parentId: parentId, downVote: 1});
        });
});

    // Add up vote events on each comment
    $( ".comment" ).each(function() {
        // Up vote Answer
        $(this).children(".like").on("click", function() {
            var parentType = $(this).next().next().val();
            var parentId = $(this).next().next().next().val();
                ajaxPost(voteUrl, {parentType: parentType, parentId: parentId, upVote: 1});
            });

        // Down vote Answer
        $(this).children(".dislike").on("click", function() {
            var parentType = $(this).next().val();
            var parentId = $(this).next().next().val();
            console.log("iwasclicked");
            ajaxPost(voteUrl, {parentType: parentType, parentId: parentId, downVote: 1});
        });
    });



// --------------------------- Question
    // Up vote question
    $(".question").children(".like").on("click", function() {
        var parentType = $(this).next().next().val();
        var parentId = $(this).next().next().next().val();
        console.log("iwasclicked");
            ajaxPost(voteUrl, {parentType: parentType, parentId: parentId, upVote: 1});
        });

    // Down vote question
    $(".question").children(".dislike").on("click", function() {
        var parentType = $(this).next().val();
        var parentId = $(this).next().next().val();
        console.log("iwasclicked");
        ajaxPost(voteUrl, {parentType: parentType, parentId: parentId, downVote: 1});
    });

    // Post comment
    var id = $(".question").children("form").children(":nth-child(2)").val();

    $(".question").children("form").children(":nth-child(3)").on("click", function(){
        var text = $(this).prev().prev().val();
        var url = commentUrl + "/" + id; // the script where you handle the form input.
        if (text == "") {
            return true;
        }
        ajaxPost(url, {text: text});
        console.log(id);
        console.log(text);
    });

    // Hide forms, and add click to show forms
    $(".question").children("form").hide();
    $(".question").children(".kommentera").click(function() {
        $(this).next().toggle("slow", function() {
          // Animation complete.
        });
});


});
</script>
