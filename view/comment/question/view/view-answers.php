<!-- Answer Section  -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<div style="width:50%; margin:auto;">
    <?php foreach ($answers as $answer) : ?>
        <div style="background:#FFF8DC;">
            <h1>
                <img src="<?=  $answer->img ?>">
                 <a href="<?= $this->url("users/$answer->user") ?>"> <?= $answer->user ?></a>
             </h1>
            <?= $answer->markdown ?>
        </div>

        <!-- Comments for answers  -->
        <?php foreach ($answer->comments as $comment) : ?>
            <div style="width:10%; display: inline-block;">
                <img style="height:20px;" src="<?= $comment->img ?>">
                <a href="<?= $this->url("users/$comment->user") ?>"> <?= $comment->user ?></a>
            </div>
            <div style="width:80%; display: inline-block;">
                <?= $comment->markdown?>
            </div>
        <?php endforeach; ?>




        <a id="clickme<?=$answer->id?>">Kommentera</a>

        <!-- COMMENT FORM for new comments -->
        <form id="<?=$answer->id?>"  method="POST">
            <textarea id="text<?=$answer->id?>" type="text" value =""></textarea>
            <input type="submit" value="Skicka">
        </form>
        <script>
        $(document).ready(function() {
            $("#<?=$answer->id?>").submit(function(e) {
                var url = "<?= $this->url("question/comment/$answer->id") ?>"; // the script where you handle the form input.
                $.ajax({
                       type: "POST",
                       url: url,
                       data: {text: $('#text<?=$answer->id?>').val()}, // serializes the form's elements.
                       success: function(data)
                       {
                        //    alert("Tack för din kommentar!"); // show response from the php script.
                       }
                     });
                e.preventDefault(); // avoid to execute the actual submit of the form.
                $.ajax({
                    url: "<?= $this->url("question/$answer->questionId") ?>",
                    cache: false,
                    success: function(content) {
                        $("body").html(content);
                    }
                });
            });
        });
        $( "#<?=$answer->id?>" ).hide();
        // Toggle show
        $( "#clickme<?=$answer->id?>" ).click(function() {
          $( "#<?=$answer->id?>" ).toggle( "slow", function() {
            // Animation complete.
          });
        });
        </script>



    <?php endforeach; ?>
