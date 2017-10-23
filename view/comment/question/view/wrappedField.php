<script>

function ajaxSoftPost(url, data) {
    $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function(data){
                // console.log(data);
                $.ajax({
                        type: "GET",
                        url: currentUrl,
                        success: function(res) {
                            $('.question .question-sidebar h1').replaceWith($(res).find('.question .question-sidebar h1'));
                            for (i = 0; i < $('.answer .question-sidebar h1').length; i++) {
                                $('.answer .question-sidebar h1')[i].replaceWith($(res).find('.answer .question-sidebar h1')[i]);
                            }
                            for (i = 0; i < $('.popup').length; i++) {
                                $('.popup')[i].replaceWith($(res).find('.popup')[i]);
                            }
                            for (i = 0; i < $('.avatar p').length; i++) {
                                $('.avatar p')[i].replaceWith($(res).find('.avatar p')[i]);
                            }
                            for (i = 0; i < $('.comment-vote h3').length; i++) {
                                $('.comment-vote h3')[i].replaceWith($(res).find('.comment-vote h3')[i]);
                            }
                            for (i = 0; i < $('.question-info span').length; i++) {
                                $('.question-info span')[i].replaceWith($(res).find('.question-info span')[i]);
                            }
                            for (i = 0; i < $('.question-info div:nth-child(4)').length; i++) {
                                $('.question-info div:nth-child(4)')[i].replaceWith($(res).find('.question-info div:nth-child(4)')[i]);
                            }
                    }
                });
            }
        });
    }

function ajaxPost(url, data) {
    $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function(data){
                // console.log(data);
                $.ajax({
                        type: "GET",
                        url: currentUrl,
                        success: function(res) {
                            $('body').html(res);
                    }
                });
            }
        });
    }
</script>



<div class="question-wrapper" style="background:#D52A55; overflow:auto;">

    <?php if ($this->regionHasContent("question")) : ?>
        <?php $this->renderRegion("question") ?>
    <?php endif; ?>

    <div style="background:#1F9C70; overflow:auto; color:white;">
        <?php if ($this->regionHasContent("answer")) : ?>
                <?php $this->renderRegion("answer") ?>
        <?php endif; ?>


    <?php if ($this->regionHasContent("form")) : ?>
        <?php $this->renderRegion("form") ?>
    <?php endif; ?>
    </div>
</div>




<!-- JAVASCRIPT FOR ALL AJAX CALLS -->

<script type='text/javascript'>

    // Get needed urls
    var currentUrl  = "<?= $this->currentUrl() . "?" . $_SERVER['QUERY_STRING']?>";
    var acceptUrl   = "<?= $this->url("question/accept")?>";
    var commentUrl  = "<?= $this->url("question/comment")?>";
    var voteUrl     = "<?= $this->url("question/vote")?>";


$(document).ready(function() {



    // Up and down vote for answers and questions
    $(".votes").children(".like").click(function() {
        var parentId = $(this).next().next().next().val();
            ajaxSoftPost(voteUrl, {parentType: "post", parentId: parentId, upVote: 1});
        });

    $(".votes").children(".dislike").click(function() {
        var parentId = $(this).next().val();
            ajaxSoftPost(voteUrl, {parentType: "post", parentId: parentId, downVote: 1});
        });

    // Up and down vote for comments
    $(".comment-vote").children(".like").click(function() {
        console.log("iwasclicked");
        var parentId = $(this).next().next().val();
                console.log(parentId);
            ajaxSoftPost(voteUrl, {parentType: "comment", parentId: parentId, upVote: 1});
        });

    // Up and down vote for comments
    $(".comment-vote").children(".dislike").click(function() {
        console.log("iwasclicked");
        var parentId = $(this).next().val();
            console.log(parentId);
            ajaxSoftPost(voteUrl, {parentType: "comment", parentId: parentId, downVote: 1});
        });



    // Post a comment
    $(".send-comment").click(function() {
        console.log("iwasclicked");
        var id = $(this).prev().val();
        var text =  $(this).prevAll('textarea').nextAll()[1].innerText;

        var url = commentUrl + "/" + id; // the script where you handle the form input.
        if (text == "") {
            return true;
        }
        ajaxPost(url, {text: text});
        console.log(id);
        console.log(text);
    });

    // Accept an answer
    $(".acceptme").on("click", function(){
        id = $(this).next().val();
        url = acceptUrl + "/" + id;
        ajaxSoftPost(url, {});
    });



    // Hide forms except last, and add click to show forms
    $("form:not(:last)").hide();

    // Show comment form
    $(".question-info div:nth-child(1)").click(function() {
        $(this).parent().parent().children("form").toggle("slow", function() {
              // Animation complete.
        });
    });
    // Show popup
    $(".question-info div:nth-child(2)").click(function(){
        console.log("yay me");
        var popup = $(this).parent().next('.popup');
        popup.css("display","block");

       popup.children(".popclose").click(function() {
            popup.css("display","none");
        });
    });
    // toggle comments
    $(".question-info div:nth-child(3)").click(function() {
        $(this).parent().parent().children(".comment").animate({height: 'toggle'});
    });






});
</script>
